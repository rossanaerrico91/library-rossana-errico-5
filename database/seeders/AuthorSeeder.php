<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['id'=>1,'nome'=>'Dante','cognome'=>'Alighieri']);
        Author::create(['id'=>2,'nome'=>'Emily','cognome'=>'Dickinson']);
        Author::create(['id'=>3,'nome'=>'James','cognome'=>'Norbury']);
    }
}
