<?php

namespace App\Livewire\SuperAdmin\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class KelolaRole extends Component
{

    use LivewireAlert;
    public $data;
    public $roleId;


    public function confirmDelete($roleId)
    {
        $this->roleId = $roleId;
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
        if ($this->roleId) {
            $this->deletePermission($this->roleId);
        }
    }

    public function deletePermission($roleId)
    {
        Role::find($roleId)?->delete();

        $this->alert('success', 'Permission deleted successfully.');
    }

    public function render()
    {
        $this->data = Role::orderBy('id', 'desc')->get();
        return view('livewire.super-admin.role.kelola-role')->extends('layouts.app');
    }
}
