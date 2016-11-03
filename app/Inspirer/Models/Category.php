<?php namespace App\Inspirer\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'display_name', 'description', 'parent_id'];

    public function articles()
    {
        return $this->hasMany('App\Inspirer\Models\Article');
    }

}
