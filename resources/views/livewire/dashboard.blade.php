<div class="max-w-3xl mx-auto bg-gray-100">
    @if($step === 1)
        <div class="grid grid-cols-10">
            <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">{{ Carbon\Carbon::now()->format('F d Y')}}</div>
            <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Day #348 of 2020</div>

            <div class="col-span-10 text-center p-6 mb-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
            </div>

            <div class="col-span-10 px-6 mb-3">
                <button wire:click="$toggle('new_date')" type="button" class="w-full inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: pencil -->
                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                    </svg>
                    Select New Entry Date
                </button>
            </div>

            @if($new_date === true)
                <div class="col-span-10 px-6 mb-3">
                    <label for="entry_date" class="block text-sm font-medium text-gray-700">
                        {{ __('New Entry Date') }}
                    </label>
                    <input wire:model="entry_date" type="date" name="entry_date" id="entry_date" autocomplete="entry_date" class="block w-full p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
                </div>
            @endif

            <div class="col-span-10 px-6 mb-3">
                <button wire:click="$set('step', 2)" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: check -->
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    {{ Carbon\Carbon::parse($entry_date)->format('F d Y') }}
                </button>
            </div>
        </div>
    @endif

    @if($step === 2)
        <div class="grid grid-cols-10">
            The next step
        </div>
    @endif
</div>