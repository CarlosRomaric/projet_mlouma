@if (session()->has('message'))
    <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
            <div class="text-green-500" dark:text-gray-500>
                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-sm font-medium ml-3">Success!.</div>
        </div>
        <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('message') }}</div>
        <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
    </div>
@endif

@if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center z-50">   
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-1/2">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpen', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4">{{ $plotId ? 'Modification des informations de la parcelle' : 'Ajout des infromations de la parcelle' }}</h2>
                <form wire:submit.prevent="{{ $plotId ? 'update':'savePlot' }} ">
                   
                <table class="w-full">  
                                <tbody>   
                                        <tr>
                                            <td>
                                                <div class="flex flex-col gray-400 mb-6">
                                                
                                                    <h1 class="pb-6 text-gray-700 text-md font-bold">Parcelle(s) du producteur  </h1>
                                                    <div class="flex">
                                                        <div class="w-full px-3 mb-6 md:mb-0">
                                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                Superficie totale de <br> l'exploitation (ha)
                                                            </label>
                                                            <input
                                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                py-3 px-4 leading-tight focus:outline-none focus:bg-white {{ $errors->has('state.plotForms.{$i}.total_area') ? ' border-red-500' : '' }}"
                                                                type="number" step="any"
                                                
                                                                
                                                                name="total_area[]" type="text" wire:model="total_area" placeholder="Superficie totale de l'exploitation (ha)">
                                                                @if($errors->has("total_area"))
                                                                    <p class="text-red-500 text-xs"> {{ $errors->first("total_area") }}  </p>
                                                                @endif
                                                        </div>
                                                        <div class="w-full px-3 mb-6 md:mb-0">
                                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                Joindre le fichier du <br>tracé GPS (Kmz) 
                                                            </label>
                                                            <input
                                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('state.plotForms.{$i}.gps_track') ? ' border-red-500' : '' }} rounded
                                                py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                                                name="gps_track" type="file" wire:model.lazy="gps_track">
                                                                @if($errors->has("gps_track"))
                                                                    <p class="text-red-500 text-xs"> {{ $errors->first("gps_track") }}  </p> 
                                                                @endif
                                                        </div>
                                                    </div>
                                                    <div class="flex mt-2">
                                                        <table class="w-full">
                                                            <tr>
                                                                <td class="px-3">
                                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                        Code GPS
                                                                    </label>
                                                                </td>
                                                                <td class="px-3">
                                                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                        Coordonnées (Latitude - Longitude)
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="px-3" valign="top">
                                                                    <div class="flex flex-col">
                                                                        <input
                                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                                            py-3 px-4 leading-tight focus:outline-none focus:bg-white mr-4 {{ $errors->has('gps_code')  ? ' border-red-500' : ''}} "
                                                                            name="gps_code[]" wire:model="gps_code" type="text"  placeholder="Code GPS">
                                                                            @if($errors->has("gps_code"))
                                                                                <p class="text-red-500 text-xs"> {{ $errors->first("gps_code") }}  </p> 
                                                                            @endif
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td class="px-3" valign="top">
                                                                    <div class="flex flex-row w-full">
                                                                        <div class="w-1/2 flex flex-col">
                                                                            <input
                                                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                    py-3 px-4 leading-tight focus:outline-none focus:bg-white mr-4 {{ $errors->has('latitude')  ? ' border-red-500' : ''}}"
                                                                                name="latitude[]" type="text" wire:model="latitude"  placeholder="Latitude">
                                                                                @if($errors->has("latitude"))
                                                                                        <p class="text-red-500 text-xs"> {{ $errors->first("plotForms.$i.latitude") }}  </p> 
                                                                                @endif

                                                                        </div>
                                                                        <div class="w-1/2 flex flex-col mx-3">
                                                                            <input
                                                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                    py-3 px-4 leading-tight focus:outline-none focus:bg-white {{ $errors->has('longitude')  ? ' border-red-500' : ''}}"
                                                                    
                                                                                name="longitude[]" wire:model="longitude" type="text"   placeholder="Longitude">
                                                                                @if($errors->has("longitude"))
                                                                                        <p class="text-red-500 text-xs"> {{ $errors->first("longitude") }}  </p> 
                                                                                @endif
                                                                        </div>
                                                                       
                                                                        

                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                    

                                </tbody>
                               
                            </table>
                    <div class="flex justify-end mt-5">

                        <button type="submit" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" id="refreshButton">Enregistrer</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModal">Annuler</button>
                    </div>
                </form>

            </div>
        </div>
@endif

@if($isOpenDelete)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-1/2">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpenDelete', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4">Voulez vous supprimer cette parcelle ?</h2>
                <div class="flex justify-end mt-5">

                        <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" wire:click='delete("{{$plotId}}")'>Valider</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalDelete">Annuler</button>
                </div>
            </div>
        </div>
@endif


@if($isOpenFieldnotebook)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-full h-full overflow-auto">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpenFieldnotebook', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                
                <h2 class="text-2xl font-bold mb-4 uppercase">Carnet de Champ {{ $plot->code_plot }} </h2>
                    
                    @livewire('fieldnotebook.fieldnotebook-component', ['farmerId'=>$farmerId, 'plotId'=>$plotId])
                <!-- <div class="flex justify-end mt-5">

                       
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalFieldnotebook">Fermer</button>
                </div> -->
            </div>
        </div>
@endif

