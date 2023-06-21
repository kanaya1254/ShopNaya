<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portopolio | Kanaya</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <style>
      body {
        font-family: 'Times New Roman', Times, serif;
        background-color: lightseagreen;
      }
      .form-label>span{
        color: Dark Cyan;
      }
      </style>
</head>
<body>
  
  <!--Awal Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#" style="font-family: cursive;"> Kanaya</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="form_produk">Home</a>
          </li> --}}
        </ul>       
      </div>
    </div>
  </nav>
  <!--Akhir Navbar-->
  
  <!--Awal Home-->
  
  <!--Akhir Home-->
  <section id="home">
    <div class="container p-5">
      <div class="row justify-content-center">
        <div class="col-md-6">  
             <img src="/storage/{{ $produk->foto}}" alt="" srcset="" width="500" height="500">
        </div>
        <div class="col-md-6">
            <h1 class="text-center text-white" style="background-color: ;">{{ $produk->nama }}</h1>
            <h5 class="card-text text-center mt-3">Rp.{{number_format($produk->harga)}}</h5> 
            <p class="pt-5">{{$produk->deskripsi}}</p> 
            <button type="button"class="btn btn-outline-light mt-5">
              <a href="https://api.whatsapp.com/send?phone=6289513183116&text=%22halloo%22">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                </svg>
                Beli Sekarang
              </a>   
            </button>
        </div>
      </div>
    </div>
  </section>
                {{-- <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/> --}}
    <div class="container">
    <div class="container-fluid">
      <footer class="py-3 my-3 border-top">
        <p class="text-center">Copyright  &copy; Kanaya <a href ="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">2023</a></p>
      </footer>
    </div>
</body>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</html>