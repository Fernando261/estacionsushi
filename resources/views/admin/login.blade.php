@extends('layouts.app')

@section('content')
<br><br>
<div class="login-container">
    <div class="login-card">
        <h1 class="login-title">Estación Sushi</h1>
        <p class="login-subtitle">Bienvenido al panel</p>

        @if(session('error'))
            <div class="alert-error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Correo</label>
                <input id="email" type="email" name="email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input id="password" type="password" name="password" required>
            </div>

            <button type="submit" class="btn-login">Iniciar Sesión</button>

        </form>
    </div>
</div>
@endsection
