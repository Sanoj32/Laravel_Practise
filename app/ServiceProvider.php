<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    public function Cell_User()
    {
        return $this->hasMany(Cell_User::class,'provider');
    }
}
