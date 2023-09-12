<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $PrimaryKey = 'book_id';
    protected $fillable = [
        'author',
        'title',
        'pieces',
    ];
}
