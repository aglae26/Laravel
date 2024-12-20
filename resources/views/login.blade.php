@extends('layouts.app')
@section('title', 'Login')
@section('classMain', 'login')

@section('content')

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Icon -->
    <img src="{{asset('icon/Icon1.png')}}" alt="">

    <!-- Email Address -->
    <div class="input-field">
        <x-input-label for="username" />
        <x-text-input id="username" placeholder="Correo electrónico" type="username" name="email" :value="old('username')"
            required />
        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="input-field" class="mt-4">
        <x-input-label for="password" />

        <x-text-input id="password" placeholder="Contraseña" type="password" name="password" required />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox"
                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                name="remember">
            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-primary-button class="ms-3">
            {{ __('Iniciar sesion') }}
        </x-primary-button>
    </div>
</form>


@endsection

@section('js')

@endsection