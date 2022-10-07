<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanji extends Model
{
    use HasFactory;

    protected $table = 'kanji';

    protected $fillable = ['content', 'image_url', 'sino_vn_reading', 'meaning', 'type_kanji_id',
        'on_pronun', 'kun_pronun', 'description', 'writing_style_url'];
}
