@extends('layout')


@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <a href="{{ route('products.create')}}" class="btn btn-primary">Add Products +  </a></td>



  <table class="table table-striped bg-light">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Category</td>
            <td>Description / Delivery Time</td>
            <td>Price</td>
            <td>Image</td>
            <td>Vehicle Id</td>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->productName}}</td>
            <td>{{$product->productCategory}}</td>
            <td>{{$product->productDescription}}</td>
            <td>{{$product->productPrice}}</td>
            {{-- <td>{{$product->productImage}}</td> --}}
<td><img src="{{$product->productImage}}"style="width:150px;height:80px;" /></td>

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
<div>
@endsection
