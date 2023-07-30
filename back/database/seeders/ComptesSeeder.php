<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComptesSeeder extends Seeder
{
    public function run()
    {
        // Vous pouvez insérer plusieurs enregistrements en utilisant la méthode insert()
        DB::table('comptes')->insert([
            [
                'solde' => 1000,
                'num_compte' => '123456789',
                'fournisseur' => 'om',
                'client_id' => 1, // Remplacez par l'ID du client auquel ce compte appartient
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'solde' => 2000,
                'num_compte' => '987654321',
                'fournisseur' => 'wv',
                'client_id' => 2, // Remplacez par l'ID du client auquel ce compte appartient
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Ajoutez d'autres enregistrements selon vos besoins
        ]);
    }
}

