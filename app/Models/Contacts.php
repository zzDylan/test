<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['name','telphone','user_id'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
