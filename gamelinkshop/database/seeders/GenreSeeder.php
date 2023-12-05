<?php

namespace Database\Seeders;

use App\Models\GameGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        GameGenre::create([
            'genre_name' => 'Ficção Científica'
        ]);

        GameGenre::create([
            'genre_name' => 'Estratégia'
        ]);

        GameGenre::create([
            'genre_name' => 'Aventura'
        ]);

        GameGenre::create([
            'genre_name' => 'Ação'
        ]);

        GameGenre::create([
            'genre_name' => 'Plataforma'
        ]);

        GameGenre::create([
            'genre_name' => 'Shooter'
        ]);
    }
}
