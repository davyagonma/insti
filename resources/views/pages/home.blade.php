@extends('layout.app')

@section('title')
home
@endsection
@section('contenu')
<div class="jumbotron">
            
    <h1>Bienvenu dans notre boutique en ligne</h1>

</div>

{{-- @foreach ($produit as $prod  )
<div class="well">
<h1> <a href="/Basiclesson/public/show/{{$prod->id}}" > {{$prod -> product_name}}</a> </h1>
</div>
@endforeach   
{{$produit -> links()}} --}}

@endsection