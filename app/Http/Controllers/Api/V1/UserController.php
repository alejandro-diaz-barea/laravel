<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json(['users' => $users]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos del usuario
        ]);

        // Crear un nuevo usuario con los datos recibidos en la solicitud
        $user = new User();
        // Llenar el usuario con los datos recibidos en la solicitud
        // $user->campo = $request->input('campo');
        // Guardar el usuario en la base de datos
        $user->save();

        return response()->json(['message' => 'Usuario creado exitosamente']);
    }

    public function show(User $user)
    {
        return response()->json(['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Coloca aquí las reglas de validación para los datos del usuario
        ]);

        // Actualizar los datos del usuario con los recibidos en la solicitud
        // $user->campo = $request->input('campo');
        // Guardar los cambios en la base de datos
        $user->save();

        return response()->json(['message' => 'Usuario actualizado exitosamente']);
    }

    public function destroy(User $user)
    {
        // Eliminar el usuario de la base de datos
        $user->delete();

        return response()->json(['message' => 'Usuario eliminado exitosamente']);
    }
}
