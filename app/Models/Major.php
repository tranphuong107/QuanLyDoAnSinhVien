<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $table = 'majors';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'MajorName',
    ];

    public function class()
    {
        return $this->hasMany(Classes::class, 'Major_id');
    }
}
