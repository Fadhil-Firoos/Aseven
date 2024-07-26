<?php

namespace App\Livewire\SuperAdmin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateRole extends Component
{
    use LivewireAlert;
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|unique:roles,name',
        ];
    }
    public function store()
    {
        $validate = $this->validate();

        Role::create($validate);

        $this->alert('success', 'Role created successfully');

        return redirect()->intended(route('superadmin.role.kelola-role'));
    }
    public function render()
    {
        return view('livewire.super-admin.role.create-role')->extends('layouts.app');
    }
}
