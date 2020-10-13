<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostFiles extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
