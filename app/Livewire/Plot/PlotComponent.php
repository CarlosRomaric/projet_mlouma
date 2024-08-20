<?php

namespace App\Livewire\Plot;

use App\Models\Agribusiness;
use App\Models\Plot;
use App\Models\Farmer;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class PlotComponent extends Component
{
    use WithPagination, WithFileUploads;
    
    public $total_area, $gps_track, $latitude, $longitude, $plotId, $gps_code, $plot;
    public $farmerId, $selectedLimitPaginate;

    public $isOpen = 0;
    public $isOpenDelete = 0;

    public $isOpenFieldnotebook = 0;
    public $isOpenDeleteFieldnotebook = 0;

    public $isOpenMap = 0;
    public $selectedCooperatives = [];

    
    #[Url] 
    public $search = '';

    public function rules():array
    {
        $rules = [
            'gps_code'=>'required',
            'total_area'=>'numeric|required_with:gps_code',
            'latitude'=>'required_with:gps_code',
            'longitude'=>'required_with:gps_code',
        ];

        return $rules;
    }

    public function messages():array
    {
        $messages = [
            'gps_code.required'=>'Le champ GPS est requis',
            'total_area.required'=>'le champ surface totale est requis',
            'longitude'=>'le champ longitude est requis',
            'latitude'=>'le champ latitude est requis '
        ];

        return $messages;
    }

    public function __construct(){
        
        $this->selectedLimitPaginate = '10';
    }
    
    public function mount($farmerId, $optionCoop= [])
    {
        $this->farmerId = $farmerId;
        $this->selectedCooperatives = $optionCoop;
    }

    public function updatedSelectedCooperatives($value)
    {
        $this->dispatch('updatedSelectedCooperatives', $this->optionCoop);
    }
   

    public function create(){
        $this->resetInput();
        $this->openModal();
    }
    
    public function resetInput(){
        $this->total_area = '';
        $this->latitude = '';
        $this->longitude = '';
        $this->gps_code = '';
        $this->gps_track = '';
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


    /*------------*/

    public function isOpenModalFieldnotebook(){
        $this->isOpenFieldnotebook = true;
    }

    public function openModalFieldnotebook(){
        $this->isOpenFieldnotebook = true;
    }

    public function closeModalFieldnotebook(){
        $this->isOpenFieldnotebook = false;
    }

    /*------------*/

    public function closeModalDelete(){
        $this->isOpenDelete = false;
    }

    public function openMap(){
        $this->isOpenMap = true;
    }
    
    public function closeOpenMap(){
        $this->isOpenMap = false;
    }

    public function resetSearch(){
        $this->search='';
    }

    public function fieldnotebook($id){
        
        $this->openModalFieldnotebook();
        $this->plot = Plot::findOrFail($id);
        
        $this->plotId = $this->plot->id;
    }

    public function edit($id){
        $this->openModal();
        $plot = Plot::findOrFail($id);
        //dd($plot);
        $this->plotId = $plot->id;
        $this->total_area = $plot->total_area;
        $this->latitude = $plot->latitude;
        $this->longitude = $plot->longitude;
        $this->gps_code = $plot->gps_code;
       
    }

    public function savePlot(){
        $this->validate();
        $farmer = Farmer::find($this->farmerId);

        $plot = New Plot();
        $plot->code_plot = $farmer->identifier.'PAR'.str_pad(rand(0, 99999), 3, '0', STR_PAD_LEFT);
        $plot->total_area = $this->total_area;
        $plot->latitude = $this->latitude;
        $plot->longitude = $this->longitude;
        $plot->gps_code = $this->gps_code;
        //dd($this->gps_track);

       
        if($this->gps_track){
            $path = 'public/'.Agribusiness::find($farmer->agribusiness_id)->acronym . "/" . $this->farmerId;
            $filename = $this->gps_track->getClientOriginalName();
            $plot->gps_track = $this->gps_track->storeAs($path, $filename);
        }

        $plot->farmer_id = $this->farmerId;
        $plot->save();
        $farmer->number_of_plots = $farmer->plots->count();
        $farmer->save();
        $this->closeModal();
        session()->flash('message','les informations sur la parcelle on bien été enregistré');
    }

    public function update(){
        $plot = Plot::findOrFail($this->plotId);
        $farmer = Farmer::find($this->farmerId);
        $test = $this->gps_track;
        
       
        if(!empty($this->gps_track) && $this->gps_track->isValid()){
            
            $path = 'public/'.Agribusiness::find($farmer->agribusiness_id)->acronym . "/" . $this->farmerId;
            $filename = $this->gps_track->getClientOriginalName();
            $storeGpsTrack = $this->gps_track->storeAs($path, $filename);
        }else{ 
            $storeGpsTrack = $plot->gps_track;
        }

        $plot->update([
            'total_area'=>$this->total_area,
            'latitude'=>$this->latitude,
            'longitude'=>$this->longitude,
            'gps_code'=>$this->gps_code,
            'gps_track'=>$storeGpsTrack,
        ]);
        $this->closeModal();
        session()->flash('message', 'les informations de la parcelle ont bien  été modifié avec success');
    }

    public function deleteForm($id){
        $this->openModalDelete();
        $this->plotId = $id;
    }

    public function openMapKmz($id){
        $this->openMap();
        $this->plotId = $id;
    }

    public function loadKML($plotId)
    {
        $plot = Plot::find($plotId);
    
        $kmlUrl = $plot->gps_track;
       
        $kmlUrl = str_replace('public','', $kmlUrl);
        $kmlUrl = asset('storage' . $kmlUrl);
        $this->dispatch('loadKML', $kmlUrl);
    }

    public function delete($id)
    {
        
        Plot::find($id)->delete();
        $farmer = Farmer::findOrFail($this->farmerId);
        $farmer->number_of_plots = $farmer->plots->count();
        $farmer->save();
            session()->flash('message', 'la suppression de cette parcelle a été effectué avec success');
        $this->resetInput();
        $this->closeModalDelete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function query(){
            $query = Plot::where('farmer_id', $this->farmerId)
            ->where(function ($query) {
                $query->where('total_area', 'like', '%' . $this->search . '%')
                    ->orWhere('latitude', 'like', '%' . $this->search . '%')
                    ->orWhere('longitude', 'like', '%' . $this->search . '%')
                    ->orWhere('gps_code', 'like', '%' . $this->search . '%');
            })
            ->paginate($this->selectedLimitPaginate);
            return $query;
    }

    public function render()
    {
        $plots = Plot::where('farmer_id',$this->farmerId)->get();
        $plotsArray = Plot::where('farmer_id',$this->farmerId)->get();
        //dd($this->query());
        //dd($plots->count());
        $farmer = Farmer::find($this->farmerId);
        $data = [
            'plots'=>$this->query(),
            'plotsArray'=>$plotsArray->toArray(),
            'farmer'=>$farmer
        ];
        return view('livewire.plot.plot-component')->with($data);
    }
}
