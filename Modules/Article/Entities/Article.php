<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'image',
    ];


}
