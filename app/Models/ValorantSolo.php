<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorantSolo extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'email',

        'name',
        'phone_number',
        'line',
        'id_riot',
        'tag_riot',
        'rank',
        'institution',
        'idcard',

        'payment',
        'verification',
    ];
}
