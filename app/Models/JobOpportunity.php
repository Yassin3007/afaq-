<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpportunity extends Model
{
    use HasFactory;
    protected $fillable = ['company_name','title','link','start','end','description','logo','status'];
    
    
}
