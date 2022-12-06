<?php

namespace App\Helper;

class mHelper
{
    /*static function permalink($deger)
    {
        $turkce = array("ş", "Ş", "ı", "(", ")", "", "ü", "Ü", "ö", "Ö", "ç", "Ç", " ", "/", "*", "?", "ş", "Ş", "ı", "ğ", "Ğ", "İ", "ö", "Ö", "Ç", "ç", "ü", "Ü");
        $duzgun = array("s", "S", "i", "", "", "", "u", "U", "o", "O", "c", "C", "-", "-", "-", "", "s", "S", "i", "g", "G", "I", "o", "O", "C", "c", "u", "U");
        $deger = str_replace($turkce, $duzgun, $deger); //$turkce değişkenindeki dizi ile $duzgun değişkenindeki dizinin yer değiştirilmesi
        $deger = preg_replace("@[^A-Za-z0-9-_]+@i", "", $deger);
        return $deger;
    }*/

    static function permalink($phrase)
    {
        $result = strtolower($phrase);
        $result = preg_replace("/[^a-z0-9\s-]/", "", $result);
        $result = trim(preg_replace("/[\s-]+/", " ", $result));
        $result = trim(substr($result, 0));
        $result = preg_replace("/\s/", "-", $result);
        return $result;
    }

    static function largeImage($image)
    {
        $imageExplode = explode('/', $image);
        $fileName = end($imageExplode);
        $key = key($imageExplode);
        unset($imageExplode[$key]);
        $implodeImage = implode('/', $imageExplode);
        return $implodeImage . "/large/" . $fileName;
    }
}
