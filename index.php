<?php
require './common/init.php';
require './common/function.php';
// 获取当前页码
$page = max(input('get', 'page', 'd'), 1);
// 每页显示的条数
$size = 3;

$sql = 'SELECT count(*) from `wish`';
if (!$res = mysqli_query($link, $sql)) {
    exit("SQL[$sql]执行失败：" . mysqli_error($link));
}
$total = (int) mysqli_fetch_row($res);
// 查询所有留言
$sql = 'SELECT `id`,`name`,`content`,`time`,`color` FROM `wish` ORDER BY `id` DESC LIMIT ' . page_sql($page, $size);
//$sql='select `id`,`name`,`content`,`time`,`color` from `wish` order by `id` desc limit '.page_sql($page,$size);
//mysqli_fetch_assoc()和mysqli_fetch_row()都是把查询结果返回到一个数组中，都是返回第一行然后指针下移一行;mysqli_fetch_object()将一行取回到一个对象中，然后通过类的方式取值;mysqli_fetch_array() 来使用或输出所有查询的数据;mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有 返回根据从结果集取得的行生成的数组，如果没有更多行则返回 false。
if (!$res = mysqli_query($link, $sql)) {
    exit("SQL[$sql]执行失败：" . mysqli_error($link));
}
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_free_result($res);

// 查询结果为空时，自动返回第1页
if (empty($data) && $page > 1) {
    header('Location: ./index.php?page=1');
    exit;
}

// 编辑或删除留言
$id = max(input('get', 'id', 'd'), 0);
$action = input('get', 'action', 's');
if ($id) {
    $password = input('post', 'password', 's');
    $sql = 'SELECT `name`,`content`,`color`,`password` FROM `wish` WHERE `id`=' . $id;
    if (!$res = mysqli_query($link, $sql)) {
        exit("SQL[$sql]执行失败：" . mysqli_error($link) . $sql);
    }
    if (!$edit = mysqli_fetch_assoc($res)) {
        exit('该留言不存在！');
    }
    mysqli_free_result($res);
    $checked = isset($_POST['password']) || empty($edit['password']);
    if ($checked && $password !== $edit['password']) {
        $tips = '密码不正确！';
        $checked = false;
    }
    // 删除留言
    if ($checked && $action == 'delete') {
        $sql = 'DELETE FROM `wish` WHERE `id`=' . $id;
        if (!mysqli_query($link, $sql)) {
            exit('SQL执行失败：' . mysqli_error($link));
        }
        header('Location: ./index.php');
        exit;
    }
}

mysqli_close($link);
require './view/index.html';
