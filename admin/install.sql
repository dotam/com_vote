DROP TABLE IF EXISTS `#__vote`;

CREATE TABLE `#__vote` (
  `id` int unsigned not null auto_increment,
  `title` varchar(255) not null,
  primary key(`id`)
) ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;

insert into `#__vote` (`id`,`title`) values (1,'Who is the best player in the world?');


DROP TABLE IF EXISTS `#__vote_item`;

CREATE TABLE `#__vote_item`(
	`id` int unsigned not null auto_increment,
	`voteid` int not null ,
	`text` text not null,
	`hits` int,
	primary key(`id`)
	
	)ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;

INSERT INTO `vote_item` (`id`, `voteid`, `text`, `hits`) VALUES
(1, 1, 'Messi', 7),
(2, 1, 'Ronaldo', 5),
(3, 1, 'Kaka', 4),
(4, 1, 'Rooney', 2);