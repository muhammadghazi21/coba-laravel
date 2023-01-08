@extends('layouts.main')
@section('main')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Toko Products</h4>
            </div>
            <div class="card-body">
              <canvas id="myChart3"></canvas>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Total Products</h4>
            </div>
            <div class="card-body">
              <canvas id="myChart4"></canvas>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4>Data Margin Produk</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                        <tr>
                            <td>id</td>
                            <td>Produk</td>
                            <td>Harga Jual</td>
                            <td>Harga Beli</td>
                            <td>Margin</td>
                        </tr>
                            @foreach($data as $d)
                        <tr>
                            
                            <td>{{$d->id}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{ $d->harga_jual}}</td>
                            <td>{{ $d->harga_beli}}</td>
                            <td>{{ $d->harga_jual - $d->harga_beli }}</td>
                        </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('modules/chart.min.js ')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-chartjs.js') }}"></script>
@endpush