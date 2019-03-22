<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
}
