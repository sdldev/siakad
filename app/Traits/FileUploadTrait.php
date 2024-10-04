<?php

namespace App\Traits;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;
trait FileUploadTrait
{
    public function handleFileUploadImages(Request $request, string $fieldName, ?string $oldPath = null, string $dir = '/uploads/images') : ?String
    {

    if(!$request->hasFile($fieldName))
       {
           return null;
       }

       if($oldPath && File::exists(public_path($oldPath)))
       {
           File::delete(public_path($oldPath));
       }
       $ldate = date('Y-m-d-H:i:s');

        $file = $request->file($fieldName);
        $extension = $file->getClientOriginalExtension();
        $updatedFileName = 'newsCMS-'.\Str::random(10).'-'.$ldate.'.'.$extension;
        $file->move(public_path($dir), $updatedFileName);
        $filePath = $dir.'/'.$updatedFileName;
        return $filePath;
    }



    public function deleteFile(string $path): void
    {
        if($path && File::exists(public_path($path)))
        {
            File::delete(public_path($path));
        }
    }
}
