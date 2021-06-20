<?php

use Illuminate\Database\Seeder;

class FilmGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $filmData = [];
        $genreData = [];
        $films = \DB::table("films")->get();
        $genres = \DB::table("genres")->get();

        if (!empty($films) && sizeof($films)) {
            foreach ($films as $film) {
                $filmData[$film->slug] = $film->id;
            }
        }

        if (!empty($genres) && sizeof($genres)) {
            foreach ($genres as $genre) {
                $genreData[$genre->slug] = $genre->id;
            }
        }

        $filmGenreData =
            [

                [
                    "film_id" => $filmData[\Str::slug("The Conjuring")],
                    "genre_id" => $genreData[\Str::slug("Thriller")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("The Conjuring")],
                    "genre_id" => $genreData[\Str::slug("Horror")],
                ],[
                    "film_id" => $filmData[\Str::slug("Triumph")],
                    "genre_id" => $genreData[\Str::slug("Drama")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Buckskin")],
                    "genre_id" => $genreData[\Str::slug("Action")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Buckskin")],
                    "genre_id" => $genreData[\Str::slug("Western")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Rogue Hostage")],
                    "genre_id" => $genreData[\Str::slug("Action")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Rogue Hostage")],
                    "genre_id" => $genreData[\Str::slug("Thriller")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Infinite")],
                    "genre_id" => $genreData[\Str::slug("Sci-Fi")],
                ],
                [
                    "film_id" => $filmData[\Str::slug("Infinite")],
                    "genre_id" => $genreData[\Str::slug("Thriller")],
                ]
            ];

        \DB::table("film_genres")->insert($filmGenreData);
    }
}
