@extends('Hibar.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>T e B a r - Temu Barang</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/hibar2/create') }}" class="btn btn-danger btn-sm" title="Add New Hibar">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                        <th>Poin</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Hibar as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->Nama_Barang }}</td>
                                            <td>{{ $item->Kategori }}</td>
                                            <td>{{ $item->Lokasi }}</td>
                                            <td>{{ $item->Deskripsi }}</td>
                                            <td>{{ $item->poin }}</td>
                                            <td>
                                                <img src="{{ asset('storage/fotobarang/'.$items->name) }}" style="width:40%" alt="">
                                            </td>
                                            <td>
                                                <a href="{{ url('/hibar2/' . $item->id) }}" title="View Hibar"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/hibar2/' . $item->id . '/edit') }}" title="Edit Hibar"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
      
                                                <form method="POST" action="{{ url('/hibar2' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Hibar" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection