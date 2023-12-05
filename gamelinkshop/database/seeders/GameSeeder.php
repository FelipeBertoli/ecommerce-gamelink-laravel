<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            'game_name' => 'Defend The Crown',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 2,
            'genre_id_2' => null,
            'sold_quatity' => 0,
            'price' => 10.00,
            'game_image' => '../../img/games/defend-the-crown.PNG',
            'author_id' => 1,
            'game_link' => 'http://140.238.239.164/'
        ]);

        Game::create([
            'game_name' => 'Star Wars: Arcade',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 4,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 13.99,
            'game_image' => '../../img/games/star-wars.PNG',
            'author_id' => 1,
            'game_link' => 'https://www.greenfoot.org/scenarios/31211'
        ]);

        Game::create([
            'game_name' => 'Running Nikuman',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 2,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 7.99,
            'game_image' => '../../img/games/running-nikuman.PNG',
            'author_id' => 2,
            'game_link' => 'https://www.greenfoot.org/scenarios/31239'
        ]);

        Game::create([
            'game_name' => 'Resident Good',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 4,
            'genre_id_2' => 6,
            'sold_quatity' => 0,
            'price' => 12.49,
            'game_image' => '../../img/games/resident-good.PNG',
            'author_id' => 3,
            'game_link' => 'https://www.greenfoot.org/scenarios/31237'
        ]);

        Game::create([
            'game_name' => 'Heber´s Asteroids',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 1,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 8.79,
            'game_image' => '../../img/games/asteroids.PNG',
            'author_id' => 4,
            'game_link' => 'https://www.greenfoot.org/scenarios/31268'
        ]);

        Game::create([
            'game_name' => 'The Cave',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 3,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 15.15,
            'game_image' => '../../img/games/cave.PNG',
            'author_id' => 5,
            'game_link' => 'https://www.greenfoot.org/scenarios/31263'
        ]);

        Game::create([
            'game_name' => 'Infuser',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 5,
            'genre_id_2' => null,
            'sold_quatity' => 0,
            'price' => 12.49,
            'game_image' => '../../img/games/infuser.PNG',
            'author_id' => 6,
            'game_link' => 'https://www.greenfoot.org/scenarios/31236'
        ]);

        Game::create([
            'game_name' => 'Cuscuz & Aliens',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 1,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 6.70,
            'game_image' => '../../img/games/cuscuz.PNG',
            'author_id' => 7,
            'game_link' => 'https://www.greenfoot.org/scenarios/31229'
        ]);

        Game::create([
            'game_name' => 'Mateus´s Asteroids',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 1,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 7.00,
            'game_image' => '../../img/games/m-asteroids.PNG',
            'author_id' => 9,
            'game_link' => 'https://www.greenfoot.org/scenarios/31230'
        ]);

        Game::create([
            'game_name' => 'Cosmic Combat',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 1,
            'genre_id_2' => 6,
            'sold_quatity' => 0,
            'price' => 10.39,
            'game_image' => '../../img/games/cosmic-combat.PNG',
            'author_id' => 8,
            'game_link' => 'https://www.greenfoot.org/scenarios/31218'
        ]);

        Game::create([
            'game_name' => 'Zombie Game',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 4,
            'genre_id_2' => 6,
            'sold_quatity' => 0,
            'price' => 13.82,
            'game_image' => '../../img/games/zombie-game.PNG',
            'author_id' => 10,
            'game_link' => 'https://www.greenfoot.org/scenarios/31209'
        ]);


        Game::create([
            'game_name' => 'Flappy',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 5,
            'genre_id_2' => null,
            'sold_quatity' => 0,
            'price' => 7.11,
            'game_image' => '../../img/games/flappy.PNG',
            'author_id' => 11,
            'game_link' => 'https://www.greenfoot.org/scenarios/31207'
        ]);

        Game::create([
            'game_name' => 'Jogo da Formiga',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'genre_id' => 2,
            'genre_id_2' => 5,
            'sold_quatity' => 0,
            'price' => 4.99,
            'game_image' => '../../img/games/formiga.PNG',
            'author_id' => 12,
            'game_link' => 'https://www.greenfoot.org/scenarios/31206'
        ]);

    }
}
