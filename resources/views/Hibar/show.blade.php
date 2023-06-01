@extends('Hibar.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">HiBar Page</div>
    <div class="card-body">
        <h5 class="card-title">Nama Barang : {{ $hibar->Nama_Barang }}</h5>
        <p class="card-text">Kategori : {{ $hibar->Kategori }}</p>
        <p class="card-text">Lokasi : {{ $hibar->Lokasi }}</p>
        <p class="card-text">Deskripsi : {{ $hibar->Deskripsi }}</p>
        <p class="card-text">Poin: {{ $hibar->poin }}</p>
        <p class="card-text">Foto: {{ $hibar->Foto }}</p>
      </div>
    </div>
</div>