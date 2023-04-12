@extends('layout.master')
@section('titre') Produits @endsection
@section('main')

<div class="container body_centent my-3">
<div class="row">
    @foreach ($products as $product)
    <div class="card col-3 mx-3 my-3" style="width: 18rem;">
    <img src="{{ asset('storage/storage/'.$product->image) }}" class="card-img-top" onclick="redirectToProduct({{ $product->id }})">
    <div class="card-body">
      <h5 class="card-title product-title">{{$product->name}}</h5>
      <p class="card-text fw-bold fs-5">{{$product->price}} DH</p>
      <form method="POST" action="{{ route('panier.add', $product->id) }}" class="my-5">
        @csrf
        <input type="hidden" name="id" value="{{$product->id}}">
      <button class="btn btn-success rounded-pill">Ajouter au panier</button>
      </form>
    </div>
  </div>
@endforeach
</div>
<div class="container text-center">
    <div class="row">
      <div class="col-md-4 ml-3">
        {!! $products->links() !!}
      </div>
    </div>
  </div>

  <script>
    function redirectToProduct(productId) {
        window.location.href = "{{ route('product.detail', ':id') }}".replace(':id', productId);
    }
    </script>

</div>
@endsection