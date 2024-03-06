<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentGroup extends Model
{
    use HasFactory;
    protected $table = 'studentgroups';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'SGName',
    ];

    public function class()
    {
        return $this->hasMany(Classes::class, 'SG_id');
    }
}
