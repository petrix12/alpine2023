<div>
    <p>Count Livewire: {{ $count }}</p>

    <button wire:click="incrementar">
        Aumentar desde Livewire
    </button>

    {{-- <div x-data="{ count: $wire.count }"> --}}
    {{-- <div x-data="{ count: @entangle('count') }"> --}}
    <div x-data="{ count: @entangle('count').defer }">
        <p>Count Alpine: <span x-text="count"></span></p>
        <button @click="count++">
            Aumentar desde Alpine
        </button>
    </div>
</div>
