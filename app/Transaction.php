<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Cell_User()
    {
        return $this->belongsTo(Cell_User::class);
    }
}
