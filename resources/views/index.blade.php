

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- resources/views/chollos/index.blade.php -->
@extends('layouts.app')

@section('content')
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

    <!-- Lista de Chollos -->
 <!-- Lista de Chollos -->
 <div class="chollos-list">
        @php
            $chollos = \App\Models\Chollo::all();
        @endphp

        @forelse($chollos as $chollo)
            <div class="chollo-item">
                <img src="{{ asset('img/' . $chollo->id . '-chollo-ofertas.jpg') }}" alt="{{ $chollo->titulo }}" style="width: 50px; height:50px;">
                <h2>{{ $chollo->titulo }}</h2>
                <p class="chollo-description">{{ $chollo->descripcion }}</p>
                <div class="chollo-details">
                    <p><strong>Categoría:</strong> {{ $chollo->categoria }}</p>
                    <p><strong>Puntuación:</strong> {{ $chollo->puntuacion }}</p>
                    <p><strong>Precio:</strong> {{ $chollo->precio }}€</p>
                    <p><strong>Precio con descuento:</strong> {{ $chollo->precio_descuento }}€</p>
                    <p><strong>Disponible:</strong> {{ $chollo->disponible ? 'Sí' : 'No' }}</p>
                    <p><strong>Fecha de creación:</strong> {{ $chollo->created_at->format('d/m/Y H:i:s') }}</p>

                    <div class="chollo-buttons">
    <a href="{{ route('chollos.edit', $chollo) }}" class="edit-button">
    ✏️Editar 
    </a>
    <p> </p>
    <!-- Enlace para ver detalles del chollo -->
    <a href="{{ route('chollos.show', $chollo) }}" class="chollo-link">
        Ver detalles
    </a>
<p> </p>
    <!-- Formulario para eliminar el chollo -->
    <form action="{{ route('chollos.destroy', $chollo) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este chollo?')">Eliminar</button>
    </form>
</div>
                </div>
            </div>
        @empty
            <p>No hay chollos disponibles.</p>
        @endforelse
    </div>
    <!-- Footer -->
    <footer>
        <p>JFS ©CholloOfertas {{ date('Y') }}</p>
    </footer>
@endsection