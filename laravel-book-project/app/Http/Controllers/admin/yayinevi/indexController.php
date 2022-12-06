<?php

namespace App\Http\Controllers\admin\yayinevi;

use App\Helper\mHelper;
use App\Http\Controllers\Controller;
use App\Models\YayinEvi;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $data = YayinEvi::paginate(10);
        return view("admin.yayinevi.index", ['data' => $data]);
    }

    public function create()
    {
        return view("admin.yayinevi.create");
    }

    public function store(Request $request)
    {
        $all = $request->except("_token");
        $all['selflink'] = mHelper::permalink($all['name']);

        $insert = YayinEvi::create($all);
        if ($insert) {
            return redirect()->back()->with("status", "Yayın Evi Başarı ile Eklendi");
        } else {
            return redirect()->back()->with("status", "Yayın Evi Eklenemedi.");
        }
    }

    public function edit($id)
    {
        $count = YayinEvi::where('id', '=', $id)->count();
        if ($count > 0) {
            $data = YayinEvi::where('id', '=', $id)->get();
            return view("admin.yayinevi.edit", ['data' => $data]);
        } else {
            return redirect('/admin');
        }
    }

    public function update(Request $request)
    {
        $id = $request->route('id');
        $count = YayinEvi::where('id', '=', $id)->count();
        if ($count > 0) {
            $all = $request->except("_token");
            $all['selflink'] = mHelper::permalink($all['name']);
            $update = YayinEvi::where('id', '=', $id)->update($all);
            if ($update) {
                return redirect()->back()->with("status", "Yayın Evi Düzenlendi");
            } else {
                return redirect()->back()->with("status", "Yayın Evi Düzenlenemedi");
            }
        } else {
            return redirect('/admin');
        }
    }

    public function delete($id)
    {
        $count = YayinEvi::where('id', '=', $id)->count();
        if ($count > 0) {
            $delete = YayinEvi::where('id', '=', $id)->delete();
            if ($delete) {
                return redirect()->back()->with("status", "Yayın Evi Silindi");
            } else {
                return redirect()->back()->with("status", "Yayın Evi Silinemedi");
            }
        } else {
            return redirect('/admin');
        }
    }
}
