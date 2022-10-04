-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 10:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `170204061`
--
CREATE DATABASE IF NOT EXISTS `170204061` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `170204061`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(9, 'Sajek', 'nothing'),
(10, 'Saint-Martin', 'Optional'),
(11, 'Bandarban', 'Optional'),
(12, 'Rangamati', 'Optional'),
(13, 'Nijhum Dwip', 'Optional'),
(14, 'Shitakundo', 'Optional'),
(15, 'Sylhet', 'Optional');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trending` tinyint(1) NOT NULL DEFAULT '0',
  `clickCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `cat_id`, `title`, `image`, `body`, `published`, `createdAt`, `trending`, `clickCount`) VALUES
(17, 22, 14, 'A great tour with friends.', '1600546241_70fc0c9846423ccf3ff8506fd9268233.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et purus mauris. Nulla viverra lorem dapibus pellentesque accumsan. Vivamus pretium vulputate elit non mattis. Maecenas ornare sollicitudin elementum. Donec maximus elit diam, ut vulputate magna tempor in. Nulla facilisi. Fusce a commodo libero. Cras at pellentesque risus, at fermentum ante. Fusce enim sem, accumsan vitae rhoncus id, facilisis a velit. Aenean a laoreet nisi, ut tristique arcu. Curabitur vitae augue in purus euismod lacinia. Sed metus justo, rutrum in diam pretium, suscipit tempus arcu.\r\n\r\nCras gravida quam sit amet vestibulum condimentum. Vestibulum euismod commodo libero et luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam ultrices ante eget massa pulvinar pulvinar. Aliquam sollicitudin, mi et eleifend lacinia, sapien turpis consectetur mi, quis aliquet sapien elit mattis urna. Donec sed elementum odio. Integer eget ultrices purus, sit amet convallis purus. Aenean ultricies tempor gravida.\r\n\r\nInteger lectus dui, iaculis id mauris sit amet, maximus volutpat sapien. Ut vitae ultricies massa. Curabitur maximus sagittis gravida. Sed sed odio sed diam lobortis commodo. Pellentesque sed dapibus nisl, sagittis convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut volutpat tortor, non venenatis arcu. Donec vel tempor mauris. Maecenas sagittis at risus et viverra. Morbi vitae urna ac ligula hendrerit egestas. Suspendisse facilisis egestas ligula in faucibus.\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\n\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.', 1, '2020-09-20 01:25:40', 1, NULL),
(18, 22, 12, 'A great tour.', '1600546260_1600543706_fef.jpg', 'Aenean semper urna sapien, vel porttitor turpis sodales ac. Sed est ante, ornare id lectus eget, sollicitudin tempor urna. Integer viverra sem et leo luctus, quis rutrum sem finibus. Nulla nec nulla eget ipsum tincidunt egestas sit amet at neque. Nullam a tortor rhoncus arcu posuere placerat ut non metus. Vivamus egestas, sem venenatis fermentum aliquam, sapien tortor lobortis sem, ac vulputate felis orci in nisl. Pellentesque suscipit ex ut condimentum iaculis. Phasellus dapibus vestibulum diam in feugiat. Integer eu dui nec odio malesuada varius et a est. Mauris ante velit, pretium nec maximus quis, egestas sit amet enim. Sed porttitor lacus et nunc faucibus consequat.\r\n\r\nQuisque ac gravida tellus. Integer nec nisl accumsan, sodales ante vel, euismod neque. Nunc tincidunt odio porttitor commodo facilisis. Donec hendrerit imperdiet vestibulum. Donec id lorem a eros fringilla pharetra vitae a ante. Morbi tempor quis urna lacinia dapibus. Ut bibendum venenatis vulputate. Morbi at ante at elit finibus molestie. Pellentesque non augue sit amet nibh dictum porttitor. Proin dignissim convallis ex, et pulvinar sem fermentum vel. Cras faucibus tincidunt interdum. Aliquam erat volutpat. Nunc dapibus aliquam metus, vel maximus turpis euismod sit amet. Sed aliquam ipsum id leo suscipit convallis.\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\n\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.', 1, '2020-09-20 01:28:26', 1, NULL),
(19, 22, 10, 'What a wonderful journey.', '1600546279_1600543782_abc.jpg', 'Test for searching.\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\n\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.', 1, '2020-09-20 01:29:42', 1, NULL),
(20, 22, 11, 'Can\'t imagine of a better day.', '1600546302_1600543866_oL3Uc7.jpg', 'Testing for searching\r\n\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\n\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.', 1, '2020-09-20 01:31:06', 1, NULL),
(21, 22, 11, 'Worst.', '1600546326_1600543934_scenery-hd-wallpaper-beautiful-waterfall-hd-scenery.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum mi neque, sit amet viverra quam efficitur nec. Nullam volutpat velit ut semper vulputate. Aliquam ultricies erat elit, nec cursus orci ultrices vel. Praesent tempor ligula orci, vel ultrices nulla posuere aliquam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas vitae purus ac nisl elementum lobortis. Maecenas eget ultrices arcu. Cras viverra dictum posuere. Ut in pretium mi.\r\nVestibulum in interdum ex. Duis ultricies lacinia sem, aliquam imperdiet ante efficitur vel. Maecenas tortor ante, consequat eget ultrices nec, iaculis sit amet velit. Etiam a augue at diam pulvinar auctor. Morbi quis risus nec libero porta vehicula. Cras a diam sit amet leo porttitor luctus at et eros. Nullam eros nisi, ultrices in tortor vitae, pulvinar consequat eros. Mauris tristique arcu vel aliquam elementum. Vivamus posuere luctus justo, at consectetur metus scelerisque vitae. Phasellus tristique enim non mi fringilla, suscipit commodo lectus sagittis. Sed eu malesuada libero. Vestibulum tellus dolor, semper vitae ultricies eu, tincidunt sit amet massa. Proin vitae dolor eget quam posuere rutrum. Pellentesque leo orci, lobortis et congue eget, sollicitudin vitae sem. Aliquam pellentesque suscipit leo sit amet rhoncus. Donec eleifend quam purus, eu cursus erat fringilla at.\r\n\r\nPhasellus vitae gravida erat, mattis vulputate nisl. Fusce lectus ipsum, dignissim ut dapibus aliquet, tristique vitae diam. Nullam dignissim odio quis nisi elementum, vitae interdum lorem laoreet. Vivamus dictum eu urna sit amet iaculis. Phasellus vestibulum accumsan commodo. Suspendisse potenti. Sed tincidunt eros quis diam venenatis, ac semper odio consectetur. Proin non tortor aliquam, pretium mi nec, tempus eros. Integer ullamcorper iaculis tristique. Etiam congue dictum dolor eu gravida. Pellentesque nec efficitur ligula.\r\n\r\nMauris porttitor viverra tellus, non bibendum tellus. Etiam eu venenatis ante, sed imperdiet arcu. Fusce turpis enim, rhoncus id cursus id, facilisis sit amet diam. Aenean pulvinar arcu in dui tempor placerat. Nulla quis laoreet purus, sit amet cursus massa. Morbi sodales eleifend urna, non congue lectus bibendum nec. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Mauris varius blandit nisi, sit amet convallis urna ultricies in. Cras leo erat, facilisis a mattis id, sollicitudin vel ipsum. Donec suscipit est est, in sagittis purus aliquam in. Praesent tincidunt turpis vel lorem pharetra, id commodo eros facilisis. Donec vulputate dolor nec euismod cursus. Curabitur facilisis vestibulum varius. Etiam molestie egestas lectus. Ut non velit tortor.\r\n\r\nVestibulum suscipit convallis dolor, nec porta ante accumsan eu. Donec convallis orci ipsum. Nullam fringilla aliquet fermentum. Phasellus ullamcorper tristique sem ut aliquam. Sed justo nunc, maximus at turpis quis, varius consequat ipsum. Cras vel nibh at quam sagittis scelerisque quis sed urna. Proin dapibus lacus vel tincidunt porttitor. Integer vitae tincidunt felis. Sed at pulvinar nibh. Proin luctus aliquet ipsum tristique scelerisque. Sed aliquet eros nec lacinia efficitur. Phasellus urna ipsum, hendrerit id convallis ut, sodales sed sem. Vivamus vitae metus vitae lacus dignissim porta a nec diam. Vivamus ac massa sed sem sagittis venenatis.', 1, '2020-09-20 01:32:14', 0, NULL),
(23, 26, 11, 'Tremendous Evening.', '1600547369_thumb-350-788878.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc mi ipsum faucibus vitae. Nulla pharetra diam sit amet. Aliquet nec ullamcorper sit amet risus. Tincidunt arcu non sodales neque sodales ut etiam. Morbi non arcu risus quis varius quam. Viverra justo nec ultrices dui sapien eget mi proin sed. A diam maecenas sed enim ut sem viverra aliquet. Diam sollicitudin tempor id eu nisl. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Tellus in hac habitasse platea dictumst vestibulum rhoncus. Sociis natoque penatibus et magnis dis parturient montes. Vel eros donec ac odio tempor orci dapibus ultrices. Egestas quis ipsum suspendisse ultrices gravida dictum fusce ut.\r\n\r\nUt lectus arcu bibendum at varius vel pharetra. In vitae turpis massa sed elementum. Bibendum arcu vitae elementum curabitur. Lectus nulla at volutpat diam ut venenatis. Proin fermentum leo vel orci porta non pulvinar neque laoreet. In metus vulputate eu scelerisque felis. Egestas dui id ornare arcu odio ut sem nulla. Vulputate eu scelerisque felis imperdiet. Donec enim diam vulputate ut pharetra sit. Vitae elementum curabitur vitae nunc sed. In hendrerit gravida rutrum quisque. Urna cursus eget nunc scelerisque viverra mauris in aliquam sem. Feugiat in ante metus dictum at. Fusce id velit ut tortor pretium. Tincidunt id aliquet risus feugiat in. Sed tempus urna et pharetra pharetra. Sed faucibus turpis in eu mi bibendum neque egestas. Sed enim ut sem viverra. Id consectetur purus ut faucibus pulvinar elementum.\r\n\r\nSit amet tellus cras adipiscing enim eu turpis. Pulvinar elementum integer enim neque volutpat ac tincidunt vitae. Vulputate ut pharetra sit amet. Consectetur adipiscing elit duis tristique. Aliquam sem fringilla ut morbi tincidunt augue interdum. Scelerisque felis imperdiet proin fermentum leo vel orci porta non. Cursus vitae congue mauris rhoncus aenean vel elit scelerisque. Amet justo donec enim diam vulputate ut pharetra sit. Montes nascetur ridiculus mus mauris vitae ultricies leo integer malesuada. Eu mi bibendum neque egestas. Sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec pretium. Convallis a cras semper auctor neque vitae tempus quam. Amet mattis vulputate enim nulla aliquet porttitor lacus. Turpis cursus in hac habitasse platea dictumst quisque.\r\n\r\nEget sit amet tellus cras. Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Eleifend mi in nulla posuere sollicitudin aliquam. Lacinia at quis risus sed vulputate. Pulvinar sapien et ligula ullamcorper. Arcu odio ut sem nulla pharetra diam sit. Tempor orci dapibus ultrices in iaculis nunc sed augue. Commodo nulla facilisi nullam vehicula ipsum. Venenatis urna cursus eget nunc scelerisque viverra mauris in. Porttitor rhoncus dolor purus non enim praesent. Aliquet sagittis id consectetur purus. Cursus eget nunc scelerisque viverra mauris in aliquam sem fringilla. Id volutpat lacus laoreet non. Diam vel quam elementum pulvinar etiam. Nulla facilisi etiam dignissim diam quis enim lobortis. Velit egestas dui id ornare arcu odio ut sem nulla. Ut pharetra sit amet aliquam.\r\n\r\nPorta nibh venenatis cras sed felis. In hendrerit gravida rutrum quisque non tellus. Nisl suscipit adipiscing bibendum est ultricies integer quis. Vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor. Risus quis varius quam quisque id diam vel quam elementum. Et odio pellentesque diam volutpat commodo sed. Lobortis feugiat vivamus at augue eget arcu dictum varius. Sed turpis tincidunt id aliquet. Elementum eu facilisis sed odio. Tellus cras adipiscing enim eu turpis egestas pretium aenean pharetra. Malesuada fames ac turpis egestas integer eget. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Non nisi est sit amet facilisis magna etiam tempor orci. Faucibus et molestie ac feugiat sed lectus vestibulum mattis. Id faucibus nisl tincidunt eget nullam non nisi. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Ut eu sem integer vitae justo eget magna fermentum iaculis. Facilisi cras fermentum odio eu feugiat.', 1, '2020-09-20 02:29:29', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `name`, `email`, `message`, `createdAt`) VALUES
(3, 'Najrul', 'najrul@gmail.com', 'Hello! I want to write blogs on this website. Please mail me the procedures and the subscription cost asap.', '2020-09-20 01:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`) VALUES
(22, 1, 'admin', 'admin@gmail.com', '$2y$10$n6geO7BVqbe1HcwUk9MjFuUIoP0vlR.FLrBE1Fg9TLPkWTWjEBD7m'),
(23, 0, 'user', 'user@gmail.com', '$2y$10$JJm1MR0XqOp/L1KCHamkr.p6rF8ORqFwegaQijM2c/t5tX4naphU2'),
(25, 0, 'ab', 'a@gmail.com', '$2y$10$DKj0H9CK9oDYAV1DTc2nVOW47jXJStZ51o6AZW4Odf6fe30MPNly.'),
(26, 1, 'Tushar', 't@gmail.com', '$2y$10$IuDn65pd4E/Nhykm9hEZj.oqO1kszCJDpkzgPX/PWpX6Ff5Uo3FCm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
