@extends('layouts.app')
@section('title', 'Register')
@section('classMain', 'register')
 
@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Icon -->
        <img src="{{asset('icon/Icon1.png')}}" alt="">

        <!-- Rol -->
        <div>
        <label for="rol"> Seleccione su rol 
            <select  name="rol"> 
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>
        </label>
        </div>

        <!-- Name -->
        <div class= "input-field">
            <x-input-label for="nombre_completo" />
            <x-text-input id="nombre_completo" placeholder="Nombre Completo" autofocus="true" type="text" name="nombre_completo" :value="old('nombre_completo')" required />
            <x-input-error :messages="$errors->get('nombre_completo')" class="mt-2" />
        </div>

        <div class= "input-field">
            <label for="username"> </label>
            <input id="username" placeholder="Nombre de Usuario" autofocus="true" type="text" name="username" :value="old('username')" require />
        </div>

        <!-- Email Address -->
        <div class= "input-field" class="mt-4">
            <x-input-label for="email"/>
            <x-text-input id="email" placeholder="Correo electrónico" autofocus="true" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class= "input-field" class="mt-4">
            <x-input-label for="password" />

            <x-text-input id="password" placeholder="Contraseña" autofocus="true"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class= "input-field" class="mt-4">
            <x-input-label for="password_confirmation" />

            <x-text-input id="password_confirmation" placeholder="Confirmar Contraseña" autofocus="true"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('¿Ya estás registrado?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
@endsection

@section('js')

@endsection