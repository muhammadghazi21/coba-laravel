<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukKategori;
use App\Models\Toko;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(Request $request)
    {
        $data_kategori = ProdukKategori::withCount('produk')->where('nama', 'like', "%$request->search%")->get();
        $data_toko = Toko::withCount('produk')->where('nama', 'like', "%$request->search%")->get();
        $data = Produk::with('produkKategori')->where('nama', 'like', "%$request->search%")->orWhere('harga_jual', '=', $request->search)->orWhere('jumlah', '=', $request->search)->get();

        foreach($data as $d){
            $d->margin = $d->harga_jual - $d->harga_beli;
        }
        
        $data = $data->sortByDesc('margin');
        

        // return response()->json([
        //     'margins' => $data->sortBy('margin',SORT_REGULAR,true)->values()->all(),
        // ]);
        

        return view('managerDashboard', compact('data', 'data_kategori', 'data_toko'), ['type_menu' => 'manager']);
    }
}
