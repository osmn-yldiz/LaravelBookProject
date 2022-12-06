<?php

namespace App\Http\Controllers\front\kitap;

use App\Http\Controllers\Controller;
use App\Models\Kitaplar;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index($selflink)
    {
        $count = Kitaplar::where("selflink", "=", $selflink)->count();
        if ($count > 0) {
            $data = Kitaplar::where("selflink", "=", $selflink)->get();
            return view("front.kitap.index", ["data" => $data]);
        } else {
            return redirect("/");
        }
    }
}
