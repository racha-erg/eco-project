@extends('layout.master')
@section('titre') create Produits @endsection
@section('main')
<h1>Ajouter un nouveau produit</h1> 
       <form method="POST" action="{{ route('enregistrerModule') }}">
        @csrf
        <label for="codeM">Code module :</label>
        <input type="text" name="codeM" required>
        <br>
        <label for="titre">Titre :</label>
        <input type="text" name="titre" required>
        <br>
        <label for="MH">Nombre d'heures :</label>
        <input type="number" name="MH" required>
        <br>
        <input type="submit" value="Ajouter">
    </form>   
@endsection
