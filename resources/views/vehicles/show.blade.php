
@extends('layout')

@section('content')


<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class=" uper">



<table class="table table-striped bg-light">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Category</td>
                <td>Description / Delivery Time</td>
                <td>Price</td>
                <td>Image</td>
                <td>&nbsp;</td>
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

<a class='btn btn-info' href="{{ URL::previous() }}">back</a>



<div>
@endsection
