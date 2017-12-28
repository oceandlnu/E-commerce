CREATE DATABASE IF NOT EXISTS `shop`;
USE `shop`;
-- 管理员表
DROP TABLE IF EXISTS `shop_admin`;
CREATE TABLE `shop_admin` (
  `id`       TINYINT UNSIGNED AUTO_INCREMENT KEY,
  `username` VARCHAR(20) NOT NULL UNIQUE,
  `password` VARCHAR(32) NOT NULL,
  `email`    VARCHAR(50) NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
-- 分类表
DROP TABLE IF EXISTS `shop_cate`;
CREATE TABLE `shop_cate` (
  `id`    SMALLINT UNSIGNED AUTO_INCREMENT KEY,
  `cName` VARCHAR(50) UNIQUE
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
-- 商品表
DROP TABLE IF EXISTS `shop_pro`;
CREATE TABLE `shop_pro` (
  `id`      INT UNSIGNED AUTO_INCREMENT KEY,
  `pName`   VARCHAR(50)       NOT NULL UNIQUE,
  `pSn`     VARCHAR(50)       NOT NULL,
  `pNum`    INT UNSIGNED DEFAULT 1,
  `mPrice`  DECIMAL(10, 2)    NOT NULL,
  `iPrice`  DECIMAL(10, 2)    NOT NULL,
  `pDesc`   TEXT,
  `pubTime` INT UNSIGNED      NOT NULL,
  `isShow`  TINYINT(1)   DEFAULT 1,
  `isHot`   TINYINT(1)   DEFAULT 0,
  `cId`     SMALLINT UNSIGNED NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
-- 用户表，activeFlag需要发送激活邮件
DROP TABLE IF EXISTS `shop_user`;
CREATE TABLE `shop_user` (
  `id`         INT UNSIGNED                   AUTO_INCREMENT KEY,
  `username`   VARCHAR(20)           NOT NULL UNIQUE,
  `password`   CHAR(32)              NOT NULL,
  `email`      VARCHAR(30)           NOT NULL,
  `sex`        ENUM ("男", "女", "保密") NOT NULL DEFAULT "保密",
  `face`       VARCHAR(50)           NOT NULL,
  `regTime`    INT UNSIGNED          NOT NULL,
  `activeFlag` TINYINT(1)                     DEFAULT 0
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;
-- 相册表
DROP TABLE IF EXISTS `shop_album`;
CREATE TABLE `shop_album` (
  `id`        INT UNSIGNED AUTO_INCREMENT KEY,
  `pid`       INT UNSIGNED NOT NULL,
  `albumPath` VARCHAR(50)  NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = utf8;

-- 创建管理员
-- 表名shop_admin
-- 用户名'admin'
-- 密码md5('admin')
-- 邮箱136494666@qq.com
INSERT `shop_admin` (username, password, email)
VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', '136494666@qq.com');