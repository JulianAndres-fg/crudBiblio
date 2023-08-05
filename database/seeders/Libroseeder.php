<?php

namespace Database\Seeders;
use App\Models\libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Libroseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        libro::factory(20)->create();
    }
}
