<?php

namespace Database\Seeders;

use App\Models\Artigo;
use App\Models\Etiqueta;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Artigo::factory(40)->create();
        $etiquetas = Etiqueta::factory(8)->create();
        Artigo::all()->each(function ($artigo) use ($etiquetas) {
            $tags = $etiquetas->random(rand(1, 3))->pluck('id')->toArray();
            $artigo->etiquetas()->attach($tags);
        });
    }
}

// $user->roles()->attach(
//     $roles->random(rand(1, 3))->pluck('id')->toArray()
// ); 