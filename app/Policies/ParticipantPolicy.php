<?php

namespace App\Policies;

use App\Models\Participant;
use App\Models\User;

class ParticipantPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Participant $participant)
    {
        return $user->id === $participant->author_id;
    }

    public function delete(User $user, Participant $participant)
    {
        return $user->id === $participant->author_id;
    }
}
