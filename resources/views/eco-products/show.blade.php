@extends('layouts.app')
@section('content')
<a href="{{ route('eco-products.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

@php
  $name = strtolower($ecoProduct->name);
  if(str_contains($name,'bamboo')) {
      $img = asset('images/bamboo.jpg');
      $cerita = 'Botol minum 500ml dari bambu alami + stainless steel 304 food grade. Tahan panas & dingin 12 jam. Cocok buat kampus.';
  } elseif(str_contains($name,'tote')) {
      $img = asset('images/tote.jpg');
      $cerita = 'Tas tote besar dari katun daur ulang 100%. Kuat bawa 15kg, bisa dilipat masuk saku. Ganti kantong plastik!';
  } elseif(str_contains($name,'toothbrush')) {
      $img = asset('images/toothbrush.jpg');
      $cerita = 'Sikat gigi gagang bambu 100% biodegradable. Bulu sikat charcoal lembut. 1 sikat = kurangi 30gr sampah plastik.';
  } elseif(str_contains($name,'straw')) {
      $img = asset('images/straw.jpg');
      $cerita = '1 Set isi 4 sedotan stainless + sikat pembersih + pouch katun. Anti karat, bisa dipakai 5 tahun. Stop sedotan plastik!';
  } elseif(str_contains($name,'shirt')) {
      $img = asset('images/shirt.jpg');
      $cerita = 'Kaos polos dari katun organik tanpa pestisida. Adem, lembut, tidak bikin iritasi.';
  } else {
      $img = asset('images/beeswax.jpg');
      $cerita = '3 lembar pembungkus makanan ukuran S,M,L dari katun + lilin lebah + minyak jojoba. Pengganti plastik wrap, bisa dicuci 1 tahun.';
  }
@endphp

<div class="row">
  <div class="col-md-6">
    <img src="{{ $img }}" class="img-fluid rounded shadow" style="height:400px; width:100%; object-fit:cover" alt="{{ $ecoProduct->name }}">
  </div>
  <div class="col-md-6">
    <h2>{{ $ecoProduct->name }}</h2>
    <p class="text-muted">Material: {{ $ecoProduct->material }}</p>
    <h4><span class="badge bg-success">{{ $ecoProduct->eco_rating }}</span> Rp {{ number_format($ecoProduct->price,0,',','.') }}</h4>
    <hr>
    <h5>Deskripsi Produk:</h5>
    <p>{{ $cerita }}</p>
    <p class="mt-3"><strong>Kenapa Harus Pilih Ini?</strong><br>
    🌱 Mengurangi sampah plastik<br>
    ♻️ Bahan terbarukan & bisa didaur ulang</p>
    <a href="#" class="btn btn-success w-100 mt-3">Beli Sekarang</a>
  </div>
</div>
@endsection