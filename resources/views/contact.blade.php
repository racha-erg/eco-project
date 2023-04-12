@extends('layout.master')
@section('titre') Clickbuy e-commerce @endsection
@section('main')
<div class="container body_centent my-5">
  @if(session()->has('success'))
  <div class="alert alert-success">{{ session()->get('success') }}</div>
@endif
    <div class="row">
        <div class="col-2"></div>
        <div class="col-10">
            <h1>Besoin de notre aide ! Veuillez envoyer un e-mail.</h1>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded my-5" style="width: 60%;">
            
            <form class="d-grid gap-2" method="post" action="{{ route('contact.send') }}">
              @csrf
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label fs-5">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
                  
                  <label for="exampleInputEmail1" class="form-label mt-3  fs-5">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">
                    Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label  fs-5">Telephone</label>
                  <input type="number" name="telephone" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="message" placeholder="Entrez message" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2" class=" fs-5">Message</label>
                  </div>
                <button type="submit" class=" btn btn-dark my-3 fs-5">Submit</button>
              </form>
          </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>
@endsection