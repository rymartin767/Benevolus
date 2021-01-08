<div class="max-w-3xl mx-auto bg-gray-100 p-3">
    @if($step === 1)
        <div class="grid grid-cols-10 bg-gray-200">
            <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">{{ Carbon\Carbon::now()->format('F d Y')}}</div>
            <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Day #348 of 2020</div>

            <div class="col-span-10 text-center p-6 mb-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
            </div>

            <div class="col-span-10 px-6 mb-3">
                <label for="entry_date" class="block text-sm font-medium text-gray-700">
                    {{ __('Entry Date') }}
                </label>
                <input wire:model="entry_date" type="date" name="entry_date" id="entry_date" autocomplete="entry_date" class="block w-full p-2 mt-1 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 shadow-sm sm:text-sm border-gray-300 rounded-md focus:outline-none">
            </div>

            @isset($entry_date)
                <div class="col-span-10 px-6 mb-3">
                    <button wire:click="$set('step', 2)" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Complete Journal for {{ Carbon\Carbon::parse($entry_date)->format('F d Y') }}
                    </button>
                </div>
            @endisset
        </div>
    @endif

    @if($step === 2)
        <div class="grid grid-cols-10 bg-gray-200">
            <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">How ya feeling?</div>
            <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Feeling Aside</div>

            <div class="col-span-10 text-center p-6 mb-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
            </div>

            <div class="col-span-10 px-6 mb-3">
                <label for="feel_rating" class="block text-sm font-medium text-gray-700">
                    {{ __('Feels Rating') }}
                </label>
                <div class="grid grid-cols-5 mb-3">
                    <div wire:click="$set('feel_rating', 1)" class="col-span-1 p-2 text-white text-base md:text-xl bg-red-400 hover:bg-red-500 cursor-pointer">Meh.</div>
                    <div wire:click="$set('feel_rating', 2)" class="col-span-1 p-2 text-white text-base md:text-xl bg-yellow-400 hover:bg-yellow-500 cursor-pointer">Fair.</div>
                    <div wire:click="$set('feel_rating', 3)" class="col-span-1 p-2 text-white text-base md:text-xl bg-indigo-400 hover:bg-indigo-500 cursor-pointer">Good.</div>
                    <div wire:click="$set('feel_rating', 4)" class="col-span-1 p-2 text-white text-base md:text-xl bg-blue-400 hover:bg-blue-500 cursor-pointer">Great.</div>
                    <div wire:click="$set('feel_rating', 5)" class="col-span-1 p-2 text-white text-base md:text-xl bg-green-400 hover:bg-green-500 cursor-pointer">Amazing.</div>
                </div>

                <label for="feel_rating" class="block text-sm font-medium text-gray-700">
                    {{ __('Because') }}
                </label>
                <textarea wire:model="feel_reason" name="feeling_text" id="feeling_text" cols="30" rows="5" class="w-full"></textarea>
            </div>

            @isset($feel_rating)
                <div class="col-span-10 px-6 mb-3">
                    <button wire:click="$set('step', 3)" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        On to gratitude...
                    </button>
                </div>
            @endisset
        </div>
    @endif

    @if($step === 3)
        <div class="grid grid-cols-10 bg-gray-200">
            <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">Gratitude</div>
            <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Gratitude Aside</div>

            <div class="col-span-10 text-center p-6 mb-12">
                {{ \App\Models\Quote::all()->random(1)->first()->body }}
            </div>

            <div class="col-span-10 px-6 mb-3">
                <label for="gratitude" class="block text-sm font-medium text-gray-700">
                    {{ __('Today I\'m grateful for...') }}
                </label>
                <textarea wire:model="gratitude" name="gratitude" id="gratitude" cols="30" rows="5" class="w-full p-2"></textarea>
                @error('gratitude')
                    <div class="form-error">{{ $message }}</div>
                @else
                    <div>NO errors</div>
                @enderror
            </div>

            @isset($gratitude)
                <div class="col-span-10 px-6 mb-3">
                    <button wire:click="$set('step', 4)" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        And the next one...
                    </button>
                </div>
            @endisset
        </div>
    @endif

    @if($step === 4 )
        <div class="grid grid-cols-10 bg-gray-200">
            <div class="col-span-10 sm:col-span-5 text-3xl px-3 pt-2">Daily Habits</div>
            <div class="col-span-10 sm:col-span-5 sm:justify-self-end px-3 sm:pt-2">Habits Aside</div>

            <div class="col-span-10 text-center p-6 mb-12">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam fugit velit dolor rerum molestiae accusamus temporibus exercitationem? Incidunt quae, totam voluptatem officiis ipsa cupiditate eius suscipit aspernatur distinctio itaque. Vel!
            </div>

            <div class="col-span-10 px-6 mb-3">
                <label for="habits" class="block text-sm font-medium text-gray-700">
                    {{ __('habits') }}
                </label>
                <textarea wire:model="habits" name="habits" id="habits" cols="30" rows="5" class="w-full p-2"></textarea>
            </div>

            @isset($habits)
                <div class="col-span-10 px-6 mb-3">
                    <button wire:click="$set('step', 4)" type="button" class="w-full inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        And the next one...
                    </button>
                </div>
            @endisset
        </div>
    @endif
</div>