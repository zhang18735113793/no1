<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    public $timestamps = false;
    protected $primaryKey = 'address_id';
}
