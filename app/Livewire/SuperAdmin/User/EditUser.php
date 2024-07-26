<?php

namespace App\Livewire\SuperAdmin\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditUser extends Component
{
    use LivewireAlert;

    public $name;
    public $email;
    public $role;
    public $user_id;

    protected function rules()
    {
        // Define dynamic rules
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
            'role' => 'required|in:admin,user',
        ];
    }

    public function mount(User $user)
    {
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->roles->pluck('name')->first();
        $this->user_id = $user->id;
    }

    public function update()
    {
        $this->validate();

        $user = User::find($this->user_id);

        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        try {
            $user->syncRoles([$this->role]);
        } catch (ValidationException $e) {
            $this->addError('role', 'Invalid role.');
            return;
        }

        $this->reset([
            'name',
            'email',
            'role',
            'user_id',
        ]);

        $this->alert('success', 'User updated successfully!');
        return redirect()->intended(route('superadmin.user.kelola-user'));
    }

    public function render()
    {
        return view('livewire.super-admin.user.edit-user')->extends('layouts.app');
    }
}
