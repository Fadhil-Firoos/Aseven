<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
        if (Route::is('superadmin.create-user')){
            return view('livewire.create-user')->extends('layouts.app');
        } else if(Route::is('superadmin.kelola-user')){
            return view('livewire.kelola-user')->extends('layouts.app');
        }
    }
}
