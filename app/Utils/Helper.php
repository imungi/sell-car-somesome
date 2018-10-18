<?php
/**
 * Created by PhpStorm.
 * User: Fajar Pamungkas
 * Date: 17-Oct-18
 * Time: 21:50
 */

namespace App\Utils;


use Illuminate\Http\UploadedFile;

class Helper
{
    public static function upload(UploadedFile $file) {
        $fileName = str_random(10).'.'.$file->getClientOriginalExtension();
        $file->storePubliclyAs('public/images', $fileName);
        return $fileName;
    }

}