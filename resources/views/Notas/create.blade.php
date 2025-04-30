@extends('layouts.app')

@section('content')
    <h1>Crear Nota</h1>

    <form method="POST" action="{{ route('notas.store') }}">
        @csrf
        <input type="text" name="titulo" placeholder="Título" value="{{ old('titulo') }}">
        <textarea name="contenido" placeholder="Contenido">{{ old('contenido') }}</textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection
