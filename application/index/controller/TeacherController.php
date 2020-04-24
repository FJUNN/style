<?php

namespace app\index\controller;

use app\common\model\Teacher;
use think\Controller;

/**
 * @Author: Marte
 * @Date:   2019-10-09 08:46:49
 * @Last Modified by:   Marte
 * @Last Modified time: 2019-11-06 11:51:42
 */

/**
 *
 */
class TeacherController extends Controller
{

    public function index()
    {
        // echo "controller of teacher";
        //
        $Teacher  = new Teacher;
        // $teachers = $Teacher->select();
        $pagesize=4;
        $teachers = $Teacher->paginate($pagesize);

        //  $t = $teachers[1];
        // echo($t->getData("username"));
        //把通过模型查到的数据发送到视图文件的a变量
        $this->assign('teacherss', $teachers);

        // var_dump($teachers);
        //
        //获取视图文件
        //
        $htmls = $this->fetch();

        //发送视图文件给用户
        return $htmls;
    }

    public function insert()
    {
        // return "insert action.......";
        //新建测试数据用数组方式
        //         $teacher = array();
        //         $teacher['name'] = "王五";
        //         $teacher['username'] = "wangwu";
        //         $teacher['sex'] = "1";
        //         $teacher['email'] = "wangwu@163.com";
        // //        var_dump($teacher);
        //新建测试数据用对象方式
        $Teacher2 = new Teacher();

        $Teacher2->name     = $_POST['xm'];
        $Teacher2->username = $_POST['yym'];
        $Teacher2->sex      = $_POST['sex'];
        $Teacher2->email    = $_POST['yx'];

        //    $state2=$Teacher2->save();
        // 新增对象至数据表
        $state2 = $Teacher2->validate(true)->save($Teacher2->getData());

        if ($state2) {
            return $this->success("教师信息添加成功", url('index'));
        } else {
            return '新增失败:' . $Teacher2->getError();
        }

        //       return $Teacher2->name . '添加成功' . $Teacher2->id;
        //  var_dump($_POST);
        // $Teacher = new Teacher();
        //输出模型对象
        // var_dump($Teacher);
        //把数组数据插入teacher表
        //        $state = $Teacher->data($teacher)->save();
        //
        //        if ($state)
        //            return $teacher['name'] . '成功添加到数据库';
        //        else {
        //            return $teacher['name'] . '没有添加到数据库';
        //        }
    }

    public function add()
    {
        // return "add action.......";
        //获取视图数据
        $htmls = $this->fetch();
        //把视图数据发给用户
        return $htmls; #B31C1C
    }

    public function delete()
    {
        # code...
        //确定删除哪一条数据
        //return "delete.......";
        //        $x = ($_GET["id"]);

        $x       = \think\Request::instance()->param('id/d'); //接收助手函数发送的id
        $Teacher = Teacher::get($x);
        if (!is_null($Teacher)) {
            //执行删除
            $state = $Teacher->delete();
            if ($state) {
                return $this->success("教师信息删除成功", url('index'));
            }

        }

        return '删除失败!!!';
    }

    public function edit()
    {

        $x       = \think\Request::instance()->param('id/d'); //接收助手函数发送的id
        $Teacher = Teacher::get($x);

        // echo $x;
        // var_dump($Teacher);

        $this->assign('Teac', $Teacher);

        // echo "edit................";
        $htmls = $this->fetch();
        return $htmls;
    }

    public function save()
    {
        $teachera = \think\Request::instance()->post();
        // var_dump($teacher);
        // 新建测试数据用数组方式

        $teacher = array();

        $teacher['id']       = $teachera["id"];
        $teacher['name']     = $teachera["xm"];
        $teacher['username'] = $teachera["yym"];
        $teacher['sex']      = $teachera["sex"];
        $teacher['email']    = $teachera["yx"];

        $Teacher5 = new Teacher();

        $state = $Teacher5->isupdate(true)->save($teacher);

        if ($state) {
            return $this->success("教师信息更新成功", url('index'));
        } else {
            return $this->error("教师信息更新失败", url('edit'));
        }

    }

    public function search()
    {
        // echo "search";
       $x = $_GET["cx"];
       echo $x;

       $Teacher =new Teacher;

     //  $teachers =$Teacher->select();
     //
    $teachers =$Teacher->where('name','like', '%'.$x.'%')->select();

    var_dump($teachers);







    }

}
