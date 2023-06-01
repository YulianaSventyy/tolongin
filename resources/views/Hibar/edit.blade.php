@extends('Hibar.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit HiBar</div>
  <div class="card-body">
       
      <form action="{{ url('hibar2/' .$hibar->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$hibar->id}}" id="id" />
        <label>Nama Barang</label></br>
        <input type="text" name="Nama_Barang" id="Nama_Barang" value="{{$hibar->name}}" class="form-control"></br>
        <label>Kategori</label></br>
        <input type="text" name="Kategori" id="Kategori" value="{{$hibar->Kategori}}" class="form-control"></br>
        <label>Lokasi</label></br>
        <input type="text" name="Lokasi" id="Lokasi" value="{{$hibar->Lokasi}}" class="form-control"></br>
        <label>Deskripsi</label></br>
        <input type="text" name="Deskripsi" id="Deskripsi" value="{{$hibar->Deskripsi}}" class="form-control"></br>
        <label>Poin</label></br>
        <input type="text" name="poin" id="poin" value="{{$hibar->poin}}" class="form-control"></br>
        <label>Foto</label></br>
        <input type="file" name="Foto" id="Foto" value="{{$hibar->Foto}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop