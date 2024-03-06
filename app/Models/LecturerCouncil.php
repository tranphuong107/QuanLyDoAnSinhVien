<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LecturerCouncil extends Pivot
{
    use HasFactory;
    protected $table = 'detail_council';

    protected $fillable = ['Position'];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function council()
    {
        return $this->belongsTo(Council::class);
    }
}
