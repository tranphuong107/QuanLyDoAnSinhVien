<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    use HasFactory;
    protected $table = 'councils';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'CouncilName',
        'Period_id'
    ];
    public function lecturer(){
        return $this->belongsToMany(Lecturer::class,'detail_council')
                    ->using(LecturerCouncil::class)
                    ->withPivot('Position');
    }
}
