<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(BodasSeeder::class);
        $this->call(categoriesSeeder::class);
        $this->call(productsSeeder::class);
    }
}
