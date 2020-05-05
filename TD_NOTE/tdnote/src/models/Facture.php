<?php

namespace tdnote\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Facture extends Model{

    protected $table = 'facture';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function client(){
    	return $this->belongsTo('\tdnote\models\facture','client_id')->first();
    }
}




