<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
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

        User::create($validated)->assignRole($this->role);

        $this->reset([
            'name',
            'email',
            'password',
            'role',
        ]);
    }
    public function render()
    {
        return view('livewire.user.create-user')->extends('layouts.app');
    }
}
