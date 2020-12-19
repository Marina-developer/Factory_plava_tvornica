<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;
use App\Models\Tag;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {

        $items = [

            ['title' => 'Food','title_cro' => 'Hrana', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
['title' => 'Croatian','title_cro' => 'Hrvatsko', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
['title' => 'Italian','title_cro' => 'Talijansko', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
['title' => 'English','title_cro' => 'Englesko', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
['title' => 'Dishes','title_cro' => 'Jela', 'slug' => 'croatian_food', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
        ];

        foreach ($items as $item) {
            \App\Models\Tag::create($item);
        }

     

        $limit = 6;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tags')->insert([
                

            ]);
      }
     } }
