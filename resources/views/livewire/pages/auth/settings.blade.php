<section x-data="{ open: $wire.entangle('selectedTab').live }">
    <div class="flex flex-row">
        <h1 class="text-2xl font-bold">Configurações</h1>
    </div>
    <div class="flex flex-row py-2">
        <div class="flex flex-col gap-2 w-1/5">
            <x-button class="justify-start" x-bind:class="open === 'all-tab' ? 'btn-primary' : 'btn-ghost'"
                label="Todos" icon="o-squares-2x2" @click="$wire.selectedTab = 'all-tab'" />
            <x-button class="justify-start" x-bind:class="open === 'account-tab' ? 'btn-primary' : 'btn-ghost'"
                label="Conta" icon="o-user" @click="$wire.selectedTab = 'account-tab'" />
            <x-button class="justify-start" x-bind:class="open === 'others-tab' ? 'btn-primary' : 'btn-ghost'"
                label="Outros" icon="o-cog-8-tooth" @click="$wire.selectedTab = 'others-tab'" />
        </div>
        <div class="divider divider-horizontal"></div>
        <div class="flex flex-col w-full">
            <div x-bind:class="open === 'account-tab' || open === 'all-tab' ? '' : 'hidden'">
                <div class="flex flex-col">
                    <livewire:components.auth.avatar-changer :$avatar :$user />
                    <div class="divider"></div>
                    <livewire:components.auth.update-profile :$user />
                    <div class="divider"></div>
                    <livewire:components.auth.password-changer :$user />
                    <div class="divider"></div>
                </div>
            </div>
            <div x-bind:class="open === 'others-tab' || open === 'all-tab' ? '' : 'hidden'">
                <div class="flex flex-col">
                    <livewire:components.auth.delete-account :$user />
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>
</section>