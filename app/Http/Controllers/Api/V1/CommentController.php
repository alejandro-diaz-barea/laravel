<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $comments = Comment::all();
        return response()->json(['comments' => $comments]);
    }

    public function store(Request $request)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Aquí coloca las reglas de validación para los datos del comentario
        ]);

        // Crear un nuevo comentario con los datos recibidos en la solicitud
        $comment = new Comment();
        // Llenar el comentario con los datos recibidos en la solicitud
        // $comment->campo = $request->input('campo');
        // Guardar el comentario en la base de datos
        $comment->save();

        return response()->json(['message' => 'Comentario creado exitosamente']);
    }

    public function show(Comment $comment)
    {
        return response()->json(['comment' => $comment]);
    }

    public function update(Request $request, Comment $comment)
    {
        // Validar los datos recibidos en la solicitud
        $request->validate([
            // Aquí coloca las reglas de validación para los datos del comentario
        ]);

        // Actualizar los datos del comentario con los recibidos en la solicitud
        // $comment->campo = $request->input('campo');
        // Guardar los cambios en la base de datos
        $comment->save();

        return response()->json(['message' => 'Comentario actualizado exitosamente']);
    }

    public function destroy(Comment $comment)
    {
        // Eliminar el comentario de la base de datos
        $comment->delete();

        return response()->json(['message' => 'Comentario eliminado exitosamente']);
    }
}
