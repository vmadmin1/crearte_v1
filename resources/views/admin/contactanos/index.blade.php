@extends('adminlte::page')

@section('title', 'PotroCursos')

@section('content_header')
    <h1>Contactanos</h1>
@stop

@section('content')
    <h1>DEJANOS UN MENSAJE</h1>

    {{-- <form action="{{ route('contactanos.store') }}" method="POST">

        @csrf --}}

        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>

        @error('name')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <label>
            Correo:
            <br>
            <input type="text" name="correo">
        </label>

        <br>

        @error('correo')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>

        <br>

        @error('mensaje')
            <p><strong>{{ $message }}</strong></p>
        @enderror

        <button type="submit">Enviar Mensaje</button>

    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif
@stop
