<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YayinEvi extends Model
{
    use HasFactory;

    protected $guarded = [];

    static function getField($id, $field)
    {
        $count = YayinEvi::where("id", "=", $id)->count();
        if ($count > 0) {
            $data = YayinEvi::where("id", "=", $id)->get();
            return $data[0][$field];
        } else {
            return "Silinmiş Yayın Evi";
        }
    }
}
