<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasFactory;
    protected $table = 'accounts';
    protected $primaryKey = 'ID';
    public $timestamps = false;
    protected $fillable = [
        'UserName',
        'Password',
        'CreateAt',
        'Role_id',
        'User_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'User_id');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'Role_id');
    }
    public static function checkAccount($admin_acc, $admin_pass)
    {

        return DB::table('accounts')
            ->join('users', 'accounts.User_id', '=', 'users.ID')
            ->select('accounts.*', 'users.*')
            ->where('accounts.UserName', '=', $admin_acc)
            ->where('accounts.Password', '=', $admin_pass)
            ->first();
    }

}
