<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\Toko;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InfoTokoController extends Controller
{
    //
    public function index()
    {
        $data = Toko::find(1);
        return new JsonResponse($data);
    }
    public function store(Request $request)
    {
        // return new JsonResponse($request->all());
        $data = Toko::updateOrCreate(
            ['id' => 1],
            $request->all()
            // [
            //     'nama' => $request->nama ?? '',
            //     'kota' => $request->kota ?? '',
            //     'alamat' => $request->alamat ?? '',
            //     'tlp' => $request->tlp ?? '',
            // ]
        );
        if ($data) {
            return new JsonResponse($data);
        }
    }
    public function getLogo(Request $request)
    {
        $data = Toko::find(1);
        return new JsonResponse($data);
    }
    public function logo(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $path = $request->file('gambar')->store('logos', 'public');
        if (!$path) {
            return new JsonResponse(['message' => 'Gambar Gagal Disimpan'], 500);
        }
        $user = Toko::find($request->id);
        $user->logo = $path;
        if (!$user->save()) {
            return new JsonResponse(['message' => 'Database Gagal Disimpan'], 500);
        }
        return new JsonResponse(['message' => 'Gambar Berhasil Disimpan'], 200);
    }
}
