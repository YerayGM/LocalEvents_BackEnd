<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Obtener una lista de todos los usuarios.
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Almacenar un nuevo usuario en la base de datos.
     */
    public function store(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'first_surname' => 'required|string',
            'second_surname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'admin' => 'required|boolean',
        ]);

        // Si la validación falla, devolver errores
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Crear el usuario
        $user = User::create($request->all());

        return response()->json($user, 201);
    }

    /**
     * Mostrar los detalles de un usuario específico.
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json($user);
    }

    /**
     * Actualizar un usuario existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|string',
            'first_surname' => 'sometimes|string',
            'second_surname' => 'sometimes|string',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
            'admin' => 'sometimes|boolean',
        ]);

        // Si la validación falla, devolver errores
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        // Actualizar el usuario
        $user->update($request->all());

        return response()->json($user);
    }

    /**
     * Eliminar un usuario de la base de datos.
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }
}