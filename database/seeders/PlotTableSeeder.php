<?php

namespace Database\Seeders;

use App\Models\Plot;
use App\Models\Farmer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $farmer = Farmer::first();
        
        $data = [
            "code_plot"=>$farmer->idendifier.'PAR'.str_pad(rand(0, 99999), 3, '0', STR_PAD_LEFT),
            "total_area"=>"20",
            "latitude"=>"5.135698",
            "longitude"=>"-7.564985",
            "gps_code"=>"EDA",
            "farmer_id"=>$farmer->id
        ];

        Plot::create($data);
    }
}
