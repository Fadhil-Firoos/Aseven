<?php

namespace App\Livewire\SuperAdmin\User;

use Livewire\Component;
use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class KelolaUser extends Component
{
    use LivewireAlert;
    public $dataUsers;
    public $userId;

    public function confirmDelete($userId)
    {
        $this->userId = $userId;
        $this->alert('warning', 'Apakah Anda yakin ingin menghapus izin ini?', [
            'position' => 'center',
            'toast' => false,
            'showConfirmButton' => true,
            'confirmButtonText' =>  'Ya, Hapus',
            'showCancelButton' => true,
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'deleteConfirmed',
            'onDismissed' => '',
        ]);
    }

    protected $listeners = ['deleteConfirmed' => 'handleConfirm'];

    public function handleConfirm()
    {
        if ($this->userId) {
            $this->deletePermission($this->userId);
        }
    }

    public function deletePermission($permissionId)
    {
        User::find($permissionId)?->delete();

        $this->alert('success', 'Permission deleted successfully.');
    }

    public function render()
    {
        if (Auth::user()->can('read user')) {
            $this->dataUsers = User::with('roles')
            ->whereDoesntHave('roles', function ($query) {
                $query->where('name', 'superadmin');
            })
            ->orderBy('id', 'desc')
            ->get();
        } else {
            abort(403, 'Unauthorized action.');
        }

        return view('livewire.super-admin.user.kelola-user')->extends('layouts.app');
    }
}
