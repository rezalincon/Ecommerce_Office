<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Model\brand;
use App\Model\category;
use App\Model\product;
use App\Model\review;
use App\Model\size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\lessThanOrEqual;

class SearchController extends Controller
{
    public function searchResults(Request $request)
    {
        $search = $request->search;
        $category = $request->category;
        $categories = category::all();
        if (empty($category)){
            //$products = product::where('name','LIKE','%'.$search.'%')->paginate(12);
            $products = product::where('products.name','LIKE','%'.$search.'%')->paginate(12);

        }else if(empty($category) && empty($search)){
            $products = product::all();
        }else{
            $products = DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->where('products.name','LIKE','%'.$search.'%')
                ->where('categories.name',$category)
                ->select('products.name','products.price','products.id')->paginate(12);
        }
        return view('Frontend.product-list.products',compact('products','categories'));
    }


    public function filteredResult(Request $request)
    {
        $search = $request->search;
        $category = $request->category;
        $first = $request->first;
        $second = $request->second;

        if (empty($category)){
            $products = product::where('name','LIKE','%'.$search.'%')
                ->where('products.price','<=',$second)
                ->where('products.price','>=',$first)->get();

        }else if (empty($search) && empty($category)){
            $products = product::where('products.price','<',$second)
                                ->where('products.price','>',$first)->get();
        }else{
            $products = DB::table('products')
                ->join('categories','products.category_id','=','categories.id')
                ->where('products.name','LIKE','%'.$search.'%')
                ->where('categories.name',$category)
                ->where('products.price','<',$second)
                ->where('products.price','>',$first)->get();
        }

        return response()->json($products,200);

        /*  else if (empty($search)){
        $products = DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->where('categories.name',$category)
            ->where('products.price','<=',$second)
            ->where('products.price','>=',$first)->get();
    }*/
    }

    public function ajaxSearch(Request $request)
    {
        $products = product::where('name','LIKE','%'.$request->search.'%')->get();
        return response()->json($products, 200);
    }

    public function categoryProducts(Request $request)
    {
        $products = product::join('categories','products.category_id','categories.id')
                        ->where('categories.name','=',$request->category)
                        ->select('products.name','products.price','products.id','products.image')->get();
        return response()->json($products,200);
    }
}
