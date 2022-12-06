<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yazarlar extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getField($id, $field)
    {
        $count = Yazarlar::where("id", "=", $id)->count();
        if ($count > 0) {
            $all = Yazarlar::where("id", "=", $id)->get();
            return $all[0][$field];
        } else {
            return "Silinmiş Yazar";
        }
    }
}
