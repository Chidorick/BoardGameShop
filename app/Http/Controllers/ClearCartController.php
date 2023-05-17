<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;

class ClearCartController extends Controller
{
    public function clearCart()
    {
        $user_id = Auth::id();
        CartItem::where('user_id', $user_id)->delete();

        return redirect()->route('home')->with('success', "Корзина успешно очищена");
    }
}