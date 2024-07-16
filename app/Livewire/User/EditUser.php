<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class EditUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $role;
    public $user_id;
    public $dataUser;

    public function mount(User $user)
    {
        $this->dataUser = $user;
    }

    public function update()
    {
        $rules = [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'password' => 'nullable|string|min:8',
            'role' => 'required',
        ];

        $validated = $this->validate($rules);

        if (!empty($this->password)) {
            $validated['password'] = bcrypt($this->password);
        }

        $user = User::find($this->user_id);
        $user->update($validated);

        $this->reset([
            'name',
            'email',
            'password',
            'role',
            'user_id'
        ]);
    }

    public function render()
    {
        return view('livewire.user.edit-user')->extends('layouts.app');
    }
}

