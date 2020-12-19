<?php

namespace Database\Seeders;
use App\Models\Table;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $items = [

            ['meals_id' => '1','tags_id' => '1', 'ingredients_id' => '1', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
              ['meals_id' => '1','tags_id' => '3', 'ingredients_id' => '2', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                ['meals_id' => '1','tags_id' => '5', 'ingredients_id' => '4', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                  ['meals_id' => '1','tags_id' => '1', 'ingredients_id' => '5', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                  ['meals_id' => '1','tags_id' => '1', 'ingredients_id' => '10', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                  ['meals_id' => '1','tags_id' => '1', 'ingredients_id' => '9', 'categories_id' => '3','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                  ['meals_id' => '2','tags_id' => '1', 'ingredients_id' => '1', 'categories_id' => '1','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                   ['meals_id' => '2','tags_id' => '5', 'ingredients_id' => '10', 'categories_id' => '1','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                    ['meals_id' => '2','tags_id' => '4', 'ingredients_id' => '9', 'categories_id' => '1','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                    ['meals_id' => '2','tags_id' => '4', 'ingredients_id' => '6', 'categories_id' => '1','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                    ['meals_id' => '3','tags_id' => '1', 'ingredients_id' => '1', 'categories_id' => '4','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                      ['meals_id' => '3','tags_id' => '5', 'ingredients_id' => '5', 'categories_id' => '4','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                        ['meals_id' => '4','tags_id' => '1', 'ingredients_id' => '1', 'categories_id' => '2','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                          ['meals_id' => '4','tags_id' => '5', 'ingredients_id' => '3', 'categories_id' => '2','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                           ['meals_id' => '4','tags_id' => '4', 'ingredients_id' => '9', 'categories_id' => '2','created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
                   
        ];

        foreach ($items as $item) {
            \App\Models\Table::create($item);
        }

     

        $limit = 16;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tables')->insert([
                

            ]);
      }
     } }
