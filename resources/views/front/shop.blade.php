@extends('front.master')
@section('title' , 'Shop Page')
@section('content')


<div class="jumbotron text-center">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>


<div class="album py-5 bg-light">

    <div class="container">

      <div class="row">
          @forelse ($products as $product)
          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
              <img class="card-img-top"  alt="Card Image Cap" src="{{url('images',$product->image)}}">
                <div class="card-body">
                <p class="card-text">{{ $product->pro_name }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{url('productDetail' , $product->id)}}" type="button" class="btn btn-sm btn-outline-secondary">View Products</a>
                        <a href="{{url('cart/addItem' , $product->id)}}" type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @empty
                <h3>No Products</h3>
          @endforelse


      </div>
    </div>
  </div>


  @endsection

