@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Vehicle
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('vehicles.update', $vehicle->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
          <label for="name">Vehicle name:</label>
          <input type="text" class="form-control" name="vehicleName" value={{ $vehicle->vehicleName }} />
        </div>

        <div class="form-group">
          <label for="model">Vehicle model:</label>
          <input type="integer" class="form-control" name="vehicleModel" value={{ $vehicle->vehicleModel }} />
        </div>

        <div class="form-group">
          <label for="build">Vehicle Build:</label>
          <input type="text" class="form-control" name="vehicleBuild" value={{ $vehicle->vehicleBuild }} />
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
<a class='btn btn-light' href="{{ URL::previous() }}">Previous</a>  <a class='btn btn-warning' href="{{route('home')}}">Home</a>
@endsection
