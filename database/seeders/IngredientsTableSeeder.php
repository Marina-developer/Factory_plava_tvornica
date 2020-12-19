<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
  public function run()
    {

        $items = [

            ['title' => 'Onion','title_cro' => 'Luk', 'slug' => 'onion', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Tomato','title_cro' => 'Rajčica', 'slug' => 'tomato', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Potato','title_cro' => 'Krumpir', 'slug' => 'potato', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Mushrooms','title_cro' => 'Gljive', 'slug' => 'mushrooms', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
             ['title' => 'Cheese','title_cro' => 'Sir', 'slug' => 'cheese', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
              ['title' => 'Garlic','title_cro' => 'Češnjak', 'slug' => 'garlic', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                ['title' => 'Celery','title_cro' => 'Celer', 'slug' => 'celery', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                  ['title' => 'Pumpkin','title_cro' => 'Bundeva', 'slug' => 'pumpkin', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                    ['title' => 'Oil','title_cro' => 'Ulje', 'slug' => 'oil', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                     ['title' => 'Tomato sauce','title_cro' => 'Umak od rajčice', 'slug' => 'tomato_sauce', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],


        ];

               foreach ($items as $item) {
            \App\Models\Ingredient::create($item);
        }


        $limit = 11;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('ingredients')->insert([
 
            ]);
    }
}}
