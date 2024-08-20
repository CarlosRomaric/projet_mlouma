<?php
/**
 * Created by PhpStorm.
 * User: salioudiabate
 * Date: 16/11/2019
 * Time: 22:33
 */

namespace App\Http\Controllers\API;

use App\Models\Farmer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\API\BaseController;

class FarmerController extends BaseController
{

    /**
     * FarmerController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        $total = Farmer::where('agribusiness_id', $request->user()->agribusiness_id)->count();
        $user = auth()->user();
        $roleUser = $user->roles->first()->name;
        
        //dd($this->getFarmersByAgribusiness($request));
        return response()->json([
            'status' => 'success',
            'message' => 'liste des producteurs',
            'data' =>  $this->getFarmersByAgribusiness($request),
            'meta' => [
                'total' => $total,
                'per_page' => (int) $request->get('per_page', 10),
                'page' => (int) $request->get('page', 1),
                'total_page' => ceil($total / $request->get('per_page', 10))
            ]
        ]);
    }

    private function getFarmersByAgribusiness($request)
    {
        
        $skip = $request->get('per_page', 10) * ($request->get('page', 1) - 1);
        $user = auth()->user();
        //dd($user->agribusiness->name);
        
        $roleUser = $user->roles->first()->name;
        if(($user->agribusiness->name == 'INDEPENDANT') && ($roleUser == 'MOBILE'))
        {
            return Farmer::query()
            ->orderBy('fullname')
            //->take($request->get('per_page', 10))
            //->skip($skip)
            ->with('plots')
            ->get()
            ->transform(function ($farmer) {
                $plotsData = [];
                foreach ($farmer->plots as $plot) {
                    $plotsData[] = [
                        'id' => $plot->id,
                        'total_area'=>$plot->total_area,
                        'latitude'=>$plot->latitude,
                        'longitude'=>$plot->longitude,
                        'code_plot'=>$plot->code_plot
                    ];
                }
                return [
                    'id' => $farmer->id,
                    // 'identifier' => $farmer->identifier,
                    // 'gps_code' => $farmer->gps_code,
                    'fullname' => $farmer->fullname,
                    'born_date' => $farmer->born_date,
                    'born_place' => $farmer->born_place,
                    'locality' => $farmer->locality,
                    'phone' => $farmer->phone,
                    'sexe' => $farmer->sexe,
                    'number_of_children' => $farmer->number_of_children,
                    'number_of_dependants' => $farmer->number_of_dependants,
                    'marital_status' => $farmer->marital_status,
                    'number_of_women' => $farmer->number_of_women,
                    'number_of_plots' => $farmer->number_of_plots,
                    // 'manager_fullname' => $farmer->manager_fullname,
                    // 'manager_sexe' => $farmer->manager_sexe,
                    // 'manager_phone' => $farmer->manager_phone,
                    'picture' => $farmer->picture ? base64_encode(Storage::disk('public')->get($farmer->picture)) : null,
                    //'picture' => $farmer->picture ? base64_encode(file_get_contents(asset('storage/'.$farmer->picture))) : null,
                    //'picture' => $farmer->picture ? file_get_contents(asset('storage/'.$farmer->picture)) : null,
                    'agribusiness_id' => $farmer->agribusiness_id,
                    'created_at' => $farmer->created_at,
                    'updated_at' => $farmer->updated_at,
                    'plots' => $plotsData,
                ];
            });
        }else{
            return Farmer::query()
            ->where('agribusiness_id',$user->agribusiness->id)
            ->orderBy('fullname')
            ->take($request->get('per_page', 10))
            ->skip($skip)
            ->with('plots')
            ->get()
            ->transform(function ($farmer) {
                $plotsData = [];
                foreach ($farmer->plots as $plot) {
                    $plotsData[] = [
                        'id' => $plot->id,
                        'total_area'=>$plot->total_area,
                        'latitude'=>$plot->latitude,
                        'longitude'=>$plot->longitude,
                        'code_plot'=>$plot->code_plot
                    ];
                }
                return [
                    'id' => $farmer->id,
                    // 'identifier' => $farmer->identifier,
                    // 'gps_code' => $farmer->gps_code,
                    'fullname' => $farmer->fullname,
                    'born_date' => $farmer->born_date,
                    'born_place' => $farmer->born_place,
                    'locality' => $farmer->locality,
                    'phone' => $farmer->phone,
                    'sexe' => $farmer->sexe,
                    'number_of_children' => $farmer->number_of_children,
                    'number_of_dependants' => $farmer->number_of_dependants,
                    'marital_status' => $farmer->marital_status,
                    'number_of_women' => $farmer->number_of_women,
                    'number_of_plots' => $farmer->number_of_plots,
                    // 'manager_fullname' => $farmer->manager_fullname,
                    // 'manager_sexe' => $farmer->manager_sexe,
                    // 'manager_phone' => $farmer->manager_phone,
                    'picture' => $farmer->picture ? base64_encode(Storage::disk('public')->get($farmer->picture)) : null,
                    //'picture' => $farmer->picture ? base64_encode(file_get_contents(asset('storage/'.$farmer->picture))) : null,
                    //'picture' => $farmer->picture ? file_get_contents(asset('storage/'.$farmer->picture)) : null,
                    'agribusiness_id' => $farmer->agribusiness_id,
                    'created_at' => $farmer->created_at,
                    'updated_at' => $farmer->updated_at,
                    'plots' => $plotsData,
                ];
            });
        }
       
    }
    

    public function getFarmerByPhone(Request $request)
    {
        $user = auth()->user();
        
        $roleUser = $user->roles->first()->name;
        
        if(($user->agribusiness->name == 'INDEPENDANT') && ($roleUser == 'MOBILE'))
        {
            $farmer = Farmer::where('phone','like','%'.$request->phone.'%')
            ->where('agribusiness_id',$user->agribusiness->id)
            ->with('plots')
            ->get()
            ->transform(function ($farmer) {
                $plotsData = [];
                foreach ($farmer->plots as $plot) {
                    $plotsData[] = [
                        'id' => $plot->id,
                        'total_area'=>$plot->total_area,
                        'latitude'=>$plot->latitude,
                        'longitude'=>$plot->longitude,
                        'code_plot'=>$plot->code_plot
                    ];
                }
                return [
                    'id' => $farmer->id,
                    // 'identifier' => $farmer->identifier,
                    // 'gps_code' => $farmer->gps_code,
                    'fullname' => $farmer->fullname,
                    'born_date' => $farmer->born_date,
                    'born_place' => $farmer->born_place,
                    'locality' => $farmer->locality,
                    'phone' => $farmer->phone,
                    'sexe' => $farmer->sexe,
                    'number_of_children' => $farmer->number_of_children,
                    'number_of_dependants' => $farmer->number_of_dependants,
                    'marital_status' => $farmer->marital_status,
                    'number_of_women' => $farmer->number_of_women,
                    'number_of_plots' => $farmer->number_of_plots,
                    'manager_fullname' => $farmer->manager_fullname,
                    'manager_sexe' => $farmer->manager_sexe,
                    'manager_phone' => $farmer->manager_phone,
                    'picture' => $farmer->picture ? base64_encode(Storage::disk('public')->get($farmer->picture)) : null,
                    //'picture' => $farmer->picture ? base64_encode(file_get_contents(asset('storage/'.$farmer->picture))) : null,
                    //'picture' => $farmer->picture ? file_get_contents(asset('storage/'.$farmer->picture)) : null,
                    'agribusiness_id' => $farmer->agribusiness_id,
                    'created_at' => $farmer->created_at,
                    'updated_at' => $farmer->updated_at,
                    'plots' => $plotsData,
                ];
            });
        }
        else{
            $farmer = Farmer::where('phone','like','%'.$request->phone.'%')
            ->with('plots')
            ->get()
            ->transform(function ($farmer) {
                $plotsData = [];
                foreach ($farmer->plots as $plot) {
                    $plotsData[] = [
                        'id' => $plot->id,
                        'total_area'=>$plot->total_area,
                        'latitude'=>$plot->latitude,
                        'longitude'=>$plot->longitude,
                        'code_plot'=>$plot->code_plot
                    ];
                }
                return [
                    'id' => $farmer->id,
                    // 'identifier' => $farmer->identifier,
                    // 'gps_code' => $farmer->gps_code,
                    'fullname' => $farmer->fullname,
                    'born_date' => $farmer->born_date,
                    'born_place' => $farmer->born_place,
                    'locality' => $farmer->locality,
                    'phone' => $farmer->phone,
                    'sexe' => $farmer->sexe,
                    'number_of_children' => $farmer->number_of_children,
                    'number_of_dependants' => $farmer->number_of_dependants,
                    'marital_status' => $farmer->marital_status,
                    'number_of_women' => $farmer->number_of_women,
                    'number_of_plots' => $farmer->number_of_plots,
                    'manager_fullname' => $farmer->manager_fullname,
                    'manager_sexe' => $farmer->manager_sexe,
                    'manager_phone' => $farmer->manager_phone,
                    'picture' => $farmer->picture ? base64_encode(Storage::disk('public')->get($farmer->picture)) : null,
                    //'picture' => $farmer->picture ? base64_encode(file_get_contents(asset('storage/'.$farmer->picture))) : null,
                    //'picture' => $farmer->picture ? file_get_contents(asset('storage/'.$farmer->picture)) : null,
                    'agribusiness_id' => $farmer->agribusiness_id,
                    'created_at' => $farmer->created_at,
                    'updated_at' => $farmer->updated_at,
                    'plots' => $plotsData,
                ];
            });
        }
       
            if ($farmer->isEmpty()) {
                return $this->sendError('error', ['error' => 'Aucun producteur trouvé'], 404);
            } else {
                $success['Produteur'] = $farmer;
                return $this->sendResponse($success, 'information du producteur');
            }
    }


    public function updateFarmerByPhone(Request $request)
    {
        $user = auth()->user();

        $farmer = Farmer::find($request->phone);

        $data = [
            'picture' => array_key_exists('picture', $farmer) && !is_null($farmer->picture) ? storeBase64ToImage($farmer->picture) : null,
            'identifier' => 'PROD'.date('Y').str_pad(rand(0, 99999), 5, '0', STR_PAD_LEFT),
            'fullname' => $farmer->name,
            'sexe' => $farmer->gender,
            'phone' => $farmer->phone,
            'locality' => $farmer->locality,
            'number_of_plots' => (int) $farmer->numberOfPlots,
            'number_of_children' => (int) $farmer->numberOfChildren,
            'number_of_dependants' => (int) $farmer->numberOfDependants,
            'marital_status' => $farmer->maritalStatus,
            'number_of_women' => (int) $farmer->numberOfWomen,
            'born_date' => $farmer->birthDate,
            'born_place' => $farmer->birthPlace,
            'agribusiness_id' => $farmer->agribusinessId,
            'region_id' => $farmer->regionId,
            'departement_id' => $farmer->departementId,
            'user_id'=>$user->id
        ];
        
        $farmer->update($data);

        $success['Produteur'] = $farmer;
        return $this->sendResponse($success, 'les informations du producteur on bien été mis à jour');

    }

}
