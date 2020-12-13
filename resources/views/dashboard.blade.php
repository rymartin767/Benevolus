<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-12">
        <div class="text-4xl mb-4">
            {{ Carbon\Carbon::now()->format('F d Y') }}
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @livewire('dashboard')
        </div>
    </div>
</x-app-layout>