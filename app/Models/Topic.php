<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = 'topics';
    public $timestamps = false;
    protected $fillable = [
        'ID',
        'Title',
        'Research_id',
        'Decription',
        'RegistrationTime',
        'GuidePoint',
        'RebuttalPoint',
        'ProtectionPoint',
        'Average',
        'Status',
        'Lecturer_id',
        'Student_id',

    ];
    public function research()
    {
        return $this->belongsTo(Research::class, 'Research_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'Student_id');
    }
    public function lecture()
    {
        return $this->belongsTo(Lecturer::class, 'Lecturer_id');
    }
}
