/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : helmetshop

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-28 20:11:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `images` text,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('11', '1458975530_dd.jpg', '1');
INSERT INTO `banner` VALUES ('12', '1458976249_category-equipment-defcon-batting-helmets-banner-1.jpg', '1');
INSERT INTO `banner` VALUES ('13', '1458976258_Pick-your-demo-bike-here-banner.jpg', '1');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'Ongoing Projects');
INSERT INTO `category` VALUES ('2', 'Up Coming Projects');
INSERT INTO `category` VALUES ('3', 'Completed');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `status` int(10) DEFAULT NULL,
  `footer` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('1', 'Josheph Frenandish', '<p>I am very happy after dealing with them. they provide in cheaper rate.</p>\r\n\r\n<p>Trustable and professional orgnisation.</p>', '1458978121_pinintrest.jpg', '1', '1');

-- ----------------------------
-- Table structure for contact_info
-- ----------------------------
DROP TABLE IF EXISTS `contact_info`;
CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact_info
-- ----------------------------
INSERT INTO `contact_info` VALUES ('1', 'namrata', 'namrata.digiinterface@gmail.com', '9664423495', 'testtttttttt');
INSERT INTO `contact_info` VALUES ('2', 'vijendra', 'vijendra@goyalinfotech.com', '9664423494', 'testtttttttttt');
INSERT INTO `contact_info` VALUES ('3', 'lata', 'test@gmail.com', '3456546576', 'testtttttttttt');
INSERT INTO `contact_info` VALUES ('4', 'vijendra', 'vijendra@goyalinfotech.com', '7645665464', 'testtttttttt');
INSERT INTO `contact_info` VALUES ('5', 'aniket', 'aniket@gmail.com', '9664423495', 'testttt');
INSERT INTO `contact_info` VALUES ('6', 'vijendra', 'vijendra@goyalinfotech.com', '9664423495', 'testttttttt');
INSERT INTO `contact_info` VALUES ('7', 'Namrata Chavan', 'namrata.digiinterface@gmail.com', '0966462349', 'test');
INSERT INTO `contact_info` VALUES ('8', 'Namrata Chavan', 'namrata.digiinterface@gmail.com', '0966462349', 'test');
INSERT INTO `contact_info` VALUES ('9', 'Namrata Chavan', 'namrata.digiinterface@gmail.com', '0966462349', 'test2');
INSERT INTO `contact_info` VALUES ('10', 'vijendra', 'vijendra@rr.com', '8898315978', 'test');
INSERT INTO `contact_info` VALUES ('11', 'sdfdsf', 'dfdfdf', '8898315978', 'sdfdsfdfgComment');
INSERT INTO `contact_info` VALUES ('12', 'viju', 'viju@test.com', '8898315978', 'test c  dfvsd efds ');
INSERT INTO `contact_info` VALUES ('13', 'sdfdf', 'dfdf', '5684756', 'sdfdf');
INSERT INTO `contact_info` VALUES ('14', 'test', 'test@test.com', '5546654651', 'sdsdf');
INSERT INTO `contact_info` VALUES ('15', 'test', 'test@test.com', '5546654651', 'sdsdf');

-- ----------------------------
-- Table structure for contact_us
-- ----------------------------
DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` text,
  `email` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact_us
-- ----------------------------
INSERT INTO `contact_us` VALUES ('3', 'S/58, Goyal Trade Centre,\r\n Shantivan, Borivali (East),\r\n Mumbai - 400 066', '+91 2896 9308', 'www.example123@gmail.com', 'We are the best seller of helmet and bike diggin in delhi resindence.');

-- ----------------------------
-- Table structure for core_team
-- ----------------------------
DROP TABLE IF EXISTS `core_team`;
CREATE TABLE `core_team` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of core_team
-- ----------------------------
INSERT INTO `core_team` VALUES ('2', 'test', '<p><span >lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456821461_bngl1.jpg', '1');
INSERT INTO `core_team` VALUES ('3', 'test2', '<p><span >lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456823516_bngl1.jpg', '1');
INSERT INTO `core_team` VALUES ('4', 'test3', '<p><span >lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456823529_bngl1.jpg', '1');
INSERT INTO `core_team` VALUES ('5', 'Test4', '<p><span >lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456823543_bngl1.jpg', '1');

-- ----------------------------
-- Table structure for current_openings
-- ----------------------------
DROP TABLE IF EXISTS `current_openings`;
CREATE TABLE `current_openings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(10) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `profile` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of current_openings
-- ----------------------------
INSERT INTO `current_openings` VALUES ('1', 'Software Developer', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>&nbsp;</p>', '1', '20k', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</p>\r\n\r\n<p>Solving queries of the clients through email, Chat or by telephonic conversation.</p>');
INSERT INTO `current_openings` VALUES ('2', 'Tester', '<ul>\r\n <li>Independently managing entire his/her campaigns.</li>\r\n <li>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</li>\r\n <li>Solving queries of the clients through email, Chat or by telephonic conversation.</li>\r\n</ul>', '1', '20k', '<ul>\r\n <li>Independently managing entire his/her campaigns.</li>\r\n <li>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</li>\r\n <li>Solving queries of the clients through email, Chat or by telephonic conversation.</li>\r\n</ul>');

