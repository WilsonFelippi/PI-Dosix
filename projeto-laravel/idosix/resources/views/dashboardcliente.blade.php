@extends('layout.layoutcliente')

@section('content')
    <h1>Dashboard do {{Auth::User()->email}} </h1>
@endsection