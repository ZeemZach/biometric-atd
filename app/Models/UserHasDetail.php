<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'roll_no',
        'finger_id',
        'user_id',
    ];
    
    public function user()
    {
        return $this->belongsTo(user::class, 'user_id', 'id');
    }
}
