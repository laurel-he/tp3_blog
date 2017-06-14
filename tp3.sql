# Host: localhost  (Version: 5.5.53)
# Date: 2017-06-03 10:23:55
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "think_blog"
#

DROP TABLE IF EXISTS `think_blog`;
CREATE TABLE `think_blog` (
  `blog_name` varchar(255) NOT NULL,
  `blog_content` text NOT NULL,
  `blog_author` varchar(255) NOT NULL,
  `blog_id` int(12) NOT NULL AUTO_INCREMENT,
  `blog_images` varchar(255) NOT NULL,
  `blog_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_group` varchar(64) NOT NULL,
  `praise` int(11) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "think_blog"
#

/*!40000 ALTER TABLE `think_blog` DISABLE KEYS */;
INSERT INTO `think_blog` VALUES ('MC的小建筑','上一篇中我们掌握了基本的数据CURD方法，但更多的情况下面，由于业务逻辑的差异，CURD操作往往不是那么简单，尤其是复杂的业务逻辑下面，这也是ActiveRecord模式的不足之处。ThinkPHP的查询语言配合连贯操作可以很好解决复杂的业务逻辑需求，本篇我们就首先来深入了解下框架的查询语言。\r\n\r\n介绍\r\n\r\nThinkPHP内置了非常灵活的查询方法，可以快速的进行数据查询操作，查询条件可以用于读取、更新和删除等操作，主要涉及到where方法等连贯操作即可，无论是采用什么数据库，你几乎采用一样的查询方法（个别数据库例如Mongo在表达式查询方面会有所差异），系统帮你解决了不同数据库的差异性，因此我们把框架的这一查询方式称之为查询语言。查询语言也是ThinkPHP框架的ORM亮点，让查询操作更加简单易懂。下面来一一讲解查询语言的内涵。\r\n\r\n查询方式\r\n\r\nThinkPHP可以支持直接使用字符串作为查询条件，但是大多数情况推荐使用索引数组或者对象来作为查询条件，因为会更加安全。\r\n\r\n一、使用字符串作为查询条件\r\n\r\n这是最传统的方式，但是安全性不高，例如：success和error方法有三个参数，分别是提示信息、跳转地址和跳转页面等待时间（秒），除了第一个参数外其他都是可选的。\r\n\r\n提示信息：成功或者错误信息字符串。\r\n\r\n跳转地址：页面跳转地址是可选的，success方法的默认跳转地址是$_SERVER[\"HTTP_REFERER\"]，error方法的默认跳转地址是javascript:history.back(-1);。\r\n\r\n等待时间：默认的等待时间success方法是1秒，error方法是3秒。\r\n\r\nsuccess和error方法都可以对应的模板，默认两个方法对应的模板是框架自带的跳转模板dispatch_jump.tpl：','admin',1,'/Public/images/c3.jpg','2017-04-28 15:37:46','小说',56),('测试','发布本资料须遵守开放出版许可协议 1.0 或者更新版本。 \r\n未经版权所有者明确授权，禁止发行本文档及其被实质上修改的版本。 \r\n未经版权所有者事先授权，禁止将此作品及其衍生作品以标准（纸质）书籍形式发行。 \r\n如果有兴趣再发行或再版本手册的全部或部分内容，不论修改过与否，或者有任何问题，请联系版权所有者 thinkphp@qq.com。 \r\n对ThinkPHP有任何疑问或者建议，请进入官方讨论区 [ http://www.thinkphp.cn/topic ] 发布相关讨论。 \r\n有关ThinkPHP项目及本文档的最新资料，请及时访问ThinkPHP项目主站 http://www.thinkphp.cn。 \r\n本文档的版权归ThinkPHP文档小组所有，本文档及其描述的内容受有关法律的版权保护，对本文档内容的任何形式的非法复制，泄露或散布，将导致相应的法律责任。','admin',2,'/Public/images/c1.jpg','2017-04-28 15:37:46','生活',12),('这是aa','thinkphp的学习笔记：期中检查报告-周报告-毕业设计 缓存：xcache 如果需要获取渲染模板的输出内容而不是直接输出，可以使用fetch方法。\r\n\r\nfetch方法的用法和display基本一致（只是不需要指定输出编码和输出类型）：\r\n\r\nfetch(\'模板文件\')模板文件的调用方法和display方法完全一样，区别就在于fetch方法渲染后不是直接输出，而是返回渲染后的内容，例如：\r\n\r\n$content = $this->fetch(\'Member:edit\');\r\n使用fetch方法获取渲染内容后，你可以进行过滤和替换等操作，或者用于对输出的复杂需求。\r\n\r\n渲染内容\r\n\r\n如果你没有定义任何模板文件，或者把模板内容存储到数据库中的话，你就需要使用show方法来渲染输出了，show方法的调用格式：\r\n\r\nshow(\'渲染内容\'[,\'字符编码\'][,\'输出类型\'])例如，$this->show($content);\r\n\r\n也可以指定编码和类型： $this->show($content, \'utf-8\', \'text/xml\');\r\n','admin',3,'/Public/images/c2.jpg','2017-04-08 15:37:46','其他',44),('小说','在川湘交界的茶峒附近，小溪白塔旁边，住着主人公翠翠和她爷爷老船夫。茶峒城里有个船总叫顺顺，他有两个儿子，老大叫天保，老二叫傩送。\r\n端午节翠翠去看龙舟赛，偶然相遇相貌英俊的青年水手傩（nuó）送，傩送在翠翠的心里留下了深刻的印象。同时，傩送的兄长天保也喜欢上了翠翠，并提前托媒人提了亲。天保告诉傩送一年前他就爱上了翠翠，而傩送告诉天保他两年前就爱上了翠翠，天保听了后也吃了一惊。然而此时，当地的团总以新磨坊为陪嫁，想把女儿许配给傩送。而傩送宁肯继承一条破船也要与翠翠成婚。\r\n兄弟俩没有按照当地风俗以决斗论胜负，而是采用公平而浪漫的唱山歌的方式表达感情，让翠翠自己从中选择。傩送是唱歌好手，天保自知唱不过弟弟，心灰意冷，断然驾船远行做生意。\r\n碧溪边只听过一夜傩送的歌声，后来，歌却再没有响起来。老船夫忍不住去问，本以为是老大唱的，却得知：唱歌人是傩送，老大讲出实情后便去做生意。几天后老船夫听说老大坐水船出了事，淹死了……\r\n码头的船总顺顺因为儿子天保的死对老船夫变得冷淡。船总顺顺不愿意翠翠再做傩送的媳妇。老船夫只好郁闷地回到家，翠翠问他，他也没说起什么。夜里下了大雨，夹杂着吓人的雷声。第二天翠翠起来发现船已被冲走，屋后的白塔也冲塌了，翠翠去找爷爷却发现老人已在雷声将息时死去了…… 老军人杨马兵热心地前来陪伴翠翠，也以渡船为生，等待着傩送的归来。\r\n','admin',4,'/Public/images/c4.jpg','2017-05-09 10:53:34','PHP',33);
/*!40000 ALTER TABLE `think_blog` ENABLE KEYS */;

#
# Structure for table "think_comments"
#

DROP TABLE IF EXISTS `think_comments`;
CREATE TABLE `think_comments` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `write_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `blog_id` int(11) DEFAULT NULL,
  `praise` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

#
# Data for table "think_comments"
#

/*!40000 ALTER TABLE `think_comments` DISABLE KEYS */;
INSERT INTO `think_comments` VALUES (1,'huahua','','这是一条评论的测试内容，代表着评论内容，id为1，博客id为3','2017-05-16 08:04:34',3,3),(2,'admin','','《离骚》是屈原用他的理想、遭遇、痛苦、热情， 以至于整个生命所熔铸而成的宏伟诗篇，其中闪耀着诗 人鲜明的个性光辉，这在中国文学史上，还是第一次出现。《离骚》的创作，既植根于现实，又富于幻想色彩。诗中大量运用古代神话和传说，通过极其丰富的想象和联想，并采取铺张描叙的写法，把现实人物、历史人物、神话人物交织在一起，把地上和天国、人间和幻境交织在一起，构成了瑰丽奇特、绚烂多彩的幻想世界，从而产生了强烈的艺术魅力。诗中又大量运用“香草美人”的比兴手法，把抽象的意识品性、复杂的现实关系生动形象地表现出来。','2017-05-16 08:23:01',4,4),(3,'admin','','谈起《诗经》，当初的我，是怀着些微的期许和崇敬翻开这本书的。曾经我一直疑惑了很久，想那薄薄一本诗集而已，奈何在中国文学巅峰开万年气象？读过之后才叹然发觉，这“诗”一册“经”一本，内中蕴着的清雅深邃，却实在是让人心折。','2017-05-16 08:33:32',3,5),(4,'熊二','','Volist标签的name属性表示模板赋值的变量名称，因此不可随意在模板文件中改变。id表示当前的循环变量，可以随意指定，但确保不要和name属性冲突，例如：','2017-05-16 08:44:14',3,4),(5,'苏苏','','在index控制器中的index()中，\r\necho __APP__; 返回 /site/index.php\r\necho __PUBLIC__; 返回 __PUBLIC__\r\n我使用的版本是3.12。','2017-05-16 10:06:38',4,6),(6,'小明','','渲染输出不需要写模板文件的路径和后缀，确切地说，这里面的控制器和操作并不一定需要有实际对应的控制器和操作，只是一个目录名称和文件名称而已，例如，你的项目里面可能根本没有Public控制器，更没有Public控制器的menu操作，但是一样可以使用','2017-05-16 10:08:05',4,7),(7,'小红','','每个模块的模板文件是独立的，为了对模板文件更加有效的管理，ThinkPHP对模板文件进行目录划分，默认的模板文件定义规则是：','2017-05-16 10:09:46',1,2),(8,'熊二','','一个模块如果需要支持多套模板文件的话，就可以使用模板主题功能。 默认情况下，没有开启模板主题功能，如果需要开启，设置 DEFAULT_THEME 参数即可：','2017-05-16 10:10:31',1,4),(9,'小李','','如果要在模板中输出变量，必须在在控制器中把变量传递给模板，系统提供了assign方法对模板变量赋值，无论何种变量类型都统一使用assign赋值。','2017-05-16 10:11:40',1,5),(10,'小强','','　栗子烧鸡是秋冬季节最受欢迎的一道菜，栗子烧的软软糯糯的，鸡肉吸收了栗子的香气。过年餐桌上怎么能少了这道“大吉（鸡）大利（栗）”的菜呢！','2017-05-16 12:21:37',1,8),(11,'呱呱','','今天要给大家介绍的这款美食，制作方法超级简单，但是营养却十分丰富。无论是小孩还是老人都很适合吃这一款食品，所以大家赶紧学起来吧！','2017-05-16 12:25:30',1,13),(12,'huahau','','豆瓣酱咸香醇厚，无论是用来做凉拌菜拌着吃，还是用来做炸酱面或者是用来炒菜吃都是极好的。酱爆花蛤那浓郁的滋味叫人回味无穷啊。','2017-05-16 12:36:14',1,15),(13,'苏苏','','菠萝是一种常见的水果，十分受大家的欢迎，用来和鸡肉一起做菜，浓浓的菠萝香加上鸡肉的清香，那就一个爽啊!','2017-05-16 12:37:43',1,23),(26,'huahua','','CESHICEHIISHIHIADASD','2017-05-17 14:18:02',1,22);
/*!40000 ALTER TABLE `think_comments` ENABLE KEYS */;

#
# Structure for table "think_user_profile"
#

DROP TABLE IF EXISTS `think_user_profile`;
CREATE TABLE `think_user_profile` (
  `user_id` int(12) NOT NULL,
  `user_friends_id` int(32) NOT NULL,
  `user_token` varchar(255) NOT NULL,
  `user_comments_id` int(32) NOT NULL,
  `user_blog_id` int(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "think_user_profile"
#

/*!40000 ALTER TABLE `think_user_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `think_user_profile` ENABLE KEYS */;

#
# Structure for table "think_users"
#

DROP TABLE IF EXISTS `think_users`;
CREATE TABLE `think_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `companyid` mediumint(8) unsigned NOT NULL COMMENT '公司id',
  `pid` mediumint(8) NOT NULL COMMENT '父id',
  `user_name` char(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pwd` char(32) NOT NULL DEFAULT '' COMMENT '密码',
  `regdate` int(10) unsigned NOT NULL COMMENT '注册时间',
  `lastdate` int(10) unsigned NOT NULL COMMENT '最后一次登录时间',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册ip',
  `lastip` char(15) NOT NULL DEFAULT '' COMMENT '最后一次登录ip',
  `loginnum` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `islock` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否锁定',
  `vip` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否会员',
  `overduedate` int(10) unsigned NOT NULL COMMENT '账户过期时间',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '状态-用于软删除',
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`) USING BTREE,
  KEY `email` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "think_users"
#

/*!40000 ALTER TABLE `think_users` DISABLE KEYS */;
INSERT INTO `think_users` VALUES (5,0,0,'admin','e10adc3949ba59abbe56e057f20f883e',1494382700,0,'127.0.0.1','',0,'1570306409@qq.com',0,0,0,0,'/Public/images/avatar/p4.jpg'),(6,6,0,'熊二','e10adc3949ba59abbe56e057f20f883e',1494382783,0,'127.0.0.1','',0,'xiong@shq.qq',0,0,0,0,'/Public/images/avatar/p6.jpg'),(7,7,0,'苏苏','e10adc3949ba59abbe56e057f20f883e',1494922707,0,'127.0.0.1','',0,'su@123.com',0,0,0,0,'/Public/images/avatar/p2.jpg'),(8,8,0,'huahua','e10adc3949ba59abbe56e057f20f883e',1494981966,0,'127.0.0.1','',0,'123@123.com',0,0,0,0,'/Public/images/avatar/p1.jpg'),(9,0,0,'小明','e10adc3949ba59abbe56e057f20f883e',1494981907,0,'127.0.0.1','',0,'xiaoming@123.com',0,0,0,0,'/Public/images/avatar/p5.jpg'),(10,10,0,'小红','e10adc3949ba59abbe56e057f20f883e',1494984735,0,'127.0.0.1','',0,'xiaohong@123.com',0,0,0,0,'/Public/images/avatar/p3.jpg'),(11,11,0,'小李','e10adc3949ba59abbe56e057f20f883e',1494984784,0,'127.0.0.1','',0,'xiaoli@123.com',0,0,0,0,'/Public/images/avatar/p7.jpg'),(12,12,0,'小强','e10adc3949ba59abbe56e057f20f883e',1494984822,0,'127.0.0.1','',0,'xiaoqaing@123.com',0,0,0,0,'/Public/images/avatar/p8.jpg'),(13,13,0,'呱呱','e10adc3949ba59abbe56e057f20f883e',1494984893,0,'127.0.0.1','',0,'guagua@123.com',0,0,0,0,'/Public/images/avatar/p9.jpg');
/*!40000 ALTER TABLE `think_users` ENABLE KEYS */;
