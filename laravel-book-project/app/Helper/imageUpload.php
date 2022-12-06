<?php

namespace App\Helper;

use File;
use Image;

class imageUpload
{
    static function singleUpload($name, $directory, $file)
    {
        $rand = $name;
        $dir = 'images/' . $directory . '/' . $rand;
        $dirLarge = $dir . '/large';

        if (!empty($file)) {
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }

            if (!File::exists($dirLarge)) {
                File::makeDirectory($dirLarge, 0755, true);
            }

            $fileName = rand(1, 90000) . '.' . $file->getClientOriginalExtension();
            $path = public_path($dir . '/' . $fileName);
            $path2 = public_path($dirLarge . '/' . $fileName);

            Image::make($file->getRealPath())->save($path2);
            Image::make($file->getRealPath())->resize(250, 250)->save($path);

            return $dir . "/" . $fileName;
        } else {
            return "";
        }
    }

    static function singleUploadUpdate($name, $directory, $file, $data, $field)
    {
        $rand = $name;
        $dir = 'images/' . $directory . '/' . $rand;
        $dirLarge = $dir . '/large';

        if (!empty($file)) {
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }

            if (!File::exists($dirLarge)) {
                File::makeDirectory($dirLarge, 0755, true);
            }

            File::delete('public/' . $data[0]['field']);
            $fileName = rand(1, 90000) . '.' . $file->getClientOriginalExtension();
            $path = public_path($dir . '/' . $fileName);
            $path2 = public_path($dirLarge . '/' . $fileName);

            Image::make($file->getRealPath())->save($path2);
            Image::make($file->getRealPath())->resize(250, 250)->save($path);

            return $dir . "/" . $fileName;
        } else {
            return $data[0][$field];
        }
    }
}
