<div class="flex min-h-[450px]">
    <img class="h-full w-full bg-center rounded shadow-xs shadow-accent hover:cursor-zoom-in"
        onclick="imageViewer.showModal()" src="{{ asset($image) }}" alt="{{ $title }}">

    <dialog id="imageViewer" class="modal rounded-none">
        <div
            class="modal-box flex justify-center items-center backdrop-blur-sm bg-transparent py-0 !min-h-screen !min-w-full">
            <x-icon wire:loading.remove class="w-6 h-6 absolute left-5 top-5 hover:animate-bounce hover:cursor-pointer"
                name="m-arrow-down-tray" wire:click='download' />

            <x-loading class="w-6 absolute left-5 top-5" wire:loading wire:target="download" />
            <form method="dialog">
                <button>
                    <x-icon class="w-6 h-6 absolute right-6 top-5 hover:cursor-pointer" name="m-x-mark" />
                </button>
            </form>
            <img class="max-h-[925px] shadow" src="{{ asset($image) }}" alt="{{ $title }}">
        </div>
    </dialog>
</div>
