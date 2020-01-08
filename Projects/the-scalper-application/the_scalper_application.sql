-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2019 at 10:45 AM
-- Server version: 5.7.22-0ubuntu0.17.10.1-log
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-05:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mod5_scalper`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users`
(
    `id`          int(11)                          NOT NULL,
    `username`    varchar(20) COLLATE utf8mb4_bin  NOT NULL,
    `password`    varchar(256) COLLATE utf8mb4_bin NOT NULL,
    `firstname`   varchar(20) COLLATE utf8mb4_bin  NOT NULL,
    `lastname`    varchar(30) COLLATE utf8mb4_bin  NOT NULL,
    `address`     varchar(200) COLLATE utf8mb4_bin NOT NULL,
    `city`        varchar(200) COLLATE utf8mb4_bin NOT NULL,
    `province`    varchar(50) COLLATE utf8mb4_bin  NOT NULL,
    `postal`      varchar(6) COLLATE utf8mb4_bin   NOT NULL,
    `telephone`   varchar(20) COLLATE utf8mb4_bin  NOT NULL,
    `email`       varchar(128) COLLATE utf8mb4_bin NOT NULL,
    `credit_info` text COLLATE utf8mb4_bin         NOT NULL,
    `status`      int(11)                          NOT NULL DEFAULT '1',
    `valid`       int(11)                          NOT NULL DEFAULT '0',
    `token`       varchar(256) COLLATE utf8mb4_bin          DEFAULT NULL,
    `role`        int(11)                          NOT NULL DEFAULT '0' COMMENT 'ADMIN = 1000 MAN = 500 USER = 0'
) ENGINE = InnoDB
  AUTO_INCREMENT = 10
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_bin;

CREATE TABLE IF NOT EXISTS `events`
(
    `id`          int(11)                          NOT NULL,
    `name`        varchar(256) COLLATE utf8mb4_bin NOT NULL,
    `type`        varchar(48) COLLATE utf8mb4_bin  NOT NULL,
    `image`       longblob DEFAULT NULL,
    `date`        timestamp                        NOT NULL,
    `location`    varchar(256) COLLATE utf8mb4_bin NOT NULL,
    `duration`    float                            NOT NULL,
    `num_tickets` int(11)  DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for tables
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);
ALTER TABLE `events`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for tables
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `events`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
