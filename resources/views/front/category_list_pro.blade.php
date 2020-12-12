@extends('front.master')
@section('title' , 'Category Page')
@section('content')


<div class="album py-5 bg-light">
    <div class="container">

        <?php $cate_name=DB::table('categories')->select('name')->where('id',$id_)->get(); ?>
        <h4>
            Category:
          @foreach ($cate_name as $c_name)
              {{ $c_name->name }}
          @endforeach
        </h4>
      <div class="row">
          @forelse ($category_products  as $product)
          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
              <img class="card-img-top"  alt="Card Image Cap" src="{{url('images',$product->image)}}">
                <div class="card-body">
                <del>$ {{ $product->pro_price }}</del>
                <span class="price text-muted float-right">$ {{ $product->spl_price }}</span>
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
