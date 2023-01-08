@extends('layouts.main')
@section('main')
    <form method="post" action="{{ route('produk.update', $data->id ) }}" class="needs-validation" >
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
        </div>

        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <select class="form-control" name="kondisi" id="kondisi">
                <option  value="Baru">Baru</option>
                <option value="Bekas">Bekas</option>
            </select>
        </div>

        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual" >
        </div>
        <div class="form-group">
            <label for="harga_beli">Harga Beli</label>
            <input type="number" class="form-control" name="harga_beli" id="harga_beli" placeholder="Harga Beli" >
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" >
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" ></textarea>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" >
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar" >
        </div>

        <div class="form-group">
            <label for="toko_id">Toko</label>
            <select class="form-control" name="toko_id" id="toko_id">
                @foreach($data_toko as $d)
                    <option {{ $data->toko_id==$d->id?'selected':'' }} >{{$d->nama}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="produk_kategori_id">Kategori Produk</label>
            <select class="form-control" name="produk_kategori_id" id="produk_kategori_id">
                @foreach($data_kategori as $d)
                    <option {{ $data->produk_kategori_id==$d->id?'selected':'' }} >{{$d->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
            Submit
        </button>
        </div>
    </form>
@endsection