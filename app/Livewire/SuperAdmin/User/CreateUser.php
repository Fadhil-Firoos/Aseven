<?php

namespace App\Livewire\SuperAdmin\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class CreateUser extends Component
{
    use LivewireAlert;
    public $name;
    public $email;
    public $password;
    public $role;

    public function rules(){
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'role' => 'required',
        ];
    }

    public function store(){

        $validated = $this->validate();

        User::create($validated)->assignRole($this->role);

        $this->reset([
            'name',
            'email',
            'password',
            'role',
        ]);

        $this->alert('success', 'User Created successfully!');
        return redirect()->intended(route('superadmin.user.kelola-user'));
    }
    public function render()
    {
        return view('livewire.super-admin.user.create-user')->extends('layouts.app');
    }
}
