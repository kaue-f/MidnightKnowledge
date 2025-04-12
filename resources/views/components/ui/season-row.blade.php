<div class="flex flex-col space-y-1 lg:w-full">
    @if (isNullOrEmpty($current) && isNullOrEmpty($total))
        <p class="font-light opacity-80">Temporada</p>
        <div class="flex flex-row text-sm">
            <span>N/A</span>
        </div>
    @elseif(isNullOrEmpty($current))
        <p class="font-light opacity-80">Total de Temporadas</p>
        <div class="flex flex-row text-sm">
            <span>{{ $total }}</span>
        </div>
    @elseif (isNullOrEmpty($total))
        <p class="font-light opacity-80">Temporada Atual</p>
        <div class="flex flex-row text-sm">
            <span>{{ $current }}</span>
        </div>
    @else
        <p class="font-light opacity-80">Temporada</p>
        <div class="flex flex-row text-sm">
            <p class="tooltip tooltip-accent hover:cursor-pointer" data-tip="Temporada atual/Total de Temporadas">
                <span>{{ $current }}</span> / <span>{{ $total }}</span>
            </p>
        </div>
    @endif
</div>
