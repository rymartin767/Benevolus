{{ $slot }}

<x-jet-dialog-modal wire:model="showModal">
    <x-slot name="title">
        {{ __($modalTitle) }}
    </x-slot>

    <x-slot name="content">
        {{ __('Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}

        <div class="mt-4" x-data="{}" x-on:confirming-modal-event.window="setTimeout(() => $refs.password.focus(), 250)">
            <x-jet-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" x-ref="password" wire:model.defer="password" wire:keydown.enter="deleteUser" />

            <x-jet-input-error for="password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$toggle('showModal')" wire:loading.attr="disabled">
            {{ __('Nevermind') }}
        </x-jet-secondary-button>

        <x-jet-danger-button class="ml-2" wire:click="modalAction" wire:loading.attr="disabled">
            {{ __($modalTitle) }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>