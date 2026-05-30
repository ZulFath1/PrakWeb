@extends('layout.template')

@section('content')
<div class="mb-4">
    <a href="{{ url('/profil') }}" class="has-text-grey-light action-link">
        <i class="fa-solid fa-arrow-left mr-2"></i> Kembali ke Profil
    </a>
</div>

<div class="custom-box p-6">
    <h1 class="title is-3 has-text-white mb-2">{{ $detail->judul }}</h1>
        <p class="subtitle is-6 has-text-primary mb-5"><i class="fa-regular fa-calendar-check mr-2"></i> Waktu Pelaksanaan: {{ $detail->waktu }}</p>
    
    <figure class="image mb-6" style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1);">
        <img src="{{ asset($detail->gambar) }}" alt="Dokumentasi">
    </figure>
    
    <div class="content has-text-grey-light">
        <h4 class="has-text-white">Deskripsi Kegiatan</h4>
        <p>{{ $detail->desc }}</p>
        
        <h4 class="has-text-white mt-5">Kesan yang Dirasakan</h4>
        <article class="message is-dark">
            <div class="message-body has-text-grey-light" style="border-left-color: hsl(171, 100%, 41%);">
                "{{ $detail->kesan }}"
            </div>
        </article>
    </div>
</div>
@endsection