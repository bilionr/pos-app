<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">

      {{-- Form Create --}}
      <div class="card-body pb-5">
        <h1 class="h3 pb-3 mb-3 border-bottom">Form Create Product</h1>
        
        @if (session()->has('message'))
          <div class="alert alert-success">
            {{  session('message') }}
          </div>
        @endif
        
        @if ($updateProduct)
          @livewire("product.update")
        @else
          @livewire('product.create')
        @endif

      </div>

      <hr class="mt-3">
      {{-- Show Data --}}
      <div class=:card-body border-top pb-5>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand">List Product</a>
            <div class="d-flex">
              <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            </div>
          </div>
        </nav>
        
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kode</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
                <tr>
                  <th scope="row"> {{ $loop->iteration }} </th>
                  <td>{{ $product->nama_product }}</td>
                  <td>{{ $product->kode_product }}</td>
                  <td>Rp. {{ number_format($product->harga_product)}}</td>
                  <td>
                    <button wire:click="getProduct({{ $product->id }})" class="btn btn-warning btn-sm">EDIT</button>
                    <button class="btn btn-danger btn-sm">HAPUS</button>
                  </td> 
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
</div>
