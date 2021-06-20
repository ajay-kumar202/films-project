<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gerneData = [
            ["name"=>"action","slug"=>\Str::slug("action")],
            ["name"=>"adventure","slug"=>\Str::slug("adventure")],
            ["name"=>"animation","slug"=>\Str::slug("animation")],
            ["name"=>"biography","slug"=>\Str::slug("biography")],
            ["name"=>"comedy","slug"=>\Str::slug("comedy")],
            ["name"=>"crime","slug"=>\Str::slug("crime")],
            ["name"=>"documentary","slug"=>\Str::slug("documentary")],
            ["name"=>"drama","slug"=>\Str::slug("drama")],
            ["name"=>"family","slug"=>\Str::slug("family")],
            ["name"=>"fantasy","slug"=>\Str::slug("fantasy")],
            ["name"=>"game show","slug"=>\Str::slug("game show")],
            ["name"=>"history","slug"=>\Str::slug("history")],
            ["name"=>"horror","slug"=>\Str::slug("horror")],
            ["name"=>"music","slug"=>\Str::slug("music")],
            ["name"=>"mystery","slug"=>\Str::slug("mystery")],
            ["name"=>"romance","slug"=>\Str::slug("romance")],
            ["name"=>"sci-fi","slug"=>\Str::slug("sci-fi")],
            ["name"=>"sport","slug"=>\Str::slug("sport")],
            ["name"=>"superhero","slug"=>\Str::slug("superhero")],
            ["name"=>"thriller","slug"=>\Str::slug("thriller")],
            ["name"=>"war","slug"=>\Str::slug("war")],
            ["name"=>"western","slug"=>\Str::slug("western")]
        ];

        \DB::table("genres")->insert($gerneData);
    }
}
