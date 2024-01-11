<?php

namespace Database\Seeders;

use App\Models\dvd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DvdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dvd1 = new dvd;
        $dvd1->dvd_code = '2EA';
        $dvd1->img_url = 'https://cdn.anime-planet.com/anime/primary/the-ancient-magus-bride-those-awaiting-a-star-1-190x271.jpg';
        $dvd1->harga = '30.000';
        $dvd1->title = 'The Ancient Magus Bride: Those Awaiting a Star';
        $dvd1->rilis = '2016 - 2017';
        $dvd1->durasi = '3 eps x 24 min';
        $dvd1->produser = 'WIT Studio';
        $dvd1->deskripsi = 'When Angelica sends Chise a pile of books to help with her magical studies, Chise is surprised to discover a childrens picture book among them that she once owned years ago as a child';
        $dvd1->created_at = new \DateTime();
        $dvd1->updated_at = new \DateTime();
        $dvd1->save();

        $dvd2 = new dvd;
        $dvd2->dvd_code = '2QE';
        $dvd2->img_url = 'https://cdn.anime-planet.com/anime/primary/jojos-bizarre-adventure-stardust-crusaders-battle-in-egypt-1-190x285.jpg';
        $dvd2->harga = '40.000';
        $dvd2->title = 'JoJo s Bizarre Adventure: Stardust Crusaders';
        $dvd2->rilis = '2015';
        $dvd2->durasi = '24 eps';
        $dvd2->produser = 'David Production';
        $dvd2->deskripsi = 'After 30 days of travel across the world, plagued with countless battles, Jotaro and his companions have finally arrived in Egypt! Now only the strongest Stand users remain to rebuff our heroes final march on Cairo';
        $dvd2->created_at = new \DateTime();
        $dvd2->updated_at = new \DateTime();
        $dvd2->save();

        $dvd3 = new dvd;
        $dvd3->dvd_code = '2KU';
        $dvd3->img_url = 'https://cdn.anime-planet.com/anime/primary/fire-force-2nd-season-1-190x285.jpg?t=1625908051';
        $dvd3->harga = '50.000';
        $dvd3->title = 'Fire Force 2nd Season';
        $dvd3->rilis = '2020';
        $dvd3->durasi = '24 eps';
        $dvd3->produser = 'David Production';
        $dvd3->deskripsi = 'After 30 days of travel across the world, plagued with countless battles, Jotaro and his companions have finally arrived in Egypt! Now only the strongest Stand users remain to rebuff our heroes final march on Cairo';
        $dvd3->created_at = new \DateTime();
        $dvd3->updated_at = new \DateTime();
        $dvd3->save();
    }
}
