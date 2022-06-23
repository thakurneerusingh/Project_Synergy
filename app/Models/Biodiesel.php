<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodiesel extends Model
{
    use HasFactory;
    protected $fillable = ['name','email' ,'address','mobile','customer_type','volume','Use_in','description'];
    protected $table = "biodiesels";
    
}
