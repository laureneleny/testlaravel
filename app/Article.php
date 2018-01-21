<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model

{

    protected $table = "article";


    protected $fillable = [
        'user_id',
        'title',
        'description',
        'is_done',

    ];


    public function user()
    {

        return $this->belongsTo(User::class);
    }

}
