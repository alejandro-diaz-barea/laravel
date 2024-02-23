<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Requests\V1\NewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return response()->json(['news' => $news]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        $request->validated();

        $news = new News();
        $news->fill($request->all());
        
        if ($news->save()) {
            return response()->json(['message' => 'News created successfully'], 201);
        }

        return response()->json(['message' => 'Error creating news'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return response()->json(['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $request->validated();

        $news->fill($request->all());
        
        if ($news->save()) {
            return response()->json(['message' => 'News updated successfully'], 200);
        }

        return response()->json(['message' => 'Error updating news'], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->delete()) {
            return response()->json(['message' => 'News deleted successfully'], 200);
        }

        return response()->json(['message' => 'Error deleting news'], 500);
    }
}
