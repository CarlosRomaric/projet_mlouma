<?php


namespace App\Http\Controllers\API;

use App\Models\Farmer;
use App\Models\Region;
use App\Utilities\helpers;
use App\Models\Agribusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Departement;

class SynchronizationController extends Controller
{
    public $itemsWithErrors;
    public $executedItemsId;

    /**
     * SynchronizationController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');

        $this->itemsWithErrors = collect();
        $this->executedItemsId = [];
    }


    public function store(Request $request)
    {
       //dd($request->all());
        //$data = json_decode($request->get('data'), true);
        $data = $request->get('data');
        //dd($data);
        $this->createFarmer($data);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Synchronizations finished.',
            'data' => $this->itemsWithErrors
        ]);
    }

    private function createFarmer($data)
    {
        $currentItem = null;

       
        try {
            $test = [];
            
            foreach ($data as $item) {

               // if ($this->executedItemsId) {
                    
                    $farmer = Farmer::where('phone', $item['phone'])->first();
                    $currentItem = $item;

                   

                    if ($farmer == null) {
                        
                        //dd($this->formatFarmerData($item));

                        Farmer::create($this->formatFarmerData($item));

                    } else {

                        $farmer->update($this->formatFarmerData($item));

                    }

                    //array_push($this->executedItemsId, $currentItem['id']);
                //}
               
            }

        } catch (\Exception $e) {
            //dd($e);
            $this->itemsWithErrors->push((object) [
                //'id' => $currentItem['id'],
                'error' => $e->getMessage(),
            ]);
            return  $this->itemsWithErrors;
            //array_push($this->executedItemsId, $currentItem['id']);

            // $items = array_filter($data, function ($item) {
            //     return !in_array($item['id'], $this->executedItemsId);
            // });
            $items = $data;

            $this->createFarmer($items);
        }
    }

    public function formatFarmerData($row)
    {
        return [
            'picture' => array_key_exists('picture', $row) && !is_null($row['picture']) ? storeBase64ToImage($row['picture']) : null,
            'identifier' => 'PROD'.date('Y').str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'fullname' => $row['name'],
            'sexe' => $row['gender'],
            'phone' => $row['phone'],
            'manager_fullname' => $row['managerName'],
            'manager_sexe' => $row['managerGender'],
            'manager_phone' => $row['managerPhone'],
            'locality' => $row['locality'],
            'number_of_plots' => (int) $row['numberOfPlots'],
            'number_of_children' => (int) $row['numberOfChildren'],
            'number_of_dependants' => (int) $row['numberOfDependants'],
            'marital_status' => $row['maritalStatus'],
            'number_of_women' => $row['numberOfWomen'],
            'born_date' => $row['birthDate'],
            'born_place' => $row['birthPlace'],
            'agribusiness_id' => $row['agribusinessId'],
            'region_id'=>$row['regionId'],
            'departement_id'=>$row['departementId'],
        ];
    }
}
