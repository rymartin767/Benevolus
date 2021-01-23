<div class="grid grid-cols-10 bg-gray-200">
    <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">How ya feeling?</div>
    <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Mood Aside</div>

    <div class="col-span-10 text-center p-6 mb-12">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
    </div>

    <div class="col-span-10 px-6 mb-3">
        <label for="mood" class="block text-sm font-medium text-gray-700">
            {{ __('Mood Meter') }}
        </label>
        <div class="grid grid-cols-5 mb-3">
            <div wire:click="$set('mood', 1)" class="col-span-1 p-2 text-white text-xs font-semibold sm:text-base md:text-xl bg-red-400 hover:bg-red-500 cursor-pointer">Meh.</div>
            <div wire:click="$set('mood', 2)" class="col-span-1 p-2 text-white text-xs font-semibold sm:text-base md:text-xl bg-yellow-400 hover:bg-yellow-500 cursor-pointer">Fair.</div>
            <div wire:click="$set('mood', 3)" class="col-span-1 p-2 text-white text-xs font-semibold sm:text-base md:text-xl bg-indigo-400 hover:bg-indigo-500 cursor-pointer">Good.</div>
            <div wire:click="$set('mood', 4)" class="col-span-1 p-2 text-white text-xs font-semibold sm:text-base md:text-xl bg-blue-400 hover:bg-blue-500 cursor-pointer">Great.</div>
            <div wire:click="$set('mood', 5)" class="col-span-1 p-2 text-white text-xs font-semibold sm:text-base md:text-xl bg-green-400 hover:bg-green-500 cursor-pointer">Amazing.</div>
        </div>
    </div>

    @if($validated)
        <div class="col-span-10 px-6 mb-3">
            <button wire:click="sendAndStep" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: check -->
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                On to gratitude...
            </button>
        </div>
    @endif
</div>