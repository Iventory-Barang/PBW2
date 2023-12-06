<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My styles -->
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/home.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- {{-- Bootstrap icons --}} -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Iventory Barang</title>
    
    </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <h3 style="display: flex; align-items: center; font-weight: bold;">
    <a href="{{ route('dashboardtoko') }}" style="margin-right: 10px; text-decoration: none; display: flex; align-items: center;">
        <i class="fas fa-arrow-left" style="font-size: 0.7em; color: black; margin-right: 10px;"></i>
    </a>
    {{ isset($nama_barang) ? $nama_barang : 'Nama Barang Tidak Tersedia' }}
</h3>
        
        <ul class="navbar-nav ms-auto">
          @auth
          
              
          @else
          
          @endauth
        </ul>
        <!-- <div class="input-group">
        <input type="text" class="form-control" style="width: 657px; border-radius: 30px;" placeholder="Search.." name="search" value="{{ request('search') }}">
        <div class="input-group-append">
            <button class="btn btn-light" type="submit">Search</button>
        </div>
        </div> -->



    </div>
  </div>
</nav>
<br><br>
<!-- <img src="https://source.unsplash.com/400x300?" alt="Positioned Image" style="margin-bottom: 95px;"> -->
<!-- <div style="float: right; margin-left: 10px;">
    <div class="card" style="height: 300px; width: 700px; background-color: #D15D5D4D;">
        <div class="row">
            <div class="col-md-7">
                Your image tag goes here
            </div>
            <div class="col-md-6" style="text-align: left; font-weight: bold;">
                <div class="card-body" style="text-align: left;">
                    <h5 class="card-title"></h5>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            Garam Meja <a href="" class=""></a>
                        </small>
                    </p>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            Rp. 4000 <a href="" class=""></a>
                        </small>
                    </p>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            Stok: 10 <a href="" class=""></a>
                        </small>
                        <a href="{{ route('barang.edit') }}">
                                <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                                Edit Barang   
                                </button>
                                </a>
                    </p>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<img src="{{ asset('storage/' . $barang->gambar) }}" class="card-img-top" alt="{{ $barang->nama_barang }}" style="width: 500px; height: 300px;">
<div style="float: right; margin-left: 10px;">
    <div class="card" style="height: 300px; width: 700px; background-color: #D15D5D4D;">
        <div class="row">
            <div class="col-md-7">
                <!-- Your image tag goes here -->
            </div>
            <div class="col-md-6" style="text-align: left; font-weight: bold;">
                <div class="card-body" style="text-align: left;">
                    <h5 class="card-title"></h5>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            {{ $barang->nama_barang }} <a href="" class=""></a>
                        </small>
                    </p>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            Rp. {{ $barang->harga }} <a href="" class=""></a>
                        </small>
                    </p>
                    <p style="text-align: left; font-weight: bold;">
                        <small class="text-body-secondary">    
                            Stok: {{ $barang->jumlah_stok }} <a href="" class=""></a>
                        </small>
                        <!-- <a href="{{ route('barang.edit', ['id' => $barang->id, 'nama_barang' => $barang->nama_barang]) }}" onclick="ubahNamaBarangDetail('{{ $barang->nama_barang }}')">
                            <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                                Edit Barang   
                            </button>
                        </a> -->
                        <a href="{{ route('barang.edit', ['id' => $barang->id]) }}">
                        <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                            Edit Barang
                        </button>
                    </a>

                        @php
                            // Simpan data barang ke dalam sesi
                            session(['barang' => $barang]);
                        @endphp
                        @push('scripts')
    <script>
        function setBarangSession(barang) {
            // Use AJAX or other methods to send the product details to the server
            // In this example, I'm using a simple JavaScript session storage
            sessionStorage.setItem('barangDetails', JSON.stringify(barang));
        }
    </script>
@endpush
                    </p>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
</div>




