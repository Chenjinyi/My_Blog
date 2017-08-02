<?php

namespace App\Policies;

use App\Posts;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostsPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function update(User $user, Posts $post)
    {
        return $user->id === $post->user_id;
    }
    public function adduser(User $user){
        return $user->id == 1;
    }
}
