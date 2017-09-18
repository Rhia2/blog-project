<?php

namespace App;
use Carbon\Carbon;


class Post extends Model
{
    //this is for linking comment tablee to post table

    public function comment(){
        
        return $this->hasMany(Comment::class);
    }

    //this is for linking user table to post table

    public function user(){
        
        return $this->belongsto(User::class);
    }

    public function addComment($body){
        $this->comment()->create(compact('body'));
    }

    //this is for the archive links to direct us to the post for the particular month
    public function scopeFilter($query, $filter)
    {
    if($month = $filter['month'])
    {
    $query->whereMonth('created_at', Carbon::parse($month)->month);
    }
    if($year = $filter['year'])
    {
    $query->whereYear('created_at', $year);
    }
    }

    //this is for the collecton of the post for a particular from th database

    public static function archives(){
        return static :: selectRaw('year(updated_at) year, monthname(updated_at) month, count(*) published')
        ->groupBy('year','month')
        ->orderByRaw('min(created_at) desc')
        ->get();
    }
}
