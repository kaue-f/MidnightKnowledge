<section>
    <div class="flex flex-row gap-10">
        <div class="flex flex-col gap-2 py-2">
            <div>
                <img src="{{ asset($user->image ?? imageNoneUser()) }}"
                    class="size-64 border border-accent rounded-full" />
            </div>
            <div class="flex justify-center text-2xl font-semibold">
                {{ $user->nickname }}
            </div>
        </div>
        <div class="flex flex-col flex-1 gap-4 rounded-lg border border-accent bg-base-300 p-6 shadow shadow-accent/75">
            <div class="opacity-80 text-sm space-y-6">
                <div>
                    Nome
                    <p class="text-lg text-base-content font-medium">{{ $user->username }}</p>
                </div>
                <div>
                    E-mail
                    <p class="text-lg text-base-content font-medium">{{ $user->email }}</p>
                </div>
                <div>
                    Data de Nascimento
                    <p class="text-lg text-base-content font-medium">{{ $user->birthday }}</p>
                </div>
                <div class="pt-1.5">
                    <x-popover>
                        <x-slot:trigger>
                            <div class="flex gap-x-2 items-center border py-1 px-2 rounded-lg bg-base-100">
                                <div class="inline-grid *:[grid-area:1/1]">
                                    <div class="status status-lg bg-info animate-ping rounded-full"></div>
                                    <div class="status status-lg bg-blue-600 rounded-full"></div>
                                </div>
                                <span class="text-base text-base-content font-semibold">
                                    {{ $user->role }}
                                </span>
                            </div>
                        </x-slot:trigger>
                        <x-slot:content class="text-xs font-medium w-48! bg-base-100">
                            {{ 'Integrante da comunidade ' . env('APP_NAME') . ' desde ' . isDate($user->created_at) }}
                        </x-slot:content>
                    </x-popover>
                </div>
            </div>
        </div>
    </div>
</section>
