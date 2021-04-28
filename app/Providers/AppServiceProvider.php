<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Model\wishlist;
use App\Model\CartShopping;
use App\Model\category;
use App\Model\contacts;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->wishlist_num = wishlist::all()->count();
        $this->cart_num = CartShopping::all()->count();
        $this->categories = category::with('sub_category')->get();
        $this->cartpage = CartShopping::with('product')->where('user_id',Auth::id())->where('status','0')->first();
        // dd($this->cartpage);

        View::composer('Frontend.layouts.master', function ($view) {
            $view->with('wishlist_num' , $this->wishlist_num);
            $view->with('cart_num' , $this->cart_num);
            $view->with('categories' , $this->categories);
            $view->with('cartpage' , $this->cartpage);

        });
    }
}
