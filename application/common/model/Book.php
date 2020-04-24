<?php
namespace app\common\model;
use think\Model;
use think\Db;
class Book extends Model
{
	// public function login($data){
	// 	$user=Db::name('admin')->where('user','=',$data['user'])->find();
	// 	if($user){
	// 		if($user['pwd'] == md5($data['pwd'])){
	// 			session('user',$user['user']);
	// 			session('uid',$user['id']);
	// 			return 3; //信息正确
	// 		}else{
	// 			return 2;//密码错误
	// 		}
	// 	}else{
	// 		return 1;//用户不存在
	// 	}
	// }
}
