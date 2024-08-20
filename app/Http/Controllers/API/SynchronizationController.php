<?php

namespace App\Http\Controllers\API;

use App\Models\Farmer;
use App\Models\Region;
use App\Models\Departement;
use App\Models\Agribusiness;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SynchronizationController extends Controller
{
    public $itemsWithErrors;
    public $executedItemsId;

    public function __construct()
    {
        $this->middleware('auth:api');
        $this->itemsWithErrors = collect();
        $this->executedItemsId = [];
    }

    public function store(Request $request)
    {
        $data = $request->get('data');
        $this->createFarmers($data);

        if ($this->itemsWithErrors->isEmpty()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Synchronizations finished.',
                'data' => $this->itemsWithErrors
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Une ou plusieurs erreurs se sont produites lors de la synchronisation.',
                'data' => $this->itemsWithErrors
            ], 400); // 400 Bad Request
        }
    }

    public function createFarmers($data)
    {
        try {
            DB::beginTransaction();
            $myFarmer = [];
            foreach ($data as $item) {
                $myFarmer[] = $item['name'];
                try {
                    $currentItem = $item;
                    $farmer = Farmer::where('phone', $item['phone'])->first();
                    $formattedData = $this->formatFarmerData($item);

                    $validationErrors = $this->validateForeignKeys($formattedData);
                    if (!empty($validationErrors)) {
                        $this->itemsWithErrors->push((object)[
                            'data' => $item['name'],
                            
                            'errors' => $validationErrors
                        ]);
                        continue;
                    }

                    if ($farmer == null) {
                        Farmer::create($formattedData);
                    } else {
                        $farmer->update($formattedData);
                    }
                } catch (\Exception $e) {
                    $this->itemsWithErrors->push((object)[
                        'data' => $item,
                        'error' => $e->getMessage()
                    ]);
                }
            }
            //dd($myFarmer);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->itemsWithErrors->push((object)[
                'error' => $e->getMessage()
            ]);
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
            // 'manager_fullname' => $row['managerName'],
            // 'manager_sexe' => $row['managerGender'],
            // 'manager_phone' => $row['managerPhone'],
            'locality' => $row['locality'],
            'number_of_plots' => (int) $row['numberOfPlots'],
            'number_of_children' => (int) $row['numberOfChildren'],
            'number_of_dependants' => (int) $row['numberOfDependants'],
            'marital_status' => $row['maritalStatus'],
            'number_of_women' => (int) $row['numberOfWomen'],
            'born_date' => $row['birthDate'],
            'born_place' => $row['birthPlace'],
            'agribusiness_id' => $row['agribusinessId'],
            'region_id' => $row['regionId'],
            'departement_id' => $row['departementId'],
            'user_id'=>Auth::user()->id
        ];
    }

    private function validateForeignKeys($data)
    {
        $errors = [];

        if (!Agribusiness::where('id', $data['agribusiness_id'])->exists()) {
            $errors[] = "L'agribusiness avec l'identifiant {$data['agribusiness_id']} n'existe pas.";
        }
        if (!Region::where('id', $data['region_id'])->exists()) {
            $errors[] = "La région avec l'identifiant {$data['region_id']} n'existe pas.";
        }
        if (!Departement::where('id', $data['departement_id'])->exists()) {
            $errors[] = "Le département avec l'identifiant {$data['departement_id']} n'existe pas.";
        }

        return $errors;
    }
}
