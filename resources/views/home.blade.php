@extends('layout.master')
@section('titre') Clickbuy e-commerce @endsection
@section('main')
<div class="container-fluid back-row body_centent">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 text-center">
            <h1 class="slogan text-center">Achetez en toute simplicité<br> trouvez ce dont vous avez besoin</h1>
                <a href="{{route('products')}}" class="text-decoration-none fs-5 my-button my-5">Shop now</a>
        </div>
        <div class="col-1"></div>
    </div>
</div>
@endsection

