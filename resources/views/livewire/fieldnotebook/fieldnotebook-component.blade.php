<div>
    @if($step === 1)
        <h4 class="text-xl">Mise en place Culture</h4>
        <div class="flex flex-col">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light my-10">
                        <thead class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                            <tr class="">
                                <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Nom de la culture</th>
                                <th scope="col" class="px-6 py-4">Date de mise en place</th>
                                <th scope="col" class="px-6 py-4">Date provisoire de récolte</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;?>
                        
                            @forelse ($cultures as $culture)
                            <?php $i++;?>
                            <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i }}</td>
                                <td class="whitespace-nowrap px-6 py-4">

                                    {{ $culture->speculation->name }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($culture->date_debut) }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($culture->date_fin) }}</td>
                            </tr>
                            @empty
                            <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                <td colspan="9" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                    Aucune donnée enregistrée
                                </td>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                    <div class="livewire-pagination"></div>
                </div>
                </div>
            </div>
        </div>

        <h4 class="text-xl my-4">Distribution de Produit</h4>
        <div class="flex flex-col">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full  sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light my-10">
                            <thead class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                                <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nom du produit</th>
                                    <th scope="col" class="px-6 py-4">Catégorie de produit</th>
                                    <th scope="col" class="px-6 py-4">Type de produit</th>
                                    <th scope="col" class="px-6 py-4">Date de distribution</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            
                                @forelse ($productDistributions as $productDistribution)
                                <?php $i++;?>
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productDistribution->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productDistribution->categorie->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productDistribution->type_produit->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($productDistribution->date_debut) }}</td>
                                    {{-- <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($productDistribution->date_fin) }}</td> --}}
                                </tr>
                                @empty
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td colspan="9" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                        Aucune donnée enregistrée
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        <div class="livewire-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <h4 class="text-xl my-4">Utilisation des Produit</h4>
        <div class="flex flex-col">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full  sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light my-10">
                            <thead class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                                <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nom du produit</th>
                                    <th scope="col" class="px-6 py-4">Categorie du produit</th>
                                    <th scope="col" class="px-6 py-4">Type de produit</th>
                                    <th scope="col" class="px-6 py-4">Date début d'utilisation</th>
                                    <th scope="col" class="px-6 py-4">Date fin d'utilisation</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            
                                @forelse ($productUses as $productUse)
                                <?php $i++;?>
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productUse->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productUse->categorie->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $productUse->type_produit->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($productUse->date_debut) }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($productUse->date_fin) }}</td>
                                </tr>
                                @empty
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td colspan="9" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                        Aucune donnée enregistrée
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        <div class="livewire-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-xl my-4">Entretien </h4>
        <div class="flex flex-col">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full  sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light my-10">
                            <thead class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                                <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Type d'entretien</th>
                                    <th scope="col" class="px-6 py-4">Date début </th>
                                    <th scope="col" class="px-6 py-4">Date fin </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            
                                @forelse ($plotMaintenances as $plotMaintenance)
                                <?php $i++;?>
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i }}</td>
                                    
                                    <td class="whitespace-nowrap px-6 py-4">{{$plotMaintenance->type_entretien->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($plotMaintenance->date_debut) }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($plotMaintenance->date_fin) }}</td>
                                </tr>
                                @empty
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td colspan="9" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                        Aucune donnée enregistrée
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        <div class="livewire-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="text-xl my-4">Récolte </h4>
        <div class="flex flex-col">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full  sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light my-10">
                            <thead class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                                <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">culture</th>
                                    <th scope="col" class="px-6 py-4">Qté(T)</th>
                                    <th scope="col" class="px-6 py-4">Date début </th>
                                    <th scope="col" class="px-6 py-4">Date fin </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $i=0;?>
                            
                                @forelse ($harvests as $harvest)
                                <?php $i++;?>
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i }}</td>
                                    
                                    <td class="whitespace-nowrap px-6 py-4">{{$harvest->speculation->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{$harvest->qte}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($harvest->date_debut) }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ date_format_fr($harvest->date_fin) }}</td>
                                </tr>
                                @empty
                                <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                    <td colspan="9" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                        Aucune donnée enregistrée
                                    </td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                        <div class="livewire-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        
    @endif

    <div class="flex justify-between">
            @if($step > 1)
                <button type="button"  wire:click="prevStep" class="bg-green-800 hover:bg-green-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Précédent</button>
            @endif
            
            @if($step < 2)
                <button type="button" wire:click="nextStep" class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Suivant</buttion>
            
          
            @endif
        </div>
</div>
