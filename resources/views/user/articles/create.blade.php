@extends('layouts.app')

@section('title', 'My App')

@section('content')
    <div class="bg-white py-16 px-5 mx-auto max-w-4xl">
        @livewire('user.create-article')
    </div>
@endsection
