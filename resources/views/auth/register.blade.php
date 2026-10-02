@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card border-0 shadow-sm">

                <!-- ENCABEZADO -->
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">
                        Crear cuenta
                    </h4>
                </div>


                <!-- CUERPO -->
                <div class="card-body p-4">

                    <div class="text-center mb-4">

                        <h5 class="fw-bold text-primary">
                            RayC Internet
                        </h5>

                        <p class="text-muted mb-0">
                            Crea tu cuenta para continuar.
                        </p>

                    </div>


                    <form method="POST" action="{{ route('register') }}">

                        @csrf


                        <!-- NOMBRE -->
                        <div class="mb-3">

                            <label for="name" class="form-label fw-bold">
                                Nombre completo
                            </label>

                            <input
                                id="name"
                                type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name"
                                autofocus
                                placeholder="Ingresa tu nombre"
                            >

                            @error('name')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                        </div>


                        <!-- CORREO -->
                        <div class="mb-3">

                            <label for="email" class="form-label fw-bold">
                                Correo electrónico
                            </label>

                            <input
                                id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autocomplete="email"
                                placeholder="ejemplo@correo.com"
                            >

                            @error('email')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                        </div>


                        <!-- CONTRASEÑA -->
                        <div class="mb-3">

                            <label for="password" class="form-label fw-bold">
                                Contraseña
                            </label>

                            <input
                                id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                required
                                autocomplete="new-password"
                                placeholder="Mínimo 8 caracteres"
                            >

                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                        </div>


                        <!-- CONFIRMAR CONTRASEÑA -->
                        <div class="mb-4">

                            <label for="password-confirm" class="form-label fw-bold">
                                Confirmar contraseña
                            </label>

                            <input
                                id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                required
                                autocomplete="new-password"
                                placeholder="Repite tu contraseña"
                            >

                        </div>


                        <!-- BOTÓN -->
                        <div class="d-grid">

                            <button type="submit"
                                    class="btn btn-primary btn-lg">

                                Crear cuenta

                            </button>

                        </div>


                        <hr class="my-4">


                        <!-- LOGIN -->
                        <div class="text-center">

                            <p class="text-muted mb-2">
                                ¿Ya tienes una cuenta?
                            </p>

                            <a href="{{ route('login') }}"
                               class="btn btn-outline-primary">

                                Iniciar sesión

                            </a>

                        </div>

                    </form>

                </div>

            </div>


            <!-- VOLVER -->
            <div class="text-center mt-4">

                <a href="/"
                   class="text-decoration-none">

                    ← Volver a RayC Internet

                </a>

            </div>

        </div>

    </div>

</div>

@endsection