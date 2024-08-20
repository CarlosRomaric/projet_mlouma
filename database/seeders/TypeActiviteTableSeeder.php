<?php

namespace Database\Seeders;

use App\Models\TypeActivite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActiviteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeActivites = [
            'DISTRIBUTION DE PRODUIT',
            'UTILISATION DE PRODUIT',
            'ENTRETIEN',
        ];

        foreach ($typeActivites as $typeActivite) {
            TypeActivite::create([
                'name' => $typeActivite
            ]);
        }
    }
}
