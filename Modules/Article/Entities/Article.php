<?php

namespace Modules\Article\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\User\Entities\User;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'user_id',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
