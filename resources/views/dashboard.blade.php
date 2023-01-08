@extends('layouts.main')
@section('main')
    <div class="row">
        <div class="col-18 col-md-9 col-lg-9">
            @foreach($data as $d)
                <div class="card author-box card-primary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1">
                                <div class="author-box-left">
                                    <img alt="image" src="img/products/{{ $d->gambar }}" class="author-box-picture" style="width: 200px; ">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="author-box-details">
                                    <div class="author-box-name">
                                    <a href="#">{{$d->nama}}</a>
                                    </div>
                                    <div class="author-box-job">Rp.{{$d->harga_jual}}</div>
                                    <div class="author-box-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                    </div>
                                    <div class="mb-2 mt-3"><div class="text-small font-weight-bold">{{ $d->kondisi }}</div></div>
                                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                        <li class="media">
                                            <img alt="image" src="img/avatar/avatar-2.png" class="rounded-circle" width="50" style="margin-right:16px">
                                            <div class="media-body">
                                                <div class="user-detail-name">
                                                    <a href="#">{{$d->toko->nama}}</a>
                                                </div>
                                                <div class="text-job">rating toko</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-6 col-md-3 col-lg-3">
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
                <div class="card-body">
                    <form action="{{ route('dashboard') }}" method="get">
                        <div class="input-group">
                            <select name="kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach($data_kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col" style="padding: 0">
                <div class="card gradient-bottom">
                  <div class="card-header">
                    <h4>Top 5 Products</h4>
                    <div class="card-header-action dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Sorting by</a>
                      <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <li class="dropdown-title">Pilih Pengurutan</li>
                        <li><a href="#" class="dropdown-item">Termurah</a></li>
                        <li><a href="#" class="dropdown-item">Termahal</a></li>
                        <li><a href="#" class="dropdown-item active">Paling Sering Dibeli</a></li>
                        <li><a href="#" class="dropdown-item">Hampir Habis</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body" id="top-5-scroll">
                    <ul class="list-unstyled list-unstyled-border">
                        @foreach($data_sortbyprice as $d)
                            <li class="media">
                                <img class="mr-3 rounded" width="55" src="assets/img/products/product-3-50.png" alt="product">
                                <div class="media-body">
                                <div class="float-right"><div class="font-weight-600 text-muted text-small">86 Sales</div></div>
                                <div class="media-title">{{ $d->nama }}</div>
                                <div class="mt-1">
                                    <div class="budget-price">
                                        <div class="budget-price-square bg-primary" data-width="64%"></div>
                                        <div class="budget-price-label">{{ $d->harga_jual }}</div>
                                    </div>
                                </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                  </div>
                  <div class="card-footer pt-3 d-flex justify-content-center">
                    <div class="budget-price justify-content-center">
                      <div class="budget-price-label">best choice</div>
                    </div>
                </div>
                </div>
              </div>
            </div>
            
        </div>
    </div>
@endsection
