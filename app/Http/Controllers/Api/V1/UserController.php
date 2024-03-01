<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->except(['index', 'show', 'store']);
    }

    public function index()
    {
        $users = User::all()->map(function ($user) {
            return $user->only(['id', 'name', 'email', 'created_at', 'updated_at']);
        });

        return response()->json(['users' => $users]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            // Crear un nuevo usuario con los datos recibidos en la solicitud
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return response()->json(['message' => 'Usuario creado exitosamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al crear el usuario'], 500);
        }
    }

    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Verificar si el usuario autenticado es el propietario del perfil
        if (Auth::id() == $id) {
            return response()->json(['user' => $user]);
        }

        return response()->json(['message' => 'No tienes permiso para ver este perfil'], 403);
    }

    public function update(Request $request, $id)
    {
        // Validar los datos recibidos en la solicitud
        $validator = Validator::make($request->all(), [
            'address' => 'nullable|string|max:255',
            'bank_holder' => 'nullable|string|max:255',
            'bank_account_number' => 'nullable|string|max:255',
            'bank_name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Verificar si el usuario autenticado es el propietario del perfil
        if (Auth::id() == $id) {
            $user->fill($request->only(['address', 'bank_holder', 'bank_account_number', 'bank_name']));
            $user->save();

            return response()->json(['message' => 'Usuario actualizado exitosamente', 'user' => $user]);
        }

        return response()->json(['message' => 'No tienes permiso para actualizar este perfil'], 403);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        // Verificar si el usuario autenticado es el propietario del perfil
        if (Auth::id() == $id) {
            $user->delete();

            return response()->json(['message' => 'Usuario eliminado exitosamente']);
        }

        return response()->json(['message' => 'No tienes permiso para eliminar este perfil'], 403);
    }
}
