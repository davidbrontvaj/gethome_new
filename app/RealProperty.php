<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealProperty extends Model
{
    //
    protected $fillable = ['title','description','disposition','type','price','deposit','area','condition','equiped', 'parameters','address_street','address_city', 'images', 'available_from', 'user_id', 'published', 'active', 'url', 'no_user_id'];
}
