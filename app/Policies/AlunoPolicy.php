<?php

namespace App\Policies;

use App\Models\Aluno;
use App\Models\User;

class AlunoPolicy
{
    public function create(User $user)
    {
        return $user->role === 'admin';
    }

    public function delete(User $user, Aluno $aluno)
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Aluno $aluno)
    {
        return $user->role === 'admin' || $user->role === 'professor';
    }
}
