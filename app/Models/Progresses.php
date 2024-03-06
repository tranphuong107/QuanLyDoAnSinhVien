<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progresses extends Model
{
    use HasFactory;
    protected $table = 'progresses';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'TaskName',
        'StartTime',
        'EndTime',
        'Status',
        'Report',
        'Comments',
        'Topic_id',
        'Log_id',
        'TaskPoint',
    ];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'Topic_id');
    }
}
