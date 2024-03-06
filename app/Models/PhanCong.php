<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhanCong extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function getData($ID)
    {
        return $this->join('lecturers', 'users.ID', '=', 'lecturers.User_id')
                    ->join('topics', 'lecturers.ID', '=', 'topics.Lecturer_id')
                    ->join('researchs','researchs.ID','=','topics.Research_id')
                    ->where('users.ID', $ID)
                    ->select('users.ID','users.FullName', 'lecturers.LecturerCode','researchs.ResearchName')
                    ->get();
    }
    
    public function getDataGV()
    {
        return $this->join('lecturers', 'users.ID', '=', 'lecturers.User_id')
                    ->join('topics', 'lecturers.ID', '=', 'topics.Lecturer_id')
                    ->join('researchs','researchs.ID','=','topics.Research_id')
                    ->select('users.ID','users.FullName', 'lecturers.LecturerCode','researchs.ResearchName','topics.Research_id','topics.Lecturer_id')
                    ->paginate(7);
    }
}
