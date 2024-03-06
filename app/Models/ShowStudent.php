<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;



class ShowStudent extends Model
{
    use HasFactory;
    protected $table = 'users';
    
    public function getData($query = null)
    {
        $data = $this->join('students', 'users.ID', '=', 'students.User_id')
            ->join('classes', 'students.Class_id', '=', 'classes.ID')
            ->select('users.ID', 'users.FullName', 'students.StudentCode', 'classes.ClassName');

        if (!empty($query)) {
            $data->where('users.FullName', 'like', '%' . $query . '%')
                ->orWhere('students.StudentCode', 'like', '%' . $query . '%')
                ->orWhere('classes.ClassName', 'like', '%' . $query . '%');
        }

        return $data->paginate(7);
    }
    public function getDataSV($ID, $query = null)
    {
        $datasv = User::select('users.FullName', 'users.Image', 'students.StudentCode', 'classes.ClassName', 'users.PhoneNumber', 'users.Email', 'majors.MajorName', 'researchs.ResearchName','topics.ID')
            ->join('students', 'users.ID', '=', 'students.User_id')
            ->join('classes', 'classes.ID', '=', 'students.Class_id')
            ->join('majors', 'majors.ID', '=', 'classes.Major_id')
            ->join('topics', function ($join) use ($ID) {
                $join->on('topics.Student_id', '=', 'students.ID')
                    ->join('lecturers', 'topics.Lecturer_id', '=', 'lecturers.ID')
                    ->where('lecturers.User_id', '=', $ID)
                    ->where ('topics.Status', '=','2');
                    
            })
            ->join('researchs', 'researchs.ID', '=', 'topics.Research_id');
        if (!empty($query)) {
            $datasv->where('users.FullName', 'like', '%' . $query . '%')
                ->orWhere('students.StudentCode', 'like', '%' . $query . '%')
                ->orWhere('classes.ClassName', 'like', '%' . $query . '%');
        }

        return $datasv->paginate(7);

    }
    public function getDataSV_PhuTrach($ID, $query = null)
    {
        $datasv = User::select('users.FullName', 'users.Image', 'students.StudentCode', 'classes.ClassName', 'users.PhoneNumber', 'users.Email', 'majors.MajorName', 'researchs.ResearchName','topics.Title')
            ->join('students', 'users.ID', '=', 'students.User_id')
            ->join('classes', 'classes.ID', '=', 'students.Class_id')
            ->join('majors', 'majors.ID', '=', 'classes.Major_id')
            ->join('topics', function ($join) use ($ID) {
                $join->on('topics.Student_id', '=', 'students.ID')
                    ->join('lecturers', 'topics.Lecturer_id', '=', 'lecturers.ID')
                    ->where('lecturers.User_id', '=', $ID)
                    ->where ('topics.Status', '=','1');
            })
            ->join('researchs', 'researchs.ID', '=', 'topics.Research_id');

        if (!empty($query)) {
            $datasv->where('users.FullName', 'like', '%' . $query . '%')
                ->orWhere('students.StudentCode', 'like', '%' . $query . '%')
                ->orWhere('classes.ClassName', 'like', '%' . $query . '%');
        }

        return $datasv->paginate(7);

    }
}
