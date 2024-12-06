@extends('layouts.dashboard')
@section('nameModule', 'DuinTech Solutions')

@section('content')
<table>
    <tr>
        <td width="50%">
            <div class="text-1">
                <h1>Contacto</h1>
                <h1>¡Trabajemos juntos!</h1>
                <p>Si deseas consultar mayor información sobre nuestros servicios o tienes alguna duda al respecto, no
                    dudes en solicitar una asesoría gratuita y uno de nuestros asesores te contactará a la brevedad.</p>
            </div>
            <div class="info">
                <p>Contáctanos vía WhatsApp +57 333 3333333</p>
            </div>
            <div class="text-2">
                <img src="{{asset('icon/email.svg')}}" alt="" class="icon-email">
                <p>duintech@gmail.com.co</p>
            </div>
        </td>
        <td width="50%" class="form-contact">
            <form method="POST" action="{{ route('contact') }}" id="formEmail">
                @csrf

                <img src="{{asset('icon/Icon1.png')}}" alt="">

                <div class="input-field">
                    <x-text-input id="name" placeholder="Nombre Completo" required />
                </div>

                <div class="input-field">
                    <x-text-input id="email" placeholder="Correo electrónico" required />
                </div>

                <div class="input-field">
                    <x-text-input id="phone" placeholder="Teléfono" required />
                </div>

                <x-primary-button class="ms-3" type="submit">
                    {{ __('Enviar') }}
                </x-primary-button>

            </form>

            <p class="success-message">¡Correo enviado exitosamente!</p>
        </td>
    </tr>
</table>
@endsection

<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

@yield('js')
