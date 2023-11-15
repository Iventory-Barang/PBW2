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
        <ul class="navbar-nav mx-auto">
            <div class="input-group">
              <input type="text" class="form-control" style="width: 657px; border-radius: 30px;" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-light btn" style="border-radius: 30px;" type="submit">Search</button>
            </div>
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
<h3 style="display: block; margin-left: 100px; font-weight: bold; ">
    <a href="{{ route('dashboard') }}" style="margin-right: 10px; text-decoration: none;">
            <i class="fas fa-arrow-left" style="font-size: 0.7em;"></i>
        </a>
Warung bu titik
</h3>
<a class="nav-link" style="display: block; margin-left: 120px;">
        Selamat Datang {{ auth()->user()->name }}
</a>
<div class="container">
    <div class="row">
        <div class="col-md-4 mb-3">
        <div class="card" style="height: 300px; width: 700px; background-color: #D15D5D4D; margin-top: 10px;">
            <div class="row">
                <div class="col-md-7">
                    <img src="https://source.unsplash.com/500x300?" class="card-img-top" alt="">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p style="margin-bottom: 1px; font-weight: bold;">
                            <small class="text-body-secondary">    
                                Warung buk titik <a href="" class=""></a>
                            </small>
                        </p>
                        <p style="margin-bottom: 1px; font-weight: bold;">
                            <small class="text-body-secondary">    
                                Gate 1 Bundaran, Telkom University <a href="" class=""></a>
                            </small>
                        </p>
                        <p class="card-text"></p>
                        <p style="margin-bottom: 0px;">Indomie goreng</p>
                        <p style="margin-bottom: 0px;">Harga: Rp. 3500</p>
                        <p style="margin-bottom: 0px;">Stok: 5</p>
                        <p style="margin-bottom: 0px;">Terjual: 15</p>
                    </div>
                </div>
            </div>
          </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

  
