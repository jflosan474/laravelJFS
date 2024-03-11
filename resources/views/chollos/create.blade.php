<!-- resources/views/chollos/create.blade.php -->

@extends('layouts.app')

@section('content')
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

    <div class="chollo-create">
        <h2>Crear Nuevo Chollo</h2>

        <form action="{{ route('chollos.store') }}" method="post">
            @csrf

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" required>

            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" required></textarea>

            <label for="url">URL:</label>
            <input type="text" name="url" required>

            <label for="categoria">Categoría:</label>
            <input type="text" name="categoria" required>

            <label for="puntuacion">Puntuación:</label>
            <input type="number" name="puntuacion" required>

            <label for="precio">Precio:</label>
            <input type="text" name="precio" required>

            <label for="precio_descuento">Precio con descuento:</label>
            <input type="text" name="precio_descuento" required>

            <label for="disponible">Disponible:</label>
            <select name="disponible" required>
                <option value="1">Sí</option>
                <option value="0">No</option>
            </select>

         
            <button type="submit">Crear Chollo</button>
        </form>
    </div>

    <footer>
        <p>JFS ©CholloOfertas {{ date('Y') }}</p>
    </footer>
@endsection
