# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: system_db
# Generation Time: 2018-02-04 16:16:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table yii_acc_account
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_acc_account`;

CREATE TABLE `yii_acc_account` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL DEFAULT '',
  `email_address` varchar(200) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `salt` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `yii_acc_account` WRITE;
/*!40000 ALTER TABLE `yii_acc_account` DISABLE KEYS */;

INSERT INTO `yii_acc_account` (`id`, `username`, `email_address`, `password`, `salt`, `active`, `date_created`)
VALUES
	(1,'user@example.com','user@example.com','$2y$10$MEAWxmrAoqhOjMDtZdGu0eRaGQlHtZbiVD/wHPx1iAX2tN1mfHPt.',NULL,1,'2018-01-01 00:00:00');

/*!40000 ALTER TABLE `yii_acc_account` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_acc_account_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_acc_account_user`;

CREATE TABLE `yii_acc_account_user` (
  `account_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `street_no` varchar(100) DEFAULT NULL,
  `street` varchar(200) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  CONSTRAINT `yii_acc_account_user_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `yii_acc_account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `yii_acc_account_user` WRITE;
/*!40000 ALTER TABLE `yii_acc_account_user` DISABLE KEYS */;

INSERT INTO `yii_acc_account_user` (`account_id`, `first_name`, `last_name`, `dob`, `street_no`, `street`, `city`, `location`)
VALUES
	(1,'Rick','AQ',NULL,'1','street','city','location');

/*!40000 ALTER TABLE `yii_acc_account_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table yii_td_task
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_td_task`;

CREATE TABLE `yii_td_task` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `priority` tinyint(4) NOT NULL,
  `order_no` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_deadline` datetime NOT NULL,
  `date_completed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table yii_td_task_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `yii_td_task_info`;

CREATE TABLE `yii_td_task_info` (
  `task_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `task_desc` text,
  PRIMARY KEY (`task_id`),
  CONSTRAINT `yii_td_task_info_ibfk_1` FOREIGN KEY (`task_id`) REFERENCES `yii_td_task` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
