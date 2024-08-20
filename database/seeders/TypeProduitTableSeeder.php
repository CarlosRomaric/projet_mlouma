<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\TypeProduit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeProduitsByCategories = [
            [
                "categories"=> "Phytosanitaire",
                "typeProduits"=> ["Fongicide", "Herbicide Total", "Herbicide Selectif", "Insecticide", "Fongicide", "Maturateur",]
            ],
            [
                "categories"=> "Intrant",
                "typeProduits"=> ["Engrais", "Semence"]
            ],
        ];

        // foreach ($typeProduits as $typeProduit) {
        //     TypeProduit::create([
        //         'name' => $typeProduit
        //     ]);
        // }

        $datas = $typeProduitsByCategories;
        
        foreach ($datas as $data) {
            
            $categorie = new Categorie([ 
                'name' => $data['categories']
            ]);
            $categorie->save();
            foreach ( $data['typeProduits'] as $typeProduitName ) {
                $typeProduit = new TypeProduit([
                    'name' => $typeProduitName,
                    'categorie_id' => $categorie->id
                ]);

                $typeProduit->save();
            }
        }
    }
}
