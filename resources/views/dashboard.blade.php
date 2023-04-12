{{-- @if (Auth::check() && Auth::user()->email == 'admin@gmail.com')
@extends('layout.Admindash')
@section('content') --}}
    {{-- content --}}
                   {{-- <div id="layoutSidenav_content">
                       <main>
                           <div class="container-fluid px-4 my-3">
                            @if(session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                            @endif
                               <h1 class="mt-4">Dashboard</h1>
                               <div class="card mb-4">
                                <div class="bg-light p-4 rounded">
                                    <div class="lead py-1">
                                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm fs-5 float-right">Ajouter produit</a>
                                    </div>
                                   <div class="card-header">
                                       <i class="fas fa-table me-1"></i>
                                       Table de Produits
                                   </div>
                                   <div class="card-body">
                                       <table id="datatablesSimple">
                                           <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Prix</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                              </tr>
                                           </thead>
                                           <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                            <td>{{$product->id}}</td>
                                            <td><img src="{{ asset('storage/storage/'.$product->image) }}" width="50" alt=""></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->brand}}</td>
                                            <td>{{$product->price}} dh</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->description}}</td>
                                            <td><form method="POST" action="{{ route('products.delete', $product->id) }}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                          </form></td>
                                            <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                       </table>
                                       <div class="container text-center">
                                        <div class="row">
                                          <div class="col-md-4 ml-3">
                                            {!! $products->links() !!}
                                          </div>
                                        </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                       </main>
                       <footer class="py-4 bg-light mt-auto">
                           <div class="container-fluid px-4">
                               <div class="d-flex align-items-center justify-content-between small">
                                   <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                   <div>
                                       <a href="#">Privacy Policy</a>
                                       &middot;
                                       <a href="#">Terms &amp; Conditions</a>
                                   </div>
                               </div>
                           </div>
                       </footer>
                   </div> --}}
{{-- @endsection

@else 
    
<x-app-layout>
  <h1>  Hi {{ Auth::user()->name }}!</h1>
</x-app-layout>
@endif --}}

@if (Auth::check() && Auth::user()->email == 'admin@gmail.com')
    @extends('layout.Admindash')
    @section('content') 
    {{-- content --}}
                    <div id="layoutSidenav_content">
                       <main>
                           <div class="container-fluid px-4 my-3">
                            @if(session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                            @endif
                               <h1 class="mt-4">Dashboard</h1>
                               <div class="card mb-4">
                                <div class="bg-light p-4 rounded">
                                    <div class="lead py-1">
                                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm fs-5 float-right">Ajouter produit</a>
                                    </div>
                                   <div class="card-header">
                                       <i class="fas fa-table me-1"></i>
                                       Table de Produits
                                   </div>
                                   <div class="card-body">
                                       <table id="datatablesSimple">
                                           <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Brand</th>
                                                <th>Prix</th>
                                                <th>Quantity</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                              </tr>
                                           </thead>
                                           <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                            <td>{{$product->id}}</td>
                                            <td><img src="{{ asset('storage/storage/'.$product->image) }}" width="50" alt=""></td>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->brand}}</td>
                                            <td>{{$product->price}} dh</td>
                                            <td>{{$product->quantity}}</td>
                                            <td>{{$product->description}}</td>
                                            <td><form method="POST" action="{{ route('products.delete', $product->id) }}">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                          </form></td>
                                            <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                       </table>
                                       <div class="container text-center">
                                        <div class="row">
                                          <div class="col-md-4 ml-3">
                                            {!! $products->links() !!}
                                          </div>
                                        </div>
                                      </div>
                                   </div>
                               </div>
                           </div>
                       </main>
                       <footer class="py-4 bg-light mt-auto">
                           <div class="container-fluid px-4">
                               <div class="d-flex align-items-center justify-content-between small">
                                   <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                   <div>
                                       <a href="#">Privacy Policy</a>
                                       &middot;
                                       <a href="#">Terms &amp; Conditions</a>
                                   </div>
                               </div>
                           </div>
                       </footer>
                   </div> 
 @endsection
@else 
    <x-app-layout> 
        <h1>  Hi {{ Auth::user()->name }}!</h1>
    </x-app-layout>
@endif



