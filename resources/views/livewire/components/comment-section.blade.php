<div class="flex flex-col w-full py-6 px-8 gap-4">
    @if (!Auth::check())
        <p class="w-full text-center font-light">
            Para deixar um avaliação, você precisa estar logado.
            Faça <a class="link link-primary" href="/login" wire:navigate>login</a> ou
            <a class="link link-primary" href="/sign" wire:navigate>cadastre-se</a> para continuar.
        </p>
    @else
        <div class="flex flex-col gap-3">
            <div class="flex justify-end">
                <x-button icon-right="c-plus" label="Novo comentário" class="btn-ghost btn-sm"
                    x-on:click="$wire.showNewComment = ! $wire.showNewComment" />
            </div>
            <div wire:show="showNewComment" x-transition.duration.500ms wire:cloak>
                <x-form class="pb-4" wire:submit="post">
                    <x-markdown wire:model="comment" :config="$config" omit-error />
                    <div class="flex justify-between">
                        @error('comment')
                            <div class="text-red-500 label-text-alt p-1 w-full">{{ $message }}</div>
                        @enderror
                        <small class="w-full text-end text-xs opacity-60 font-light">
                            Limite: <span
                                :class="{
                                    'text-red-500': ($wire.comment.length || 0) > 500,
                                    'opacity-60': ($wire.comment.length || 0) <= 500
                                }"
                                x-text="($wire.comment.length || 0)"></span>
                        </small>
                    </div>
                    <div class="flex justify-end">
                        <x-button class="btn-sm btn-success" label="Postar" type="submit" spinner="post" />
                    </div>
                </x-form>
            </div>
        </div>
    @endif

    <div class="flex flex-col gap-4" x-data="{ loaded: false }" x-init="window.onscroll = function() {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            if (@js(!$isLimit)) {
                @this.loadPosts();
            }
        }
    }">
        @foreach ($posts as $post)
            <div
                class="flex flex-row rounded bg-base-200 pt-2.5 pb-1.5 px-4 gap-5 border-b-2 border-secondary shadow-md shadow-base-300">
                <div class="flex-none flex-col">
                    <div class="avatar justify-start">
                        <div class="w-11 rounded-full">
                            <img alt="{{ $post->user->nickname }}"
                                src="{{ asset($post->user->image ?? 'images/none-user.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex-col space-y-1">
                    <div class="flex flex-row justify-between -my-1">
                        <span class="font-semibold">{{ $post->user->nickname }}</span>
                        <span class="text-xs opacity-50">{{ hasDate($post->created_at) }}</span>
                    </div>
                    <div class="markdown">
                        {!! nl2br(rtrim(Str::markdown($post->comment), "\n")) !!}
                    </div>
                </div>
            </div>
        @endforeach

        <div wire:loading wire:target="loadPosts" class="mt-3 text-center">
            <x-loading class="loading-dots loading-lg" />
        </div>
    </div>
</div>
