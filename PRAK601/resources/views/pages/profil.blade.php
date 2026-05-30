@extends('layout.template')

@section('content')
<h1 class="title is-3 has-text-white mb-5"><i class="fa-solid fa-address-card mr-2"></i> Profil</h1>

<div class="custom-box p-6 mb-6">
    <div class="columns is-vcentered">
        <div class="column is-3 has-text-centered">
            <figure class="image is-128x128 is-inline-block">
                <img class="is-rounded" src="{{ $profil['gambar'] }}" alt="Profil" style="object-fit: cover; width: 100%; height: 100%;">
            </figure>
        </div>
        <div class="column is-9">
            <table class="table is-fullwidth has-background-transparent has-text-white">
                <tbody>
                    <tr><td class="has-text-grey-light" width="150">Nama Lengkap</td><td class="has-text-weight-bold">{{ $profil['nama'] }}</td></tr>
                    <tr><td class="has-text-grey-light">NIM</td><td>{{ $profil['nim'] }}</td></tr>
                    <tr><td class="has-text-grey-light">Asal Prodi</td><td>{{ $profil['prodi'] }}</td></tr>
                    <tr><td class="has-text-grey-light">Hobi</td><td>{{ $profil['hobi'] }}</td></tr>
                    <tr><td class="has-text-grey-light">Skill</td><td><span class="tag is-info is-light">{{ $profil['skill'] }}</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<h2 class="title is-4 has-text-white mb-5"><i class="fa-solid fa-star mr-2 has-text-warning"></i> Pengalaman Paling Berkesan</h2>

<div class="columns is-multiline">
    @foreach ($pengalaman as $p)
    <div class="column is-6">
        <div class="custom-box p-5 h-100 is-flex is-flex-direction-column">
            <h3 class="title is-5 has-text-white mb-2">{{ $p['judul'] }}</h3>
            <p class="subtitle is-7 has-text-primary mb-3"><i class="fa-regular fa-clock mr-1"></i> {{ $p['waktu'] }}</p>
            <p class="has-text-grey-light mb-4 is-flex-grow-1" style="font-size: 0.9rem;">{{ Str::limit($p['desc'], 80) }}</p>
            <div>
                <a href="{{ url('/detail/' . $p['id']) }}" class="button is-small is-primary is-outlined">Baca Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection