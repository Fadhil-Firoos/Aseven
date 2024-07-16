<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class ShowUser extends Component
{
    public $dataUser;
    public $userRoles;

    public function mount(User $user)
    {
        $user->load('roles');

        $this->dataUser = $user;
        $this->userRoles = $user->roles->pluck('name');
    }

    public function render()
    {
        return view('livewire.user.show-user')->extends('layouts.app');
    }
}
