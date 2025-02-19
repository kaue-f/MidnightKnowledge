<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\GameForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\GameManagementService;

class AddGame extends Component
{
    use WithFileUploads;
    public ?User $user;
    public array $platforms;
    public array $classifications;
    public GameForm $gameForm;
    public Collection $genres;
    #[Modelable]
    public bool $modalGame = false;
    public array $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd/F/Y',
        'locale' => 'pt',
    ];
    public function render()
    {
        return view('livewire.components.modals.add-game');
    }

    public function save(GameManagementService $gameManagementService)
    {
        $this->validate();
        try {
            $gameManagementService->create($this->gameForm, $this->user);
            $this->modalGame = false;
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastrameto do game inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->gameForm->resetForm();
        $this->modalGame = false;
    }
}
