<dialog id="noLogged" class="modal">
    <div class="modal-box rounded">
        <form method="dialog">
            <button class="btn-sm btn-ghost hover:bg-transparent hover:text-primary absolute right-2 top-2">✕</button>
        </form>
        <h3 class="text-lg font-semibolda">Atenção!</h3>
        <div class="py-4 space-y-2">
            <p>
                Para continuar, é necessário estar logado. Faça login para prosseguir.
            </p>
            <div class="flex justify-center">
                <x-button class="btn-sm btn-secondary" label="Fazer Login" link="/welcome" wire-navigate />
            </div>
        </div>
    </div>
    <form method="dialog" class="modal-backdrop">
        <button>close</button>
    </form>
</dialog>
