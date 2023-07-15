@extends('templates/base') {{-- mengambil file base.blade.php --}}
@section('title','Tambah Barang')
@section('container') {{-- Mengisi di bagian content --}}
<!-- Main Section -->
<div class="container">
<div class="row">
<!-- Content -->
<div class="col-md-12 mt-3">
<h3>Form Menambah Barang</h3>
<form action="" method="post">
<div class="form-group">
<label for="name">Nama Barang</label>
<input class="form-control" type="text" name="name" id="name" placeholder="masukkan nama barang">
</div>
<div class="form-group">
<label for="type">Tipe Barang</label>
<input class="form-control" type="text" name="type" id="type" placeholder="masukkan tipe barang">
</div>
<div class="form-group">
<label for="stock">Jumlah</label>
<input class="form-control" type="number" name="jumlah" id="jumlah" placeholder="masukkan jumlah barang">
</div>
<div class="form-group">
<label for="writer">Harga</label>
<input class="form-control" type="text" name="harga" id="harga" placeholder="masukkan harga barang">
</div>
<div class="form-group">
<label for="publisher">Merek</label>
<input class="form-control" type="text" name="merek" id="merek" placeholder="masukkan merek barang">
</div>
<div class="form-group">
<label for="date">Waktu Barang Masuk</label>
<input class="form-control" type="date" name="date" id="date">
</div>
<div class="form-group">
<label for="date">Waktu Barang Keluar</label>
<input class="form-control" type="date" name="date" id="date">
</div>
<div class="form-group float-right">
<button class="btn btn-lg btn-danger" type="reset">Batalkan</button>
<button class="btn btn-lg btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
<!-- /.content -->
</div>
</div>
<!-- /.Main Section -->
@endsection