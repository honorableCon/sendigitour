-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wp_commentmeta`
--

DROP TABLE IF EXISTS `wp_commentmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_commentmeta`
--

LOCK TABLES `wp_commentmeta` WRITE;
/*!40000 ALTER TABLE `wp_commentmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_commentmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_comments`
--

DROP TABLE IF EXISTS `wp_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_comments` (
  `comment_ID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint unsigned NOT NULL DEFAULT '0',
  `user_id` bigint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_comments`
--

LOCK TABLES `wp_comments` WRITE;
/*!40000 ALTER TABLE `wp_comments` DISABLE KEYS */;
INSERT INTO `wp_comments` VALUES (1,1,'A simplon commentater','wapuu@simplon.co','https://simplon.org/','','2022-01-17 17:06:47','2022-01-17 17:06:47','Hi, this is a comment.\r\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\r\nCommenter avatars come from <a href=\"https://gravatar.com\" rel=\"nofollow ugc\">Gravatar</a>.',0,'1','','comment',0,0);
/*!40000 ALTER TABLE `wp_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_links`
--

DROP TABLE IF EXISTS `wp_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_links` (
  `link_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint unsigned NOT NULL DEFAULT '1',
  `link_rating` int NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_links`
--

LOCK TABLES `wp_links` WRITE;
/*!40000 ALTER TABLE `wp_links` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_options`
--

