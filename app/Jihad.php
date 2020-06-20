<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Jihad extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'jihad';
    
    protected $fillable = [
          'headline',
          'articles'
    ];
    

    public static function boot()
    {
        parent::boot();

        Jihad::observe(new UserActionsObserver);
    }
    
    
    
    
}