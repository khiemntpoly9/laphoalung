<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Khoá chính
    protected $primaryKey = 'id_user';
    // Tên bảng trên CSDL
    protected $table = 'users';
}
