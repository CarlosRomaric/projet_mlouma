<?php

namespace Database\Seeders;

use App\Models\Speculation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpeculationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $speculations = [
            'Café-Cacao',
            'Anacarde',
            'Coton',
            'Palmier à huile',
            'Hévéa',
            'Colas',
            'Riz',
            'Banane Plantain',
            'Manioc',
            'Igname',
            'Patate',
            'Tomate',
            'Oignon',
            'Piment',
            'Gombo',
            'Aubergine',
            'Mangue',
            'Mangue',
            'Gingembre',
            'Karité',
            'Coco',
            'Banane désert (douce)',
            'Ananas',
            'Arachide',
            'Soja',
            'Canne à sucre',
        ];

        

        foreach ($speculations as $speculation) {
            Speculation::create([
                'name' => $speculation
            ]);
        }
    }
}
