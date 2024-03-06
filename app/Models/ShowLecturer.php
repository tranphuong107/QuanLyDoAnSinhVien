<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowLecturer extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function getData($query = null)
    {
        $data = $this->join('lecturers', 'users.ID', '=', 'lecturers.User_id')
        ->join('departments','departments.ID','=','lecturers.Department_id')
        ->select('users.ID','users.FullName', 'lecturers.LecturerCode','departments.DepartmentName');
      
        if(!empty($query)){
            $data->where('users.FullName','like','%'.$query.'%')
                ->orwhere('lecturers.LecturerCode','like','%'.$query.'%')
                ->orwhere('departments.DepartmentName','like','%'.$query.'%');
        }
        return $data->paginate(7);
    }
}
