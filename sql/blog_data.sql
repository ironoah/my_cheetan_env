CREATE TABLE `blog_data` (
  `id` int(11) NOT NULL auto_increment,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `modified` timestamp NOT NULL
  default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);
