<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;
use App\Models\Product;


class Index extends Component
{

    protected $listeners = ['StoreProduct'];
    public $updateProduct = false;

    function getProduct($id){
        $this->updateProduct = true;
        $product = Product::find($id);
        $this->emit('updateProduct', $product);
    }

    public function render()
    {
        return view('livewire.product.index', [
            'products' => Product::orderBy('created_at', 'desc')->get()
        ]);
    }

    public function StoreProduct($product){
        
    }

}
