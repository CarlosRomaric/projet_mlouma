<div>
    
    @push('stylesheets')
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster/dist/MarkerCluster.Default.css">
        <style>
            #map { height: 180px; }
        </style>
    @endpush
            @include('livewire.plot.plotmodal')
       
        <div class="w-full flex justify-center">

            <div class="w-1/3">
                <div class="py-6">
                    <h1 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">
                        1. Coordonnées 
                        
                    </h1>  
                                            
                </div>
                <a href="{{ route('farmers.edit', $farmerId) }}" class="btn-success mb-5">
                            Modifier les informations
                </a>
                @if($farmer->picture)
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="picture">
                            Photo du producteur 
                        </label>
                        <?php
                             $urlPicture = $farmer->picture;
                             $picture = str_replace('public/', '', $urlPicture);
                        ?>
                        <img src="{{ asset('/storage/'.$picture) }}" width="100" height="200" />
                    </div>
                </div>
                @endif
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="agribusiness">
                            Coopérative du producteur
                        </label>
                        {{ $farmer->agribusiness ? $farmer->agribusiness->name : '' }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="site">
                            Site
                        </label>
                        {{ $farmer->locality }}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="identifier">
                            Identifiant
                        </label>
                        {{ $farmer->identifier }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fullname">
                            Nom & prénoms
                        </label>
                        {{ $farmer->fullname }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fullname">
                            Sexe du producteur
                        </label>
                        @if($farmer->sexe == 'H' || $farmer->sexe == 'M')
                            {{ 'Homme' }}
                        @elseif($farmer->sexe == 'F')
                            {{ 'Femme' }}
                        @else
                            {{ $farmer->sexe }}
                        @endif
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone">
                            Numéro de téléphone
                        </label>
                        {{ $farmer->phone }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="born_date">
                            Date de naissance
                        </label>
                        {{ $farmer->born_date ? $farmer->born_date : '' }}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="born_place">
                            Lieu de naissance
                        </label>
                        {{ $farmer->born_place }}
                    </div>
                </div>
                
                
                
                <div class="py-6">
                    <h1 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">2. Données sociales</h1>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="marital_status">
                            Etat matrimonial
                        </label>
                        {{ $farmer->marital_status }}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_children">
                            Nombre d'enfants
                        </label>
                        {{ $farmer->number_of_children }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_women">
                            Nombre de Conjoint
                        </label>
                        {{ $farmer->number_of_women }}
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_dependants">
                            Nombre de personne à charge
                        </label>
                        {{ $farmer->number_of_dependants }}
                    </div>
                </div>
                <div class="flex gray-400 mb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number_of_plots">
                            Nombre de parcelle(s)
                        </label>
                        {{ $farmer->number_of_plots }}

                        
                    </div>
                    
                </div>
            </div>

            <div class="w-2/3 pl-4">
                    <div class="flex flex-col h-full">
                        <div class="py-6">
                            <h4 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">3. Parcelles</h4>
                        </div>

                        <label for="" class="text-4xl font-bold">Liste des parcelles </label>
                        <div class="flex flex-col sm:flex-row mt-2 w-full justify-between">
                            <!-- Formulaire de recherche et bouton Vider -->
                            <div class="mb-2 sm:mb-0 sm:flex-grow w-full sm:w-60 sm:order-1">
                                <input type="search" class="bg-green-100 w-30 rounded-lg shadow px-4 py-2 mt-2" wire:model.live="search" placeholder="Saisir pour rechercher">
                                <button class="btn-green-table  mt-2" wire:click="resetSearch">Vider</button>
                            </div>
                            <!-- Boutons d'action -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center mt-2 sm:mt-0 sm:order-2">
                            
                                <!-- Boutons d'import, export et créer un producteur -->
                                <div class="flex flex-col sm:flex-row mt-2 sm:mt-0 sm:ml-2 w-full sm:w-auto">
                                
                                    <button class="btn-green-table flex items-center w-full sm:w-auto mt-2 sm:mt-0 sm:ml-2 " data-te-toggle="modal" data-te-target="#plotModal" data-te-ripple-init data-te-ripple-color="light" wire:click="create"> 

                                        <img src="{{ asset('assets/img/icons/add.svg') }}" alt="" class="w-5 pr-2">
                                        <label for="" class="cursor-pointer">ajouter une parcelle</label>
                                    </button>
                                </div>
                            </div>
                        </div>

                                        
                        <div class="flex flex-col f-full">
                            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full text-left text-sm font-light my-10">
                                            <thead class="bg-green-custom bt-table">
                                                <tr class="border-b bg-green-custom text-white font-medium dark:border-green-custom">
                                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                                    <th scope="col" class="px-6 py-4">SUPERFICIE TOTALE DE L'EXPLOITATION (HA)</th>

                                                    <th scope="col" class="px-6 py-4">CODE GPS</th>
                                                    <th scope="col" class="px-6 py-4">LATITUDE</th>
                                                    <th scope="col" class="px-6 py-4">LONGITIDUE</th>
                                                    <th scope="col" class="rounded-tr-lg px-6 py-4 text-center">ACTIONS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=0;?>
                                                @forelse ($plots as $plot)
                                                <?php $i++;?>
                                                    <tr class="border-b border-t-4 border-green-900 dark:border-green-900">
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $i }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $plot->total_area }}</td>
                                                        
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $plot->gps_code }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $plot->latitude }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">{{ $plot->longitude }}</td>
                                                        <td class="whitespace-nowrap px-6 py-4">
                                                            <div class="flex items-center space-x-2">
                                                                <button class="btn-warning" wire:click="fieldnotebook('{{ $plot->id }}')">
                                                                    Carnet de champ
                                                                </button>
                                                                
                                                                <button class="btn-danger flex flex-row" id="refreshButton" wire:click="loadKML('{{ $plot->id }}')" >
                                                                    <svg width="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none">
                                                                        <path fill="#fff" fill-rule="evenodd" d="M11.291 21.706 12 21l-.709.706zM12 21l.708.706a1 1 0 0 1-1.417 0l-.006-.007-.017-.017-.062-.063a47.708 47.708 0 0 1-1.04-1.106 49.562 49.562 0 0 1-2.456-2.908c-.892-1.15-1.804-2.45-2.497-3.734C4.535 12.612 4 11.248 4 10c0-4.539 3.592-8 8-8 4.408 0 8 3.461 8 8 0 1.248-.535 2.612-1.213 3.87-.693 1.286-1.604 2.585-2.497 3.735a49.583 49.583 0 0 1-3.496 4.014l-.062.063-.017.017-.006.006L12 21zm0-8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" clip-rule="evenodd"/>
                                                                    </svg>    
                                                                </button>

                                                                <button class="btn-success" wire:click='edit("{{ $plot->id }}")'>
                                                                    <svg width="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1213 2.70705C19.9497 1.53548 18.0503 1.53547 16.8787 2.70705L15.1989 4.38685L7.29289 12.2928C7.16473 12.421 7.07382 12.5816 7.02986 12.7574L6.02986 16.7574C5.94466 17.0982 6.04451 17.4587 6.29289 17.707C6.54127 17.9554 6.90176 18.0553 7.24254 17.9701L11.2425 16.9701C11.4184 16.9261 11.5789 16.8352 11.7071 16.707L19.5556 8.85857L21.2929 7.12126C22.4645 5.94969 22.4645 4.05019 21.2929 2.87862L21.1213 2.70705ZM18.2929 4.12126C18.6834 3.73074 19.3166 3.73074 19.7071 4.12126L19.8787 4.29283C20.2692 4.68336 20.2692 5.31653 19.8787 5.70705L18.8622 6.72357L17.3068 5.10738L18.2929 4.12126ZM15.8923 6.52185L17.4477 8.13804L10.4888 15.097L8.37437 15.6256L8.90296 13.5112L15.8923 6.52185ZM4 7.99994C4 7.44766 4.44772 6.99994 5 6.99994H10C10.5523 6.99994 11 6.55223 11 5.99994C11 5.44766 10.5523 4.99994 10 4.99994H5C3.34315 4.99994 2 6.34309 2 7.99994V18.9999C2 20.6568 3.34315 21.9999 5 21.9999H16C17.6569 21.9999 19 20.6568 19 18.9999V13.9999C19 13.4477 18.5523 12.9999 18 12.9999C17.4477 12.9999 17 13.4477 17 13.9999V18.9999C17 19.5522 16.5523 19.9999 16 19.9999H5C4.44772 19.9999 4 19.5522 4 18.9999V7.99994Z" fill="#fff"/>
                                                                    </svg>
                                                                </button>

                                                                <button class="btn-danger flex flex-row" wire:click='deleteForm("{{ $plot->id }}")' >
                                                                    <svg width="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M12 2.75C11.0215 2.75 10.1871 3.37503 9.87787 4.24993C9.73983 4.64047 9.31134 4.84517 8.9208 4.70713C8.53026 4.56909 8.32557 4.1406 8.46361 3.75007C8.97804 2.29459 10.3661 1.25 12 1.25C13.634 1.25 15.022 2.29459 15.5365 3.75007C15.6745 4.1406 15.4698 4.56909 15.0793 4.70713C14.6887 4.84517 14.2602 4.64047 14.1222 4.24993C13.813 3.37503 12.9785 2.75 12 2.75Z" fill="#fff"/>
                                                                        <path d="M2.75 6C2.75 5.58579 3.08579 5.25 3.5 5.25H20.5001C20.9143 5.25 21.2501 5.58579 21.2501 6C21.2501 6.41421 20.9143 6.75 20.5001 6.75H3.5C3.08579 6.75 2.75 6.41421 2.75 6Z" fill="#ffff"/>
                                                                        <path d="M5.91508 8.45011C5.88753 8.03681 5.53015 7.72411 5.11686 7.75166C4.70356 7.77921 4.39085 8.13659 4.41841 8.54989L4.88186 15.5016C4.96735 16.7844 5.03641 17.8205 5.19838 18.6336C5.36678 19.4789 5.6532 20.185 6.2448 20.7384C6.83639 21.2919 7.55994 21.5307 8.41459 21.6425C9.23663 21.75 10.2751 21.75 11.5607 21.75H12.4395C13.7251 21.75 14.7635 21.75 15.5856 21.6425C16.4402 21.5307 17.1638 21.2919 17.7554 20.7384C18.347 20.185 18.6334 19.4789 18.8018 18.6336C18.9637 17.8205 19.0328 16.7844 19.1183 15.5016L19.5818 8.54989C19.6093 8.13659 19.2966 7.77921 18.8833 7.75166C18.47 7.72411 18.1126 8.03681 18.0851 8.45011L17.6251 15.3492C17.5353 16.6971 17.4712 17.6349 17.3307 18.3405C17.1943 19.025 17.004 19.3873 16.7306 19.6431C16.4572 19.8988 16.083 20.0647 15.391 20.1552C14.6776 20.2485 13.7376 20.25 12.3868 20.25H11.6134C10.2626 20.25 9.32255 20.2485 8.60915 20.1552C7.91715 20.0647 7.54299 19.8988 7.26957 19.6431C6.99616 19.3873 6.80583 19.025 6.66948 18.3405C6.52891 17.6349 6.46488 16.6971 6.37503 15.3492L5.91508 8.45011Z" fill="#fff"/>
                                                                        <path d="M9.42546 10.2537C9.83762 10.2125 10.2051 10.5132 10.2464 10.9254L10.7464 15.9254C10.7876 16.3375 10.4869 16.7051 10.0747 16.7463C9.66256 16.7875 9.29502 16.4868 9.25381 16.0746L8.75381 11.0746C8.71259 10.6625 9.0133 10.2949 9.42546 10.2537Z" fill="#fff"/>
                                                                        <path d="M15.2464 11.0746C15.2876 10.6625 14.9869 10.2949 14.5747 10.2537C14.1626 10.2125 13.795 10.5132 13.7538 10.9254L13.2538 15.9254C13.2126 16.3375 13.5133 16.7051 13.9255 16.7463C14.3376 16.7875 14.7051 16.4868 14.7464 16.0746L15.2464 11.0746Z" fill="#fff"/>
                                                                    </svg>
                                                                
                                                                </button>
                                                               
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td class="whitespace-nowrap px-6 py-4" colspan="6"> Aucune parcelle enregistrée</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>


                         <!-- Section pour la carte Leaflet -->
                        
                        <div class="py-6">
                            <h4 class="font-semibold uppercase text-gray-700 text-2xl border-b-2 border-gray-700">4. Localisation des  parcelles</h4>
                        </div>
                        
                        <div 
                            wire:ignore
                            class="h-100" id="map" style="height: 550px; z-index:1;">
                        </div>
                           

                            
                    </div>
                       
            </div>
                    
        </div>
            

        

