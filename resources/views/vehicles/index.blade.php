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
  {{-- href to create category --}}
  <a href="{{ route('vehicles.create')}}" class="btn btn-primary">Vehicles +  </a></td>

  <table class="table table-striped bg-light">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Model</td>
          <td>Build</td>

        </tr>
    </thead>
    <tbody>
        @foreach($vehicles as $vehicle)
        <tr>
            <td>{{$vehicle->id}}</td>
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
<div>
@endsection
