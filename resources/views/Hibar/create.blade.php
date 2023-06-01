@extends('Hibar.layout')
@section('content')
  
<div class="card" style="margin:20px; width: 50%; height: 50%; margin-left: 26%;">
  <div class="card-header"><strong>H i B a r - Hilang Barang</strong></div>
  <div class="card-body">
       
      <form action="{{ url('hibar2') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Barang</label></br>
        <input type="text" name="Nama_Barang" id="Nama_Barang" class="form-control"></br>
        <label>Kategori</label></br>
        <input type="text" name="Kategori" id="Kategori" class="form-control"></br>
        <label>Lokasi</label></br>
        <input type="text" name="Lokasi" id="Lokasi" class="form-control"></br>
        <label>Deskripsi</label></br>
        <input type="text" name="Deskripsi" id="Deskripsi" class="form-control"></br>
        <label>Poin</label></br>
        <input type="text" name="poin" id="poin" class="form-control"></br>
        <label>Foto</label></br>
        <input type="file" name="Foto" id="Foto" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-danger"></br>

    </form>
    
  </div>
</div>
  
@stop