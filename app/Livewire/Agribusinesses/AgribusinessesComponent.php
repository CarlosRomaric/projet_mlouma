<?php

namespace App\Livewire\Agribusinesses;

use App\Models\Region;
use Livewire\Component;
use App\Models\Departement;
use Livewire\Attributes\On;
use App\Models\Agribusiness;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Agribusinesses\AgribusinessCreateRequest;

class AgribusinessesComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $agribusinessId;
    public $regions, $departements, $region_id, $departement_id;
    public $searchRegionName;
    public $name, $logo;
    public $acronym; 
    public $address; 
    public $person_responsible_name; 
    public $person_responsible_phone;
    #[Url] 
    public $search = '';
    public $selectedLimitPaginate;
    
    public $isOpen = 0;
    public $isOpenDelete = 0;
    


    public function rules():array
    {
        $rules= [
            'name' => 'required',
            'acronym' => 'required',
            'address' => 'required',
            'person_responsible_name' => 'required_with:person_responsible_phone',
            'person_responsible_phone' => 'required_with:person_responsible_name',
        ];
        if(!empty($this->logo) && $this->logo->isValid()){
            $rules['logo'] =  'required|mimes:png,jpeg,jpg';
        }
        
        return   $rules;
    }

    public function messages():array
    {
        $messages= [
            'name.required' => 'Le nom  de la coopérative est obligatoire',
            'acronym.required' => 'votre Sigle est obligatoire',
            'address.required' => 'la localisation est obligatoire ',
            'person_responsible_phone.required_with' => 'Le champ de téléphone de la personne responsable est obligatoire lorsque le nom de la personne responsable est présent.',
            'person_responsible_name.required_with' => 'Le champ Nom de la personne responsable est obligatoire lorsque le numéro de téléphone de la personne responsable est présent.',
        ];
       
        
        return $messages;
    }

    public function updatedRegionId($region_id){
       
        
        if(!is_null($region_id)){
            $this->departements = Departement::where('region_id','=',$region_id)->get();
           // dd($this->departements);
        }
        
    }
    

    public function __construct()
    {

        $this->selectedLimitPaginate = '10';
    }

    public function create(){
        $this->reset('name','acronym','address','person_responsible_name','person_responsible_phone','agribusinessId');
        $this->openModal();
       
    }

    public function openModal(){
        $this->isOpen = true;
        $this->departements = [];
    }

    public function openModalDelete(){
        $this->isOpenDelete = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    public function closeSession(){
        Session::forget('message');
    }

    public function closeModalDelete(){
        $this->isOpenDelete = false;
    }

    #[On('get-limit-paginate')] 
    public function getLmitPaginate($value){

        $this->selectedLimitPaginate = $value;
        //dd($this->selectedLimitPaginate);
    }
    public function saveAgribusiness(){

        
       
        $this->validate();
        //dd($validated);
        //dd($this->name, $this->acronym, $this->address, $this->person_responsible_name, $this->person_responsible_phone);

        $agribusiness = New Agribusiness();
        $agribusiness->name = $this->name;
        $agribusiness->acronym = str_replace(' ', '', $this->acronym);
        $agribusiness->address = $this->address;
        $agribusiness->logo = $this->logo->isValid() ? $this->logo->storeAs('Agribusiness',$this->logo->getClientOriginalName()) : null;
        $agribusiness->region_id = $this->region_id;
        $agribusiness->departement_id = $this->departement_id;
        $agribusiness->person_responsible_name = $this->person_responsible_name;
        $agribusiness->person_responsible_phone = $this->person_responsible_phone;
        //dd($agribusiness);
        $agribusiness->save();

        session()->flash('message','Votre enregistement a été effectué avec success');
        $this->resetInput();
        $this->refreshAgribusinessShow();
        $this->closeModal();
        //$this->showModal = false;
        //$this->dispatch('close-modal');
    }

    public function edit($id)
    {
        
        $this->openModal();
        $agribusiness = Agribusiness::findOrFail($id);
        $this->departements = Departement::where('region_id',$agribusiness->region_id)->get();
        //$this->departements = Departement::all();
        $this->agribusinessId = $id;
        $this->name = $agribusiness->name;
        $this->acronym = $agribusiness->acronym;
        $this->region_id = $agribusiness->region_id;
        $this->departement_id = $agribusiness->departement_id;
        $this->address = $agribusiness->address;
        $this->person_responsible_name = $agribusiness->person_responsible_name;
        $this->person_responsible_phone = $agribusiness->person_responsible_phone;
    }

    public function update()
    {
        if ($this->agribusinessId) {
            $post = Agribusiness::findOrFail($this->agribusinessId);
            $post->update([
                'name' => $this->name,
                'acronym' => $this->acronym,
                'region_id' => $this->region_id,
                'address'=>$this->address,
                'departement_id' => $this->departement_id,
                'person_responsible_name' => $this->person_responsible_name,
                'person_responsible_phone' => $this->person_responsible_phone,
            ]);
            session()->flash('message', 'la coopérative a été modifié avec success');
            $this->closeModal();
            $this->reset('name','acronym','address','person_responsible_name','person_responsible_phone','agribusinessId');
        }
    }
    
    public function deleteForm($id){
        $this->openModalDelete();
        $this->agribusinessId = $id;
    }

    public function delete($id)
    {
        Agribusiness::find($id)->delete();
        session()->flash('message', 'la suppression de cette coopérative a été effectué avec success');
        $this->reset('name','acronym','address','person_responsible_name','person_responsible_phone','agribusinessId');
        $this->closeModalDelete();
    }

    public function refreshAgribusinessShow(){
        return $this->query();
    }

    public function resetInput(){
        $this->name = '';
        $this->acronym = '';
        $this->address = '';
        $this->person_responsible_name = '';
        $this->person_responsible_phone = '';
    }

    public function resetSearch(){
        $this->search='';
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function query(){
       
        $query = Agribusiness::where('name','like','%'.$this->search.'%')
                ->orWhere('acronym','like','%'.$this->search.'%')
                ->orWhere('address','like','%'.$this->search.'%')
                ->orWhere('person_responsible_name','like','%'.$this->search.'%')
                ->orWhere('person_responsible_phone','like','%'.$this->search.'%')
                ->orderby('created_at','DESC')
                ->paginate($this->selectedLimitPaginate);
        //$query = Agribusiness::search($this->search)->get();
        return $query;
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }
    
    public function render()
    {
        $this->regions = Region::where('name','like','%'.$this->searchRegionName.'%')
                                ->orderBy('created_at','DESC')
                                ->get();

       
        //dump($this->query());
        return view('livewire.agribusinesses.agribusinesses-component',[
            'agribusinesses' => $this->query(),
            'regions'=>$this->regions,
            'departements'=>$this->departements
        ]);
    }
}
