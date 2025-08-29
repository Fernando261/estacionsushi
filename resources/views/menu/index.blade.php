@extends('layouts.app')

@section('content')
<div class="grid-container">
    @foreach ($categorias as $categoria)
        <div>
            <h2 class="categoria-titulo">{{ $categoria }}</h2>
            <div class="platillos-grid">
                @foreach ($platillos[$categoria] ?? [] as $platillo)
 <div class="platillo-card" x-data="{ open: false }">
    <!-- Tarjeta -->
    <div @click="open = true" class="platillo-content">
        <img src="data:image/png;base64,{{ $platillo->imagen }}" 
             alt="Imagen de {{ $platillo->nombre }}">
        <h3>{{ $platillo->nombre }}</h3>
        <p>${{ number_format($platillo->precio, 2) }}</p>
    </div>

    <!-- Modal -->
    <template x-teleport="body">
        <div 
            x-show="open"
            x-transition.opacity
            x-cloak
            class="modal-overlay"
            x-init="$watch('open', val => document.body.style.overflow = val ? 'hidden' : '')"
        >
            <div class="modal" @click.away="open = false">
                <!-- Botón cerrar -->
                <button @click="open = false" class="modal-close">✖</button>
                
                <img src="data:image/png;base64,{{ $platillo->imagen }}" 
                     alt="Imagen de {{ $platillo->nombre }}">
                <h3>{{ $platillo->nombre }}</h3>
                <p>{{ $platillo->descripcion }}</p>
                @if (!empty($platillo->variedades))
                <div class="variedades">
                    <h3>Variedades:</h3>
                    <p>{{ $platillo->variedades }}</p>
                </div>
            @endif
                <p class="precio">Precio: ${{ number_format($platillo->precio, 2) }}</p>
            </div>
        </div>
    </template>
</div>

                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection
