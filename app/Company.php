<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id'
    ];

    // Defining Relationship
    public function user() {
        return $this->belongsTo('App\User');
    }

}
