@extends('layout.template')

@section('content')
<div class="hero custom-box is-medium has-text-centered p-6 mt-6">
    <div class="hero-body">
        <i class="fa-solid fa-laptop-code has-text-primary mb-4" style="font-size: 4rem;"></i>
        <h1 class="title is-2 has-text-white mb-4">Selamat Datang di Portofolio Praktikum</h1>
        <p class="subtitle is-4 has-text-grey-light mb-6">
            Website ini dikembangkan menggunakan Laravel oleh <br>
            <strong class="has-text-white is-size-3">{{ $profil['nama'] }}</strong> <br>
            <span class="tag is-primary is-medium mt-3 is-rounded">NIM: {{ $profil['nim'] }}</span>
        </p>
        <a href="{{ url('/profil') }}" class="button is-primary is-medium has-text-weight-semibold">
            <i class="fa-solid fa-user-astronaut mr-2"></i> Lihat Profil Lengkap
        </a>
    </div>
</div>
@endsection