

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;






CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO post VALUES("1","football","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","2");
INSERT INTO post VALUES("3","two","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem. banana ","2");
INSERT INTO post VALUES("4","cricket","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","4");
INSERT INTO post VALUES("5","four","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id nishu
 imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","3");
INSERT INTO post VALUES("6","five","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","2");
INSERT INTO post VALUES("7","six","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","4");
INSERT INTO post VALUES("8","seven ","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","3");





CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","mamun","81dc9bdb52d04dc20036dbd8313ed055","2");
INSERT INTO user VALUES("2","dada","827ccb0eea8a706c4c34a16891f84e7b","2");



