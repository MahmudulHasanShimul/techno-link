<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    private static $client;

    private static$image, $imageName, $imageUrl;

    public static function frontImageUrl($request)
    {
        if($request->nid_front_side){
            self::$image = $request->nid_front_side;
            self::$imageName = "'nid-front-image".rand(100000, 1000000).'.'.self::$image->getClientOriginalExtension();
            self::$image->move(public_path("/upload/nid-image"),  self::$imageName);
            self::$imageUrl = "upload/nid-image/".self::$imageName;
        }else{
            self::$imageUrl = null;
        }
        return self::$imageUrl;
    }

    public static function backImageUrl($request)
    {
        if($request->nid_back_side){
            $image = $request->nid_back_side;
            $imageName = 'nid-back-image'.rand(100000, 1000000).'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/upload/nid-image'), $imageName);
            $imageUrl = 'upload/nid-image/' .  $imageName;
        }
        else{
            $imageUrl = null;
        }

        return $imageUrl;
    }

   
    public static function storeClient($request, $reSellerId, $reSellerOwnerName)
    {
        self::$client                       = new Client();
        self::$client->reSeller_id          = $reSellerId;
        self::$client->reSeller_owner_name  = $reSellerOwnerName;
        self::$client->name                 = $request->name;
        self::$client->user_id              = $request->user_id;
        self::$client->phone_number         = $request->phone_number;
        self::$client->connection_month     = $request->connection_month;
        self::$client->package              = $request->package;
        self::$client->package_rate         = $request->package_rate;
        self::$client->nid_front_side       = self::frontImageUrl($request);
        self::$client->nid_back_side        = self::backImageUrl($request);
        self::$client->address              = $request->address;

        self::$client->save();
    }

    public static function updateClient($request, $id)
    {
        self::$client = Client::find($id);

        if($request->nid_front_side){
            if(file_exists(self::$client->nid_front_side)){
                unlink(self::$client->nid_front_side);
            }
            self::$client->nid_front_side = self::frontImageUrl($request);
        }

        
        if($request->nid_back_side){
            if(file_exists(self::$client->nid_back_side)){
                unlink(self::$client->nid_back_side);
            }
            self::$client->nid_back_side = self::backImageUrl($request);
        }
        self::$client->name                 = $request->name;
        self::$client->user_id              = $request->user_id;
        self::$client->phone_number         = $request->phone_number;
        self::$client->connection_month     = $request->connection_month;
        self::$client->package              = $request->package;
        self::$client->package_rate         = $request->package_rate;
        self::$client->address              = $request->address;
        self::$client->status               = $request->status;

        self::$client->save();

    }

    public static function deleteClient($id)
    {
        self::$client = Client::find($id);

        if(file_exists(self::$client->nid_front_side)){
            unlink(self::$client->nid_front_side);
        }

        if(file_exists(self::$client->nid_back_side)){
            unlink(self::$client->nid_back_side);
        }

        self::$client->delete();
    }
}
