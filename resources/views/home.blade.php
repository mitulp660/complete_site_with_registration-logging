@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!<br>
                        click if to goto <a href="{{ url('/home') }}">Home</a> OR  <a href="{{ url('/about') }}">About</a> OR  <a href="{{ url('/contact') }}">Contact</a> <br> OR use go back Button <br>
                        For welcome screen  click on Laravel on left hand-Top
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
