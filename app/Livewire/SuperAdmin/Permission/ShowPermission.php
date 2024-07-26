<?php

namespace App\Livewire\SuperAdmin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class ShowPermission extends Component
{
    public $name;
    public function mount(Permission $permission)
    {
        $this->name = $permission->name;
    }
    public function render()
    {
        return view('livewire.super-admin.permission.show-permission')->extends('layouts.app');
    }
}
