<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Toko;
use App\Models\ProdukKategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $data_kategori = ProdukKategori::withCount('produk')->get();
        $data_toko = Toko::withCount('produk')->get();
        $data = Produk::with('produkKategori')->where('nama', 'like', "%$request->search%")->where('produk_kategori_id', 'like', "%$request->kategori%")->orWhere('harga_jual', '=', $request->search)->orWhere('jumlah', '=', $request->search)->get();
        $data_sortbyprice = Produk::with('produkKategori')->orderBy('harga_jual', 'asc')->take(5)->get();
        if (auth()->user()->type == 'admin') {
            return $request->wantsJson() ? [
                'data' => $data,
                'data_toko' => $data_toko,
                'data_kategori' => $data_kategori
            ] : view('adminDashboard', compact('data', 'data_kategori', 'data_toko', 'data_sortbyprice'), ['type_menu' => 'dashboard']);
        } else {
            return $request->wantsJson() ? $data : view('dashboard', compact('data', 'data_kategori', 'data_toko', 'data_sortbyprice'), ['type_menu' => 'dashboard']);
        }
        // return view('dashboard', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_kategori_id' => 'required',
            'toko_id' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'jumlah' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        $produk = new Produk;
        $produk->produk_kategori_id = $request->produk_kategori_id;
        $produk->toko_id = $request->toko_id;
        $produk->nama = $request->nama;
        $produk->kondisi = $request->kondisi;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->jumlah = $request->jumlah;
        $produk->deskripsi = $request->deskripsi;
        $produk->alamat = $request->alamat;
        $produk->gambar = $request->gambar;
        $produk->save();


        return redirect('dashboard')->with('success', 'Produk berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data_kategori = ProdukKategori::all();
        $data_toko = Toko::all();
        $data = Produk::find($id);

        return view('edit', ['data' => $data, 'data_kategori' => $data_kategori, 'data_toko' => $data_toko], ['type_menu' => 'form-edit']);
    }

    public function delete($id)
    {
        $data = Produk::find($id);
        $data->delete();

        return redirect('/dashboard');
    }

    public function update(Request $request, $id)
    {
        $data = Produk::find($id);
        $data->nama = $request->nama;
        $data->kondisi = $request->kondisi;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        $data->jumlah = $request->jumlah;
        $data->deskripsi = $request->deskripsi;
        $data->alamat = $request->alamat;
        $data->gambar = $request->gambar;
        $data->produk_kategori_id = $request->produk_kategori_id;
        $data->toko_id = $request->toko_id;
        $data->save();

        return redirect('/dashboard');
    }

    public function userDetails()
    {
        $users = User::all();
        return view('userAccountDetails', ['users' => $users], ['type_menu' => 'user-details']);
    }

    public function userCreate()
    {
        return view('userAccountCreate', ['type_menu' => 'user-create']);
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);

        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/user-details')->with('success', 'User berhasil');
    }

    public function userEdit($id)
    {
        $user = User::find($id);
        return view('userAccountEdit', ['user' => $user], ['type_menu' => 'user-edit']);
    }

    public function userUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        return redirect('/user-details');
    }

    public function userDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user-details');
    }
}
