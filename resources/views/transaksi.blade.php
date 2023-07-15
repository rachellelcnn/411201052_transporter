@extends('templates/base')
@section('title','Transaksi')
@section('container')
<div class="container">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar Transaksi</h1>
<a class="btn btn-primary float-right mt-2" href="{{url('/create')}}" role="button">Tambah Transaksi</a>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th class="text-center">Barang</th>
<th>Lokasi</th>
<th>No.Transaksi</th>
<th class="text-center">Simpan</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-center">1</td>
<td>Spidol Papan</td>
<td>Bogor</td>
<td>9876765</td>
<td>
<a href="{{url('/edit')}}" class="badge badge-success">edit</a>
<a href="" class="badge badge-danger">delete</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
@endsection