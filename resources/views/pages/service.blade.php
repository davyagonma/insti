@extends('layout.app')
@section('title')
service
@endsection
@section('contenu')
<div class="jumbotron">
            
    <h1>NOS PRODUITS</h1>

    @foreach ($produit as $prod  )
    <div class="well">
    <h3> <a href="/Basiclesson/public/show/{{$prod->id}}" > {{$prod -> product_name}}</a> </h3>
    </div>
    @endforeach   
</div>
{{$produit -> links()}}

@endsection