<?php

namespace Database\Seeders;

use App\Models\Telephone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class telephonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Telephone::factory(5)->create();
    }
}
