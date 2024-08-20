<?php

namespace App\Livewire\Projets;

use App\Models\Farmer;
use App\Models\Project;
use Livewire\Component;
use App\Models\Agribusiness;
use App\Utilities\NewSmsAPI;

class ProjetComponent extends Component
{   
    public $name, $location;
    public $agribusiness_id = [];
    public $agribusinesses = [];
    public $projetId, $farmers, $project;
    public $farmer_id = [];
    public $messages;
    public $checked, $visibleFarmers;
    #[Url] 
    public $search = '';
    public $selectedLimitPaginate; 
    public $isOpen = 0;
    public $isOpenShow = 0;
    public $isOpenDelete = 0;

    public function rules():array
    {
        $rules= [
            'name' => 'required',
            'location'=>'required',
            'agribusiness_id'=>'required'
        ];
        
        return $rules;
    }

    public function messages():array
    {
        $messages= [
            'name.required' => 'Le nom  du projet est obligatoire',
            'location.required'=>'La localisation est obligatoire',
            'agribusiness_id.required'=>'le choix de la coopérative ou status indépendant est obligatoire'
        ];
        
        
        return $messages;
    }

    public function __construct()
    {
        $this->selectedLimitPaginate = '10';
    }
    public function create(){
        $this->resetInput();
        $this->openModal();
    }

    public function resetInput()
    {
        $this->name ='';
        $this->location = '';
        $this->agribusiness_id = '';
    }

    public function openModal(){
        $this->isOpen = true;
        $this->farmers = Farmer::all();
    }

    public function openModalShow(){
        $this->isOpenShow = true;
        $this->farmers = Farmer::all();
    }

    public function openModalDelete(){
        $this->isOpenDelete = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    public function closeModalShow(){
        $this->isOpenShow = false;
    }

    public function closeModalDelete(){
        $this->isOpenDelete = false;
    }

    public function updatedAgribusinessId($agribusiness_id){
        $this->visibleFarmers = false;
       $this->farmers = Farmer::where('agribusiness_id','=',$agribusiness_id)->get();
       if(!empty( $this->farmers)){
            $this->visibleFarmers = true;
       }else{
            $this->visibleFarmers = false;
       }
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

    public function edit($id)
    {
        $this->openModal();
        $this->projetId = $id;
        $this->project = Project::find($id);
    }

    public function toggleSelectAll()
    {
        if ($this->selectAll) {
            $this->farmer_id = $this->farmers->pluck('id')->toArray();
        } else {
            $this->farmer_id = [];
        }
    }


    public function saveProjet()
    {
        
        $projet = New Project();
        $projet->name = $this->name;
        $projet->location = $this->location;
        $projet->save();

        $this->farmer_id;
        $projet->farmers()->attach($this->farmer_id);
        
        foreach ($this->farmer_id as $value) {
            $farmer = Farmer::find($value);
            $phoneFarmer[] = $farmer->phone;
        }
        $messageSender = new NewSmsAPI();
        $this->messages = 'Félicitation Vous avez bien été ajouter au projet '.$this->name;
        $messageSender->sendSMS($phoneFarmer, $this->messages);
        
        session()->flash('message','votre enregistrement a bien été éffectué avec success');
        $this->resetInput();
        $this->closeModal();
    }

    public function show($id)
    {
        $this->openModalShow();
        $this->project = Project::find($id);
        $this->name = $this->project->name;
        $this->location = $this->project->location;
        $this->agribusiness_id  = $this->project->agribusiness_id;
    }

   


    public function update()
    {
        if ($this->projetId) {
            $projet = Project::findOrFail($this->projetId);
            
            $projet->update([
                'name' => $this->name,
                'location' =>$this->location,
                'agribusiness_id'=>$this->agribusiness_id
            ]);

            session()->flash('message', 'les infos du projet ont été modifié avec success');
            $this->closeModal();
            $this->resetInput();
        }
    }

    public function deleteForm($id){
        $this->openModalDelete();
        $this->projetId = $id;
    }

    public function delete($id)
    {
        Project::find($id)->delete();
        session()->flash('message', 'la suppression de cet role a été effectué avec success');
        $this->resetInput();
        $this->closeModalDelete();
    }

    public function resetSearch(){
        $this->search='';
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function query(){
        
        $query = Project::where('name','like','%'.$this->search.'%')
                        ->where('location','like','%'.$this->search.'%')
                        ->paginate($this->selectedLimitPaginate);
       
        return $query;
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function render()
    {
         $agribusinesses = Agribusiness::all();
        return view('livewire.projets.projet-component', [
            'projets' => $this->query(),
            'agribusinesses'=>$agribusinesses,
            'farmers'=>$this->farmers
        ]);
    }
}
