<?php

namespace mywishlist\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Facture extends Model {

    protected $table = 'facture';
    protected $primaryKey = 'id';
    public $timestamps = false;

	}




