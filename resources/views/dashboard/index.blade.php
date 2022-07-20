@extends('dashboard.partials.dashboard')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Selamat Datang @if (Auth::User()->role_id == 1)
                    Admin
                @else
                    {{ Auth::User()->name }}
                @endif
            </h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
    </main>
@endsection
