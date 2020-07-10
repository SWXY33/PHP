/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : yii2plus

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-12-24 22:46:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('普通管理员', '4', '1479267383');
INSERT INTO `auth_assignment` VALUES ('普通管理员', '6', '1513156793');
INSERT INTO `auth_assignment` VALUES ('超级权限', '1', '1513762186');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '１', '1479267383');
INSERT INTO `auth_assignment` VALUES ('超级管理员', '６', '1513156793');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1467628934', '1467628934');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1467628930', '1467628930');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1467628931', '1467628931');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1467628932', '1467628932');
INSERT INTO `auth_item` VALUES ('/blog/index', '2', null, null, null, '1513156075', '1513156075');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/index/welcome', '2', null, null, null, '1467885038', '1467885038');
INSERT INTO `auth_item` VALUES ('/menuz/index', '2', null, null, null, '1513736542', '1513736542');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/*', '2', null, null, null, '1513760300', '1513760300');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/assign', '2', null, null, null, '1513760300', '1513760300');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/index', '2', null, null, null, '1513760291', '1513760291');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/search', '2', null, null, null, '1513760300', '1513760300');
INSERT INTO `auth_item` VALUES ('/rbac/assignment/view', '2', null, null, null, '1513760300', '1513760300');
INSERT INTO `auth_item` VALUES ('/rbac/default/index', '2', null, null, null, '1513865572', '1513865572');
INSERT INTO `auth_item` VALUES ('/rbac/menu/index', '2', null, null, null, '1513738648', '1513738648');
INSERT INTO `auth_item` VALUES ('/rbac/permission/*', '2', null, null, null, '1513784839', '1513784839');
INSERT INTO `auth_item` VALUES ('/rbac/permission/assign', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/create', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/delete', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/index', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/search', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/update', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/permission/view', '2', null, null, null, '1513784838', '1513784838');
INSERT INTO `auth_item` VALUES ('/rbac/role/*', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/assign', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/create', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/delete', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/index', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/search', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/update', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/role/view', '2', null, null, null, '1513764182', '1513764182');
INSERT INTO `auth_item` VALUES ('/rbac/route/*', '2', null, null, null, '1513862265', '1513862265');
INSERT INTO `auth_item` VALUES ('/rbac/route/assign', '2', null, null, null, '1513862265', '1513862265');
INSERT INTO `auth_item` VALUES ('/rbac/route/create', '2', null, null, null, '1513862265', '1513862265');
INSERT INTO `auth_item` VALUES ('/rbac/route/index', '2', null, null, null, '1513862265', '1513862265');
INSERT INTO `auth_item` VALUES ('/rbac/route/search', '2', null, null, null, '1513862265', '1513862265');
INSERT INTO `auth_item` VALUES ('/rbac/rule/*', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/rbac/rule/create', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/rbac/rule/delete', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/rbac/rule/index', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/rbac/rule/update', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/rbac/rule/view', '2', null, null, null, '1513754982', '1513754982');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1467628933', '1467628933');
INSERT INTO `auth_item` VALUES ('/tools/*', '2', null, null, null, '1513651796', '1513651796');
INSERT INTO `auth_item` VALUES ('/tools/index', '2', null, null, null, '1513753456', '1513753456');
INSERT INTO `auth_item` VALUES ('/tools/upload', '2', null, null, null, '1513651598', '1513651598');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('/user/list', '2', null, null, null, '1467684059', '1467684059');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1467626433', '1467626433');
INSERT INTO `auth_item` VALUES ('普通管理员', '1', '普通管理员', null, null, '1467626553', '1513782576');
INSERT INTO `auth_item` VALUES ('用户管理', '2', '用户管理', null, null, '1467626475', '1467626475');
INSERT INTO `auth_item` VALUES ('超级权限', '2', '超级权限拥有最高级系统权限', null, null, '1467628984', '1513156401');
INSERT INTO `auth_item` VALUES ('超级管理员', '1', '超级管理员拥有最高级别系统权限', null, null, '1467629059', '1467629059');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('超级权限', '/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/blog/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/index/welcome');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/menuz/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/assignment/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/assignment/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/assignment/search');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/assignment/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/menu/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/search');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/permission/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/search');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/role/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/route/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/route/assign');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/route/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/route/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/route/search');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/rbac/rule/view');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/site/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/site/error');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/site/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/site/login');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/tools/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/tools/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/tools/upload');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/*');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/*');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/create');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/create');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/delete');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/delete');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/index');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/index');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/list');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/list');
INSERT INTO `auth_item_child` VALUES ('用户管理', '/user/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/update');
INSERT INTO `auth_item_child` VALUES ('超级权限', '/user/view');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '用户管理');
INSERT INTO `auth_item_child` VALUES ('超级管理员', '超级权限');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('编辑文章2', 'O:30:\"backend\\components\\ArticleRule\":3:{s:4:\"name\";s:13:\"编辑文章2\";s:9:\"createdAt\";i:1513759001;s:9:\"updatedAt\";i:1513759001;}', '1513759001', '1513759001');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL,
  `ip` varchar(64) DEFAULT NULL,
  `data` varchar(64) DEFAULT NULL,
  `create_time` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('1', 'lzkong1029', '127.0.0.1', '', '1460439851');
INSERT INTO `log` VALUES ('2', 'lzkong1029', '127.0.0.1', '', '1460441344');
INSERT INTO `log` VALUES ('3', 'test', '127.0.0.1', '', '1460441372');
INSERT INTO `log` VALUES ('4', 'lzkong1029', '127.0.0.1', '', '1460441448');
INSERT INTO `log` VALUES ('5', 'lzkong1029', '127.0.0.1', '', '1460443092');
INSERT INTO `log` VALUES ('6', 'test', '127.0.0.1', '', '1460510935');
INSERT INTO `log` VALUES ('7', 'lzkong1029', '127.0.0.1', '', '1460511022');
INSERT INTO `log` VALUES ('8', 'lzkong1029', '127.0.0.1', '', '1460511099');
INSERT INTO `log` VALUES ('9', 'test', '127.0.0.1', '', '1460511126');
INSERT INTO `log` VALUES ('10', 'lzkong1029', '127.0.0.1', '', '1460518525');
INSERT INTO `log` VALUES ('11', 'test', '127.0.0.1', '', '1460529644');
INSERT INTO `log` VALUES ('12', 'lzkong1029', '127.0.0.1', '', '1460683222');
INSERT INTO `log` VALUES ('13', 'test', '127.0.0.1', '', '1460687319');
INSERT INTO `log` VALUES ('14', 'lzkong1029', '127.0.0.1', '', '1460687331');
INSERT INTO `log` VALUES ('15', 'admin', '127.0.0.1', '', '1460687467');
INSERT INTO `log` VALUES ('16', 'admin', '127.0.0.1', '', '1460713859');
INSERT INTO `log` VALUES ('17', 'admin', '127.0.0.1', '', '1466130336');
INSERT INTO `log` VALUES ('18', 'test', '127.0.0.1', '', '1467701285');
INSERT INTO `log` VALUES ('19', 'admin', '127.0.0.1', '', '1467704379');
INSERT INTO `log` VALUES ('20', 'admin', '127.0.0.1', '', '1467711872');
INSERT INTO `log` VALUES ('21', 'test', '127.0.0.1', '', '1467711883');
INSERT INTO `log` VALUES ('22', 'admin', '127.0.0.1', '', '1467712267');
INSERT INTO `log` VALUES ('23', 'test', '127.0.0.1', '', '1467799040');
INSERT INTO `log` VALUES ('24', 'admin', '127.0.0.1', '', '1467806743');
INSERT INTO `log` VALUES ('25', 'admin', '127.0.0.1', '', '1467874541');
INSERT INTO `log` VALUES ('26', 'test', '127.0.0.1', '', '1467885125');
INSERT INTO `log` VALUES ('27', 'admin', '127.0.0.1', '', '1467888107');
INSERT INTO `log` VALUES ('28', 'admin', '127.0.0.1', '', '1479280452');
INSERT INTO `log` VALUES ('29', 'admin', '127.0.0.1', '', '1479280483');
INSERT INTO `log` VALUES ('30', 'admin', '127.0.0.1', '', '1513155304');
INSERT INTO `log` VALUES ('31', 'admin', '127.0.0.1', '', '1513155974');
INSERT INTO `log` VALUES ('32', 'zpm', '127.0.0.1', '', '1513156807');
INSERT INTO `log` VALUES ('33', 'admin', '127.0.0.1', '', '1513157277');
INSERT INTO `log` VALUES ('34', 'admin', '127.0.0.1', '', '1513648194');
INSERT INTO `log` VALUES ('35', 'admin', '127.0.0.1', '', '1513650285');
INSERT INTO `log` VALUES ('36', 'admin', '127.0.0.1', '', '1513665577');
INSERT INTO `log` VALUES ('37', 'admin', '127.0.0.1', '', '1513730090');
INSERT INTO `log` VALUES ('38', 'admin', '127.0.0.1', '', '1513733870');
INSERT INTO `log` VALUES ('39', 'admin', '127.0.0.1', '', '1513761349');
INSERT INTO `log` VALUES ('40', 'admin', '127.0.0.1', '', '1513761752');
INSERT INTO `log` VALUES ('41', 'admin', '127.0.0.1', '', '1513761881');
INSERT INTO `log` VALUES ('42', 'zpm', '127.0.0.1', '', '1513761932');
INSERT INTO `log` VALUES ('43', 'zpm', '127.0.0.1', '', '1513761992');
INSERT INTO `log` VALUES ('44', 'admin', '127.0.0.1', '', '1513762330');
INSERT INTO `log` VALUES ('45', 'testUser', '127.0.0.1', '', '1513763953');
INSERT INTO `log` VALUES ('46', 'admin', '127.0.0.1', '', '1513774394');
INSERT INTO `log` VALUES ('47', 'zpm', '127.0.0.1', '', '1513940268');
INSERT INTO `log` VALUES ('48', 'admin', '127.0.0.1', '', '1513941665');
INSERT INTO `log` VALUES ('49', 'admin', '127.0.0.1', '', '1513954384');
INSERT INTO `log` VALUES ('50', 'admin', '127.0.0.1', '', '1513958021');
INSERT INTO `log` VALUES ('51', 'admin', '127.0.0.1', '', '1513992136');
INSERT INTO `log` VALUES ('52', 'admin', '127.0.0.1', '', '1514002183');
INSERT INTO `log` VALUES ('53', 'admin', '127.0.0.1', '', '1514082749');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '用户中心', null, '', null, 0x7B2269636F6E223A202266612066612D75736572227D, 'fa-user');
INSERT INTO `menu` VALUES ('2', '权限控制', null, '', '1', 0x7B2269636F6E223A202266612066612D6B6579227D, 'fa-key');
INSERT INTO `menu` VALUES ('3', '路由列表', '2', '/rbac/route/index', '2', null, 'fa-bars');
INSERT INTO `menu` VALUES ('4', '菜单管理', '2', '/rbac/menu/index', '7', null, 'fa-th-list');
INSERT INTO `menu` VALUES ('5', '权限管理', '2', '/rbac/permission/index', '3', null, 'fa-lock');
INSERT INTO `menu` VALUES ('6', '角色管理', '2', '/rbac/role/index', '4', null, 'fa-group');
INSERT INTO `menu` VALUES ('7', '分配权限', '2', '/rbac/assignment/index', '5', null, 'fa-check-square');
INSERT INTO `menu` VALUES ('9', '规则管理', '2', '/rbac/rule/index', '6', null, 'fa-sitemap');
INSERT INTO `menu` VALUES ('10', '新增用户', '11', '/user/create', '2', null, 'fa-plus');
INSERT INTO `menu` VALUES ('11', '用户管理', '1', '/user/list', '8', 0x7B2269636F6E223A202266612066612D67726F7570227D, 'fa-users');
INSERT INTO `menu` VALUES ('12', '用户列表', '11', '/user/list', '1', null, 'fa-list');
INSERT INTO `menu` VALUES ('13', '工具', null, '', null, 0x7B2269636F6E223A202266612066612D75736572227D, 'fa-wrench');
INSERT INTO `menu` VALUES ('14', '上传小部件', '13', '/tools/upload', '1', null, 'fa-upload');
INSERT INTO `menu` VALUES ('15', '新菜单管理', '13', '/rbac/menu/index', '5', null, 'fa-automobile');
INSERT INTO `menu` VALUES ('16', '分配权限', '13', '/rbac/assignment/index', '3', null, 'fa-anchor');
INSERT INTO `menu` VALUES ('17', '角色管理', '13', '/rbac/role/index', '4', null, 'fa-anchor');
INSERT INTO `menu` VALUES ('18', '权限管理', '13', '/rbac/permission/index', '6', null, 'fa-anchor');
INSERT INTO `menu` VALUES ('19', '路由列表', '13', '/rbac/route/index', '2', null, 'fa-key');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1467622624');
INSERT INTO `migration` VALUES ('m140602_111327_create_menu_table', '1467622628');
INSERT INTO `migration` VALUES ('m160312_050000_create_user', '1467622628');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'C5f5K1Kg8tL-IutYAom4-s7RMh_xMk_l', '$2y$13$zUhKPW6Y69gn.DDWjSI.kOp9OXZWSuMDTq5JRZvw6yK9dr2QK43qu', null, '272067517@qq.com', '10', '1467626063', '1467626063');
INSERT INTO `user` VALUES ('6', 'zpm', 'Qij1R83ee6RiXvaSW4qOWcZTkRLNmMTn', '$2y$13$avMKe4Wri1noedkx7BMIxOta5VJqQGPjB7TpqhfVJZOLy93v0BYS2', null, 'zzz@qq.com', '10', '1513156793', '0');
