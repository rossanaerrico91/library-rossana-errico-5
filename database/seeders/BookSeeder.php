<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create(['title'=>'La Divina Commedia','pages'=>250,'author_id'=>1]);
        Book::create(['title'=>'Convivio','pages'=>250,'author_id'=>1]);
        /*Book::create(['title'=>'Harry Potter','pages'=>305]);
        Book::create(['title'=>'Divina COmmedia','pages'=>1000]);*/
    }
}
