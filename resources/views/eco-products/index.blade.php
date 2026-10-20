@extends('layouts.app')
@section('content')
<div class="row">
@foreach($products as $p)
@php
  $n = strtolower($p->name);
  if(str_contains($n,'bamboo')) $img = asset('images/bamboo.jpg');
  elseif(str_contains($n,'tote')) $img = asset('images/tote.jpg');
  elseif(str_contains($n,'toothbrush')) $img = asset('images/toothbrush.jpg');
  elseif(str_contains($n,'straw')) $img = asset('images/straw.jpg');
  elseif(str_contains($n,'shirt')) $img = asset('images/shirt.jpg');
  else $img = asset('images/beeswax.jpg');
@endphp
<div class="col-md-4 mb-4">
<div class="card card-eco h-100">
<img src="{{ $img }}" style="height:240px; object-fit:cover; background:white;">
<div class="card-body">
<h5 class="fw-bold" style="color:#1B4332;">{{ $p->name }}</h5>
<p class="small text-muted">Material: {{ $p->material }}</p>
<p><span class="badge bg-success">{{ $p->eco_rating }}</span> <b>Rp {{ number_format($p->price,0,',','.') }}</b></p>
<a href="{{ route('eco-products.show',$p->id) }}" class="btn btn-success w-100" style="background:#2D6A4F; border-radius:12px; border:none;">Lihat Detail</a>
</div>
</div>
</div>
@endforeach
</div>
@endsection