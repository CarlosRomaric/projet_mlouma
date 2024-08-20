@if (session()->has('message'))
    <div class="relative flex flex-col sm:flex-row sm:items-center bg-gray-200 dark:bg-green-700 shadow rounded-md py-5 pl-6 pr-8 sm:pr-6 mb-3 mt-3">
        <div class="flex flex-row items-center border-b sm:border-b-0 w-full sm:w-auto pb-4 sm:pb-0">
            <div class="text-green-500" dark:text-gray-500>
                <svg class="w-6 sm:w-5 h-6 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-sm font-medium ml-3">Success!.</div>
        </div>
        <div class="text-sm tracking-wide text-gray-500 dark:text-white mt-4 sm:mt-0 sm:ml-4"> {{ session('message') }}</div>
        <div class="absolute sm:relative sm:top-auto sm:right-auto ml-auto right-4 top-4 text-gray-400 hover:text-gray-800 cursor-pointer" wire:click="closeSession()">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </div>
    </div>
@endif

@if($isOpen)
        <div class="fixed inset-0 flex items-center justify-center z-50">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative bg-gray-100 p-8 rounded shadow-lg w-full h-full overflow-auto">
                <!-- Modal content goes here -->
                <!-- <svg wire:click.prevent="$set('isOpen', false)closeModal" -->
                <svg wire:click.prevent="closeModal"
                    class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
               
                 
                <h2 class="text-2xl font-bold mb-4">{{ $farmerId ? 'Modification des informations du producteur': 'Creation de producteur' }}</h2>

                <form  wire:submit.prevent="{{ $farmerId ? 'update':'saveFarmer' }} " class="w-full  flex flex-row" enctype="multipart/form-data">
                    @csrf
                    <div class="w-2/5">
                        <div class="py-6">
                            <h1 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">1. Coordonnées</h1>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="picture">
                                    Ajouter la photo du producteur
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('picture') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="picture" wire:model="picture" id="picture" type="file" placeholder="Ajouter la photo du producteur" >
                                @if($errors->has('picture'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('picture') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agribusiness_id">
                                    Sélectionner la coopérative
                                </label>
                                <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border {{ $errors->has('agribusiness_id') ? 'border-red-500' : 'border-gray-200' }}
                            text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white
                            " id="agribusiness_id" name="agribusiness_id" wire:model="agribusiness_id">
                                        <option value="">Sélectionner la coopérative</option>
                                        @foreach($agribusinesses as $agribusiness)
                                            <option value="{{ $agribusiness->id }}" @if(old('agribusiness_id') === $agribusiness->id) selected @endif>{{ $agribusiness->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                @if($errors->has('agribusiness_id'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('agribusiness_id') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="locality">
                                    Site
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('locality') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="locality" id="locality" wire:model="locality" type="text" placeholder="Site" value="{{ old('locality') }}">
                                @if($errors->has('locality'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('locality') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fullname">
                                    Nom & prénoms
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('fullname') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="fullname" wire:model="fullname" id="fullname" type="text" placeholder="Nom & prénoms" value="{{ old('fullname') }}">
                                @if($errors->has('fullname'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('fullname') }}</p>
                                @endif
                            </div>
                           
                        </div>
                        
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sexe">
                                    Sexe
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border {{ $errors->has('sexe') ? 'border-red-500' : 'border-gray-200' }}
                                text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white" id="sexe" name="sexe" wire:model="sexe">
                                        <option value="">Sélectionner le sexe</option>
                                        <option @if(old('sexe') == "AUCUN") selected @endif value="AUCUN">Aucun</option>
                                        <option @if(old('sexe') == "H") selected @endif value="H">Homme</option>
                                        <option @if(old('sexe') == "F") selected @endif value="F">Femme</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                @if($errors->has('sexe'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('sexe') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                                    Numéro de téléphone
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('phone') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="phone" id="phone" type="text" placeholder="Téléphone" wire:model="phone" value="{{ old('phone') }}"
                                    x-mask:dynamic="
                                        $input.startsWith('34') || $input.startsWith('37')
                                            ? '99 99 99 99 99' : '99 99 99 99 99'
                                    ">
                                @if($errors->has('phone'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="born_date">
                                    Date de naissance
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('born_date') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="born_date" id="born_date" wire:model="born_date" type="date" placeholder="Date de naissance" value="{{ old('born_date') }}">
                                @if($errors->has('born_date'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('born_date') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="born_place">
                                    Lieu de naissance
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('born_place') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="born_place" id="born_place" wire:model="born_place" type="text" placeholder="Lieu de naissance" value="{{ old('born_place') }}">
                                @if($errors->has('born_place'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('born_place') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="region">
                                   Region
                                </label>
                                <div class="relative">
                                    <select 
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200
                                         text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        name="region_id" id="region_id" wire:model.change="region_id" >
                                        <option value="">Choississez la region</option>
                                        @foreach($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                               

                                @if($errors->has('region_d'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('region_d') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="departement_id">
                                    Departement
                                </label>
                                <div class="relative">
                                    <select
                                        class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('departement_id') ? ' border-red-500' : '' }} rounded
                                    py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                        name="departement_id" id="departement_id" wire:model="departement_id">
                                        <option value="">Choississez le département</option>
                                        @foreach($departements as $departement)
                                            <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                                        @endforeach
                                    
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                
                                @if($errors->has('departement_id'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('departement_id') }}</p>
                                @endif
                            </div>
                        </div>
                        {{--  
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="manager_fullname">
                                    Nom & prénoms <br> (Gestionnaire)
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('manager_fullname') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="manager_fullname" wire:model="manager_fullname" id="manager_fullname" type="text" placeholder="Nom & prénoms (Gestionnaire)" value="{{ old('manager_fullname') }}">
                                @if($errors->has('manager_fullname'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('manager_fullname') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="manager_sexe">
                                    Sexe <br> (Gestionnaire)
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200
                                text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white
                                 focus:border-gray-500" wire:model="manager_sexe" id="manager_sexe" name="manager_sexe">
                                        <option value="">Sélectionner le sexe</option>
                                        <option @if(old('manager_sexe') == "AUCUN") selected @endif value="AUCUN">Aucun</option>
                                        <option @if(old('manager_sexe') == "H") selected @endif value="H">Homme</option>
                                        <option @if(old('manager_sexe') == "F") selected @endif value="F">Femme</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                @if($errors->has('manager_sexe'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('manager_sexe') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0" >
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="manager_phone">
                                    Numéro de téléphone <br>(Gestionnaire)
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('manager_phone') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="manager_phone" id="manager_phone"  wire:model="manager_phone" type="text" placeholder="Numéro de téléphone (Gestionnaire)" value="{{ old('manager_phone') }}" 
                                    x-mask:dynamic="
                                        $input.startsWith('34') || $input.startsWith('37')
                                            ? '99 99 99 99 99' : '99 99 99 99 99'
                                    ">
                                @if($errors->has('manager_phone'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('manager_phone') }}</p>
                                @endif
                            </div>
                        </div> 
                        --}}
                        <div class="py-6">
                            <h1 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">2. Données sociales</h1>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="marital_status">
                                    Etat matrimonial
                                </label>
                                <div class="relative">
                                    <select class="block appearance-none w-full bg-gray-200 border {{ $errors->has('marital_status') ? 'border-red-500' : 'border-gray-200' }}
                                text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white" id="marital_status" name="marital_status" wire:model="marital_status">
                                        <option value="">Etat matrimonial</option>
                                        <option @if(old('marital_status') == "AUCUN") selected @endif value="AUCUN">AUCUN</option>
                                        <option @if(old('marital_status') == "CELIBATAIRE") selected @endif value="CELIBATAIRE">Célibataire</option>
                                        <option @if(old('marital_status') == "MARIE") selected @endif value="MARIE">Marié(e)</option>
                                        <option @if(old('marital_status') == "VEUF") selected @endif value="VEUF">Veuf/Veuve</option>
                                        <option @if(old('marital_status') == "DIVORCE") selected @endif value="DIVORCE">Divorcé(e)</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                    </div>
                                </div>
                                @if($errors->has('marital_status'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('marital_status') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_children">
                                    Nombre d'enfants
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('number_of_children') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="number_of_children" id="number_of_children" type="number" min="0" placeholder="Nombre d'enfants" value="{{ old('number_of_children') }}" wire:model="number_of_children">
                                @if($errors->has('number_of_children'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('number_of_children') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_dependants">
                                    Nombre de personne à charge
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('number_of_dependants') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="number_of_dependants" id="number_of_dependants" type="number" min="0" placeholder="Nombre de personne à charge" value="{{ old('number_of_dependants') }}" wire:model="number_of_dependants">
                                @if($errors->has('number_of_dependants'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('number_of_dependants') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex gray-400 mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_women">
                                    Nombre de Femme
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('number_of_women') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    name="number_of_women" id="number_of_women" type="number" min="0" placeholder="Nombre de Femme" value="{{ old('number_of_women') }}" wire:model="number_of_women">
                                @if($errors->has('number_of_women'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('number_of_women') }}</p>
                                @endif
                            </div>
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_plots">
                                    Nombre de parcelles
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('number_of_plots') ? ' border-red-500' : '' }} rounded
                                 py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" readonly min="0"
                                    name="number_of_plots" id="number_of_plots" type="number" placeholder="Nombre de parcelles" value="{{ old('number_of_plots') }}" wire:model="number_of_plots">
                                @if($errors->has('number_of_plots'))
                                    <p class="text-red-500 text-sm">{{ $errors->first('number_of_plots') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="px-8 mt-8 flex justify-end items-center">
                            <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border
                                        border-gray-400 outline-none focus:shadow-outline rounded shadow mx-1 cursor-pointer" wire:click.prevent="closeModal">
                                Annuler
                            </button>
                            <button class="focus:outline-none flex items-center btn-green-table" type="submit">Enregistrer</button>

                            
                        </div>
                    </div>

                    <div class="w-3/5 pl-4">
                        <div class="py-6">
                            <h1 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">3. Parcelles</h1>
                        </div>
                        <br>
                                    
                                    @for($i = 1; $i <= $plotFormCount; $i++)
                                        <table class="w-full">
                                            <tbody>
 
                                                    <tr>
                                                        <td>
                                                            <div class="flex flex-col gray-400 mb-6">
                                                            
                                                                <h1 class="pb-6 text-gray-700 text-md font-bold">Parcelle N° {{ $i }}</h1>
                                                                <div class="flex">
                                                                    <div class="w-full px-3 mb-6 md:mb-0">
                                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                            Superficie totale de <br> l'exploitation (ha)
                                                                        </label>
                                                                        <input
                                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                            py-3 px-4 leading-tight focus:outline-none focus:bg-white {{ $errors->has('state.plotForms.{$i}.total_area') ? ' border-red-500' : '' }}"
                                                                            type="number" step="any"
                                                            
                                                                            
                                                                            name="total_area[]" type="text" wire:model="state.plotForms.{{ $i }}.total_area" placeholder="Superficie totale de l'exploitation (ha)">
                                                                            @if($errors->has("state.plotForms.$i.total_area"))
                                                                                <p class="text-red-500 text-xs"> {{ $errors->first("state.plotForms.$i.total_area") }}  </p>
                                                                            @endif
                                                                    </div>
                                                                    <div class="w-full px-3 mb-6 md:mb-0">
                                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                                                            Joindre le fichier du <br>tracé GPS (KML)
                                                                        </label>
                                                                        <input
                                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border {{ $errors->has('state.plotForms.{$i}.gps_track') ? ' border-red-500' : '' }} rounded
                                                            py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                                                            name="gps_track" type="file" wire:model="state.plotForms.{{ $i }}.gps_track">
                                                                            @if($errors->has("state.plotForms.$i.gps_track"))
                                                                                <p class="text-red-500 text-xs"> {{ $errors->first("state.plotForms.$i.gps_track") }}  </p> 
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
                                                                                        py-3 px-4 leading-tight focus:outline-none focus:bg-white mr-4 {{ $errors->has('state.plotForms.{$i}.gps_code')  ? ' border-red-500' : ''}} "
                                                                                        name="gps_code[]" wire:model="state.plotForms.{{ $i }}.gps_code" type="text"  placeholder="Code GPS">
                                                                                        @if($errors->has("state.plotForms.$i.gps_code"))
                                                                                            <p class="text-red-500 text-xs"> {{ $errors->first("state.plotForms.$i.gps_code") }}  </p> 
                                                                                        @endif
                                                                                    
                                                                                </div>
                                                                            </td>
                                                                            <td class="px-3" valign="top">
                                                                                <div class="flex flex-row w-full">
                                                                                    <div class="w-1/2 flex flex-col">
                                                                                        <input
                                                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                                py-3 px-4 leading-tight focus:outline-none focus:bg-white mr-4 {{ $errors->has('state.plotForms.$i}.latitude')  ? ' border-red-500' : ''}}"
                                                                                            name="latitude[]" type="text" wire:model="state.plotForms.{{ $i }}.latitude"  placeholder="Latitude">
                                                                                            @if($errors->has("state.plotForms.$i.latitude"))
                                                                                                    <p class="text-red-500 text-xs"> {{ $errors->first("plotForms.$i.latitude") }}  </p> 
                                                                                            @endif

                                                                                    </div>
                                                                                    <div class="w-1/2 flex flex-col mx-3">
                                                                                        <input
                                                                                            class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded
                                                                py-3 px-4 leading-tight focus:outline-none focus:bg-white {{ $errors->has('state.plotForms.{$i}.longitude')  ? ' border-red-500' : ''}}"
                                                                                
                                                                                            name="longitude[]" wire:model="state.plotForms.{{ $i }}.longitude" type="text"   placeholder="Longitude">
                                                                                            @if($errors->has("state.plotForms.$i.longitude"))
                                                                                                    <p class="text-red-500 text-xs"> {{ $errors->first("state.plotForms.$i.longitude") }}  </p> 
                                                                                            @endif
                                                                                    </div>
                                                                                    <div>
                                                                                        <button wire:click.prevent='removePlotFormCount("{{ $i }}")'
                                                                                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border
                                                                                            border-gray-400 outline-none focus:shadow-outline rounded shadow mx-1 cursor-pointer">
                                                                                            supprimer 
                                                                                        </button>
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
                                            <tfoot>
                                                <th colspan="2" class="flex justify-start">
                                                    <button wire:click.prevent="addPlotFormCount"
                                                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border
                                                        border-gray-400 outline-none focus:shadow-outline rounded shadow mx-1 cursor-pointer">
                                                        Ajouter une parcelle
                                                    </button>
                                                </th>
                                            </tfoot>
                                        </table>
                                     @endfor
                       
                           
                      
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
                <h2 class="text-2xl font-bold mb-4">Voulez vous supprimer cet producteur ?</h2>
                <div class="flex justify-end mt-5">

                        <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" wire:click='delete("{{$farmerId}}")'>Valider</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalDelete">Annuler</button>
                </div>
            </div>
        </div>
@endif