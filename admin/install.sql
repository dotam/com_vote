DROP TABLE IF EXISTS `#__vote`;

CREATE TABLE `#__vote` (
  `id` int unsigned not null auto_increment,
  `checked` int unsigned not null,
  `title` varchar(255) not null,
  primary key(`id`)
) ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;


INSERT INTO `#__vote` (`id`, `checked`, `title`) VALUES
(1, 1, 'Who is the best player in the world?'),
(2, 0, 'What the sport do you like?');



DROP TABLE IF EXISTS `#__vote_item`;

CREATE TABLE `#__vote_item`(
	`id` int unsigned not null auto_increment,
	`voteid` int not null,
	`text` text not null,
	`hits` int not null default '0',
	primary key(`id`)
	
	)ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;


INSERT INTO `#__vote_item` (`id`, `voteid`, `text`, `hits`) VALUES
(1, 1, 'Messi', 7),
(2, 1, 'Ronaldo', 5),
(3, 1, 'Kaka', 4),
(4, 1, 'Rooney', 2),
(5, 2, 'Fotball', 5),
(6, 2, 'Play Card', 4);


