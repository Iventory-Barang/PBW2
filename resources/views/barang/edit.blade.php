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
    <a href="{{ route('barang.detail') }}" style="margin-right: 10px; text-decoration: none; display: flex; align-items: center;">
    <i class="fas fa-arrow-left" style="font-size: 0.7em; color: black; margin-right: 10px;"></i>
</a>

        Edit Data Barang
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
<!-- <form method="POST" action="{{ route('tambah') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3" style="margin-top: 80px;">
                <div class="card" style="height: 450px; width: 1000px; background-color: #D15D5D4D; margin-top: 10px; margin: 0 auto;">
                    <div class="row">
                        <div class="col-md-5" style="margin-top: 50px;">
                            <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Harga:</p>
                                <div style="flex: 1; position: relative; margin-left: 100px;">
                                    <input type="text" name="harga" style="width: 300%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div>
                            <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Tambah Gambar:</p>
                                <div style="flex: 1; position: relative; margin-left: 30px;">
                                    <input type="file" name="gambar" id="logoInput" accept="image/*" style="width: 100%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div>
                            <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Jumlah Stok:</p>
                                <div style="flex: 1; position: relative; margin-left: 80px;">
                                    <input type="text" name="jumlah_stok" style="width: 100%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom" style="position: fixed; width: 100%; text-align: center; padding: 20px; display: flex; justify-content: center;">
            <button type="submit" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                Simpan
            </button>
        </div>
    </div>
</form> -->
@php
    // Retrieve the product details from the session
    $barangDetails = session('barangDetails');
@endphp
<form method="POST" action="{{ route('barang.update', $barang->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3" style="margin-top: 80px;">
                <div class="card" style="height: 450px; width: 1000px; background-color: #D15D5D4D; margin-top: 10px; margin: 0 auto;">
                    <div class="row">
                        <div class="col-md-5" style="margin-top: 50px;">
                            <!-- <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Harga:</p>
                                <div style="flex: 1; position: relative; margin-left: 100px;">
                                    <input type="text" name="harga" value="{{ old('harga', $barang->harga) }}" style="width: 300%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div> -->
                            <div class="card-body" style="display: flex; align-items: center;">
        <p style="margin-right: 16px; margin-bottom: 0;">Harga:</p>
        <div style="flex: 1; position: relative; margin-left: 100px;">
            <input type="text" name="harga" value="{{ $barang->harga }}" style="width: 300%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
        </div>
    </div>
                            <!-- If you want to allow updating the image, uncomment the following section -->
                            <!-- <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Tambah Gambar:</p>
                                <div style="flex: 1; position: relative; margin-left: 30px;">
                                    <input type="file" name="gambar" id="logoInput" accept="image/*" style="width: 100%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div> -->
                            <div class="card-body" style="display: flex; align-items: center;">
        <p style="margin-right: 16px; margin-bottom: 0;">Jumlah Stok:</p>
        <div style="flex: 1; position: relative; margin-left: 100px;">
            <input type="text" name="jumlah_stok" value="{{ $barang->jumlah_stok }}" style="width: 300%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
        </div>
    </div>
                            <!-- <div class="card-body" style="display: flex; align-items: center;">
                                <p style="margin-right: 16px; margin-bottom: 0;">Jumlah Stok:</p>
                                <div style="flex: 1; position: relative; margin-left: 80px;">
                                    <input type="text" name="jumlah_stok" value="{{ old('jumlah_stok', $barang->jumlah_stok) }}" style="width: 100%; padding: 8px; border: 3px solid #fff; box-sizing: border-box; border-radius: 16px;">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom" style="position: fixed; width: 100%; text-align: center; padding: 20px; display: flex; justify-content: center;">
            <button type="submit" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                Simpan
            </button>
        </div>
    </div>
</form>
<!-- @php
    // Hapus data barang dari sesi setelah digunakan
    session()->forget('barang');
@endphp -->

</div>
