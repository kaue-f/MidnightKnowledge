<div class="flex flex-row h-16 w-full gap-2 items-center">
    <img class="h-12 w-auto" src="{{ asset($classification->image) }}" alt="{{ $classification->classification }}">
    <div class="w-26">
        <p class="text-xs font-light">{{ $classification->description }}</p>
    </div>
</div>
