<?php

namespace App\Livewire\Pages\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Notifications extends Component
{
    public User $user;
    public int $quantityRead = 0;
    public int $quantityUnread = 0;
    public int $limitPost = 10;
    public bool $isLimit = false;
    public string $filter = '';

    public function render()
    {
        return view(
            'livewire.pages.auth.notifications',
            [
                'notifications' => $this->getNotifications()
            ]
        )
            ->title(trans('titles.notifications'));
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->countNotifications();
    }

    public function getNotifications()
    {
        return $this->user->notifications()
            ->when(
                $this->filter,
                fn($query) => ($this->filter === 'read') ? $query->getRead() : $query->getUnread()
            )
            ->orderByDesc('created_at')
            ->take($this->limitPost)
            ->get();
    }

    public function loadPosts()
    {
        if ($this->limitPost >= $this->user->notifications()->count())
            return $this->isLimit = true;

        $this->limitPost += 10;
    }

    public function countNotifications()
    {
        $this->quantityUnread = $this->user->notifications()->getUnread()->count();
        $this->quantityRead = $this->user->notifications()->getRead()->count();
    }

    public function read(string $id)
    {
        $this->user->notifications()->where('id', $id)->read();
        $this->countNotifications();
        flash()->success(trans('pages/auth/notifications.messages.read'));
    }

    public function readAll()
    {
        $this->user->notifications()->getUnread()->read();
        $this->countNotifications();
        flash()->success(trans('pages/auth/notifications.messages.read_all'));
    }

    public function delete(string $id)
    {
        $this->user->notifications()->find($id)->delete();
        $this->countNotifications();
        flash()->warning(trans('pages/auth/notifications.messages.delete'));
    }

    public function deleteAll()
    {
        $this->user->notifications()->delete();
        $this->countNotifications();
        flash()->warning(trans('pages/auth/notifications.messages.delete_all'));
    }
}
