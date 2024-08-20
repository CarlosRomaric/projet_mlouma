<?php

namespace App\Livewire\Speculation;

use App\Models\Speculation;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class SpeculationComponent extends Component
{
    use WithPagination;

    public $name;
    public $speculationId;

    #[Url]
    public $search = '';
    public $selectedLimitPaginate;
    public $isOpen = 0;
    public $isOpenDelete = 0;

    public function rules():array
    {
        $rules = [
            'name'=>'required'
        ];

        return $rules;
    }

    public function messages():array
    {
        $messages = [
            'name.required'=>'Le nom de la spéculation est obligatoire'
        ];

        return $messages;
    }

    public function __construct()
    {
        $this->selectedLimitPaginate = '10';
    }

    public function create(){
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

    public function saveSpeculation()
    {
        $this->validate();

        $speculation = new Speculation();
        $speculation->name = $this->name;
        $speculation->save();
        session()->flash('message','Votre enregistrement a été effectué avec success');
        $this->closeModal();
    }

    public function deleteForm($id){
        $this->openModalDelete();
        $this->speculationId = $id;
    }

    public function delete($id)
    {
        Speculation::find($id)->delete();
        session()->flash('message', 'la suppression de cette speculation a été effectué avec success');
        $this->closeModalDelete();
    }

    public function resetInput(){
        $this->name = '';
    }

    public function resetSearch(){
        $this->search='';
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function query(){
        
        $query = Speculation::where('name','like','%'.$this->search.'%')
                ->paginate($this->selectedLimitPaginate);
       
        return $query;
    }

    public function redirectToSemences($speculation_id)
    {
        
        return redirect(route('semences.index',['speculation_id'=>$speculation_id]));
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }


    public function render()
    {
        return view('livewire.speculation.speculation-component',[
            'speculations'=>$this->query()
        ]);
    }
}
