<?php

namespace App\Http\Controllers;

use App\Constants\SessionConstant;
use App\Models\Abudemen;
use App\Models\User;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AbudemenController extends Controller
{
    public function index()
    {
        $abudemens = DB::table('abudemen')->get();

        return view('abudemen', ['abudemens' => $abudemens]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $abudemen = new Abudemen;
        $abudemen->id = $request->input('id');
        $abudemen->jumlah_abudemen = $request->input('jumlah_abudemen');
        // Mengisi nilai lainnya
        $abudemen->save();
        

        return redirect('abudemen')->with('success', 'Data abudemen berhasil ditambahkan.');
    }

    public function edit()
{
    $abudemens = Abudemen::all();
    return view('edit', compact('abudemens'));
}


public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'jumlah_abudemen' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        // Jika validasi gagal, lakukan sesuatu, misalnya redirect kembali ke halaman edit dengan pesan error
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Jika validasi sukses, lanjutkan dengan proses update
    $data = [
        'jumlah_abudemen' => $request->input('jumlah_abudemen'),
    ];

    Abudemen::where('id', $id)->update($data);

    // Redirect ke halaman index atau halaman lain yang diinginkan
    return redirect('abudemen')->with('success', 'Abudemen updated successfully');
}
public function destroy($id)
{
    $abudemen = Abudemen::findOrFail($id);
    $abudemen->delete();

    return redirect('abudemen')->with('success', 'Data abudemen berhasil dihapus.');
}

}
