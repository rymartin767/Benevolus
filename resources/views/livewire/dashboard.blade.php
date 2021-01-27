<div>  
    <div class="max-w-3xl mx-auto bg-gray-100 p-3">
        <!-- Today Section -->
        @if($step === 1)
            @livewire('today')
        @endif

        <!-- Mood Section -->
        @if($step === 2)
            @livewire('mood')
        @endif

        @if($step === 3)
            @livewire('grateful')
        @endif

        @if($step === 4)
            @livewire('reading')
        @endif
        
        @if($step === 5)
            <div class = my-2>
                <button wire:click="submitForm" class="p-2 bg-blue-400 text-white rounded-md shadow-md">SUBMIT FORM</button>
            </div>
        @endif
    </div>
</div>