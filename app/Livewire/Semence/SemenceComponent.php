<?php

namespace App\Livewire\Semence;

use App\Models\Semence;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class SemenceComponent extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $name, $speculation, $speculation_id, $etiquette, $cycle, $rendement_moyen, $rendement_potentiel, $carateristique, $zone_culture;
    public $semenceId;

    #[Url]
    public $search = '';
    public $selectedLimitPaginate;
    public $isOpen = 0;
    public $isOpenDelete = 0;


    public function rules():array
    {
        $rules = [
            'name'=>'required',
            'etiquette'=>'mimes:pdf,png,jpeg,jpg|max:1024',
        ];

        return $rules;
    }



   

    public function messages():array
    {
        $messages = [
            'required'=>'le champ est obligatoire',
            'etiquette.mimes'=>'ce champ doit être l\'un de ces type: pdf,png,jpeg,jpg'
        ];

        return $messages;
    }

    public function updatedSpeculationId($value)
    {
        dd($value);
    }

    public function __construct()
    {
        $this->selectedLimitPaginate = '10';
    }

    public function resetSearch(){
        $this->search='';
    }

    public function create(){
       
        $this->reset('name','semenceId');
        $this->openModal();
    }

    public function openModal(){
        $this->isOpen = true;
    }

    public function openModalDelete(){
        $this->isOpenDelete = true;
    }

    public function closeModal(){
        $this->isOpen = false;
    }

    public function closeModalDelete(){
        $this->isOpenDelete = false;
    }

    
    public function query(){
        
        $query = Semence::where('name','like','%'.$this->search.'%')
                         ->orWhere('zone_culture','like','%'.$this->search.'%')
                         ->paginate($this->selectedLimitPaginate);
       
        return $query;
    }

    public function deleteForm($id){
        $this->openModalDelete();
        $this->semenceId = $id;
    }


    public function saveSemence()
    {
       
        //dd($this->speculation->id);
        $this->validate();
        //dd($this->name, $this->speculation_id, $this->etiquette, $this->rendement_moyen, $this->rendement_potentiel, $this->zone_culture);
        $semence = new Semence();
        $semence->name = $this->name;
        $semence->speculation_id = $this->speculation->id;
        $semence->cycle = $this->carateristique;
        $semence->carateristique = $this->carateristique;
        $semence->rendement_moyen = $this->rendement_moyen;
        $semence->rendement_potentiel = $this->rendement_potentiel;
        $semence->zone_culture = $this->zone_culture;
        $filename = $this->etiquette->getClientOriginalName();
        $this->etiquette->storeAs('etiquette', $filename, 'public');
        $semence->etiquette = 'etiquette/' . $filename;
        $semence->save();

        session()->flash('message','Votre enregistement a été effectué avec success');
        $this->closeModal();
    }

    public function delete($id)
    {
        Semence::find($id)->delete();
        session()->flash('message', 'la suppression de cette semence a été effectué avec success');
        $this->closeModalDelete();
    }



    public function render()
    {
        return view('livewire.semence.semence-component',[
            'semences'=>$this->query()
        ]);
    }
}
