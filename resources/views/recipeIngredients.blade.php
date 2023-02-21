@extends('layout.template')

@section('content')
    <recipe-ingredients-component :recipe='@json($recipe)' :ingredients='@json($ingredients)'/>
@endsection