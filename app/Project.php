<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'days'
    ];

    // Defining Relationship
    public function user() {
        return $this->belongsToMany('App\User');
    }


    public function company(){
        return $this->belongsTo('App\Company');
    }


}
