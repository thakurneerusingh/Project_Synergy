<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automation extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id', 'name','email','pump','address','problem_since','nature','description'];
    protected $primaryKey = 'id';
    protected $table = "automations";
    protected $guarded = ['id','user_id', 'name','email','pump','address','problem_since','nature','description'];
    
}
