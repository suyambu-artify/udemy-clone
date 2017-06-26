<?php
 
namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
 
class CartController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function store(Request $request) {
 
        $cart = Cart::where('user_id',Auth::user()->id)->first();
 
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id = Auth::user()->id;
            $cart->save();
        }
 
        $cartItem = new CartItem();
        $cartItem->course_id = $request->id;
        $cartItem->cart_id = $cart->id;
        $cartItem->save();
 
        return back();
 
    }
 
    public function removeItem($id) {
        CartItem::destroy($id);
        return back();
    }

    public function purchase(Request $request)
    {
        $courseId = $request->id;
        $userId = Auth::user()->id;
        
    }
 
}