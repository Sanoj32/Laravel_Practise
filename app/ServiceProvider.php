<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    public function CellUser()
    {
        return $this->hasOne(Cell_User::class);
    }
}
