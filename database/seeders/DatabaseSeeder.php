<?php

namespace Database\Seeders;

use App\Models\Filiere;
use App\Models\Module;
use App\Models\Stagiaire;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call([telephonesTableSeeder::class]);
        // $this -> call([modulesTableSeeder::class]);
        // $this -> call([filieresTableSeeder::class]);
        // $this->call([stagiairesTableSeeder::class]);

        $stagiaires = Stagiaire::all();

        foreach($stagiaires as $s)
        {
            $s -> modules() -> attach(fake() -> randomElements(Module::all() -> pluck("id"),rand(1,5)));
        }

        $filieres = Filiere::all();

        foreach($filieres as $f)
        {
            $f -> modules() -> attach(fake() -> randomElements(Module::all() -> pluck('id'),rand(1,5)));
        }


    }
}
