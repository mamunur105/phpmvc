-- Database: `mvc` --
-- Table `category` --
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `category` (`id`, `catname`, `title`) VALUES
(1, 'php', ''),
(2, 'java', ''),
(3, 'GO', ''),
(4, 'umbrella low cost', 'umbrella low cost'),
(5, ' high cost', ' high cost'),
(6, 'low cost', 'low cost'),
(7, ' high cost', ' high cost'),
(8, 'two', 'two');

