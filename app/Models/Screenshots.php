<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screenshots extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = [
        'photo',
        'employee_id'

    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
