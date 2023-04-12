<?php
namespace App\Repositories;

use Illuminate\Support\Facades\Session;

class PanierSessionRepository
{
    public function __construct()
    {
        // Initialize the cart in session if it does not exist
        if (!Session::has('panier')) {
            Session::put('panier', []);
        }
    }

    public function all()
    {
        return Session::get('panier');
    }

    public function add($product, $quantity)
    {
        $panier = $this->all();

        // If the product is already in the cart, increment the quantity
        if (isset($panier[$product->id])) {
            $panier[$product->id]['quantity'] += $quantity;
        } else {
            $panier[$product->id] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }

        Session::put('panier', $panier);
    }

    public function update($productId, $quantity)
    {
        $panier = $this->all();

        // If the product is in the cart, update the quantity
        if (isset($panier[$productId])) {
            $panier[$productId]['quantity'] = $quantity;
            Session::put('panier', $panier);
        }
    }

    public function remove($productId)
    {
        $panier = $this->all();

        // If the product is in the cart, remove it
        if (isset($panier[$productId])) {
            unset($panier[$productId]);
            Session::put('panier', $panier);
        }
    }

    public function clear()
    {
        Session::forget('panier');
    }
}
