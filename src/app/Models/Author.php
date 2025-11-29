<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //データを書き換え可能に設定(不可:$guarded)
    protected $fillable = ['name', 'age', 'nationality'];
}
