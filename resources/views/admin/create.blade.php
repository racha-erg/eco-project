@if (Auth::check() && Auth::user()->email == 'admin@gmail.com')
@extends('layout.Admindash')
@section('content')
    {{-- content --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4 my-3">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="card shadow-sm p-3 mb-5 bg-white rounded " style="width: 35rem;">
                        <h5 class="text-center display-4 titre ">Ajouter un produit</h5>
                        <form method="POST" enctype='multipart/form-data' action="{{ route('products.store') }}">
                        @csrf
                        <div class="form-group">
                            <br>
                            <div class="input-group">
                                <input type="text" name="name" required placeholder="name" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="file" accept="image/*" name="image" required placeholder="image" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="brand" required placeholder="brand" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="number" name="price" required placeholder="price" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="number" name="quantity" required placeholder="quantity" class="form-control">
                            </div>
                            <br>
                            <div class="input-group">
                                <input type="text" name="description" required placeholder="description" class="form-control">
                            </div>
                            <br>
                        <input type="submit" value="Ajouter" class="btn btn-primary form-control">
                        </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
                
            </div>
        </main>
    </div>
@endsection

@else
    
<x-app-layout>
</x-app-layout>
  
@endif