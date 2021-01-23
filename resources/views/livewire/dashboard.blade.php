<div>  
    <div class="max-w-3xl mx-auto bg-gray-100 p-3">
        {{ var_dump($formData) }}
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

    <div class="mt-12 px-4">
        @foreach($entries as $e)
            <div class="grid grid-cols-7 gap-3 {{ $loop->odd ? 'bg-gray-50' : 'bg-gray-100'}}">
                <div class="col-span-1">{{ $e->date }}</div>
                <div class="col-span-1">{{ $e->location }}</div>
                <div class="col-span-1">Mood:{{ $e->mood }}</div>
                <div class="col-span-1">{{ $e->grateful }}</div>
                <div class="col-span-1">{{ $e->date }}</div>
                <div class="col-span-1">{{ $e->source_id ?? 'No Reading' }}</div>
                <div class="col-span-1">{{ $e->source_passage ?? 'No Passage' }}</div>
            </div>
        @endforeach
        <div class="flex justify-end">
            <button wire:click="removeAll" class="p-2 bg-blue-600 text-white">RESET</button>
        </div>
    </div>
</div>