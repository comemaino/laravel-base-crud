<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_list = config('comics');
        foreach ($comics_list as $comic) {
            $new_comic = new Comic();
            $new_comic->fill($comic);
            // $new_comic->title = $comic['title'];
            // $new_comic->description = $comic['description'];
            // $new_comic->thumb = $comic['thumb'];
            // $new_comic->price = $comic['price'];
            // $new_comic->series = $comic['series'];
            // $new_comic->sale_date = $comic['sale_date'];
            // $new_comic->type = $comic['type'];
            $new_comic->save();
        }
    }
}
