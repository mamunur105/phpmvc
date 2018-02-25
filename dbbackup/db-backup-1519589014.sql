

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("11","Football","Football");
INSERT INTO category VALUES("12","Cricket","Cricket");
INSERT INTO category VALUES("13","Java ","Java title");
INSERT INTO category VALUES("14","Card","Card title");
INSERT INTO category VALUES("15","UnCategory","UnCategory");





CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO post VALUES("1","football","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. ","12");
INSERT INTO post VALUES("4","cricket World"," Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ","13");
INSERT INTO post VALUES("5","four"," Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id nishu imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem. ","14");
INSERT INTO post VALUES("6","five figure  ID 6"," Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem. ","13");
INSERT INTO post VALUES("7","six Time "," Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ","13");
INSERT INTO post VALUES("8","seven "," Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem. ","14");
INSERT INTO post VALUES("9","football"," Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ","15");
INSERT INTO post VALUES("10","twenty ","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","12");
INSERT INTO post VALUES("11","four one","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id nishu
 imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","13");
INSERT INTO post VALUES("12","perdiet et, porttitor at sem.sem.Curab
","Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id nishu
 imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem.","14");
INSERT INTO post VALUES("13","football asdfas ","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","11");
INSERT INTO post VALUES("14","Why do we use it?","&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;","14");
INSERT INTO post VALUES("16","cricket nai"," Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ","13");





CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","mamun","81dc9bdb52d04dc20036dbd8313ed055","2");
INSERT INTO user VALUES("2","dada","827ccb0eea8a706c4c34a16891f84e7b","2");



