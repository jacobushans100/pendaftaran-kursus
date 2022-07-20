@extends('partials.home')
@section('body')
    <div class="container pt-5">
        <div class="col-lg">
            <div class="card mt-10">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row featurette">
                                <h1 class="display-5 text-dark"> Selamat Datang di <br>Wensite Pendaftaran Kursus <br>
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
        <div class="row">
            @if ($kursus->count())
                @foreach ($kursus as $pd)
                    <div class="col-lg-4">
                        <div class="card mt-4">
                            <div class="card-body text-center">
                                <p class="card-text">{{ $pd->nama_kursus }}</p>
                                <p class="card-text">{{ $pd->deskripsi_kursus }}</p>
                                <p class="card-text">Tanggal Pelaksanaan
                                    {{ \Carbon\Carbon::parse($pd->waktu)->format('d F Y') }}</p>
                                <p class="card-text">Lama Kursus {{ $pd->lama_kursus }} jam</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h1 class="text-center mt-5">Belum ada kursus</h1>
            @endif
        </div>
    </div>

    <!-- end content -->
@endsection
