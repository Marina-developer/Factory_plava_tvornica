<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Meal;
use Faker\Factory as Faker;
class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {

        $items = [

            ['title' => 'Pizza','slug' => 'pizza','description' => 'Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients ','description_cro' => 'Pizza je slano jelo talijanskog podrijetla koje se sastoji od obično okrugle, spljoštenog dizanog tijesta na bazi pšenice prelivenog rajčicom, sirom i često raznim drugim sastojcima', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Cobanac', 'slug' => 'cobanac','description' => 'A typical dish from the eastern Croatian region of Slavonija, cobanac is a spicy meat stew.','description_cro' => 'Tipično jelo s područja Slavonije, istočne Hrvatske, Cobanac je začinjeno mesno varivo.', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Soupe à l’oignon', 'slug' => 'soupe_a_i_oignon','description' => 'Soupe à l’oignon is a traditional French soup made of onions and beef stock, usually served with croutons and melted cheese on top. ','description_cro' => 'Soupe à l’oignon je tradicionalna francuska juha od luka i goveđeg temeljca, koja se obično poslužuje s krutonima i topljenim sirom na vrhu.', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],
            ['title' => 'Shepherd’s Pie', 'slug' => 'stepherd_s_pie','description' => 'Made with lamb and topped with mashed potatoes, shepherd’s pie is a hearty dish that is popular throughout the United Kingdom.','description_cro' => 'Napravljena od janjetine i prelivena pireom od krumpira, Shepherd’s Pie je krepko jelo koje je popularno u cijeloj Velikoj Britaniji.', 'created_at' => \Carbon\Carbon::now(), 'updated_at' =>  \Carbon\Carbon::now()],

        ];

        foreach ($items as $item) {
           \App\Models\Meal::create($item);
        }

       

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('meals')->insert([
              

            ]);
    }
     } }
      
