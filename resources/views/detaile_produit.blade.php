@extends('layout.master')
@section('titre') detail-du-produit @endsection
@section('main')

@if (session()->has('message'))
<div class="alert alert-info my-4">{{ session('message') }}</div>
@endif
<div class="container-fluid body_centent">
<div class="row bg-warning py-4"><h5 class="text-uppercase  text-center">accueil /@yield('titre')</h5> </div>
<div class="row ">
    <div class="col-6 " style="border-top: 8px solid #2D2492;">
        <img src="{{ asset('storage/storage/'.$product->image) }}" width="90%">
        <div class="d-flex justify-content-center ">
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" >
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" >
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" >
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" >
        </div>

    </div>
    <div class="col-6 px-0">
        <div class="div-titre" >
            <h2 class="text-light pt-2" style="margin-left: 27px;">{{$product->name}}</h2>
        </div>
        <h5 class="my-3">{{$product->description}}</h5>
        <h5>Couleur:</h5>
        {{-- ici je veux ecrire le code pour get les coler avec foreach --}}
        <div class="d-flex justify-content-center ">
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" class="border border-dark-5 mx-1" >
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" class="border border-dark-5 mx-1">
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" class="border border-dark-5 mx-1">
            <img src="{{ asset('storage/storage/'.$product->image) }}" width="85" class="border border-dark-5 mx-1">
        </div>
        <h5 class="my-3">Prix:</h5>
        <p><span class="fs-3 fw-bold px-3  ">{{$product->price}}</span> <span class="fs-5 text-muted text-decoration-line-through">{{$product->price + $product->price*25/100}}</span></p>
       
        <form method="POST" action="{{ route('panier.add', $product->id) }}" class="my-5">
            @csrf
            <label for="quantity"><h5>Quantity:</h5></label>
            <h6>seulement <span class="text-danger">{{$product->quantity}}</span> disponibles, ne le manquez pas!</h6>
            <div class="d-flex justify-content-center">
              <input type="hidden" name="id" value="{{$product->id}}">
              <input type="hidden" name="name" value="{{$product->name}}">
              <input type="hidden" name="price" value="{{$product->price}}">
              <input type="hidden" name="price" value="{{$product->image}}">
              {{-- <input type="hidden" name="quantity" id="quantity" value="4"> --}}
                <select name="quantity" id="quantity" class="form-select-sm">
              @for ($i = 1; $i <= 10; $i++)
                <option value="{{ $i }}">{{ $i }}</option>
              @endfor
            </select>
                 <button type="submit" class=" mx-3 btn btn-dark btn-lg">Ajouter au panier</button>
            <button type="button" class="btn-acheter" >Acheter</button>
            </div>
          </form>
          

          <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 32rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><h6><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg>  livraison gratuite</h6> entrez votre code postal pour la disponibilité de la livraison</li>
              <li class="list-group-item"><h6><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
              </svg>  retour de livraison</h6>retours gratuits sous 30 jours</li>
            </ul>
          </div>
                
    </div>
</div>
</div>
@endsection
