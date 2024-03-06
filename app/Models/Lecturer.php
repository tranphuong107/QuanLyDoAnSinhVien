<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    protected $table = 'lecturers';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'LecturerCode',
        'Degree',
        'Position',
        'Department_id',
        'User_id',
        'Log_id',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
    public function department()
    {
        return $this->belongsTo(Department::class, 'Department_id');
    }

    public function topic()
    {
        return $this->hasMany(Topic::class, 'Lecturer_id');
    }
    public function researches()
    {
        return $this->belongsToMany(Research::class, 'detail_research', 'Lecturer_id', 'Research_id');
    }
    public function council(){
        return $this->belongsToMany(Council::class,'detail_council')
                    ->using(LecturerCouncil::class)
                    ->withPivot('Position');
    }
}
