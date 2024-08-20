<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Agribusiness;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AgribusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $region = Region::first();
        $regionSudComoe = Region::where('name','Région de Sud-Comoé')->first();
        //dd($regionSudComoe);
        Agribusiness::create([
            'acronym'=>'IDP',
            'name' => 'INDEPENDANT',
            'person_responsible_name'=>'Admin',
            'person_responsible_phone'=>'+225 0000000',
            "region_id"=>$region->id,
            "departement_id"=>$region->departements->first()->id,
            'address'=>$region->departements->first()->name
        ]);

        Agribusiness::create([
            'acronym'=>'CAUA',
            'name' => 'Coopérative des agriculteurs unies du Sud-Comoé',
            'person_responsible_name'=>'Carlos Romaric',
            'person_responsible_phone'=>'0778546246',
            "region_id"=>$regionSudComoe->id,
            "departement_id"=>$regionSudComoe->departements->first()->id,
            "address"=>$regionSudComoe->departements->first()->name,
        ]);
    }
}
