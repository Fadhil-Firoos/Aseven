<?php

namespace App\Livewire\SuperAdmin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\DB;

class PermissionRole extends Component
{
    use LivewireAlert;
    public $dataPermission;
    public $roleName;
    public $roleId;
    public $selectedPermission = [];
    public $permissionHasRole;
    public function mount(Role $role)
    {
        $this->roleName = $role->name;
        $this->roleId = $role->id;
        $this->dataPermission = Permission::all();
        $this->permissionHasRole = DB::table('role_has_permissions')
        ->where('role_id', $role->id)
        ->pluck('permission_id')
        ->all();
    }

    public function save($selectedPermissions)
    {
        $role = Role::where('id', $this->roleId)->first();
        $permissions = Permission::whereIn('id', $selectedPermissions)->pluck('id')->toArray();

        $role->syncPermissions($permissions);

        $this->alert('success', 'Permission sync to role successfully!');
        return redirect()->intended(route('superadmin.role.kelola-role'));
    }
    public function render()
    {
        return view('livewire.super-admin.role.permission-role')->extends('layouts.app');
    }
}
