@if (!isNullOrEmpty($classification))
    <div class="flex flex-row h-16 w-full gap-2 items-center">
        <img class="h-12 w-auto" src="{{ asset($classification->image) }}" alt="{{ $classification->classification }}">
        <div class="w-26">
            <p class="text-xs font-light">{{ $classification->description }}</p>
        </div>
    </div>
@else
    <div class="flex flex-col space-y-1 lg:w-full">
        <p class="text-sm font-light opacity-80">Classificação</p>
        <div class="flex flex-row space-x-2 items-center">
            <span>N/A</span>
        </div>
    </div>
@endif
