<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    //データを書き換え可能に設定(不可:$guarded)
    protected $fillable = ['name', 'age', 'nationality'];

    public function getDetail()
    {
        $txt = 'ID:'.$this->id.' '.$this->name.'('.$this->age.'才'.')'.$this->nationality;
        return $txt;
    }

    //1対1で取り出す
    public function book()
    {
        return $this->hasOne('App\Models\Book');
    }

    //1対多で取り出す
    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }
}
