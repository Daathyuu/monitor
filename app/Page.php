<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    public function reac(){
    	return $this->hasManyThrough('\App\Reaction','\App\Post','post_root_id','reac_post_id','page_id','post_id');
    }
}

