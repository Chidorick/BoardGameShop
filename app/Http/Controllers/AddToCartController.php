<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Good;
use App\Models\CartItem;


class AddToCartController extends Controller
{
    public function addToCart(int $good_id)
    {
        return view('addtocart', ['card'=>Good::find($good_id)]);
    }

    public function addToCartCheck(Request $request)
    {
        $valid = $request->validate([
            'good_id' => 'required',
            'quantity' => 'required|min:1|max:99999'
        ]);
        $user_id = Auth::id();
        $good = Good::find($request->input('good_id'));
        if (CartItem::where('user_id',$user_id)
                        ->where('good_id',$good->id)
                        ->where('active',1)
                        ->exists())
        {
            $cartItem = DB::table('cart_items')->where('user_id', $user_id)
                ->where('good_id', $good->id)
                ->where('active', 1)
                ->first();
            DB::table('cart_items')->where('user_id', $user_id)
                ->where('good_id', $good->id)
                ->where('active', 1)
                ->update(['quantity' => $cartItem->quantity + $request->input('quantity')]);             
        } else {
            $cartItem = new CartItem;
            $cartItem->good_id = $good->id;
            $cartItem->user_id = $user_id;
            $cartItem->quantity = $request->input('quantity');
            $cartItem->price = $cartItem->quantity * $good->price;
            $cartItem->active = 1;
            $cartItem->save();
        }
        return redirect()->route('home')->with('succses',"Товар успешно добавлен в корзину");
    }
}

