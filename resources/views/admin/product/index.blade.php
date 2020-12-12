@extends('admin.master')
@section('title' , 'List Products')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-hover">
<thead>
    <tr>
        <th>Images</th>
        <th>Name</th>
        <th>Price</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>
    @foreach ($products as $product)
    <tr>
    <td><img src="{{url('images' , $product->image)}}" alt="" width="80px"></td>
    <td>{{$product->pro_name}}</td>
    <td>$ {{$product->pro_price}}</td>
    <td>
    <form action="{{route('product.destroy' , $product->id )}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <input type="submit" class="btn btn-sm btn-danger" value="Delete">

    </form>
    </td>
    </tr>
    @endforeach
</tbody>

</table>
</div>
</main>
@endsection
