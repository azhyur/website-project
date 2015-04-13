CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `age` int(11),
  `language` varchar(255),
  `gender` varchar(255),
  `device` varchar(255),
  `duration` varchar(255),
  `experience` varchar(255),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`,`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;
