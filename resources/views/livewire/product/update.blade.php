<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form class="row g-3 mt-3" wire:submit.prevent="update">
      <input type="hidden" wire:model="productId">

      <div class="col-12">
        <label for="disabledTextInput" class="form-label">Nama Product</label>
        <input type="text" class="form-control @error('nama_product') is-invalid @enderror" wire:model="nama_product" type="text" id=disabledTextInput>
        @error('nama_product') <div class="invalid-feedback">{{ $message }} @enderror
      </div>
            
        
      <div class="mb-3">
        <label for="exampleKodeProduct1" class="form-label">Kode_product</label>
        <input type="text" wire:model="kode_product" class="form-control @error('kode_product') is-invalid @enderror" id="exampleKodeProduct1">
        @error('kode_product') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
          

      <div class="mb-3">
        <label for="exampleHarga1" class="form-label">Harga</label>
        <input type="number" wire:model="harga_product" class="form-control @error('harga_product') is-invalid @enderror" id="exampleHarga1">
        @error('harga_product') <div class="invalid-feedback">{{ $message }}</div> @enderror
      </div>
          

      <div class="col-12 pt-2">
        <button type="submit" class="btn btn-primary w-100">Update</button>
      </div>
        

    </form>
</div>
