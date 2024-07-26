<?php


namespace App\Livewire\SuperAdmin\Product;

use Livewire\Component;

class Product extends Component
{
    public function render()
    {
        return view('livewire.super-admin.product/product')->extends('layouts.app');
    }
}
