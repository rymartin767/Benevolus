<div class="grid grid-cols-10 bg-gray-200">
    <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">{{ Carbon\Carbon::today()->format('F d')}}</div>
    <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Day #{{ Carbon\Carbon::now()->diffInDays(Carbon\Carbon::now()->startofYear()) }} of 365</div>

    <div class="col-span-10 text-center p-6 mb-12">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
    </div>

    <div class="col-span-10 px-6 mb-3">
        <label for="date" class="block text-sm font-medium text-gray-700">
            {{ __('Entry Date') }}
        </label>
        <input wire:model="date" type="date" name="date" id="date" autocomplete="date" class="block w-full p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
        @error('date')
            <div class="mt-2 text-xs text-red-600 italic">{{ $message }}</div>
        @enderror
    </div>

    @isset($date)
        <div class="col-span-10 px-6 mb-3">
            <label for="location" class="block text-sm font-medium text-gray-700">
                {{ __('Location') }}
            </label>
            <input wire:model.lazy="location" type="text" name="location" id="location" autocomplete="location" class="block w-full p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            @error('location')
                <div class="mt-2 text-xs text-red-600 italic">{{ $message }}</div>
            @enderror
        </div>
    @endisset

    @if($validated)
        <div class="col-span-10 px-6 mb-3">
            <button wire:click="sendAndStep" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: check -->
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Complete Journal for {{ Carbon\Carbon::parse($date)->format('F d Y') }}
            </button>
        </div>
    @endif
</div>