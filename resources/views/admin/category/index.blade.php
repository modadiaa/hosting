@extends('admin.master')
@section('title' ,'Category Page')

@section('content')
<main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration:underline ; margin-top:20px;" >
    <h3 >List Categories</h3>

<ul class="nav navbar-nav">
    @if(!empty($categories))
    <div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Category Id</th>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
             <tr>
                 <td>{{$category->id}}</td>
                 <td>{{$category->name}}</td>
             </tr>
             @empty
             <li> No Category </li>
             @endforelse
        </tbody>
    </table>
    </div>
    @endif

</ul>

<form action="{{route('category.store')}}" method="POST" role="form">
    {{ csrf_field() }}

<div class="form-group" >
    <label for="name"> Category Name:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="name">
</div>
<button type="submit" class="btn btn-primary">Save</button>

</form>

</main>
@endsection
