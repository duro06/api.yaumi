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
        $data = Toko::updateOrCreate(
            ['id' => 1],
            [$request->all()]
        );
        if ($data) {
            return new JsonResponse($data);
        }
    }
}