-- ----------------------------
-- Table structure for customer1
-- ----------------------------
DROP TABLE IF EXISTS `customer1`;
CREATE TABLE `customer1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customer1
-- ----------------------------
INSERT INTO `customer1` VALUES ('9', 'admin@gmail.com', '123456', 'Helmet ', 'Shop');

-- ----------------------------
-- Table structure for disclaimer
-- ----------------------------
DROP TABLE IF EXISTS `disclaimer`;
CREATE TABLE `disclaimer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of disclaimer
-- ----------------------------
INSERT INTO `disclaimer` VALUES ('1', '<p><span >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</span><br />\r\n<br />\r <span >It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>');

-- ----------------------------
-- Table structure for email_config
-- ----------------------------
DROP TABLE IF EXISTS `email_config`;
CREATE TABLE `email_config` (
  `email_config_id` int(11) NOT NULL AUTO_INCREMENT,
  `SMTPSecure` varchar(100) NOT NULL,
  `Host` varchar(255) DEFAULT NULL,
  `Port` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `From` varchar(255) DEFAULT NULL,
  `From_Name` varchar(255) DEFAULT NULL,
  `Send_To` varchar(255) DEFAULT NULL,
  `bcc` varchar(255) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`email_config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_config
-- ----------------------------
INSERT INTO `email_config` VALUES ('1', 'ssl', 'mail.digiinterface.com', '25', 'helmet@digiinterface.com', 'naren@123', 'helmet@digiinterface.com', 'Helmet shop', 'helmet@digiinterface.com', 'vijendra@goyalinfotech.com', '1');
INSERT INTO `email_config` VALUES ('2', '', 'mail.rectangleindia.com', '25', 'no-reply@rectangleindia.com', 'naren@123', 'no-reply@rectangleindia.com', 'Rectangle', 'no-reply@rectangleindia.com', null, '0');

-- ----------------------------
-- Table structure for enquiry
-- ----------------------------
DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `mobile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of enquiry
-- ----------------------------
INSERT INTO `enquiry` VALUES ('1', 'vijendtra', 'viju@test.com', 'test', '8898653256');
INSERT INTO `enquiry` VALUES ('2', 'test', 'test@test.com', 'res', '8898315978');
INSERT INTO `enquiry` VALUES ('3', 'test', 'test@test.com', 'sdfdf', '8454167165');
INSERT INTO `enquiry` VALUES ('4', 'test', 'test@test.com', 'sdsds dfd ', '5651656146');
INSERT INTO `enquiry` VALUES ('5', 'test', 'teste@gmail.comk', 'sdsd', '5615648464');

-- ----------------------------
-- Table structure for features
-- ----------------------------
DROP TABLE IF EXISTS `features`;
CREATE TABLE `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projects_table` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` text,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of features
-- ----------------------------
INSERT INTO `features` VALUES ('4', '6', 'test features1', '<h2>Facilities</h2>\r\n\r <div class=\"info_fea\" >\r <div class=\"cont_feature\" >\r\n<ul>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<h2>Highlights</h2>\r\n\r <div class=\"cont_feature\" >\r\n<ul>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n</ul>\r\n\r\n<h2>Transport</h2>\r\n\r <div class=\"cont_feature\" >\r\n<ul>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n</ul>\r\n</div>\r\n</div>', '1458388248_diff_efee.jpg,1458388250_banner.jpg');
INSERT INTO `features` VALUES ('5', '6', 'test features2', '<p>test features2</p>', '1458388262_benefits_banner.jpg');
INSERT INTO `features` VALUES ('6', '6', 'test features1 test features1', '<p>test features1</p>\r\n\r\n<p>test features1</p>', '1458388248_diff_efee.jpg,1458388250_banner.jpg,1458388363_download.jpg');
INSERT INTO `features` VALUES ('7', '6', 'test features4', '<p>test features4</p>\r\n\r\n<p>test features4</p>', '1458388250_banner.jpg,1458388363_download.jpg');

-- ----------------------------
-- Table structure for food
-- ----------------------------
DROP TABLE IF EXISTS `food`;
CREATE TABLE `food` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `text` text,
  `status` varchar(10) DEFAULT NULL,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of food
-- ----------------------------
INSERT INTO `food` VALUES ('1', 'veg', '<p>grfg444rffr</p>', '1', '[\"1451307555_Chrysanthemum.jpg\"]');
INSERT INTO `food` VALUES ('3', 'non-veg', '<p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>\r\n\r\n<p>Donec a erat in enim cursus gravida id non urna. Vivamus feugiat mauris sed sem tristique non eleifend lorem elementum. Integer imperdiet vestibulum leo ut tincidunt. In sagittis diam ut leo convallis vel rutrum mauris ullamcorper. Vestibulum adipiscing erat sit amet justo luctus molestie.</p>\r\n\r\n<p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>\r\n\r\n<p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>\r\n\r\n<div class=\"line\">&nbsp;</div>', '2', '[\"1449669285_Jellyfish.jpg\"]');
INSERT INTO `food` VALUES ('4', 'vhbj', '<p>gvhv</p>', '1', 'null');

-- ----------------------------
-- Table structure for gallery
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `description` text,
  `status` varchar(10) DEFAULT NULL,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('10', 'Test1', null, '1', '1456830384_bngl1.jpg');
INSERT INTO `gallery` VALUES ('11', 'Test', null, '1', '1456827769_comm1.jpg');
INSERT INTO `gallery` VALUES ('12', 'test', null, '1', '1456840814_bngl1.jpg');
INSERT INTO `gallery` VALUES ('13', 'test4', null, '1', '1456840824_bngl1.jpg');
INSERT INTO `gallery` VALUES ('14', 'test5', null, '1', '1456840846_bngl1.jpg');
INSERT INTO `gallery` VALUES ('15', 'test6', null, '1', '1456840882_bngl1.jpg');
INSERT INTO `gallery` VALUES ('16', 'test7', null, '1', '1456840897_bngl1.jpg');

-- ----------------------------
-- Table structure for interviews
-- ----------------------------
DROP TABLE IF EXISTS `interviews`;
CREATE TABLE `interviews` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(11) DEFAULT NULL,
  `profile` text,
  `salary` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of interviews
-- ----------------------------
INSERT INTO `interviews` VALUES ('1', 'test1', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '1', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</p>\r\n\r\n<p>Solving queries of the clients through email, Chat or by telephonic conversation.</p>\r\n\r\n<p>&nbsp;</p>', '15k', '2016-03-08', '01:15 PM');
INSERT INTO `interviews` VALUES ('2', 'test', '<p>Independently managing entire his/her campaigns.</p>', '1', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</p>\r\n\r\n<p>Solving queries of the clients through email, Chat or by telephonic conversation.</p>', '20', null, null);
INSERT INTO `interviews` VALUES ('3', 'test', '<p>Independently managing entire his/her campaigns.</p>', '1', '<p>Independently managing entire his/her campaigns.</p>\r\n\r\n<p>Should be able to communicate with the clients from US, UK, Canada &amp; etc.</p>\r\n\r\n<p>Solving queries of the clients through email, Chat or by telephonic conversation.</p>', '20k', '2016-03-02', '01:00 PM');

-- ----------------------------
-- Table structure for managing_director
-- ----------------------------
DROP TABLE IF EXISTS `managing_director`;
CREATE TABLE `managing_director` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of managing_director
-- ----------------------------
INSERT INTO `managing_director` VALUES ('1', 'test1', '<p><span >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456821287_bngl1.jpg', '1');
INSERT INTO `managing_director` VALUES ('2', 'test2', '<p><span >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456821298_comm1.jpg', '1');
INSERT INTO `managing_director` VALUES ('3', 'test3', '<p><span >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456821332_comm2.jpg', '1');
INSERT INTO `managing_director` VALUES ('4', 'test4', '<p><span >Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></p>', '1456821347_bngl1.jpg', '1');

-- ----------------------------
-- Table structure for mission
-- ----------------------------
DROP TABLE IF EXISTS `mission`;
CREATE TABLE `mission` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mission
-- ----------------------------
INSERT INTO `mission` VALUES ('1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publisfghing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1456823937_img_1.jpg');

-- ----------------------------
-- Table structure for our_profile
-- ----------------------------
DROP TABLE IF EXISTS `our_profile`;
CREATE TABLE `our_profile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of our_profile
-- ----------------------------
INSERT INTO `our_profile` VALUES ('1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only fivsae centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1458977845_Pick-your-demo-bike-here-banner.jpg');

-- ----------------------------
-- Table structure for our_services
-- ----------------------------
DROP TABLE IF EXISTS `our_services`;
CREATE TABLE `our_services` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(10) DEFAULT NULL,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of our_services
-- ----------------------------

-- ----------------------------
-- Table structure for our_vision
-- ----------------------------
DROP TABLE IF EXISTS `our_vision`;
CREATE TABLE `our_vision` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of our_vision
-- ----------------------------
INSERT INTO `our_vision` VALUES ('1', 'Our Vision', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker inxzcluding versions of Lorem Ipsum.</p>', '1456819149_img_1.jpg');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('1', 'Test', '<p><u><strong><img alt=\"smiley\" src=\"http://localhost/portal/theme/assets/global/plugins/ckeditor/plugins/smiley/images/regular_smile.png\" title=\"\" />&nbsp; <span >Test</span></strong></u></p>');

-- ----------------------------
-- Table structure for projects_table
-- ----------------------------
DROP TABLE IF EXISTS `projects_table`;
CREATE TABLE `projects_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` text,
  `images` varchar(255) DEFAULT NULL,
  `available` varchar(255) DEFAULT NULL,
  `addby` varchar(255) DEFAULT NULL,
  `adddate` datetime DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of projects_table
-- ----------------------------
INSERT INTO `projects_table` VALUES ('4', 'Full Proof Helmet', '1', '2bhk', '<p>Full Proof Helmet for riders only.</p>', '1458977646_images_(1).jpg,1458977649_HELMETF_1409141462.jpg', '5', '9', '2016-03-26 13:04:10', '450.00');
INSERT INTO `projects_table` VALUES ('7', 'Half Helmet', '1', 'fgfhg', '<p>Half Helmet</p>', '1458977632_images_(2).jpg,1458977634_images_(4).jpg', '', '9', '2016-03-26 13:03:55', '350.00');
INSERT INTO `projects_table` VALUES ('8', 'Stylish Helmet for youngster', '1', '2bhk', '<p>Stylish Helmet for youngster</p>', '1458977683_LS2-Full-Face-Helmet-FF386-SDL951934607-1-23a92.jpg,1458977690_images_(3).jpg', '', '9', '2016-03-26 13:04:52', '650.00');
INSERT INTO `projects_table` VALUES ('9', 'Bike Diggi1', '2', '', '<p>Bike Diggi1</p>', '1458977713_download_(1).jpg,1458977716_download_(2).jpg', '', '9', '2016-03-26 13:05:17', '4500.00');
INSERT INTO `projects_table` VALUES ('10', 'Bike Diggi2', '2', '', '<p>Bike Diggi2</p>', '1458977743_kynp4445hklkb255tavqq4j0111210_eco-box_182.png,1458977745_images_(7).jpg', '', '9', '2016-03-26 13:05:47', '800.00');

-- ----------------------------
-- Table structure for project_details
-- ----------------------------
DROP TABLE IF EXISTS `project_details`;
CREATE TABLE `project_details` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project_details
-- ----------------------------
INSERT INTO `project_details` VALUES ('1', 'Residential Area');
INSERT INTO `project_details` VALUES ('2', 'Commercial Area');

-- ----------------------------
-- Table structure for project_info
-- ----------------------------
DROP TABLE IF EXISTS `project_info`;
CREATE TABLE `project_info` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `project_dtls` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project_info
-- ----------------------------
INSERT INTO `project_info` VALUES ('1', 'Flats');
INSERT INTO `project_info` VALUES ('2', 'Row Houses');
INSERT INTO `project_info` VALUES ('3', 'Bungalows');

-- ----------------------------
-- Table structure for project_type
-- ----------------------------
DROP TABLE IF EXISTS `project_type`;
CREATE TABLE `project_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of project_type
-- ----------------------------
INSERT INTO `project_type` VALUES ('1', 'Helmet');
INSERT INTO `project_type` VALUES ('2', 'Diggi');

-- ----------------------------
-- Table structure for promoters
-- ----------------------------
DROP TABLE IF EXISTS `promoters`;
CREATE TABLE `promoters` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of promoters
-- ----------------------------
INSERT INTO `promoters` VALUES ('1', 'test1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '1456819363_img_2.jpg', '2');
INSERT INTO `promoters` VALUES ('2', 'test2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '1456819392_bngl1.jpg', '1');
INSERT INTO `promoters` VALUES ('3', 'test3', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '1456819411_img_2.jpg', '1');
INSERT INTO `promoters` VALUES ('4', 'Test4', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '1456819531_img_2.jpg', '1');

-- ----------------------------
-- Table structure for p_details_form
-- ----------------------------
DROP TABLE IF EXISTS `p_details_form`;
CREATE TABLE `p_details_form` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `project_info` int(2) DEFAULT NULL,
  `project_details` int(2) DEFAULT NULL,
  `projects_table` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `addby` varchar(255) DEFAULT NULL,
  `addate` date DEFAULT NULL,
  `available` varchar(255) DEFAULT NULL,
  `title_new` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of p_details_form
-- ----------------------------
INSERT INTO `p_details_form` VALUES ('1', '1', '1', '6', '7bhk', '<p>tested</p>\r\n', '1458198797_user-3.jpg,1458198936_1_dyn.jpg,1458198936_2.jpg,1458198936_2_dyn.jpg', '9', '2016-03-19', '         22                      ', 'title test');
INSERT INTO `p_details_form` VALUES ('6', '1', '2', '4', '1bhk', '<p>&nbsp;this is test</p>\r\n', '1458198829_locked.jpg,1458198829_user-5.jpg,1458198829_user-6.jpg', '9', '2016-03-18', '             10           ', 'shreya_realty');
INSERT INTO `p_details_form` VALUES ('16', '2', '1', '4', '2bhk', '<p>check</p>\r\n', '1458198841_1_dyn.jpg', '9', '2016-03-17', '        43    ', null);
INSERT INTO `p_details_form` VALUES ('18', '1', '1', '8', '3bhk', '<p>cheking test</p>\r\n', '1458198881_user-4.jpg', '9', '2016-03-17', '21 ', null);
INSERT INTO `p_details_form` VALUES ('24', '1', '1', '4', '2.', '<p>fgj</p>\r\n', '1458218013_1_dyn.jpg', '9', '2016-03-18', '     cfgh ', 'test');
INSERT INTO `p_details_form` VALUES ('25', '2', '2', '8', '3bhk', '<p>sfdf</p>\r\n', '1458216584_locked.jpg', '9', '2016-03-17', '   10 ', null);
INSERT INTO `p_details_form` VALUES ('26', '1', '2', '6', '2.1', '<p>sdf</p>\r\n', '1458217268_1_dyn.jpg', '9', '2016-03-19', '15', '');
INSERT INTO `p_details_form` VALUES ('27', '2', '1', '7', 'seg', '<h1>gfgjhkhukj</h1>\r\n', '1458217369_user-5.jpg', '9', '2016-03-17', '  ghgh', null);
INSERT INTO `p_details_form` VALUES ('29', '2', '1', '6', 'test', '<p>terst</p>\r\n', '1458384406_diff_efee.jpg', '9', '2016-03-19', '10', 'test');
INSERT INTO `p_details_form` VALUES ('30', '3', '1', '6', 'test2', '<p>test2</p>\r\n', '1458384438_school-p.jpg', '9', '2016-03-19', '11 Rooms', 'test2');
INSERT INTO `p_details_form` VALUES ('31', '1', '1', '6', 'test3', '<p><span style=\"color:rgb(86, 90, 92); font-family:circular,helvetica neue,helvetica,arial,sans-serif; font-size:14px\">an online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alon</span></p>\r\n\r\n<p><span style=\"color:rgb(86, 90, 92); font-family:circular,helvetica neue,helvetica,arial,sans-serif; font-size:14px\">an online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alon</span></p>\r\n\r\n<p><span style=\"color:rgb(86, 90, 92); font-family:circular,helvetica neue,helvetica,arial,sans-serif; font-size:14px\">an online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alon</span></p>\r\n\r\n<p><span style=\"color:rgb(86, 90, 92); font-family:circular,helvetica neue,helvetica,arial,sans-serif; font-size:14px\">an online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alonan online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alonan online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alonan online aggregator and booking portal for renting various kinds of commercial spaces such as banquets, auditoriums, desks etc and alon</span></p>\r\n', '1458384485_efee_about.jpg', '9', '2016-03-19', '25 Rooms', 'test3');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'https://www.facebook.com', 'https://www.google.co.in/?gfe_rd=cr&ei=Og_PVtnsC7HG8AeFo5-AAg&gws_rd=ssl', 'https://twitter.com/', 'https://www.linkedin.com', 'https://www.youtube.com', '9717541749');

-- ----------------------------
-- Table structure for setting2
-- ----------------------------
DROP TABLE IF EXISTS `setting2`;
CREATE TABLE `setting2` (
  `email_config_id` int(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Host` varchar(150) NOT NULL,
  `Port` varchar(100) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Send_To` text NOT NULL,
  `bcc` varchar(255) NOT NULL,
  `From` varchar(255) NOT NULL,
  `From_Name` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `update_by` varchar(100) NOT NULL,
  `active` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`,`email_config_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting2
-- ----------------------------
INSERT INTO `setting2` VALUES ('1', '1', 'goyalinfotech.pw', '25', 'bnbgroupe@goyalinfotech.pw', 'Aa@1234567', 'naren@goyalinfotech.com', 'suthar.narendra2111@gmail.com', 'bnbgroupe@goyalinfotech.pw', 'BNB Group', 'https://www.facebook.com', 'https://www.linkedin.com', 'https://www.linkedin.com', 'https://www.linkedin.com', 'https://www.youtube.com', '2015-05-28 01:26:36', '', '1');

-- ----------------------------
-- Table structure for sub_category
-- ----------------------------
DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sub_category
-- ----------------------------

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `images` text,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES ('1', 'test', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.d typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '1458977778_images_(5).jpg', '1');
INSERT INTO `testimonials` VALUES ('3', 'Testimonial2', '<p>Testimonial2</p>', '1458977796_LS2-Full-Face-Helmet-FF386-SDL951934607-1-23a92.jpg', '1');

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
INSERT INTO `video` VALUES ('1', 'test', 'https://www.youtube.com/embed/F0epWxZDlOk?list=PL1E54E155E0A2E86F', '1');
INSERT INTO `video` VALUES ('2', 'Test2', 'https://www.youtube.com/embed/F0epWxZDlOk?list=PL1E54E155E0A2E86F', '1');
INSERT INTO `video` VALUES ('3', 'test', 'https://www.youtube.com/embed/F0epWxZDlOk?list=PL1E54E155E0A2E86F', '1');
INSERT INTO `video` VALUES ('4', 'Test', 'https://www.youtube.com/embed/F0epWxZDlOk?list=PL1E54E155E0A2E86F', '0');

-- ----------------------------
-- Table structure for why_us
-- ----------------------------
DROP TABLE IF EXISTS `why_us`;
CREATE TABLE `why_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of why_us
-- ----------------------------
INSERT INTO `why_us` VALUES ('1', '<p>aLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularixszdsed in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n\r\n<div>&nbsp;</div>');
