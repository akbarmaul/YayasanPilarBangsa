<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $tag = array("kanopi","tangga","pagar","partisi","ranjang");
        foreach(range(0,4) as $index){
            DB::table('portfolios')->insert([
                'name'=> $faker->name,
                'description' => $faker->word,
                'tags' => $tag[$index],
                'image' => 'img'
                   
            ]);
        }
    }
}
