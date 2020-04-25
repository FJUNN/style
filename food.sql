# 创建数据库
CREATE DATABASE `fooddb`;

# 选择数据库
USE `fooddb`;

# food表
CREATE TABLE `food` (
  `id` INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '编号',
  `mcontent` VARCHAR(255) NOT NULL COMMENT '美食',
  `ycontent` VARCHAR(255) NOT NULL COMMENT '养生',
  `date` VARCHAR(255) NOT NULL COMMENT '时间',
  `ccontent` VARCHAR(255) NOT NULL COMMENT '菜品',
  `pic` VARCHAR(68) NOT NULL COMMENT '图片'
) DEFAULT CHARSET=utf8;

# foods表
CREATE TABLE `foods` (
  `id` INT(255) UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '编号',
  `ccontent` VARCHAR(255) NOT NULL COMMENT '菜品'
) DEFAULT CHARSET=utf8;
#
INSERT into `food`(`mcontent`,`ycontent`,`date`,`ccontent`,`pic`)values
('红烧排骨','秋天喉咙痛，你需要这些护嗓食物！','2019-09-28','可乐鸡翅','./images/menu1.jpg'),
('拔丝红薯','中秋团圆，月饼也要“健康”吃','2019-09-28','玉米山药排骨汤','./images/menu2.jpg'),
('凉拌青瓜','专题┊那些美颜食物的神级吃法','2019-09-28','火腿鸡蛋炒饭','./images/menu3.jpg'),
('小蛋糕','专题┊低卡减肥餐，让你瘦到飞起来','2019-09-28','木须柿子瓜片','./images/menu4.jpg'),
('红烧排骨','秋天吃的减肥水果，不妨试试','2019-09-28','','./images/menu5.jpg'),
('拔丝红薯','减肥，从早餐开始','2019-09-28','','./images/menu6.jpg'),
('凉拌青瓜','垃圾食品危害多，发胖是小事','2019-09-28','','./images/menu7.jpg'),
('小蛋糕','眼疲劳不适，上班族如何护眼？','2019-09-28','','./images/menu8.jpg'),
('拔丝红薯','洗澡注意事项，早晚洗澡哪个好？','2019-09-28','',''),
('凉拌青瓜','防癌，从改变饮食习惯开始！','2019-09-28','',''),
('小蛋糕','常喝酒的人，这些食物要多吃','2019-09-28','','');
#
INSERT into `foodS`(`ccontent`)values
('米饭汉堡'),('苏式月饼'),('蔓越莓冰皮月饼'),('花生焖猪蹄');