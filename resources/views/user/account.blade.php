@extends('layouts.app')

@section('title', auth()->user()->name . ' | Dashbaord')

@section('content')
    <div class="bg-white py-16 px-5 sm:px-10 lg:px-40 mx-auto container flex gap-6 items-start justify-between">

        @include('user.sidebar')

        {{-- Account details --}}
        <x-card title="Account Details">
            <div class="grid grid-cols-1 gap-6">
                <div class=" col-span-2">
                    <x-input label="Name" value="{{ auth()->user()->name }}" wire:model.defer="name" />
                </div>

                <div class="col-span-2">
                    <x-input label="Email" value="{{ auth()->user()->email }}" wire:model.defer="email" />
                </div>

                <div class="col-span-2">
                    <x-textarea label="Bio" placeholder="Write your bio..." wire:model.defer="bio" />
                </div>
            </div>

            <x-slot name="footer">
                <x-button wire:click="store" label="Save" wire:loading.spinner="save" primary />
            </x-slot>
        </x-card>


    </div>
@endsection
