DROP TABLE IF EXISTS '#__vote';

CREATE TABLE '#__vote' (
  'id' int unsigned not null auto_increment,
  'title' varchar(255) not null,
  primary key('id')
) ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;
insert into '#_vote' ('title') value ('IT la nganh?');


CREATE TABLE '#_vote_item'(
	'id' int unsigned not null auto_increment,
	'voteid' int not null ,
	'text' text not null,
	primary key('id')
	
	)ENGINE=MyISAM auto_increment=0 default CHARSET=utf8;