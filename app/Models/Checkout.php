<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $guarded =['created_at'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
