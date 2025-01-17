<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AlbumTableSeeder::class);
    }
}
