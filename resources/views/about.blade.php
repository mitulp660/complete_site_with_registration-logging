@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">About</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                   About the site for only a logged on user can see<br>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div align="center">
    For welcome screen  click on Laravel on left hand-Top
</div>
@endsection
