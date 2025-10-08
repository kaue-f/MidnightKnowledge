<section class="max-w-5xl w-full mx-auto">
    <div class="flex flex-row gap-6 justify-between items-center">
        <h1 class="content-title">{{ trans('pages/auth/notifications.title') }}</h1>

    </div>
    <ul class="list bg-base-300 rounded-box  shadow-sm shadow-accent/20 border border-accent" x-data="{
        loaded: false,
        isLimit: $wire.isLimit,
        quantityRead: $wire.quantityRead,
        quantityUnread: $wire.quantityUnread,
        loadPosts() {
            if (!this.isLimit && (this.quantityRead > 0 || this.quantityUnread > 0)) {
                $wire.loadPosts();
            }
        }
    }"
        x-init="window.onscroll = () => {
            const isBottom = (window.innerHeight + window.scrollY) >= document.body.offsetHeight;
            if (isBottom) loadPosts();
        }">
        <li class="flex flex-row justify-between items-center pt-2.5 px-4">
            <div class="flex flex-row gap-2 items-center">
                <x-button label="{{ trans('pages/auth/notifications.buttons.read_all') }}"
                    class="btn-xs btn-success btn-ghost" wire:click="readAll" spinner />
                <x-button label="{{ trans('pages/auth/notifications.buttons.delete_all') }}"
                    class="btn-xs btn-error btn-ghost" wire:click="deleteAll" spinner />
            </div>
            <div class="filter !items-center">
                <input class="btn btn-xs btn-neutral border-accent checked:btn-info" type="radio" name="books"
                    aria-label="{{ trans('pages/auth/notifications.filters.unread', ['quantity' => $quantityUnread]) }}"
                    wire:model.live="filter" value="unread" wire:click="getNotifications" />
                <input class="btn btn-xs btn-neutral border-accent checked:btn-info" type="radio" name="books"
                    aria-label="{{ trans('pages/auth/notifications.filters.read', ['quantity' => $quantityUnread]) }}"
                    wire:model.live="filter" value="read" wire:click="getNotifications">
                <input class="btn btn-xs btn-neutral border-accent filter-reset" type="radio" name="books"
                    aria-label="{{ trans('pages/auth/notifications.filters.all') }}" wire:model.live="filter"
                    value="" wire:click="getNotifications" />
            </div>
        </li>

        @if ($notifications->isNotEmpty())
            @foreach ($notifications as $notification)
                <li class="list-row items-center {{ $notification->read_at ? 'opacity-50' : '' }}" wire:loading.remove
                    wire:target.except="loadPosts, read, readAll, delete, deleteAll">
                    <div>
                        <img class="size-16 rounded-full shadow shadow-accent/70" src="{{ $notification->image }}" />
                    </div>
                    <div x-data="{ expanded: false, needsExpand: false }" x-init="$nextTick(() => {
                        let text = $refs.text;
                        let lineHeight = parseFloat(getComputedStyle(text).lineHeight);
                        let maxHeight = lineHeight * 4;
                        if (text.scrollHeight > maxHeight) needsExpand = true;
                    })" class="list-col-grow">
                        <div class="flex flex-row justify-between items-center">
                            <h5 class="text-base font-medium">
                                {{ $notification->title }}
                            </h5>
                            <span class="text-xs opacity-75">
                                {{ $notification->created_at }}
                            </span>
                        </div>
                        <div class="flex flex-col space-y-0.5">
                            <p x-ref="text"
                                class="list-col-wrap text-sm text-justify transition-all duration-500 ease-in-out"
                                :class="expanded ? '' : 'line-clamp-4'">
                                {{ $notification->message }}
                            </p>

                            <template x-if="needsExpand">
                                <span class="text-xs opacity-50 cursor-pointer text-blue-400 hover:underline text-end"
                                    @click="expanded = !expanded">
                                    <span x-text="expanded ? 'Mostrar menos' : 'Mostrar mais'"></span>
                                </span>
                            </template>
                        </div>
                    </div>
                    @if ($notification->read_at)
                        <x-button icon="lucide.check" class="btn-xs btn-success btn-ghost" disabled="disabled" />
                    @else
                        <x-button icon="lucide.check" class="btn-xs btn-success btn-ghost" tooltip="Marcar como lida"
                            wire:click="read('{{ $notification->id }}')" spinner />
                    @endif
                    <x-button icon="lucide.message-square-x" class="btn-xs btn-error btn-ghost" tooltip="Excluir"
                        wire:click="delete('{{ $notification->id }}')" spinner />
                </li>
            @endforeach
        @else
            <li class="flex flex-row justify-center items-center opacity-75 py-4 space-x-2.5" wire:loading.remove
                wire:target.except="loadPosts">
                <x-icon name="lucide.message-square-dashed" />
                <p class="text-sm text-justify">
                    {{ trans('pages/auth/notifications.none_notification') }}
                </p>
            </li>
        @endif
        <li wire:loading wire:target="loadPosts, getNotifications" wire:target.except="read"
            class="flex flex-row justify-center items-center opacity-75 py-2.5">
            <p class="text-sm text-center space-x-2.5">
                {{ trans('pages/auth/notifications.loading') }}
                <x-loading class="loading-dots loading-lg" />
            </p>
        </li>
    </ul>
</section>
