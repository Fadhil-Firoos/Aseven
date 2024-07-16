<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\User;

class KelolaUser extends Component
{
    public $dataUsers;

    public function delete($id){
        $user = User::find($id);
        $user->delete();
    }

    public function render()
    {
        $this->dataUsers = User::with('roles')->orderBy('id','desc')->get();
        return view('livewire.user.kelola-user')->extends('layouts.app');
    }
}
