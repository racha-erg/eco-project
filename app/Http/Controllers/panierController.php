<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Repositories\PanierSessionRepository;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PanierController extends Controller
{
    protected $panierRepository;

    public function __construct(PanierSessionRepository $panierRepository)
    {
        $this->panierRepository = $panierRepository;
    }

    public function show()
    {
        return view('panier.show');
    }

	public function add(Request $request, $id)
	{ //dd($request->id,$request->name,$request->price);

		$product = product::findOrFail($request->id);
		$quantity = request('quantity',1);
		// $duplicata=Cart::search(function($cartItem,$rowId) use ($request){
		// 	return $cartItem->id == $request->id;
		// });
	
		// if ($duplicata-> isNotempty()) {
		// 	return redirect()->route('panier.show')->with('error', 'La quantité deja ajoute.');
		// }
	
		Cart::add([
			'id' => $product->id,
			'name' => $product->name,
			'price' => $product->price,
			'qty' => $quantity,
			'image'=>$product->image,
		]);
	
		// Cart::add($request->id,$request->name,1,$request->price,$request->image)
		// ->associate('App\Models\product');
		
		return redirect()->route('panier.show',compact('product'))->with('success', 'Le produit a été ajouté au panier.');
	}
	


    public function remove($rowId)
    {
        // $this->panierRepository->remove($id);
		Cart::remove($rowId);

        return redirect()->route('panier.show')->with('message', 'Le produit a été retiré du panier.');
    }

    public function empty()
    {
        $this->panierRepository->empty();

        return redirect()->route('panier.show')->with('message', 'Le panier a été vidé.');
    }
	public function store(Request $request){
		dd($request->id,$request->name,$request->price);
		Cart::add([
			'id' => $request->id,
			'name' =>$request->name,
			'qty' =>1,	
			'price' => $request->price,
			
		])->associate('App\Models\product');
		return redirect()->route('panier.show')->with('success', 'Le produit a été ajouté au panier.');
	}
}
