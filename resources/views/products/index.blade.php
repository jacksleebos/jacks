@extends('layout')


@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  h1 {
      color:white;
  }
  th {
    color:black;
    font-weight:bold;
    font-size:18px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif


<h1>Product Browser</h1>

  <table class="table table-striped bg-light mt-5 rounded">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Description / Delivery Time</th>
            <th>Price</th>
            <th>Image</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td> <a href="/products/{{$product->id}}">{{$product->id}}</a></td>
            <td>{{$product->productName}}</td>
            <td>{{$product->productCategory}}</td>
            <td>{{$product->productDescription}}</td>
            <td>{{$product->productPrice}}</td>
<td><img src="{{$product->productImage}}"style="width:100px;height:50px;" /></td>

            <td><a href="{{ route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('products.destroy', $product->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>

                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
  <a href="{{ route('products.create')}}" class="btn btn-success">Add Product </a>
  <a class='btn btn-light' href="{{ URL::previous() }}">Previous</a>  <a class='btn btn-warning' href="{{route('home')}}">Home</a>

<div>
@endsection
