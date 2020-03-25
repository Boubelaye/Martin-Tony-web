<?php

namespace mywishlist\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Liste extends Model {

    protected $table = 'liste';
    protected $primaryKey = 'no';
    public $timestamps = false;

    public function items(){
        return $this->hasMany('\mywishlist\models\Item', 'liste_id')->get();
    }

    public static function getId($id){
        return Liste::where('no', '=', $id)->first();
    }
}