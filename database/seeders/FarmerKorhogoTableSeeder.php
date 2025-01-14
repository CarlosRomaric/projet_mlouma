<?php

namespace Database\Seeders;

use App\Models\Farmer;
use Illuminate\Support\Str;
use App\Models\Agribusiness;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FarmerKorhogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Chemin vers le fichier JSON
        // $jsonPath = public_path('json/korhogo.json');  // Mettez le chemin correct ici

         // Charger et décoder le fichier JSON
        // $jsonData = File::get($jsonPath);
         //$farmers = json_decode($jsonData, true);

         $farmers = [
            [
                "nom & prénoms" => "YÉO GUISSONGUI",
                "numéro de téléphone" => "0747457944",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA M'BAKAN MAMANDOU",
                "numéro de téléphone" => "0555241884",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIONKOLI KARIDJA",
                "numéro de téléphone" => "0747599483",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOKPORO ",
                "numéro de téléphone" => "0594121457",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FOUGO",
                "numéro de téléphone" => "0505472570",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KODONGO",
                "numéro de téléphone" => "0505472570",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MARIAM",
                "numéro de téléphone" => "0555241884",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KRÉPORI",
                "numéro de téléphone" => "0102070457",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YEFARKIYA",
                "numéro de téléphone" => "0556535480",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIENINGNONFAN",
                "numéro de téléphone" => "0566895142",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOGNIMA BLAHIMA",
                "numéro de téléphone" => "0546515339",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DJENEBA",
                "numéro de téléphone" => "0702544137",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO BOGUIGNON ROSALIE",
                "numéro de téléphone" => "0595828966",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAMANA",
                "numéro de téléphone" => "0544563638",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FATOUMA",
                "numéro de téléphone" => "0556620564",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIEFAGA",
                "numéro de téléphone" => "0586426861",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KADJANYIGUÉ",
                "numéro de téléphone" => "0564657132",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIYALI",
                "numéro de téléphone" => "0564657132",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MÉLARGA",
                "numéro de téléphone" => "0544917428",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIENNY",
                "numéro de téléphone" => "0544917428",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KAFEHÉ",
                "numéro de téléphone" => "0748244848",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FATOUMATA",
                "numéro de téléphone" => "0554262015",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YEGUIYAHA ISSOUF",
                "numéro de téléphone" => "0554881160",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOROTOUM",
                "numéro de téléphone" => "0556118067",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BRAHIMA",
                "numéro de téléphone" => "0555595887",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KATIENNINDJA",
                "numéro de téléphone" => "0749517809",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YANOUNGUI",
                "numéro de téléphone" => "0574589649",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAN",
                "numéro de téléphone" => "0501302808",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MÉLARGA",
                "numéro de téléphone" => "0702522988",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KAPOULETCHIN",
                "numéro de téléphone" => "0702522988",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PEFININ",
                "numéro de téléphone" => "0554395951",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YÉFARKIYA",
                "numéro de téléphone" => "0554395951",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIÉGNOUGO KARIDJA",
                "numéro de téléphone" => "0574818744",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TINNIN",
                "numéro de téléphone" => "0574818744",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO BANAPEHOUELÉ",
                "numéro de téléphone" => "0545412540",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOROTOUM",
                "numéro de téléphone" => "0545412540",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA PÉWORSONGUI",
                "numéro de téléphone" => "0757920085",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PÉKALI SALIMATA",
                "numéro de téléphone" => "0564663908",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO WONDJOU",
                "numéro de téléphone" => "0566986247",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PÉDJOUWELI",
                "numéro de téléphone" => "0554340737",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUANDJO MINATA",
                "numéro de téléphone" => "0564402819",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PARGASSORI",
                "numéro de téléphone" => "0102189761",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUANLO DAOUDA",
                "numéro de téléphone" => "0507161024",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KAPOULETCHIN",
                "numéro de téléphone" => "0503552339",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NALÉGAMA",
                "numéro de téléphone" => "0564402819",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SÉLONTOUM BRAHIMA",
                "numéro de téléphone" => "0564402819",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIDJOU FOLOKO",
                "numéro de téléphone" => "0566716848",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNONGATIO",
                "numéro de téléphone" => "0102070457",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SÉTOU",
                "numéro de téléphone" => "0586011140",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUMAR",
                "numéro de téléphone" => "0777413625",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YÉDJOTCHÈRI",
                "numéro de téléphone" => "0152724293",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUAKOLTIO",
                "numéro de téléphone" => "0747599483",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ LORYAGABA",
                "numéro de téléphone" => "0747599483",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FATOGOMA",
                "numéro de téléphone" => "0141929801",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAN",
                "numéro de téléphone" => "0000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ POGADJOUFOUGOU DRISSA",
                "numéro de téléphone" => "0586574451",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YASSONGUI LASSINA",
                "numéro de téléphone" => "0575312483",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PÉNARIÉL MANDJOUMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIONKOLI",
                "numéro de téléphone" => "0554333491",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TÉNELO MAMANDOU",
                "numéro de téléphone" => "0576476500",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA POGADJOUFOUGOU ROGER",
                "numéro de téléphone" => "0554333491",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEDJOUYÉWON",
                "numéro de téléphone" => "0586322185",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY GNONFONTCHA",
                "numéro de téléphone" => "0586322185",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY TÉNIN IVONNE",
                "numéro de téléphone" => "0556560878",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KIYALI KASSOUM",
                "numéro de téléphone" => "0708173485",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YESSONYÉDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO RIDOUDÉNI",
                "numéro de téléphone" => "0702500082",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DJATA",
                "numéro de téléphone" => "0000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIDOU",
                "numéro de téléphone" => "0000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MÉLARGABA",
                "numéro de téléphone" => "0777322241",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ G. MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WONDJOI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YRIGOLOBA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOLOYERI",
                "numéro de téléphone" => "0747352790",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DRIGNATÉHIA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PÉDIDJOUMATCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GNONROYA",
                "numéro de téléphone" => "0575080100",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ S. MAMADOU",
                "numéro de téléphone" => "0758257190",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ LACINA",
                "numéro de téléphone" => "0748964788",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YÉDJOUFOUNGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ALIMAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KOULOYERI",
                "numéro de téléphone" => "0748669826",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YESSIYÉGNON",
                "numéro de téléphone" => "0748426330",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGACHINNINWORI",
                "numéro de téléphone" => "0501449156",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SEGNONKON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YEWOMBA",
                "numéro de téléphone" => "0749404125",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIGUISSONGUI",
                "numéro de téléphone" => "0566133109",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉDJOUSSIGUÉ KONÉ",
                "numéro de téléphone" => "0747525192",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNINNIFOUA ",
                "numéro de téléphone" => "0565191853",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIGOH",
                "numéro de téléphone" => "0556985942",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO GUISSONGUI",
                "numéro de téléphone" => "0595993208",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NADJOI",
                "numéro de téléphone" => "0564184137",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIONRÔ",
                "numéro de téléphone" => "0586718908",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GAMBEDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PÉDJOUWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOULAMA ADAMA",
                "numéro de téléphone" => "0575107481",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOUGNOUMATON",
                "numéro de téléphone" => "0702544151",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ALASSANE",
                "numéro de téléphone" => "0500979539",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAN",
                "numéro de téléphone" => "0502825015",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MÉLARGA",
                "numéro de téléphone" => "0554803872",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TCHELOURGO",
                "numéro de téléphone" => "0701627046",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MINATA",
                "numéro de téléphone" => "0170595341",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DONAKIN DAOUDA",
                "numéro de téléphone" => "0585841297",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KPÈDJINWIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO GNIENNINSIENNI MAÏMOUNA",
                "numéro de téléphone" => "0585170358",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNINIFOU",
                "numéro de téléphone" => "0709428501",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNONDIÈ MADIALA",
                "numéro de téléphone" => "0544341847",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PARBONGOBA",
                "numéro de téléphone" => "0566568695",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YÉDJOUFOUNGO",
                "numéro de téléphone" => "0702529735",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIKISSONGUI ALASSANE",
                "numéro de téléphone" => "0779506055",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO YÉGNONNI",
                "numéro de téléphone" => "0706800075",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GNIENKINNINTCHIN",
                "numéro de téléphone" => "0546041902",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NOUFOUN",
                "numéro de téléphone" => "0504889357",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNINSSINAKOUN",
                "numéro de téléphone" => "0575966002",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ LORNADJOU",
                "numéro de téléphone" => "0152106176",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SAWA",
                "numéro de téléphone" => "0171465499",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YÉWOMBA",
                "numéro de téléphone" => "0586410417",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KAWELI",
                "numéro de téléphone" => "0585210130",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MARIAM",
                "numéro de téléphone" => "0747451242",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEFARGNAMMA DAVID",
                "numéro de téléphone" => "0585969919",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YÉDJOUSSIGUÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAYIRIGUÉFOLI",
                "numéro de téléphone" => "0143139613",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SIDIBÉ AROUNA",
                "numéro de téléphone" => "0708693362",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUSMANE",
                "numéro de téléphone" => "0564087382",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAGONWELI",
                "numéro de téléphone" => "0585678037",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA FATOUMATA",
                "numéro de téléphone" => "0501989104",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TIOUKOLI",
                "numéro de téléphone" => "0558520804",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PESSILETCHA PRISCA",
                "numéro de téléphone" => "0502189940",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉOUÉ Y. ISSOUF",
                "numéro de téléphone" => "0500634651",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIFORI",
                "numéro de téléphone" => "0702547985",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO KOLO MAMADOU",
                "numéro de téléphone" => "0575370170",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOKAHANY",
                "numéro de téléphone" => "0585849377",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YESSONGUIYETA",
                "numéro de téléphone" => "0586393727",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIONROLO",
                "numéro de téléphone" => "0505313609",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KINAFOU SALIMATA",
                "numéro de téléphone" => "0152274643",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DJAKARIDJA",
                "numéro de téléphone" => "0102173504",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KISSOH",
                "numéro de téléphone" => "0170267110",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNENINTOUGNEYEKOHA",
                "numéro de téléphone" => "0595344664",
                "sexe" => "nan",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO NIHININYÉTAMAN",
                "numéro de téléphone" => "0564793595",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAMADOU",
                "numéro de téléphone" => "0564853720",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ALASSANE",
                "numéro de téléphone" => "0170267780",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PÉGNIGUI",
                "numéro de téléphone" => "0575366847",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIÉTÉNI",
                "numéro de téléphone" => "0708836300",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KAFOUN",
                "numéro de téléphone" => "0103406732",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ADAMA",
                "numéro de téléphone" => "0777421177",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YÉFARKIA",
                "numéro de téléphone" => "0747606783",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIWOROKYA",
                "numéro de téléphone" => "0748471410",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ALIMATA",
                "numéro de téléphone" => "0504253468",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAKATCHANNAWORI MINATA",
                "numéro de téléphone" => "0505313609",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TÉNINDJA",
                "numéro de téléphone" => "0702531716",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KANABIEN",
                "numéro de téléphone" => "0505126281",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PARGASSORI ABDOULAYE",
                "numéro de téléphone" => "0787748581",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MOUMINI",
                "numéro de téléphone" => "0707393433",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LORYAGABA",
                "numéro de téléphone" => "0777434898",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY PINGUÉ SALIMATA",
                "numéro de téléphone" => "0757476087",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ G. DJAKARIDJA",
                "numéro de téléphone" => "564793595",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SALAMOUGOU",
                "numéro de téléphone" => "0576072229",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FOUGNIGUÉ",
                "numéro de téléphone" => "0554002000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NABOUNDOU",
                "numéro de téléphone" => "0545834092",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SOUNGARI",
                "numéro de téléphone" => "0555140473",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO G. FATOUMATA",
                "numéro de téléphone" => "0554579563",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO G. THÉRÈSE",
                "numéro de téléphone" => "0143139634",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KOYALI",
                "numéro de téléphone" => "0748471410",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DJATA",
                "numéro de téléphone" => "0545631374",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KORBLÉ ALPHONSINE",
                "numéro de téléphone" => "0170769229",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BAKARY",
                "numéro de téléphone" => "0554579563",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PÉHOUO",
                "numéro de téléphone" => "0564980385",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BAKARY",
                "numéro de téléphone" => "0554579563",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAWORISSOLI",
                "numéro de téléphone" => "0576072229",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YARATCHOUMA",
                "numéro de téléphone" => "0554944312",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA PÉKIPOUPENA",
                "numéro de téléphone" => "0172343164",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO YACOUBA",
                "numéro de téléphone" => "0500407313",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA PLOHOGOLO",
                "numéro de téléphone" => "0757175177",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MITAUTÊHÉ",
                "numéro de téléphone" => "0544879911",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO N. BINTOU",
                "numéro de téléphone" => "0585965612",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TÉNIN",
                "numéro de téléphone" => "0505259689",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LACINA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YÉNATOUGOYÉKA",
                "numéro de téléphone" => "0504535702",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO K. MARIAM",
                "numéro de téléphone" => "0544562164",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOUYÉRI",
                "numéro de téléphone" => "0584137793",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NALÉGAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOULOUROU",
                "numéro de téléphone" => "0555451320",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YESSONRÔYA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIÉLINAN",
                "numéro de téléphone" => "0585311289",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TENIMONGO",
                "numéro de téléphone" => "0708654452",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KLOGNERI",
                "numéro de téléphone" => "0555625298",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BRAHIMA",
                "numéro de téléphone" => "0574263351",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TCHÉRIGNOUMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO Z. DRAMANE",
                "numéro de téléphone" => "0505744098",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOFOUNGOYON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO S. DRISSA",
                "numéro de téléphone" => "0749640463",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO M. TINNIN",
                "numéro de téléphone" => "0565369810",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIONROLO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TAMIGUÉ",
                "numéro de téléphone" => "0748576638",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SÉDOU",
                "numéro de téléphone" => "0555271380",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KARIDJA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KOLO",
                "numéro de téléphone" => "0778160980",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FOUNGAYARIGABA",
                "numéro de téléphone" => "0707214112",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAGNONWELI",
                "numéro de téléphone" => "0544343727",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YÉFARIYAHALA",
                "numéro de téléphone" => "0586377505",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PÉGNONNONKO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUASSOH",
                "numéro de téléphone" => "0749092916",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIENNY",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FOUNGNIGUI",
                "numéro de téléphone" => "0759360936",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KATIÉNÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO K. DRISSA",
                "numéro de téléphone" => "0586862954",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO P. ALIMATA",
                "numéro de téléphone" => "0507057687",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO NOUBON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ W. BAKARY",
                "numéro de téléphone" => "0554028549",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAPÉGNOMON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SÉLORTOUN",
                "numéro de téléphone" => "0747286599",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO N. VAMARA",
                "numéro de téléphone" => "0554459705",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FONDA",
                "numéro de téléphone" => "0708322546",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOUGNOUMASSIGUÉ HAMED",
                "numéro de téléphone" => "0586863000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KANIMBIEN",
                "numéro de téléphone" => "0595306913",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NADOUO",
                "numéro de téléphone" => "0566934812",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TESSININGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO OUMAR",
                "numéro de téléphone" => "0748244888",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNÉNOUNON",
                "numéro de téléphone" => "0564395718",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MINATA",
                "numéro de téléphone" => "0702551741",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PAGADJOUDORY JEAN LUC",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KADIODEHOUA",
                "numéro de téléphone" => "0707606256",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DJATOU",
                "numéro de téléphone" => "0545490770",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIENMATYA GRÉGOIRE",
                "numéro de téléphone" => "0505253255",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MISSIGUISSONGUI LYDIE",
                "numéro de téléphone" => "0556335089",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NOUDJO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KOUNAKALAGUI AMIDOU",
                "numéro de téléphone" => "0748708441",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉGNIGUI",
                "numéro de téléphone" => "0152394372",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO LABALA SALIF",
                "numéro de téléphone" => "0103649772",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ AWA",
                "numéro de téléphone" => "0759825305",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NOUNATAHO",
                "numéro de téléphone" => "0576974912",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNININFOLO N'ZA",
                "numéro de téléphone" => "0504364685",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY HASSINATOU",
                "numéro de téléphone" => "0584448401",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO MARIAM",
                "numéro de téléphone" => "0140607953",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOFÉRÉ",
                "numéro de téléphone" => "0585996845",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOYÉRÉ ABDOULAYE",
                "numéro de téléphone" => "0554706300",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNIÉNÉFOLO SEYDOU",
                "numéro de téléphone" => "0707661695",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FATOUMA",
                "numéro de téléphone" => "0584361568",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIONNA YACOUBA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MÉTONGOBA SEYDOU",
                "numéro de téléphone" => "0566004678",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉFARIYALA THÉRÈSE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SÉHÉTIO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TÉNIDJO",
                "numéro de téléphone" => "0574443273",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KARIDJA",
                "numéro de téléphone" => "0556208184",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TÉNINAN",
                "numéro de téléphone" => "0506220422",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOLFANI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SANGNAZOLO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOUGOUNGOHOUARI KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÔGNON",
                "numéro de téléphone" => "0596521215",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SARGALO KARIM",
                "numéro de téléphone" => "0549571276",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SINONLARIGA BAKARY",
                "numéro de téléphone" => "0574461170",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MINIGUITA",
                "numéro de téléphone" => "0556535442",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DONADÉMA SÉKOU",
                "numéro de téléphone" => "0749138191",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NOUBON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MADJATA",
                "numéro de téléphone" => "0584733486",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PLIGUÉTIEN ABOU",
                "numéro de téléphone" => "0506008379",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAKPOUFOLONI ROKIYA",
                "numéro de téléphone" => "0554073380",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGNONYA",
                "numéro de téléphone" => "0576684264",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WATANAGNON KOROTOUM",
                "numéro de téléphone" => "0564459875",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TCHEWA",
                "numéro de téléphone" => "0702508650",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NONGOPÉGUÉ AROUNA",
                "numéro de téléphone" => "0749494662",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNANGUIPIÉ ROKIYA",
                "numéro de téléphone" => "0103665498",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FANDA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIENWATA MAÏMOUNA",
                "numéro de téléphone" => "0554213667",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAVAGA",
                "numéro de téléphone" => "0757083040",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIAHOULO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOUTIBÉ CLÉMENTINE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO LARGATON FÉLIX",
                "numéro de téléphone" => "0545001094",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIÉLOURGO PAULINE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NOULÉGAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FOUNYASSORI",
                "numéro de téléphone" => "0759593941",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YATONGON GUY",
                "numéro de téléphone" => "0545312802",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOUPOUN SOULEYMANE",
                "numéro de téléphone" => "0749582069",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MARIAM",
                "numéro de téléphone" => "0506427862",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KLOYERI",
                "numéro de téléphone" => "0779986841",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KATIÉ JEAN",
                "numéro de téléphone" => "0554214873",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PÉGNONHOULO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "FÉRÉLAHA SORO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNININSSONI",
                "numéro de téléphone" => "0749606905",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KATIÉNÉFOHA",
                "numéro de téléphone" => "0150315517",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KINAFO",
                "numéro de téléphone" => "0565319057",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DONAFOLOGO",
                "numéro de téléphone" => "0504316170",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉNÉYABÉ",
                "numéro de téléphone" => "0101359204",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WOMBON",
                "numéro de téléphone" => "0544153143",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LAKODEHOUA",
                "numéro de téléphone" => "0574156213",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DONADEMIN",
                "numéro de téléphone" => "0544277236",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SONIGNONGO KOROTOUM",
                "numéro de téléphone" => "0564407020",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOLOYÉRI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY TELFOUNGOTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NASSARA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PÉDJOUDAN",
                "numéro de téléphone" => "0574465238",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIEMPÉGNOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ N'GATCHEKITCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIENMOUGOU",
                "numéro de téléphone" => "0576600454",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YESSONYÉDJOU",
                "numéro de téléphone" => "0565425495",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YÉFARKIYA DAOUDA",
                "numéro de téléphone" => "0759355194",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAGNONYA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA LASSINA",
                "numéro de téléphone" => "0708583667",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SAOUA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DRIGNATCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY PAGADJOUFOUGO",
                "numéro de téléphone" => "0555937137",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PIRGUÉPORI",
                "numéro de téléphone" => "0595501574",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIEMPÉGNOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO OUAGNIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO PARFONGÔ",
                "numéro de téléphone" => "0504488690",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DRIGNATCHIN FATOU",
                "numéro de téléphone" => "0554567525",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GIENNINKOUN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KATCHA AMIDOU",
                "numéro de téléphone" => "0576367460",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KINAFOU",
                "numéro de téléphone" => "0584422188",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SIENBAGADA OUMAR",
                "numéro de téléphone" => "0544354295",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOULAYE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PESSOURI",
                "numéro de téléphone" => "0749841511",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIENFOUGOWARI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO ABIBA",
                "numéro de téléphone" => "0703173422",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ADAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PÉGAWAGNABA SAWA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO WAGNOUNINFIE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MIGUIESIGUÉ",
                "numéro de téléphone" => "0555825599",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIENTCHIN WINNARIDJOU",
                "numéro de téléphone" => "0564426564",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LONÉGABA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NADANA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIONDIAOUA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOLSINATCHIÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA OUMAR",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DJARA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KIBEYA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA RIDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MARIAMÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA OUANA",
                "numéro de téléphone" => "0594425455",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIGNABA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TINNIN",
                "numéro de téléphone" => "0585223770",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YODJOUTIARI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEYERI RAOUL",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KISSIBÉDENI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO WIDÉNI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABDOULAYE",
                "numéro de téléphone" => "0564777419",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SÉGAL",
                "numéro de téléphone" => "0574759823",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YAYA KPAYÉRIGUÉ",
                "numéro de téléphone" => "0566871234",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KOUYOFOUGO",
                "numéro de téléphone" => "0555249656",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO AWA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TOUPLÉ ÉTIENNE",
                "numéro de téléphone" => "0584505317",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ EUGÉNIE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO WONNAN",
                "numéro de téléphone" => "0574345997",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PÉFOUGOURI",
                "numéro de téléphone" => "0505802058",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SIÉNEDJOBA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YÉTÉNISSOUHO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNINIKINMINTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TCHIONKOLI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO P. SALI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LACINA G.",
                "numéro de téléphone" => "0747581288",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SITA",
                "numéro de téléphone" => "0544039296",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YACOUBA",
                "numéro de téléphone" => "0574490821",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TOUGO",
                "numéro de téléphone" => "0502427944",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAPI",
                "numéro de téléphone" => "0788160976",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÉBONON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUFOUGOGNON LACINA",
                "numéro de téléphone" => "0596014116",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YARDJOUMA",
                "numéro de téléphone" => "0545719665",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BINTOU",
                "numéro de téléphone" => "0586741873",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉDJOUSSIGUÉ",
                "numéro de téléphone" => "0586741873",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIEMBAGADA",
                "numéro de téléphone" => "0506012904",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FIERLAHA",
                "numéro de téléphone" => "0546787658",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KADJINDJOULOKO",
                "numéro de téléphone" => "0554609505",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PÉDJOUWELI",
                "numéro de téléphone" => "0554309636",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NOULOUROU KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNIENNINFOLO",
                "numéro de téléphone" => "0564698515",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ROKIYA PÉTY",
                "numéro de téléphone" => "0564202904",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MARIAM",
                "numéro de téléphone" => "0555959772",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GUISSANGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GUEYADJINBEH",
                "numéro de téléphone" => "0777295904",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FIERLAHA",
                "numéro de téléphone" => "0501678846",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNOMPININ",
                "numéro de téléphone" => "0556357610",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PÉGNONNAKO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PÉBAGONIGONHAN",
                "numéro de téléphone" => "0142506393",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIAKA ",
                "numéro de téléphone" => "0586914024",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MIMMOUGOU GUILLAUME",
                "numéro de téléphone" => "0594711243",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUNOUGNATCHIN",
                "numéro de téléphone" => "0172805186",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ M'BAHATCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉOUÉ KANAHIN KARIDJATOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YÉFARIYOUMA",
                "numéro de téléphone" => "0595136111",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FIERLAHA",
                "numéro de téléphone" => "0788778797",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MIÉKOUMA",
                "numéro de téléphone" => "0584733094",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAYINNAÏYEMAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNININKINMINTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY TÉNÉLO",
                "numéro de téléphone" => "0500828919",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY NAWASSY",
                "numéro de téléphone" => "0708907955 // 0596460649",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO SONGUIDA",
                "numéro de téléphone" => "0171445394 // 0585190318",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ARDJOUMA",
                "numéro de téléphone" => "0575656286",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUFOUNGO",
                "numéro de téléphone" => "0584987165",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUOLLO JUSTIN",
                "numéro de téléphone" => "0152183101",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WAGNINNMDJOBA",
                "numéro de téléphone" => "0555652518",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ K. DRISSA",
                "numéro de téléphone" => "0564491077",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KANABIEN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO TIONRO",
                "numéro de téléphone" => "0101532819",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KLOYERI",
                "numéro de téléphone" => "0777160069",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY GNONGNINSING",
                "numéro de téléphone" => "0566020035",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNÉNÉKAMATCHIN",
                "numéro de téléphone" => "0160734559",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TAHAYA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ABIBA",
                "numéro de téléphone" => "0544033871",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO KREPORI",
                "numéro de téléphone" => "0554475374",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO NAGNABIEN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KAPOULOTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KANABIEN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WANDJÔH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ROMAINE",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KAFALO",
                "numéro de téléphone" => "0546295732",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NAGNONYA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÉBONON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TIONKOLI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SARKIÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO N'DANANH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YESSONYÉDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PÉTY",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO NAGNIÉYÈRI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KAKOLÈBÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SARKIÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SEFOULO",
                "numéro de téléphone" => "0556535921",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SEYDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNÉNINTCHAN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SETCHO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BAKARI",
                "numéro de téléphone" => "0748931256",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO OUMAR",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO BRAHIMA",
                "numéro de téléphone" => "0504535802",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KISSELINA",
                "numéro de téléphone" => "0505664459",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNÉNEFOLI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO BAKARI",
                "numéro de téléphone" => "0707123472",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NABRAHÉ",
                "numéro de téléphone" => "0757177546",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SARASSORI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DRISSA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YACOUBA",
                "numéro de téléphone" => "0708607771",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SAMOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DENAN",
                "numéro de téléphone" => "0506563334",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FALÊH",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KATCHI",
                "numéro de téléphone" => "0500678091",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO MATENIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUANAN",
                "numéro de téléphone" => "0575101525",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO VAMARA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KPAGNIN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NADONA",
                "numéro de téléphone" => "0505570609",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOULAMA",
                "numéro de téléphone" => "0566304596",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOULAYE",
                "numéro de téléphone" => "0566445660",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOFRO",
                "numéro de téléphone" => "0102304760",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DAOUDA",
                "numéro de téléphone" => "0709564351",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MIGAGNA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SEYDOU",
                "numéro de téléphone" => "0104605645",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÉKOU",
                "numéro de téléphone" => "0102161724",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABI",
                "numéro de téléphone" => "0101506065",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO SARKIÉ",
                "numéro de téléphone" => "0575566077",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MADJOUMA",
                "numéro de téléphone" => "0566333436",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LACINA",
                "numéro de téléphone" => "0777233624",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUMAR",
                "numéro de téléphone" => "0544607081",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUADA",
                "numéro de téléphone" => "0566809133",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SANDOU",
                "numéro de téléphone" => "0546967380",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BABA",
                "numéro de téléphone" => "0170267171",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FOUGOTCHO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SALIA",
                "numéro de téléphone" => "0709001420",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NALAIE",
                "numéro de téléphone" => "0505664451",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FOTOGOMA",
                "numéro de téléphone" => "0505774622",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIÉKOURA",
                "numéro de téléphone" => "0707098636",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GNIGUELO",
                "numéro de téléphone" => "0759702024",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY BAKARI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ABOU",
                "numéro de téléphone" => "0708434251",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PEDJOUDANH",
                "numéro de téléphone" => "0554309634",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SEGAL",
                "numéro de téléphone" => "0101706344",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY OUSMANE",
                "numéro de téléphone" => "0707394164",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO BEMA",
                "numéro de téléphone" => "0504304520",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEHOUGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIKORGOTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO SALIMATA",
                "numéro de téléphone" => "0707435627",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUSMANE",
                "numéro de téléphone" => "0564563933",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY P. SALIMATA",
                "numéro de téléphone" => "0757476087",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIDOU",
                "numéro de téléphone" => "0586113972",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FOUGASSORI",
                "numéro de téléphone" => "0748346241",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIEMOKO",
                "numéro de téléphone" => "0171616387",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAMOGO",
                "numéro de téléphone" => "0505444221",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO LASSINA",
                "numéro de téléphone" => "0576499077",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "TRAORÉ ABOUBAKAR",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KARIM",
                "numéro de téléphone" => "0709641142",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU",
                "numéro de téléphone" => "0151168451",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ BRAHIMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO NAGALOUGO",
                "numéro de téléphone" => "0777515084",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNAGALO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOKAFOLO",
                "numéro de téléphone" => "0506660670",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MATENIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNINAYARI MARIAM",
                "numéro de téléphone" => "0574330997",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KARIDIATOU",
                "numéro de téléphone" => "0584471249",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉYÉWELI SALI",
                "numéro de téléphone" => "0564187107",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KARIDJA",
                "numéro de téléphone" => "0504117983",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KAYATCHIN",
                "numéro de téléphone" => "0757504596",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA Z. DAOUDA",
                "numéro de téléphone" => "0709550560",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIENTOUHOU",
                "numéro de téléphone" => "0546000289",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YARDJOUMA",
                "numéro de téléphone" => "0758018360 / 0584692251",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YAYA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SENIGNONKON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GUISSONGUI",
                "numéro de téléphone" => "0574384003",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YEDJOUWON KARIDJA",
                "numéro de téléphone" => "0554136932",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TCHINWINTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PEFLIN MOUSSA",
                "numéro de téléphone" => "0707795289",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUGNOUMATON DRISSA",
                "numéro de téléphone" => "0575867335",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KARIM",
                "numéro de téléphone" => "0702499064",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TELEPORI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNEGNERI ADAMA",
                "numéro de téléphone" => "0504139081",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MIYERINA",
                "numéro de téléphone" => "0556511847",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DJAKARIDJA NABALAYERGUÉ",
                "numéro de téléphone" => "0707089070",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNADJOUTON",
                "numéro de téléphone" => "0506045280",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY ADAMA",
                "numéro de téléphone" => "0555539980",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ADAMA",
                "numéro de téléphone" => "0709070006",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SEWARDJOU AHOUA",
                "numéro de téléphone" => "0576716213",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WAOUERESSOL",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SITA",
                "numéro de téléphone" => "0554530503",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MARIAM",
                "numéro de téléphone" => "0576633355",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO WEREWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉDJOUSSIGUÉ SOULEYMANE",
                "numéro de téléphone" => "0757205808",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WONDJOH",
                "numéro de téléphone" => "0585229428",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FOUNDANHAN MAÏMOUNA",
                "numéro de téléphone" => "0576639088",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIBEYA AIMÉ",
                "numéro de téléphone" => "0779675836",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIAKA MAYERIGUÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNINOUNNONOMBEH",
                "numéro de téléphone" => "0594113757",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => ",KONÉ YESSONYÉDJOU YACOUBA",
                "numéro de téléphone" => "0544289802",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YEDJOUYETI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO POGADJOUFOUGOU BRAHIMA",
                "numéro de téléphone" => "0554795834",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KATCHI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "BARRO DJENEBOU",
                "numéro de téléphone" => "0544359236",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO BAKARY",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KPAYÉRIGUÉ",
                "numéro de téléphone" => "0757844025",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUAYIRGUÉFOLO ISSA",
                "numéro de téléphone" => "0555664391",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "TIEFIGUÉ FATOUMATA",
                "numéro de téléphone" => "0586324931",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PEHOULOGNON KARIDJATOU",
                "numéro de téléphone" => "0594162352",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KPAYÉRIGUÉ DAOUDA",
                "numéro de téléphone" => "0708309615",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUASSOHO",
                "numéro de téléphone" => "0749092916",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO OUSSÉNI",
                "numéro de téléphone" => "0566831714",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO Y. SIATA",
                "numéro de téléphone" => "0545582221",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIDIKI ",
                "numéro de téléphone" => "0575123091",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY NEBETIALY",
                "numéro de téléphone" => "0574433992",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MÉLARGA YACOUBA",
                "numéro de téléphone" => "0554211771",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ISSOUF",
                "numéro de téléphone" => "0565060717",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOH DAOUDA",
                "numéro de téléphone" => "0555687508",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NANA",
                "numéro de téléphone" => "0554143658",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOULOUROU DJAKARIDJA",
                "numéro de téléphone" => "0758497102",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MINATA",
                "numéro de téléphone" => "0502269313",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ AMIDOU",
                "numéro de téléphone" => "0544823940",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUGNOUMATON ADAMA",
                "numéro de téléphone" => "0555283092",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BINTOU PEDJOUGAMA",
                "numéro de téléphone" => "0708121773",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "MIENOUGOH ABDOULAYE",
                "numéro de téléphone" => "0747679976",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ METOUHOU DRISSA",
                "numéro de téléphone" => "0566247136",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SALIA",
                "numéro de téléphone" => "0584881856",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "TOURÉ YÉDJOUFOUNGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIÉMONGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIENNIGBENINGNON KARIDIATOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SOUMBI",
                "numéro de téléphone" => "0709094395",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KAWELI KARIM",
                "numéro de téléphone" => "0546485117",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUALAYOUMA",
                "numéro de téléphone" => "0504079856",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YESSONYÉDJOU",
                "numéro de téléphone" => "0566605952",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAPARFOLOYA DJATA",
                "numéro de téléphone" => "0574787172",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUMIENAN BAKARY",
                "numéro de téléphone" => "0556297818",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NABONTERI",
                "numéro de téléphone" => "0708562624",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIRIKI",
                "numéro de téléphone" => "0170498850",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO LAZARE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SOUNGARI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SOULEYMANE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO LACINA",
                "numéro de téléphone" => "0545754443",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KISSOH",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FATOUMATA",
                "numéro de téléphone" => "0574273322",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SANITOI",
                "numéro de téléphone" => "0575354451",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MANDJOUMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIHILOH DIAKARIDIA",
                "numéro de téléphone" => "0586332945",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONATÉ BRAHIMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MAÏMOUNA",
                "numéro de téléphone" => "0566176028",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SEKONGO KANIMBIEN",
                "numéro de téléphone" => "0585539200",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO N. FATOUMA",
                "numéro de téléphone" => "0",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "CISSÉ ABDOULAYE",
                "numéro de téléphone" => "0584681877",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY DOUNAKIN LACINA",
                "numéro de téléphone" => "0575857380",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YIREDANHAN MAÏMOUNA",
                "numéro de téléphone" => "0789950875",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO M'BANGNON",
                "numéro de téléphone" => "0544492419",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NANFOUNGO KADIATOU",
                "numéro de téléphone" => "0502296087",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIYALI DAOUDA",
                "numéro de téléphone" => "0505089969",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KPAYÉRIGUÉ ISSOUF",
                "numéro de téléphone" => "0556133866",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO MINATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KIBEKOUWANNI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YEDOUIOUTIERI",
                "numéro de téléphone" => "0702530740",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NANLEGAMA",
                "numéro de téléphone" => "0777309143",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIENTINNI",
                "numéro de téléphone" => "0502243631",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNENEWAKIN BRAHIMA",
                "numéro de téléphone" => "0768460774",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FATOUMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KISSELINA",
                "numéro de téléphone" => "0747218476",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TCHAGOHO DJAKARIDJA",
                "numéro de téléphone" => "0504287819",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO AFFOUSSIATA",
                "numéro de téléphone" => "0501547731",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ MADOU",
                "numéro de téléphone" => "0504280518",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YEFARGOUMA DAOUDA",
                "numéro de téléphone" => "0545042600",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DJAKARIDJA",
                "numéro de téléphone" => "0708657145",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIMETCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TINRO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YÉGNIGUI",
                "numéro de téléphone" => "0170267780",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PEGAGNO",
                "numéro de téléphone" => "0102173504",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOBIEN SALIFOU",
                "numéro de téléphone" => "0545054997",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUANDJOU SAHOUA",
                "numéro de téléphone" => "0500221339",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YERFOLI BRAHIMA",
                "numéro de téléphone" => "0564988399",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ POSSILETCHA",
                "numéro de téléphone" => "0778461454",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAMIEGORI",
                "numéro de téléphone" => "0748319893",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SEYDOU",
                "numéro de téléphone" => "0556789145",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY PLIGUEYOUMA DJATTA",
                "numéro de téléphone" => "0505782718",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TÉNIN",
                "numéro de téléphone" => "0585178256",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MADOU",
                "numéro de téléphone" => "0748093110. //. 0575068467",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BARAKISSA PALAGAFOUNGOTCHIN",
                "numéro de téléphone" => "0555283092",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MARIAM",
                "numéro de téléphone" => "0566808467",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SITA",
                "numéro de téléphone" => "0748065574",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KLOGNANAN ALIMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KARIDJA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DIELELIRÉ",
                "numéro de téléphone" => "0586769488",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KINAFOU",
                "numéro de téléphone" => "000",
                "sexe" => "nan",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUAYIRIGUÉFOLO ISSA",
                "numéro de téléphone" => "0702548354",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO POGANAGNANSIEN BINTOU",
                "numéro de téléphone" => "0546392893",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SONGUI MAWA ",
                "numéro de téléphone" => "0544893839",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TINLO BRAHIMA",
                "numéro de téléphone" => "0565837792",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "NETANAHOU LACINA",
                "numéro de téléphone" => "0748065574",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KIDJOUFOLOKO ISSOUF",
                "numéro de téléphone" => "0749730594",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO LAMOUHO",
                "numéro de téléphone" => "0545999400",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DANASSOUHOU BAKARY",
                "numéro de téléphone" => "0757502280",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY ISSA",
                "numéro de téléphone" => "0554742532",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MOUSSA",
                "numéro de téléphone" => "0556043477",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SOUMAÏLA",
                "numéro de téléphone" => "0707325629",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TINNIBA",
                "numéro de téléphone" => "0702501069",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PARFONGOH ADAMA",
                "numéro de téléphone" => "0747797053",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MATENIN",
                "numéro de téléphone" => "0759019660",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUFANAGANA D.",
                "numéro de téléphone" => "0556453296",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PEWORISSONGUI SIAKA",
                "numéro de téléphone" => "0554344351",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIÉMONGO",
                "numéro de téléphone" => "0702501071",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SEGORBA YACOUBA",
                "numéro de téléphone" => "0564300526",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY POTTOSSONGUI",
                "numéro de téléphone" => "0506183230",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY DAOUDA",
                "numéro de téléphone" => "0574478766",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KAGNIENDJA YAYA",
                "numéro de téléphone" => "0595527397",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MINATA",
                "numéro de téléphone" => "0749309150",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YÉFARKYA DOULAYE",
                "numéro de téléphone" => "0554531442",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MAMADOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ BRAHIMA",
                "numéro de téléphone" => "0574234766",
                "sexe" => "nan",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NOUFOUNGOGNON",
                "numéro de téléphone" => "0142526425",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SITA",
                "numéro de téléphone" => "0747827335",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUGNOUMATON MAMADOU",
                "numéro de téléphone" => "0709650114",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WANNAN",
                "numéro de téléphone" => "0787034064",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MASSATA",
                "numéro de téléphone" => "0789508950",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SENIDJOU FATOUMATA",
                "numéro de téléphone" => "0709288005",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PEHOULOGNON KADIDJA",
                "numéro de téléphone" => "0789423267",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NATOGOMA",
                "numéro de téléphone" => "0709542143",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY GNENEYERI VAMARA",
                "numéro de téléphone" => "0708647607",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY DOUSSIGUÉ DRAMANE",
                "numéro de téléphone" => "0748698858",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ MOUSSA",
                "numéro de téléphone" => "0757194688",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU ALAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TINNILO",
                "numéro de téléphone" => "0757504696",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY LACINA",
                "numéro de téléphone" => "0707090006",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KIGOBA AMIDOU",
                "numéro de téléphone" => "0708094362",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY ALASSANE",
                "numéro de téléphone" => "0757583003",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY YÉLAYIÈ BAKARY",
                "numéro de téléphone" => "0707448885",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIONRÔ",
                "numéro de téléphone" => "0787858714",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ISSA",
                "numéro de téléphone" => "0748695345",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA LACINA",
                "numéro de téléphone" => "0748796603",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA AWA",
                "numéro de téléphone" => "0749145758",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KASSOUM",
                "numéro de téléphone" => "0748796603",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KADIATOU",
                "numéro de téléphone" => "0101134081",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TÉNIN",
                "numéro de téléphone" => "0545061259",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YAWAH",
                "numéro de téléphone" => "0102010671",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KIFORI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KARIM",
                "numéro de téléphone" => "0103261638",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA CLOYERI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WANLO ADAMA",
                "numéro de téléphone" => "0564707663",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNAMANGOLO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GUISSONGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KIDOU",
                "numéro de téléphone" => "0546274075",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DRISSA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FERLAH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUGNOUMATON",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SALI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ZOUMANA",
                "numéro de téléphone" => "0143828006",
                "sexe" => "nan",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DAOUDA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIEBA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NADANNA",
                "numéro de téléphone" => "0164172072",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KOUHOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SIAGA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "nan",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIMPOHOU",
                "numéro de téléphone" => "0152273998",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DOUYÉRI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DINIGNATIEN",
                "numéro de téléphone" => "0103141520",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PÉDJOUWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO FIERLAHA",
                "numéro de téléphone" => "0170268497",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ BAKARY",
                "numéro de téléphone" => "0103151420",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LARIBA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOULAYE",
                "numéro de téléphone" => "0103036938",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO LARGATON",
                "numéro de téléphone" => "0544220983",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SITA",
                "numéro de téléphone" => "0143222006",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KADIATOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MÉLARGA",
                "numéro de téléphone" => "0171952466",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PARFANCA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PÉDJOUWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PAGADI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO CLOFANGA",
                "numéro de téléphone" => "0173236110",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MADJOUTA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ADAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YACOUBA",
                "numéro de téléphone" => "0140148720",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY PARGAFONGOTIÉ",
                "numéro de téléphone" => "0170258759",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAMAN",
                "numéro de téléphone" => "0102289207",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAGALOUGO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO BAH",
                "numéro de téléphone" => "0505109840",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO CRÉPORI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NARGAHOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SÉTOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ROKIA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ROKIA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WANDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAMINA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO GNANDJOUTON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KATIENESSONGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MÉLARGA",
                "numéro de téléphone" => "0142507203",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIMBI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DJARA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO LORYAGABA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO FIERLAH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SENIDJOUDJATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SOUBI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KITCHA",
                "numéro de téléphone" => "0141807713",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KLOBARDJO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIMETCHIN",
                "numéro de téléphone" => "0102289207",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TCHEBA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO RILAYOUGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ COUCOULÉ",
                "numéro de téléphone" => "0173236110",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ VALI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIETA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MAÏMOUNA",
                "numéro de téléphone" => "0171175927",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOUMENA",
                "numéro de téléphone" => "0151144975",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA OUALOUROU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FIERLAH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOULOUROU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO LACINA",
                "numéro de téléphone" => "0585935900",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KLOFOUGOGNO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PEDARIDJOU",
                "numéro de téléphone" => "0142339656",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KAWELI",
                "numéro de téléphone" => "0708334059",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WIDENI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GUISSONGUI",
                "numéro de téléphone" => "0565957886",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MINATA",
                "numéro de téléphone" => "0150307486",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GUISSONGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KPELEDJONWORI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YIRIGUEWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PARGAWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WAGNOWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KPAYÉRIGUÉ",
                "numéro de téléphone" => "0103677684",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIGNOKAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DJOUDORI",
                "numéro de téléphone" => "0152069536",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEFOGAFIÈ",
                "numéro de téléphone" => "0102061317",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIKPOLI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DJOUDORI",
                "numéro de téléphone" => "0505008814",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YEFAGAFIÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PARGAWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY GNONRAYA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIPARI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SENIDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SALI",
                "numéro de téléphone" => "0103967026",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PETI",
                "numéro de téléphone" => "0102257867",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIONRÔ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KIWADA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WONDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NIBATIEN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO WADARIDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PETIENIMPOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PÉGNONHOULO",
                "numéro de téléphone" => "0544220983",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA REGMOUNI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WAYOUGOFÉ AMADOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÉTOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WAFITONGO DOULAYÉ",
                "numéro de téléphone" => "0140813158",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SAFIATOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIAKA MASSANKAN",
                "numéro de téléphone" => "0153822803",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WAGNONWELI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MOUSSA",
                "numéro de téléphone" => "0102754295",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WACHINGUÉ SAMADOU",
                "numéro de téléphone" => "0102908997",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SENIGNONKON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OFUAÏMAITCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIPOEMOGO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NIAGACHA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIBEDIA",
                "numéro de téléphone" => "0151507445",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PEGBALI",
                "numéro de téléphone" => "0161337984",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ALIMANTA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SAMIEN SEYDOU",
                "numéro de téléphone" => "0143817734",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KARIDIATOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIONRÔ SEYDOU",
                "numéro de téléphone" => "0102640190",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DJOLOURGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIENFONGO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ALLASSANE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YETI",
                "numéro de téléphone" => "0160192881",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ IBRAMA",
                "numéro de téléphone" => "0150316408",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MINATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KARIDIATOU",
                "numéro de téléphone" => "0170166966",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAH",
                "numéro de téléphone" => "0172565793",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DINGNANTCHIN",
                "numéro de téléphone" => "0143817734",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DIARA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WONDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KATCHÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAMOGO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FATOUMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MOUSSA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PODJO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOULEYMANE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOBÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO T. FATOUMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIETA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO BAKARY",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YACOUBA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KAFAFIÉ BAKARY",
                "numéro de téléphone" => "0575613301",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SANA",
                "numéro de téléphone" => "0748737100",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PASCAL TIEBA",
                "numéro de téléphone" => "0585649783",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO AZA",
                "numéro de téléphone" => "0709064874",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MÉLARGA YACOUBA",
                "numéro de téléphone" => "0504023076",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GNAALO",
                "numéro de téléphone" => "0554082562",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NALEGAMIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEDJOUYEYALI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FIERLAHA SIETA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MIENLIHÉ KASSOUM",
                "numéro de téléphone" => "0566479086",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SENIGNONKON SAWA",
                "numéro de téléphone" => "0546816988 // 0708350102",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FIERLAHA",
                "numéro de téléphone" => "0566176071",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNINMATON",
                "numéro de téléphone" => "0503321814",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY DOULAYE",
                "numéro de téléphone" => "0565425607",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DONAKIN ALASSANE",
                "numéro de téléphone" => "0565402903",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WONLO",
                "numéro de téléphone" => "0504733906",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO MOUMOUNI",
                "numéro de téléphone" => "0789838074",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO MARIAM",
                "numéro de téléphone" => "0555782575",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WANGNIMATA LACINA",
                "numéro de téléphone" => "0586197786",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KITCHAN",
                "numéro de téléphone" => "0554509407",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SIDIBÉ SEYDOU",
                "numéro de téléphone" => "0554281436",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAMOGO YACOU",
                "numéro de téléphone" => "0544868423",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNIMATON",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNINNAHOU LACINA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SEWARIDJOU ABDOULAYE",
                "numéro de téléphone" => "0544514086",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUHOU",
                "numéro de téléphone" => "0596304214",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MIYERINA",
                "numéro de téléphone" => "0556204539",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KIDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ IBRAHIM",
                "numéro de téléphone" => "0585845747",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO VALU DJOUDORI",
                "numéro de téléphone" => "04566171892",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YESSONGUI DAOUDA",
                "numéro de téléphone" => "0545574071",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TCHEMONGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KIGOUA LACINA",
                "numéro de téléphone" => "0584097665",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIENTINNI EUGÉNIE",
                "numéro de téléphone" => "0544375746",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SAGANOGO PEGNONNAKOUHO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DJALICIA-YEWON",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KIBEGOUNWANNI N'NAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ODANHAN",
                "numéro de téléphone" => "0749251496",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY DOUGNOUMASSIGUÉ",
                "numéro de téléphone" => "0544843603",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNIENIMA",
                "numéro de téléphone" => "0503343185",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO PARTCHO FATOUMA",
                "numéro de téléphone" => "0799091829",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YEGNANIÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA ZANA KASSOUM",
                "numéro de téléphone" => "0504491678",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BARA ADJARA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEWAKAN BRAHEMI",
                "numéro de téléphone" => "0789386307",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SEKOUGOYOU",
                "numéro de téléphone" => "0586687633",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA AWA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GNELLÉ TENETIA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KIBEGOUNWANNI MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SONGUIDA ALASSANE",
                "numéro de téléphone" => "0554846340",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA TIOLODIO KARIDJA",
                "numéro de téléphone" => "0594162701",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SIENFOUNGO SIATA",
                "numéro de téléphone" => "0749897453",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KLOTENDJOU BRAHIM",
                "numéro de téléphone" => "0596737435",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YESSIHEGNON JOSÉPHINE",
                "numéro de téléphone" => "0759942320",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ABI",
                "numéro de téléphone" => "0574056078",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MASSIATA",
                "numéro de téléphone" => "0757009623",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGNONYA ABI",
                "numéro de téléphone" => "0574270629",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YIRIVONGON",
                "numéro de téléphone" => "0707223035",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOFOUROH LACINA",
                "numéro de téléphone" => "0566367800",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA FIERLAHA",
                "numéro de téléphone" => "0574899534",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEWONYETA",
                "numéro de téléphone" => "0555011604",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TIOBEGA DRAMANE",
                "numéro de téléphone" => "0556827579",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ABOU",
                "numéro de téléphone" => "0555402903",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAFIENÉ WANDJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SOURA ADJARATOU",
                "numéro de téléphone" => "0555343101",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SOULAMA MAKEHAYAON",
                "numéro de téléphone" => "0554219213",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIÉLOURGO FATOUMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YENITCHAN BRAHIMA",
                "numéro de téléphone" => "0585321350",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KOBALY",
                "numéro de téléphone" => "0565305592",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "TALLÉME ALAYE",
                "numéro de téléphone" => "0595357240",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIENWELI",
                "numéro de téléphone" => "0151955659",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NALIEGANMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YACOUBA WONLO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEFARGNOUMA BAKARY",
                "numéro de téléphone" => "0000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUONLO ISSOUFOU",
                "numéro de téléphone" => "0555386231",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNOUMATA SERBA",
                "numéro de téléphone" => "0584329120",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAGBOHO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KINAFOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUNYANTCHIN KARIDJA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNENEFANGA ISSOUF",
                "numéro de téléphone" => "0151791731",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGATCHINNEWORI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YÉFARKIYA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KAWORITANHAN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOROGOSIEGUÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOULOUROU",
                "numéro de téléphone" => "0575041148",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SALIFOU OUAWOUBÉ",
                "numéro de téléphone" => "0101141163",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DILUÉE DJATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YETIYAHATIFOLOMA F.",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ POWORISSONGUI A.",
                "numéro de téléphone" => "0576692839",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MASSENI",
                "numéro de téléphone" => "0586876550",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIDOUTCHIN DOULAYE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO YADJOUMA",
                "numéro de téléphone" => "0564493633",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PALAYERI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO SANY SOUNGALO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUNAKAGNOUMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SIEFANI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ L. ISSA",
                "numéro de téléphone" => "0141202207",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIÉLOURGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DJOUFONGOBA DAOUDA",
                "numéro de téléphone" => "0101472153",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YADJOUMA",
                "numéro de téléphone" => "0504081207",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LORADJOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NAMBONDJO N.",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PELNEYELI",
                "numéro de téléphone" => "0585629957",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNINYERGUÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TCHINWORNA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUFOUNGOGNON A.",
                "numéro de téléphone" => "0555974583",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SÉTOU",
                "numéro de téléphone" => "0152441322",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAWA",
                "numéro de téléphone" => "0585601222",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NANAFONGA",
                "numéro de téléphone" => "0150324424",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAPIENDENI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PIWOHO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAMESSIO",
                "numéro de téléphone" => "0152067681",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOULEYMANE",
                "numéro de téléphone" => "0103104720",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABIBA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TINNELOUOH",
                "numéro de téléphone" => "0141185338",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ROKIA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MÉLARGABA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TELOURGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEYERI",
                "numéro de téléphone" => "0102796360",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGNOYA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KATCHI",
                "numéro de téléphone" => "0103679486",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KAFALO",
                "numéro de téléphone" => "0544955280",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SANDO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNINNESSINAPAR",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MAMADOU SIDOUTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NANGOUNGO YACOUBA",
                "numéro de téléphone" => "0554039278",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MIYERIKINA BAKARY",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MINATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIGNONFOLI",
                "numéro de téléphone" => "0545753471",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BINTOU",
                "numéro de téléphone" => "0545706530",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KOROTOUM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ FOUNYATON",
                "numéro de téléphone" => "0161418455",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO TIEGNANIGA",
                "numéro de téléphone" => "0749138191",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YEFAGAFEHÉ LACINA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FOUNGNIGUÉ ",
                "numéro de téléphone" => "0172843579",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YENILARGA",
                "numéro de téléphone" => "0555769888",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MANSENI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SERIBA",
                "numéro de téléphone" => "0505443214",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ABI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO FATOUMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO NANA FANGA",
                "numéro de téléphone" => "017314178044",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NAFOUGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MAMADOU",
                "numéro de téléphone" => "0141851819",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MÉLARGA",
                "numéro de téléphone" => "0585531299",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KINAFOU",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NALÉGAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO ALIMAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FIERLAH",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ ADAMA",
                "numéro de téléphone" => "0101100099",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ WONLO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIKORGOTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUYÉRI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA GUISSONGUI",
                "numéro de téléphone" => "0544043815",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YRIGUEYOUGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO MARIAM",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MAMOUROU",
                "numéro de téléphone" => "0143508578",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOUYÉRI",
                "numéro de téléphone" => "0707820142",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SOUNGALO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WAHOUBÈ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO MAMADOU",
                "numéro de téléphone" => "0748073474",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SEDIGUI",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PARFOUGOTCHIN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNANOUGONAPAYÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PEFININ DJAKARIDJA",
                "numéro de téléphone" => "0102310034",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIYALI",
                "numéro de téléphone" => "0140447530",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIEMPEGNOUGO MARIAM",
                "numéro de téléphone" => "0555852948",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAMIENYAHA",
                "numéro de téléphone" => "0586735277",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SAGANOGO SEGBATOUGO",
                "numéro de téléphone" => "0173565423",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SAGANOGO TIASSAHA",
                "numéro de téléphone" => "0103607059",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNENEMIEN",
                "numéro de téléphone" => "0505422395",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUFANKANAN",
                "numéro de téléphone" => "0151575833",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SONGUIDA",
                "numéro de téléphone" => "0141311383",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOULEYERI",
                "numéro de téléphone" => "0150846195",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YAYA",
                "numéro de téléphone" => "0103331365",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SANDOU",
                "numéro de téléphone" => "0170572563",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KISSELMINA",
                "numéro de téléphone" => "0103688815",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ALI",
                "numéro de téléphone" => "0142390409",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MÉLARGA",
                "numéro de téléphone" => "0141231836",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PAGALAHA",
                "numéro de téléphone" => "0143783359",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PENAYALI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAGALOUROUGA",
                "numéro de téléphone" => "0143049605",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNENEYERI",
                "numéro de téléphone" => "0556868809",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PELOYÊRI",
                "numéro de téléphone" => "0565756763",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUGNOUMASSIGUÉ ABOU",
                "numéro de téléphone" => "0152063725",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIENWELI EMMANUEL",
                "numéro de téléphone" => "0545724712",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YARDJOUMA",
                "numéro de téléphone" => "0585381715",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KATJI",
                "numéro de téléphone" => "0142810332",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YENEYASSO",
                "numéro de téléphone" => "0143049854",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOLGOTIO",
                "numéro de téléphone" => "0505553671",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA FOUGOTIO",
                "numéro de téléphone" => "0172601978",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WAMESSO ",
                "numéro de téléphone" => "0503604574",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIDOUTCHIN",
                "numéro de téléphone" => "0150063820",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SOULEYMANE",
                "numéro de téléphone" => "0103577239 // 0757023209",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PETINIMPOU",
                "numéro de téléphone" => "0152389766",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KITIFOLO ABDOULAYE",
                "numéro de téléphone" => "0142266828",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PARGASSORI",
                "numéro de téléphone" => "0504189118",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FANHANYERGUÊBA",
                "numéro de téléphone" => "0546127775",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YESSONGUIYETA",
                "numéro de téléphone" => "0140668337",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO NOUFOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY NOUHOUM",
                "numéro de téléphone" => "0152411143",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TIEMOGO",
                "numéro de téléphone" => "0566902281",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KIFORI",
                "numéro de téléphone" => "0758468297",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YAYA",
                "numéro de téléphone" => "0172744634",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => ", OUATTARA TANILO",
                "numéro de téléphone" => "0152532463",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO YARDJOUMA",
                "numéro de téléphone" => "0594813695",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA NAGNAMBIEN",
                "numéro de téléphone" => "0556977245",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA MARIAM",
                "numéro de téléphone" => "0554646936",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KIDJOUFOLOKOUA",
                "numéro de téléphone" => "0555809698",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO GNAGALO",
                "numéro de téléphone" => "0503604574",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MIGUISSIGUÉ",
                "numéro de téléphone" => "0544144566",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KAFALO",
                "numéro de téléphone" => "0576099918",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO OUETABOUNA",
                "numéro de téléphone" => "0152195389",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PELARDJOU",
                "numéro de téléphone" => "0536943779",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SEGORO",
                "numéro de téléphone" => "0703995087",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIKORGOTIEN",
                "numéro de téléphone" => "0142939941",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SEDIGUI",
                "numéro de téléphone" => "0153668777",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY GNENEMAKIYÉ",
                "numéro de téléphone" => "0748141224",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIENGNONIFIÊ",
                "numéro de téléphone" => "0160530737",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIDOUTCHIN",
                "numéro de téléphone" => "0160298290",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO PEDJOUGAMA",
                "numéro de téléphone" => "0555014600",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIÈTIÉNEHOURO",
                "numéro de téléphone" => "0779701257",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DJOUFONGOBA",
                "numéro de téléphone" => "0161003637",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NOULOUROU",
                "numéro de téléphone" => "0545724712",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TANLO",
                "numéro de téléphone" => "0103485868",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KREGAPOU BAKARY",
                "numéro de téléphone" => "0585594550",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIDOUGNAN MOUSSA",
                "numéro de téléphone" => "0585371209",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO SOULEYMANE",
                "numéro de téléphone" => "0546140303",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIDIEWORI",
                "numéro de téléphone" => "0747500659",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YENEYASSO YAYA",
                "numéro de téléphone" => "0152232205",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOUTENEMIN",
                "numéro de téléphone" => "0103206799",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TANILO",
                "numéro de téléphone" => "0575091592",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SEGORBA",
                "numéro de téléphone" => "0103143485",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ P. SOUNGALO",
                "numéro de téléphone" => "0555848033",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ LACINA",
                "numéro de téléphone" => "0555945490",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KARIM",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KADOUGNON",
                "numéro de téléphone" => "0595263798",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DJO",
                "numéro de téléphone" => "0555249174",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SOGOBA ADAMA",
                "numéro de téléphone" => "0788479254",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAWAHÊ",
                "numéro de téléphone" => "0555014400",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KOULEYERI",
                "numéro de téléphone" => "0575932671",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUYÉRI",
                "numéro de téléphone" => "0101456763",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA YAYA",
                "numéro de téléphone" => "0504884459",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA METOUGO",
                "numéro de téléphone" => "0171176207",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SOROLO WANDJO ROKIYA",
                "numéro de téléphone" => "0585341007",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ABI",
                "numéro de téléphone" => "0171517567",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOULEYMANE",
                "numéro de téléphone" => "0103111949",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIÉKOURA",
                "numéro de téléphone" => "0102875850",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MAÏMOUNA",
                "numéro de téléphone" => "0152227158",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAFOTIO",
                "numéro de téléphone" => "0103331392",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FATOUMA",
                "numéro de téléphone" => "0596649994",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIENAKAMATIEN",
                "numéro de téléphone" => "0506981946",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ GNINGNON MARIE",
                "numéro de téléphone" => "0141799459",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SONGUIDA",
                "numéro de téléphone" => "0102801492",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO PILGUEGNOUMA",
                "numéro de téléphone" => "0574943816",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KIFORI",
                "numéro de téléphone" => "0173148864",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SEGBATOUGO",
                "numéro de téléphone" => "0143049854",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DAOUDA",
                "numéro de téléphone" => "0103525968",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ADAMA",
                "numéro de téléphone" => "0103574073",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIENFOLOGNOUGO",
                "numéro de téléphone" => "0748609357",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ FANHANYERGUÊBA ALASSANE",
                "numéro de téléphone" => "0707536531",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUINLO LACINA",
                "numéro de téléphone" => "0555198305",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ADAMA",
                "numéro de téléphone" => "0757773770",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO DOUMENA MAMADOU",
                "numéro de téléphone" => "0545365456",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA BONIFACE",
                "numéro de téléphone" => "1",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUAYIRIGUÉFOLO",
                "numéro de téléphone" => "0564090098",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YÉDJOUFOUGO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FIERLAHA",
                "numéro de téléphone" => "0757876590",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO WONNA",
                "numéro de téléphone" => "0143382798",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAMOGO",
                "numéro de téléphone" => "0544774282",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEMIEN",
                "numéro de téléphone" => "0142274892",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAMOGO",
                "numéro de téléphone" => "0506697863",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TANGUEMIN",
                "numéro de téléphone" => "0545754443",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAMOGO",
                "numéro de téléphone" => "0757876590",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SOGORO",
                "numéro de téléphone" => "0506483553",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO FININ",
                "numéro de téléphone" => "0105509754",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KIYALI",
                "numéro de téléphone" => "0585925831",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ PEKIGNATOGÔ",
                "numéro de téléphone" => "0574275076",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WAMIEMBÉ",
                "numéro de téléphone" => "0585186884",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAFOL",
                "numéro de téléphone" => "0142319621",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGOUTCHIEGUÊ",
                "numéro de téléphone" => "0556004622",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ BRAHIMA",
                "numéro de téléphone" => "0709704776",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOUNOUGO",
                "numéro de téléphone" => "0143041832",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ SIMBIÉ",
                "numéro de téléphone" => "0584061958",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO ALAMA",
                "numéro de téléphone" => "0500254095",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO K. GNENEFOLE",
                "numéro de téléphone" => "0554267750",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DRISSA",
                "numéro de téléphone" => "0152672212",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KIFORI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MARIAM",
                "numéro de téléphone" => "0576255834",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGNIWORO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KITCHA",
                "numéro de téléphone" => "0544249838",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MÉLARGA",
                "numéro de téléphone" => "0544140827",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNÉNÉFOLO",
                "numéro de téléphone" => "0545088061",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ TENILO",
                "numéro de téléphone" => "0576736501",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIMEDA",
                "numéro de téléphone" => "0506761073",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOULEYERI",
                "numéro de téléphone" => "0142937345",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ YEFAGADJOUDORI ADAMA",
                "numéro de téléphone" => "0142444732",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOUDJO",
                "numéro de téléphone" => "0575122949",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ OUAYIRGUÉFOLO",
                "numéro de téléphone" => "0748925261",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ MOUSSA",
                "numéro de téléphone" => "0554092547",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DJOUDORI",
                "numéro de téléphone" => "0170634705",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO LACINAN",
                "numéro de téléphone" => "0102311064 // 0757876590",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNENESSINAPARA",
                "numéro de téléphone" => "0103572947",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KITIENI",
                "numéro de téléphone" => "0574408604",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO NAGALOURGO",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOYOURMANI",
                "numéro de téléphone" => "0505961278",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DJENEBA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO SARGALANA",
                "numéro de téléphone" => "0545150850",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MARIAM",
                "numéro de téléphone" => "0506338088",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SEGON",
                "numéro de téléphone" => "0576877929",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO DOUFANGANA",
                "numéro de téléphone" => "0586605187",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO MEYERIGUÉ",
                "numéro de téléphone" => "0151608146",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO TIONRÔ",
                "numéro de téléphone" => "0708729500",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNENEDJOU",
                "numéro de téléphone" => "0102134307",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TIASSANI",
                "numéro de téléphone" => "0546634595",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TCHONKOLI",
                "numéro de téléphone" => "0749935474",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => ", KONÉ TIONRÔ",
                "numéro de téléphone" => "0143354148",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KOLGOLÔH",
                "numéro de téléphone" => "0595395893",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KITOUNI OUMAR",
                "numéro de téléphone" => "0584452942",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU",
                "numéro de téléphone" => "0554490305",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ PEFININ SALIFOU",
                "numéro de téléphone" => "0586521980",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ K. SEYDOU",
                "numéro de téléphone" => "0566159531",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ OUNNA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SEYDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO TIONROLO SIAKA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KIDOU SIAKA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIDOUDENI",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DJAKARIDJA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SOUMAHIRA D.",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO LASSINA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ALIMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY MÉLARGA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO BRAHIMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SOULEYMANE",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FATOUMATA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ MINFANHAN",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY AROUNA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY KLOFAGANA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA SOUMAÏLA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAMBAYERIGUE",
                "numéro de téléphone" => "0544130538",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SOUMAÏLA",
                "numéro de téléphone" => "0565485636",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MARTIN",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ADAMA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KÉPÉTCHA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WONGNIGUÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY AROUNA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO MOUSSA",
                "numéro de téléphone" => "0749904936",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KARDIÈ FOUSSENI",
                "numéro de téléphone" => "0554946573",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YESSONGUYEDOU",
                "numéro de téléphone" => "0544493699",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DAOUDA",
                "numéro de téléphone" => "0474412408",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY TLOUDJAMGA",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ALAMADJOUGOU",
                "numéro de téléphone" => "0708569747",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SEYDOU",
                "numéro de téléphone" => "0594864406",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO LEGOU",
                "numéro de téléphone" => "0779888443",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO HAMIDOU",
                "numéro de téléphone" => "0749308651 // 0544127754",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY SIAKA",
                "numéro de téléphone" => "0584529553",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO YETIBA",
                "numéro de téléphone" => "0759223723",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO DOULOUROU NOUFOU",
                "numéro de téléphone" => "0586610477",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "COULIBALY WOMIENGNAN",
                "numéro de téléphone" => "0564408013",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ",
                "numéro de téléphone" => "0564763063",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO GNESIMPARI",
                "numéro de téléphone" => "0506538088",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO SIHITIO",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOUDERI",
                "numéro de téléphone" => "0555570767",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ DOULAYE",
                "numéro de téléphone" => "0545706533",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KOUNOUGO",
                "numéro de téléphone" => "0143041832",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SOULEYMANE",
                "numéro de téléphone" => "0556978413",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO METON",
                "numéro de téléphone" => "0546450521",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO YESSONGUI",
                "numéro de téléphone" => "0566877854",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO BAKARY",
                "numéro de téléphone" => "0152195337",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SIDIBÉ ALOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO BRAHIMA",
                "numéro de téléphone" => "0150721863",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NATOU JEAN MARIE",
                "numéro de téléphone" => "0556365388",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KPAYÉRIGUÉ",
                "numéro de téléphone" => "0564598357",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KIYALI",
                "numéro de téléphone" => "0152807135",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO KLOTIALAMA",
                "numéro de téléphone" => "0500254095",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO KIDOUDENI",
                "numéro de téléphone" => "0566419662",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEPARI",
                "numéro de téléphone" => "0142274892",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO NAGOTIEKÊ",
                "numéro de téléphone" => "0556004622",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO WELISSÉ",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO FIERLAHA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SÉKONGO REMI",
                "numéro de téléphone" => "0140883752",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ VALI",
                "numéro de téléphone" => "0749377522",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WAMISSO",
                "numéro de téléphone" => "0152067581",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ WAMIÉ",
                "numéro de téléphone" => "0748891426",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YAWAHA",
                "numéro de téléphone" => "0585653975",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO YÉTI",
                "numéro de téléphone" => "0102257867",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO KIDOU",
                "numéro de téléphone" => "000",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ NAGAGNON",
                "numéro de téléphone" => "0574408604",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KIFORI",
                "numéro de téléphone" => "0747608553",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA PEDJOUYAHA",
                "numéro de téléphone" => "0574502485",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA KOUPARI",
                "numéro de téléphone" => "0565579174",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO DORY",
                "numéro de téléphone" => "0173152345",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ BASIEYÉ",
                "numéro de téléphone" => "0554021380",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO SIENFONDA",
                "numéro de téléphone" => "0748115783",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO ALEXIS",
                "numéro de téléphone" => "0102331592",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ TÉNIN",
                "numéro de téléphone" => "0102311064",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO FIERLAHA",
                "numéro de téléphone" => "0103443556",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SANOGO KIPETORY",
                "numéro de téléphone" => "0576946611",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIGBAFORI",
                "numéro de téléphone" => "0504405996",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ S. MOUSSA",
                "numéro de téléphone" => "0153820987",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "YÉO NAMOGO",
                "numéro de téléphone" => "0406697863",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA WONGBÔ",
                "numéro de téléphone" => "0545109670",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ NAGALOUGO",
                "numéro de téléphone" => "0586931621",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ M. YACOU",
                "numéro de téléphone" => "0152029856",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YEFARGNOUMA",
                "numéro de téléphone" => "0150520700",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ GNENEYERI",
                "numéro de téléphone" => "0574979667",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOULAYE",
                "numéro de téléphone" => "0103036938",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOLO",
                "numéro de téléphone" => "0575577158",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KIDOU",
                "numéro de téléphone" => "0506804502",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ KASSOUM",
                "numéro de téléphone" => "0545119830",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "DIALLO DRISSA",
                "numéro de téléphone" => "0544564215",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ ADAMA",
                "numéro de téléphone" => "0142444732",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "KONÉ SIDOUTCHIEN",
                "numéro de téléphone" => "0103166215",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO ISSA",
                "numéro de téléphone" => "0516946611",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ YOUMATON",
                "numéro de téléphone" => "0546634595",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "OUATTARA DOULOUROU",
                "numéro de téléphone" => "0585925831",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ DOGNIMATON",
                "numéro de téléphone" => "0505089288",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SORO KOLOTCHOLOMAN",
                "numéro de téléphone" => "0555860213",
                "sexe" => "Masculin",
                "localisation" => "Korhogo"
            ],
            [
                "nom & prénoms" => "SILUÉ KATIENÉFOWA",
                "numéro de téléphone" => "000",
                "sexe" => "Féminin",
                "localisation" => "Korhogo"
            ],
        ];
        
        $agribusiness = Agribusiness::find('d40da09e-3b4d-4fec-b432-d594402a2f70');
         //dd($farmers);
         // Insérer les données dans la table farmers
         foreach ($farmers as $farmerData) {
            $phone = $farmerData['numéro de téléphone'] ?? null;
            if (strpos($phone, '//') !== false) {
                $phone = explode('//', $phone)[0];
            }
            // Vérifier si le numéro de téléphone existe déjà
            if (Farmer::where('phone', $phone)->exists()) {
                $phone = NULL;
            }
            // Vérifier la longueur du numéro de téléphone
            if (strlen($phone) > 25) {
                $phone = substr($phone, 0, 25);
            }

             Farmer::create([
                 'agribusiness_id' => $agribusiness->id,
                 'locality' => "Korhogo",
                 'identifier' => Farmer::generateMatricule(),
                 'fullname' => $farmerData['nom & prénoms'] ?? null,
                 'phone' => $phone,
                 'sexe' => $this->getFormattedSexe($farmerData['sexe']),
                 'region_id'=>"0fd94610-3400-4981-b5c0-ce93cf28d20f",
                 "departement_id"=>"3ef4a3b1-2f30-452f-abd9-71f2a9fbd264",
                 // Ajoutez d'autres champs si nécessaire
                 'number_of_children' => 0,  // Valeur par défaut, modifiez si nécessaire
                 'number_of_dependants' => 0,  // Valeur par défaut, modifiez si nécessaire
                 'number_of_plots' => '1',
                 // Ajoutez d'autres champs par défaut ici
             ]);
         }
  
    }

    private function getFormattedSexe($sexe)
    {
        if ($sexe === 'Masculin') {
            return 'H';
        } elseif ($sexe === 'Féminin') {
            return 'F';
        }
        return null;
    }
}
