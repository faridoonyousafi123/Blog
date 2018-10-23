<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable=['menu'];

    public function users(){
		return $this->belongsToMany('App\User');
    }
}
