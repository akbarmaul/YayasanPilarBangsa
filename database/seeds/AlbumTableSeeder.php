<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $name= array("kanopi","tangga","pagar","partisi","ranjang");
        foreach(range(0,4) as $index){
            DB::table('albums')->insert([
                'name'=> $name[$index],
                'description'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'created_at' =>$faker->date($format = 'Y-m-d', $max = 'now'),       
            ]);
        }


    }
}
