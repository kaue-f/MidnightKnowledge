<div class="flex flex-col justify-start space-y-2">
    <div wire:navigate href="/game/{{ $item['id'] }}"
        class="relative hover:bg-gradient-to-b from-white/50 to-[#0003] xl:h-96 lg:h-80 md:h-72 sm:h-64 h-56 rounded-md overflow-hidden group hover:cursor-pointer">
        <div
            class="flex absolute bottom-0 right-0 items-center gap-x-2 text-[#fcd53f] font-medium text-base p-2 opacity-0 group-hover:opacity-100 group-hover:z-10 transition-opacity duration-300">
            <x-icon class="h-5" name="bi.star-fill" />
            {{ $item['average_rating'] }}
        </div>
        <img class="absolute w-full h-full group-hover:mix-blend-overlay group-hover:scale-110 transition-transform duration-300 object-cover"
            src="{{ asset($item['image']) }}" alt="">
    </div>
    <p class="font-medium px-2">{{ $item['title'] }}</p>
</div>
