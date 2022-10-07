<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeKanji extends Model
{
    use HasFactory;

    protected  $table = 'type_kanji';

    protected $fillable = ['name', 'description'];
}
