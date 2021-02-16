@extends('layouts.app')

@section('title', 'Titulo de la Página Hijo')

@section('sidebar')
    @parent

    <p>Este el contenido del sidebar de mi pagina hijo</p>
@endsection

@section('content')
    <p>Este es el cuerpo del contenido</p>
@endsection