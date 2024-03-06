<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowHoiDong extends Model
{
    use HasFactory;
    protected $table = 'councils';

    public function getData($query = null)
{
    // ->join('detail_council', 'detail_council.Council_id', '=', 'councils.ID')
    $data = $this->select('councils.ID','councils.CouncilName');

    if (!empty($query)) {
        $data->where('councils.CouncilName', 'like', '%'.$query.'%');
    }

    return $data->paginate(7);
}
}
