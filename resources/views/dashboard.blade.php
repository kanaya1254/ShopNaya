<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    
   <div class="navbar navbar-expand-lg navbar-dark bg-info text-white ">
        <div class="container-fluid">
            <p class="navbar-brand">Menjual Jasa</p>
            <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#tania" aria-label="toggle navigation" aria-controls="tania" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="tania">
                <ul  class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="produk" class="nav-link {{Request::segment(1)=='produk'?'active':''}}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a href="admin/logout" class="nav-link ">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
   </div> 
   <div class="container mt-4">
            @yield('naya')
        </div>
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>

