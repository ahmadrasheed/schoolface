<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    //protected $fillable=['name','age','active','email'];
    protected $guarded=[];

    public function scopeActive($query,$status){
        return $query->where('active',$status);
    }

    public function company(){

        return $this->belongsTo(Company::class);
    }





}




