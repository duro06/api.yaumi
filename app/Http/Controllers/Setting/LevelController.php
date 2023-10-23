<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Master\Level;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function index()
    {
        $data = Level::filter(request(['q']))
            ->orderBy(request('order_by'), request('sort'))
            ->paginate(request('per_page'));
        return new JsonResponse($data);
    }
}
