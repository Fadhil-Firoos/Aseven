<?php

namespace App\Livewire\SuperAdmin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPermission extends Component
{
    use LivewireAlert;
    public $name;
    public $permissionId;

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255|unique:permissions,name,' . $this->permissionId,
        ];
    }
    public function mount(Permission $permission)
    {
        $this->name = $permission->name;
        $this->permissionId = $permission->id;
    }

    public function update()
    {

        $validated = $this->validate();

        $user = Permission::find($this->permissionId);
        $user->update($validated);

        $this->reset([
            'name',
        ]);


        $this->alert('success', 'Permission updated successfully!');
        return redirect()->intended(route('superadmin.permission.kelola-permission'));
    }

    public function render()
    {
        return view('livewire.super-admin.permission.edit-permission')->extends('layouts.app');
    }
}
