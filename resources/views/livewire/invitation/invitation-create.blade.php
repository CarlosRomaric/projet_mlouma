<div>
        <label for="" class="text-4xl font-bold">créer une invitation</label>

        <div class="py-5">
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
