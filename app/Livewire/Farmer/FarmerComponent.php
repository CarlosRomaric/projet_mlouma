<?php

namespace App\Livewire\Farmer;

use App\Models\Activity;
use Carbon\Carbon;
use App\Models\Plot;
use App\Models\Farmer;
use App\Models\Region;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Agribusiness;
use App\Models\Departement;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;


class FarmerComponent extends Component
{
    use WithPagination, WithFileUploads;
    public $farmerId;

    public  $identifier, $gps_code, $fullname, $born_date, $born_place, $locality, $phone,  $sexe;
    public  $number_of_children, $number_of_dependants,  $marital_status,  $number_of_women,   $number_of_plots; 
    public  $manager_fullname, $manager_phone, $manager_sexe,  $picture, $agribusiness_id;
    public  $total_area, $gps_track, $farmer_id, $latitude, $longitude;
    public  $regions, $region_id; 
    public  $departements = [];
    public  $departement_id; 
    public  $gpsTrack;
    public  $plotForms = [];
    public  $state = [];
    public  $plots = [];
    
    #[Url] 
    public $search = '';
    public $selectedLimitPaginate;

    public $isOpen = 0;
    public $isOpenDelete = 0;
    public $plotFormCount = 1;
    protected $listeners = ['farmerEdited'=>'editFromFarmerComponent'];
    
    public  function rules(){
        $rules =  [
            'picture' => 'file|mimes:jpeg,bmp,png,gif',
            'agribusiness_id' => 'required|exists:agribusinesses,id',
            'locality' => 'required',
            'region_id'=>'required',
            'departement_id'=>'required',
          
            // '_gps_code'=>'required',
            'fullname' => 'required',
            'sexe' => 'required|in:AUCUN,H,F',
            'phone' => 'required|min:2',
            'born_date' => 'required',
            'born_place' => 'required',
            // 'manager_fullname'=>'required',
            // 'manager_sexe'=>'required',
            // 'manager_phone'=>'required',
            'marital_status'=>'required',
            'number_of_children' => 'required|min:0',
            'number_of_dependants' => 'required|min:0',
            'marital_status' => 'required',
            'number_of_women' => 'required|min:0',
            'number_of_plots' => 'required|min:0',
        ];

        return $rules + $this->plotValidationRules();
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

        return $messages + $this->plotValidationMessages();
    }

    public function __construct()
    {
        $this->selectedLimitPaginate = '10';
        $this->number_of_plots = $this->plotFormCount;
        $this->_gps_code = '';
    }



    public function create(){
        $this->plotFormCount = 1;
        $this->openModal();
       
    }

    public function edit($id){
        $this->openModal();

       
        $this->farmerId = $id;
        $farmer = Farmer::findOrFail($id);
        
        $this->plots = Plot::where('farmer_id',$this->farmerId)->get();
        $this->fullname = $farmer->fullname;
        $this->born_date = $farmer->born_date;
        $this->born_place = $farmer->born_place;
        $this->locality = $farmer->locality;
        $this->phone = $farmer->phone;
        $this->sexe = $farmer->sexe;
        $this->number_of_children = $farmer->number_of_children;
        $this->number_of_dependants = $farmer->number_of_dependants;
        $this->marital_status = $farmer->marital_status;
        $this->number_of_women = $farmer->number_of_women;
        // $this->manager_fullname = $farmer->manager_fullname;
        // $this->manager_phone = $farmer->manager_phone;
        // $this->manager_sexe = $farmer->manager_sexe;
        $this->picture = $farmer->picture;
        $this->agribusiness_id = $farmer->agribusiness_id;
        $this->_gps_code = $farmer->gps_code;
        $this->total_area = $farmer->total_area;
        $this->gps_track = $farmer->gps_track;
        $this->latitude = $farmer->latitude;
        $this->longitude = $farmer->longitude;
        $this->number_of_plots = $farmer->number_of_plots;
        $this->plotFormCount = $this->plots->count();
        
        $plots = $farmer->plots;
        $count = count($plots);
        $i = 1; // Indice commencant à 1

        foreach ($plots as $plot) {
            //dd($plot);
            $this->state['plotForms'][$i]['total_area'] = $plot->total_area;
            $this->state['plotForms'][$i]['gps_code'] = $plot->gps_code;
            $this->state['plotForms'][$i]['gps_track'] = $plot->gps_track;
            $this->state['plotForms'][$i]['longitude'] = $plot->longitude;
            $this->state['plotForms'][$i]['latitude'] = $plot->latitude;

            $i++; // Incrémenter l'indice après chaque itération
        }
       
    }

 

    public function openModal(){
        
        $this->number_of_plots = $this->plotFormCount;
        $this->isOpen = true;
    }

