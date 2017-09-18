<?php

namespace App;


class Comment extends Model
{
    
     public function post(){
        
        return $this->belongsto(Post::class);
    }

    public function user(){
        
        return $this->belongsto(User::class);
    }
    
}
