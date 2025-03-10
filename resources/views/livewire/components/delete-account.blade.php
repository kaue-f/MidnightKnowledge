<div class="flex flex-col gap-4 border-b border-white/50 pb-3.5">
    <h1 class="text-lg font-semibold">Excluir Conta</h1>
    <div class="flex flex-row justify-between">
        <div class="text-sm font-light opacity-75 w-2/5">
            Excluir permanentemente sua conta no Midnight Knowledge. Após a exclusão, os dados associados à sua conta
            não poderão ser recuperados. No entanto, os conteúdos que você adicionou ao Midnight Knowledge serão
            preservados.
        </div>
        <div class="flex items-center">
            <x-button label="Excluir Conta" class="btn btn-error" @click="$wire.modalUserDelete = true" />
        </div>
    </div>
    <x-modal wire:model="modalUserDelete" title="Excluir Usuário" class="backdrop-blur" box-class="w-100 rounded">
        <div class="indent-3 leading-relaxed text-justify text-sm">
            <p>
                Você tem certeza de que deseja excluir sua conta no Midnight Knowledge?
                Ao seguir em frente, você perderá o acesso à sua conta e os dados não poderão ser recuperados. No
                entanto,
                suas contribuições continuarão fazendo parte da nossa comunidade.
            </p>
            <p>
                Sentiremos sua falta! Se mudar de ideia, estamos aqui para você.
            </p>
        </div>
        <div class="flex justify-between w-full pt-4">
            <x-button label="Manter minha conta" class="btn-sm btn-success" @click="$wire.modalUserDelete = false" />
            <x-button label="Sim, quero excluir" class="btn-sm btn-error" wire:click='deleteUser' spinner />
        </div>
    </x-modal>
</div>
