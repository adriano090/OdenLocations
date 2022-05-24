<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //Au cas où on écrit le nom de la classe sans respecter la convention de nommage
    protected $table = "articles";
}
