<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        // //  if not admin show error
        // if(!auth()->user()->role == "admin"){
        //     return view('user.error')->with(['error_msg' => ""]);
        // }

        // if admin show users
        $users = User::paginate(10);
        return view('admin.users.index')->with(['users' => $users]);
    }

    // return create view
    public function create()
    {
        return view('admin.users.create');
    }

    // wil be used for user registration
    public function store(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
        'name' => 'required|max:100',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'role' => 'max: 20',
        'status' => '',
        'image' => '',
        'gender' => 'required|max:10',
        'address' => 'max:100'
        ]);

        if($validator->fails()){         
            $erorrs = ['message' => 'Validation error!',
                       'errors' => ['name' => $validator->errors()->get('name'),
                                    'email' => $validator->errors()->get('email'),
                                    'password' => $validator->errors()->get('password'),
                                    'role' => $validator->errors()->get('role'),
                                    'gender' => $validator->errors()->get('gender'),
                                    'address' => $validator->errors()->get('address')                    
                                    ]
                    ];     
            return redirect()->route('users.add')->withInput()->with(['errors' => $erorrs]);
        }

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request-> role;
        $user->gender = $request-> gender;
        $user->address = $request-> address;

        // if there is file in image field
        if($request->hasFile('image')) {
            $file = $request->file('image');

            $filename = time().'-'.uniqid().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('upload/users'), $filename);

            // save filename to database
            $user->image = $filename;
        }

        $user->save();

        return back()->with(['success_msg' => 'Created successfully']);
    }
// ------------------------------------------------------------------------------------------
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    // public function show(User $user)
    // {
    //     return view('admin.users.edit', compact('user'));
    // }
    
    //  to update user
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            // if requested email and user email same, no validation applied
            'email' => ($request->email != $user->email ? 'required|email|unique:users,email,':''),
            // if the password field is blank, no validation applied
            'password' => ($request->password!=''?'min:6|confirmed':''),
            'role' => 'max: 20',
            'status' => '',
            'image' => '',
            'gender' => 'required|max:10',
            'address' => 'max:100'
        ]);

        //  if validation fails
        if($validator->fails()){
            $erorrs = ['message' => 'Validation error!',
                       'errors' => ['name' => $validator->errors()->get('name'),
                                    'email' => $validator->errors()->get('email'),
                                    'password' => $validator->errors()->get('password'),
                                    'role' => $validator->errors()->get('role'),
                                    'gender' => $validator->errors()->get('gender'),
                                    'address' => $validator->errors()->get('address')                    
                                    ]
                    ];     
            return redirect()->route('users.edit', $user->id)->withInput()->with(['errors' => $erorrs]);
        }

        //  insert data ........
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request-> role;
        $user->gender = $request-> gender;
        $user->address = $request-> address;

        // if there is password & not blank then insert password
        if($request->has('password') && !empty($request->password)) {
            $user->password = bcrypt($request->password);
        }


        //  if there is image
        if($request->hasFile('image')) {

            // remove image
            $this->removeImage($user);

            $file = $request->file('image');

            $filename = time().'-'.uniqid().'.'.$file->getClientOriginalExtension();

            $file->move(public_path('upload/users'), $filename);

            $user->image = $filename;
        }

        $user->save();

        session()->flash('success_msg' , 'Updated successfully');

        return back();

    }

    public function destroy(User $user)
    {
        // remove image
        $this->removeImage($user);
        $user->delete();
        
        return redirect()->route('users.index')->with("success_msg", 'Deleted successfully');
    }
    
    private function removeImage($user)
    {
        if($user->image != "" && \File::exists('upload/users/' . $user->image)) {
            @unlink(public_path('upload/users/' . $user->image));
        }
    }
}