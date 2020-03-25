<?php

namespace mywishlist\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $table = 'item';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function liste(){
        return $this->belongsTo('\mywishlist\models\Liste', 'liste_id')->first();
    }

    public static function getId($id){
        return Item::where('id', '=', $id)->first();
    }
}