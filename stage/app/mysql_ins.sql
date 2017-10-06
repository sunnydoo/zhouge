drop table if exists `user`,`app`,`frunto`;
 
CREATE TABLE `app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `data` longtext NOT NULL,
  `create_time` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `app` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
 

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL COMMENT 'email',
  `username` varchar(255) DEFAULT NULL COMMENT '用户名',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `post_time` int(11) DEFAULT NULL COMMENT '发布时间',
  `update_time` int(11) DEFAULT NULL COMMENT '更新时间',
  `level` tinyint(4) DEFAULT NULL COMMENT '级别',
  `info` text COMMENT '信息',
  `app_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

INSERT INTO `user` (`id`, `email`, `username`, `password`, `post_time`, `update_time`, `level`, `info`, `app_id`) VALUES
(1, 'admin@b24.cn', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1348897975, 1348897975, 20, NULL, 1);


INSERT INTO `app` (`id`, `title`, `data`, `create_time`, `admin`, `app`) VALUES
(1, 'frunto', '{"users":{"1":"admin"},"title":"BugTrace","version":"v1\\r\\nv2\\r\\nv3\\r\\nv4","module":"sys\\r\\nuser\\r\\ntemp"}', 0, 1, '');

 
CREATE TABLE IF NOT EXISTS `frunto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frunto_id` varchar(50) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `pname` varchar(200) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `num` float NOT NULL,
  `app_id` int(11) NOT NULL,
  `action_label` varchar(100) NOT NULL,
  `alert_level` int(11) NOT NULL,
  `kuwei` varchar(200) NOT NULL,
  `datetime` int(11) NOT NULL,
  `doer` varchar(200) NOT NULL,
  `remark` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `balance` float NOT NULL,
  `cur_balance` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
