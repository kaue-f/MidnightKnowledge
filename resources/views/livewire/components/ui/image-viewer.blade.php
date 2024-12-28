<dialog id="imageViewer" class="modal rounded-none backdrop-blur-[2px]">
    <div class="modal-box flex justify-center items-center !bg-transparent !py-0 min-h-screen max-w-full">
        <form method="dialog">
            <button>
                <x-icon class="w-6 h-6 absolute left-0 top-3 hover:animate-bounce hover:cursor-pointer"
                    name="m-arrow-down-tray" wire:click='download' />
            </button>
            <button>
                <x-icon class="w-6 h-6 absolute right-0 top-3 hover:cursor-pointer" name="m-x-mark" />
            </button>
        </form>
        <img class="max-h-[925px]" src="{{ asset($image) }}" alt="{{ $title }}">
    </div>
</dialog>
