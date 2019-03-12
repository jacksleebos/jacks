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
<h1>Vehicle Browser</h1>
  <table class="table table-striped bg-light mt-5 rounded">
    <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Model</th>
          <th>Build</th>
        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td><a href="/vehicles/{{$vehicle->id}}"> {{$vehicle->id}}</a></td>
            <td>{{$vehicle->vehicleName}}</td>
            <td>{{$vehicle->vehicleModel}}</td>
            <td>{{$vehicle->vehicleBuild}}</td>
            <td><a href="{{ route('vehicles.edit',$vehicle->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('vehicles.destroy', $vehicle->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <a href="{{ route('vehicles.create')}}" class="btn btn-success">Add Vehicle</a></td>
  <a class='btn btn-light' href="{{ URL::previous() }}">Previous</a>  <a class='btn btn-warning' href="{{route('home')}}">Home</a>
<div>
@endsection
