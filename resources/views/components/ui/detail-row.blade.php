<div class="flex flex-col space-y-1 lg:w-full">
    <p class="text-sm font-light opacity-80">{{ $description ?? '' }}</p>
    <div class="flex flex-row space-x-2 items-center">
        @if (!empty($icon))
            <x-icon class="opacity-80 w-3 h-3" name="{{ $icon }}" />
        @endif
        <span>{{ hasValue($value) ?? '' }}</span>
    </div>
</div>
