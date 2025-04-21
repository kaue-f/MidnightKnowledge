<dialog id="noLogged" class="modal">
    <div class="modal-box rounded-sm">
        <form method="dialog">
            <button class="btn-sm btn-ghost hover:bg-transparent hover:text-primary absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-semibolda">Ops!</h3>
        <div class="py-4 space-y-4">
            <p>
                Você precisa estar logado para continuar. Faça login ou crie uma conta agora mesmo!
            </p>
            <div class="flex justify-center gap-4">
                <x-button class="btn-sm btn-secondary" label="Fazer Login" link="/login" wire-navigate />
                <x-button class="btn-sm btn-accent" label="Fazer Cadastro" link="/sign" wire-navigate />
            </div>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
