<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $comics_arr = config('comics');

        foreach ($comics_arr as  $comic_element) {
            $new_comic = new Comic();

            $new_comic->title = $comic_element['title'];
            $new_comic->description = $comic_element['description'];
            $new_comic->thumb = $comic_element['thumb'];
            $new_comic->price = $comic_element['price'];
            $new_comic->series = $comic_element['series'];
            $new_comic->sale_date = $comic_element['sale_date'];
            $new_comic->type = $comic_element['type'];
            $new_comic->save();
        }
    }
}
