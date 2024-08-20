<?php

namespace Database\Seeders;

use App\Models\Agribusiness;
use App\Models\Farmer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $agribusiness = Agribusiness::first();
        //dd($agribusiness->departement->name);
        $data =  [
            'agribusiness_id' => $agribusiness->id,
            'locality' => $agribusiness->departement->name,
            'identifier' => 'PAR001',
            'fullname' => 'Koutou Bissie Toussaint Sandrine',
            'sexe' => 'F',
            'phone' => '0779675359',
            'born_date' => '1997-01-11',
            'born_place' => 'Bonoua',
            'manager_fullname'=>'N\'Guetta Carlos Romaric',
            'manager_sexe'=>'H',
            'manager_phone'=>'0575506149',
            'marital_status'=>'CELIBATAIRE',
            'number_of_children' => '1',
            'number_of_dependants' => '3',
            'number_of_women' => '1',
            'number_of_plots' => '1',
            'region_id'=>$agribusiness->region->id,
            'departement_id'=>$agribusiness->departement->id,
        ];

        Farmer::create($data);
    }
}
