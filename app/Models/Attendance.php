<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'finger_id',
        'created_at',
        'updated_at',
    ];

    public function userDetail()
    {
        return $this->belongsTo(UserHasDetail::class, 'finger_id', 'finger_id')->with('user');
    }
}
