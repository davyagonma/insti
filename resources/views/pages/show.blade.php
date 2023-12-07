@extends('layout.app')
@section('title')
service
@endsection
@section('contenu')
<div class="jumbotron">
            
    <h1>Les détails du produit</h1>
    <hr>
    <h2>{{$produit->product_name}}</h2>
    <h3>${{$produit->product_price}}</h3>
    <p>{{$produit->description}}</p>
    <hr>
    <h4>{{$produit->created_at}}</h4>


</div>

@endsection