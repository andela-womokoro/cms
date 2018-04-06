<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'industry', 'body'];

    /**
     * Enforce a one to one relationship between Content and a user
     *
     * @return [type] [description]
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
