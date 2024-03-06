<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanCongSV extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function getData()
    {
        return $this->join('users', 'users.ID', '=', 'students.User_id')
            ->join('classes', 'students.Class_id', '=', 'classes.ID')
            ->join('topics', 'topics.Student_id', '=', 'students.ID')
            ->join('researchs', 'researchs.ID', '=', 'topics.Research_id')
            ->select('students.ID', 'users.FullName', 'students.StudentCode', 'classes.ClassName', 'topics.Title', 'researchs.ResearchName')
            ->paginate(7);
    }
}
