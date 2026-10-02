@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card border-0 shadow-sm">

                <!-- ENCABEZADO -->
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4 class="mb-0">
                        Iniciar sesión
                    </h4>
                </div>


                <!-- CUERPO -->
                <div class="card-body p-4">

                    <div class="text-center mb-4">

                        <h5 class="fw-bold text-primary">
                            RayC Internet
                        </h5>

                        <p class="text-muted mb-0">
                            Accede a tu cuenta para continuar.
                        </p>

                    </div>


                    <form method="POST" action="{{ route('login') }}">

                        @csrf


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
                                autofocus
                                placeholder="Ingresa tu correo"
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
                                autocomplete="current-password"
                                placeholder="Ingresa tu contraseña"
                            >

                            @error('password')
                                <div class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror

                        </div>


                        <!-- RECORDAR -->
                        <div class="mb-3">

                            <div class="form-check">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="remember"
                                    id="remember"
                                    {{ old('remember') ? 'checked' : '' }}
                                >

                                <label class="form-check-label" for="remember">
                                    Recordarme
                                </label>

                            </div>

                        </div>


                        <!-- BOTÓN LOGIN -->
                        <div class="d-grid mb-3">

                            <button type="submit"
                                    class="btn btn-primary btn-lg">

                                Iniciar sesión

                            </button>

                        </div>


                        <!-- RECUPERAR CONTRASEÑA -->
                        @if (Route::has('password.request'))

                            <div class="text-center mb-3">

                                <a href="{{ route('password.request') }}"
                                   class="text-decoration-none">

                                    ¿Olvidaste tu contraseña?

                                </a>

                            </div>

                        @endif


                        <hr>


                        <!-- REGISTRO -->
                        <div class="text-center mt-3">

                            <p class="mb-2 text-muted">
                                ¿No tienes una cuenta?
                            </p>

                            <a href="{{ route('register') }}"
                               class="btn btn-outline-primary">

                                Crear una cuenta

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