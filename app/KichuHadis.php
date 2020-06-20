<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class KichuHadis extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'kichuhadis';
    
    protected $fillable = [
          'headline',
          'articles'
    ];
    

    public static function boot()
    {
        parent::boot();

        KichuHadis::observe(new UserActionsObserver);
    }
    
    
    
    
}