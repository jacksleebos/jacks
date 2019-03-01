@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add User
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
      <form method="post" action="{{ route('users.store') }}">


        <div class="form-group">
              @csrf
              <label for="name">User name:</label>
              <input type="text" class="form-control" name="userName"/>
          </div>

          <div class="form-group">
                <label for="email">User email:</label>
                <input type="text" class="form-control" name="userEmail"/>
          </div>

          <div class="form-group">
                <label for="description">Password:</label>
                <input type="text" class="form-control" name="userPassword"/>
          </div>


          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection
