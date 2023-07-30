<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Appelez votre seeder de clients ici
        $this->call(ClientSeeder::class);
        $this->call(ComptesSeeder::class);

    }



}
