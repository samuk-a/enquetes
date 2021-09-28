<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Survey extends Model
{
    use HasApiTokens;

    protected $fillable = [
        'question',
        'created_by'
    ];
}
