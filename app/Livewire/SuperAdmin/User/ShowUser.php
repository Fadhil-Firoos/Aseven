<?php

namespace App\Livewire\SuperAdmin\User;

use Livewire\Component;
use App\Models\User;

class ShowUser extends Component
{
    public $name;
    public $email;
    public $role;

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->roles->pluck('name')->first();
    }

    public function render()
    {
        return view('livewire.super-admin.user.show-user')->extends('layouts.app');
    }
}
