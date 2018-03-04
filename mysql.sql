-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018-02-07 07:39:20
-- 服务器版本： 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--
CREATE DATABASE IF NOT EXISTS `admin` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `admin`;

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) NOT NULL,
  `tell` varchar(255) NOT NULL,
  `pinyin` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`cid`, `names`, `tell`, `pinyin`) VALUES
(1, '武宇', '13623468951', 'wuyu'),
(2, '邓鹏', '18636705202', 'dengpeng'),
(3, '何老师', '13436335467', 'helaoshi'),
(4, '金波', '18866586974', 'jinbo'),
(5, '纪静真', '23733462857', 'jijingzhen'),
(6, '李杰', '57293357029', 'lijie'),
(7, '刘桐', '46129419745', 'liutong');

-- --------------------------------------------------------

--
-- 表的结构 `manger`
--

DROP TABLE IF EXISTS `manger`;
CREATE TABLE IF NOT EXISTS `manger` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manger`
--

INSERT INTO `manger` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'dengpeng', '1994');
--
-- Database: `ed180105`
--
CREATE DATABASE IF NOT EXISTS `ed180105` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ed180105`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '标识符',
  `userName` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(20) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `userName`, `password`) VALUES
(1, 'dengpeng', '1216'),
(2, 'wyuu', '9422');

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`id`, `username`, `pwd`) VALUES
(1, 'deng', '9422'),
(2, 'wuyu', '1216');
--
-- Database: `home`
--
CREATE DATABASE IF NOT EXISTS `home` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `home`;

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `atitle` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `aimages` varchar(255) NOT NULL,
  `apid` varchar(255) NOT NULL,
  `rid` tinyint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`aid`, `atitle`, `article`, `aimages`, `apid`, `rid`) VALUES
(1, '测试1', '测试1', '', '8', 0),
(2, '现代简约风', '                    现在人的生活快节奏、高负荷，都希望给自己的生活做一些减法，希望家里是一个非常舒适、非常放松、非常简单的生活环境，于是简约风在家装中越来越受到欢迎。简约主义风格正在大行其道，并悄然兴起了盛行极简风的浪潮，简约而不简单的流行趋势，使得当下众多居家人士在寻求一种让生活环境变得清新舒适的方法。/今天介绍的就是一个简约主义风格的家。以白色为基调，大面积的白色，清新自然。以浅灰色和棕色为辅，惬意舒适的同时，又营造出高品位的视觉感受。自然清新的色调、点缀着时下几株流行的亮色，干净利落的厨房却隐藏了巧妙的智能设备和强大的收纳空间，更有书架变身墙头背景墙的别出心裁。整个空间在保持功能和谐的前提下，又融入设计师个性化的创意与表现，环环相扣的空间以线条的美感尽现时尚简约的家居美学；充分利用瓷砖和石材的特质，让整个空间干净、通透。/家，无需过度装饰，低调而奢华的品质藏于质感丰厚的细节中。在格调家私的家居世界里，没有浮夸的造型，没有抢眼的色彩，一切选择只为塑造简约温馨的家居空间。大量使用低调、素净的色彩不仅有利于灵活的空间搭配，从视觉效果上来说也最为放松。/简约却不简单，格调沙发演绎的正是优雅低调的现代时尚风情。纯净奶油白清新百搭;高级灰优雅兼具时尚;大地色温润柔和;深蓝色低调沉稳……没有眼花缭乱的搭配组合，在有温度的色泽中展现着沉静闲适的气息，塑造有文化品味生活。                ', '/home/static/upload/2018-01-25-11/1516852193.jpg', '9', 0),
(3, '用家给父母美好的时光', '用家给父母美好的时光        ', '', '6', 0),
(4, '把“芬兰”带回家 北欧风美家装扮灵感', '                    美好时光测试详情文章                ', '', '7', 0);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL,
  `enname` varchar(255) NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `cdesc` varchar(255) NOT NULL,
  `cpid` varchar(255) NOT NULL DEFAULT '0',
  `isshow` varchar(255) NOT NULL,
  `ctemp` varchar(255) NOT NULL,
  `cmodel` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `enname`, `cimage`, `cdesc`, `cpid`, `isshow`, `ctemp`, `cmodel`) VALUES
