

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("2","java","");
INSERT INTO category VALUES("3","GO","");
INSERT INTO category VALUES("4","umbrella low cost","umbrella low cost");
INSERT INTO category VALUES("5"," high cost"," high cost");
INSERT INTO category VALUES("6","low cost","low cost");
INSERT INTO category VALUES("7"," high cost adfv adfbv "," high cost adfv adfbv ");





CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO post VALUES("1","Donec sollicitudin molestie malesuada.","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","0");
INSERT INTO post VALUES("3","Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","2");
INSERT INTO post VALUES("4","Donec sollicitudin molestie malesuada.","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","4");
INSERT INTO post VALUES("5","Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","3");
INSERT INTO post VALUES("6","Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","2");
INSERT INTO post VALUES("7","Donec sollicitudin molestie malesuada.","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","4");



