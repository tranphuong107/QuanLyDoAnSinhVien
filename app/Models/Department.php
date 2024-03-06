<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'DepartmentName',
    ];

    public function lecturer()
    {
        return $this->hasMany(Lecturer::class, 'Department_id');
    }
}
