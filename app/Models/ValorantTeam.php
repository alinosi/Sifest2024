<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValorantTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_name',
        'email',

        'name1',
        'phone_number1',
        'line1',
        'id_riot1',
        'tag_riot1',
        'rank1',
        'institution1',
        'idcard1',
        
        'name2',
        'phone_number2',
        'line2',
        'id_riot2',
        'tag_riot2',
        'rank2',
        'institution2',
        'idcard2',
        
        'name3',
        'phone_number3',
        'line3',
        'id_riot3',
        'tag_riot3',
        'rank3',
        'institution3',
        'idcard3',
        
        'name4',
        'phone_number4',
        'line4',
        'id_riot4',
        'tag_riot4',
        'rank4',
        'institution4',
        'idcard4',
        
        'name5',
        'phone_number5',
        'line5',
        'id_riot5',
        'tag_riot5',
        'rank5',
        'institution5',
        'idcard5',
        
        'payment',
        'verification',
    ];
}
