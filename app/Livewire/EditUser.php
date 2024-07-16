<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class EditUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $role;
    public $user_id;

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->user_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
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
        return view('livewire.edit-user')->extends('layouts.app');
    }
}

