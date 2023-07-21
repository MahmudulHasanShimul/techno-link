<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReSeller extends Model
{
    use HasFactory;
    private static $reSeller, $image, $imageName, $imageUrl;

    public static function getImageUrl($request)
    {
        if($request->image){
            self::$image = $request->image;
            self::$imageName = "reseller-image".time().'.'.self::$image->getClientOriginalExtension();
            self::$image->move(public_path("/upload/reseller-image"),  self::$imageName);
            self::$imageUrl = "upload/reseller-image/".self::$imageName;
        }else{
            self::$imageUrl = null;
        }
        return self::$imageUrl;
    }

    public static function storeReSeller($request)
    {
        self::$reSeller = new ReSeller();
        self::$reSeller->company_name          = $request->company_name;
        self::$reSeller->owner_name            = $request->owner_name;
        self::$reSeller->mobile                = $request->mobile;
        self::$reSeller->email                 = $request->email;
        self::$reSeller->password              = bcrypt($request->password);
        self::$reSeller->address               = $request->address;
        self::$reSeller->image                 = self::getImageUrl($request);
        self::$reSeller->activation_date       = $request->activation_date;
        self::$reSeller->status                = $request->status;
        self::$reSeller->save();
    }

    public static function updateReSeller($request, $id)
    {
        self::$reSeller = ReSeller::find($id);

        if($request->image){
            if(file_exists(self::$reSeller->image)){
                unlink(self::$reSeller->image);
            }
            self::$reSeller->image = self::getImageUrl($request);
        }
        
        self::$reSeller->company_name          = $request->company_name;
        self::$reSeller->owner_name            = $request->owner_name;
        self::$reSeller->mobile                = $request->mobile;
        self::$reSeller->email                 = $request->email;
        self::$reSeller->password              = bcrypt($request->password);
        self::$reSeller->address               = $request->address;
        self::$reSeller->activation_date       = $request->activation_date;
        self::$reSeller->status                = $request->status;
        self::$reSeller->save();
    }

    public static function deleteReSeller($id)
    {
        self::$reSeller = ReSeller::find($id);

        if(file_exists(self::$reSeller->image)){
            unlink(self::$reSeller->image);
        }
        self::$reSeller->delete();
    }
}
