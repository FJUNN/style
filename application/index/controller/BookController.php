<?php
namespace app\index\controller;

use think\Db;
use app\common\model\Book;
use think\Controller;
use think\validate;


class BookController extends Controller
{

    public function index()
    {   
    
        $book  = new book;
        $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('book', $books);
        //获取视图文件
        $htmls = $this->fetch();
        //发送视图文件给用户
        return $htmls;
    }
    //获取登陆页面
    public function denglu()
    {   
    
        $book  = new book;
        $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('book', $books);
        //获取视图文件
        $htmls = $this->fetch();
        //发送视图文件给用户
        return $htmls;
    }
    //获取login视图
    public function login()
    {   
    
        $book = new book;
        // $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('kehu', $book);
        //获取视图文件
        $htmls = $this->fetch();
        //发送视图文件给用户
        return $htmls;
    }

    //login客户端插入数据至表，添加用户注册
    public function register()
    {
        // 新增对象至数据表
        // $kehu['pwd']=htmlspecialchars($_POST['pwd']);
        // $validate = new  Validate([ // 实例化，验证类                
        // 'user' => 'require|length:6,18', // 以数组的形式写出要验证的字段|并验证规则                
        // 'password' => 'require|length:6,16'            
        // ]);            
        // $data=[ // 要验证数组                
        // 'user'=> input('user'), // 前面的"username"和"password"是和数据表里的字段对应 
        // 'password'=>input('password') , //  后面的"username"和"password"是和表单提交过来的数据name值只对应 
        //  ];            
        //  if(!$validate->check($data)){  // 执行验证               
        //   return $this->error('')             
        // }
        $kehu['user']=htmlspecialchars($_POST['user']);
        $kehu['pwd']=md5(htmlspecialchars($_POST['pwd']));
        $kehu['create_time']=time();
        $kehu['update_time']=time();
        if($kehu1=Db::name('kehu')->where('user','=',$kehu['user'])->find()){
            return $this->error('账号已存在,注册失败:',url('login'));
        }
        $kehu1=Db::name('kehu')->insert($kehu);    
        if ($kehu1) {
            return $this->success("注册成功", url('denglu'));
        } else {
            return $this->error('账号已存在,注册失败:' . $kehu1->getError(),url('login'));
        }
    }

    //denglu客户端登陆验证
    public function land(){  
        $date['user']=htmlspecialchars($_POST['user']);
        $date['pwd']=md5(htmlspecialchars($_POST['pwd']));
        $book=Db::name('kehu')->where('user','=',$date['user'])->find();
        if(($date['user']!=$book['user'])||($date['pwd']!=$book['pwd']))
            return $this->success("登录失败，密码或用户名有误！！！",url('denglu'));
        else
            (session('user',$date['user']));
            return $this->success("登陆成功",'url:index');
    }
    //book简介页面
    public function subpage(){
        if(!session('user')){
        return $this->error('未登陆，请去登陆！！！',url('denglu'));
    }
        $book=new book;
        $x=\think\Request::instance()->param('id/d'); //接收助手函数发送的id
        //$book=book::get($x);//获取id
        $book= $book->where('id',$x)->select();
        $this->assign('book', $book);
        //视图
        $htmls = $this->fetch();
        //return $htmls;

        //发送视图文件给用户
        return $htmls;
    }

