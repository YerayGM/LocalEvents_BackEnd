<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-900">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    <div class="flex justify-center py-12">
        <div class="w-full max-w-3xl space-y-6">
            <div class="bg-white shadow-md rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Información del perfil
                </h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="bg-white shadow-md rounded-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">
                    Cambiar contraseña
                </h3>
                @include('profile.partials.update-password-form')
            </div>

            <div class="bg-white shadow-md rounded-xl p-6">
                <h3 class="text-lg font-semibold text-red-600 mb-4">
                    Eliminar cuenta
                </h3>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>

