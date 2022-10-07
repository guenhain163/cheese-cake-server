<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserKanji extends Model
{
    use HasFactory;

    protected $table = 'user_kanji';

    protected $fillable = ['user_id', 'kanji_id', 'times'];
}
