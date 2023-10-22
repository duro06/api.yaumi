<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Setting\AksesMenu;
use App\Models\Setting\AppMenu;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function getMenu()
    {
        $user = auth()->user();
        $restricted = AksesMenu::select('menu_id')->where('level_id', $user->level)->get();
        $res = AppMenu::whereNotIn('id', $restricted)->where('is_main', '>=', 1)->orderby('urut', 'ASC')->get();
        $sub = AppMenu::whereNotIn('id', $restricted)->where('is_main', '<=', 0)->get();
        $menu = collect($res);
        foreach ($menu as $key) {
            $temp = $sub->where('id_main', $key->id);
            $key->submenus = $temp;
        }
        $data = $menu;
        return new JsonResponse($data);
    }
}
