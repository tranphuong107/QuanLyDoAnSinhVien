<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeleteStudent extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    public function deleteById($id)
    {
        return $this->where('ID', $id)->delete();
    }
}
