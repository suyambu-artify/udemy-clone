<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Cart;

class GlobalComposer {

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', Category::with('subcategory')->get());
        if(Auth::user()) {
            $view->with('cart', Cart::where('user_id', '=', Auth::user()->id)->first()->cartItems());
            $cart = Cart::where('user_id', '=', Auth::user()->id)->first();
            $view->with('cart', $cart);
        } else {
           $view->with('cart', false); 
        }
        
    }

}