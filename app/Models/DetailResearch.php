<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailResearch extends Model
{
    use HasFactory;
    protected $table = 'detail_research';
    protected $fillable = ['Lecturer_id', 'Research_id'];
    
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function research()
    {
        return $this->belongsTo(Research::class);
    }
    
}
