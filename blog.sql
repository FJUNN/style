-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 
-- 服务器版本: 5.5.53
-- PHP 版本: 7.0.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `active`
--

CREATE TABLE IF NOT EXISTS `active` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL COMMENT '图片',
  `text` varchar(255) NOT NULL COMMENT '文章',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='活动专区' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `active`
--

INSERT INTO `active` (`id`, `pic`, `text`) VALUES
(1, 0x696d616765732f712e6a7067, ' 真的痛，总是来得很轻盈，没声音，从背后慢慢缓缓抱着我，就象你。'),
(3, '', ' 势的新零售正厚积薄发');

-- --------------------------------------------------------

--
-- 表的结构 `ailu`
--

CREATE TABLE IF NOT EXISTS `ailu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='爱旅游' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `ailu`
--

INSERT INTO `ailu` (`id`, `content`, `lianjie`) VALUES
(10, '赤壁之战乾坤转，东风送我第一船。', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `aimei`
--

CREATE TABLE IF NOT EXISTS `aimei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='爱美食' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `aimei`
--

INSERT INTO `aimei` (`id`, `content`, `lianjie`) VALUES
(1, ' 流言也动听，大雪随它飘', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `aishe`
--

CREATE TABLE IF NOT EXISTS `aishe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='爱摄影' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `aishe`
--

INSERT INTO `aishe` (`id`, `content`, `lianjie`) VALUES
(2, ' 是', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `dahua`
--

CREATE TABLE IF NOT EXISTS `dahua` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dahua`
--

INSERT INTO `dahua` (`id`, `content`, `lianjie`) VALUES
(1, '·你若太害怕，闭上眼就好，流言也动听，大雪随它飘', NULL),
(3, '渐渐的夜色暗了，东风慢慢的吹。', '');

-- --------------------------------------------------------

--
-- 表的结构 `dakasay`
--

CREATE TABLE IF NOT EXISTS `dakasay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL,
  `fabiao` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='博客大咖说' AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `dakasay`
--

INSERT INTO `dakasay` (`id`, `pic`, `fabiao`, `name`) VALUES
(36, 0x696d616765732f71712e6a7067, '欢迎收听Like聆听，我是小阔基', '阔基'),
(34, 0x696d616765732f71712e6a7067, ' I like IT.', '倪俊忠');

-- --------------------------------------------------------

--
-- 表的结构 `et`
--

CREATE TABLE IF NOT EXISTS `et` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `time` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL COMMENT '邮政',
  `tel` varchar(15) NOT NULL COMMENT '手机',
  `pwd` varchar(60) NOT NULL COMMENT '密码',
  `xq` varchar(60) NOT NULL COMMENT '兴趣标签',
  `yan` varchar(25) NOT NULL COMMENT '验证码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED COMMENT='注册' AUTO_INCREMENT=78 ;

--
-- 转存表中的数据 `et`
--

INSERT INTO `et` (`id`, `time`, `email`, `tel`, `pwd`, `xq`, `yan`) VALUES
(47, '2019-11-04 02:56:47', '1185826082@qq.com', '', 'e10adc3949ba59abbe56e057f20f883e', '新闻', ''),
(77, '2019-11-11 08:54:07', '', '13570194731', 'e10adc3949ba59abbe56e057f20f883e', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `everyday`
--

CREATE TABLE IF NOT EXISTS `everyday` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL COMMENT '文章',
  `lianjie` varchar(60) NOT NULL COMMENT '超链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='每日精选' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `everyday`
--

INSERT INTO `everyday` (`id`, `text`, `lianjie`) VALUES
(1, ' 我不知道，何为意外，如果真心相爱，为何不相信未来。', 'margin/q.png'),
(4, '', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `everydaypicsay`
--

CREATE TABLE IF NOT EXISTS `everydaypicsay` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL,
  `name` varchar(25) NOT NULL,
  `text` varchar(255) NOT NULL,
  `lianjie` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='每日图说' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `everydaypicsay`
--

INSERT INTO `everydaypicsay` (`id`, `pic`, `name`, `text`, `lianjie`) VALUES
(1, 0x696d616765732f352e6a7067, '胡歌', '胡歌，我以为我就是自由自在的光棍，我以为我就是自由自在的光棍，我以为我就是自由自在的光棍', '');

-- --------------------------------------------------------

--
-- 表的结构 `jujiao`
--

CREATE TABLE IF NOT EXISTS `jujiao` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pm` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `title1` varchar(60) NOT NULL,
  `title2` varchar(60) NOT NULL,
  `text` varchar(60) DEFAULT NULL,
  `lianjie` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='聚焦' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `jujiao`
--

INSERT INTO `jujiao` (`id`, `pm`, `title`, `title1`, `title2`, `text`, `lianjie`) VALUES
(6, 0, '数字经济风靡的背后', '蓄势的新零售正厚积薄发', '百货业的新零售驶向何方？', '百货业的新零售驶向何方？', 'margin/q.png'),
(9, 0, '东风又祝cool博客扬起', 'cool博客', 'good', '博客之家欢迎您，热烈欢迎您的观看。', '../');

-- --------------------------------------------------------

--
-- 表的结构 `selectpic`
--

CREATE TABLE IF NOT EXISTS `selectpic` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片精选' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `talk`
--

CREATE TABLE IF NOT EXISTS `talk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `text` varchar(255) NOT NULL,
  `pic` blob NOT NULL,
  `name` varchar(25) NOT NULL,
  `time` varchar(25) NOT NULL,
  `pl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章评论区' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `talk`
--

INSERT INTO `talk` (`id`, `title`, `text`, `pic`, `name`, `time`, `pl`) VALUES
(1, '嗨', '仙剑奇侠传', 0x696d616765732f64616b61312e6a7067, '胡歌', '2019-10-25', ''),
(2, 'U SEE ME', '看见你的星星。', '', '倪俊忠', '2019-10-28 07:51:21', ''),
(3, '立冬', '记得进补。', '', '倪俊忠', '2019-10-28 10:51:58', ''),
(4, '立冬', '&lt;(￣︶￣)↗[GO!]', '', '倪俊忠', '2019-11-06 09:01:01', ''),
(5, 'U SEE ME', '&lt;(￣︶￣)↗[GO!]', '', '君子', '2019-11-06 09:02:25', ''),
(7, 'U SEE ME', 'jkk', 0x696d616765732f712e6a7067, '倪俊忠', '2019-11-07 05:39:32', '');

-- --------------------------------------------------------

--
-- 表的结构 `tiyu`
--

CREATE TABLE IF NOT EXISTS `tiyu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='体育星' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tiyu`
--

INSERT INTO `tiyu` (`id`, `content`, `lianjie`) VALUES
(1, ' ·你若太害怕，闭上眼就好，流言也动听，大雪随它飘', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `todaypm`
--

CREATE TABLE IF NOT EXISTS `todaypm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pm` int(25) NOT NULL,
  `lianjie` varchar(30) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='今日热文排名' AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `weekpm`
--

CREATE TABLE IF NOT EXISTS `weekpm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pm` int(11) NOT NULL COMMENT '排名',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='每周人气排名' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `weekpm`
--

INSERT INTO `weekpm` (`id`, `pm`, `pic`, `name`) VALUES
(1, 1, 'images/daka1.jpg', '胡歌'),
(2, 2, 'images/daka1.jpg', '胡歌');

-- --------------------------------------------------------

--
-- 表的结构 `workertj`
--

CREATE TABLE IF NOT EXISTS `workertj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic` blob NOT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='作者推荐' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `workertj`
--

INSERT INTO `workertj` (`id`, `pic`, `name`) VALUES
(1, 0x696d616765732f64616b61312e6a7067, '胡歌');

-- --------------------------------------------------------

--
-- 表的结构 `xingzuo`
--

CREATE TABLE IF NOT EXISTS `xingzuo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='星座达人' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `xingzuo`
--

INSERT INTO `xingzuo` (`id`, `content`, `lianjie`) VALUES
(3, ' 你若太害怕，闭上眼就好，流言也动听，大雪随它飘', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `yuer`
--

CREATE TABLE IF NOT EXISTS `yuer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='育儿篇' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `yuer`
--

INSERT INTO `yuer` (`id`, `content`, `lianjie`) VALUES
(1, '  你若太害怕，闭上眼就好，流言也动听，大雪随它飘。', 'margin/q.png'),
(3, '不一样的阳光', 'margin/q.png');

-- --------------------------------------------------------

--
-- 表的结构 `yule`
--

CREATE TABLE IF NOT EXISTS `yule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `lianjie` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='娱乐' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `yule`
--

INSERT INTO `yule` (`id`, `content`, `lianjie`) VALUES
(1, '6666', 'margin/q.png'),
(2, '11', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
