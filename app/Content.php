<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable =[
        'id'  , 'content' , 'title'
    ];

    protected $table = 'contents';

    public function user()
    {
            return $this->belongsTo(Content::class);

    }



}
