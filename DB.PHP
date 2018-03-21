-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 12:27 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `coach_gadgets`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `class_team`
-- 

CREATE TABLE `class_team` (
  `id` int(7) NOT NULL auto_increment,
  `class` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `class_team`
-- 

INSERT INTO `class_team` VALUES (1, 'U-9');
INSERT INTO `class_team` VALUES (2, 'U-11');
INSERT INTO `class_team` VALUES (3, 'U-13');
INSERT INTO `class_team` VALUES (4, 'U-15');

-- --------------------------------------------------------

-- 
-- Table structure for table `coach`
-- 

CREATE TABLE `coach` (
  `coach_id` int(10) NOT NULL auto_increment,
  `coach_name` varchar(60) collate utf8_unicode_ci NOT NULL,
  `username` varchar(10) collate utf8_unicode_ci NOT NULL,
  `password` varchar(10) collate utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(7) collate utf8_unicode_ci NOT NULL,
  `address` varchar(100) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `sign_date` date NOT NULL,
  `release_date` date NOT NULL,
  PRIMARY KEY  (`coach_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `coach`
-- 

INSERT INTO `coach` VALUES (1, 'Waeismael Hayisamoh', 'wae123', '123456', '1993-11-01', 'Male', 'Muang, Yala', '0978782878', '2015-01-01', '2018-01-01');
INSERT INTO `coach` VALUES (2, 'Sulaiman Tohjeh', 'man456', '456789', '1994-03-01', 'Male', 'Muang, Yala', '0942342424', '2015-01-01', '2018-01-01');

-- --------------------------------------------------------

-- 
-- Table structure for table `match`
-- 

CREATE TABLE `match` (
  `match_id` int(7) NOT NULL auto_increment,
  `opp_name` varchar(100) collate utf8_unicode_ci NOT NULL,
  `stadium` varchar(100) collate utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `balance` int(12) NOT NULL,
  `squad` varchar(50) collate utf8_unicode_ci NOT NULL,
  `competition` varchar(100) collate utf8_unicode_ci NOT NULL,
  `team_id` int(7) NOT NULL,
  PRIMARY KEY  (`match_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `match`
-- 

INSERT INTO `match` VALUES (1, 'Yaha City', 'Rajabhat Yala University Stadium', '2017-06-15', 20000, '4-4-2', 'FA Cup Junior ', 0);
INSERT INTO `match` VALUES (2, 'Kotabaru FC', 'Kotabaru Stadium', '2017-08-22', 20000, '4-5-1', 'FA Cup Junior', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `player`
-- 

CREATE TABLE `player` (
  `player_id` int(7) NOT NULL auto_increment,
  `player_name` varchar(50) collate utf8_unicode_ci NOT NULL,
  `position` varchar(50) collate utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `school` varchar(50) collate utf8_unicode_ci NOT NULL,
  `height` int(7) NOT NULL,
  `weight` int(7) NOT NULL,
  `foot` varchar(10) collate utf8_unicode_ci NOT NULL,
  `address` varchar(50) collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) collate utf8_unicode_ci NOT NULL,
  `sign_date` date NOT NULL,
  `release_date` date NOT NULL,
  `team_id` int(7) NOT NULL,
  `team_class` varchar(50) collate utf8_unicode_ci NOT NULL,
  `goal` int(6) NOT NULL,
  `assist` int(6) NOT NULL,
  `yellow` int(6) NOT NULL,
  `red` int(6) NOT NULL,
  PRIMARY KEY  (`player_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

-- 
-- Dumping data for table `player`
-- 

INSERT INTO `player` VALUES (1, 'Muhammad Ridwan', 'DMF', '2009-01-01', 'Raman Sirivit, Yala', 130, 29, 'Right', 'Raman, Yala', '0912341234', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (2, 'Abdul Ali', 'LW', '2006-02-01', 'Benjama Rachuthit, Pattani', 140, 36, 'Left', 'Muang, Pattani', '0902302020', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (3, 'Nattawat Srisai', 'RB', '2004-09-07', 'Tessaban 5, Yala', 157, 45, 'Right', 'Muang, Yala', '0975775757', '2015-01-01', '2018-01-01', 3, 'U-13', 0, 0, 0, 0);
INSERT INTO `player` VALUES (4, 'Pongsak Tephee', 'LB', '2002-09-14', 'Kanarat Bamrung, Yala', 160, 50, 'Left', 'Muang, Yala', '0932342564', '2015-01-01', '2018-01-01', 4, 'U-15', 0, 0, 0, 0);
INSERT INTO `player` VALUES (5, 'Rusman Sadeeyamoo', 'GK', '2008-09-01', 'Tessaban 5, Yala', 134, 32, 'Right', 'Muang, Yala', '0953455325', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (6, 'Tossapon Jongrak', 'CF', '2008-05-01', 'Tessaban 5, Yala', 128, 28, 'Right', 'Muang, Yala', '0972530027', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (7, 'Zakaria Musow', 'CMF', '2008-09-02', 'Tessaban 5, Yala', 130, 33, 'Right', 'Raman, Yala', '0954500020', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (8, 'Ruswan Hama', 'CB', '2008-05-15', 'Tessaban 5, Yala', 134, 30, 'Left', 'Muang, Yala', '0936361126', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (9, 'Nimuslim Nisalam ', 'CB', '2008-04-08', 'Tessaban 5, Yala', 133, 30, 'Right', 'Muang, Yala', '0602304430', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (10, 'Asri Japakiya', 'RMF', '2008-05-05', 'Tessaban 5, Yala', 134, 28, 'Right', 'Muang, Yala', '0644042540', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (11, 'Arif Sangnui', 'AMF', '2008-06-11', 'Tessaban 5, Yala', 135, 34, 'Left', 'Muang, Yala', '0932030029', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (12, 'Basree Abdullah', 'LB', '2008-04-17', 'Kanarat Bamrung, Yala', 132, 25, 'Left', 'Muang, Yala', '0975507720', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (13, 'Abdulhalim Abdullah', 'RB', '2008-04-21', 'Tessaban 5, Yala', 125, 26, 'Right', 'Muang, Yala', '0603045504', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (14, 'Bassam Datoh', 'LW', '2008-05-31', 'Santitham, Yala', 128, 30, 'Left', 'Muang, Yala', '0952455025', '2015-01-01', '2018-01-01', 1, 'U-9', 0, 0, 0, 0);
INSERT INTO `player` VALUES (15, 'Wanhakim Wanmuhammad', 'GK', '2006-09-01', 'Kanarat Bamrung, Yala', 144, 34, 'Right', 'Raman, Yala', '0988802890', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (16, 'Mumin Lertsakul', 'CB', '2006-05-11', 'Kanarat Bamrung, Yala', 142, 38, 'Left', 'Muang, Yala', '0902205420', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (17, 'Nimaslan Nidaoh', 'RB', '2006-02-14', 'Santitham, Yala', 144, 37, 'Right', 'Muang, Yala', '0602305420', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (18, 'Sulaiman Pohji', 'CB', '2006-03-22', 'Kanarat Bamrung, Yala', 140, 36, 'Right', 'Muang, Yala', '0603302350', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (19, 'Nazreen Sama', 'LB', '2006-02-02', 'Kanarat Bamrung, Yala', 144, 38, 'Left', 'Betong, Yala', '0945340404', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (20, 'Nasruddin Dahami', 'RMF', '2006-03-09', 'Kanarat Bamrung, Yala', 148, 47, 'Right', 'Than To, Yala', '0604403530', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (21, 'Shareef Sapsin', 'CMF', '2006-06-07', 'Stree, Yala', 145, 45, 'Right', 'Muang, Yala', '0977202024', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);
INSERT INTO `player` VALUES (22, 'Pakkawan Kaewprom', 'CF', '2006-03-18', 'Kanarat Bamrung, Yala', 142, 40, 'Left', 'Muang, Yala', '0915512500', '2015-01-01', '2018-01-01', 2, 'U-11', 0, 0, 0, 0);


-- --------------------------------------------------------

-- 
-- Table structure for table `fixtures`
-- 

CREATE TABLE `fixtures` (
  `id` int(7) NOT NULL,
  `home` varchar(50) collate utf8_unicode_ci NOT NULL,
  `away` varchar(50) collate utf8_unicode_ci NOT NULL,
  `timed` date NOT NULL,
  `competition` varchar(100) collate utf8_unicode_ci NOT NULL,
  `id_team` int(7) NOT NULL,
  `id_class` int(7) NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `fixtures`
-- 