(1, '定制案例', '', '', '', '0', 'true', 'caseList2.html', 'category'),
(2, '定制攻略', '', '', '', '0', 'true', 'caseList2.html', 'category'),
(3, '定制资讯', '', '', '                                    ', '0', 'true', 'list_new.html', 'news'),
(4, '关于我们', '', '', '', '0', 'true', 'about.html', 'show'),
(5, '联系我们', '', '', '', '0', 'true', 'tell.html', 'show');

-- --------------------------------------------------------

--
-- 表的结构 `manger`
--

DROP TABLE IF EXISTS `manger`;
CREATE TABLE IF NOT EXISTS `manger` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manger`
--

INSERT INTO `manger` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `mid` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `mcontent` text NOT NULL COMMENT '留言内容',
  `mdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '留言时间',
  `madress` varchar(255) NOT NULL COMMENT '留言地点',
  `mtell` varchar(11) NOT NULL COMMENT '客户预约电话',
  `mname` varchar(255) NOT NULL COMMENT '客户预约名字',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`mid`, `mcontent`, `mdate`, `madress`, `mtell`, `mname`) VALUES
(1, '这个定制很给力，高品质设计，不仅帮客户做好了设计，还可以为客户做个性化设计。', '2018-01-28 11:13:51', '山西临汾', '15735294619', '邓鹏'),
(2, '这个定制家居不错，做出来的设计很贴合客户的想法。就需要这样的设计师！！！！加油，看好你们哦', '2018-01-28 11:19:59', '山西太原', '18835525156', '会飞的鱼');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(10) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(255) NOT NULL,
  `ndate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ndesc` varchar(255) NOT NULL,
  `narticle` text NOT NULL,
  `nimages` varchar(255) NOT NULL,
  `nthumb` varchar(255) NOT NULL,
  `rid` tinyint(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`nid`, `ntitle`, `ndate`, `ndesc`, `narticle`, `nimages`, `nthumb`, `rid`) VALUES
