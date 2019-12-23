<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table='employees';
    //primary keys
    protected $primaryKey='id';

    //relation with user Model
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