</div>


@push('scripts')

<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>

<script src="https://unpkg.com/leaflet-omnivore@0.3.4/leaflet-omnivore.min.js"></script>


<script>
    var map = null; // Déclarez la variable map à l'extérieur de la fonction pour qu'elle soit accessible globalement

    document.addEventListener('livewire:navigated', () => {
        if (map === null) {
            // Si la carte n'existe pas encore, créez-la
            map = L.map('map', {
                preferCanvas: true // recommended when loading large layers.
            });

            map.setView([7.539989, -5.547080], {{ config('leaflet.zoom_level') }});

            var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                maxZoom: 17,
                attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
            });

            OpenTopoMap.addTo(map);
        }

        var markerGroup = L.layerGroup().addTo(map); // Créez un groupe de calques pour les marqueurs

        @foreach($plots as $plot)   
            var marker = L.marker([{{ $plot->latitude }}, {{ $plot->longitude }}]);
            marker.bindPopup("Les coordonnées de cette parcelle sont latitude: {{ $plot->latitude }} longitude: {{ $plot->longitude }}");
            markerGroup.addLayer(marker); // Ajoutez le marqueur au groupe de calques
        @endforeach

        var currentKmlLayer = null;
        var markersVisible = true;

        document.getElementById('refreshButton').addEventListener('click', function() {
        // Rechargez la div
             document.getElementById('map').innerHTML = document.getElementById('map').innerHTML;
        });

        Livewire.on('loadKML', kmlPath => {
            console.log('Ok');
            if (currentKmlLayer) {
                map.removeLayer(currentKmlLayer); // Supprimez la couche KML existante si elle existe
                currentKmlLayer = null;
                markerGroup.addTo(map); // Afficher à nouveau les marqueurs
                markersVisible = true;
            } else {
                try {
                    console.log(kmlPath[0]);
                    currentKmlLayer = omnivore.kml(kmlPath[0])
                        .on('ready', function() {
                            if (this.getBounds().isValid()) {
                                console.log('kml valid');
                                map.fitBounds(this.getBounds());
                            } else {
                                console.error("KML data is not valid.");
                            }
                        })
                        .on('error', function(err) {
                            console.error("Error loading KML:", err);
                            // You can display an error message to the user here
                        })
                        .addTo(map);

                        
                    map.removeLayer(markerGroup); // Masquer les marqueurs lorsque le KML est chargé
                    markersVisible = false;
                } catch (error) {
                    console.error("Error parsing KML data:", error);
                }
                
            }
        });
    });
</script>


@endpush



