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
    <script>
    function hapusBarang(id) {
        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus barang ini?");

        if (konfirmasi) {
            // Menggunakan JavaScript untuk melakukan pengalihan ke URL penghapusan dengan metode DELETE
            var form = document.createElement("form");
            form.method = "POST";
            form.action = "{{ url('/hapusBarang') }}/" + id;
            form.innerHTML = '<input type="hidden" name="_method" value="DELETE">@csrf';
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>
    </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <form action="{{ route('searchtoko') }}" method="GET">
    <ul class="navbar-nav mx-auto">
        <div class="input-group">
            <input type="text" class="form-control" style="width: 657px; border-radius: 30px;" placeholder="Search.." name="searchtoko" value="{{ request('searchtoko') }}">
            <button class="btn btn-light btn" style="border-radius: 30px;" type="submit">Search</button>
        </div>
    </ul>
</form>
        
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item" style="margin-top: 15px;">
            <div style="display: flex; align-items: center; margin-right: 10px;">
            <a href="{{ route('barang.profile') }}" class="fas fa-user"></a>

 
                <!-- <i class="fas fa-bell" style="margin-left: 15px;"></i> Icon Notifikasi -->
            </div>
          </li>
          
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Selamat Datang, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                <li><hr class="dropdown-divider"></li>
                <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
              </ul>
            </li>
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

<a class="nav-link" style="display: block; margin-left: 120px;">
        Selamat Datang Di Toko {{ auth()->user()->name }}
</a>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-4 mb-3">
        <div class="card" style="height: 300px; width: 700px; background-color: #D15D5D4D; margin-top: 10px;">
            <div class="row">
                @foreach ($barangs as $barang)
                
                <div class="col-md-7">
                    <img src="{{ $barang->gambar }}" class="card-img-top" alt="">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p style="margin-bottom: 20px; margin-top: 90px; font-weight: bold;">
                                <small class="text-body-secondary">    
                                {{ $barang->nama_barang }} <a href="" class=""></a>
                                </small>
                            </p>
                            <p style="margin-bottom: 143px; font-weight: bold;">
                                <small class="text-body-secondary">    
                                    Rp. {{ $barang->harga }} <a href="" class=""></a>
                                </small>
                                <a href="{{ route('barang.detail') }}">
                                <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                                Lihat Detail
                                </button>
                                </a>
                            </p>
                            
                        
                            <p class="card-text"></p>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
</div> -->
<div class="container">
    <div class="row">
      <div class="col-md-4 mb-3">
          @foreach ($barangs as $barang)
            <div class="card" style="height: 300px; width: 300px; background-color: #D15D5D4D; margin-top: 10px;">
                <div class="row">
                    <div class="col-md-7">
                    <img src="{{ asset('storage/' . $barang->gambar) }}" class="card-img-top" alt="{{ $barang->nama_barang }}" style="margin-top: 50px;">

                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p style="margin-bottom: 20px; margin-top: 90px; font-weight: bold;">
                                <small class="text-body-secondary">
                                    {{ $barang->nama_barang }} <a href="" class=""></a>
                                </small>
                            </p>
                            <p style="margin-bottom: 143px; font-weight: bold;">
                                <small class="text-body-secondary">
                                    Rp. {{ $barang->harga }} <a href="" class=""></a>
                                </small>
                                <a href="{{ route('barang.detail', ['nama_barang' => $barang->nama_barang]) }}" onclick="ubahNamaBarangDetail('{{ $barang->nama_barang }}')">
                                    <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
                                        Lihat Detail
                                    </button>
                                </a>
                                <button type="button" class="btn btn-danger" style="background-color: #D15D5D; border-radius: 50px;" onclick="hapusBarang('{{ $barang->id }}')">
                                    Hapus
                                </button>
                            </p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>









<!-- <div class="container">
    <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color: rgba
            (0, 0, 0, 0.7)"><a href="http://localhost/coba-laravel/public/blog?category=" class=" text-white text-decoration-none"></a>
            </div>
            <img src="https://source.unsplash.com/500x400?" 
            class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"></h5>
             <p>
                <small class="text-body-secondary">    
                    By. <a href="http://localhost/coba-laravel/public/blog?author=" class="text-decoration-none">
                    </a> 
                </small>
             </p>
            <p class="card-text"></p>
            <a href="http://localhost/coba-laravel/public/posts/" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>

    </div>
</div> -->




<div class="container mt-4">
    @yield('container')
  </div>

  <div class="fixed-bottom" style="position: fixed; width: 100%; text-align: right; padding: 20px;">
    <a href="{{ route('barang.tambah') }}">
        <button type="button" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
            + Tambah Barang
        </button>
    </a>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

  
