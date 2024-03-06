<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'User_id',
        'Class_id',
        'StudentCode',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function class()
    {
        return $this->belongsTo(Classes::class, 'Class_id');
    }
    public function topic()
    {
        return $this->hasMany(Topic::class, 'Student_id');
    }
    public function getInforStudent($userId)
    {
        $studentInfo = DB::table('students as s')
            ->join('users as u', 's.User_id', '=', 'u.ID')
            ->join('classes as c', 's.Class_id', '=', 'c.ID')
            ->join('majors as m', 'c.Major_id', '=', 'm.ID')
            ->select('u.FullName', 'u.DateOfBirth', 'u.Gender', 'u.Email', 'u.PhoneNumber', 'u.Address', 'u.Hometown', 'u.Identity', 'u.Image', 'u.Nation', 'u.Religion', 's.StudentCode', 'c.ClassName', 'm.MajorName')
            ->where('u.ID', $userId)
            ->first();
        return $studentInfo;
    }
    public function getInforStudentTopic($userId)
    {
        $studentInfo = DB::table('students as s')
            ->join('users as u', 's.User_id', '=', 'u.ID')
            ->join('topics as t', 's.ID', '=', 't.Student_id')
            ->join('lecturers as l', 't.Lecturer_id', '=', 'l.ID')
            ->join('users as ul', 'l.User_id', '=', 'ul.ID')
            ->select('t.*', 's.StudentCode', 'ul.FullName')
            ->where('u.ID', $userId)
            ->first();
        return $studentInfo;
    }
    public function getProgressbyIDStudent($userId)
    {
        $topicStudentInfo = DB::table('students as s')
            ->join('users as u', 's.User_id', '=', 'u.ID')
            ->join('topics as t', 's.ID', '=', 't.Student_id')
            ->join('progresses as p', 't.ID', '=', 'p.Topic_id')
            ->select('p.*')
            ->where('u.ID', $userId)
            ->get();
        return $topicStudentInfo;
    }
    public function getPontbyIDStudent($userId)
    {
        $pointStudentInfo = DB::table('students as s')
            ->join('users as u', 's.User_id', '=', 'u.ID')
            ->join('topics as t', 's.ID', '=', 't.Student_id')
            ->join('points as p', 't.Point_id', '=', 'p.ID')
            ->select('p.*', 't.Title')
            ->where('u.ID', $userId)
            ->get();
        if ($pointStudentInfo->isEmpty()) {

            return null;
        }
        return $pointStudentInfo;
    }
}
