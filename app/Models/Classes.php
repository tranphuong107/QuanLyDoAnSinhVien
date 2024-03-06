<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'ClassName',
        'Major_id',
        'SG_id',
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'Class_id');
    }
    public function studentgroup()
    {
        return $this->belongsTo(StudentGroup::class, 'SG_id');
    }
    public function major()
    {
        return $this->belongsTo(Major::class, 'Major_id');
    }
}
