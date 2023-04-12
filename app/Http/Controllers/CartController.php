<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
  public function add($id)
  {
    $product = Product::findOrFail($id);
    $quantity = request('quantity');

    Cart::add([
      'id' => $product->id,
      'name' => $product->name,
      'qty' => $quantity,
      'price' => $product->price,
    ]);

    return redirect()->route('product.detail');
  }
}

