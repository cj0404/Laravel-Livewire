<div class="flex items-center justify-center space-x-4">
    <b class="p-4 bg-green-400 hover:bg-green-500" wire:click="increment">+</b>
    <p class="text-teal-400 text-4xl font-bold hover:text-white hover:underline">{{ $count }}</p>
    <b class="p-4 bg-red-400 hover:bg-red-500" wire:click="decrement">-</b>
</div>

