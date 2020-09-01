<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable =[
        'id'  , 'content' , 'title' , 'user_id'
    ];

    /*protected $table = 'contents';*/

    public function user()
    {
            return $this->belongsTo(User::class);

    }



}
