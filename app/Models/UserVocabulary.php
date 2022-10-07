<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVocabulary extends Model
{
    use HasFactory;

    protected $table = 'user_vocabulary';

    protected $fillable = ['user_id', 'vocabulary_id', 'times'];
}
