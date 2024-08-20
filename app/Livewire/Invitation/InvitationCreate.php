<?php

namespace App\Livewire\Invitation;

use App\Models\Farmer;
use App\Models\Region;
use App\Models\Invitation;
use Livewire\Attributes\On;
use Livewire\Component;
use App\Models\Agribusiness;
use App\Utilities\NewSmsAPI;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class InvitationCreate extends Component
{
    use WithPagination;

    public $name, $subject, $description, $agribusiness_id, $region_id, $location, $date_activity;
    public $farmer_id = [];

    public $invitation_farmer;
    public $invitationId;
    public $allcheckbox;
    public $type_sending;
    public $agribusinesses;
    public $regions;
    public $farmers;

    public $checked = 0;
    public $checkTypeSeeding = 0;
    public $visibleCoop= 0;
    public $visibleRegion= 0;
    public $visibleFarmers = 0;
    public $selectedProducers = [];
    public $selectAll = false;

    #[Url]
    public $searchFarmer = '';
    public $selectedLimitPaginate = 10;

    public function rules():array
    {
        $rules = [
            'name'=>'required',
            //'subject'=>'required',
            'location'=>'required',
            'date_activity'=>'required|date|after_or_equal:'.now(),
            //'description'=>'required',
          
        ];
        if($this->checked == false){
            $rules['farmer_id']='required';
        }
        return $rules;
    }

    public function messages():array
    {
        $messages = [
            'name.required'=>"Entrez le nom de l'activité",
            //'subject.required'=>'Entrez l\'objet du message',
            'location.required'=>'Entrez le lieu de l\'activité',
            'date_activity.required'=>'Entrez le date de l\'activité',
            'date_activity.date'=>'vous devez saisir une date valide',
            'date_activity.after_or_equal'=>'La date doit être supérieur ou égale a la date et l\'heure d\'aujourd\'hui',
            'subject.required'=>'Entrez l\'objet du message',
            //'description.required'=>'Entrez la description du message',
            'farmer_id.required'=>'vous devez selectionner au moins un producteur'
        ];

        return $messages;
    }

    public function updatedRegionId($region_id)
    {
        
            
            if(!is_null($region_id)){
                
                 $this->farmers = Farmer::where('region_id',$region_id)
                                        ->where(function($query) {
                                            $query->where('fullname', 'like', '%' . $this->searchFarmer . '%')
                                                ->orWhere('phone', 'like', '%' . $this->searchFarmer . '%');
                                        })
                                        ->orderBy('created_at', 'DESC')
                                        ->get();
                 $this->visibleFarmers = true;
            }
           
       
       
    }

    public function updatedAgribusinessId($agribusiness_id)
    {
        //dd($agribusiness_id);

       
       
        if(!is_null($agribusiness_id)){
            $this->farmers =  Farmer::where('agribusiness_id', $agribusiness_id)
                                ->where(function($query) {
                                    $query->where('fullname', 'like', '%' . $this->searchFarmer . '%')
                                          ->orWhere('phone', 'like', '%' . $this->searchFarmer . '%');
                                })
                                ->orderBy('created_at', 'DESC')
                                ->get();
          
            $this->visibleFarmers = true;
           
        }
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function updatedAllcheckbox(){
       
        if($this->checked==false){
            $this->checked = true;
            $this->visibleFarmers = false;
        }else{
            //dd('test');
            $this->checked = false;
        }
       
    }

    public function toggleSelectAll()
    {
        if ($this->selectAll) {
            $this->farmer_id = $this->farmers->pluck('id')->toArray();
        } else {
            $this->farmer_id = [];
        }
    }

    public function updatedSelectAll($value)
    {
        if ($value) {
            $this->selectedProducers = $this->farmers->pluck('id')->toArray();
        } else {
            $this->selectedProducers = [];
        }
    }

    public function updatedCheckTypeSeeding()
    {
        $this->visibleFarmers = false;
        if($this->checkTypeSeeding == 'coop'){
            $this->type_sending = "COOPERATIVE";
            $this->visibleRegion = false;
            $this->selectAll = false;

            if($this->visibleCoop == false){
                $this->visibleCoop = true;
                $this->farmer_id = [];
            }else{
                $this->visibleCoop = false;
            }
        }else{
            $this->type_sending = "REGION";
            $this->visibleCoop = false;
          
            if($this->visibleRegion == false){
                $this->visibleRegion = true;
            }else{
                $this->visibleRegion = false;
               
            }
        }
       
       
    }

    
    public function render()
    {
        $this->regions = Region::all();
        return view('livewire.invitation.invitation-create',[
           
            'regions'=>$this->regions,
            //'agribusinesses'=>$this->agribusinesses,
            'producteurs'=>$this->farmers,
        ]);
    }
}
