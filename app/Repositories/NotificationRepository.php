<?php

namespace App\Repositories;

use App\User;
use App\Notification;

class NotificationRepository
{

    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Notification::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }

}