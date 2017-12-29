<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //配置完.env中的database后，要引入这个包
use App\Http\Model\UserModel;

class DatabaseController extends Controller
{
    public function index () {
      // 连接数据库
      // $pdo = DB::connection()->getPdo();
      // dd($pdo); //打印并结束下面进程

      //定位数据库中的表
      // $admin = DB::table('admin')->where('id', 2)->get();
      // dd($admin);

      //利用模型操作数据库
      // $user = UserModel::where('id', 3)->get();
      // dd($user);

      $user = UserModel::find(1); //提取出主键等于3的数据
      $user->username = 'wangtie'; // 修改表中某一个字段
      $user->update();
      dd($user);

      return view('welcome');
    }
}
