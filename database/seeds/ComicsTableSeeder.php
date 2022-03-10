<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");


        foreach($comics as $comic){
            $newComic = new Comic();
            
        }
        
    }
}
