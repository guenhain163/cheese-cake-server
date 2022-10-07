<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KanjiVocabulary extends Model
{
    use HasFactory;

    protected $table = 'kanji_vocabulary';

    protected $fillable = ['vocabulary_id', 'kanji_id'];
}
