<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable=['name','description'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}