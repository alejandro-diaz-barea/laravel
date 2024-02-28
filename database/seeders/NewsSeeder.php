<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'image' => 'https://www.mundodeportivo.com/alfabeta/hero/2023/07/deadpool_3_lobezno_traje.jpeg?width=768&aspect_ratio=16:9&format=nowebp',
                'title' => 'Sale trailer de Deadpool junto a Lobezno',
                'description' => 'Este lunes se anunció el nuevo estreno de Marvel que llegará a mitad de 2024.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://depor.com/resizer/0al_xht9CIg3MOqoKzrf_KLApwE=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/X6N6G24OURDR7HDB33MKHNIWDA.jpg',
                'title' => 'Vuelve la serie X-Men',
                'description' => 'La icónica serie de los 80 vuelve de la mano de Marvel a la plataforma Disney Plus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://lumiere-a.akamaihd.net/v1/images/image_167d5a00.jpeg?region=0,0,540,810',
                'title' => 'The Marvels llega a Disney Plus',
                'description' => 'El último estreno de Marvel llega a la plataforma Disney Plus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
