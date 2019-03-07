@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-0">
           {{--  <div class="card">
                <div class="card-header">You are logged in</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="navbar-brand" href="{{ url('/') }}">
 --}}
 </div>
                    <div class="links">
                            <a href="/vehicles" style="font-size:48px;color:white"><h1>Vehicles </h1></a><br>
                            <a href="/products" style="font-size:48px;color:white"><h1>Products </h1></a>

                    </div>
               {{--  </div> --}}
            </div>
        </div>
    </div>


</div>
@endsection
