<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class NeededLink extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'neededlink';
    
    protected $fillable = ['headline'];
    

    public static function boot()
    {
        parent::boot();

        NeededLink::observe(new UserActionsObserver);
    }
    
    
    
    
}