-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 02:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lppf_lppf`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'About', '', '<p><em><span style="color:#008000">About section&nbsp;</span></em></p>\r\n', '11.png');

-- --------------------------------------------------------

--
-- Table structure for table `about_section`
--

CREATE TABLE IF NOT EXISTS `about_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `about_section`
--

INSERT INTO `about_section` (`id`, `title`, `img`, `topic`, `t_small`) VALUES
(5, 'WHAT WE DO', '1920312_738130059539734_1827943051_n.jpg', 'Our role is about study and evaluate the current political, economic and social circumstances, and reflect these studies to media material and brief reports to raise awareness and measure the public opinion. Then develop policies through research to be contiguous to the executive authorities’ needs and citizen’s expectations    ', 'STUDY, EVALUATE and AWARE '),
(6, 'Section2', '1-realistic-painting-bellator21.jpg', '<p><strong><span style="color:#FF0000">section 222 2 22&nbsp;</span></strong></p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Calendar', 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'calander.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE IF NOT EXISTS `calendar_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `details` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `title`, `details`, `date`, `enddate`) VALUES
(2, 'xknasd sadjsd ', 'laskdfhasd alsdahdl h', '2015-11-01', '2015-11-07'),
(3, 'asdsa asd ', 'asd asdasdasd ', '2015-12-02', '2015-12-02'),
(4, 'Event ', 'asldj adasld jsk', '2015-07-01', '2015-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `googlemaps` text NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `page`, `t_small`, `paragraph`, `googlemaps`, `img`) VALUES
(1, 'contact', '', '<p><span style="color:#FFD700">Contact</span></p>\r\n', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110502.60389560678!2d31.188423630372615!3d30.0596184702164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1450738603562', '31.png');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `subject`, `message`, `date`) VALUES
(7, 'Ahmed Hassan', 'ahmed@yahoo.com', 'Tst Message', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2015-11-13 05:43:39'),
(8, 'testing', 'nancy@shetewy-tech.com', 'hi from shetewy tech', 'Hello, I''m sending this message from your new website, how it goes over there, read the following statement in Arabic and let me know if you can read it:\n\nهذه عينة مستحدثة من العمل المستجد الجاري على احداث الرابع والعشرين فى ليبيا\n\nAlso please make sure you can read these letters:\n\nle corbeau, crow. le renard, fox. allécher quelqu''un, \n\nCHeers!!! :) ', '2015-12-06 22:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text NOT NULL,
  `paragraph` text NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'GALLERY', '________', '_______', 'About_Header10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `img`) VALUES
(6, '20150804_141915.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(250) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `img`) VALUES
(29, 'Slider2.jpg'),
(30, 'slider3.jpg'),
(31, 'Slider4.jpg'),
(32, 'slider5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Media ', 'This is media ', 'This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  This is media  v', '13.png');

-- --------------------------------------------------------

--
-- Table structure for table `media_items`
--

CREATE TABLE IF NOT EXISTS `media_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `downloads` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `media_items`
--

INSERT INTO `media_items` (`id`, `title`, `link`, `desc`, `date`, `downloads`) VALUES
(3, 'نفطنا العزيز رأس مالنا الأول والأخير', 'https://www.youtube.com/watch?v=l1xRZlB-sr0', '', '2015-12-14', 0),
(4, 'Song 1', 'https://www.youtube.com/watch?v=t5Sd5c4o9UM', '', '2015-12-21', 0),
(5, 'asdasd', 'https://www.youtube.com/watch?v=t5Sd5c4o9UM', 'asdadasd', '2015-12-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'MISSION', '________', '_________', 'About_Header5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mission_section`
--

CREATE TABLE IF NOT EXISTS `mission_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mission_section`
--

INSERT INTO `mission_section` (`id`, `title`, `img`, `topic`, `t_small`) VALUES
(7, 'MISSION', '_05A1202.jpg', 'Provide public policy options to create an independent public opinion, and discuss the essential ways to face the challenges confronting Libya on many levels.', 'MISSION'),
(8, 'Section2', '21.png', '<p><span style="color:#8B4513">sadasdasd</span></p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'News - Events', 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'News-banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_type` varchar(5) NOT NULL,
  `subject` varchar(65) NOT NULL,
  `newsletter` text NOT NULL,
  `time` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email_type`, `subject`, `newsletter`, `time`) VALUES
(1, 'text', 'Hi There', 'Hi there', 1449009618);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_users`
--

CREATE TABLE IF NOT EXISTS `newsletter_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(65) NOT NULL,
  `email_type` varchar(5) NOT NULL,
  `time` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newsletter_users`
--

INSERT INTO `newsletter_users` (`id`, `email`, `email_type`, `time`) VALUES
(1, 'omarfaramawi@gmail.com', 'gmail', 1449059700),
(2, 'omarfaramawi@yahoo.com', 'yahoo', 1449010742),
(3, 'nancy@shetewy-tech.com', 'shete', 1449442526),
(4, 'talal.burnaz@yahoo.com', 'yahoo', 1450190620);

-- --------------------------------------------------------

--
-- Table structure for table `news_items`
--

CREATE TABLE IF NOT EXISTS `news_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news_items`
--

INSERT INTO `news_items` (`id`, `title`, `topic`, `img`, `date`) VALUES
(1, 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1.png', '2015-11-05'),
(2, 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '2.png', '2015-11-05'),
(3, 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '3.png', '2015-11-05'),
(4, 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '4.png', '2015-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Partners', 'Partners Partners', 'Partners PartnersPartners PartnersPartners PartnersPartners PartnersPartners Partners', '42.png');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE IF NOT EXISTS `partnership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `partnership`
--

INSERT INTO `partnership` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Partnership', 'This Partner Ship', 'This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship This Partner Ship ', 'about-pic11.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners_items`
--

CREATE TABLE IF NOT EXISTS `partners_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE IF NOT EXISTS `polls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'alsdjlasdj ljasldjas jdalsdkj ', 'o913291o4ojqwl dansdjasdj asldjasldjas d', 'ljasldija sldoasd ansdhas dhasld as', 'about-pic.png');

-- --------------------------------------------------------

--
-- Table structure for table `polls_choice`
--

CREATE TABLE IF NOT EXISTS `polls_choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `choice` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `polls_choice`
--

INSERT INTO `polls_choice` (`id`, `question_id`, `choice`, `counter`) VALUES
(33, 9, 'Very good ', 0),
(34, 9, 'Good ', 1),
(35, 9, 'Normal ', 1),
(36, 9, 'Not good  ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `polls_questions`
--

CREATE TABLE IF NOT EXISTS `polls_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `polls_questions`
--

INSERT INTO `polls_questions` (`id`, `question`, `date`) VALUES
(9, 'How good is our new website? ', '2015-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE IF NOT EXISTS `privacy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Privacy Policy', 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Gallery-banner11.png');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE IF NOT EXISTS `programs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Training ', 'We share Knowledge, share experience and learn from each other', 'One of LPPF''s objectives as a local organization is to build the capacity and developed the skills of the key personnel of government agencies, national organizations  as well as the public through training programs organized by the forum or by one of its global partners. ', 'About_Header7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `programs_items`
--

CREATE TABLE IF NOT EXISTS `programs_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'aslkdhaskdhashd sahdask jdh', 'lkashdk;hasdu asdkasdnawks naskjdaksh ', 'asidoiashd; adashd akshdksahd asohdlasijd ', 'CRE06HVXAAAz4eQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `publications_items`
--

CREATE TABLE IF NOT EXISTS `publications_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc` text NOT NULL,
  `date` date NOT NULL,
  `downloads` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `publications_items`
--

INSERT INTO `publications_items` (`id`, `title`, `link`, `desc`, `date`, `downloads`) VALUES
(6, 'Omar_Faramawi_(CV).docx', 'http://lppf.org/backend/uploads/publications/Omar_Faramawi_(CV).docx', '', '2015-12-07', 0),
(7, 'تقييم_إدارة_العائدات_في_ليبيا.pdf', 'http://lppf.org/backend/uploads/publications/تقييم_إدارة_العائدات_في_ليبيا.pdf', '', '2015-12-14', 0),
(8, 'Omar_Faramawi_(CV)1.docx', 'http://localhost/lppf/backend/uploads/publications/Omar_Faramawi_(CV)1.docx', 'askdjakdasj', '2015-12-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(2, 'reports', 'asdasdasd', 'asdasd', '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `reports_items`
--

CREATE TABLE IF NOT EXISTS `reports_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topic` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(250) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reports_items`
--

INSERT INTO `reports_items` (`id`, `title`, `topic`, `img`, `file`, `date`) VALUES
(6, 'Report new item', '<p>sasasasaaass</p>\r\n', '12338484_1262804403736051_482965298_n.jpg', 'hgignore_global.txt', '2015-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE IF NOT EXISTS `research` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Research', 'This is Research', 'This is Research This is Research This is Research This is Research This is Research This is Research This is Research This is Research This is Research ', 'calander1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `research_items`
--

CREATE TABLE IF NOT EXISTS `research_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `link` text NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `research_items`
--

INSERT INTO `research_items` (`id`, `title`, `link`, `desc`) VALUES
(1, 'gitignore_global.txt', 'http://localhost/lppf/backend/uploads/research/gitignore_global.txt', '<p>a;s;alks;aks;lask;laks</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `youtube` varchar(250) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `forum` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `facebook`, `twitter`, `youtube`, `linkedin`, `forum`) VALUES
(1, 'https://www.facebook.com/www.lppf.org/?fref=ts', 'https://twitter.com/LPPF_info', 'https://www.youtube.com/channel/UCA1QPhijbVEfO1vj19BtieA', 'https://www.linkedin.com/company/libyan-public-policy-forum?trk=top_nav_home', 'http://localhost/lppf/backend/home');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`) VALUES
(1, 'omarfaramawi@gmail.com'),
(2, 'omarfaramawi@yahoo.com'),
(3, 'usama@yahoo.com'),
(4, 'usama@gmail.com'),
(5, 'eb@shetewy.com'),
(6, 'omarfaramawi@yahoo.com'),
(7, 'nancy@shetewy-tech.com'),
(8, 'talal.burnaz@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Terms of services', 'Is Simply Dummy Text Of The Printing', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'our-mission-banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'TRAINING ', ' We share Knowledge, share experience and learn from each other', 'One of LPPF''s objectives as a local organization is to build the capacity and developed the skills of the key personnel of government agencies, national organizations as well as the public through training programs organized by the forum or by one of its global partners', 'About_Header71.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_small` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paragraph` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `page`, `t_small`, `paragraph`, `img`) VALUES
(1, 'Volunteer', 'Volunteeer ', 'ajsaskjdaskjdaksdhkas hkashdkjasdhk sh', '15-realistic-painting-indian2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
