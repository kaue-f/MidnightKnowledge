<div class="flex min-h-[450px]">
    <img class="h-full w-full bg-center rounded-sm shadow-xs shadow-white/30 hover:cursor-zoom-in"
        onclick="imageViewer.showModal()" src="{{ asset($image) }}" alt="{{ $title }}">

    <dialog id="imageViewer" class="modal rounded-none backdrop-blur-[2px]">
        <div class="modal-box flex justify-center items-center bg-transparent! py-0! min-h-screen max-w-full">
            <x-icon wire:loading.remove class="w-6 h-6 absolute left-0 top-3 hover:animate-bounce hover:cursor-pointer"
                name="m-arrow-down-tray" wire:click='download' />

            <x-loading class="w-6 absolute left-0 top-3" wire:loading wire:target="download" />
            <form method="dialog">
                <button>
                    <x-icon class="w-6 h-6 absolute right-0 top-3 hover:cursor-pointer" name="m-x-mark" />
                </button>
            </form>
            <img class="max-h-[925px]" src="{{ asset($image) }}" alt="{{ $title }}">
        </div>
    </dialog>
</div>
