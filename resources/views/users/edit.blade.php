@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('users.update', $user->id) }}">
        @method('PATCH')
        @csrf

        <div class="form-group">
          <label for="name">User name:</label>
          <input type="text" class="form-control" name="userName" value={{ $user->userName }} />
        </div>

        <div class="form-group">
          <label for="category">User email:</label>
          <input type="text" class="form-control" name="userPassword" value={{ $user->userPassword }} />
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection

