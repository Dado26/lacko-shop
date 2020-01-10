<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['name','url','gallery_id'];

    public function gallery(){
        $this->belongsTo(Gallery::class);
    }
}
