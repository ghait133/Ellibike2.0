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
                    Great {{ Auth::user()->email }}
                    You are logged in!

                    <a href="{{route('BikeRegister')}}">Fahrrad anmelden</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
