<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    public function getAuthIdentifierName(){}
    public function getAuthIdentifier(){}
    public function getAuthPassword(){}
    public function getRememberToken(){}
    public function setRememberToken($value){}
    public function getRememberTokenName(){}
}
