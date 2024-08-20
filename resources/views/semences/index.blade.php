@extends('layouts.app')
@section('title') - Liste des sémences de la spéculation {{ $speculation->name }} @endsection
@section('content')

<div class="container py-5 px-20 mx-auto md:px-20  md:container md:mx-auto content">

        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="{{ route('speculations.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 text-green-900 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg>
                        Speculation 
                    </a>
                </li>
                <li class="inline-flex items-center">
                    <a href="{{ route('semences.index', ['speculation_id'=>'$speculation->id']) }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600 dark:text-gray-400 dark:hover:text-white">
                        <!-- <svg class="w-3 h-3 text-green-900 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                        </svg> -->
                        

                       <b class="font-bold">></b>
                        Semences 
                    </a>
                </li>
                
                
                
            </ol>
        </nav>

        <div class="pt-10">
           @livewire('semence.semence-component', ['speculation'=>$speculation])
        </div>



</div>
@endsection

@section('script')
<script>
   
</script>
@endsection