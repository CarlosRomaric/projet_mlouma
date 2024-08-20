<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Departement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RegionDepartementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regionDepartement= [
            [
              "region"=> "Région du Folon",
              "departement"=> ["Kaniasso", "Minignan"]
            ],
            [
              "region"=> "Région du Bagoué",
              "departement"=> ["Boundiali", "Kouto", "Tengréla"]
            ],
            [
              "region"=> "Région du Poro",
              "departement"=> ["Dikodougou", "Korhogo", "M’Bengué", "Sinématiali"]
            ],
            [
              "region"=> "Région du Tchologo",
              "departement"=> ["Ferkessédougou", "Kong", "Ouangolodougou"]
            ],
            [
              "region"=> "Région du Worodougou",
              "departement"=> ["Kani", "Séguéla"]
            ],
            [
              "region"=> "Région du Hambol",
              "departement"=> ["Dabakala", "Katiola", "Niakaramadougou"]
            ],
            [
              "region"=> "Région du Gbêkê",
              "departement"=> ["Béoumi", "Botro", "Bouaké", "Sakassou"]
            ],
            [
              "region"=> "Région de Bounkani",
              "departement"=> ["Bouna", "Doropo", "Nassian", "Téhini"]
            ],
            [
              "region"=> "Région du Gontougou",
              "departement"=> ["Bondoukou", "Koun-Fao", "Sandégué", "Tanda", "Transua"]
            ],
            [
                "region"=> "Région de l'Agneby-Tiassa",
                "departement"=> ["Agboville ", "Sikensi ", "Taabo ", "Tiassalé "]
            ],
            [
                "region"=> "Région du Bafing",
                "departement"=> ["Koro  ", "Ouaninou", "Touba"]
            ],
            [
                "region"=> "Région du Belier",
                "departement"=> ["Didiévi", "Djékanou ", "Tiébissou ","Toumodi "]
            ],
            [
                "region"=> "Région du Cavally",
                "departement"=> ["Blolequin ", "Guiglo  ", "Taï  ","Toulepleu "]
            ],
            [
                "region"=> "District Autonome d'Abidjan",
                "departement"=> ["Abobo", "Adjamé", "Attécoubé", "Cocody", "Koumassi", "Marcory", "Plateau","Port-Bouët","Treichville","Yopougon","Anyama","Brofodoumé","Bingerville","Songon"]
            ],
            [
                "region"=> "District Autonome de Yammoussoukro",
                "departement"=> ["Attiégouakro  ", "Yamoussoukro"]
            ],
            [
                "region"=> "Région du Gbôkle",
                "departement"=> ["Fresco", "Sassandra"]
            ],
            [
                "region"=> "Région du Goh",
                "departement"=> ["Dabou", "Grand-Lahou","Jacqueville"]
            ],
            [
                "region"=> "Région des Grand Ponts",
                "departement"=> ["Gagnoa ", "Oumé "]
            ],
            [
                "region"=> "Région du Guémon",
                "departement"=> ["Bangolo", "Duékoué", "Facobly","Kouibly"]
            ],
            [
                "region"=> "Région du Haut Sassandra",
                "departement"=> ["Daloa", "Issia", "Vavoua ","Zokougbeu "]
            ],
            [
                "region"=> "Région de l'Iffou",
                "departement"=> ["Daoukro ", "Ouelle", "M’bahiakro ","Prikro"]
            ],
            [
                "region"=> "Région de l'Indenié-Gjuablin",
                "departement"=> ["Abengourou", "Agnibilékrou", "Bettié "]
            ],
            [
                "region"=> "Région de Loh-Djiboua",
                "departement"=> ["Divo", "Guitry ", "Lakota  "]
            ],
            [
                "region"=> "Région de la Marahoue",
                "departement"=> ["Bonon ", "Bouafle ", "Gohitafla", "Sinfra", "Zuénoula "]
            ],
            [
                "region"=> "Région de la Me",
                "departement"=> ["Adzopé", "Akoupé ", "Alépé ", "Yakasse-Attobrou"]
            ],
            [
                "region"=> "Région de la Monronou",
                "departement"=> ["Arrah", "Bongouanou", "M’batto "]
            ],
            [
                "region"=> "Région de la Nawa",
                "departement"=> ["Buyo", "Guéyo ", "Méagui ", "Soubré ",""]
            ],
            [
                "region"=> "Région du N'Zi",
                "departement"=> ["Bocanda ", "Dimbokro ", "Kouassi-Kouassikro"]
            ],
            [
                "region"=> "Région de San-Pedro",
                "departement"=> ["San-Pédro", "Tabou"]
            ],
            [
                "region"=> "Région de Sud-Comoé",
                "departement"=> ["Aboisso ", "Adiaké ","Grand-Bassam ","Tiapoum "]
            ],
            [
                "region"=> "Région du Tonkpi",
                "departement"=> ["Biankouma ", "Danané ","Man ","Sipilou ","Zouan-Hounien ",""]
            ],
            [
                "region"=> "Région du Worodougou",
                "departement"=> ["Kani", "Séguéla",]
            ],
            
          ];
       
        $regions = $regionDepartement;

        foreach ($regions as $regionData) {
            
            $region = new Region([ 
                'name' => $regionData['region']
            ]);
            $region->save();
            
            foreach ($regionData['departement'] as $departementName) {
                $departement = new Departement([
                    'name' => $departementName,
                    'region_id' => $region->id
                ]);
                $departement->save();
            }
        }
    }
}
