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
                <h2 class="text-2xl font-bold mb-4">{{ $semenceId ? 'Modification d\'une varieté semence' : 'Ajout d\'une varieté de semence' }}</h2>
                <form wire:submit.prevent="{{ $semenceId ? 'update':'saveSemence' }} ">
                        
                    <div class="flex gray-400 mb-6">
                        
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Nom d'une varieté de  semence
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('name') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="name" id="name"  wire:model="name" type="text" placeholder="Nom du semence" value="{{ old('name') }}">
                        
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Etiquette
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('etiquette') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="etiquette" id="etiquette"  wire:model="etiquette" type="file" placeholder="Nom du semence" value="{{ old('etiquette') }}">
                        
                            @error('etiquette')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                    </div>
                    <div class="flex gray-400 mb-6">
                        <div class="w-full md:w1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rendement_moyen">
                               Rendement Moyen
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('rendement_moyen') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="rendement_moyen" id="rendement_moyen"  wire:model="rendement_moyen" type="text" placeholder="Entrez le rendement moyen" value="{{ old('rendement_moyen') }}">
                        
                            @error('rendement_moyen')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="w-full md:w1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="rendement_potentiel">
                               Rendement Potentiel
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('rendement_potentiel') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="rendement_potentiel" id="rendement_potentiel"  wire:model="rendement_potentiel" type="text" placeholder="Entrez le rendement potentiel" value="{{ old('rendement_potentiel') }}">
                        
                            @error('rendement_potentiel')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex gray-400 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cycle">
                               Longeur du cycle (jour)
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('cylce') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="cycle" id="cycle"  wire:model="cycle" placeholder="Entrez le cycle" value="{{ old('cycle') }}">
                           
                        
                            @error('carateristique')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="zone_culture">
                              Zone de culture
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('zone_culture') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="zone_culture" id="zone_culture"  wire:model="zone_culture" placeholder="Entrez la zone de culture" value="{{ old('zone_culture') }}">
                           
                        
                            @error('zone_culture')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                       
                    </div>
                    <div class="flex gray-400 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Caratéristique
                            </label>
                            <textarea
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('carateristique') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="carateristique" id="carateristique"  wire:model="carateristique" placeholder="caractéristique de la semence" value="{{ old('carateristique') }}">
                            </textarea>
                        
                            @error('carateristique')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
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

@if($isOpenDelete)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-1/2">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpenDelete', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4">Voulez vous supprimer cet semence ?</h2>
                <div class="flex justify-end mt-5">

                        <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" wire:click='delete("{{$semenceId}}")'>Valider</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalDelete">Annuler</button>
                </div>
            </div>
        </div>
@endif