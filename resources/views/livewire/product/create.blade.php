<div>
    {{-- Be like water. --}}
    {{-- @if (session()->has('message'))
        <div class="alert alert-success">
            {{  session('message') }}
        </div>
    @endif --}}

    <form class="row g-3 mt-3" wire:submit.prevent="submit">
        {{-- <fieldset disabled> --}}
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nama Product</label>
            <input type="text" class="form-control @error('nama_product') is-invalid @enderror" wire:model="nama_product" type="text" id=disabledTextInput>
          </div>
            @error('nama_product') <div class="invalid-feedback">{{ $message }} @enderror
        
        {{-- </fieldset> --}}
          <div class="mb-3">
            <label for="exampleKodeProduct1" class="form-label">Kode_product</label>
            <input type="text" wire:model="kode_product" class="form-control @error('kode_product') is-invalid @enderror" id="exampleKodeProduct1">
          </div>
          @error('kode_product') <div class="invalid-feedback">{{ $message }}</div> @enderror

          <div class="mb-3">
            <label for="exampleHarga1" class="form-label">Harga</label>
            <input type="number" wire:model="harga_product" class="form-control @error('harga_product') is-invalid @enderror" id="exampleHarga1">
          </div>
          @error('harga_product') <div class="invalid-feedback">{{ $message }}</div> @enderror

          <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
