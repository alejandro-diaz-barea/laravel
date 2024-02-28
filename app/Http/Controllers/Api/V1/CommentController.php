<?php
namespace App\Http\Controllers\Api\V1;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'comic_id' => 'required|exists:comics,id',
        ]);

        $comment = new Comment();
        $comment->comment = $request->input('comment');
        $comment->comic_id = $request->input('comic_id');
        $comment->user_id = auth()->id(); // Asignar el ID del usuario autenticado
        $comment->save();

        return response()->json(['message' => 'Comentario creado exitosamente', 'comment' => $comment]);
    }

    public function getCommentsByComic($comic_id)
    {
        $comments = Comment::where('comic_id', $comic_id)->get();

        return response()->json(['comments' => $comments]);
    }

}
