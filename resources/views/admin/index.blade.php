{{-- @extends('layout.master')
@section('titre') Dashbord @endsection
@section('main')

<div class="container-fluid body-table-admin  body_centent  py-5">
  @if(session()->has('success'))
    <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif

    <header class="text-center text-white">
      <h1 class="display-4 titre "> Table de Produits</h1>
    </header>
    <div class="row py-5">
      <div class="col-lg-10 mx-auto">
        <div class="card rounded shadow border-0">
          <div class="card-body p-5 bg-white rounded">
            <div class="table-responsive">
                <div class="bg-light p-4 rounded">
                    <div class="lead py-3">
                        <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm fs-5 float-right">Ajouter produit</a>
                    </div>
              <table id="example" style="width:100%" class="table table-striped table-bordered">
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
                    <td><img src="{{ asset('images/products/'.$product->image.'.jpg') }}"  width="50" alt=""></td>
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
                    <td><a href="{{ route('products.create', $product->id) }}" class="btn btn-info btn-sm">Edit</a></td>
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
      </div>
    </div>
  </div>

@endsection --}}