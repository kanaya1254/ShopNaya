@extends('navbar')
@section('naya')

  <section>
      <div class="container pt-4 px-1">
        <div class="row justify-content-center">
          <div class="col col-md-4 mb-5 text-center">
            @foreach ( $produk as $item )
            <div class="card mt-5 ms-4" style="width: 18rem">
              <img src="/storage/{{ $item->foto }}" class="card-img-top" alt="Shop">
              <div class="card-body text-center">
                <div class="produk">
                  <h1 class="card-title">{{$item->nama}}</h1>
                  <p class="card-text">Rp. {{ number_format($item->harga)}}</p>
                  <p class="card-text">{{$item->deskripsi}}</p>
                  <a href="produk/detail/{{ $item->id_produk }}" class="btn btn-outline-primary mt-auto">View Option</a>
                </div>
              </div>        
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <footer class="py-3 my-3 border-top">
        <p class="text-center">Copyright  &copy; Kanaya Auliya <a href ="https://www.instagram.com/xxx" target="_blank" class="fw-bold text-decoration-none">2023</a></p>
      </footer>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
@endsection