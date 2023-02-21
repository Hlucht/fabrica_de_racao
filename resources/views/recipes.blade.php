@extends('layout.template')

@section('content')
    <recipes-component :recipes='@json($recipes)'/> 
@endsection