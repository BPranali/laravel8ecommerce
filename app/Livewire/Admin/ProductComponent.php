<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class ProductComponent extends Component
{
    public function remove($id)

    {
        $products = Product::find($id);
        $products->delete();
        Session::flash('message', 'products Delete Successfully....'); 
        return redirect()->route('admin.allproduct');

    }

    public function render()
    {
        $product=Product::all();
        return view('livewire.admin.product-component',compact('product'))->layout('layouts.admin');
    }
}
