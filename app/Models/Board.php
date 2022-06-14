<?php
// 此檔案使用指令生出 php artisan make:model Board -rmc
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 將資料表欄位填寫在此處
    protected $fillable = [
        'user_id',
        'title',
        'mood',
        'content',
        'create_time',
        'update_time',
    ];
}
