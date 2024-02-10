<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //レコード書き換え可の設定
    protected $fillable = ['name', 'age', 'nationality'];
    //データ表示の加工設定
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age . '才' . ') ' . $this->nationality;
        return $txt;
    }
    //hasOneリレーションの設定
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
    //hasManyリレーションの設定
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
