<?php

namespace App\Services\User;

use App\Models\User;
use App\Models\UserNotification;

class NotificationService
{
    protected array $allowedTypes = ['info', 'success', 'warning', 'error'];
    public function __construct(protected User $user) {}

    public function notify(string $type, string $title, string $message, array $params = [], array $related = [])
    {
        return UserNotification::create([
            'user_id' => $this->user->id,
            'type' => in_array($type, $this->allowedTypes) ? $type : 'info',
            'title' => $title,
            'message' => $message,
            'params' => $params,
            'related_type' => $related['type'] ?? null,
            'related_id'   => $related['id'] ?? null,
        ]);
    }

    public function info(string $title, string $message, array $params = [], array $related = [])
    {
        return $this->notify('info', $title, $message, $params, $related);
    }

    public function success(string $title, string $message, array $params = [], array $related = [])
    {
        return $this->notify('success', $title, $message, $params, $related);
    }

    public function warning(string $title, string $message, array $params = [], array $related = [])
    {
        return $this->notify('warning', $title, $message, $params, $related);
    }

    public function error(string $title, string $message, array $params = [], array $related = [])
    {
        return $this->notify('error', $title, $message, $params, $related);
    }
}
