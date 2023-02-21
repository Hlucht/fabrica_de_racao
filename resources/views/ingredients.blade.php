@extends('layout.template')

@section('content')
    <ingredients-component :ingredients='@json($ingredients)'/> 
@endsection