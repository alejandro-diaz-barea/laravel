<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ComicAPIService
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function fetchComics()
    {
        $response = Http::get('https://gateway.marvel.com:443/v1/public/comics', [
            'apikey' => $this->apiKey,
            'limit' => 5, // Por ejemplo, obtener solo 5 cómics
            'offset' => 0,
        ]);

        if ($response->successful()) {
            return $response->json()['data']['results'];
        }

        return [];
    }
}
