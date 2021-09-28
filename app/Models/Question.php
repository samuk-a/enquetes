<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Question extends Model
{
    use HasApiTokens;

    protected $fillable = [
        'survey_id',
        'content',
        'votes_count'
    ];
}
