<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            $user->password = Hash::make($request->input('password'));
            $user->save();
    
            return response()->json(['message' => 'Usuario creado exitosamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Hubo un error al crear el usuario'], 500);
        }
    }
    
    


    public function show(User $user)
    {
        return response()->json(['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        // Validar los datos recibidos en la solicitud
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => 'sometimes|required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Actualizar los datos del usuario con los recibidos en la solicitud
        $user->name = $request->name;
        $user->email = $request->email;
        
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }

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
