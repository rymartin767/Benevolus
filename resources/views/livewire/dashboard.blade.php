<div>
    <form wire:submit.prevent="submitForm">
        <div class="grid grid-cols-3 gap-3">
            <div class="col-span-3 sm:col-span-1">
                <div class="form-group">
                    <label for="date" class="form-label">{{ __('Journal Date') }}</label>
                    <input wire:model.lazy="datetime" type="date" class="form-input w-full">
                    @error('datetime')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-1 sm:col-start-3">
                <div class="form-group">
                    <label for="locale" class="form-label">{{ __('Where Are You?') }}</label>
                    <input wire:model.lazy="location" type="text" class="form-input w-full">
                    @error('location')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <div class="form-group">
                    <label for="locale" class="form-label">{{ __('How Are You Feeling Today?') }}</label>
                    <select wire:model.lazy="feeling_number" wire:click="updateImage" name="feeling_number" id="" class="form-input w-full">
                        <option value="">Choose One...</option>
                        <option value="1">Depleted</option>
                        <option value="2">Meh</option>
                        <option value="3">Fine</option>
                        <option value="4">Good</option>
                        <option value="5">Amazing</option>
                    </select>
                    @error('feeling_number')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="hidden sm:block sm:col-span-1 sm:col-start-2 text-xs italic {{ $image }}">
                {{ $image }}
            </div>
            <div class="col-span-3 sm:col-span-1 sm:col-start-3">
                <div class="form-group">
                    <label for="feeling_reasons" class="form-label">You feel this way because:</label>
                    <textarea wire:model.lazy="feeling_reasons" name="feeling_reasons" id="" cols="30" rows="10" class="form-input w-full"></textarea>
                    @error('feeling_reasons')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <div class="form-group">
                    <label for="project" class="form-label">Project I'm Working On</label>
                    <input wire:model.lazy="project" type="text" name="project" class="form-input w-full">
                    @error('project')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-2 sm:col-start-2">
                <div class="form-group">
                    <label for="locale" class="form-label">Today I'm grateful for</label>
                    <input wire:model.lazy="grateful" type="text" class="form-input w-full">
                    @error('grateful')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-1">
                <div class="form-group">
                    <label for="source" class="form-label">What Are Your Learning/Reading?</label>
                    <select wire:model.lazy="source_id" name="source_id" id="" class="form-input w-full">
                        <option value="0">Nothing Today</option>
                        @foreach($sources as $source)
                            <option value="{{ $source->id }}">{{ $source->title }} by {{ $source->author }}</option>
                        @endforeach
                    </select>
                    @error('source_id')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3 sm:col-span-2 sm:col-start-2">
                <div class="form-group {{ $source_id > 0 ? 'block' : 'hidden' }}">
                    <label for="source_passage">Passage</label>
                    <textarea wire:model.lazy="source_passage" name="source_passage" id="" cols="30" rows="10" class="form-input w-full"></textarea>
                    @error('source_passage')
                        <div class="form-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-span-3">
                <div class="form-group">
                    <button type="submit">SUBMIT</button>
                </div>
            </div>
        </div>
    </form>
</div>