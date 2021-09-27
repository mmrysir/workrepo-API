<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;
   
    protected  $table = "orginization";
    protected $fillable = [
        'name',
        'industry',
        'teamsize',
        'employee_id'
    ]; 

    public function employee()
     {
         return $this->hasMany(Employee::class);
     }
}
