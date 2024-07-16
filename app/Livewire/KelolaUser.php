<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class KelolaUser extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.kelola-user')->extends('layouts.app');
    }
}
