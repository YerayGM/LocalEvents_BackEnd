<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'second_name' => ['nullable', 'string', 'max:60'],
            'first_surname' => ['required', 'string', 'max:40'],
            'second_surname' => ['required', 'string', 'max:40'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'birth_date' => ['required', 'date'],
            'biography' => ['nullable', 'string'],
            'image' => ['nullable','file','image','max:200'], 
            'phone_number' => ['required', 'string', 'max:15', 'unique:' . User::class],
        ]);

        // Datos del usuario
        $userData = [
            'name' => $request->name,
            'second_name' => $request->second_name,
            'first_surname' => $request->first_surname,
            'second_surname' => $request->second_surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'biography' => $request->biography,
            'phone_number' => $request->phone_number,
        ];

        // Manejo de la imagen
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('profile-images', 'public'); 
            $userData['image'] = $path;
        }

        // Crear el usuario
        $user = User::create($userData);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}