DROP TABLE IF EXISTS `wp_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_options` (
  `option_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_options`
--

LOCK TABLES `wp_options` WRITE;
/*!40000 ALTER TABLE `wp_options` DISABLE KEYS */;
INSERT INTO `wp_options` VALUES (198,'_transient_dash_v2_88ae138922fe95674369b1cb3d215a2b','<div class=\"rss-widget\"><ul><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2022/01/episode-23-a-letter-from-wordpress-executive-director/\'>WP Briefing: Episode 23: A letter from WordPress’ Executive Director</a></li><li><a class=\'rsswidget\' href=\'https://wordpress.org/news/2022/01/wordpress-5-9-rc-2/\'>WordPress 5.9 RC 2</a></li></ul></div><div class=\"rss-widget\"><ul><li><a class=\'rsswidget\' href=\'https://wptavern.com/woocommerce-aims-to-produce-mvp-of-custom-tables-for-orders-by-q3-2022?utm_source=rss&#038;utm_medium=rss&#038;utm_campaign=woocommerce-aims-to-produce-mvp-of-custom-tables-for-orders-by-q3-2022\'>WPTavern: WooCommerce Aims to Produce MVP of Custom Tables for Orders by Q3, 2022</a></li><li><a class=\'rsswidget\' href=\'https://wptavern.com/nick-diego-forks-core-wordpress-block-creates-social-sharing-plugin?utm_source=rss&#038;utm_medium=rss&#038;utm_campaign=nick-diego-forks-core-wordpress-block-creates-social-sharing-plugin\'>WPTavern: Nick Diego Forks Core WordPress Block, Creates Social Sharing Plugin</a></li><li><a class=\'rsswidget\' href=\'https://central.wordcamp.org/news/2022/01/17/wp-yall-has-been-postponed-until-the-spring/\'>WordCamp Central: WP Y’all has been Postponed until the Spring</a></li></ul></div>','no');
/*!40000 ALTER TABLE `wp_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default'),(2,3,'_wp_page_template','default'),(3,5,'_wp_page_template','main-page.php'),(4,6,'_wp_trash_meta_status','publish'),(5,6,'_wp_trash_meta_time','1642439952'),(6,7,'_wp_trash_meta_status','publish'),(7,7,'_wp_trash_meta_time','1642439973'),(8,8,'_wp_attached_file','2022/01/logo.png'),(9,8,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:2306;s:6:\"height\";i:788;s:4:\"file\";s:16:\"2022/01/logo.png\";s:5:\"sizes\";a:6:{s:6:\"medium\";a:4:{s:4:\"file\";s:16:\"logo-300x103.png\";s:5:\"width\";i:300;s:6:\"height\";i:103;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:17:\"logo-1024x350.png\";s:5:\"width\";i:1024;s:6:\"height\";i:350;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:16:\"logo-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:16:\"logo-768x262.png\";s:5:\"width\";i:768;s:6:\"height\";i:262;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"1536x1536\";a:4:{s:4:\"file\";s:17:\"logo-1536x525.png\";s:5:\"width\";i:1536;s:6:\"height\";i:525;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"2048x2048\";a:4:{s:4:\"file\";s:17:\"logo-2048x700.png\";s:5:\"width\";i:2048;s:6:\"height\";i:700;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),(10,9,'_edit_lock','1642440214:1'),(12,10,'_customize_changeset_uuid','5dd0ef14-0a35-4ba5-aa34-c106c800fba8'),(13,11,'_menu_item_type','post_type'),(14,11,'_menu_item_menu_item_parent','0'),(15,11,'_menu_item_object_id','5'),(16,11,'_menu_item_object','page'),(17,11,'_menu_item_target',''),(18,11,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(19,11,'_menu_item_xfn',''),(20,11,'_menu_item_url',''),(21,13,'_menu_item_type','post_type'),(22,13,'_menu_item_menu_item_parent','0'),(23,13,'_menu_item_object_id','10'),(24,13,'_menu_item_object','page'),(25,13,'_menu_item_target',''),(26,13,'_menu_item_classes','a:1:{i:0;s:0:\"\";}'),(27,13,'_menu_item_xfn',''),(28,13,'_menu_item_url',''),(29,9,'_wp_trash_meta_status','publish'),(30,9,'_wp_trash_meta_time','1642440272'),(31,14,'_wp_trash_meta_status','publish'),(32,14,'_wp_trash_meta_time','1642440281'),(33,15,'_edit_lock','1642440337:1'),(34,15,'_wp_trash_meta_status','publish'),(35,15,'_wp_trash_meta_time','1642440512'),(36,16,'_wp_trash_meta_status','publish'),(37,16,'_wp_trash_meta_time','1642440792'),(38,17,'_edit_lock','1642440896:1'),(39,17,'_wp_trash_meta_status','publish'),(40,17,'_wp_trash_meta_time','1642440910'),(41,18,'_edit_lock','1642441076:1'),(42,18,'_wp_trash_meta_status','publish'),(43,18,'_wp_trash_meta_time','1642441084'),(44,19,'_edit_lock','1642441109:1'),(45,19,'_wp_trash_meta_status','publish'),(46,19,'_wp_trash_meta_time','1642441115'),(47,20,'_edit_lock','1642441169:1'),(48,20,'_wp_trash_meta_status','publish'),(49,20,'_wp_trash_meta_time','1642441185'),(50,5,'_edit_lock','1642441146:1'),(51,21,'_wp_trash_meta_status','publish'),(52,21,'_wp_trash_meta_time','1642441551'),(53,22,'_edit_lock','1642441737:1'),(54,22,'_wp_trash_meta_status','publish'),(55,22,'_wp_trash_meta_time','1642441750'),(56,23,'_wp_trash_meta_status','publish'),(57,23,'_wp_trash_meta_time','1642441769'),(58,24,'_wp_attached_file','2022/01/NunitoSans-SemiBold.ttf'),(59,25,'_wp_trash_meta_status','publish'),(60,25,'_wp_trash_meta_time','1642442466'),(61,26,'_edit_lock','1642442799:1'),(64,28,'_edit_lock','1642458505:1'),(65,29,'_wp_trash_meta_status','publish'),(66,29,'_wp_trash_meta_time','1642504870'),(67,30,'_wp_trash_meta_status','publish'),(68,30,'_wp_trash_meta_time','1642504910'),(69,31,'_edit_lock','1642505907:1'),(70,31,'_wp_trash_meta_status','publish'),(71,31,'_wp_trash_meta_time','1642505920');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_posts` (
  `ID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (1,1,'2022-01-17 17:06:47','2022-01-17 17:06:47','<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->','Hello world!','','publish','open','open','','hello-world','','','2022-01-17 17:06:47','2022-01-17 17:06:47','',0,'http://localhost/wordpress/?p=1',0,'post','',1),(2,1,'2022-01-17 17:06:47','2022-01-17 17:06:47','<!-- wp:paragraph -->\n<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...or something like this:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>As a new WordPress user, you should go to <a href=\"http://localhost/wordpress/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>\n<!-- /wp:paragraph -->','Sample Page','','publish','closed','open','','sample-page','','','2022-01-17 17:06:47','2022-01-17 17:06:47','',0,'http://localhost/wordpress/?page_id=2',0,'page','',0),(3,1,'2022-01-17 17:06:47','2022-01-17 17:06:47','<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/wordpress.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where we send your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->','Privacy Policy','','draft','closed','open','','privacy-policy','','','2022-01-17 17:06:47','2022-01-17 17:06:47','',0,'http://localhost/wordpress/?page_id=3',0,'page','',0),(4,1,'2022-01-17 17:07:10','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2022-01-17 17:07:10','0000-00-00 00:00:00','',0,'http://localhost/wordpress/?p=4',0,'post','',0),(5,1,'2022-01-17 17:17:15','2022-01-17 17:17:15','','Home','','publish','closed','closed','','home','','','2022-01-17 17:17:15','2022-01-17 17:17:15','',0,'http://localhost/wordpress/index.php/home/',0,'page','',0),(6,1,'2022-01-17 17:19:12','2022-01-17 17:19:12','{\n    \"teczilla-finance::teczilla_theme_color_scheme\": {\n        \"value\": \"#ce0033\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:19:12\"\n    }\n}','','','trash','closed','closed','','50132379-bfbd-4cd3-adcb-befe1f82ba25','','','2022-01-17 17:19:12','2022-01-17 17:19:12','',0,'http://localhost/wordpress/index.php/2022/01/17/50132379-bfbd-4cd3-adcb-befe1f82ba25/',0,'customize_changeset','',0),(7,1,'2022-01-17 17:19:33','2022-01-17 17:19:33','{\n    \"blogdescription\": {\n        \"value\": \"\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:19:33\"\n    }\n}','','','trash','closed','closed','','8e339318-8b3a-489e-9643-c3c7abd53125','','','2022-01-17 17:19:33','2022-01-17 17:19:33','',0,'http://localhost/wordpress/index.php/2022/01/17/8e339318-8b3a-489e-9643-c3c7abd53125/',0,'customize_changeset','',0),(8,1,'2022-01-17 17:22:08','2022-01-17 17:22:08','','logo','','inherit','open','closed','','logo','','','2022-01-17 17:22:08','2022-01-17 17:22:08','',0,'http://localhost/wordpress/wp-content/uploads/2022/01/logo.png',0,'attachment','image/png',0),(9,1,'2022-01-17 17:24:32','2022-01-17 17:24:32','{\n    \"nav_menu[-4352105552903056400]\": {\n        \"value\": {\n            \"name\": \"main\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:23:25\"\n    },\n    \"nav_menu_item[-8483548357322863000]\": {\n        \"value\": {\n            \"object_id\": 5,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 1,\n            \"type\": \"post_type\",\n            \"title\": \"Home\",\n            \"url\": \"http://localhost/wordpress/\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"Home\",\n            \"nav_menu_term_id\": -4352105552903056400,\n            \"_invalid\": false,\n            \"type_label\": \"Front Page\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:23:25\"\n    },\n    \"nav_menus_created_posts\": {\n        \"value\": [\n            10\n        ],\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:24:32\"\n    },\n    \"nav_menu_item[-8720194774748714000]\": {\n        \"value\": false,\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:24:32\"\n    },\n    \"nav_menu_item[-2864683798779077600]\": {\n        \"value\": {\n            \"object_id\": 10,\n            \"object\": \"page\",\n            \"menu_item_parent\": 0,\n            \"position\": 2,\n            \"type\": \"post_type\",\n            \"title\": \"Blog\",\n            \"url\": \"http://localhost/wordpress/?page_id=10\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"Blog\",\n            \"nav_menu_term_id\": -4352105552903056400,\n            \"_invalid\": false,\n            \"type_label\": \"Page\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:24:32\"\n    }\n}','','','trash','closed','closed','','5dd0ef14-0a35-4ba5-aa34-c106c800fba8','','','2022-01-17 17:24:32','2022-01-17 17:24:32','',0,'http://localhost/wordpress/?p=9',0,'customize_changeset','',0),(10,1,'2022-01-17 17:24:32','2022-01-17 17:24:32','','Blog','','publish','closed','closed','','blog','','','2022-01-17 17:24:32','2022-01-17 17:24:32','',0,'http://localhost/wordpress/?page_id=10',0,'page','',0),(11,1,'2022-01-17 17:24:32','2022-01-17 17:24:32',' ','','','publish','closed','closed','','11','','','2022-01-17 17:24:32','2022-01-17 17:24:32','',0,'http://localhost/wordpress/index.php/2022/01/17/11/',1,'nav_menu_item','',0),(12,1,'2022-01-17 17:24:32','2022-01-17 17:24:32','','Blog','','inherit','closed','closed','','10-revision-v1','','','2022-01-17 17:24:32','2022-01-17 17:24:32','',10,'http://localhost/wordpress/?p=12',0,'revision','',0),(13,1,'2022-01-17 17:24:32','2022-01-17 17:24:32',' ','','','publish','closed','closed','','13','','','2022-01-17 17:24:32','2022-01-17 17:24:32','',0,'http://localhost/wordpress/index.php/2022/01/17/13/',2,'nav_menu_item','',0),(14,1,'2022-01-17 17:24:41','2022-01-17 17:24:41','{\n    \"teczilla-finance::nav_menu_locations[primary]\": {\n        \"value\": 2,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:24:41\"\n    }\n}','','','trash','closed','closed','','27e107f2-fef0-4fac-bff7-d9e58c7e8ffe','','','2022-01-17 17:24:41','2022-01-17 17:24:41','',0,'http://localhost/wordpress/index.php/2022/01/17/27e107f2-fef0-4fac-bff7-d9e58c7e8ffe/',0,'customize_changeset','',0),(15,1,'2022-01-17 17:28:32','2022-01-17 17:28:32','{\n    \"show_on_front\": {\n        \"value\": \"page\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:25:37\"\n    }\n}','','','trash','closed','closed','','40534cf5-0e26-47ed-becb-e155a4abd76e','','','2022-01-17 17:28:32','2022-01-17 17:28:32','',0,'http://localhost/wordpress/?p=15',0,'customize_changeset','',0),(16,1,'2022-01-17 17:33:12','2022-01-17 17:33:12','{\n    \"teczilla-finance::teczilla_typography_base_font_family\": {\n        \"value\": \"Nunito\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:33:12\"\n    }\n}','','','trash','closed','closed','','e9b808a5-4562-4347-888c-26cff510f32a','','','2022-01-17 17:33:12','2022-01-17 17:33:12','',0,'http://localhost/wordpress/index.php/2022/01/17/e9b808a5-4562-4347-888c-26cff510f32a/',0,'customize_changeset','',0),(17,1,'2022-01-17 17:35:10','2022-01-17 17:35:10','{\n    \"teczilla-finance::teczilla_show_typography\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:33:29\"\n    }\n}','','','trash','closed','closed','','db3186b0-1c39-444e-be64-c85f53322c85','','','2022-01-17 17:35:10','2022-01-17 17:35:10','',0,'http://localhost/wordpress/?p=17',0,'customize_changeset','',0),(18,1,'2022-01-17 17:38:04','2022-01-17 17:38:04','{\n    \"teczilla-finance::braedcrumb_height\": {\n        \"value\": \"100\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:36:29\"\n    },\n    \"teczilla-finance::teczilla_header_mail\": {\n        \"value\": \"simplon@simplon.co\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:36:29\"\n    },\n    \"teczilla-finance::teczilla_header_phone\": {\n        \"value\": \"+221772521129\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:37:29\"\n    },\n    \"teczilla-finance::teczilla_header_address\": {\n        \"value\": \"Cit\\u00e9 Goor Gui\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:37:29\"\n    },\n    \"teczilla-finance::teczilla_top_header_enable\": {\n        \"value\": true,\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:38:04\"\n    }\n}','','','trash','closed','closed','','0dd56385-0cbc-4544-9c54-22b564b25731','','','2022-01-17 17:38:04','2022-01-17 17:38:04','',0,'http://localhost/wordpress/?p=18',0,'customize_changeset','',0),(19,1,'2022-01-17 17:38:35','2022-01-17 17:38:35','{\n    \"teczilla-finance::teczilla_blog_temp_layout\": {\n        \"value\": \"rightsidebar\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:38:29\"\n    }\n}','','','trash','closed','closed','','a1c2a031-f075-4072-95df-d1c6a0efed90','','','2022-01-17 17:38:35','2022-01-17 17:38:35','',0,'http://localhost/wordpress/?p=19',0,'customize_changeset','',0),(20,1,'2022-01-17 17:39:45','2022-01-17 17:39:45','{\n    \"teczilla-finance::teczilla_copyright_text\": {\n        \"value\": \"Proudly powered by <a href=\\\"https://wordpress.org/\\\" target=\\\"_blank\\\"> Simplon P4 </a>\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:39:45\"\n    }\n}','','','trash','closed','closed','','b43b98ca-3045-4a89-a95c-3e21ff1951c9','','','2022-01-17 17:39:45','2022-01-17 17:39:45','',0,'http://localhost/wordpress/?p=20',0,'customize_changeset','',0),(21,1,'2022-01-17 17:45:51','2022-01-17 17:45:51','{\n    \"teczilla-finance::avadanta_slider_content\": {\n        \"value\": \"[{\\\"text\\\":\\\"We look forward to getting to know you and to helping you take your company to new heights.\\\\n\\\\n\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/slder-fince.jpg\\\",\\\"title\\\":\\\"Simplon, r\\u00e9seau de Fabriques num\\u00e9riques et inclusives\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab194c2d3\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"text\\\":\\\"We look forward to getting to know you and to helping you take your company to new heights.\\\\n\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/slder-fince2.jpg\\\",\\\"title\\\":\\\"Simplon, r\\u00e9seau de Fabriques num\\u00e9riques et inclusives\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab198f7eb\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    },\n    \"teczilla-finance::avadanta_service_content\": {\n        \"value\": \"[{\\\"icon_value\\\":\\\"fa-laptop\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv1.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Digital Marketing\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1963801\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"fa-bullhorn\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv2.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Insurance Business\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19315ed\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"fa-cubes\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv3.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Business Plan\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19d5b4e\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"fa-asterisk\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv4.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Analytics\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab199b8e5\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"fa-database\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv5.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Database\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1918827\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"fa-user\\\",\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/serv6.jpg\\\",\\\"choice\\\":\\\"customizer_repeater_image\\\",\\\"title\\\":\\\"Planning\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab193e011\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    },\n    \"teczilla-finance::avadanta_portfolio_content\": {\n        \"value\": \"[{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port8.jpg\\\",\\\"title\\\":\\\"Valuation\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab198a31c\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port7.jpg\\\",\\\"title\\\":\\\"Tasking\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19abce8\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port4.jpg\\\",\\\"title\\\":\\\"Creative\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19c905a\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port1.jpg\\\",\\\"title\\\":\\\"Marketing\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19d965a\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port5.png\\\",\\\"title\\\":\\\"ANalysis\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19f1bce\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/port6.jpg\\\",\\\"title\\\":\\\"Environment\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19ae7a5\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    },\n    \"teczilla-finance::avadanta_testimonial_content\": {\n        \"value\": \"[{\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/testi1.png\\\",\\\"title\\\":\\\"David Fahim\\\",\\\"subtitle\\\":\\\"Web Developer\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19ab740\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/testi2.png\\\",\\\"title\\\":\\\"Kiron Jorge\\\",\\\"subtitle\\\":\\\"Web Designer\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19605c0\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"text\\\":\\\"Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/testi3.png\\\",\\\"title\\\":\\\"Robart Jason\\\",\\\"subtitle\\\":\\\"Programmer\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19844a6\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    },\n    \"teczilla-finance::avadanta_team_content\": {\n        \"value\": \"[{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team1.png\\\",\\\"title\\\":\\\"David Fahim\\\",\\\"subtitle\\\":\\\"Web Developer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19668c2\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team2.png\\\",\\\"title\\\":\\\"Kiron Jorge\\\",\\\"subtitle\\\":\\\"Web Designer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab191bce3\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team3.png\\\",\\\"title\\\":\\\"Robart Jason\\\",\\\"subtitle\\\":\\\"Programmer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19275ab\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team4.png\\\",\\\"title\\\":\\\"Muktar Amint\\\",\\\"subtitle\\\":\\\"Influencer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19d2701\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    },\n    \"teczilla-finance::avadanta_clients_content\": {\n        \"value\": \"[{\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/avadanta-c1.png\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1995237\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/avadanta-c2.png\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1955fd0\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/avadanta-c3.png\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1907c40\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/avadanta-c4.png\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab1994fc2\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/avadanta-c5.png\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab19c5e7a\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:45:51\"\n    }\n}','','','trash','closed','closed','','cfc40a46-6532-4dbf-bd24-b7ccda77ad27','','','2022-01-17 17:45:51','2022-01-17 17:45:51','',0,'http://localhost/wordpress/index.php/2022/01/17/cfc40a46-6532-4dbf-bd24-b7ccda77ad27/',0,'customize_changeset','',0),(22,1,'2022-01-17 17:49:10','2022-01-17 17:49:10','{\n    \"teczilla-finance::avadanta_slider_content\": {\n        \"value\": \"[{\\\"text\\\":\\\"We look forward to getting to know you and to helping you take your company to new heights.\\\\n\\\\n\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/slder-fince.jpg\\\",\\\"title\\\":\\\"Simplon, r\\u00e9seau de Fabriques num\\u00e9riques et inclusives\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab194c2d3\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"text\\\":\\\"We look forward to getting to know you and to helping you take your company to new heights.\\\\n\\\",\\\"link\\\":\\\"#\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/teczilla/assets/images/slder-fince2.jpg\\\",\\\"title\\\":\\\"Simplon, r\\u00e9seau de Fabriques num\\u00e9riques et inclusives\\\",\\\"subtitle\\\":\\\"undefined\\\",\\\"social_repeater\\\":\\\"undefined\\\",\\\"id\\\":\\\"social-repeater-61e5ab198f7eb\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:48:57\"\n    }\n}','','','trash','closed','closed','','22aa8cc7-e58f-4aa9-8933-22c4b0f3d4c9','','','2022-01-17 17:49:10','2022-01-17 17:49:10','',0,'http://localhost/wordpress/?p=22',0,'customize_changeset','',0),(23,1,'2022-01-17 17:49:29','2022-01-17 17:49:29','{\n    \"page_for_posts\": {\n        \"value\": \"10\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 17:49:29\"\n    }\n}','','','trash','closed','closed','','f22ddac8-6a0e-43d6-a891-294f2cf1c851','','','2022-01-17 17:49:29','2022-01-17 17:49:29','',0,'http://localhost/wordpress/index.php/2022/01/17/f22ddac8-6a0e-43d6-a891-294f2cf1c851/',0,'customize_changeset','',0),(24,1,'2022-01-17 17:56:41','2022-01-17 17:56:41','','NunitoSans-SemiBold','','inherit','open','closed','','nunitosans-semibold','','','2022-01-17 17:56:41','2022-01-17 17:56:41','',0,'http://localhost/wordpress/wp-content/uploads/2022/01/NunitoSans-SemiBold.ttf',0,'attachment','application/x-font-ttf',0),(25,1,'2022-01-17 18:01:06','2022-01-17 18:01:06','{\n    \"teczilla-finance::teczilla_header_button\": {\n        \"value\": \"Nous Contacter\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-17 18:01:06\"\n    }\n}','','','trash','closed','closed','','98b8435b-fcd5-414c-937e-201afa00b8c4','','','2022-01-17 18:01:06','2022-01-17 18:01:06','',0,'http://localhost/wordpress/index.php/2022/01/17/98b8435b-fcd5-414c-937e-201afa00b8c4/',0,'customize_changeset','',0),(26,1,'2022-01-17 18:05:48','2022-01-17 18:05:48','<!-- wp:paragraph -->\n<p>lorem</p>\n<!-- /wp:paragraph -->','Tour à Dakar','','publish','open','open','','tour-a-dakar','','','2022-01-17 18:05:48','2022-01-17 18:05:48','',0,'http://localhost/wordpress/?p=26',0,'post','',0),(27,1,'2022-01-17 18:05:48','2022-01-17 18:05:48','<!-- wp:paragraph -->\n<p>lorem</p>\n<!-- /wp:paragraph -->','Tour à Dakar','','inherit','closed','closed','','26-revision-v1','','','2022-01-17 18:05:48','2022-01-17 18:05:48','',26,'http://localhost/wordpress/?p=27',0,'revision','',0),(28,1,'2022-01-17 18:08:23','0000-00-00 00:00:00','','Auto Draft','','auto-draft','open','open','','','','','2022-01-17 18:08:23','0000-00-00 00:00:00','',0,'http://localhost/wordpress/?p=28',0,'post','',0),(29,1,'2022-01-18 11:21:10','2022-01-18 11:21:10','{\n    \"blogdescription\": {\n        \"value\": \"former les jeunes dans le num\\u00e9rique\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-18 11:21:10\"\n    }\n}','','','trash','closed','closed','','2e9bb95f-e3dc-4192-a5ff-0b96acdb8a63','','','2022-01-18 11:21:10','2022-01-18 11:21:10','',0,'http://localhost/wordpress/index.php/2022/01/18/2e9bb95f-e3dc-4192-a5ff-0b96acdb8a63/',0,'customize_changeset','',0),(30,1,'2022-01-18 11:21:50','2022-01-18 11:21:50','{\n    \"blogname\": {\n        \"value\": \"Simplon\",\n        \"type\": \"option\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-18 11:21:50\"\n    }\n}','','','trash','closed','closed','','d63296eb-193f-4407-b766-08c5e41aef8f','','','2022-01-18 11:21:50','2022-01-18 11:21:50','',0,'http://localhost/wordpress/index.php/2022/01/18/d63296eb-193f-4407-b766-08c5e41aef8f/',0,'customize_changeset','',0),(31,1,'2022-01-18 11:38:40','2022-01-18 11:38:40','{\n    \"teczilla-finance::portfolio_section_enable\": {\n        \"value\": \"off\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-18 11:36:26\"\n    },\n    \"teczilla-finance::home_service_section_enabled\": {\n        \"value\": \"off\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-18 11:37:27\"\n    },\n    \"teczilla-finance::avadanta_team_content\": {\n        \"value\": \"[{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team1.png\\\",\\\"title\\\":\\\"Ngor Seck\\\",\\\"subtitle\\\":\\\"Web Developer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19668c2\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team2.png\\\",\\\"title\\\":\\\"Samba Kane\\\",\\\"subtitle\\\":\\\"Web Designer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab191bce3\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team3.png\\\",\\\"title\\\":\\\"Seckou Sane\\\",\\\"subtitle\\\":\\\"Programmer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19275ab\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"},{\\\"icon_value\\\":\\\"\\\",\\\"image_url\\\":\\\"http://localhost/wordpress/wp-content/plugins/avadanta-companion/library/avadanta/assets/images/team4.png\\\",\\\"title\\\":\\\"Muktar Amint\\\",\\\"subtitle\\\":\\\"Influencer\\\",\\\"social_repeater\\\":\\\"\\\",\\\"id\\\":\\\"social-repeater-61e5ab19d2701\\\",\\\"shortcode\\\":\\\"undefined\\\",\\\"open_new_tab\\\":\\\"no\\\"}]\",\n        \"type\": \"theme_mod\",\n        \"user_id\": 1,\n        \"date_modified_gmt\": \"2022-01-18 11:38:27\"\n    }\n}','','','trash','closed','closed','','84a59dbc-f12a-42ee-b741-5a11ccf0b8ee','','','2022-01-18 11:38:40','2022-01-18 11:38:40','',0,'http://localhost/wordpress/?p=31',0,'customize_changeset','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint unsigned NOT NULL DEFAULT '0',
  `term_order` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_relationships`
--

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;
INSERT INTO `wp_term_relationships` VALUES (1,1,0),(11,2,0),(13,2,0),(26,1,0);
/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_term_taxonomy`
--

DROP TABLE IF EXISTS `wp_term_taxonomy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint unsigned NOT NULL DEFAULT '0',
  `count` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_taxonomy`
--

LOCK TABLES `wp_term_taxonomy` WRITE;
/*!40000 ALTER TABLE `wp_term_taxonomy` DISABLE KEYS */;
INSERT INTO `wp_term_taxonomy` VALUES (1,1,'category','',0,2),(2,2,'nav_menu','',0,2),(3,3,'bsf_custom_fonts','',0,0);
/*!40000 ALTER TABLE `wp_term_taxonomy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_termmeta`
--

DROP TABLE IF EXISTS `wp_termmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_termmeta` (
  `meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_termmeta`
--

LOCK TABLES `wp_termmeta` WRITE;
/*!40000 ALTER TABLE `wp_termmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_termmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_terms`
--

DROP TABLE IF EXISTS `wp_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_terms` (
  `term_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_terms`
--

LOCK TABLES `wp_terms` WRITE;
/*!40000 ALTER TABLE `wp_terms` DISABLE KEYS */;
INSERT INTO `wp_terms` VALUES (1,'Uncategorized','uncategorized',0),(2,'main','main',0),(3,'Nunito Sans','nunito-sans',0);
/*!40000 ALTER TABLE `wp_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','honorablepress'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'wp_user_level','10'),(14,1,'dismissed_wp_pointers',''),(15,1,'show_welcome_panel','1'),(16,1,'session_tokens','a:1:{s:64:\"50b471e68e0919dcc39f2dce6cee2ff43821bdeb3149b410fa5c46107f926e47\";a:4:{s:10:\"expiration\";i:1643648828;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:76:\"Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:95.0) Gecko/20100101 Firefox/95.0\";s:5:\"login\";i:1642439228;}}'),(17,1,'wp_dashboard_quick_press_last_post_id','4'),(18,1,'community-events-location','a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),(19,1,'wp_user-settings','libraryContent=browse'),(20,1,'wp_user-settings-time','1642441227');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_users`
--

DROP TABLE IF EXISTS `wp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_users` (
  `ID` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_users`
--

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
INSERT INTO `wp_users` VALUES (1,'honorablepress','$P$BLT.YF32csj/dy8GjIY0CWkiOxBl4m/','honorablepress','honorablepress@gmail.com','http://localhost/wordpress','2022-01-17 17:06:47','',0,'honorablepress');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-18 16:58:58