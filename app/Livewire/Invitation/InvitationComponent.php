<?php

namespace App\Livewire\Invitation;

use App\Models\Farmer;
use App\Models\Region;
use Livewire\Component;
use App\Models\Invitation;
use Livewire\Attributes\On;
use App\Models\Agribusiness;
use App\Utilities\NewSmsAPI;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use App\Models\FarmerInvitation;


class InvitationComponent extends Component
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
    public $isOpen = 0;
    public $isOpenShow = 0;
    public $checked = 0;
    public $checkTypeSeeding = 0;
    public $visibleCoop= 0;
    public $visibleRegion= 0;
    public $visibleFarmers = 0;
    public $selectedProducers = [];
    public $selectAll = false;
    public $isOpenDelete = 0;
  
    #[Url] 
    public $search = '';
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

    public function resetSearch()
    {
        $this->search='';
    }

    public function openModal(){
        $this->isOpen = true;
        $this->resetInput();
    }

    public function openModalShow(){
        $this->isOpenShow = true;
       
    }

    public function openModalDelete(){
        $this->isOpenDelete = true;
    }

    public function closeModal(){
        $this->resetInput();
        $this->isOpen = false;
    }

    public function closeModalShow(){
       
        $this->isOpenShow = false;
    }

    #[On('get-limit-paginate')] 
    public function getLmitPaginate($value){

        $this->selectedLimitPaginate = $value;
        
    }

    public function create()
    {
        $this->openModal();
        $this->farmers = NULL;
        $this->agribusinesses = Agribusiness::all();

    }

    public function edit($id)
    {
        $this->openModal();

    }

    public function show($id)
    {
       
        $this->openModalShow();
        $this->resetInput();
        $invitation = Invitation::find($id);
        $this->name = $invitation->name;
        //dd($this->name);
        //$this->subject = $invitation->subject;
        $this->description = $invitation->description;
        $this->location = $invitation->location;
        $this->date_activity = date('d/m/Y à H:i', strtotime($invitation->date_activity));
        $this->type_sending = $invitation->type_sending;

        $this->invitation_farmer = $invitation->farmers;
        //dd($invitation ,$this->invitation_farmer);

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
    public function resetInput()
    {
        $this->name ='';
        //$this->subject = '';
        $this->location = '';
        $this->date_activity = '';
        //$this->description = '';
        $this->checkTypeSeeding='';
        $this->region_id='';
        $this->agribusiness_id='';
        $this->selectAll = false;
        $this->farmer_id = '';
        $this->visibleCoop = 0;
        $this->visibleRegion = 0;
    }

    public function sendInvitation()
    {
        $this->validate();
        //dd($this->name, $this->subject, $this->description, $this->region_id, $this->agribusiness_id, $this->farmer_id);
        $invitation = new Invitation();
        $invitation->name = $this->name;
        $invitation->location = $this->location;
        $invitation->date_activity = $this->date_activity;
        //$invitation->subject = $this->subject;
        $invitation->description = 'vous êtes conviez a la formation '.$this->name.' qui se tiendra à '.$this->location.' à '. date('d/m/Y à H:i', strtotime($this->date_activity));
        $invitation->type_sending = $this->type_sending;

        if(!empty($this->agribusiness_id)){
            $invitation->agribusiness_id = $this->agribusiness_id;
        }
        if(!empty($this->region_id)){
            $invitation->region_id = $this->region_id;
        }
        $invitation->save(); 

       
        
        $listingFarmer = [];
        $dataInvitationList = [];
        $phoneFarmer = []; 
        foreach($this->farmer_id as $f){

            $listingFarmer[] = Farmer::find($f);
            
            $dataInvitationList = [
                'invitation_id'=>$invitation->id,
                'farmer_id'=>Farmer::find($f)->id
            ];

        }

        
        
        $invitation_list = FarmerInvitation::create($dataInvitationList);
        
        foreach ($listingFarmer as $value) {
            $phoneFarmer[] = $value->phone;
        }
        $messageSender = new NewSmsAPI();

        $messageSender->sendSMS($phoneFarmer, $this->description);
        //dd($phoneFarmer);

        session()->flash('message', 'la suppression de cette coopérative a été effectué avec success');

        $this->closeModal();
        
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

    public function paginationView()
    {
        return 'custom-pagination-links-view';
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



    public function query()
    {
        $query = Invitation::where('name','like','%'.$this->search.'%')
                           ->orWhere('type_sending','%'.$this->search.'%')
                           ->orderBy('created_at','DESC')
                           ->paginate($this->selectedLimitPaginate);
                           //->get();
                          
        return $query;
    }


    public function render()
    {
        $this->regions = Region::all();
        
        //$this->farmers = Farmer::all();
        //dd($this->query());
        return view('livewire.invitation.invitation-component',[
            'invitations'=> $this->query(),
            'regions'=>$this->regions,
            //'agribusinesses'=>$this->agribusinesses,
            'producteurs'=>$this->farmers,
        ]);
    }

    
}
