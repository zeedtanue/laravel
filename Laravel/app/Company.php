<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //table name
    protected $table='companies';
    //primary keys
    protected $primaryKey='id';

    //relation with User Model
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
/*
    public function employee(){
        return $this->hasMany('App\Employee');
    }
    */ 
}

