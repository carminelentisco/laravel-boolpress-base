<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // DB::RELATION
    public function posts() {
        return $this->belognToMany('App\Post');
    }
}
