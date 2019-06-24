-- phpMyAdmin SQL Dump
-- version 3.2.3
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 19-06-24 16:35 
-- 서버 버전: 5.1.41
-- PHP 버전: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `template_1`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `board` varchar(20) NOT NULL,
  `board_per` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`board`, `board_per`) VALUES
('notice', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `board_notice`
--

CREATE TABLE IF NOT EXISTS `board_notice` (
  `bo_id` int(11) NOT NULL,
  `bo_title` varchar(40) NOT NULL,
  `bo_writer` varchar(30) NOT NULL,
  `bo_date` varchar(40) NOT NULL,
  `bo_text` text NOT NULL,
  PRIMARY KEY (`bo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board_notice`
--

INSERT INTO `board_notice` (`bo_id`, `bo_title`, `bo_writer`, `bo_date`, `bo_text`) VALUES
(1, '첫번째 글', '임용성', '2019-06-23 16:01:22', '헤헤헤헤');

-- --------------------------------------------------------

--
-- 테이블 구조 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_no` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `user_pw` varchar(32) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_per` int(1) NOT NULL,
  `user_ip` varchar(15) NOT NULL,
  PRIMARY KEY (`user_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `users`
--

