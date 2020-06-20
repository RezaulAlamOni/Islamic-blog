<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Pdf extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'pdf';
    
    protected $fillable = [
          'headline',
          'pdf_file',
          'articles'
    ];
    

    public static function boot()
    {
        parent::boot();

        Pdf::observe(new UserActionsObserver);
    }
    
    
    
    
}