<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sewa PlayStation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">SEWA PLAYSTATION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <button class="btn btn-outline-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#wishlistModal" onclick="tampilkanwishlist()">
        Wishlist (<span id="wishlist-count">0</span>)
      </button>
      <button id="btn-theme" class="btn btn-outline-light btn-sm me-2">Mode Gelap</button>
      
      @if(session()->has('user'))
        <span class="navbar-text text-light me-2">Halo, {{ session('user') }}</span>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger btn-sm">Logout</a>
      @else
        <a href="{{ route('login') }}" class="btn btn-outline-success btn-sm">Login</a>
      @endif
      
    </div>
  </div>
</nav>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/PlayStation5.jpg') }}" class="d-block w-100" alt="PlayStation 5">
      <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3 rounded">
        <h5>PlayStation 5</h5>
        <p>Rasakan pengalaman gaming generasi terbaru dengan PS5.</p>
      </div>
    </div>
  </div>
</div>

<div class="container my-5">
  <div class="row text-center shadow-sm">
    <div class="col-md-4 mb-3">
      <div class="p-4 text-white" style="background-color: #00AC9F;">
        <h1>4</h1>
        <p>Produk</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="p-4 text-white" style="background-color: #00AC9F;">
        <h1>4</h1>
        <p>Kategori</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="p-4 text-white" style="background-color: #00AC9F;">
        <h1>17</h1>
        <p>Tersewa</p>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5">
 <div class="d-flex justify-content-between mb-3">
    <h3 class="mb-4">Daftar PlayStation</h3>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
        data-bs-target="#tambahProdukModal">Tambah Produk</button>
</div>
  
  <div class="row" id="container-barang">
    @foreach ($products as $item)
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <div class="card-body">
                <h5 class="card-title mt-2">{{ $item->product_name }}</h5>
                <span class="badge bg-secondary mb-2">{{$item->category->category_name}}</span>
                <p class="card-text text-danger">Rp {{ number_format($item->product_price, 0, ',', '.') }}</p>
                <p class="card-text">Stok: {{ $item->product_stock }}</p>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-detail w-50 me-2">Sewa</button>
                    <button class="btn btn-outline-danger btn-wishlist w-50">Wishlist</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
  </div>
</div>
<div class="modal fade" id="tambahProdukModal" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tambahProdukModalLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="product_name"
                            name="product_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-control" id="category_id" name="category_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach ($category as $cat)
                                <option value="{{ $cat->category_id }}">
                                    {{ $cat->category_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="product_price" class="form-label">Harga Produk</label>
                        <input type="number" class="form-control" id="product_price"
                            name="product_price" required>
                    </div>

                    <div class="mb-3">
                        <label for="product_stock" class="form-label">Stok Produk</label>
                        <input type="number" class="form-control" id="product_stock"
                            name="product_stock" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                        data-bs-dismiss="modal">Kembali</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-1"></i>Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="wishlistModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Daftar Wishlist Saya</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group" id="daftar-wishlist"></ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger" onclick="hapuswishlist()">Kosongkan</button>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <p class="mb-0">
    © 162023001 - Muhamad Iqbal Putra P | Sewa PlayStation
  </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>