<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'description', 
        'author', 
        'pages'
    ];

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $builder){
            $builder->orderBy('name');
        });
    }
}
