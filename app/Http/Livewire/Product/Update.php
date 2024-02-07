<?php

namespace App\Http\Livewire\Product;

use Livewire\Component;

class Update extends Component
{
    public $productId;
    public $nama_product;
    public $kode_product;
    public $harga_product;


    protected $listeners = ['updateProduct'];

    protected $rules = [
        'nama_product' => 'required',
        'kode_product' => 'required',
        'harga_product' => 'required'
    ];

    public function updateProduct($product){
        $this->productId = $product['id'];
        $this->nama_product = $product['nama_product'];
        $this->kode_product = $product['kode_product'];
        $this->harga_product = $product['harga_product'];
    }

    public function update(){

    }

    public function render()
    {
        return view('livewire.product.update');
    }
}
