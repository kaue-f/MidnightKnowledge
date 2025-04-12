<div class="flex flex-wrap gap-2.5 w-full">
    @foreach ($items as $item)
        <x-badge value="{{ $item->genre }}"
            class="badge-sm font-medium bg-green-900 border-0 rounded-sm shadow shadow-white/10 hover:cursor-default" />
    @endforeach
</div>