    public function openModalDelete(){
        $this->isOpenDelete = true;
    }

    public function closeModal(){
        $this->resetInput();
        $this->isOpen = false;
    }

    public function closeModalDelete(){
        $this->isOpenDelete = false;
    }

    #[On('get-limit-paginate')] 
    public function getLmitPaginate($value){

        $this->selectedLimitPaginate = $value;
        
    }

    public function addPlotFormCount()
    {
        $this->plotFormCount++;
        $this->number_of_plots = $this->plotFormCount;
    }

     public function removePlotFormCount($index)
    {
        
        $this->plotFormCount--;
        unset($this->plotForms[$index]);
        $this->number_of_plots = $this->plotFormCount;
        $this->validate();
        
    }

    public function update(){
        if($this->farmerId){
            $farmer = Farmer::findOrFail($this->farmerId);
            $plots =  $farmer->plots;
           
            $dataFarmer=[
                'identifier'=>$this->identifier,
                'gps_code'=>$this->_gps_code,
                'fullname'=>$this->fullname,
                'born_date'=>$this->born_date,
                'born_place'=>$this->born_place,
                'locality'=>$this->locality,
                'phone'=>$this->phone,
                'sexe'=>$this->sexe,
                'number_of_women'=>$this->number_of_women,
                // 'manager_fullname'=>$this->manager_fullname,
                // 'manager_phone'=>$this->manager_phone,
                // 'manager_sexe'=>$this->manager_sexe,
                'born_date'=>$this->born_date,
                'picture'=>$this->picture,
                'agribusiness_id'=>$this->agribusiness_id,
                'number_of_plots'=>$this->number_of_plots
            ];
            
            $farmer->update($dataFarmer);
            
        }

        Plot::where('farmer_id', $this->farmerId)->delete();
        $farmer->number_of_plots = $farmer->plots->count();
        $farmer->save();

        for ($i = 1; $i <= $this->plotFormCount; $i++) {
             Plot::create($this->getPlotData($i, $farmer->id));
        }
        $i=1;
        

        session()->flash('message', 'les informations du producteurs ont bien  a été modifié avec success');
        $this->closeModal();
        $this->resetInput();
    }

    public function closeSession(){
        Session::forget('message');
    }

