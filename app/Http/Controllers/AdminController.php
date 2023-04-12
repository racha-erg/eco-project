<?php

namespace App\Http\Controllers;
use App\Models\product;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $products = DB::table('products')->paginate(10);
        //dd($products);
        //return view('admin.index')->with('products', $products);
       return view('dashboard')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'brand' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'description' => 'required',
    ]);

    $imageName = time().'.'.$request->image->extension();
    $imagePath = $request->image->storeAs('public/storage', $imageName);
   
    $product = new Product;
    $product->name = $request->name;
    $product->image = $imageName;
    $product->brand = $request->brand;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->description = $request->description;
    $product->save();
    
    return redirect()->route('admindash')->with('success', 'Le produit a été créé avec succès.');
}
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('admin.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
        ]);
    
        // Supprimer l'image précédente si une nouvelle image est soumise
        if ($request->hasFile('image')) {
            Storage::delete('public/storage/'.$product->image);
            $imageName = time().'.'.$request->image->extension();
            $imagePath = $request->image->storeAs('public/storage', $imageName);
            $product->image = $imageName;
        }
    
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->save();
    
        return redirect()->route('admindash')->with('success', 'Le produit a été mis à jour avec succès.');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = product::findOrFail($id);
        $product->delete();

        return redirect()->route('admindash')->with('success', 'Produit supprimé avec succès.');
    }
}
