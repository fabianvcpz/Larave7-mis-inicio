<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Project extends Model
{
    protected $fillable =['title', 'url','description'];

    public function  getRouteKeyName()
    {
        return 'url'; // TODO: Change the autogenerated stub
    }

}
