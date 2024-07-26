<?php

namespace App\Livewire\SuperAdmin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRole extends Component
{
    public $name;

    public function mount(Role $role)
    {
        $this->name = $role->name;
    }
    public function render()
    {
        return view('livewire.super-admin.role.show-role')->extends('layouts.app');
    }
}
