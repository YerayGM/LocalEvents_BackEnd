<section>
    <header>
        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualiza la información de tu perfil y dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input 
                id="name" 
                name="name" 
                type="text" 
                class="mt-1 block w-full" 
                :value="old('name', $user->name)" 
                required autofocus autocomplete="name" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="second_name" :value="__('Segundo Nombre')" />
            <x-text-input 
                id="second_name" 
                name="second_name" 
                type="text" 
                class="mt-1 block w-full" 
                :value="old('second_name', $user->second_name)" 
                autocomplete="second-name" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('second_name')" />
        </div>

        <div>
            <x-input-label for="first_surname" :value="__('Primer Apellido')" />
            <x-text-input 
                id="first_surname" 
                name="first_surname" 
                type="text" 
                class="mt-1 block w-full" 
                :value="old('first_surname', $user->first_surname)" 
                required autocomplete="family-name" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('first_surname')" />
        </div>

        <div>
            <x-input-label for="second_surname" :value="__('Segundo Apellido')" />
            <x-text-input 
                id="second_surname" 
                name="second_surname" 
                type="text" 
                class="mt-1 block w-full" 
                :value="old('second_surname', $user->second_surname)" 
                autocomplete="additional-name" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('second_surname')" />
        </div>

        <div>
            <x-input-label for="biography" :value="__('Biografía')" />
            <textarea 
                id="biography" 
                name="biography" 
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
                rows="4"
            >{{ old('biography', $user->biography) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('biography')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo Electrónico')" />
            <x-text-input 
                id="email" 
                name="email" 
                type="email" 
                class="mt-1 block w-full" 
                :value="old('email', $user->email)" 
                required autocomplete="username" 
            />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Tu dirección de correo electrónico no está verificada.') }}

                        <button 
                            form="send-verification" 
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('Se ha enviado un nuevo enlace de verificación a tu correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >
                    {{ __('Guardado.') }}
                </p>
            @endif
        </div>
    </form>
</section>
