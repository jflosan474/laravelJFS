

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



<!-- resources/views/chollos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="chollo-details">
        <h2>{{ $chollo->titulo }}</h2>
        <p><strong>Descripción:</strong>{{ $chollo->descripcion }}</p>
        <p><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
        <p><strong>Puntuación:</strong> {{ $chollo->puntuacion }}</p>
        <p><strong>Precio:</strong> {{ $chollo->precio }}€</p>
        <p><strong>Precio con descuento:</strong> {{ $chollo->precio_descuento }}€</p>
        <p><strong>Disponible:</strong> {{ $chollo->disponible ? 'Sí' : 'No' }}</p>
        <p><strong>Fecha de creación:</strong> {{ $chollo->created_at->format('d/m/Y H:i:s') }}</p>
        <a href="{{ route('chollos.edit', $chollo) }}" class="edit-button">
    ✏️Editar 
    </a><br>
        <div class="chollo-buttons">
       
            <form action="{{ route('chollos.destroy', $chollo) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este chollo?')">Eliminar</button>
            </form>
        </div>
    </div>
    <footer>
        <p>JFS ©CholloOfertas {{ date('Y') }}</p>
    </footer>
@endsection
