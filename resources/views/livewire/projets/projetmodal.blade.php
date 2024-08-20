@push('stylesheets')

        <style>
            [x-cloak] {
              display: none;
          }
            .svg-icon {
            width: 1em;
            height: 1em;
            }

            .svg-icon path,
            .svg-icon polygon,
            .svg-icon rect {
            fill: #333;
            }

            .svg-icon circle {
            stroke: #4691f6;
            stroke-width: 1;
            }

            .multi-select .dropdown {
                position: relative;
            }
            .multi-select .dropdown-menu {
                position: absolute;
                width: 100%;
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 4px;
                max-height: 200px;
                overflow-y: auto;
                z-index: 1000;
            }
            .multi-select .dropdown-item {
                padding: 8px 16px;
                cursor: pointer;
            }
            .multi-select .dropdown-item:hover {
                background-color: #f1f1f1;
            }
            .multi-select .selected-item {
                display: inline-block;
                background-color: #007bff;
                color: white;
                border-radius: 4px;
                padding: 4px 8px;
                margin: 4px 2px;
            }
            .multi-select .selected-item button {
                background: none;
                border: none;
                color: white;
                margin-left: 4px;
                cursor: pointer;
            }
        </style>
@endpush
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
                <h2 class="text-2xl font-bold mb-4">{{ $projetId ? 'Modification de projet' : 'Creation de projet' }}</h2>
                <form wire:submit.prevent="{{ $projetId ? 'update':'saveProjet' }} ">
                        
                    <div class="flex gray-400 mb-6">
                        
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                    Nom du projet 
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('name') ? ' border-red-500' : '' }} rounded
                                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="name" 
                                    id="name"  
                                    wire:model="name" 
                                    type="text" 
                                    placeholder="Nom du projet" 
                                    value="{{ old('name') }}">
                            
                                @error('name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                
                            </div>

                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                   Localisation
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('location') ? ' border-red-500' : '' }} rounded
                                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="location" id="location"  wire:model="location" type="text" placeholder="Localisation du projet" value="{{ old('location') }}">
                            
                                @error('location')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                
                            </div>
                    
                       
                        
                    </div>

                    <div  class="flex gray-400 mb-6">
                            {{--  
                            <div  x-data="{ selected: @entangle('agribusiness_id').defer }" class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agribusiness_id">
                                   Coopérative
                                </label>
                                <select
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('agribusiness_id') ? ' border-red-500' : '' }} rounded
                                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="agribusiness_id" id="agribusiness_id"  wire:model.change="agribusiness_id"  x-model="selected" multiple>
                                    <option value="">choississez votre coopérative</option>
                                    @foreach ($agribusinesses as $agribusiness)
                                        <option value="{{ $agribusiness->id }}">{{ $agribusiness->name }}</option>
                                    @endforeach
                                </select>
                            
                                @error('name')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                                
                            </div>

                            --}}

                           
                            <div x-data="multiSelect(@entangle('agribusiness_id'), @json($agribusinesses))" class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agribusiness_id">
                                    Coopérative
                                </label>
                                <div class="relative">
                                    <div class="relative w-full border bg-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white" @click="open = !open">
                                        <div class="flex flex-wrap">
                                            <template x-for="(option, index) in selectedOptions" :key="index">
                                                <div class="bg-blue-500 text-white rounded px-2 py-1 m-1 flex items-center">
                                                    <span x-text="option.name"></span>
                                                    <button @click.stop="removeOption(option.id)" class="ml-2 focus:outline-none">×</button>
                                                </div>
                                            </template>
                                            <input x-show="selectedOptions.length === 0" type="text" placeholder="choississez votre coopérative" class="bg-gray-200 text-gray-700 border-0 focus:outline-none">
                                        </div>
                                    </div>
                                    <div x-show="open" class="absolute w-full bg-white border rounded mt-1 z-10" @click.outside="open = false">
                                        <template x-for="option in options" :key="option.id">
                                            <div class="cursor-pointer px-4 py-2 hover:bg-gray-200" @click="toggleOption(option)">
                                                <span x-text="option.name"></span>
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <select class="hidden" name="agribusiness_id[]" id="agribusiness_id" multiple>
                                    <template x-for="option in selectedOptions" :key="option.id">
                                        <option :value="option.id" x-text="option.name" selected></option>
                                    </template>
                                </select>
                                @error('agribusiness_id')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div>

                           

                            
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agribusiness_id">
                                  List des producteurs
                                </label>
                               
                                @if($visibleFarmers)
                                    @foreach ($farmers as  $farmer)

                                    <label class="custom-checkbox-label flex my-4">
                                        <div class="bg-gray-300 shadow border-green-600 w-6 h-6 p-1 flex justify-center items-center mr-2">
                                            <input type="checkbox" value="{{ $farmer->id }}" name="farmer_id[]" wire:model="farmer_id" class="hidden" >
                                            <svg class="hidden w-4 h-4 text-green-700 pointer-events-none" viewBox="0 0 172 172">
                                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                                                    <path d="M0 172V0h172v172z"/>
                                                    <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="2"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="select-none">{{ $farmer->fullname }}</span>
                                    </label>

                                    @endforeach
                                @endif
                                
                            </div>
                          
                    </div>
                
                   
                    
                    <div class="flex justify-end mt-5">

                        <button type="submit" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2">Enregistrer</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModal">Annuler</button>
                    </div>
                </form>

            </div>
        </div>

  

@endif

@if($isOpenShow)
<div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-1/2">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpenShow', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4">Détail du projet </h2>
                <div class="flex gray-400 mb-6">
                        
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Nom du projet : <b class="text-green-800">{{ $project->name }}</b>
                            </label>
                               
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Localisation : <b class="text-green-800">{{ $project->location }}</b>
                            </label>
                               
                        </div>
                    
                </div>
                <div class="flex gray-400 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                              Liste des Producteurs 
                            </label>
                            @foreach ($project->farmers as $farmer)
                                <div>
                                    {{ $farmer->fullname }}
                                </div>
                            @endforeach
                           
                            
                        </div>
                </div>


                <div class="flex justify-end mt-5">

                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalShow">Fermer</button>
                </div>
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
                <h2 class="text-2xl font-bold mb-4">Voulez vous supprimer cet projet ?</h2>
                <div class="flex justify-end mt-5">

                        <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" wire:click='delete("{{$projetId}}")'>Valider</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalDelete">Annuler</button>
                </div>
            </div>
        </div>
@endif

@push('scripts')
        <script>
                function multiSelect(selectedIds, allOptions) {
                        return {
                            open: false,
                            selectedIds: selectedIds,
                            options: allOptions,
                            get selectedOptions() {
                                return this.options.filter(option => this.selectedIds.includes(option.id));
                            },
                            toggleOption(option) {
                                const index = this.selectedIds.indexOf(option.id);
                                if (index === -1) {
                                    this.selectedIds.push(option.id);
                                } else {
                                    this.selectedIds.splice(index, 1);
                                }
                            },
                            removeOption(optionId) {
                                const index = this.selectedIds.indexOf(optionId);
                                if (index !== -1) {
                                    this.selectedIds.splice(index, 1);
                                }
                            }
                        }
                    }
        </script>
  @endpush