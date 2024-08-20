<div>
            @include('livewire.invitation.invitationmodal')
            <label for="" class="text-4xl font-bold">Liste des invitations</label>
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
                    
                        <!-- <button class="btn-green-table flex items-center w-full sm:w-auto mt-2 sm:mt-0 sm:ml-2 " data-te-toggle="modal" data-te-target="#permissionModal" data-te-ripple-init data-te-ripple-color="light" wire:click="create"> 

                            <img src="{{ asset('assets/img/icons/add.svg') }}" alt="" class="w-5 pr-2">
                            <label for="" class="cursor-pointer">Créer une Invitation a une activité</label>
                        </button> -->
                        <a  href="{{ route('projets.invitation.create') }}" class="btn-green-table flex items-center w-full sm:w-auto mt-2 sm:mt-0 sm:ml-2 " wire:navigate> 
                            <img src="{{ asset('assets/img/icons/add.svg') }}" alt="" class="w-5 pr-2">
                            <label for="" class="cursor-pointer">Créer une Invitation a une activité</label>
                        </a>
                    </div>
                </div>
            </div>
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
            <div class="flex flex-col">
                <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-left text-sm font-light my-10">
                                <thead class="bg-green-custom bt-table">
                                    <tr class="">
                                    <th scope="col" class="rounded-tl-lg px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Nom de l'activité</th>
                                    <th scope="col" class="px-6 py-4">Type d'envoie</th>
                                    <th scope="col" class="px-6 py-4">coopérative</th>
                                    <th scope="col" class="px-6 py-4">Region</th>
                                    <th scope="col" class="rounded-tr-lg px-6 py-4">Action</th>
                                
                                    </tr>
                                </thead>
                                <tbody >
                                <?php $i=0;?>
                               
                                    @forelse($invitations as $invitation)
                                       
                                    <?php $i++ ?>
                                    <tr class="border-b border-t-2 border-green-900 {{ $i % 2 !== 0 ? '' : 'bg-green-100' }} dark:border-green-900">
                                        <td class="whitespace-nowrap px-6 py-4 font-medium" wire:key="{{ $invitation->id }}">{{ $i }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $invitation->name }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $invitation->type_sending }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $invitation->agribusiness?->name ?? '------------' }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">{{ $invitation->region?->name ?? '------------' }}</td>
                                        <td class="whitespace-nowrap px-6 py-4">
                                            
                                            <button class="btn-success" wire:click='show("{{$invitation->id}}")' >
                                                <svg fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                    width="15px" height="15px" viewBox="0 0 442.04 442.04"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M221.02,341.304c-49.708,0-103.206-19.44-154.71-56.22C27.808,257.59,4.044,230.351,3.051,229.203
                                                                c-4.068-4.697-4.068-11.669,0-16.367c0.993-1.146,24.756-28.387,63.259-55.881c51.505-36.777,105.003-56.219,154.71-56.219
                                                                c49.708,0,103.207,19.441,154.71,56.219c38.502,27.494,62.266,54.734,63.259,55.881c4.068,4.697,4.068,11.669,0,16.367
                                                                c-0.993,1.146-24.756,28.387-63.259,55.881C324.227,321.863,270.729,341.304,221.02,341.304z M29.638,221.021
                                                                c9.61,9.799,27.747,27.03,51.694,44.071c32.83,23.361,83.714,51.212,139.688,51.212s106.859-27.851,139.688-51.212
                                                                c23.944-17.038,42.082-34.271,51.694-44.071c-9.609-9.799-27.747-27.03-51.694-44.071
                                                                c-32.829-23.362-83.714-51.212-139.688-51.212s-106.858,27.85-139.688,51.212C57.388,193.988,39.25,211.219,29.638,221.021z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M221.02,298.521c-42.734,0-77.5-34.767-77.5-77.5c0-42.733,34.766-77.5,77.5-77.5c18.794,0,36.924,6.814,51.048,19.188
                                                                c5.193,4.549,5.715,12.446,1.166,17.639c-4.549,5.193-12.447,5.714-17.639,1.166c-9.564-8.379-21.844-12.993-34.576-12.993
                                                                c-28.949,0-52.5,23.552-52.5,52.5s23.551,52.5,52.5,52.5c28.95,0,52.5-23.552,52.5-52.5c0-6.903,5.597-12.5,12.5-12.5
                                                                s12.5,5.597,12.5,12.5C298.521,263.754,263.754,298.521,221.02,298.521z"/>
                                                        </g>
                                                        <g>
                                                            <path d="M221.02,246.021c-13.785,0-25-11.215-25-25s11.215-25,25-25c13.786,0,25,11.215,25,25S234.806,246.021,221.02,246.021z"/>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                            {{-- 
                                            <button class="btn-danger flex flex-row" wire:click='deleteForm("{{$invitation->id}}")' >
                                                <svg width="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 2.75C11.0215 2.75 10.1871 3.37503 9.87787 4.24993C9.73983 4.64047 9.31134 4.84517 8.9208 4.70713C8.53026 4.56909 8.32557 4.1406 8.46361 3.75007C8.97804 2.29459 10.3661 1.25 12 1.25C13.634 1.25 15.022 2.29459 15.5365 3.75007C15.6745 4.1406 15.4698 4.56909 15.0793 4.70713C14.6887 4.84517 14.2602 4.64047 14.1222 4.24993C13.813 3.37503 12.9785 2.75 12 2.75Z" fill="#fff"/>
                                                    <path d="M2.75 6C2.75 5.58579 3.08579 5.25 3.5 5.25H20.5001C20.9143 5.25 21.2501 5.58579 21.2501 6C21.2501 6.41421 20.9143 6.75 20.5001 6.75H3.5C3.08579 6.75 2.75 6.41421 2.75 6Z" fill="#ffff"/>
                                                    <path d="M5.91508 8.45011C5.88753 8.03681 5.53015 7.72411 5.11686 7.75166C4.70356 7.77921 4.39085 8.13659 4.41841 8.54989L4.88186 15.5016C4.96735 16.7844 5.03641 17.8205 5.19838 18.6336C5.36678 19.4789 5.6532 20.185 6.2448 20.7384C6.83639 21.2919 7.55994 21.5307 8.41459 21.6425C9.23663 21.75 10.2751 21.75 11.5607 21.75H12.4395C13.7251 21.75 14.7635 21.75 15.5856 21.6425C16.4402 21.5307 17.1638 21.2919 17.7554 20.7384C18.347 20.185 18.6334 19.4789 18.8018 18.6336C18.9637 17.8205 19.0328 16.7844 19.1183 15.5016L19.5818 8.54989C19.6093 8.13659 19.2966 7.77921 18.8833 7.75166C18.47 7.72411 18.1126 8.03681 18.0851 8.45011L17.6251 15.3492C17.5353 16.6971 17.4712 17.6349 17.3307 18.3405C17.1943 19.025 17.004 19.3873 16.7306 19.6431C16.4572 19.8988 16.083 20.0647 15.391 20.1552C14.6776 20.2485 13.7376 20.25 12.3868 20.25H11.6134C10.2626 20.25 9.32255 20.2485 8.60915 20.1552C7.91715 20.0647 7.54299 19.8988 7.26957 19.6431C6.99616 19.3873 6.80583 19.025 6.66948 18.3405C6.52891 17.6349 6.46488 16.6971 6.37503 15.3492L5.91508 8.45011Z" fill="#fff"/>
                                                    <path d="M9.42546 10.2537C9.83762 10.2125 10.2051 10.5132 10.2464 10.9254L10.7464 15.9254C10.7876 16.3375 10.4869 16.7051 10.0747 16.7463C9.66256 16.7875 9.29502 16.4868 9.25381 16.0746L8.75381 11.0746C8.71259 10.6625 9.0133 10.2949 9.42546 10.2537Z" fill="#fff"/>
                                                    <path d="M15.2464 11.0746C15.2876 10.6625 14.9869 10.2949 14.5747 10.2537C14.1626 10.2125 13.795 10.5132 13.7538 10.9254L13.2538 15.9254C13.2126 16.3375 13.5133 16.7051 13.9255 16.7463C14.3376 16.7875 14.7051 16.4868 14.7464 16.0746L15.2464 11.0746Z" fill="#fff"/>
                                                </svg>
                                               
                                            </button>
                                            --}}
                                        </td>
                                        
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
                            <div class="livewire-pagination bg-green-100">{{ $invitations->links('custom-pagination-links') }}</div>
                            
                        </div>
                    </div>
                </div>
            </div>
</div>
