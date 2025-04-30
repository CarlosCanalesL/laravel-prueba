@extends('layouts.app') {{-- o el layout que estés usando --}}

@section('content')
    <h1>Listado de Notas</h1>
    <a href="{{ route('notas.create') }}">Crear nueva nota</a>

    @foreach($notas as $nota)
        <div>
            <h3>{{ $nota->titulo }}</h3>
            <p>{{ $nota->contenido }}</p>
            <a href="{{ route('notas.edit', $nota) }}">Editar</a>
        </div>
        <hr>
    @endforeach
@endsection
