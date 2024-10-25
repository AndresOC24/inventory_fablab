@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-orange-400 to-pink-500 p-4 relative overflow-hidden">
    <!-- Floating circles decoration -->
    <div aria-hidden="true" class="absolute top-1/4 left-1/4 w-32 h-32 bg-white/20 rounded-full blur-2xl"></div>
    <div aria-hidden="true" class="absolute bottom-1/4 right-1/4 w-40 h-40 bg-white/20 rounded-full blur-2xl"></div>
    <div aria-hidden="true" class="absolute top-1/3 right-1/3 w-24 h-24 bg-white/20 rounded-full blur-2xl"></div>

    <!-- Main login container -->
    <div class="w-full max-w-md relative">
        <!-- Glass effect card -->
        <div class="bg-white/10 backdrop-blur-xl rounded-3xl shadow-2xl p-8 space-y-6">
            <!-- Logo container -->
            <div class="flex justify-center mb-8">
                <img src="{{ asset('img/logo_fablab.png') }}"
                     alt="FabLab Santa Cruz Logo"
                     class="h-20 object-contain"
                >
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Username input -->
                <div class="space-y-2">
                    <input id="usuario"
                           type="text"
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder:text-white/70 focus:outline-none focus:ring-2 focus:ring-white/30 focus:border-transparent transition-all duration-200 @error('usuario') border-red-400 focus:ring-red-400 @enderror"
                           name="usuario"
                           value="{{ old('usuario') }}"
                           placeholder="Usuario"
                           required
                           autocomplete="usuario"
                           autofocus
                    >
                    @error('usuario')
                        <p class="text-sm text-red-400 pl-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="space-y-2">
                    <input id="password"
                           type="password"
                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder:text-white/70 focus:outline-none focus:ring-2 focus:ring-white/30 focus:border-transparent transition-all duration-200 @error('password') border-red-400 focus:ring-red-400 @enderror"
                           name="password"
                           placeholder="Contraseña"
                           required
                    >
                    @error('password')
                        <p class="text-sm text-red-400 pl-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember me -->
                <div class="flex items-center">
                    <input type="checkbox"
                           name="remember"
                           id="remember"
                           class="w-4 h-4 rounded border-white/30 bg-white/5 text-orange-500 focus:ring-offset-0 focus:ring-2 focus:ring-orange-500"
                           {{ old('remember') ? 'checked' : '' }}
                    >
                    <label for="remember" class="ml-2 text-sm text-white/70 select-none">
                        Recordarme
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl hover:opacity-90 transition-all duration-200 transform hover:scale-[0.99] active:scale-[0.97] font-medium shadow-lg shadow-orange-500/25"
                >
                    Ingresar al Sistema
                </button>

                <!-- Forgot password -->
                @if (Route::has('password.request'))
                    <div class="text-center">
                        <a href="{{ route('password.request') }}"
                           class="text-sm text-white/70 hover:text-white transition-colors duration-200 inline-block"
                        >
                            ¿Olvidaste tu contraseña?
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
