<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'content_id'];

    /**
     * Enforce a one to one relationship between Content and a user
     *
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Enforce a relationship with the Content model
     */
    public function content()
    {
    	return $this->belongsTo('App\Content');
    }
}
