{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css')}}">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"> Kanaya Auliya</a>
        
          <div class="collapse navbar-collapse" id="navbarText">
          </nav>
          </body>
          @yield('naya')
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="navbar navbar-expand-lg navbar-dark bg-info text-white">
    <div class="container fluid">
        Kanaya Auliya 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar" aria-label="toogle navigation" aria-controls="#mynavbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item">
                    <a href="siswa" class="nav-link {{ Request::segment(1)=='siswa'?'active':'' }}">Siswa</a>
                </li>
                <li class="nav-item">
                    <a href="guru" class="nav-link {{ Request::segment(1)=='guru'?'active':'' }}">Guru</a>
                </li>
                <li class="nav-item">
                    <a href="kelas" class="nav-link {{ Request::segment(1)=='kelas'?'active':'' }}">Kelas</a>
                </li> --}}
                <li class="nav-item">
                    <a href="user/logout" class="nav-link">keluar</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container mt-4">
@yield('naya')
</div>
</body>
</html>
<script src="{{ asset ('js/bootstrap.min.js') }}"></script>
