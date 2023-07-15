@extends('templates/base')
@section('title','Barang Database')
@section('container')
<div class="container">
<div class="row">
<div class="my-4 col-12">
<h1 class="float-left">Daftar Barang</h1>
<a class="btn btn-primary float-right mt-2" href="{{url('/create')}}" role="button">Tambah Barang</a>
</div>
<div class="col-12">
<table class="table table-stripped">
<thead class="thead-primary">
<tr>
<th class="text-center">No</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th class="text-center">Jumlah</th>
<th>Deskripsi</th>
<th>Jumlah Barang</th>
<th>Harga Barang</th>
<th class="text-center">Simpan</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
<td class="text-center">1</td>
<td></td>
<td>Sampul Buku</td>
<td class="text-center">100</td>
<td>Sampul Buku Tulis Polos</td>
<td>Bentang</td>
<td class="text-center">Rp.3500</td>
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