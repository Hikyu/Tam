/*
Navicat MySQL Data Transfer

Source Server         : tam
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : tam

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-10-14 23:35:29
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for alerthistroy
-- ----------------------------
DROP TABLE IF EXISTS `alerthistroy`;
CREATE TABLE `alerthistroy` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ruleid` int(10) NOT NULL COMMENT '触发的报警规则id，用这个id可以找到具体的的报警规则显示',
  `dateline` bigint(100) NOT NULL COMMENT '历史表加入数据库的时间',
  `ifhandle` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'false' COMMENT '是否已经处理',
  `appid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of alerthistroy
-- ----------------------------
INSERT INTO `alerthistroy` VALUES ('1', '60', '35344', 'false', '33');
INSERT INTO `alerthistroy` VALUES ('2', '60', '435453', 'true', '33');

-- ----------------------------
-- Table structure for alertmsg
-- ----------------------------
DROP TABLE IF EXISTS `alertmsg`;
CREATE TABLE `alertmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `effect_start` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `effect_end` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `alert_level` int(10) DEFAULT NULL,
  `alert_id` int(10) DEFAULT NULL,
  `frequence` int(10) DEFAULT NULL,
  `dateline` bigint(100) NOT NULL,
  `appid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of alertmsg
-- ----------------------------
INSERT INTO `alertmsg` VALUES ('4', 'MCSS', 'Enter rollback mode', '00:00:01', '23:59:59', '903044001', '4', '1', '1444099134734', '213');
INSERT INTO `alertmsg` VALUES ('5', 'IBE', '10.6.151.206891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900070013', '3', '1', '1444099136489', '32');
INSERT INTO `alertmsg` VALUES ('6', 'IBE', '10.6.151.216891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900071013', '3', '1', '1444099137877', '33');
INSERT INTO `alertmsg` VALUES ('7', 'OPENPNR', 'K7fpdl', '00:00:01', '23:59:59', '90014004', '5', '1', '1444099139118', '60');
INSERT INTO `alertmsg` VALUES ('8', '机组API', 'APPCA&&TPACALL FAIL', '00:00:01', '23:59:59', '900300001', '3', '1', '1444099140332', '254');
INSERT INTO `alertmsg` VALUES ('9', '联盟常客', 'SKYTEAMFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110004', '1', '5', '1444099141595', '65');
INSERT INTO `alertmsg` VALUES ('10', '联盟常客', 'CAFFPFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110009', '1', '5', '1444099142855', '70');
INSERT INTO `alertmsg` VALUES ('11', 'MCSS', 'Enter rollback mode', '00:00:01', '23:59:59', '903044001', '4', '1', '1444100450568', '213');
INSERT INTO `alertmsg` VALUES ('12', 'IBE', '10.6.151.206891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900070013', '3', '1', '1444100453100', '32');
INSERT INTO `alertmsg` VALUES ('13', 'IBE', '10.6.151.216891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900071013', '3', '1', '1444100455009', '33');
INSERT INTO `alertmsg` VALUES ('14', 'OPENPNR', 'K7fpdl', '00:00:01', '23:59:59', '90014004', '5', '1', '1444100456593', '60');
INSERT INTO `alertmsg` VALUES ('15', '机组API', 'APPCA&&TPACALL FAIL', '00:00:01', '23:59:59', '900300001', '3', '1', '1444100457934', '254');
INSERT INTO `alertmsg` VALUES ('16', '联盟常客', 'SKYTEAMFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110004', '1', '5', '1444100459214', '65');
INSERT INTO `alertmsg` VALUES ('17', '联盟常客', 'CAFFPFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110009', '1', '5', '1444100460422', '70');
INSERT INTO `alertmsg` VALUES ('18', '联盟常客', 'CAFFPFQTV&&TPACALL FAIL', '00:00:01', '23:59:59', '900110010', '3', '2', '1444100461661', '71');
INSERT INTO `alertmsg` VALUES ('19', '联盟常客', 'STARFFPFQTV&&TIMOUT', '00:00:01', '23:59:59', '900110011', '3', '2', '1444100462990', '72');
INSERT INTO `alertmsg` VALUES ('20', '深航落地有声', '拒绝套接字连接尝试', '00:00:01', '23:59:59', '900100102', '3', '1', '1444100464357', '324');
INSERT INTO `alertmsg` VALUES ('21', '深航落地有声', '队列管理器连接失败', '00:00:01', '23:59:59', '900100103', '3', '1', '1444100465655', '325');
INSERT INTO `alertmsg` VALUES ('22', '联盟常客', 'STARFFPFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110014', '1', '5', '1444100466924', '75');
INSERT INTO `alertmsg` VALUES ('23', '联盟常客', 'STARFFPFQTV&&TPACALL FAIL', '00:00:01', '23:59:59', '900110015', '3', '2', '1444100468130', '76');
INSERT INTO `alertmsg` VALUES ('24', '黑名单', 'CAN_CHECK&&TIMOUT', '00:00:01', '23:59:59', '900120001', '4', '3', '1444100469484', '94');
INSERT INTO `alertmsg` VALUES ('25', 'TUMS', 'DB Connect ERROR', '00:00:01', '23:59:59', '902510005', '3', '1', '1444100470873', '326');
INSERT INTO `alertmsg` VALUES ('26', 'TUMS', 'DB failed', '00:00:01', '23:59:59', '902510006', '3', '1', '1444100472073', '327');
INSERT INTO `alertmsg` VALUES ('27', 'MCSS', 'Enter rollback mode', '00:00:01', '23:59:59', '903044001', '4', '1', '1444100772748', '213');
INSERT INTO `alertmsg` VALUES ('28', 'IBE', '10.6.151.206891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900070013', '3', '1', '1444100774589', '32');
INSERT INTO `alertmsg` VALUES ('29', 'IBE', '10.6.151.216891 IBE CZ connection overfull', '00:00:01', '23:59:59', '900071013', '3', '1', '1444100775952', '33');
INSERT INTO `alertmsg` VALUES ('30', 'OPENPNR', 'K7fpdl', '00:00:01', '23:59:59', '90014004', '5', '1', '1444100777291', '60');
INSERT INTO `alertmsg` VALUES ('31', '机组API', 'APPCA&&TPACALL FAIL', '00:00:01', '23:59:59', '900300001', '3', '1', '1444100778509', '254');
INSERT INTO `alertmsg` VALUES ('32', '联盟常客', 'SKYTEAMFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110004', '1', '5', '1444100779755', '65');
INSERT INTO `alertmsg` VALUES ('33', '联盟常客', 'CAFFPFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110009', '1', '5', '1444100780959', '70');
INSERT INTO `alertmsg` VALUES ('34', '联盟常客', 'CAFFPFQTV&&TPACALL FAIL', '00:00:01', '23:59:59', '900110010', '3', '2', '1444100782176', '71');
INSERT INTO `alertmsg` VALUES ('35', '联盟常客', 'STARFFPFQTV&&TIMOUT', '00:00:01', '23:59:59', '900110011', '3', '2', '1444100783383', '72');
INSERT INTO `alertmsg` VALUES ('36', '深航落地有声', '拒绝套接字连接尝试', '00:00:01', '23:59:59', '900100102', '3', '1', '1444100784595', '324');
INSERT INTO `alertmsg` VALUES ('37', '深航落地有声', '队列管理器连接失败', '00:00:01', '23:59:59', '900100103', '3', '1', '1444100785824', '325');
INSERT INTO `alertmsg` VALUES ('38', '联盟常客', 'STARFFPFQTV&&返回结果错误', '00:00:01', '23:59:59', '900110014', '1', '5', '1444100787415', '75');
INSERT INTO `alertmsg` VALUES ('39', '联盟常客', 'STARFFPFQTV&&TPACALL FAIL', '00:00:01', '23:59:59', '900110015', '3', '2', '1444100788628', '76');
INSERT INTO `alertmsg` VALUES ('40', '黑名单', 'CAN_CHECK&&TIMOUT', '00:00:01', '23:59:59', '900120001', '4', '3', '1444100789832', '94');
INSERT INTO `alertmsg` VALUES ('41', 'TUMS', 'DB Connect ERROR', '00:00:01', '23:59:59', '902510005', '3', '1', '1444100791033', '326');
INSERT INTO `alertmsg` VALUES ('42', 'TUMS', 'DB failed', '00:00:01', '23:59:59', '902510006', '3', '1', '1444100792262', '327');
INSERT INTO `alertmsg` VALUES ('43', '黑名单', 'CAN_CHECK&&返回结果错误', '00:00:01', '23:59:59', '900120004', '1', '5', '1444100793562', '97');
INSERT INTO `alertmsg` VALUES ('44', '黑名单', 'CAN_CHECK&&TPACALL FAIL', '00:00:01', '23:59:59', '900120005', '4', '2', '1444100794800', '98');
INSERT INTO `alertmsg` VALUES ('45', '黑名单', 'NF_CHECK&&TIMOUT', '00:00:01', '23:59:59', '900120006', '4', '3', '1444100796107', '99');
INSERT INTO `alertmsg` VALUES ('46', 'TUMS', 'DB ERROR', '00:00:01', '23:59:59', '902510007', '3', '1', '1444100797337', '328');
INSERT INTO `alertmsg` VALUES ('47', 'TUMS', 'insert data to rawmessage failure', '00:00:01', '23:59:59', '902510008', '3', '1', '1444100798536', '329');
INSERT INTO `alertmsg` VALUES ('48', '黑名单', 'NF_CHECK&&返回结果错误', '00:00:01', '23:59:59', '900120009', '1', '5', '1444100799731', '102');
INSERT INTO `alertmsg` VALUES ('49', '黑名单', 'NF_CHECK&&TPACALL FAIL', '00:00:01', '23:59:59', '900120010', '4', '2', '1444100800968', '103');
INSERT INTO `alertmsg` VALUES ('50', '油量', 'MUFUEL&&TIMOUT', '00:00:01', '23:59:59', '900100001', '4', '3', '1444100802205', '104');
INSERT INTO `alertmsg` VALUES ('51', 'TUMS', 'Cannot get data from protocol stream', '00:00:01', '23:59:59', '902510009', '3', '5', '1444100803414', '330');
INSERT INTO `alertmsg` VALUES ('52', 'TUMS', 'recv RefuseSession from server', '00:00:01', '23:59:59', '902510010', '3', '1', '1444100804757', '331');
INSERT INTO `alertmsg` VALUES ('53', 'OPENPNR', 'SRDF Link ERROR', '00:00:01', '23:59:59', '90014010', '2', '1', '1444100805987', '133');
INSERT INTO `alertmsg` VALUES ('54', '油量', 'MUFUEL&&TPACALL FAIL', '00:00:01', '23:59:59', '900100006', '3', '3', '1444100807176', '108');
INSERT INTO `alertmsg` VALUES ('55', 'TUMS', 'The socket close', '00:00:01', '23:59:59', '902510011', '3', '5', '1444100808371', '332');
INSERT INTO `alertmsg` VALUES ('56', 'OPENPNR', 'Read RI Key Mismatch', '00:00:01', '23:59:59', '90014011', '2', '1', '1444100809641', '134');
INSERT INTO `alertmsg` VALUES ('57', 'TUMS', '数据库数据数量超标&&history_stat', '00:00:01', '23:59:59', '902510013', '3', '1', '1444100810881', '354');
INSERT INTO `alertmsg` VALUES ('58', '油量', 'SCFUEL&&返回结果错误', '00:00:01', '23:59:59', '900100009', '2', '5', '1444100812077', '112');
INSERT INTO `alertmsg` VALUES ('59', '油量', 'SCFUEL&&TPACALL FAIL', '00:00:01', '23:59:59', '900100010', '4', '3', '1444100813304', '113');
INSERT INTO `alertmsg` VALUES ('60', '油量', 'FUEL&&TIMOUT', '00:00:01', '23:59:59', '900100011', '4', '3', '1444100814531', '114');
INSERT INTO `alertmsg` VALUES ('61', 'USASMonitor', 'OTTY自动HOLD', '00:00:01', '23:59:59', '1111111111', '5', '1', '1444100815793', '351');
INSERT INTO `alertmsg` VALUES ('62', 'TAMServer', '连接已经断开&&10.6.183.205&&USASMonitor', '00:00:01', '23:59:59', '1900000013', '2', '1', '1444100817015', '352');
INSERT INTO `alertmsg` VALUES ('63', '油量', 'FUEL&&返回结果错误', '00:00:01', '23:59:59', '900100014', '2', '5', '1444100818247', '117');
INSERT INTO `alertmsg` VALUES ('64', '油量', 'FUEL&&TPACALL FAIL', '00:00:01', '23:59:59', '900100015', '4', '3', '1444100819462', '118');
INSERT INTO `alertmsg` VALUES ('65', 'TAMAgent', 'is not alive now', '00:00:01', '23:59:59', '0', '1', '1', '1444100820662', '120');
INSERT INTO `alertmsg` VALUES ('66', 'CUSS', 'service error!&&-13007', '00:00:01', '23:59:59', '900200001', '4', '3', '1444100821888', '121');
INSERT INTO `alertmsg` VALUES ('67', 'OPENPNR', 'Read CR Key Mismatch', '00:00:01', '23:59:59', '90014012', '2', '1', '1444100823347', '135');
INSERT INTO `alertmsg` VALUES ('68', 'OPENPNR', 'KUKNRD ERROR', '00:00:01', '23:59:59', '90014013', '2', '1', '1444100824560', '136');
INSERT INTO `alertmsg` VALUES ('69', 'OPENPNR', 'KUNFRD:1 ERROR', '00:00:01', '23:59:59', '90014014', '2', '1', '1444100825816', '137');
INSERT INTO `alertmsg` VALUES ('70', 'OPENPNR', 'KUNFSH ERROR', '00:00:01', '23:59:59', '90014015', '2', '1', '1444100827050', '138');
INSERT INTO `alertmsg` VALUES ('71', 'OPENPNR', 'KUHHMM ERROR', '00:00:01', '23:59:59', '90014016', '2', '1', '1444100828264', '139');
INSERT INTO `alertmsg` VALUES ('72', '机组API', 'APILOAD&&返回结果错误', '00:00:01', '23:59:59', '900300008', '3', '1', '1444100829460', '268');
INSERT INTO `alertmsg` VALUES ('73', '机组API', 'APILOAD&&TIMEOUT', '00:00:01', '23:59:59', '900300009', '3', '1', '1444100830650', '269');
INSERT INTO `alertmsg` VALUES ('74', 'TUMS', '数据库数据数量超标&&表', '00:00:01', '23:59:59', '902510002', '3', '1', '1444100831955', '272');
INSERT INTO `alertmsg` VALUES ('75', 'TUMS', '数据库连接失败', '00:00:01', '23:59:59', '902510003', '4', '1', '1444100833873', '273');
INSERT INTO `alertmsg` VALUES ('76', 'USASTRAN', 'RTKT&&TPCALL USASTRAN FAIL', '00:00:01', '23:59:59', '903232001', '2', '20', '1444100835338', '283');
INSERT INTO `alertmsg` VALUES ('77', 'USASTRAN', 'FVE&&TPCALL USASTRAN FAIL', '00:00:01', '23:59:59', '903232002', '2', '2', '1444100836548', '284');
INSERT INTO `alertmsg` VALUES ('78', 'USASTRAN', 'FTKT&&TPCALL USASTRAN FAIL', '00:00:01', '23:59:59', '903232003', '2', '2', '1444100838543', '285');
INSERT INTO `alertmsg` VALUES ('79', 'USASTRAN', 'TPR&&TPCALL USASTRAN FAIL', '00:00:01', '23:59:59', '903232004', '2', '20', '1444100839760', '286');
INSERT INTO `alertmsg` VALUES ('80', 'CUSS', 'timeout&&10.6.151.30', '00:00:01', '23:59:59', '900200003', '3', '3', '1444100840978', '401');
INSERT INTO `alertmsg` VALUES ('81', 'TAMServer', '这是一条测试报警', '00:00:01', '23:59:59', '1900000012', '3', '1', '1444100842194', '323');
INSERT INTO `alertmsg` VALUES ('82', '深航落地有声', '队列深度大于阈值', '00:00:01', '23:59:59', '900100101', '3', '1', '1444100843380', '322');
INSERT INTO `alertmsg` VALUES ('83', 'NSS', 'PNRP处理失败', '00:00:01', '7:00:00', '900334001', '4', '1', '1444100844633', '355');
INSERT INTO `alertmsg` VALUES ('84', 'OPENPNR', 'HAS1&&Can not access SITA', '00:00:01', '23:59:59', '900070033', '4', '2', '1444100845828', '362');
INSERT INTO `alertmsg` VALUES ('85', 'OPENET', '以下客票RTKT提不到，请检查结算信息', '00:00:01', '23:59:59', '901400001', '3', '1', '1444100847168', '396');
INSERT INTO `alertmsg` VALUES ('86', 'IBE', 'access SITA', '00:00:01', '23:59:59', '900070014', '3', '2', '1444100848364', '364');
INSERT INTO `alertmsg` VALUES ('87', 'DS.ETL', 'Error&&运行主机一线值班&&pnr', '00:00:01', '23:59:59', '910000004', '3', '1', '1444100849586', '402');

-- ----------------------------
-- Table structure for app
-- ----------------------------
DROP TABLE IF EXISTS `app`;
CREATE TABLE `app` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `appname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `applevel` int(10) DEFAULT '1',
  `appmsg` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '应用概述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of app
-- ----------------------------
INSERT INTO `app` VALUES ('33', 'app', '1', 'fdhklsf');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `jobnumber` int(10) NOT NULL COMMENT '工号',
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `appid` int(10) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('151', '21', '小王', '13100000000', '13100000000@sina.cn', '33');
INSERT INTO `contact` VALUES ('152', '11', '小张', '18222222222', '18222222222@sina.cn', '33');
INSERT INTO `contact` VALUES ('153', '10', '小花', '18333333333', '18333333333@sina.cn', '33');
INSERT INTO `contact` VALUES ('154', '15', '小石', '18777777777', '18777777777@sina.cn', '33');
INSERT INTO `contact` VALUES ('155', '17', '小黑', '13555555555', '13555555555@sina.cn', '33');

-- ----------------------------
-- Table structure for contactrule
-- ----------------------------
DROP TABLE IF EXISTS `contactrule`;
CREATE TABLE `contactrule` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ruleid` int(10) NOT NULL,
  `contactjobnumber` int(10) NOT NULL,
  `email` varchar(10) DEFAULT 'false',
  `phone` varchar(10) DEFAULT 'false',
  `msg` varchar(10) DEFAULT 'false',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contactrule
-- ----------------------------
INSERT INTO `contactrule` VALUES ('62', '48', '34', 'false', 'true', 'true');
INSERT INTO `contactrule` VALUES ('65', '51', '43', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('66', '51', '34', 'true', 'true', 'false');
INSERT INTO `contactrule` VALUES ('67', '52', '434', 'false', 'true', 'true');
INSERT INTO `contactrule` VALUES ('68', '52', '34', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('69', '52', '43', 'false', 'false', 'false');
INSERT INTO `contactrule` VALUES ('70', '53', '43', 'false', 'true', 'false');
INSERT INTO `contactrule` VALUES ('71', '54', '43', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('72', '54', '434', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('73', '55', '34', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('78', '50', '34', 'false', 'true', 'true');
INSERT INTO `contactrule` VALUES ('80', '47', '34', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('81', '58', '34', 'false', 'true', 'true');
INSERT INTO `contactrule` VALUES ('82', '49', '34', 'true', 'true', 'true');
INSERT INTO `contactrule` VALUES ('88', '63', '11', 'true', 'true', 'true');
INSERT INTO `contactrule` VALUES ('89', '64', '15', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('90', '64', '10', 'false', 'false', 'true');
INSERT INTO `contactrule` VALUES ('91', '65', '21', 'false', 'true', 'true');

-- ----------------------------
-- Table structure for keywords
-- ----------------------------
DROP TABLE IF EXISTS `keywords`;
CREATE TABLE `keywords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '关键字内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of keywords
-- ----------------------------
INSERT INTO `keywords` VALUES ('1', 'Enter rollback mode');
INSERT INTO `keywords` VALUES ('2', 'K7fpdl');
INSERT INTO `keywords` VALUES ('3', '返回结果错误');
INSERT INTO `keywords` VALUES ('4', 'CAFFPFQTV');
INSERT INTO `keywords` VALUES ('5', 'SKYTEAMFQTV');
INSERT INTO `keywords` VALUES ('6', 'TPACALL FAIL');
INSERT INTO `keywords` VALUES ('7', '拒绝套接字连接尝试');
INSERT INTO `keywords` VALUES ('8', '队列管理器连接失败');
INSERT INTO `keywords` VALUES ('9', 'CAN_CHECK');
INSERT INTO `keywords` VALUES ('10', 'TIMOUT');
INSERT INTO `keywords` VALUES ('11', 'DB Connect ERROR');
INSERT INTO `keywords` VALUES ('12', 'DB failed');
INSERT INTO `keywords` VALUES ('13', 'DB ERROR');
INSERT INTO `keywords` VALUES ('14', 'insert data to rawmessage failure');
INSERT INTO `keywords` VALUES ('15', 'MUFUEL');
INSERT INTO `keywords` VALUES ('16', 'Cannot get data from protocol stream');
INSERT INTO `keywords` VALUES ('17', 'recv RefuseSession from server');
INSERT INTO `keywords` VALUES ('18', 'SRDF Link ERROR');
INSERT INTO `keywords` VALUES ('19', 'The socket close');
INSERT INTO `keywords` VALUES ('20', 'Read RI Key Mismatch');
INSERT INTO `keywords` VALUES ('21', '数据库数据数量超标');
INSERT INTO `keywords` VALUES ('22', 'history_stat');
INSERT INTO `keywords` VALUES ('23', 'OTTY自动HOLD');
INSERT INTO `keywords` VALUES ('24', 'USASMonitor');
INSERT INTO `keywords` VALUES ('25', '连接已经断开');
INSERT INTO `keywords` VALUES ('26', 'is not alive now');
INSERT INTO `keywords` VALUES ('27', 'Read CR Key Mismatch');
INSERT INTO `keywords` VALUES ('28', 'KUKNRD ERROR');
INSERT INTO `keywords` VALUES ('29', 'KUNFSH ERROR');
INSERT INTO `keywords` VALUES ('30', 'APILOAD');
INSERT INTO `keywords` VALUES ('31', 'TPCALL USASTRAN FAIL');
INSERT INTO `keywords` VALUES ('32', 'RTKT');
INSERT INTO `keywords` VALUES ('33', '队列深度大于阈值');
INSERT INTO `keywords` VALUES ('34', 'PNRP处理失败');
INSERT INTO `keywords` VALUES ('35', '以下客票RTKT提不到，请检查结算信息');
INSERT INTO `keywords` VALUES ('36', 'access SITA');
INSERT INTO `keywords` VALUES ('37', 'ASI_AUTHORITY_ERR');
INSERT INTO `keywords` VALUES ('38', '状态为Bad');
INSERT INTO `keywords` VALUES ('39', 'BJ电子客票连接监控');
INSERT INTO `keywords` VALUES ('40', 'sessiontom');
INSERT INTO `keywords` VALUES ('41', 'ietuacconstructor');
INSERT INTO `keywords` VALUES ('42', 'cascadingtom');
INSERT INTO `keywords` VALUES ('43', 'cascading');
INSERT INTO `keywords` VALUES ('44', 'AVE_ERR错误一分钟超过');
INSERT INTO `keywords` VALUES ('45', 'NEW CORE DUMP');
INSERT INTO `keywords` VALUES ('46', 'ETERM ERROR:连接中断，需要重新连接ETERM');
INSERT INTO `keywords` VALUES ('47', '表空间&&使用量超过阈值');
INSERT INTO `keywords` VALUES ('48', 'tnsping 未能够ping通');
INSERT INTO `keywords` VALUES ('49', 'LOG SPACE NOT ENOUGH');
INSERT INTO `keywords` VALUES ('50', 'PING FAILED');
INSERT INTO `keywords` VALUES ('51', '历史目录文件列表为null');
INSERT INTO `keywords` VALUES ('52', '应用TPS变化异常');
INSERT INTO `keywords` VALUES ('53', '检测到非TAM触发的节点隔离操作&&R1');
INSERT INTO `keywords` VALUES ('54', '报文发送量太大');
INSERT INTO `keywords` VALUES ('55', 'IDLE不均衡');
INSERT INTO `keywords` VALUES ('56', '新产生core文件');
INSERT INTO `keywords` VALUES ('57', 'ULOG新出现WARN/ERR');

-- ----------------------------
-- Table structure for rule
-- ----------------------------
DROP TABLE IF EXISTS `rule`;
CREATE TABLE `rule` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `appid` int(10) NOT NULL COMMENT '报警应用id',
  `period` int(10) DEFAULT NULL COMMENT '报警周期',
  `frequency` int(10) DEFAULT NULL COMMENT '报警次数',
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '报警关键字',
  `errorid` int(10) DEFAULT NULL COMMENT '错误id',
  `last` int(10) DEFAULT NULL COMMENT '持续时间',
  `interval` int(10) NOT NULL DEFAULT '10' COMMENT '报警间隔',
  `level` int(10) NOT NULL DEFAULT '1' COMMENT '报警级别',
  `prompt` varchar(500) CHARACTER SET utf8 DEFAULT NULL COMMENT '提示信息',
  `valid` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '是否生效',
  `start` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `end` varchar(255) CHARACTER SET utf8 DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rule
-- ----------------------------
INSERT INTO `rule` VALUES ('47', '1', '4', '4', 'CAFFPFQTV', '4', '4', '4', '4', '', 'false', '2015-10-06', '2015-10-13');
INSERT INTO `rule` VALUES ('48', '1', '6', '6', 'CAFFPFQTV', '6', '6', '6', '1', '', 'true', '2015-10-01', '2015-10-21');
INSERT INTO `rule` VALUES ('49', '1', '50', '5', 'K7fpdl&amp;&amp;返回结果错误&amp;&amp;SKYTEAMFQTV', '5', '5', '1', '2', '方法飞洒', 'true', '2015-10-01', '2015-10-31');
INSERT INTO `rule` VALUES ('50', '1', '90', '4', 'K7fpdl&amp;&amp;CAFFPFQTV', '44', '2', '1', '3', '', 'true', '', '');
INSERT INTO `rule` VALUES ('51', '1', '45', '5', 'Enter rollback mode', '5', '5', '1', '3', '', 'false', '', '');
INSERT INTO `rule` VALUES ('52', '1', '56', '4', 'K7fpdl', '3', '1', '1', '1', '', 'false', '', '');
INSERT INTO `rule` VALUES ('53', '1', '56', '6', 'K7fpdl', '6', '6', '6', '1', '', 'false', '', '');
INSERT INTO `rule` VALUES ('54', '1', '43', '4', 'K7fpdl', '4', '5', '1', '5', '', 'false', '', '');
INSERT INTO `rule` VALUES ('55', '1', '56', '6', 'K7fpdl', '5', '6', '6', '1', '', 'false', '', '');
INSERT INTO `rule` VALUES ('56', '2', '56', '7', 'K7fpdl', '6', '6', '10', '1', 'fhf', 'true', '', '');
INSERT INTO `rule` VALUES ('58', '1', '56', '6', 'CAFFPFQTV', '6', '6', '6', '4', '', 'false', '', '');
INSERT INTO `rule` VALUES ('60', '33', '90', '2', '返回结果错误', '445675', '5', '1', '5', '', 'false', '', '');
INSERT INTO `rule` VALUES ('61', '33', '67', '5', '返回结果错误', '56', '6', '5', '2', '', 'true', '2015-10-01', '2015-10-22');
INSERT INTO `rule` VALUES ('62', '33', '90', '5', 'K7fpdl&amp;&amp;返回结果错误', '2245', '7', '5', '3', '', 'true', '', '');
INSERT INTO `rule` VALUES ('63', '33', '120', '4', 'K7fpdl', '343', '5', '5', '2', '', 'false', '2015-10-01', '2015-11-20');
INSERT INTO `rule` VALUES ('64', '33', '240', '20', '返回结果错误', '334', '5', '3', '1', '', 'false', '2015-10-16', '2015-12-25');
INSERT INTO `rule` VALUES ('65', '33', '360', '6', '连接已经断开', '221', '10', '2', '5', '', 'true', '2015-10-09', '2015-12-31');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '用户姓名',
  `password` varchar(255) NOT NULL COMMENT '用户密码',
  `appid` int(10) DEFAULT NULL,
  `role` int(10) NOT NULL DEFAULT '0' COMMENT '用户角色\r\n超级管理员 1\r\n普通用户 2',
  `sex` varchar(255) CHARACTER SET utf8 DEFAULT '男',
  `age` int(11) DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='用户表，表中为登陆tam系统的用户';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'cauc', '123', '32', '2', '男', '60', '13111111111');
INSERT INTO `user` VALUES ('3', 'kai', '123', null, '1', '男', '50', '132222222222');
INSERT INTO `user` VALUES ('4', 'yu', '123', '33', '2', '男', '0', '1233213213');
