@extends('layouts.app')

@section('content')
    <h1>Editar Nota</h1>

    <form method="POST" action="{{ route('notas.update', $nota) }}">
        @csrf
        @method('PUT')
        <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}">
        <textarea name="contenido">{{ old('contenido', $nota->contenido) }}</textarea>
        <button type="submit">Actualizar</button>
    </form>
@endsection

