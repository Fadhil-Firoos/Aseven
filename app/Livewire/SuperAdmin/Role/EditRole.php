<?php

namespace App\Livewire\SuperAdmin\Role;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Spatie\Permission\Models\Role;

class EditRole extends Component
{
    use LivewireAlert;
    public $name;
    public $roleId;

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255|unique:roles,name,' . $this->roleId,
        ];
    }
    public function mount(Role $role)
    {
        $this->name = $role->name;
        $this->roleId = $role->id;
    }

    public function update()
    {

        $validated = $this->validate();

        $user = Role::find($this->roleId);
        $user->update($validated);

        $this->reset([
            'name',
        ]);


        $this->alert('success', 'Role updated successfully!');
        return redirect()->intended(route('superadmin.role.kelola-role'));
    }
    public function render()
    {
        return view('livewire.super-admin.role.edit-role')->extends('layouts.app');
    }
}
