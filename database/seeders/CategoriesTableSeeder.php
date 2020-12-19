<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [

            ['title' => 'Croatian Traditional Food','title_cro' => 'Hrvatsko tradicionalno jelo', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'English Traditional Food','title_cro' => 'Englesko tradicionalno jelo', 'slug' => 'english_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Italian Traditional Food','title_cro' => 'Talijansko tradicionalno jelo', 'slug' => 'italian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Others', 'slug' => 'others','title_cro' => 'Ostalo', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],

        ];

        foreach ($items as $item) {
            \App\Models\Category::create($item);
        }

     

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('categories')->insert([
                

            ]);
    }
}}
