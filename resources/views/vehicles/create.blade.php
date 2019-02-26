@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Vehicle
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
      <form method="post" action="{{ route('vehicles.store') }}">

        <div class="form-group">
              @csrf
              <label for="name">Vehicle name:</label>
              <input type="text" class="form-control" name="vehicleName"/>
          </div>

          <div class="form-group">
                <label for="model">Vehicle Model:</label>
                <input type="integer" class="form-control" name="vehicleModel"/>
          </div>

          <div class="form-group">
                <label for="build">Vehicle Build:</label>
                <input type="text" class="form-control" name="vehicleBuild"/>
          </div>

          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
