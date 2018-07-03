@extends('layouts.app')

@section('content)
        <form method="post" action="">

            <input type="text" name="bike-frame" id="bikeframe" value="{{\Illuminate\Support\Facades\Input::get('bikeframe')}}">
            <input type="text" name="bike-color" id="bikecolor" value="{{\Illuminate\Support\Facades\Input::get('bikecoler')}}">
            <input type="text" name="bike-size" id="bikesize" value="{{\Illuminate\Support\Facades\Input::get('bikesize')}}">
            <button type="submit">anmelden</button>
        </form>

@endsection