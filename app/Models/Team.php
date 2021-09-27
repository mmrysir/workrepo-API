<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table;
    protected $fillable = [
        'name',
        'project_id',
        'employee_id'
    ];

    public function project()
    {
        return $this->hasMany(Projects::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
