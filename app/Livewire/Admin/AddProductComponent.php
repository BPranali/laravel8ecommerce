<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $price;
    public $description;
    public $image;
    public $images =[];

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function Addproduct()
{
    $this->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'image' => 'required|image|max:1024', // Ensures the image is valid and limits size to 1MB
    ]);

    $product = new Product();
    $product->name = $this->name;
    $product->slug = $this->slug;
    $product->price = $this->price;
    $product->description = $this->description;

    // Handle the image upload
    if ($this->image) {
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('product/', $imageName);
        $product->image = $imageName;
    }

    $product->save();

    // Reset form
    $this->reset();

    return redirect()->route('admin.dashboard');
}


    public function render()
    {
        return view('livewire.admin.add-product-component')->layout('layouts.admin');
    }
}
