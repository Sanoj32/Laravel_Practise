<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cell_User extends Model
{
    public function ServiceProvider()
    {
        return $this->belongsTo(ServiceProvider::class,'provider');
    }
    public function Transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}