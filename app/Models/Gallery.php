<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['name'];

    public function pictures(){
       return $this->hasMany(Picture::class);
    }
}
