<?php
use Illuminate\Http\Request;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\productController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isUser;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ContactUs;
use App\Mail\contactMail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[productController::class,'indexprand']);
Route::get('/clickbuy',[productController::class,'indexprand'])->name('accueil');
Route::get('clickbuy/contact', function () {
    return view('contact');
})->name('contact');
//commentaires
Route::get('clickbuy/about',[CommentaireController::class,'index'])->name('about');

Route::get('/clickbuy/produits',[productController::class,'index'])->name('products');
Route::get('/produit_detail/{product}', [productController::class, 'show'])->name('product.detail');

Route::get('/search',[ SearchController::class,'search'])->name('search');
// Route::get('/panier',[ CartController::class,'index'])->name('cart');
Route::post('/cart/add/{id}', [CartController::class,'add'])->name('cart.add');

// Les routes de gestion du panier
// Route::get('panier', [panierController::class,'show'])->name('panier.show');
// Route::post('panier/add/{product}',[panierController::class,'add'])->name('panier.add');
// Route::get('panier/remove/{product}', [panierController::class,'remove'])->name('panier.remove');
// Route::get('panier/empty', [panierController::class,'empty'])->name('panier.empty');

Route::get('/', [productController::class, 'index'])->name('produits.index');
Route::get('/produits/{produit}', [productController::class, 'show'])->name('produits.show');

Route::get('/panier', [PanierController::class, 'show'])->name('panier.show');
Route::post('panier/add/{produit}',[panierController::class,'add'])->name('panier.add');

Route::delete('/panier/remove/{rowId}', [PanierController::class, 'remove'])->name('panier.remove');
Route::get('/panier/empty', [PanierController::class, 'empty'])->name('panier.empty');
Route::post('/panier/store', [PanierController::class, 'store'])->name('panier3');
Route::get('/test',function(){
    return view('test');
})->name('test');

//admin routes
//Route::resource('admin',AdminController::class)->middleware(['auth','isAdmin']);

//user routes
Route::middleware(['auth', isUser::class])->group(function () {
    Route::resource('user', UserController::class);
});
//route de l'autentification
Route::get('/dashboard', function () {
    if((Auth::check() && Auth::user()->email == 'admin@gmail.com')){
        return redirect('/admin/dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//route group for admin
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admindash');
    Route::get('/admin/dashboard/create', [AdminController::class,'create'])->name('products.create');
    Route::post('/admin/dashboard/create', [AdminController::class,'store'])->name('products.store');
    Route::delete('/admin/dashbord/{id}', [AdminController::class,'delete'])->name('products.delete');
    Route::get('/admin/dashbord/{id}/edit',[AdminController::class,'edit'])->name('products.edit');
    Route::put('/admin/dashbord/{id}',[AdminController::class,'update'])->name('products.update');
 });

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//route page contact
Route::post('/clickbuy/contact', function(Request $request){
    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'telephone' => $request->input('telephone'),
        'message' => $request->input('message'),
    ];

    Mail::to('erreguyby.rachida@gmail.com')->send(new contactMail($data));
    return redirect()->back();
})->name('contact.send');

