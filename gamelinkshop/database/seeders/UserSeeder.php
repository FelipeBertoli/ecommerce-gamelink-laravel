<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cart;
use App\Models\Library;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Felipe Bertoli Oliveira',
            'username' => 'Felipe Bertoli',
            'email' =>  'felipebertoli@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'João Pedro Brustolim Szlachta',
            'username' => 'João Slazchta',
            'email' =>  'joaoslazchta@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Rafael Favoreto',
            'username' => 'Rafael Favoreto',
            'email' =>  'rafaelfavoreto@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Heber Junior',
            'username' => 'Heber Junior',
            'email' =>  'heber@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Matheus Trevisan',
            'username' => 'Matheus Trevisan',
            'email' =>  'matheustrevisan@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Pedro Xavier',
            'username' => 'Pedro Xavier',
            'email' =>  'pedroxavier@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Caio',
            'username' => 'Caio',
            'email' =>  'caio@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Diego Preissler Arial',
            'username' => 'Diego Preissler',
            'email' =>  'diegopreissler@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Mateus',
            'username' => 'Mateus',
            'email' =>  'mateus@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Guilherme Bruschi',
            'username' => 'Guilherme Bruschi',
            'email' =>  'guilhermebruschi@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Pedro Brandão',
            'username' => 'Pedro Brandão',
            'email' =>  'pedrobrandao@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Sérgio Tanaka',
            'username' => 'Sérgio Tanaka',
            'email' =>  'sergiotanaka@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);

        $user = User::create([
            'name' => 'Samuel Félix',
            'username' => 'Samuel Félix',
            'email' =>  'samuelfelix@edu.unifil.br',
            'password' => 'gamelink',
            'profile_pic' => '',
            'role' => 'publisher' 
        ]);

        Cart::create([
            'totalItens'=> 0,
            'price' => 00.00,
            'user_id' => $user->id
        ]);

        Library::create([
            'user_id' => $user->id
        ]);
    }
}
