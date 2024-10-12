<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class EditProductComponent extends Component
{
    use WithFileUploads;

    public $product_slug;
    public $product_id;
    public $name;
    public $slug;
    public $price;
    public $description;
    public $image;
    public $images;
    public $newimage;

    public function mount($product_slug)
    {
        $this->product_slug = $product_slug;
        $product = Product::where('slug', $product_slug)->first();
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->image = $product->image;
        $this->images = explode(',', $product->images);
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->price = $this->price;
        $product->description = $this->description;
        if ($this->newimage) {
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('product', $imageName);
            $product->image = $imageName;
        }
        $product->save();
        // $this->reset();
        Session::flash('message', 'product Update Successfully....'); 
        return redirect()->route('admin.allproduct');
    }


    public function render()
    {
        return view('livewire.admin.edit-product-component')->layout('layouts.admin');
    }
}
