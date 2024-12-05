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

                <!-- Icon -->
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

            <div id="modal" class="modal hidden">
                <div class="modal-content">
                    <span class="close-btn" id="closeModal">&times;</span>
                    <p class="success-message">¡Correo enviado exitosamente!</p>
                    <p><strong>Nombre:</strong> <span id="displayName"></span></p>
                    <p><strong>Correo:</strong> <span id="displayEmail"></span></p>
                    <p><strong>Teléfono:</strong> <span id="displayPhone"></span></p>
                </div>
            </div>

            <script>
                document.getElementById('formEmail').addEventListener('submit', function (event) {
                    event.preventDefault();

                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const phone = document.getElementById('phone').value;

                    // Mostrar los valores en el modal
                    document.getElementById('displayName').textContent = name;
                    document.getElementById('displayEmail').textContent = email;
                    document.getElementById('displayPhone').textContent = phone;

                    // Mostrar el modal
                    document.getElementById('modal').classList.remove('hidden');
                });

                // Cerrar el modal cuando se haga clic en el botón de cerrar
                document.getElementById('closeModal').addEventListener('click', function () {
                    document.getElementById('modal').classList.add('hidden');
                });
            </script>

        </td>
    </tr>
</table>
@endsection

<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

@yield('js')
