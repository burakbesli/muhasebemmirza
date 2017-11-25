/*
 Navicat Premium Data Transfer

 Source Server         : MM
 Source Server Type    : MySQL
 Source Server Version : 100125
 Source Host           : 207.154.248.28:3306
 Source Schema         : root_mm

 Target Server Type    : MySQL
 Target Server Version : 100125
 File Encoding         : 65001

 Date: 24/11/2017 18:34:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gelir
-- ----------------------------
DROP TABLE IF EXISTS `gelir`;
CREATE TABLE `gelir`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gelir_adi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gelir_tutari` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gelir
-- ----------------------------
INSERT INTO `gelir` VALUES (3, 'Deneme son gelir', '100', '2017-11-20 00:00:00', '2017-11-24 00:00:00');
INSERT INTO `gelir` VALUES (4, 'deneme ekleme gelir create', '50', '2017-11-12 00:00:00', '2017-11-24 00:00:00');
INSERT INTO `gelir` VALUES (5, 'selam tatlım', '10', '2017-11-24 00:00:00', '2017-11-24 00:00:00');
INSERT INTO `gelir` VALUES (8, '', '12', '2017-11-21 00:00:00', NULL);
INSERT INTO `gelir` VALUES (9, '', '132', '2017-11-21 00:00:00', NULL);
INSERT INTO `gelir` VALUES (10, '', '321', '2017-11-22 00:00:00', NULL);

-- ----------------------------
-- Table structure for gider
-- ----------------------------
DROP TABLE IF EXISTS `gider`;
CREATE TABLE `gider`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `gider_adi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gider_tutari` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gider
-- ----------------------------
INSERT INTO `gider` VALUES (2, 'gider3', '121', '2017-11-24 00:00:00', '2017-11-24 00:00:00');
INSERT INTO `gider` VALUES (3, 'giderr', '500', '2017-11-24 00:00:00', '2017-11-24 00:00:00');
INSERT INTO `gider` VALUES (5, 'das', '231', '2017-11-22 00:00:00', NULL);
INSERT INTO `gider` VALUES (6, 'dasd', '123', '2017-11-20 00:00:00', NULL);
INSERT INTO `gider` VALUES (7, 'dasdas', '12', '2017-11-19 00:00:00', NULL);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (4, '2017_11_24_113312_gelir', 2);
INSERT INTO `migrations` VALUES (5, '2017_11_24_124833_gider', 3);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp(0) DEFAULT NULL,
  `updated_at` timestamp(0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Demo Kullanıcı', 'demo@demo.com', '$2y$10$X6VvZ1nE.SV7u/hFp3FTOuEB4PrdzX3ahPOs.23E3P1dpdEq.cMV2', NULL, '2017-11-24 15:32:43', '2017-11-24 15:32:43');

SET FOREIGN_KEY_CHECKS = 1;
