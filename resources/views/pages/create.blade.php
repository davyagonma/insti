@extends('layout.app')

@section('title')
Ajouter un produit
@endsection

@section('contenu')

@if (Session::has('message'))
<div>

</div>
<p class="alert alert-success">
    {{Session::get('message')}}
    {{Session::put('message', null)}}

</p>

@endif
{{-- <form action="{{url('/saverproduit')}}" method="POST" class="form-horizontal">  --}}
    {!!Form::open(['url'=>'/sauverproduit', 'method'=>'POST', 'class'=>'form-horizontal'], 'enctype'=>'multipart/form-data')!!}
    {{csrf_field()}}
    <div class="form-group">
        {{Form::label('','Product')}}
        {{Form::text('product_name', '',['placeholder'=>'Product_name','class'=>'form-control'])}}
        {{-- <label>Product</label>
        <input type="text" name="product_name" placeholder="Product Name" class="form-control" required> --}}
    </div>
    <div class="form-group">

        {{Form::label('','Product Price')}}
        {{Form::text('product_price', '',['placeholder'=>'Product Price','class'=>'form-control'])}}
        {{-- <label>Product Price</label>
        <input type="text" name="product_price" placeholder="Product Price" class="form-control" required> --}}
    </div>
    <div class="form-group">
        {{Form::label('','Product description')}}
        {{Form::text('Product description<', '',['placeholder'=>'Product Price','class'=>'form-control'])}}
        {{-- <label>Product description</label>
        <textarea name="product_description" cols="30" rows="10"></textarea> --}}
    </div>
    <input type="submit" value="Add Product" class="btn btn-primary">
  </form>

@endsection

