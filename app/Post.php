<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function profile(){
    	return $this->belongsTo('\App\Profile','post_user_id','profile_id');
    }

    public function page(){
    	return $this->belongsTo('\App\Page','post_root_id' , 'page_id');
    }



    public function scopeCountry($query, $item){
    	if ($item) {
    		return $query->whereHas('page',function($q) use($item){
    			$q->where('page_dist','LIKE','%'.$item.'%');
    		});
    	}
    	return $query;
    }
}
