<figure class="flex flex-col justify-start space-y-2">
    <a href="/{{ $content }}/{{ $item->id }}/{{ str_replace([' ', ':'], ['-', ''], $item->title) }}"
        class="relative hover:bg-linear-to-b from-white/50 to-[#0003] xl:h-80 lg:h-72 h-64 rounded overflow-hidden group hover:cursor-pointer shadow shadow-accent/50">
        @if ($item->classification)
            <div
                class="flex absolute bottom-2 left-2 items-center gap-x-2 opacity-0 group-hover:opacity-100 group-hover:z-10 transition-opacity duration-300">
                <img class="h-8 w-auto" src="{{ asset($item->classification->image) }}"
                    alt="{{ $item->classification->classification }}">
            </div>
        @endif
        <div
            class="flex absolute bottom-0 right-0 items-center gap-x-2 text-[#fcd53f] font-medium text-base p-2 opacity-0 group-hover:opacity-100 group-hover:z-10 transition-opacity duration-300">
            <x-icon class="h-5" name="s-star" />
            {{ round($item->ratings_avg_rating, 2) ?? 0 }}
        </div>
        <img class="absolute w-full h-full group-hover:mix-blend-overlay group-hover:scale-110 transition-transform duration-300 object-cover"
            src="{{ asset($item->image) }}" alt="{{ $item->title }}">
    </a>
    <figcaption class="font-medium px-2 text-lg">{{ $item->title }}</figcaption>
</figure>
