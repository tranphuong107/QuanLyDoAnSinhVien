<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $filltable = [
        'Name',
    ];
    public function accounts()
    {
        return $this->hasMany(Student::class, 'Role_id');
    }
}
