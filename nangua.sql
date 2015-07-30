/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : nangua

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2015-07-30 16:26:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for detail
-- ----------------------------
DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail` (
  `username` varchar(20) NOT NULL,
  `content` mediumtext NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detail
-- ----------------------------
INSERT INTO `detail` VALUES ('zs', '<p>水电费水电费啊三鼎飞丹砂第三方</p>', '2015-07-30 07:24:46');
INSERT INTO `detail` VALUES ('admin', '<p>阿飞的法定分手费</p>', '2015-07-30 07:28:11');
INSERT INTO `detail` VALUES ('admin', '<p>三大房顶上</p>', '2015-07-30 07:33:05');
INSERT INTO `detail` VALUES ('admin', '<p>三大房顶上</p>', '2015-07-30 07:37:02');
INSERT INTO `detail` VALUES ('admin', '<p>阿斯蒂芬</p>', '2015-07-30 07:37:29');
INSERT INTO `detail` VALUES ('admin', '<p>阿斯顿发送到</p>', '2015-07-30 07:38:01');
INSERT INTO `detail` VALUES ('admin', '<p>阿斯蒂芬</p>', '2015-07-30 07:38:15');
INSERT INTO `detail` VALUES ('admin', '<p>积极<br/></p>', '2015-07-30 07:42:51');
INSERT INTO `detail` VALUES ('admin', '<p>送达方式</p>', '2015-07-30 07:46:09');
INSERT INTO `detail` VALUES ('admin', '<p>打发第三方</p>', '2015-07-30 07:46:14');
INSERT INTO `detail` VALUES ('admin', '<p>dsfaafsdfasfssdfsdfsd<br/></p>', '2015-07-30 07:54:47');
INSERT INTO `detail` VALUES ('admin', '<p>dsafdasfdsa</p>', '2015-07-30 07:57:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('admin', 'admin', '0');
