@extends('layouts.adminapp')

@section('content')
<div class="menu-container">

    <div class="menu-header">
        <h1>Administrar Menú</h1>
        <a href="{{ route('admin.menu.create') }}" class="btn-add">
           + Agregar Platillo
        </a>

        <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn-logout" onclick="return confirm('¿Cerrar sesión?')">
                Cerrar Sesión
            </button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="menu-grid">
        @foreach($platillos as $platillo)
            <div class="menu-card">
                <img src="data:image/png;base64,{{ $platillo->imagen }}" alt="Imagen de {{ $platillo->nombre }}">
                <h2>{{ $platillo->nombre }}</h2>
                <p class="descripcion">{{ $platillo->descripcion }}</p>
                <p class="precio">${{ $platillo->precio }}</p>
                <p class="categoria">Categoría: {{ $platillo->categoria }}</p>
                @if (!empty($platillo->variedades))
                <div class="variedades">
                    <h3>Variedades:</h3>
                    <p>{{ $platillo->variedades }}</p>
                </div>
            @endif

                <div class="acciones">
                    <a href="{{ route('admin.menu.edit', $platillo->id) }}" class="btn-edit">
                        Editar
                    </a>
                    <form action="{{ route('admin.menu.destroy', $platillo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete"
                                onclick="return confirm('¿Seguro que quieres eliminar este platillo?')">
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
