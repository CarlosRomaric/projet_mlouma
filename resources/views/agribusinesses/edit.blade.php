<?php
/**
 * Created by PhpStorm.
 * User: salioudiabate
 * Date: 25/03/2020
 * Time: 14:51
 */
?>
@extends('layouts.refonte.app')
@section('title') - Modification d'une coopérative @endsection
@section('content')
    <div class="w-full overflow-hidden px-4 py-8 md:p-12">
        <h1 class="mb-8 font-bold text-3xl">
            <a href="{{ route('agribusinesses') }}" class="text-green-600 hover:text-teal-600">Coopératives</a>
            <span class="text-green-600 font-medium"> /</span> Modification
        </h1>
        <alert-component
            message="{{ session()->get('message') }}" type="{{ session()->get('status') }}"
            visible="{{ session()->has('message') && session()->get('status') }}"></alert-component>
        <div class="bg-white rounded shadow overflow-hidden max-w-3xl flex justify-center">
            <form method="post" action="{{ route('agribusinesses.update', ['agribusiness' => $agribusiness->id]) }}" class="w-full p-10">
                @csrf
                <div class="flex gray-400 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                            Nom de la coopérative
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('name') ? ' border-red-500' : '' }} rounded
                             py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            name="name" id="name" type="text" value="{{ old('name') ?: $agribusiness->name }}" placeholder="Nom de la coopérative">
                        @if($errors->has('name'))
                            <p class="text-red-500 text-sm">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="acronym">
                            Sigle de la coopérative
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('acronym') ? ' border-red-500' : '' }} border-gray-200 rounded
                            py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="acronym" id="acronym" type="text" value="{{ old('acronym') ?: $agribusiness->acronym }}" placeholder="Sigle de la coopérative">
                        @if($errors->has('acronym'))
                            <p class="text-red-500 text-sm">{{ $errors->first('acronym') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-wrap gray-400 mb-6 items-center">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="address">
                            Adresse (Localisation)
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('address') ? ' border-red-500' : '' }} border-gray-200 rounded
                            py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="address" id="address" type="text" value="{{ old('address') ?: $agribusiness->address }}" placeholder="Adresse (Localisation)">
                        @if($errors->has('address'))
                            <p class="text-red-500 text-sm">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-wrap gray-400 mb-2 items-center">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="person_responsible_name">
                            Nom & prénoms du point focal
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('person_responsible_name') ? ' border-red-500' : '' }} border-gray-200 rounded
                            py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="person_responsible_name" id="person_responsible_name" type="text" value="{{ old('person_responsible_name') ?: $agribusiness->person_responsible_name }}" placeholder="Nom & prénoms du point focal">
                        @if($errors->has('person_responsible_name'))
                            <p class="text-red-500 text-sm">{{ $errors->first('person_responsible_name') }}</p>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="person_responsible_phone">
                            Contact du point focal
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border{{ $errors->has('person_responsible_phone') ? ' border-red-500' : '' }} border-gray-200 rounded
                             py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            name="person_responsible_phone" id="person_responsible_phone" type="text" value="{{ old('person_responsible_phone') ?: $agribusiness->person_responsible_phone }}" placeholder="Contact du point focal">
                        @if($errors->has('person_responsible_phone'))
                            <p class="text-red-500 text-sm">{{ $errors->first('person_responsible_phone') }}</p>
                        @endif
                    </div>
                </div>
                <div class="px-8 mt-8 flex justify-between items-center">
                    <delete-component destroy_url="{{ route('agribusinesses.delete', ['agribusiness' => $agribusiness->id]) }}" list_url="{{ route('agribusinesses') }}"></delete-component>
                    <button class="focus:outline-none flex items-center btn-green" type="submit">Valider</button>
                </div>
            </form>
        </div>
    </div>
@endsection
