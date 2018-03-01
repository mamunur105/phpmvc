

CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO category VALUES("11","Football","Football");
INSERT INTO category VALUES("12","Cricket","Cricket");
INSERT INTO category VALUES("13","Java ","Java title");
INSERT INTO category VALUES("14","Card","Card title");





CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` text NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
INSERT INTO post VALUES("12","Curab Curab Curab Curab Curab "," Curabitur arcu erat, accumsan id imperdiet et, porttitor at Curabitur arcu erat, accumsan id nishu imperdiet et, porttitor at sem.sem.Curabitur arcu erat, accumsan id imperdiet et, Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.porttitor at sem.Curabitur arcu erat, accumsan id imperdietCurabitur arcu erat, accumsan id imperdiet et, porttitor at sem. et, porttitor at sem. ","14");
INSERT INTO post VALUES("13","football asdfas ","Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta.

Nulla quis lorem ut libero malesuada feugiat.

Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","11");
INSERT INTO post VALUES("14","Why do we use it?","&lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&lt;/span&gt;&lt;/p&gt;","14");
INSERT INTO post VALUES("16","cricket nai"," Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. ","13");
INSERT INTO post VALUES("17","Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus.&lt;br /&gt;&lt;br /&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus suscipit tortor eget felis porttitor volutpat.&lt;br /&gt;&lt;br /&gt;Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.&lt;br /&gt;&lt;br /&gt;Nulla quis lorem ut libero malesuada feugiat. Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.","15");
INSERT INTO post VALUES("18","umbrella low cost","umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbumbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;rella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;umbrella low cost&amp;nbsp;","15");
INSERT INTO post VALUES("19","Shuld be minimum 10And max 50 letters ","&lt;span style=\"color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\"&gt;Title: Field Is mandatory&amp;nbsp;&lt;/span&gt;&lt;br style=\"box-sizing:border-box;color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\" /&gt;&lt;span style=\"color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\"&gt;Title: Shuld be minimum 10And max 50 letters&amp;nbsp;&lt;/span&gt;&lt;br style=\"box-sizing:border-box;color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\" /&gt;&lt;span style=\"color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\"&gt;Content: Field Is mandatory&amp;nbsp;&lt;/span&gt;&lt;br style=\"box-sizing:border-box;color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\" /&gt;&lt;span style=\"color:#444444;font-family:Montserrat, \'Helvetica Neue\', Helvetica, Arial, sans-serif;font-size:14px;background-color:#f1f4f7;\"&gt;Category: Field Is mandatory&amp;nbsp;&lt;/span&gt;","15");
INSERT INTO post VALUES("20","asgfergh","werywetghs","14");
INSERT INTO post VALUES("21","sfdqwgqerbvwer","qwrtqwrtqwr","14");





CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","mamun","81dc9bdb52d04dc20036dbd8313ed055","1");
INSERT INTO user VALUES("2","dada","827ccb0eea8a706c4c34a16891f84e7b","2");
INSERT INTO user VALUES("3","nana","827ccb0eea8a706c4c34a16891f84e7b","6");
INSERT INTO user VALUES("6","ma","81dc9bdb52d04dc20036dbd8313ed055","3");
INSERT INTO user VALUES("8","mamun89585","62c46a0ddc71c15c7d3f0169f64871c3","1");



