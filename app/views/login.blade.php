@extends('layout')

@section('content')
    @foreach($login_arr as $login)
        <p>{{ $login->user }}</p>
    @endforeach
@stop