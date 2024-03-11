

<link rel="stylesheet" href="{{ asset('css/app.css') }}">



    <!-- Logo y Título -->
    <div class="logo">
        <img src="https://www.pepper.com/images/vote.png" alt="Logo CholloOfertas">
        <h1>Chollo ░▒▓ Ofertas</h1>
    </div>

    <!-- Menú de Navegación -->
    <nav>
        <ul>
            <li><a href="{{ route('chollos.index') }}">Inicio</a></li>
            <li><a href="{{ route('chollos.create') }}">Nuevos</a></li>
            <li><a href="{{ route('chollos.destacados') }}">Destacados</a></li>
     
        </ul>
    </nav>



<!-- resources/views/chollos/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="chollo-edit">
        <h2>Editar Chollo</h2>

        <form action="{{ route('chollos.update', $chollo) }}" method="post">
            @csrf
            @method('PUT')

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" value="{{ $chollo->titulo }}" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required>{{ $chollo->descripcion }}</textarea>

            <label for="url">URL:</label>
            <input type="text" name="url" value="{{ $chollo->url }}" required>

            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" value="{{ $chollo->categoria }}" required>

            <label for="puntuacion">Puntuación:</label>
            <input type="number" name="puntuacion" value="{{ $chollo->puntuacion }}" required>

            <label for="precio">Precio:</label>
            <input type="text" name="precio" value="{{ $chollo->precio }}" required>

            <label for="precio_descuento">Precio con descuento:</label>
            <input type="text" name="precio_descuento" value="{{ $chollo->precio_descuento }}" required>

            <label for="disponible">Disponible:</label>
            <select name="disponible" required>
                <option value="1" {{ $chollo->disponible == 1 ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ $chollo->disponible == 0 ? 'selected' : '' }}>No</option>
            </select>

            <!-- Agrega más campos según las propiedades de tu modelo Chollo -->

            <button type="submit">Guardar cambios</button>
        </form>
    </div>


    <footer>
        <p>JFS ©CholloOfertas {{ date('Y') }}</p>
    </footer>
@endsection
