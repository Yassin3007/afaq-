<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name','type','link','logo'];

    // public function getLogoAttribute($val){
    //     return ( $val!== null)? asset('images/'.$val):asset('front/img/x.png') ;
    // }
}
