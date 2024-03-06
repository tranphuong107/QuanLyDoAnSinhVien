<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'admins';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'Position',
        'User_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }
}
