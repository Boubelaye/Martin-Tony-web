<?php

namespace mywishlist\models;

require_once 'vendor/autoload.php';

use \Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $table = 'client';
    protected $primaryKey = 'id';
    public $timestamps = false;

	}
