<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class KelolaUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $role;

    public function store(){
        $rules = [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ];

        $validated = $this->validate($rules);

        User::create($validated);

        $this->reset([
            'name',
            'email',
            'password',
            'role',
        ]);
    }
    public function render()
    {
        return view('livewire.kelola-user')->extends('layouts.app');
    }
}
