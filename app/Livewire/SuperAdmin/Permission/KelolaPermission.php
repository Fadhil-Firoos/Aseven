<?php

namespace App\Livewire\SuperAdmin\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class KelolaPermission extends Component
{
    use LivewireAlert;
    public $data;
    public $permissionId;

    public function confirmDelete($permissionId)
    {
        $this->permissionId = $permissionId;
        $this->alert('warning', 'Apakah Anda yakin ingin menghapus izin ini?', [
            'position' => 'center', // Optional: set alert position
            'toast' => false,      // Optional: disable toast notification
            'showConfirmButton' => true,
            'confirmButtonText' =>  'Ya, Hapus',
            'showCancelButton' => true,
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'deleteConfirmed', // Call this method on confirmation
            'onDismissed' => '', // Optional: action on dismiss
        ]);
    }

    protected $listeners = ['deleteConfirmed' => 'handleConfirm'];

    public function handleConfirm()
    {
        if ($this->permissionId) {
            $this->deletePermission($this->permissionId);
        }
    }

    public function deletePermission($permissionId)
    {
        Permission::find($permissionId)?->delete();

        $this->alert('success', 'Permission deleted successfully.');
    }

    public function render()
    {
        $this->data = Permission::orderBy('id', 'desc')->get();

        return view('livewire.super-admin.permission.kelola-permission')->extends('layouts.app');
    }
}
