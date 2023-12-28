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
    
    <ul class="navbar-nav">
    <div class="input-group d-flex align-items-start ms-0">
        <a href="{{ route('dashboard') }}">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h4 class="ml-2">Profile</h4>
    </div>
</ul>
</nav>
<div class="d-flex align-items-center justify-content-center" style="margin-top: 20px;">
    <i class="fas fa-user-circle ml-2" style="font-size: 30px;"></i>
</div>
<div class="container ">
    <div class="row mx-auto justify-content-center">
            <div class="col-md-4 mb-3">
                
                        <div class="card" style="width: 300px; background-color: #D15D5D4D; margin-top: 10px;">
                            <div style="display: flex; height: 300px;">
                                <div style="flex: 7;">
                                
                                </div>
                                <div style="flex: 5; padding: 10px;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"></h5>
                                        <p style="margin-bottom: 20px; margin-top: 10px; font-weight: bold;">
                                            <small class="text-body-secondary">
                                                Nama: {{ Auth::user()->name }}
                                            </small>
                                        </p>
                                        <p style="margin-bottom: 20px; font-weight: bold;">
                                            <small class="text-body-secondary">
                                                Email: {{ Auth::user()->email }}
                                            </small>
                                        </p>
                                        <p style="margin-bottom: 20px; font-weight: bold;">
                                            <small class="text-body-secondary">
                                                
                                            </small>
                                        </p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    
            </div>
        </div>
</div>
<div class="text-center">
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-primary" style="background-color: #D15D5D; border-radius: 50px;">
            Logout
        </button>
    </form>
</div>



