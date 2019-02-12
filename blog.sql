/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-02-12 19:42:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tp_admin`
-- ----------------------------
DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL COMMENT '管理员名称',
  `password` char(32) DEFAULT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_admin
-- ----------------------------
INSERT INTO `tp_admin` VALUES ('1', 'noo2', '3d2172418ce305c7d16d4b05597c6a59');
INSERT INTO `tp_admin` VALUES ('8', 'admin', 'b0baee9d279d34fa1dfd71aadb908c3f');
INSERT INTO `tp_admin` VALUES ('3', '55', '1d0f0d132d010dfd2f13cbe79ef5e0eb');
INSERT INTO `tp_admin` VALUES ('4', 'admin', '698d51a19d8a121ce581499d7b701668');
INSERT INTO `tp_admin` VALUES ('5', '1', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `tp_admin` VALUES ('6', '23222', 'd41d8cd98f00b204e9800998ecf8427e');
INSERT INTO `tp_admin` VALUES ('7', 'dddd', '77963b7a931377ad4ab5ad6a9cd718aa');

-- ----------------------------
-- Table structure for `tp_article`
-- ----------------------------
DROP TABLE IF EXISTS `tp_article`;
CREATE TABLE `tp_article` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) DEFAULT NULL COMMENT '文章标题',
  `author` varchar(30) DEFAULT NULL COMMENT '文章作者',
  `desc` varchar(255) DEFAULT NULL COMMENT '文章简介',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `content` text COMMENT '文章内容',
  `pic` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `click` int(10) DEFAULT '0' COMMENT '点击数',
  `state` tinyint(1) DEFAULT '0' COMMENT '0：不推荐，1：推荐',
  `time` int(10) DEFAULT NULL COMMENT '发布时间，保存时间戳方便自行转换格式',
  `cateid` mediumint(9) DEFAULT NULL COMMENT '所属栏目',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_article
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_cate`
-- ----------------------------
DROP TABLE IF EXISTS `tp_cate`;
CREATE TABLE `tp_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `catename` varchar(30) DEFAULT NULL COMMENT '栏目名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_cate
-- ----------------------------

-- ----------------------------
-- Table structure for `tp_tags`
-- ----------------------------
DROP TABLE IF EXISTS `tp_tags`;
CREATE TABLE `tp_tags` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `tagname` varchar(30) DEFAULT NULL COMMENT 'tag标签名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_tags
-- ----------------------------
