<?php

namespace App\Livewire\SuperAdmin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreatePermission extends Component
{
    use LivewireAlert;
    public $name;
    public $message;

    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255|unique:permissions,name',
        ];
    }
    public function store()
    {

        $validated = $this->validate();

        Permission::create($validated);

        $this->reset('name');

        $this->alert('success', 'Permission created successfully!');
    }
    public function render()
    {
        return view('livewire.super-admin.permission.create-permission')->extends('layouts.app');
    }
}
