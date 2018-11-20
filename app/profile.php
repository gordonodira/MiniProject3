<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\profile
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\profile newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\profile newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\profile query()
 * @mixin \Eloquent
 */
class profile extends Model
{
    protected $fillable = ['fname', 'lname', 'body'];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}