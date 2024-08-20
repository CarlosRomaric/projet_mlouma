<?php

namespace Database\Seeders;

use App\Models\TypeEntretien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeEntretienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeEntretiens = [
            'Paillage',
            'Désherbage manuel',
            'Désherbage mécanique',
            'Egourmandage',
            'Effeuillage',
            'Récolte',
            'Saignée'
        ];

        foreach ($typeEntretiens as $typeEntretien) {
            TypeEntretien::create([
                'name' => $typeEntretien
            ]);
        }
    }
}