(1, '餐厅装饰画选什么?精品山水国画装饰美景多多', '2018-01-23 08:07:46', '                                                            测试新闻2                                ', '                                                            测试新闻文章                                                ', '', '/home/static/upload/18-01-24/1516774719.jpg', 2),
(2, '软装中的色彩搭配很重要,不可忽略细节', '2018-01-24 03:14:28', '                                        测试2                                ', '                                        测试222222222222222222222                                ', '', '/home/static/upload/18-01-24/1516774735.jpg', 2),
(3, '十个技巧教你如何拥有顺心的整体橱柜', '2018-01-24 15:52:00', '整体橱柜中的拉篮不只有超窄拉篮一种，灶台下，烟机下，甚至冰箱旁都可以设计不同的拉篮，使整体橱柜设计更妥贴。\r\n有别于普通橱柜，整体橱柜是能够通过设计来满足客户的使用需求，所以在安装橱柜和选购之前，设计橱柜也是很重要的一个环节，掌握设计十个小技巧，就能顺利拥有一个令自己满意的整体橱柜。', '一、知道自己的整体橱柜布局属于哪一种，了解了自己整体橱柜的布局有助于进行合理规划，会收纳更多物品。\r\n二、知道整体橱柜中的五大区域：储藏区、存储区、清洗区、准备区、烹饪区，然后分别进行合理规划，利用三角工作区原理，节省更多精力。\r\n三、防止地柜的柜门开关时会发出砰砰的响声，所以设计之前就该考虑给门板添加阻尼或防撞条，这样关闭时就不会发出噪音。\r\n四、对台面的高度进行精心考虑。台面过高过低都会增加腰背负担，计算合理的高度会提升整体橱柜舒适度。\r\n安装师傅正在装整体橱柜的抽屉\r\n五、和地柜柜门不同，吊柜的柜门开启容易被碰到，所以在多种吊柜的柜门开启方式中选择适合自己家人身高的柜门，增加整体橱柜的愉悦感。\r\n六、取地柜中的物品时不需要弯腰下蹲?地柜如果多设计全拉式抽屉，会大大减少下蹲次数，减少劳作。\r\n七、整体橱柜中的拐角应该进行巧妙处理。整体橱柜面积狭小，每个空间要精心设计，这样会增加更多使用面积。\r\n八、整体橱柜的零散物品像炒勺、调料瓶、清洁布等之类的都安应排在恰当的地方，通过各种五金挂件可以很好的实现节省空间的收纳。\r\n九、如果想让整体橱柜更人性化，仅有台面、板材是远远不够的，食物垃圾处理器等实现舒适便捷的配置产品的考虑也是非常重要的。\r\n十、整体橱柜中的拉篮不只有超窄拉篮一种，灶台下，烟机下，甚至冰箱旁都可以设计不同的拉篮，使整体橱柜设计更妥贴。\r\n有别于普通橱柜，整体橱柜是能够通过设计来满足客户的使用需求，所以在安装橱柜和选购之前，设计橱柜也是很重要的一个环节，掌握设计十个小技巧，就能顺利拥有一个令自己满意的整体橱柜。', '', '/home/static/upload/18-01-24/1516809120.jpg', 1),
(4, '选购整体衣柜时，这些注意事项你一定要知道!', '2018-01-24 16:01:12', '衣柜，是我们卧室必备的家具之一，随着我们经济水平的提高，不少家庭选择定制整体衣柜，而我们选购衣柜时的眼光直接决定衣柜的使用体验和使用寿命。那么我们购买整体衣柜时应该注意哪些事呢?', '衣柜，是我们卧室必备的家具之一，随着我们经济水平的提高，不少家庭选择定制整体衣柜，而我们选购衣柜时的眼光直接决定衣柜的使用体验和使用寿命。那么我们购买整体衣柜时应该注意哪些事呢?\r\n1、大品牌更值得信赖\r\n选购熟悉的品牌或者知名的品牌，不要贪图便宜选购一些小厂生产的定制家具，产品质量得不到保障同时售后也完全达不到要求。\r\n2、合适才是最重要\r\n选购家居产品时，最好要符合整体家装风格。家居市场产品多种多样，但并不是每一样都适合我们的家，建议选购家具可与套装门一并选购，这样可保证风格统一，又预留充足的量尺设计生产时间。\r\n3、怎么实用怎么来\r\n产品不仅要考虑外观，同时也要注意产品的实用性，储存空间合理分配，人性化的设计更为重要，例如老人腰骨不便，不宜攀高蹲低，所以衣柜的悬挂区不宜过高，衣柜布局应该清晰明了，并确保衣柜的照明。\r\n4、做做方案看预算\r\n做装修方案是要与量身定做什么样式的家具同步进行，目的是力求房间布局合理，有效利用空间面积，装修预算心中有数，在确定定制或购买时，对于方案不必要的增项要了解清晰。\r\n5、走走市场多看店\r\n购买家具时，要看门店是否有真实可信的专卖授权书;看有无检测报告;看是否有商标注册证;有无规范的服务系统;有无售后保证极致;有无规范的销售凭证和设计软件。国外品牌看是否有定期的海关进货证件和检测报告、授权中国销售代理书等。\r\n6、推推拉拉看配件\r\n五金配件直接影响着衣柜的寿命，所以我们在选购时要看看五金配件和边框是否光滑，精度是否高，看强度是否好，支撑力是否强，滑动是否柔和顺畅。通过以上的“五看”确认配件和边框质量。\r\n7、比比样品看板材\r\n通常门店样品基本上就是成品的样式，所以在购买衣柜时要注意样品，看板面是否平整，光泽均匀，看纹理是否清晰逼真，木质自然;看板材封边是否精细，接缝是否严密;看边角做工是否细腻，通过“四看”确认材料做工和产品质量!', '', '/home/static/upload/18-01-25/1516809672.jpg', 1),
(5, '整体衣柜选购有技巧三招教你识破劣质衣柜', '2018-01-24 16:03:16', ' 在现今的衣柜市场，整体衣柜持续走热，受到广大消费者的喜爱。然而，对如何选择衣柜，消费者们常常心存疑虑。在此，小编特意从衣柜的板材、封边、贴面三方面入手，教消费者识别衣柜的优劣。', '在现今的衣柜市场，整体衣柜持续走热，受到广大消费者的喜爱。然而，对如何选择衣柜，消费者们常常心存疑虑。在此，小编特意从衣柜的板材、封边、贴面三方面入手，教消费者识别衣柜的优劣。\r\n    板材是否环保\r\n    板材甲醛含量是选购衣柜时需要考虑的首要因素，因为这与我们的健康息息相关。选购的时候，消费者可以先关上柜门，等5分钟左右，然后猛拉开门，用鼻子闻有没有异味。有异味说明甲醛含量可能超标，是劣质产品。\r\n    封边是否严实\r\n    有些厂家无专业设备，生产的衣柜产品切割粗糙，四周有明显崩边现象，有的甚至偷工减料，只做板材前面一边封边。无封边面易吸收空气中的水份，引起板材膨胀，导致衣柜变形，影响使用寿命。而专业厂家采用精密裁板锯切割板材，板材四周无崩边。四周封边后，能有效防止空气中水份侵入板材内部。\r\n    贴面是否耐磨\r\n    专业厂家使用的是厚度较厚且经高温高压处理的环保三聚氰胺贴面板，表面强度高，耐磨耐划伤。不良商家生产的劣质衣柜，选用的是市场上低价的面板，表面贴保丽纸、华丽纸板材，看还不错，其实耐磨性较差，用指甲轻轻一划，就能划出明显的划痕。\r\n    总之，一款质量上乘的衣柜无论在用料还是做工方面都是扎实可靠的，消费者选购时要注意仔细辨别，选对家具是很关键的事情', '', '/home/static/upload/18-01-25/1516809796.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `recommend`
--

DROP TABLE IF EXISTS `recommend`;
CREATE TABLE IF NOT EXISTS `recommend` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `recommend`
--

INSERT INTO `recommend` (`rid`, `rname`) VALUES
(1, '定制资讯'),
(2, '轮播图');

-- --------------------------------------------------------

--
-- 表的结构 `strategy`
--

DROP TABLE IF EXISTS `strategy`;
CREATE TABLE IF NOT EXISTS `strategy` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `simage` varchar(255) NOT NULL,
  `sdesc` varchar(255) NOT NULL,
  `spid` varchar(10) NOT NULL,
  `rid` tinyint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `strategy`
--

INSERT INTO `strategy` (`sid`, `sname`, `simage`, `sdesc`, `spid`, `rid`) VALUES
(8, '测试1', '/home/static/upload/18-01-23/1516674385.jpg', '测试1的描述    ', '1', 0),
(9, '测试2', '/home/static/upload/18-01-23/1516674745.jpg', '少时诵诗书所所所', '1', 0),
(6, '用家给父母美好的时光', '/home/static/upload/2018-01-25-01/1516859497.jpg', '父母为我们奔波一生，对他们来说，与孩子一起是他们美好的时光。尚品宅配特意为您设计了适合老人的家具，让您的父母住得更加舒适。', '2', 0),
(7, '把“芬兰”带回家 北欧风美家装扮灵感', '/home/static/upload/2018-01-25-01/1516859730.jpg', '北欧风格家具定制，让你感受“芬兰”的魅力，把“芬兰”带回家！            ', '2', 0),
(10, '复古欧式风', '/home/static/upload/18-01-25/1516859009.jpg', '斜纹印高 密，手感细腻质感柔软，透花工艺，紧实细密精选优质棉花原料高支', '1', 1),
(11, '地中海式风', '/home/static/upload/18-01-25/1516859062.jpg', '给您的膝盖一点呵护读书或者点呵护远离热感冒和肠胃不适拥有一床舒适的空调被', '1', 0),
(12, '浪漫田园风', '/home/static/upload/18-01-25/1516859090.jpg', '读书或者上网给您的膝盖一点呵护远离热感冒和肠胃不适拥有一床舒适的空调被，', '1', 0),
(13, '清新自由风', '/home/static/upload/18-01-25/1516859151.jpg', '紧实细密精选优质棉花原料高支高 密，手感细腻，，斜纹印花工艺，，质感柔软，透', '1', 0),
(14, '我的家 贴心如他', '/home/static/upload/18-01-25/1516859758.jpg', '设计师预约即送1对1专业全屋设计+3D效果图，免费提供设计/配送/安装服务！', '2', 0),
(15, '睡眠困难户 极速通关手册', '/home/static/upload/18-01-25/1516859820.jpg', '极速睡眠手册；板式定制床，北欧软包床，真皮软床，各种不同功能，总有一款适合您！', '2', 0),
(16, '你的衣柜也该“换新”了', '/home/static/upload/18-01-25/1516859851.jpg', '你的衣柜也该“换新”了，整体衣柜价格优惠，大容量，性价比高，分区精细不凌乱，零碎物件收纳更贴心。', '2', 0),
(17, '百变飘窗玩上位，Duang~多出5㎡！', '/home/static/upload/18-01-25/1516859884.jpg', '飘窗设计新玩法，精美创意飘窗装修效果图层出不穷，潮流飘窗图片特效、飘窗魔法，总有你意想不到的惊喜！', '2', 0);
--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `store`;

-- --------------------------------------------------------

--
-- 表的结构 `adress`
--

DROP TABLE IF EXISTS `adress`;
CREATE TABLE IF NOT EXISTS `adress` (
  `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `atab` varchar(255) NOT NULL COMMENT '地址分类标签',
  `adress` varchar(255) NOT NULL COMMENT '地址',
  `rid` int(10) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `boss`
--

DROP TABLE IF EXISTS `boss`;
CREATE TABLE IF NOT EXISTS `boss` (
  `bid` int(10) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) NOT NULL COMMENT '用户昵称',
  `bthumb` varchar(255) NOT NULL COMMENT '用户头像',
  `username` varchar(255) NOT NULL COMMENT '登陆名称',
  `password` varchar(20) NOT NULL COMMENT '登陆密码',
  `lv` varchar(255) NOT NULL DEFAULT '普通用户' COMMENT '用户等级',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) NOT NULL COMMENT '分类名称',
  `cthumb` varchar(255) NOT NULL COMMENT '缩略图',
  `pid` tinyint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `cthumb`, `pid`) VALUES
(1, '手机', '/profect/static/upload/18-01-31/151740499332.webp', 0),
(2, '电视', '/profect/static/upload/18-01-31/151740507536.jpg', 0),
(3, '电脑', '/profect/static/upload/18-01-31/1517405272145.webp', 0),
(4, '家电', '/profect/static/upload/18-01-31/1517405305103.jpg', 0),
(5, '路由', '/profect/static/upload/18-01-31/151740533622.webp', 0),
(6, '智能', '/profect/static/upload/18-01-31/151740536631.webp', 0),
(7, '电源', '/profect/static/upload/18-01-31/151740539663.webp', 0),
(8, '耳机', '/profect/static/upload/18-01-31/1517405477137.webp', 0),
(9, '音箱', '/profect/static/upload/18-01-31/151740550714.webp', 0),
(10, '礼品', '/profect/static/upload/18-01-31/1517405669102.jpg', 0),
(11, '小米', '/profect/static/upload/18-01-31/15174067200.png', 1),
(12, '魅族', '/profect/static/upload/18-01-31/151740681482.png', 1),
(13, 'OPPO', '/profect/static/upload/18-01-31/151740684740.png', 1),
(14, 'vivo', '/profect/static/upload/18-01-31/1517406887189.png', 1),
(15, '32英寸', '/profect/static/upload/18-01-31/151740701931.png', 2),
(16, '43英寸', '/profect/static/upload/18-01-31/1517407089120.png', 2),
(17, '55英寸', '/profect/static/upload/18-01-31/1517407111194.png', 2),
(18, '13.3寸', '/profect/static/upload/18-01-31/151740716080.png', 3),
(19, '14寸', '/profect/static/upload/18-01-31/1517407189118.png', 3),
(20, '15.6寸', '/profect/static/upload/18-01-31/151740729269.png', 3),
(21, '电饭煲', '/profect/static/upload/18-01-31/1517407349194.png', 4),
(22, '净水器', '/profect/static/upload/18-01-31/1517407380134.png', 4),
(23, '空调', '/profect/static/upload/18-01-31/151740740368.jpg', 4),
(24, '路由器3A', '/profect/static/upload/18-01-31/1517407445183.jpg', 5),
(25, '路由器3G', '/profect/static/upload/18-01-31/1517407473167.jpg', 5),
(26, '路由器Pro', '/profect/static/upload/18-01-31/15174075040.png', 5),
(27, '智能1', '/profect/static/upload/18-01-31/15174176347.png', 6),
(28, '电源1', '/profect/static/upload/18-01-31/1517417693176.png', 7),
(29, '耳机1', '/profect/static/upload/18-01-31/1517417728144.png', 8),
(30, '音箱', '/profect/static/upload/18-01-31/151741776674.pngyx1.png', 9),
(31, '礼品1', '/profect/static/upload/18-01-31/151741779249.pngyx1.png', 10);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `gid` int(10) NOT NULL AUTO_INCREMENT,
  `gname` varchar(255) NOT NULL,
  `gactivity` varchar(255) NOT NULL,
  `gtab` varchar(255) NOT NULL,
  `gserver` varchar(255) NOT NULL,
  `gthumb` varchar(255) NOT NULL,
  `gimage` varchar(1000) NOT NULL,
  `gcontent` varchar(2555) NOT NULL,
  `gprice` float NOT NULL,
  `gopc` float NOT NULL,
  `gcolor` varchar(255) NOT NULL,
  `gtype` varchar(255) NOT NULL DEFAULT '通用',
  `cid` varchar(255) NOT NULL COMMENT '所属分类',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`gid`, `gname`, `gactivity`, `gtab`, `gserver`, `gthumb`, `gimage`, `gcontent`, `gprice`, `gopc`, `gcolor`, `gtype`, `cid`) VALUES
(1, '小米note3   支持人脸解锁', '「小米年货节！6+64GB黑色版直降400元，蓝色版本下单立减200元，6+128GB直降300元，4+64GB直降200元。全系可享小米分期3期免息」', '1600万美颜自拍 / 2倍变焦双摄，四轴光学防抖 / 5.5\"护眼屏 / 超轻四曲面，7系铝金属边框。', '支持七天无理由退货', '/profect/static/upload/18-02-05/1517812207159.png', '/profect/static/upload/18-02-05/1517812541173.webp,/profect/static/upload/18-02-05/1517812543182.webp,/profect/static/upload/18-02-05/1517812543159.jpg', '<p><img src=\"/profect/static/upload/20180205/1517813444297306.jpg\" title=\"1517813444297306.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813444797335.jpg\" title=\"1517813444797335.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813444994335.jpg\" title=\"1517813444994335.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813444116740.jpg\" title=\"1517813444116740.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813444965245.jpg\" title=\"1517813444965245.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445492498.jpg\" title=\"1517813445492498.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445867305.jpg\" title=\"1517813445867305.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445104864.jpg\" title=\"1517813445104864.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445303933.jpg\" title=\"1517813445303933.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445676674.jpg\" title=\"1517813445676674.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445993646.jpg\" title=\"1517813445993646.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445742599.jpg\" title=\"1517813445742599.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445112979.jpg\" title=\"1517813445112979.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445497318.jpg\" title=\"1517813445497318.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445355571.jpg\" title=\"1517813445355571.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445105901.jpg\" title=\"1517813445105901.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445134272.jpg\" title=\"1517813445134272.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445381132.jpg\" title=\"1517813445381132.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445895018.jpg\" title=\"1517813445895018.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445873932.jpg\" title=\"1517813445873932.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445730980.jpg\" title=\"1517813445730980.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445130171.jpg\" title=\"1517813445130171.jpg\"/></p><p><img src=\"/profect/static/upload/20180205/1517813445454028.jpg\" title=\"1517813445454028.jpg\"/></p><p><br/></p>', 1899, 2299, '亮蓝色', '64G', '11'),
(2, '小米6', '64GB黑色直降200元，64GB蓝色/128GB版本直降300元', '1600万美颜自拍 / 2倍变焦双摄，四轴光学防抖 / 5.5\"护眼屏 / 超轻四曲面，7系铝金属边框 / 6GB大内存，骁龙八核处理器 ', '48小时发货', '/profect/static/upload/18-02-02/151756090859.png', '/profect/static/upload/18-02-02/151756008328.jpg,/profect/static/upload/18-02-02/151756008314.png', '<p><img src=\"/profect/static/upload/20180202/1517560191128910.jpg\" title=\"1517560191128910.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191636181.jpg\" title=\"1517560191636181.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191516467.jpg\" title=\"1517560191516467.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191773797.jpg\" title=\"1517560191773797.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191549946.jpg\" title=\"1517560191549946.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191913134.jpg\" title=\"1517560191913134.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191929486.jpg\" title=\"1517560191929486.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191762178.jpg\" title=\"1517560191762178.jpg\"/></p><p><img src=\"/profect/static/upload/20180202/1517560191960383.jpg\" title=\"1517560191960383.jpg\"/></p><p><br/></p>', 2199, 2299, '亮黑色', '128G', '11');

-- --------------------------------------------------------

--
-- 表的结构 `manger`
--

DROP TABLE IF EXISTS `manger`;
CREATE TABLE IF NOT EXISTS `manger` (
  `id` tinyint(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manger`
--

INSERT INTO `manger` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `rid` int(18) UNSIGNED NOT NULL AUTO_INCREMENT,
  `regname` varchar(18) NOT NULL COMMENT '用户名',
  `regpsd` varchar(255) NOT NULL,
  `regphone` varchar(16) DEFAULT NULL COMMENT '用户手机号',
  `regavatar` varchar(255) DEFAULT '{IMG_PATH}KE65LNEjLgWiw6.jpg' COMMENT '用户头像',
  PRIMARY KEY (`rid`),
  UNIQUE KEY `regname` (`regname`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`rid`, `regname`, `regpsd`, `regphone`, `regavatar`) VALUES
(1, '18636705202', 'dcb04cd2db57c52baee1d635063f8ac8', '0', ''),
(2, 'dengpeng', 'dcb04cd2db57c52baee1d635063f8ac8', '12345678901', '/profect/static/image/KE65LNEjLgWiw6.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `shopcar`
--

DROP TABLE IF EXISTS `shopcar`;
CREATE TABLE IF NOT EXISTS `shopcar` (
  `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `gid` int(10) NOT NULL COMMENT '商品ID',
  `rid` int(10) NOT NULL COMMENT '用户ID',
  `num` int(10) NOT NULL COMMENT '商品数量',
  `Dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '订单日期',
  `snumber` varchar(255) NOT NULL COMMENT '订单编号',
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shopcar`
--

INSERT INTO `shopcar` (`sid`, `gid`, `rid`, `num`, `Dates`, `snumber`) VALUES
(1, 1, 2, 2, '2018-02-07 03:46:07', '1517975167'),
(2, 2, 2, 4, '2018-02-07 03:55:42', '1517975742');
--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `users`;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'wuyu', '1216');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
