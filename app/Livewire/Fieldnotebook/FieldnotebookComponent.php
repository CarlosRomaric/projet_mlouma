<?php

namespace App\Livewire\Fieldnotebook;

use App\Models\Culture;
use App\Models\Produit;
use Livewire\Component;
use App\Models\Activity;
use App\Models\Plot;
use App\Models\PlotSpeculation;
use Illuminate\Notifications\Action;
use Livewire\WithPagination;

class FieldnotebookComponent extends Component
{
    use WithPagination;

    //variables
    public $farmerId;
    public $plot;
    public $plotId;
    public $typeActivity;
    public $step = 1;

    public $selectedLimitPaginate;

    public function __construct()
    {
        $this->selectedLimitPaginate = '50';
    }

    public function nextStep()
    {
        $this->step++;
    }

    public function prevStep()
    {
        $this->step--;
    }
    
    public function paginationView()
    {
        return 'custom-pagination-links-view';
    }

    public function mount($plotId){

        $this->plotId = $plotId;
        $this->plot = Plot::find($this->plotId);
    }

    public function render()
    {
        //dd($this->plotId, $this->farmerId);
            $cultures =Activity::with('speculation','plot')
                                ->where('plot_id', $this->plotId)
                                ->where('type_activity', 'AJOUT-CULTURE')
                                ->get();
        
            $productDistributions = Activity::where('farmer_id',$this->farmerId)
                                            ->where('type_activity', 'DISTRIBUTION-PRODUIT')
                                            ->get();

            $productUses = Activity::where('plot_id', $this->plotId)
                               ->where('type_activity', 'UTILISATION-PRODUIT')
                               ->get();

            $plotMaintenances = Activity::where('plot_id', $this->plotId)
                                        ->where('type_activity', 'ENTRETIEN')
                                        ->get();

            $harvests = Activity::where('plot_id', $this->plotId)
                        ->where('type_activity', 'RECOLTE')
                        ->get();

        //$maintenacePlots = A
        //dd($productUses);
        $data = [
            'cultures'=>$cultures,
            'productDistributions'=>$productDistributions,
            'productUses'=>$productUses,
            'plotMaintenances'=>$plotMaintenances,
            'harvests'=>$harvests
        ];

        return view('livewire.fieldnotebook.fieldnotebook-component', $data);
    }
}
