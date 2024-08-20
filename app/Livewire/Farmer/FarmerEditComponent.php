<?php

namespace App\Livewire\Farmer;

use Carbon\Carbon;
use App\Models\Plot;
use App\Models\Farmer;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Agribusiness;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\TemporaryUploadedFile;

class FarmerEditComponent extends Component
{
    use WithPagination, WithFileUploads;
    public  $farmerId ;
    public  $_gps_code;
    public  $identifier, $gps_code, $fullname, $born_date, $born_place, $locality, $phone,  $sexe;
    public  $number_of_children, $number_of_dependants, $number_of_plots,  $marital_status,  $number_of_women;
    public  $manager_fullname, $manager_phone, $manager_sexe,  $picture, $photo, $agribusiness_id;
   

    #[Url] 
    public $search = '';
    public $selectedLimitPaginate;

    public $isOpenEdit = 0;
    public $isOpenDelete = 0;
    public $plotFormCount = 1;

    public  function rules(){
        $rules =  [
            
            'agribusiness_id' => 'required|exists:agribusinesses,id',
            'locality' => 'required',
            'identifier' => 'required',
            'gps_code'=>'required',
            'fullname' => 'required',
            'sexe' => 'required|in:AUCUN,H,F',
            'phone' => 'required|min:2',
            'born_date' => 'required',
            'born_place' => 'required',
            'manager_fullname'=>'required',
            'manager_sexe'=>'required',
            'manager_phone'=>'required',
            'marital_status'=>'required',
            'number_of_children' => 'required|min:0',
            'number_of_dependants' => 'required|min:0',
            'marital_status' => 'required',
            'number_of_women' => 'required|min:0',
        ];

        if (!empty($this->picture))
        {
            $rules['picture'] = 'file|mimes:jpeg,bmp,png,gif';
        }

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'fullname.required' => 'Le champ nom et prénoms est obligatoire.',
            'identifier.required' => 'Le champ identifiant est obligatoire.',
            'born_date.required' => 'Le champ date de naissance est obligatoire.',
            'born_place.required' => 'Le champ lieu de naissance est obligatoire.',
            'locality.required' => 'Le champ localité est obligatoire.',
            'number_of_children.required' => 'Le champ nombre d\'enfants est obligatoire.',
            'marital_status.required' => 'Le champ statut matrimonial est obligatoire.',
            'number_of_women.required' => 'Le champ nombre de femme est obligatoire.',
            'number_of_dependants.required' => 'Le champ nombre de personne à charge est obligatoire.',
            'agribusiness_id.required' => 'Le champ coopérative est obligatoire.',
            'picture.required' => 'Le champ photo du producteur est obligatoire.',
        ];

        return $messages;
    }

    public function openModalEdit(){
        $this->isOpenEdit = true;
    }

    public function closeModalEdit(){
        $this->resetInputEdit();
        $this->isOpenEdit = false;
    }
    public function mount(){

        $this->openModalEdit();
        $farmer = Farmer::findOrFail($this->farmerId);
        $this->identifier = $farmer->identifier;
        //$this->_gps_code = $farmer->gps_code;
        $this->fullname = $farmer->fullname;
        $this->born_date = $farmer->born_date;
        $this->born_place = $farmer->born_place;
        $this->locality = $farmer->locality;
        $this->phone= $farmer->phone;
        $this->sexe = $farmer->sexe;
        $this->number_of_children = $farmer->number_of_children;
        $this->number_of_dependants =$farmer->number_of_dependants;
        $this->marital_status= $farmer->marital_status;
        $this->number_of_women =$farmer->number_of_women;
        /*
        $this->manager_fullname= $farmer->manager_fullname;
        $this->manager_phone= $farmer->manager_phone;
        $this->manager_sexe= $farmer->manager_sexe;
        */
        $this->born_date = $farmer->born_date;
        $this->photo = $farmer->picture;
        $this->agribusiness_id=$farmer->agribusiness_id;
    }
    public function updateFarmer(){

       //$this->validate();
       $farmer = Farmer::findOrFail($this->farmerId);
       $data = $this->getFarmerData();

       if(!empty($this->picture))
       {
        
                $data['picture'] = $this->picture->storeAs('public/farmers', $this->picture->getClientOriginalName());
       } else {
       
                $data['picture'] = $this->photo;
       }

       $farmer->update($data);
       $this->redirectFarmer();
    }

    public function updatedMaritalStatus($value){
        switch ($value) {
            case 'CELIBATAIRE':

                $this->number_of_women = 0;
                break;

            case 'VEUF':
                $this->number_of_women = 0;
                break;

            case 'DIVORCE':
                $this->number_of_women = 0;
                break;
        
            default:
                # code...
                break;
        }
       
    }

    private function getFarmerData()
    {
        $data = [
            'identifier' => $this->identifier,
            'gps_code' => $this->_gps_code,
            'fullname' => $this->fullname,
            'born_date' => $this->born_date,
            //'born_date' => $this->custom_date_format('Y-m-d', 'd/m/Y', $this->born_date),
            'born_place'=> $this->born_place,
            'locality'=>$this->locality,
            'phone'=>$this->phone,
            'sexe'=>$this->sexe,
            'number_of_children'=>$this->number_of_children,
            'number_of_dependants'=>$this->number_of_dependants,
            'marital_status'=>$this->marital_status,
            'number_of_women'=> ($this->marital_status != "MARIE") ?  0 :  $this->number_of_women,
            //'number_of_plots'=>$this->number_of_plots,
            'manager_fullname'=>$this->manager_fullname,
            'manager_phone'=>$this->manager_phone,
            'manager_sexe'=>$this->manager_sexe,
            'agribusiness_id'=>$this->agribusiness_id,
            
        ];


            

        return $data;
    }

    public function redirectFarmer(){
        return redirect(route('farmers.index'));
    }


    public function resetInputEdit(){
        $this->identifier = '';
        $this->gps_code = '';
        $this->fullname = '';
        $this->born_date = '';
        $this->locality = '';
        $this->phone= '';
        $this->sexe = '';
        $this->number_of_children = '';
        $this->number_of_dependants ='';
        $this->marital_status= '';
        $this->number_of_women ='';
        $this->manager_fullname= '';
        $this->manager_phone= '';
        $this->manager_sexe= '';
        $this->picture= '';
        $this->agribusiness_id='';
    }

    public function custom_date_format  ($date) {
        return Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
    }

    public function render()
    {
        $agribusinesses = Agribusiness::retrievingByUsersType()->get();
        
        return view('livewire.farmer.farmer-edit-component',[
            'agribusinesses'=>$agribusinesses
        ]);
    }
}
