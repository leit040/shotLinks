@extends('layout')

@section('content')

    <p class="fs-1">{{url("/follow/$link->token")}}</p>

@endsection
