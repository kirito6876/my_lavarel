<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "admin";
    protected $primaryKey = "id";
    public $timestamps = false; // 更新数据库时防止lavarel自动创建一个update_at字段
}
