@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  @foreach ($posts as $post)
                            <p>This is user {{'<h1>'. $post->body.  '</h1>' . $post->title }}</p>
                        @endforeach<br>

                         <br>

                </div>

            </div>
        </div>
    </div>
</div>
<div align="center">
    For welcome screen  click on Laravel on left hand-Top
</div>
@endsection
