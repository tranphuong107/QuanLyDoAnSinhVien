<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $table = 'researchs';
    protected $primaryKey ='ID';
    protected $fillable = [
        'ResearchName',
    ];
    public function topic()
    {
        return $this->hasMany(Topic::class, 'Research_id');
    }
}
