<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'clientname',
        'clientnumber',
        'status',
    ];

    public function User()
    {
        return $this->belongsTo(User::class,'user_id', 'id')->withDefault();
    }
}
