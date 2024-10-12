<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $product = Product::all();
        return view('livewire.home-component', compact('product'))->layout('layouts.base');
    }
}
