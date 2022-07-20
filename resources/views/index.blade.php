@extends('partials.home')
@section('body')
    <div class="container pt-5">
        <div class="col-lg">
            <div class="card mt-10">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row featurette">
                                <h1 class="display-5 text-dark"> Selamat Datang di <br>Pendaftaran Kursus <br>
                                    <strong>Universitas
                                        Jewepe</strong>
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center">
                            <img src="/images/web-img.png" class="img-fluid rounded" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center mt-10">Pilihan Kursus</h1>
        <!-- content -->
        {{-- <div class="row">
            <h1 class="pt-4">Produk Terbaru</h1>
            @if ($produk->count())
                @foreach ($produk as $pd)
                    <div class="col-lg-4">
                        <div class="card mt-4">
                            <img src="{{ '/storage/produk/' . $pd->gambar }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $pd->nama_barang }}</p>
                                <p class="card-text">Rp. {{ $pd->harga }},-</p>
                                <div class="d-grid gap-2">
                                    <a href="/produkDetail/{{ $pd->id }}" class="btn btn-primary">
                                        <i class="bi bi-cart"></i> Pilih
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-center mt-5">Belum ada produk</h1>
            @endif
        </div> --}}
    </div>

    <!-- end content -->
@endsection
