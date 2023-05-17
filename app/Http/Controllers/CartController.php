<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Good;
use App\Models\CartItem;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function getCartTable()
    {
        $user_id = Auth::id();
        $cartTableItems = DB::table('cart_items')
            ->join('goods', 'cart_items.good_id', '=', 'goods.id')
            ->select('goods.name as name', 'goods.img_path as img_path', 'goods.price as price', 'cart_items.quantity as quantity')
            ->where('cart_items.user_id', $user_id)
            ->where('cart_items.active', 1)
            ->get();
        return view('cart', ['cartTableItems'=>$cartTableItems]); 
    }
}