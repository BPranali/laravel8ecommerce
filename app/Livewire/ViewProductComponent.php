<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ViewProductComponent extends Component
{
    public $slug;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function render()
    {
        $products = Product::where('slug',$this->slug)->get()->unique('slug');
        $product = Product::all();
        return view('livewire.view-product-component', compact('products','product'))->layout('layouts.base');
    }
}
