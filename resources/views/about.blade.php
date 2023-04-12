@extends('layout.master')
@section('titre') Clickbuy e-commerce @endsection
@section('main')
<div class="container-fluid body_centent my-3 ">
    <div class="row ">
        <div class="col-6">
        <img src="{{ asset('images/about.png') }}" width="100%" >
        </div>
        <div class="col-6 about-content">
            <h2 class="pb-5 fs-1">BIENVENUE AU <span class="logo-click">Click</span>buy</h2>
            <h5 class="my-3 mb-5">Nous sommes une entreprise dynamique et innovante qui se consacre à offrir à nos clients des produits
                de haute qualité et un service clientèle exceptionnel. Nous sommes fiers de ce que nous faisons et sommes
                heureux de vous offrir une expérience d'achat en ligne agréable.</h5>
            <h5 class="fw-bold my-3">NOUS COMMENÇONS EN 2020</h5>
            <h5>nous avons travaillé sans relâche pour devenir l'une des entreprises 
                e-commerce les plus prospères dans notre domaine. 
                Nous avons connu des hauts et des bas, mais notre passion pour notre métier et notre dévouement 
                envers nos clients ont toujours été notre priorité.</h5>
        </div>
    </div>

    <div class="row  background-div">
        <div class="col-3"></div>
        <div class="col-6 my-2">
            <h2 class="text-center text-client-comment py-5">Que dit le client</h2>
       <h5 class="text-center text-light my-5">Un espace pour nos clients pour vous aider à connaître notre réputation</h5>
       <div class="ag-courses_item">
        <a href="#" class="ag-courses-item_link">
          <div class="ag-courses-item_bg"></div>
  
          <div class="ag-courses-item_title">
            <img src="{{$commentaire->image}}" class="rounded-circle mx-auto mt-5 d-block img-profile">
            <h6 class="text-light text-center my-5 ">"{{$commentaire->commentaire}}"</h6>
          </div>
  
          <div class="ag-courses-item_date-box">
            <span class="ag-courses-item_date  my-4 ">
                {{$user_comment->name}}
            </span>
          </div>
        </a>
      </div>
        </div> 
        <div class="col-3 "></div>
        </div>
        {{-- //
        <div class="ag-format-container body_card">
            <div class="ag-courses_box">
                <h5 class="text-center text-light">Un espace pour nos clients pour vous aider à connaître notre réputation</h5>
              
            </div>
          </div> --}}
</div>
@endsection

