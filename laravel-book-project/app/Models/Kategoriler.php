<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoriler extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getField($id, $field)
    {
        $count = Kategoriler::where("id", "=", $id)->count();
        if ($count > 0) {
            $data = Kategoriler::where("id", "=", $id)->get();
            return $data[0][$field];
        } else {
            return "Silinmiş Kategori";
        }
    }
}