    //admin注册登陆视图
    public function admin_land(){
        $book  = new book;
        $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('book', $books);
        //获取视图文件
        $htmls = $this->fetch();
        //发送视图文件给用户
        return $htmls;
    }
    //admin_land注册 插入数据至数据库
    public function adminld()
    {
        // 新增对象至数据表
        $admin['email']=htmlspecialchars($_POST['email']);
        $admin['user']=htmlspecialchars($_POST['user']);
        $admin['pwd']=md5(htmlspecialchars($_POST['pwd']));
        $admin['create_time']=time();
        $admin['update_time']=time();
        if($admin1=Db::name('admin')->where('email','=',$admin['email'])->find()){
            return $this->error('账号已存在,注册失败:',url('admin_land'));
        }
        $admin1=Db::name('admin')->insert($admin);    
        if ($admin1) {
            return $this->success("注册成功", url('admin_login'));
        } else {
            return $this->error('账号已存在,注册失败:' . $admin1->getError(),url('admin_land'));
        }
    }
    //admin_login注册操作
    public function admin_login(){
        $book  = new book;
        $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('book', $books);
        //获取视图文件
        $htmls = $this->fetch();
        //发送视图文件给用户
        return $htmls;
    }
    //admin_login登陆验证
    public function admin_ln(){  
        $date['email']=htmlspecialchars($_POST['email']);
        $date['pwd']=md5(htmlspecialchars($_POST['pwd']));
        $book=Db::name('admin')->where('email','=',$date['email'])->find();
        if(($date['email']!=$book['email'])||($date['pwd']!=$book['pwd']))
            return $this->success('登录失败，密码或用户名有误！！！',url('admin_login'));
        else
            (session('email',$date['email']));
            return $this->success("登陆成功",url('back_look'));
    }
    //后台操作视图
    public function back_look()
    {   
        if(!session('email')){
        return $this->error('未登陆，请去登陆！！！',url('admin_login'));
    }
        $book  = new book;
        $books = $book->select();
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('book', $books);
        //获取视图数据
        $htmls = $this->fetch();
        //把视图数据发给用户
        return $htmls; 
    }
    //后台添加至index and subpage 数据
    public function insert()
    {
        //新建测试数据用对象方式
        $book2 = new book();
        $book2->pic=$_POST['pic'];
        $book2->title=$_POST['title'];
        $book2->author=$_POST['author'];
        $book2->text=$_POST['text'];
        $book2->text1=$_POST['text1'];
        $book2->price=$_POST['price'];
        $book2->create_time=time();
        $book2->update_time=time();
        // $state2=$book2->save();
        // 新增对象至数据表
        $state2 = $book2->validate(true)->save($book2->getData());
        if ($state2) {
            return $this->success("添加成功", url('back_look'));
        } else {
            return $this->error('添加失败:' . $book2->getError(),url('back_look'));
        }
    }
    //编辑修改表数据
    public function edit()
    {

        $x=\think\Request::instance()->param('id/d'); //接收助手函数发送的id
        $book = book::get($x);
        //获取视图
        $this->assign('book', $book);
        $htmls = $this->fetch();
        return $htmls;
    }
    //删除表数据
    public function delete()
    {
        # code...
        //确定删除哪一条数据
        //return "delete.......";
        //        $x = ($_GET["id"]);

        $x=\think\Request::instance()->param('id/d'); //接收助手函数发送的id
        $book=book::get($x);
        if (!is_null($book)) {
            //执行删除
            $state = $book->delete();
            if ($state) {
                return $this->success("删除成功", url('back_look'));
            }

        }

    }
    //后台添加页视图
    public function back_add()
    {

        $x=\think\Request::instance()->param('id/d'); //接收助手函数发送的id
        $book=book::get($x);//获取id
        $this->assign('book', $book);
        //视图
        $htmls = $this->fetch();
        return $htmls;
    }
    //保存修改后的数据，并传入数据库表
    public function save()
    {
        $booka = \think\Request::instance()->post();
        // 保存数据

        $book = array();
        $book['id']     = $booka["id"];
        $book['pic']    = $booka["pic"];
        $book['title']  = $booka["title"];
        $book['text']   = $booka["text"];
        $book['text1']  = $booka["text1"];
        $book['author'] = $booka["author"];
        $book['price']  = $booka["price"];
        $book['create_time']=time();
        $book['update_time']=time();

        $book5 = new book();

        $state = $book5->isupdate(true)->save($book);

        if ($state) {
            return $this->success("信息更新成功", url('back_look'));
        } else {
            return $this->error("信息更新失败", url('back_look'));
        }

    }

}