    public function resetInput(){

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
        $this->number_of_plots = '';
        // $this->manager_fullname= '';
        // $this->manager_phone= '';
        // $this->manager_sexe= '';
        $this->picture= '';
        $this->agribusiness_id='';
        $this->total_area='';
        $this->gps_track='';
        $this->farmer_id= '';
        $this->latitude= '';
        $this->longitude= '';
        $this->plotForms= '';
        $this->state = '';
        for ($i = 0; $i < $this->plotFormCount; $i++) { 
            if (isset($this->state['plotForms'][$i]) && is_array($this->state['plotForms'][$i])) {
                $this->state['plotForms'][$i]['total_area'] = '';
                $this->state['plotForms'][$i]['gps_code'] = '';
                $this->state['plotForms'][$i]['gps_track'] = '';
                $this->state['plotForms'][$i]['longitude'] = '';
                $this->state['plotForms'][$i]['latitude'] = '';
            }
        }

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

    public function saveFarmer(){
        $this->authorize('ADMIN PRODUCTEUR ADD');
       
       $this->validate();
       //ajout de producteur
       //dd($this->getFarmerData());
       $farmer = Farmer::create($this->getFarmerData());
        //Ajout de parcelle
       for ($i = 1; $i <= $this->plotFormCount; $i++) {
             
             Plot::create($this->getPlotData($i, $farmer->id));
       }
       session()->flash('message','Votre enregistement a été effectué avec success');
       $this->resetInput();
       $this->refreshFarmerShow();
       $this->closeModal();
       
    }
    function custom_date_format($from, $to, $date) {
        return Carbon::createFromFormat($from, $date)->format($to);
    }

    public function refreshFarmerShow(){
        return $this->query();
    }

    private function getFarmerData()
    { 
        // if($this->picture->isValid()){
        //     $fileNameWithExtension = $this->picture->getClientOriginalName();
        //     $imageName = 'farmers' . time() . '_' . '.' . $fileNameWithExtension;
        //     //dd($this->picture, $imageName);
        //     $this->picture->move(public_path('/upload_farmers/pictures/'), $imageName);
        //     $picture = 'upload_farmers/pictures/'.$imageName;
        // }else{
        //     $this->picture ='';
        // }
       

        return [
            'identifier' => Farmer::generateMatricule(),
            'fullname' => $this->fullname,
            'born_date' => $this->custom_date_format('Y-m-d', 'd/m/Y', $this->born_date),
            'born_place'=> $this->born_place,
            'locality'=>$this->locality,
            'region_id'=>$this->region_id,
            'departement_id'=>$this->departement_id,
            'phone'=>$this->phone,
            'sexe'=>$this->sexe,
            'number_of_children'=>$this->number_of_children,
            'number_of_dependants'=>$this->number_of_dependants,
            'marital_status'=>$this->marital_status,
            'number_of_women'=>$this->number_of_women,
            'number_of_plots'=>$this->number_of_plots,
            // 'manager_fullname'=>$this->manager_fullname,
            // 'manager_phone'=>$this->manager_phone,
            // 'manager_sexe'=>$this->manager_sexe,
            'agribusiness_id'=>$this->agribusiness_id,
            'picture' => $this->picture->isValid() ? $this->picture->storeAs('farmers',$this->picture->getClientOriginalName()) : null,
            //'picture' => $picture,
        ];
    }

     private function plotValidationRules()
    {
        $rules = [];

        for ($i = 1; $i <= $this->plotFormCount; $i++) {
            $rules["state.plotForms.$i.gps_code"] = 'required_if:number_of_plots,>=,1';
            $rules["state.plotForms.$i.total_area"] = 'numeric|required_with:state.plotForms.' . $i . '.gps_code';
            $rules["state.plotForms.$i.latitude"] = 'required_with:state.plotForms.' . $i . '.gps_code';
            $rules["state.plotForms.$i.longitude"] = 'required_with:state.plotForms.' . $i . '.gps_code';
        }

        return $rules;
    }

    private function plotValidationMessages()
    {
        $messages = [];

       
        for ($i = 1; $i <= $this->plotFormCount; $i++) {
            $messages["state.plotForms.$i.gps_code.required_if"] = "Le champ GPS est requis pour le formulaire de la parcelle $i";
            $messages["state.plotForms.$i.total_area.required_with"] = "Le champ surface totale est requis pour le formulaire de la parcelle $i";
            $messages["state.plotForms.$i.latitude.required_with"] = "Le champ latitude est requis pour le formulaire de la parcelle $i";
            $messages["state.plotForms.$i.longitude.required_with"] = "Le champ longitude est requis pour le formulaire de la parcelle $i";
        }

        return $messages;
    }

    private function getPlotData($i, $farmerId)
    {
            $path = Agribusiness::find($this->agribusiness_id)->acronym . "/" . $farmerId;
       
          
            $data = [
                'total_area' => $this->state['plotForms'][$i]['total_area'],
                'gps_track' => $this->gpsTrack,
                'farmer_id' => $farmerId,
                'gps_code' => $this->state['plotForms'][$i]['gps_code'],
                'latitude' => $this->state['plotForms'][$i]['latitude'],
                'longitude' => $this->state['plotForms'][$i]['longitude'],
            ];

            if (optional($this->state['plotForms'][$i]['gps_track'])->isValid()) {
                $filename = $this->state['plotForms'][$i]['gps_track']->getClientOriginalName();
                $this->gpsTrack = $this->state['plotForms'][$i]['gps_track']->storeAs($path, $filename);
                $data['gps_track'] = $this->gpsTrack;
            }

        return $data;
    }

    public function updatedRegionId($region_id)
    {
        //dd($region_id);
        $this->departements = Departement::where('region_id','=',$region_id)->get();
        //dd($this->departements);
    }

    public function query(){
        
        $query = Farmer::where('gps_code','like','%'.$this->search.'%')
                ->orWhere('fullname','like','%'.$this->search.'%')
                ->orWhere('phone','like','%'.$this->search.'%')
                ->orWhere('sexe','like','%'.$this->search.'%')
                ->paginate($this->selectedLimitPaginate);
       
        return $query;
    }
      
    public function deleteForm($id){
        $this->openModalDelete();
        $this->farmerId = $id;
    }

    public function delete($id)
    {
        Activity::where('farmer_id', $id)->delete();
        Plot::where('farmer_id', $id)->delete();
        Farmer::findOrFail($id)->delete();
        session()->flash('message', 'la suppression de cette coopérative a été effectué avec success');
        $this->closeModalDelete();
    }

    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function resetSearch()
    {
        $this->search='';
    }



    public function render()
    {
        $agribusinesses = Agribusiness::retrievingByUsersType()->get();
        $this->regions = Region::orderBy('created_at','DESC')->get();
        
        return view('livewire.farmer.farmer-component',[
            'farmers'=>$this->query(),
            'regions'=>$this->regions,
            'departements'=>$this->departements,
            'agribusinesses'=>$agribusinesses
        ]);
    }
}
