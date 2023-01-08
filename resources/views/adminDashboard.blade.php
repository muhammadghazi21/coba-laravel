@extends('layouts.main')
@section('main')
    <div class="row">
        <div class="col-18 col-md-9 col-lg-9">
            
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Kategori Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                <tr>
                                    <td>id</td>
                                    <td>Kategori</td>
                                </tr>
                                    @foreach($data_kategori as $d)
                                <tr>
                                    
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->nama}}</td>
                                </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Toko Tersedia</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                <tr>
                                    <td>id</td>
                                    <td>Nama Toko</td>
                                </tr>
                                    @foreach($data_toko as $d)
                                <tr>
                                    
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->nama}}</td>
                                </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Semua Produk</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-md">
                                <tr>
                                    <td>id</td>
                                    <td>Produk</td>
                                    <td>toko</td>
                                    <td>kategori produk</td>
                                    <td>harga</td>
                                    <td>jumlah</td>
                                </tr>
                                    @foreach($data as $d)
                                <tr>
                                    
                                    <td>{{$d->id}}</td>
                                    <td>{{$d->nama}}</td>
                                    <td>{{$d->toko->nama}}</td>
                                    <td>{{$d->produkKategori->nama}}</td>
                                    <td>{{$d->harga_jual}}</td>
                                    <td>{{$d->jumlah}}</td>
                                    <td style="display:flex">
                                        <div class="group-btn">
                                            
                                            <form action="{{ route('produk.delete', $d->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('produk.edit', $d->id) }}" class="btn btn-primary">Edit</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('dashboard') }}" method="get">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Produk</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('produk.store') }}" >
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Produk">
                        </div>

                        <div class="form-group">
                            <label for="kondisi">Kondisi</label>
                            <select class="form-control" name="kondisi" id="kondisi">
                                <option value="baru">Baru</option>
                                <option value="bekas">Bekas</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" class="form-control" name="harga_jual" id="harga_jual" placeholder="Harga Jual">
                        </div>
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="number" class="form-control" name="harga_beli" id="harga_beli" placeholder="Harga Beli">
                        </div>
                        <div class="form-group">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar">
                        </div>

                        <div class="form-group">
                            <label for="toko_id">Toko</label>
                            <select class="form-control" name="toko_id" id="toko_id">
                                @foreach($data_toko as $d)
                                    <option value="{{$d->id}}">{{$d->nama}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="produk_kategori_id">Kategori Produk</label>
                            <select class="form-control" name="produk_kategori_id" id="produk_kategori_id">
                                @foreach($data_kategori as $d)
                                    <option value="{{$d->id}}">{{$d->nama}}</option>
                                @endforeach
                            </select>
                        </div>
            
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection