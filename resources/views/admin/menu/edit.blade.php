@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto p-6 mainn">
    <h1 class="text-xl font-bold mb-4">Editar Platillo</h1>

        <div class="back-button-container">
        <button class="btn-back" onclick="window.history.back();">← Regresar</button>
    </div>

    <form action="{{ route('admin.menu.update', $platillo->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="nombre" value="{{ old('nombre', $platillo->nombre) }}" placeholder="Nombre" required><br><br>
        <textarea name="descripcion" placeholder="Descripción">{{ old('descripcion', $platillo->descripcion) }}</textarea><br><br>
        <input type="number" name="precio" step="0.01" value="{{ old('precio', $platillo->precio) }}" placeholder="Precio" required><br><br>
        <select name="categoria" required>
            <option value="">Seleccionar Categoría</option>
            <option @if($platillo->categoria=='Handrolls') selected @endif>Handrolls</option>
            <option @if($platillo->categoria=='Especialidades de la casa') selected @endif>Especialidades de la casa</option>
            <option @if($platillo->categoria=='Entradas') selected @endif>Entradas</option>
            <option @if($platillo->categoria=='Snacks') selected @endif>Snacks</option>
            <option @if($platillo->categoria=='Selectos') selected @endif>Selectos</option>
            <option @if($platillo->categoria=='Premium') selected @endif>Premium</option>
            <option @if($platillo->categoria=='Platillos') selected @endif>Platillos</option>
            <option @if($platillo->categoria=='Makis') selected @endif>Makis</option>
            <option @if($platillo->categoria=='Tradicionales') selected @endif>Tradicionales</option>
            <option @if($platillo->categoria=='Infantiles') selected @endif>Infantiles</option>
            <option @if($platillo->categoria=='Coctelería sin alcohol') selected @endif>Coctelería sin alcohol</option>
            <option @if($platillo->categoria=='Refrescos') selected @endif>Refrescos</option>
            <option @if($platillo->categoria=='Coctelería con alcohol') selected @endif>Coctelería con alcohol</option>
            <option @if($platillo->categoria=='Cerveza') selected @endif>Cerveza</option>
            <option @if($platillo->categoria=='Postres') selected @endif>Postres</option>
            <option @if($platillo->categoria=='Extras') selected @endif>Extras</option>
        </select>
<br><br>
        <textarea name="variedades" placeholder="Variedades (opcional)">{{ old('variedades', $platillo->variedades) }}</textarea>
<br><br>
        <input type="file" name="imagen">
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
