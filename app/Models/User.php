<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    
    protected $fillable = [
        'FullName',
        'DateOfBirth',
        'Gender',
        'Email',
        'PhoneNumber',
        'Address',
        'Hometown',
        'Identity',
        'Image',
        'Nation',
        'Religion',
    ];

    public function student()
    {
        return $this->hasMany(Student::class, 'User_id');
    }
    public function accounts(){
        return $this->hasOne(Account::class,'User_id');
    }
    public function lecturer(){
        return $this->hasMany(Lecturer::class,'User_id');
    } 
    public function admin(){
        return $this->hasMany(Admin::class,'User_id');
    } 
}
