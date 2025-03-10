<section>
    <div class="flex flex-row gap-10">
        <div class="flex flex-col gap-2 py-2">
            <div>
                <img src="{{ asset($avatar) }}" class="size-64 border-2 border-accent rounded-full" />
            </div>
            <div class="flex justify-center text-2xl font-semibold">
                {{ $user->nickname }}
            </div>
        </div>
        <div class="flex flex-col flex-1 gap-4 rounded-md border-2 border-accent bg-base-200 p-6">
            <div class="opacity-60 text-sm space-y-6">
                <div>
                    Nome
                    <p class="text-lg text-base-content font-medium">{{ hasValue($user->username) }}</p>
                </div>
                <div>
                    E-mail
                    <p class="text-lg text-base-content font-medium">{{ $user->email }}</p>
                </div>
                <div>
                    Data de Nascimento
                    <p class="text-lg text-base-content font-medium">{{ hasDate($user->birthday) }}</p>
                </div>
                <div class="pt-1.5">
                    <x-popover>
                        <x-slot:trigger>
                            <span
                                class="space-x-1 items-center border py-1 px-2 rounded-sm text-base text-base-content font-semibold bg-base-100">
                                <x-badge class="bg-blue-600 badge-xs" /> {{ $user->role }}
                            </span>
                        </x-slot:trigger>
                        <x-slot:content class="text-xs font-medium !w-48">
                            {{ 'Integrante da comunidade ' . env('APP_NAME') . ' desde ' . hasDate($user->created_at) }}
                        </x-slot:content>
                    </x-popover>
                </div>
            </div>
        </div>
    </div>
</section>
