@extends('layout.layoutadmin')

@section('content')
    <h1> Dashboard Admin </h1>
    <h2> {{Auth::user()->tipo}}</h2>
@endsection