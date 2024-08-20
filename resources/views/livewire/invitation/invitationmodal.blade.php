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
            <div class="relative bg-gray-100 p-8 rounded shadow-lg {{ ( isset($farmers) && $farmers->count() > 0) ? 'w-full h-full overflow-auto': 'w-1/2'}}">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpen', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4">{{ $invitationId ? 'Modification de invitation' : 'Envoyer une  invitation' }}</h2>
                <form wire:submit.prevent="sendInvitation">
                        
                    <div class="flex gray-400 mb-6">
                        
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Nom de l'activité
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('name') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="name" id="name"  wire:model="name" type="text" placeholder="Nom de la invitation" value="{{ old('name') }}">
                        
                            @error('name')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="location">
                               Lieu
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('location') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="location" id="location"  wire:model="location" type="text" placeholder="Lieu" value="{{ old('location') }}">
                        
                            @error('location')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                        
                     
                    </div>

                    <div class="flex gray-400 mb-6">
                        
                       
                        
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Date de l'activité
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('date_activity') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="date_activity" id="date_activity"  wire:model="date_activity" type="datetime-local" placeholder="Date de l'activité" value="{{ old('date_activity') }}">
                        
                            @error('date_activity')
                                <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                            
                        </div>
                     
                    </div>

                  

                    <div class="flex gray-400 mb-6">
                        
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">

                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Region <input type="radio" value="region" name="type_sending" wire:model.change="checkTypeSeeding" class="">
                                
                            </label>
                            @if($this->visibleRegion)
                            <select
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('name') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="region_id" id="region_id"  wire:model.change="region_id" type="text" value="{{ old('region_id') }}">
                                <option value="">Choississez la region</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option> 
                                @endforeach
                            </select>
                        
                                @error('region_id')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            @endif
                            
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               Cooperative <input type="radio" value="coop" name="type_sending" wire:model.change="checkTypeSeeding" class="">
                            </label>
                            @if($visibleCoop)
                            <select
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('agribusiness_id') ? ' border-red-500' : '' }} rounded
                                py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                name="agribusiness_id"  wire:model.change="agribusiness_id" value="{{ old('agribusiness_ id') }}">
                                <option value="">Choississez la coopérative</option>
                                @foreach ($agribusinesses as $agribusiness)
                                    <option value="{{ $agribusiness->id }}">{{ $agribusiness->name }}</option> 
                                @endforeach
                            </select>

                                @error('agribusiness_id')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            @endif
                        </div>
                     
                    </div>
                    @if(!empty($checkTypeSeeding))
                    <div class="flex gray-400 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                       
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                Producteurs 
                            </label>
                           
                       
                            @if($visibleFarmers == true)
                                @if($farmers->count() > 0)
                                <div class="flex gray-400 mb-6">
                            
                                    <label class="custom-checkbox-label flex my-4">
                                        <div class="bg-gray-300 shadow border-green-600 w-6 h-6 p-1 flex justify-center items-center mr-2">
                                            <input type="checkbox" name="farmerSending" wire:model="selectAll" value="selectAll" wire:click="toggleSelectAll" class="hidden" >
                                            <svg class="hidden w-4 h-4 text-green-700 pointer-events-none" viewBox="0 0 172 172">
                                                <g fill="none" stroke-width="none" stroke-miterlimit="10" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode:normal">
                                                    <path d="M0 172V0h172v172z"/>
                                                    <path d="M145.433 37.933L64.5 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" fill="currentColor" stroke-width="2"/>
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="select-none text-md text-black">Selectionnez tous les producteurs</span>
                                    </label>
                                    
                                </div>
                                @else
                                 Aucun Producteur
                                @endif

                                <div class="mb-2 sm:mb-0 sm:flex-grow w-full sm:w-60 sm:order-1">
                                    <input type="search" class="bg-green-100 w-30 rounded-lg shadow px-4 py-2 mt-2" wire:model.live="searchFarmer" placeholder="Saisir pour rechercher">
                                </div>
                                <table class="min-w-full text-left text-sm font-light my-10">
                                    <thead class="bg-green-custom bt-table">
                                        <tr class="">
                                        <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                        <th scope="col" class="px-6 py-4">Nom & prénoms</th>
                                        <th scope="col" class="px-6 py-4">Phone</th>
                                        <th scope="col" class="px-6 py-4">Dernière Invitation</th>
                                    
                                    
                                        </tr>
                                    </thead>
                                    <tbody >
                                    <?php $i=0;?>
                                        @forelse ($producteurs as  $farmer)
                                        <?php $i++ ?>
                                        <tr class="border-b border-t-2 border-green-900 {{ $i % 2 !== 0 ? '' : 'bg-green-100' }} dark:border-green-900">
                                            <td class="whitespace-nowrap px-6 py-4 font-medium" wire:key="{{ $farmer->id }}">{{ $i }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">
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
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $farmer->phone }}</td>
                                            <td class="whitespace-nowrap px-6 py-4"></td>
                                        
                                        
                                        </tr>
                                        @empty
                                        <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                                    <td colspan="6" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                                        Aucune donnée enregistrée
                                                    </td>
                                        </tr>
                                        @endforelse
                                    
                                    </tbody>
                                </table>
                                
                                    
                                   
                               
                                {{-- 
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
                                --}}
                                
                                

                            @endif

                            @error('farmer_id')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                            @enderror
                               

                        </div>
                    </div>
                    @endif
                   
                    
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
            <div class="relative bg-gray-100 p-8 rounded shadow-lg {{ ($invitation_farmer->count() > 5) ? 'w-full h-full overflow-auto': 'w-1/2'}}   ">
                <!-- Modal content goes here -->
                <svg wire:click.prevent="$set('isOpenShow', false)"
                class="ml-auto w-6 h-6 text-gray-900 dark:text-gray-900 cursor-pointer fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                </svg>
                <h2 class="text-2xl font-bold mb-4"><b class="text-green-700">Activité:</b> {{ $name}}</h2>
                    <div class="flex gray-400 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                <b class="text-green-700">Lieu:</b> {{ $location }}
                            </label>
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                                <b class="text-green-700">Date:</b> {{ $date_activity }}
                            </label>
                        </div>
                        
                    </div>
                    <div class="flex gray-400 mb-6">
                       
                        
                      
                    </div>
                    
                    <div class="flex gray-400 mb-6">
                        <div class="w-full px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               <b class="text-green-700 my-6">Corps du message:</b> <br>
                            </label>
                            <div class="my-6">
                                {{ $description }}
                            </div>
                        </div>
                       
                    </div>
                    <div class="flex gray-400 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                               <b class="text-green-700 mb-6">Liste des producteurs Invités</b> <br> 
                                
                            </label>

                            <table class="min-w-full text-left text-sm font-light my-10">
                                <thead class="bg-green-custom bt-table">
                                    <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nom & prénoms</th>
                                   
                                    <th scope="col" class="px-6 py-4">Dernière Invitation</th>
                                   
                                
                                    </tr>
                                </thead>
                                <tbody >
                                <?php $i=0;?>
                               
                                    @forelse($invitation_farmer as $farmer)
                                       
                                    <?php $i++ ?>
                                    <tr class="border-b border-t-2 border-green-900 {{ $i % 2 !== 0 ? '' : 'bg-green-100' }} dark:border-green-900">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium" wire:key="{{ $farmer->id }}">{{ $i }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
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
                                        </td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $farmer->created_at }}</td>
                                       
                                       
                                    </tr>
                                    @empty
                                    <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                                <td colspan="6" class="whitespace-nowrap text-center px-6 py-4 text-2xl font-bold">
                                                    Aucune donnée enregistrée
                                                </td>
                                    </tr>
                                    @endforelse
                                   
                                </tbody>
                            </table>
                            {{-- 
                             @foreach ($invitation_farmer as  $farmer)
                                

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
                             --}}
                        </div>
                            
                    </div>
                <div class="flex justify-end mt-5">
                    

                        {{--  <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2">Valider</button> --}}
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
                <h2 class="text-2xl font-bold mb-4">Voulez vous supprimer cette invitation ?</h2>
                <div class="flex justify-end mt-5">

                        <button type="button" class="btn-green-table hover:bg-green-800 text-white font-bold py-2 px-4 rounded mr-2" wire:click='delete("{{$invitationId}}")'>Valider</button>
                        <button type="button" class="bg-gray-200 hover:bg-gray-300 text-green-900 font-bold py-2 px-4 rounded" wire:click="closeModalDelete">Annuler</button>
                </div>
            </div>
        </div>
@endif


