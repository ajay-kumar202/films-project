<?php

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filmData = [
          [
              "name" => "The Conjuring",
              "slug" => \Str::slug("The Conjuring"),
              "description" => "The Warrens investigate a murder that may be linked to a demonic possession.",
              "country" => "USA",
              "cover_image" => "https://m.media-amazon.com/images/M/MV5BNmE3Njc4OTktM2M3NC00Y2RlLWFmZDEtODNiZDQ4NGE5OTE2XkEyXkFqcGdeQXVyMTA3MDk2NDg2.V1_SY500_CR10,40,340,500.jpg",
              "release_date" => "2021-06-04",
              "rating" => rand(1,5),
              "ticket_price" => '580.00'
          ],
            [
                "name" => "Triumph",
                "slug" => \Str::slug("Triumph"),
                "description" => "Inspired by a real story, a determined high school senior strives to be a wrestler one last time despite having cerebral palsy and goes to extreme lengths, crushing obstacles and inspiring others along his journey to prove his abilities.",
                "country" => "USA",
                "cover_image" => "https://m.media-amazon.com/images/M/MV5BNzFjZjEyZTEtZGI2Yi00ZWE5LWI5MmUtNWFiMGJiYmYxYzU4XkEyXkFqcGdeQXVyMTY5NTkwNDk@.V1_SY500_CR10,40,340,500.jpg",
                "release_date" => "2021-04-30",
                "rating" => rand(1,5),
                "ticket_price" => '550.00'
            ],
            [
                "name" => "Buckskin",
                "slug" => \Str::slug("Buckskin"),
                "description" => "Set in 1820, a Texan fur trapper journeys into the mysterious Buckskin woods in the hopes of saving a lost young boy.	",
                "country" => "USA",
                "cover_image" => "https://m.media-amazon.com/images/M/MV5BNDEzMjk5ZDAtNzFhMC00MTAyLWFhYzMtZDg1Mjk4NDlkZWIxXkEyXkFqcGdeQXVyNDAxOTQxMjk@.V1_SY500_CR10,40,340,500.jpg",
                "release_date" => "2021-06-11",
                "rating" => rand(1,5),
                "ticket_price" => '500.00'
            ],
            [
                "name" => "Rogue Hostage",
                "slug" => \Str::slug("Rogue Hostage"),
                "description" => "Single father and former Marine Kyle Snowden, on a routine stop for his job in Child Protective Services, Kyle finds himself and a group of innocent customers trapped inside his stepfather's store.",
                "country" => "USA",
                "cover_image" => "https://m.media-amazon.com/images/M/MV5BMDY0YjVhMjMtY2U4Yy00NjNkLTlmMzYtMmVmYTA4M2IzOTAzXkEyXkFqcGdeQXVyMTEyNDk3MjY3.V1_SY500_CR10,40,340,500.jpg",
                "release_date" => "2021-06-11",
                "rating" => rand(1,5),
                "ticket_price" => '510.00'
            ],
            [
                "name" => "Infinite",
                "slug" => \Str::slug("Infinite"),
                "description" => "A sci-fi, action adaption that examines the concept of reincarnation through remarkable visuals and well-established characters who need to use their memories and past learnt skills to ensure the future is protected from Infinites that seek to end all life on the planet.",
                "country" => "USA",
                "cover_image" => "https://m.media-amazon.com/images/M/MV5BZTU5MmY0ZjctYTNlOS00MDIyLWJkZTAtNzBiOTkyNWI5MGY2XkEyXkFqcGdeQXVyNTc4MjczMTM@.V1_SY500_CR10,40,340,500.jpg",
                "release_date" => "2021-06-10",
                "rating" => rand(1,5),
                "ticket_price" => '510.00'
            ]
        ];

        \DB::table("films")->insert($filmData);
    }
}
