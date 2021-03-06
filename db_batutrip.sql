-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2015 at 01:01 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_batutrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_trip`
--

CREATE TABLE IF NOT EXISTS `detail_trip` (
  `trip_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`trip_id`,`post_id`),
  KEY `post_id` (`post_id`),
  KEY `trip_id` (`trip_id`),
  KEY `post_id_2` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_trip`
--

INSERT INTO `detail_trip` (`trip_id`, `post_id`, `number`) VALUES
(140, 41, 0),
(140, 57, 0),
(140, 106, 0),
(141, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL,
  `role_id` varchar(20) NOT NULL,
  `position` varchar(15) NOT NULL,
  `module_target` varchar(30) NOT NULL,
  PRIMARY KEY (`position`,`module_target`),
  KEY `node_id` (`role_id`),
  KEY `role_id` (`role_id`),
  KEY `node_id_2` (`menu_id`),
  KEY `role_id_2` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `role_id`, `position`, `module_target`) VALUES
(28, '-3-2-1-', '0.1', 'admin-page'),
(51, '-1-2-3-', '0.1', 'side-front'),
(12, '-2-1-3-', '1', 'admin-page'),
(120, '-1-2-3-', '1', 'front-end'),
(49, '-4-', '1', 'side-front'),
(100, '-4-1-2-3-', '1', 'site-menu'),
(50, '-1-2-3-', '2', 'side-front'),
(101, '-4-1-2-3-', '2', 'site-menu'),
(110, '-4-', '2.1', 'front-end'),
(131, '-1-2-3-4-', '2.1', 'site-menu'),
(137, '-1-2-3-4-', '2.3', 'front-end'),
(13, '-1-2-', '3', 'admin-page'),
(102, '-4-1-2-3-', '3', 'site-menu'),
(14, '-1-2-', '3-1', 'admin-page'),
(46, '-1-2-', '3-2', 'admin-page'),
(53, '-1-2-', '3-3', 'admin-page'),
(132, '-1-2-3-4-', '3.1', 'site-menu'),
(138, '-1-2-', '4', 'admin-page'),
(52, '-1-2-3-', '4', 'side-front'),
(103, '-4-1-2-3-', '4', 'site-menu'),
(133, '-1-2-3-4-', '4.1', 'site-menu'),
(104, '-4-1-2-3-', '5', 'site-menu'),
(70, '-1-2-3-4-', '5.1', 'front-end'),
(134, '-1-2-3-4-', '5.2', 'site-menu'),
(105, '-4-1-2-3-', '6', 'site-menu'),
(21, '-4-1-2-3-', '6.1', 'front-end'),
(135, '-1-2-3-4-', '6.1', 'site-menu'),
(31, '-1-2-', '7', 'admin-page'),
(69, '-1-2-3-4-', '7', 'front-end'),
(129, '-1-2-3-4-', '7', 'site-menu'),
(136, '-1-2-3-4-', '7.1', 'site-menu');

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE IF NOT EXISTS `nodes` (
  `node_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `module` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL,
  `uri` varchar(80) NOT NULL,
  `title` varchar(80) NOT NULL,
  `content` text NOT NULL,
  `note` varchar(225) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`node_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`node_id`, `user_id`, `module`, `created`, `modified`, `uri`, `title`, `content`, `note`, `status`) VALUES
(12, 1, 'menu', '2015-05-01 14:38:58', '2015-10-11 08:22:12', 'dashboard', 'Halaman Awal', 'Dashboard', '', '1'),
(13, 1, 'menu', '2015-05-01 15:34:22', '2015-05-13 19:57:23', '#', 'Kelola Posting', 'Posts', '', '1'),
(14, 1, 'menu', '2015-05-01 15:35:18', '2015-11-25 03:42:41', 'posts/manage/destinations', 'Destinations posts', 'Destinations', '', '1'),
(21, 1, 'menu', '2015-05-01 23:02:22', '2015-12-06 08:33:01', 'culinary', 'Kuliner batu', 'Kuliner', '', '1'),
(23, 1, 'post', '2015-05-04 00:15:25', '2015-05-14 02:57:23', 'posts/view/23', 'Hello Word!', '', '', 'published'),
(28, 1, 'menu', '2015-05-09 15:05:07', '2015-10-11 08:22:06', '', '', 'MAIN NAVIGATION', '', '1'),
(31, 1, 'menu', '2015-05-09 15:31:49', '2015-08-14 02:25:48', 'users', 'manage users', 'Users', '', '1'),
(33, 1, 'post', '2015-05-14 01:23:41', '2015-09-22 15:11:01', 'posts/view/33', 'Hmif Study Club Full of People', '<p>In the lorem lipsum var aguer tag as wal afiat</p>\r\n', '', 'published'),
(34, 1, 'post', '2015-05-14 02:42:42', '2015-09-22 14:38:49', 'permalink/campaign', 'Campaign new Regime', '<p>Lorep lispusum asum susum sumsum</p>\r\n', 'Sab-26-Agu', 'published'),
(35, 1, 'post', '2015-05-14 02:50:48', NULL, 'posts/view/35', 'Test for the new Candidates', '<p>lorem lispumaes sum amet dor molor</p>\r\n', 'Jum-23-Sept', 'draft'),
(36, 1, 'post', '2015-05-14 02:51:58', '2015-09-22 15:02:00', 'permalink/hardship-from-developer', 'Hardship from the Developers', '<p>Phasellus lobortis arcu in quam accumsan imperdiet. Ut sed nibh eu lacus consectetur aliquam nec at mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vulputate, ante in malesuada ullamcorper, leo arcu hendrerit arcu, nec tempor neque leo nec ligula.</p>\r\n', 'Sen-01-Jan', 'published'),
(37, 1, 'post', '2015-05-14 02:57:23', '2015-09-22 15:02:36', 'permalink/last-man', 'Last Trial for The Last Man Standing', '<p>Proin sapien arcu, feugiat at velit vitae, vestibulum congue est. Praesent dolor est, vehicula a suscipit vitae, placerat non nisl. Fusce sed suscipit tortor. Aenean aliquam eu velit eu euismod. Nulla faucibus tellus ex, sit amet fermentum sem laoreet in. Nulla interdum sapien et metus vulputate, ultricies malesuada tortor ultrices. Cras condimentum nisi purus, ut rhoncus turpis laoreet at. Proin accumsan, sem vel porttitor porta, risus erat pulvinar lectus, porta auctor quam neque et elit. In malesuada massa id mi ornare lobortis.</p>\r\n', 'Jum-31-Des', 'published'),
(38, 1, 'post', '2015-05-14 03:17:11', '2015-05-14 03:17:11', 'posts/view/38', 'Mbuh karepmu', '<p>Dota Watafak</p>\r\n', 'Jum-31-Des', 'published'),
(40, 1, 'post', '2015-05-14 11:45:57', '2015-05-14 11:45:58', 'posts/view/40', 'Lorep Lispum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget vehicula sem. Donec vel tincidunt urna. Vestibulum sit amet sapien ut diam rhoncus ornare. Morbi sed pellentesque quam, id fringilla ligula. Pellentesque interdum quam et est gravida, at posuere lorem aliquet. Nunc in augue placerat, convallis nunc et, interdum nisi. Suspendisse molestie diam vitae nisl auctor luctus. In hac habitasse platea dictumst. Fusce vulputate ac massa ut viverra. Suspendisse sit amet ligula ut dolor ultricies facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Nullam ac tellus sit amet mauris posuere cursus nec quis turpis. Aenean arcu ante, auctor et viverra id, maximus ac sapien. Nulla at quam ut dui faucibus aliquam in vel ex. Etiam hendrerit purus id massa efficitur, at facilisis eros ornare. Quisque vitae cursus sapien. Vivamus quis rhoncus tortor. Cras finibus ut lectus vitae fringilla. Phasellus porttitor vulputate augue elementum finibus. Mauris sit amet velit est.</p>\r\n\r\n<p>Aliquam erat turpis, efficitur ut semper quis, hendrerit eget nisi. Cras nec magna commodo, semper justo ut, efficitur arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sit amet risus risus. Aliquam vel tortor ut est lobortis hendrerit a vitae sem. Curabitur cursus enim id mauris consequat aliquam. In a euismod velit, quis molestie turpis. Donec in nibh erat. Donec vulputate felis id facilisis mollis. Pellentesque eleifend, nibh in mollis pretium, tortor nibh condimentum nulla, ut fermentum urna leo ac leo.</p>\r\n\r\n<p>Quisque mollis mauris quis velit consequat volutpat. Aenean tempor diam aliquet, blandit lectus nec, pretium sem. Pellentesque mollis, eros vel convallis consequat, massa felis malesuada ex, eu consectetur felis tellus vitae odio. Morbi congue, lorem quis pharetra molestie, sem arcu commodo nulla, vitae dictum lorem lectus ac ligula. Praesent tempus gravida odio eget sagittis. Quisque auctor nulla condimentum nisi rhoncus lacinia. Suspendisse posuere faucibus sem, eget cursus nisi pretium ac. Aenean eu nibh condimentum, facilisis libero vitae, porttitor justo. Integer elementum mauris tortor, a dignissim sem dignissim vel. Proin ac mauris sagittis, mattis leo eget, dapibus ligula. Phasellus tempus blandit sem, id ornare augue iaculis quis.</p>\r\n\r\n<p>Curabitur et lacus venenatis, interdum mauris sit amet, maximus libero. Ut vehicula vulputate risus, sed congue lacus cursus ut. Nunc vel purus at mauris vulputate volutpat. Proin viverra ex non ipsum pretium dictum. Fusce et ornare erat. Praesent magna turpis, imperdiet vitae finibus quis, placerat ut neque. Sed ornare viverra mi eget faucibus. Etiam a magna odio.</p>\r\n', '', 'published'),
(41, 1, 'post', '2015-05-14 11:46:44', '2015-09-22 15:11:42', 'posts/view/41', 'Lorep Lispum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget vehicula sem. Donec vel tincidunt urna. Vestibulum sit amet sapien ut diam rhoncus ornare. Morbi sed pellentesque quam, id fringilla ligula. Pellentesque interdum quam et est gravida, at posuere lorem aliquet. Nunc in augue placerat, convallis nunc et, interdum nisi. Suspendisse molestie diam vitae nisl auctor luctus. In hac habitasse platea dictumst. Fusce vulputate ac massa ut viverra. Suspendisse sit amet ligula ut dolor ultricies facilisis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>\r\n\r\n<p>Nullam ac tellus sit amet mauris posuere cursus nec quis turpis. Aenean arcu ante, auctor et viverra id, maximus ac sapien. Nulla at quam ut dui faucibus aliquam in vel ex. Etiam hendrerit purus id massa efficitur, at facilisis eros ornare. Quisque vitae cursus sapien. Vivamus quis rhoncus tortor. Cras finibus ut lectus vitae fringilla. Phasellus porttitor vulputate augue elementum finibus. Mauris sit amet velit est.</p>\r\n\r\n<p>Aliquam erat turpis, efficitur ut semper quis, hendrerit eget nisi. Cras nec magna commodo, semper justo ut, efficitur arcu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam sit amet risus risus. Aliquam vel tortor ut est lobortis hendrerit a vitae sem. Curabitur cursus enim id mauris consequat aliquam. In a euismod velit, quis molestie turpis. Donec in nibh erat. Donec vulputate felis id facilisis mollis. Pellentesque eleifend, nibh in mollis pretium, tortor nibh condimentum nulla, ut fermentum urna leo ac leo.</p>\r\n\r\n<p>Quisque mollis mauris quis velit consequat volutpat. Aenean tempor diam aliquet, blandit lectus nec, pretium sem. Pellentesque mollis, eros vel convallis consequat, massa felis malesuada ex, eu consectetur felis tellus vitae odio. Morbi congue, lorem quis pharetra molestie, sem arcu commodo nulla, vitae dictum lorem lectus ac ligula. Praesent tempus gravida odio eget sagittis. Quisque auctor nulla condimentum nisi rhoncus lacinia. Suspendisse posuere faucibus sem, eget cursus nisi pretium ac. Aenean eu nibh condimentum, facilisis libero vitae, porttitor justo. Integer elementum mauris tortor, a dignissim sem dignissim vel. Proin ac mauris sagittis, mattis leo eget, dapibus ligula. Phasellus tempus blandit sem, id ornare augue iaculis quis.</p>\r\n\r\n<p>Curabitur et lacus venenatis, interdum mauris sit amet, maximus libero. Ut vehicula vulputate risus, sed congue lacus cursus ut. Nunc vel purus at mauris vulputate volutpat. Proin viverra ex non ipsum pretium dictum. Fusce et ornare erat. Praesent magna turpis, imperdiet vitae finibus quis, placerat ut neque. Sed ornare viverra mi eget faucibus. Etiam a magna odio.</p>\r\n', '', 'published'),
(45, 1, 'page', '2015-05-17 02:53:05', '2015-12-06 08:34:14', 'hubungi-kami', 'Contact Us', '<p>Hubungi kami bla bla bla<br />\r\n<br />\r\nDisini ada kolom untuk complain juga<br />\r\n<br />\r\ntinggal nambah kolomnya ituuu, ez</p>\r\n', '', 'published'),
(46, 1, 'menu', '2015-08-14 02:16:57', '2015-11-25 03:42:20', 'posts/manage/events', 'Events posts', 'Events', '', '1'),
(49, 1, 'menu', '2015-08-22 02:26:58', '2015-08-24 06:02:06', 'login', 'Login', 'icon-locked', '', '1'),
(50, 1, 'menu', '2015-08-22 02:36:01', NULL, 'dashboard', 'Dashboard', 'icon-home', '', '1'),
(51, 1, 'menu', '2015-08-22 02:37:53', '2015-09-02 04:35:23', 'logout', 'Logout', 'icon-locked', '', '1'),
(52, 1, 'menu', '2015-08-22 02:39:54', '2015-09-02 04:35:29', 'users/profile', 'Profile', 'icon-user-2', '', '1'),
(53, 1, 'menu', '2015-08-23 13:49:40', '2015-11-25 03:42:55', 'posts/manage/culinary', 'Culinary posts', 'Culinary', '', '1'),
(55, 1, 'post', '2015-08-23 17:14:29', NULL, 'permalink/percobaan-post', 'Percobaan Post', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Module</th>\r\n			<th>Webmaster</th>\r\n			<th>Administrator</th>\r\n			<th>Authenticated</th>\r\n			<th>Anonymous</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<th>admin-page</th>\r\n			<td>-ajax- | -read- | -</td>\r\n			<td>-read- | -ajax- | -</td>\r\n			<td>-read-ajax- | -</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>front-end</th>\r\n			<td>-read- | -</td>\r\n			<td>-read- | -</td>\r\n			<td>-read- | -</td>\r\n			<td>-read- | -</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>login</th>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-read- | -</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>menu</th>\r\n			<td>-access-all- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>page</th>\r\n			<td>-create-all-read-all-update-all-delete-all- | -access-all- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>permission</th>\r\n			<td>-access-all- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>post</th>\r\n			<td>-create-all-read-all-update-all-delete-all- | -access-all- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>post_type</th>\r\n			<td>-access-all- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>site</th>\r\n			<td>-edit- | -</td>\r\n			<td>-edit- | -</td>\r\n			<td>-</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<th>user</th>\r\n			<td>-access-all- | -</td>\r\n			<td>-access- | -</td>\r\n			<td>-access- | -</td>\r\n			<td>-</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Framework EMIF</p>\r\n\r\n<p><strong>Copyright &copy; 2015 <a href="http://creat-if.hmif.ub.ac.id">EMIF CREAT-IF</a></strong>&nbsp; All rights reserved.</p>\r\n', '', 'draft'),
(57, 1, 'post', '2015-08-23 17:21:07', '2015-09-22 15:08:25', 'permalink/percobaan-post', 'Percobaan Post', '<p>If specified, search will start this number of characters counted from the beginning of the string. If the value is negative, search will instead start from that many characters from the end of the string, searching backwards.</p>\r\n\r\n<h3>Return Values<a href="http://php.net/manual/en/function.strrpos.php#refsect1-function.strrpos-returnvalues"> &para;</a></h3>\r\n\r\n<p>Returns the position where the needle exists relative to the beginnning of the <code>haystack</code> string (independent of search direction or offset). Also note that string positions start at 0, and not 1.</p>\r\n\r\n<p>Returns <strong><code>FALSE</code></strong> if the needle was not found.</p>\r\n\r\n<p><strong>Warning</strong></p>\r\n\r\n<p>This function may return Boolean <strong><code>FALSE</code></strong>, but may also return a non-Boolean value which evaluates to <strong><code>FALSE</code></strong>. Please read the section on <a href="http://php.net/manual/en/language.types.boolean.php">Booleans</a> for more information. Use <a href="http://php.net/manual/en/language.operators.comparison.php">the === operator</a> for testing the return value of this function.</p>\r\n', '', 'published'),
(59, 1, 'post', '2015-08-27 08:12:11', '2015-09-22 14:40:32', 'permalink/16-rules-of-blog-writing-and-layout', '16 Rules of Blog Writing and Layout. Which Ones Are You Breaking?', '<p><img alt="rules of blog writing and layout" src="http://www.successfulblogging.com/wp-content/uploads/2015/02/16-Rules-5-1.png" style="height:300px; width:700px" /></p>\r\n\r\n<h2>Remember newspapers?</h2>\r\n\r\n<p>People used to get them delivered to their door and read them over breakfast. They&rsquo;re big, awkward to hold and they cover your fingers in black printer ink.</p>\r\n\r\n<p>Plus, getting them to your doorstep takes hours so, by the time you read a newspaper, the news isn&rsquo;t all that new. Newspapers are going out of business because their news cannot keep up with the 24/7 news cycle that is so prevalent today.</p>\r\n\r\n<p>Newspapers have their drawbacks but&nbsp;one thing they do right is make sure their stories are easy to read. By that, I mean how they actually format and layout the newspaper and each individual story. Of course, first newspapers hit you with <a href="http://www.successfulblogging.com/be-your-own-blog-title-generator/" target="_blank">a headline</a> that makes you really want to read more.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Something like&nbsp;this headline&nbsp;works wonders:</p>\r\n\r\n<h3><strong>THE KING OF POP IS DEAD!</strong> <strong>How he really died!</strong> <strong>10,000 pills in 6 months</strong></h3>\r\n\r\n<p>Sensational tabloids aside, the content in newspapers is usually good ~ the writing&rsquo;s high quality and they usually get their facts straight.</p>\r\n\r\n<p><strong>But quality content isn&rsquo;t all you expect when you buy a newspaper and it isn&rsquo;t enough for blog writing either.</strong></p>\r\n\r\n<p>All newspapers make sure their content is easy to read by constraining the width of their columns and that&rsquo;s what their readers expect.</p>\r\n\r\n<p>Blog writers need to do the same and format their blog posts so they&rsquo;re easy to read. <strong>L</strong><strong>ong narrow newspaper columns mean your eye can easily jump from the end of one line to the beginning of the next without losing its place</strong>.</p>\r\n\r\n<p>If the column&rsquo;s too wide readers will keep getting lost, unless they enlist their finger to help them keep track. Even if they do that they&rsquo;ll get frustrated and won&rsquo;t enjoy the reading experience.</p>\r\n\r\n<p>This is just one element of traditional media and legibility knowledge that we can use on our blogs or website layout. Newspapers follow set rules for the formatting and lay out their stories to make them easy to read and bloggers need to follow some too. Blog writing and formatting content for the Web is more complex than writing for print because how we read on a computer screen is different to how we read in print and more challenging.</p>\r\n\r\n<h2>Blog Rules are Based on Two Things:</h2>\r\n\r\n<p><strong>People skim read when they read things on-screen</strong></p>\r\n\r\n<p>A website or blog is missing the usual cues that let us know how long an article is. Pick up a book or cast your eye over a newspaper article, and you&rsquo;ll instantly be able to gauge how long it is and how long it will take to read. Online the only way to find that out is to scroll down to the end of the blog post and that&rsquo;s what most people do. While they&rsquo;re at it, they&rsquo;ll also try to scan read the post. A long body of text is scary.</p>\r\n\r\n<p>Even if the <a href="http://www.successfulblogging.com/blog-name-ideas/" target="_blank">headline appeals to them,</a> with no other clues about the content, people will be reluctant to start reading. By helping people scan your blog posts with a good layout and telling them more about what information they&rsquo;ll find in it you can entice them to read the post in full.</p>\r\n\r\n<p><strong>It&rsquo;s harder to read things on-screen than on print</strong></p>\r\n\r\n<p>Screen legibility is improving along with resolution and screen size but there are still some simple rules you need to know to help people read your blog more easily. If you want to make sure people enjoy reading your blog, tell their friends about it and subscribe then you need to make sure the very act of reading your blog is easy.&nbsp;<strong>No matter how great your blog content and blog writing is, if it&rsquo;s not easy to read, people won&rsquo;t enjoy it and won&rsquo;t come back for more.</strong></p>\r\n\r\n<h2>16 Rules of Blog Writing and Layout</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1. Format every blog post</strong></p>\r\n\r\n<p><a href="http://www.successfulblogging.com/wordpress-beginners-tutorial/" target="_blank">Careful formatting</a> will make your blog posts easier for people to scan. Write your posts with the page layout in mind or edit them to make sure they&rsquo;re well formatted for scan reading.</p>\r\n\r\n<p><strong>2. Constrain column width</strong></p>\r\n\r\n<p>Keep the blog post column width about 80 characters or less (including spaces) and your readers will thank you for it. Check out these before and after screen shots of Under the Mango Tree. I advised Stacyann to update her blog to make it easier to read and changing the column width for the main body of text was one of the first things we sorted out. Wide columns of text are an instant turn off and very hard to read. The difference is incredible and it&rsquo;s such a simple change.</p>\r\n\r\n<p><img alt="Rules of Blog Writing and Blog Post Formatting" src="http://www.successfulblogging.com/wp-content/uploads/2010/09/blog-writing-layout.jpg" style="height:137px; width:518px" /></p>\r\n\r\n<p><strong>3. Use Headers and Sub-headers</strong></p>\r\n\r\n<p>Headers and sub-headers will break up long blog posts, help people scan read your blog and convince them to read the post. Read How to Write Hypnotic Headlines to read more about the importance of headlines and headers for<a href="http://www.successfulblogging.com/blog-writing-magic-series-5-essential-posts/" target="_blank"> blog writing</a>.</p>\r\n\r\n<p><strong>4. Use lists</strong></p>\r\n\r\n<p>Numbered lists or bullet pointed lists help people scan blog posts fast and find the information they&rsquo;re looking for quickly.</p>\r\n\r\n<p><strong>5. Use punctuation</strong></p>\r\n\r\n<p>Use full stops, commas, dashes and colons to break up each paragraph into smaller pieces of information that make sense quickly. No one wants to read the same sentence several times to try to make sense of it. If you&rsquo;re not confident about punctuation keep sentences short. As you practice writing and start to improve you can experiment and lengthen your sentences, chucking in a long one here and there to keep things interesting for readers, and make sure they&rsquo;re really paying attention. Long sentences are fine but check that every sentence makes sense and the meaning is clear.</p>\r\n\r\n<p><strong>6. Short paragraphs</strong></p>\r\n\r\n<p>Because reading is harder online it&rsquo;s best to break text into manageable chunks. Paragraphs should be much shorter online than on paper with two to six sentences per paragraph a good guideline for blog posts.</p>\r\n\r\n<p><strong>7. Font type</strong></p>\r\n\r\n<p>Sans-serif fonts (without the squiggly bits) are generally supposed to be easier to read on-screen, in particular Verdana. Successful Blogging&nbsp;uses the sans-serif font Roboto&nbsp;(without the squiggly bits) which is also designed for easy reading on-screen.</p>\r\n\r\n<p><strong>8. Font size</strong></p>\r\n\r\n<p>Big is better. Teeny tiny writing is hard to read online, even for people with 20/20 vision like me. Make it bigger. Check out some of your favorite blogs, compare the font size they use and decide what works best for your readers. If they&rsquo;re older they might prefer even bigger text than the average blog reader.</p>\r\n\r\n<p><strong>9. Be bold</strong></p>\r\n\r\n<p>Don&rsquo;t overuse bold text or it loses its effectiveness but do <strong>use bold text to make a splash and highlight important sentences</strong> that will catch people&rsquo;s attention and draw them into, or on with, the blog post.&nbsp;</p>\r\n\r\n<p><img alt="Blog writing magic ang blog post formatting" src="http://www.successfulblogging.com/wp-content/uploads/2010/09/car.jpg" style="height:137px; width:518px" /></p>\r\n\r\n<p><strong>10. Drop the italics</strong></p>\r\n\r\n<p>Italics are hard to read in print. Couple that with on-screen reading already being challenging and banish italics from your blog writing. <em>I hate them. If you can avoid italics please do.</em></p>\r\n\r\n<p><strong>11. Capital letters</strong></p>\r\n\r\n<p>Use capitals for proper nouns and at the beginning of sentences but avoid writing all in capitals because it&rsquo;s harder to read. PLUS USING CAPITAL LETTERS CONSTANT IS THE ONLINE EQUIVALENT OF BEING SHOUTED AT. Sorry, just wanted to get the point across.</p>\r\n\r\n<p><strong>12. White space</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href="https://twitter.com/share?text=Readers+need+somewhere+to+rest+the+eye+and+a+good+blog+layout+leaves+plenty+of+blank+space.+&amp;url=http://bit.ly/1K6KfOZ&amp;via=sueannedunlevie" target="_blank">Readers need somewhere to rest the eye and a good blog layout leaves plenty of blank space. Click To Tweet</a> Make sure your blog isn&rsquo;t too busy or distracting and gives readers somewhere to rest their eye from time to time.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>13. Background color</strong></p>\r\n\r\n<p>Most blogs and websites get the contrast between text color and background color right, but make sure your blog background doesn&rsquo;t make the text hard to read. It makes me sad that a white background with black text has become the default for most blogs. Bright yellow text on a black background is easiest to read but that&rsquo;s a confrontational look. Dark text on a light background has a wider appeal but consider using another light color for the background as white gives off a harsh glare. There are plenty of choices which look good and are still easy to read but without the glare of white: try light grey, minty green or pale yellow.</p>\r\n\r\n<p><strong>14. Use images</strong></p>\r\n\r\n<p><a href="http://www.successfulblogging.com/wp-content/uploads/2010/10/blog-clothesline.jpg"><img alt="blog clothesline" src="http://www.successfulblogging.com/wp-content/uploads/2010/10/blog-clothesline-400x137.jpg" style="height:137px; width:400px" /></a></p>\r\n\r\n<p>Good use of images will draw readers in to your blog posts. Sometimes I read a post purely because I like the image. Ideally your images will add to your blog or emphasize your message. Even if they can&rsquo;t do that use them to break up text, draw your reader&rsquo;s eye down the page and reward them for reading and spending time on your blog. Some blogs like <a href="http://www.viperchill.com/" target="_blank">Viperchill</a> turn their headers and sub-headers into images which makes the text look more attractive and helps people scan read.</p>\r\n\r\n<p><strong>15. Be consistent</strong></p>\r\n\r\n<p>You don&rsquo;t know how readers found your blog. You can&rsquo;t be sure if they arrived straight at your latest post, on your about page or via an archived post. You can&rsquo;t know which order people will read your blog in so every post you write needs to tell the same story about you, your message, your blog and your values.</p>\r\n\r\n<p><strong>16. Tell a story</strong></p>\r\n\r\n<p>Speaking of stories, every blog post needs to have a beginning, a middle and an end. Think of it as an introduction, the main information and conclusion if you prefer. Even if you don&rsquo;t give use those sub-headings because, hopefully, you&rsquo;ve come up with hotter ones, do follow the convention to avoid confusing your readers.</p>\r\n\r\n<h2>Blog Writing Rules Wrap Up</h2>\r\n\r\n<p>You&rsquo;ve probably noticed traditional media like newspapers are struggling and the Internet&rsquo;s taking over. It&rsquo;s amazing to think that in less than 10 years you may not be able to buy the L.A. Times or whatever your favorite newspaper is. Instead, you&rsquo;ll download the thing to your iPad in a nanosecond and read it on the go. No dirty fingers, no struggling to read text that runs over a crease and no pages blowing down the street. I love newspapers, and I&rsquo;ll miss them, but I look forward to the day when every blog is formatted and laid out so it&rsquo;s as easy to read as one of those old newspapers. &nbsp;<strong>Have I missed any blog writing and formatting rules?</strong></p>\r\n\r\n<h2>Blog Writing Magic Practice</h2>\r\n\r\n<p>Pick one of your favorite old blog posts and rewrite it or revise the layout for easy reading on the web. Give it a new headline and repost it. Even if the <a href="http://www.successfulblogging.com/where-to-start-a-blog/" target="_blank">blog content </a>is the same, with a snappy new <a href="http://www.successfulblogging.com/marketing-strategies-101/">headline</a>, some calls to action and some smart formatting, it should get more readers than it did the first time round.</p>\r\n\r\n<h3>Here&rsquo;s what to do next&hellip;</h3>\r\n\r\n<p>If you want to get an additional free guide to blog writing, I&rsquo;ve got something special for you.</p>\r\n\r\n<p>It&rsquo;s a book with more blog formatting and writing guidelines so you know the exact steps to take to write great blog posts that turn into more readers and more subscribers.</p>\r\n\r\n<p>Click on the picture below to download the free PDF guidebook. Get your free guide today:</p>\r\n\r\n<p><a href="https://my.leadpages.net/leadbox/14ff4e5f3f72a2%3A9446b61c0/5867128531976192/" target="_blank"><img alt="" src="https://lh6.ggpht.com/BMzJoyJQGntbDOFVF0N8_VzXLIrtV44szzqSSO5knRYMA481A47xid1bBQmfxzbRRB6oYlCPVi7Y4N1oKfuldw=s0" /></a></p>\r\n\r\n<p><img alt="signature" src="http://www.successfulblogging.com/wp-content/uploads/2015/04/SB-Post-Signature.png" /></p>\r\n\r\n<p><img alt="Sue Anne Dunlevie" src="http://www.successfulblogging.com/wp-content/uploads/2014/06/Sue-Anne-Dunlevie-smiling-smaller.jpg" /> <strong>About <a href="http://www.successfulblogging.com/author/sueanned/">Sue Anne Dunlevie</a></strong><br />\r\nSue Anne Dunlevie helps beginning bloggers succeed online. She works one on one with her clients to give them the tools to achieve their goals. You can find Sue on Facebook, Twitter and Google+.</p>\r\n\r\n<p><a href="mailto:sueannedunlevie@gmail.com">Email</a>&nbsp;&bull;&nbsp;<a href="skype:sueannedunlevie?call" target="_blank">Skype </a>&nbsp;&bull;&nbsp;<a href="https://www.facebook.com/successfulblogging?ref=hl" target="_blank">Facebook </a>&nbsp;&bull;&nbsp;<a href="https://twitter.com/sueannedunlevie" target="_blank">Twitter</a>&nbsp;&bull;&nbsp;<a href="https://plus.google.com/+SueAnneDunlevie" target="_blank">Google</a>&nbsp;&bull;&nbsp;<a href="http://www.pinterest.com/sueannedunlevie/" target="_blank">Pinterest</a>&nbsp;&bull;&nbsp;</p>\r\n\r\n<p><a href="https://twitter.com/share?original_referer=/&amp;text=16+Rules+of+Blog+Writing+and+Layout.+Which+Ones+Are+You+Breaking%3F&amp;url=http://bit.ly/1K6KfOZ&amp;via=sueannedunlevie" target="_blank">Tweet265</a></p>\r\n\r\n<p>Pin1.6K</p>\r\n\r\n<p><a href="http://www.facebook.com/share.php?u=http://bit.ly/1K6KidG" target="_blank">Share100</a></p>\r\n\r\n<p><a href="https://plus.google.com/share?url=http://bit.ly/1K6KfOY" target="_blank">+139</a></p>\r\n\r\n<p>Total Shares 2.0K</p>\r\n<!--<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"\r\n            xmlns:dc="http://purl.org/dc/elements/1.1/"\r\n            xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/">\r\n        <rdf:Description rdf:about="http://www.successfulblogging.com/16-rules-of-blog-writing-which-ones-are-you-breaking/"\r\n    dc:identifier="http://www.successfulblogging.com/16-rules-of-blog-writing-which-ones-are-you-breaking/"\r\n    dc:title="16 Rules of Blog Writing and Layout. Which Ones Are You Breaking?"\r\n    trackback:ping="http://www.successfulblogging.com/16-rules-of-blog-writing-which-ones-are-you-breaking/trackback/" />\r\n</rdf:RDF>-->\r\n<style type="text/css">[href^="http://www.faceporn.net/free?"]\r\n{display:none !important;}\r\n</style>\r\n', '<strong>25</strong>  Sept, 2015', 'published'),
(60, 1, 'post', '2015-08-28 01:50:27', '2015-08-28 02:36:51', 'permalink/hello-world', 'Hello Word!', '<p>Hello world edited!!</p>\r\n', '', 'draft'),
(61, 1, 'page', '2015-08-29 18:40:41', NULL, 'complaint', 'Complaint', '<h2>Hai mahasiswa informatika!</h2>\r\n\r\n<p>Sampaikan aspirasi kalian untuk Eksekutif Mahasiswa Informatika agar dapat membantu teman-teman lebih baik kedepannya :)</p>\r\n', '', 'published'),
(62, 1, 'comment', '2015-08-30 05:15:28', '2015-09-01 23:55:59', 'posts/view/34#comment-62', 'Comment pertama', '                Percobaan bismillah    --->alhamdulillah        ', '', 'published'),
(63, 1, 'comment', '2015-08-30 05:26:14', '2015-09-01 23:58:32', 'posts/view/34#comment-63', 'Anaknya comment', '                Anaknya comment pastilah bisa                        ', '', 'published'),
(64, 1, 'comment', '2015-08-30 05:27:42', '2015-08-30 05:27:42', 'posts/view/34#comment-64', 'Anaknya comment', 'percobaan anak comment', '', 'published'),
(65, 1, 'comment', '2015-08-30 06:07:20', '2015-09-02 05:25:38', 'posts/view/34#comment-65', 'Anaknya anaknya comment', '                                Anaknya anaknya comment coba2                  \r\ndiedit sangar bgt', '', 'published'),
(66, 1, 'comment', '2015-08-30 06:07:38', '2015-08-30 06:07:38', 'posts/view/34#comment-66', '', 'wajwkakwkaw', '', 'published'),
(67, 1, 'comment', '2015-09-02 00:07:01', '2015-09-02 00:07:01', 'posts/view/34#comment-67', 'Lorem Lispum', 'lorem dolor dolor sednten', '', 'published'),
(68, 1, 'comment', '2015-09-02 00:33:55', '2015-09-02 00:33:55', 'posts/view/34#comment-68', 'pager itu penting', 'percobaan pager', '', 'published'),
(69, 1, 'menu', '2015-09-02 03:48:26', '2015-12-06 08:32:51', 'events', 'event batu', 'Event', '', '1'),
(70, 1, 'menu', '2015-09-02 03:49:48', '2015-12-06 08:33:07', 'destinations', 'destinasi wisata batu', 'Destinasi', '', '1'),
(71, 1, 'page', '2015-09-02 04:08:08', NULL, 'alumni', 'Alumni', '<p>Ini adalah portal alumni,<br />\r\n<br />\r\nSiapakah alumni&nbsp; HMIF??<br />\r\n<br />\r\nAda posts kah disini??<br />\r\n<br />\r\nLink meuju forum IKAMIF</p>\r\n', '', 'published'),
(72, 1, 'page', '2015-09-02 04:09:05', '2015-11-25 03:44:19', 'culinary', 'Culinary', '<p>Ini adalah portal culinary</p>\r\n', '', 'published'),
(73, 1, 'page', '2015-09-02 04:11:01', '2015-09-22 13:34:39', 'apa-itu-hmif', 'Apa Itu HMIF', '<p>Himpunan Mahasiswa Informatika Program Teknologi Inforamsi &amp; Ilmu Komputer Universitas Brawijaya (HMIF PTIIK UB) adalah organisasi yang mewadahi, menaungi dan beranggotakan seluruh mahasiswa Informatika PTIIK UB. HMIF bertujuan untuk mewujudkan kedaulatan mahasiswa Informatika, mengembangkan kemampuan keprofesian dan non-keprofesian dan membentuk mahasiswa yang beriman dan bertakwa kepada Tuhan YME, memiliki wawasan yang luas, kecendekiawanan, integritas, kepribadian, kepedulian sosial</p>\r\n\r\n<p>Dibawah naungan HMIF PTIIK UB terdapat dua lembaga pengurus yaitu Eksekutif Mahasiswa Informatika &amp; Badan Perwakilan Mahasiswa Informatika</p>\r\n', '', 'published'),
(74, 1, 'page', '2015-09-02 04:12:41', '2015-09-22 13:35:26', 'kami-emif', 'Kami adalah EMIF', '<p>Eksekutif Mahasiswa Informatika adalah lembaga yang memiliki fungsi sebagai badan eksekutif</p>\r\n', '', 'published'),
(75, 1, 'page', '2015-09-02 04:13:49', NULL, 'sejarah', 'Sejarah HMIF', '<p>Sejarah<br />\r\n<br />\r\nsekilas cerita tentang HMIF</p>\r\n\r\n<p>yang menarik kuduan</p>\r\n', '', 'published'),
(76, 1, 'page', '2015-09-02 04:15:59', '2015-11-25 03:45:09', 'destinations', 'Destinations', '<p>post destinasi</p>\r\n', '', 'published'),
(77, 1, 'page', '2015-09-02 04:16:35', '2015-11-25 03:41:56', 'events', 'Events', '<p>Isinya post2 mengenai event terbaru</p>\r\n', '', 'published'),
(78, 1, 'page', '2015-09-02 04:48:23', '2015-09-02 04:49:39', 'not-found', 'Halaman yang anda cari tidak ditemukan!', '<pre>\r\nMungkin anda mengikuti link yang salah..\r\nAnda akan kembali ke halaman utama dalam beberapa detik..</pre>\r\n', '', 'published'),
(79, 1, 'page', '2015-09-02 04:57:26', NULL, 'no-permission', 'Anda tidak memiliki akses untuk halaman tersebut!', '<pre>\r\nMungkin anda telah mengikuti link yang tidak valid, atau menjalankan prosedur yang tidak sesuai.\r\nHal tersebut adalah kesalahan kami, mohon mengisi laman berikut untuk membantu kami menemukan solusinya..</pre>\r\n', '', 'published'),
(80, 1, 'comment', '2015-09-02 05:20:03', '2015-09-02 05:20:03', 'posts/view/34#comment-80', 'percobaan', 'nambah jumlah komen', '', 'published'),
(81, 1, 'comment', '2015-09-02 05:26:13', '2015-09-02 05:26:13', 'posts/view/34#comment-81', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(82, 1, 'comment', '2015-09-02 05:26:17', '2015-09-02 05:26:18', 'posts/view/34#comment-82', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(83, 1, 'comment', '2015-09-02 05:26:22', '2015-09-02 05:26:22', 'posts/view/34#comment-83', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(84, 1, 'comment', '2015-09-02 05:26:23', '2015-09-02 05:26:23', 'posts/view/34#comment-84', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(85, 1, 'comment', '2015-09-02 05:26:30', '2015-09-02 05:26:30', 'posts/view/34#comment-85', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(86, 1, 'comment', '2015-09-02 05:26:30', '2015-09-02 05:26:30', 'posts/view/34#comment-86', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(87, 1, 'comment', '2015-09-02 05:26:31', '2015-09-02 05:26:31', 'posts/view/34#comment-87', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(88, 1, 'comment', '2015-09-02 05:30:25', '2015-09-02 05:30:25', 'posts/view/34#comment-88', 'last mod', 'Selanjutnya tinggal menampilkan date created atau last mod', '', 'published'),
(94, 1, 'page', '2015-09-22 13:29:51', NULL, 'produk', 'Produk', '<p>List produk</p>\r\n', '', 'published'),
(95, 1, 'page', '2015-09-22 13:38:05', NULL, 'bpmif', 'Badan Perwakilan Mahasiswa', '<p>Badan Perwakilan Mahasiswa Informatika adalah lembaga yang memiliki fungsi sebagai badan legislatif</p>\r\n', '', 'published'),
(97, 1, 'page', '2015-09-22 13:47:42', NULL, 'beasiswa', 'Beasiswa', '<p>Isi post mengenai beasiswa dibawah</p>\r\n', '', 'published'),
(98, 1, 'page', '2015-09-22 13:49:30', '2015-10-10 08:16:21', 'ikamif', 'Alumni', '<p>Coming Soon!</p>\r\n', '', 'Publish'),
(99, 1, 'page', '2015-09-22 13:50:46', '2015-10-10 08:16:46', 'forum', 'Forum HMIF', '<p>Menuju FORUM HMIF, Coming soon!</p>\r\n', '', 'Publish'),
(100, 1, 'menu', '2015-09-22 14:21:10', '2015-12-06 08:10:46', 'login', 'login', 'Login', '', '1'),
(101, 1, 'menu', '2015-09-22 14:21:44', '2015-12-06 08:11:07', 'register', 'daftar', 'Daftar', '', '1'),
(102, 1, 'menu', '2015-09-22 14:22:25', '2015-12-06 08:11:28', 'events', 'event', 'Event', '', '1'),
(103, 1, 'menu', '2015-09-22 14:23:09', '2015-12-06 08:12:29', 'culinary', 'kuliner', 'Kuliner', '', '1'),
(104, 1, 'menu', '2015-09-22 14:23:43', '2015-12-06 08:12:51', 'destinations', 'destinasi', 'Destinasi', '', '1'),
(105, 1, 'menu', '2015-09-22 14:24:17', '2015-12-06 08:13:31', 'tentang-kami', 'tentang kami', 'Tentang', '', '1'),
(106, 1, 'post', '2015-09-22 15:14:56', '2015-09-22 15:54:23', 'permalink/daftar-ulang-2015', 'Daftar Ulang Semester Ganjil', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo velit ut vulputate molestie. ehem</p>\n', '', 'published'),
(107, 1, 'post', '2015-09-22 15:16:06', NULL, 'permalink/daftar-ulang-genap-2015', 'Daftar Ulang Semester Genap', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo velit ut vulputate molestie.</p>\r\n', '', 'published'),
(108, 1, 'post', '2015-09-22 15:17:52', NULL, 'permalink/beasiswa-artajasa', 'Penawaran Beasiswa PT. Artajasa Tahun 2015', '<p>Sesuatu deh</p>\r\n', '06 September 2015', 'published'),
(109, 1, 'post', '2015-09-22 15:21:10', '2015-09-22 18:16:36', 'permalink/produk-cms', 'Produk pertama CMS', '<p>ini produk cms sangar lah,<br />\r\nversi kemarin bisa didownload di <a href="http://codemastery.net/frame_work.zip">http://codemastery.net/frame_work.zip</a>\r\n<br />untuk database disini versi kemarin bisa didownload <a href="http://codemastery.net/frame_work/emif_framework.sql">disini</a></p>\r\n\r\n<p>untuk info lebih lanjut hubungi maul</p>\r\n', '', 'published'),
(110, 1, 'menu', '2015-09-22 15:43:48', '2015-12-06 08:32:24', 'login', 'Masuk kedalam sistem', 'Login', '', '1'),
(111, 1, 'comment', '2015-09-22 17:43:01', NULL, '', '', 'wkwk lek aku yo isok komen', '', 'published'),
(112, 1, 'comment', '2015-09-22 17:47:03', '2015-09-22 17:47:03', 'posts/view/38#comment-112', '', 'jkasdaksjd', '', 'published'),
(113, 1, 'comment', '2015-09-22 17:47:14', '2015-09-22 17:47:14', 'posts/view/38#comment-113', '', 'loh kok mau gak isok zzzz', '', 'published'),
(114, 1, 'comment', '2015-10-07 02:50:29', '2015-10-07 02:50:29', 'permalink/beasiswa-artajasa#comment-114', '', 'sadsda', '', 'published'),
(115, 1, 'comment', '2015-10-07 02:50:33', '2015-10-07 02:50:33', 'permalink/beasiswa-artajasa#comment-115', '', 'sdfsdf', '', 'published'),
(116, 1, 'comment', '2015-10-07 02:50:42', '2015-10-07 02:50:42', 'permalink/beasiswa-artajasa#comment-116', '', 'asda', '', 'published'),
(117, 1, 'comment', '2015-10-07 02:50:50', '2015-10-07 02:50:50', 'permalink/beasiswa-artajasa#comment-117', '', 'asdasd', '', 'published'),
(118, 1, 'comment', '2015-10-07 02:51:07', '2015-10-07 02:51:07', 'permalink/beasiswa-artajasa#comment-118', '', 'sdasd\r\n', '', 'published'),
(119, 1, 'comment', '2015-10-10 03:04:15', '2015-10-10 03:04:15', 'permalink/daftar-ulang-genap-2015#comment-119', '', 'Quee sir amet!', '', 'published'),
(120, 1, 'menu', '2015-10-10 03:07:36', '2015-12-06 08:37:04', 'dashboard', 'Halaman admin', 'Dashboard', '', '1'),
(121, 1, 'comment', '2015-10-10 03:11:10', '2015-10-10 03:11:10', 'permalink/daftar-ulang-genap-2015#comment-121', '', 'asd', '', 'published'),
(122, 1, 'comment', '2015-10-10 03:12:31', '2015-10-10 03:12:31', 'permalink/daftar-ulang-genap-2015#comment-122', '', '', '', 'published'),
(124, 1, 'comment', '2015-10-10 08:06:34', '2015-10-10 08:06:34', 'contact-us#comment-124', 'sesuatu', 'Apakah hmif itu?', '', 'unverified'),
(125, 1, 'comment', '2015-10-10 08:13:51', '2015-10-11 11:33:31', 'contact-us#comment-125', 'coba', 'kapan desain web hmif selesai?', '', 'published'),
(127, 1, 'comment', '2015-10-11 08:12:34', '2015-10-11 08:12:35', 'contact-us#comment-127', 'Hemm sesuatu', 'Apakah ini verifiable?', '', 'unverified'),
(128, 1, 'comment', '2015-10-14 09:59:14', '2015-10-14 09:59:14', 'permalink/daftar-ulang-2015#comment-128', '', 'sfsdf', '', 'published'),
(129, 1, 'menu', '2015-12-06 08:14:15', NULL, 'ketentuan', 'ketentuan', 'Ketentuan', '', '1'),
(131, 1, 'menu', '2015-12-06 08:21:55', '2015-12-06 08:23:06', 'oauth/twitter', 'login dengan twitter', 'Twitter', '', '1'),
(132, 1, 'menu', '2015-12-06 08:22:54', NULL, 'oauth/facebook', 'login dengan facebook', 'Facebook', '', '1'),
(133, 1, 'menu', '2015-12-06 08:23:46', '2015-12-06 08:24:56', 'oauth/google', 'login dengan Google+', 'Google+', '', '1'),
(134, 1, 'menu', '2015-12-06 08:24:49', NULL, 'https://twitter.com/batutrip', 'twitter', '@batutrip', '', '1'),
(135, 1, 'menu', '2015-12-06 08:25:57', NULL, 'https://instagram.com/batutrip', 'akun instagram batutrip', 'instagram/batutrip', '', '1'),
(136, 1, 'menu', '2015-12-06 08:26:40', '2015-12-06 08:26:47', 'https://facebook.com/batutrip', 'akun facebook batutrip', 'fb/batutrip', '', '1'),
(137, 1, 'menu', '2015-12-07 03:04:47', '2015-12-07 09:40:57', 'trips/view', 'rencanakan perjalanan anda', 'My Trip', '', '1'),
(138, 1, 'menu', '2015-12-07 03:06:47', '2015-12-07 09:49:43', 'trips', 'Daftar Trip', 'Trips', '', '1'),
(140, -1, 'trip', '2015-12-18 01:34:38', '2015-12-18 01:34:38', 'trips/view/140', 'My Trip', '', '', 'draft-anon'),
(141, 1, 'trip', '2015-12-18 08:49:28', '2015-12-18 08:49:28', 'trips/view/141', 'My Trip', '', '', 'draft-anon');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL,
  `cover` varchar(80) NOT NULL,
  `commentable` tinyint(1) DEFAULT NULL,
  `comment_count` int(11) NOT NULL,
  `view` varchar(50) NOT NULL,
  `post_category` int(11) DEFAULT NULL,
  PRIMARY KEY (`page_id`),
  KEY `post_category` (`post_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `cover`, `commentable`, `comment_count`, `view`, `post_category`) VALUES
(45, '', 1, 4, 'front/contacts', NULL),
(72, '', NULL, 0, 'front/post_category', 7),
(76, '', NULL, 0, 'front/post_category', 2),
(77, '', NULL, 0, 'front/post_category', 3),
(78, '', NULL, 0, 'front/not_found', NULL),
(79, '', 1, 0, 'front/no_permission', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL,
  `post_type_id` int(11) DEFAULT NULL,
  `location` varchar(220) DEFAULT NULL,
  `preview` text NOT NULL,
  `thumbnail` varchar(220) DEFAULT 'http://southasia.oneworld.net/ImageCatalog/no-image-icon/image',
  `cover` varchar(220) DEFAULT NULL,
  `permalink` varchar(80) DEFAULT NULL,
  `visited_last` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `visited_count` int(11) NOT NULL,
  `coordinate` varchar(45) DEFAULT NULL,
  `public` smallint(6) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `detail` varchar(140) NOT NULL,
  `akomodasi` varchar(200) NOT NULL,
  `harga` varchar(300) NOT NULL,
  `review` text NOT NULL,
  `trivia` text NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `permalink` (`permalink`),
  KEY `node_id` (`post_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_type_id`, `location`, `preview`, `thumbnail`, `cover`, `permalink`, `visited_last`, `visited_count`, `coordinate`, `public`, `featured`, `subtitle`, `detail`, `akomodasi`, `harga`, `review`, `trivia`) VALUES
(33, 2, 'Jalan Supados Rahmat 120', 'In the lorem lipsum var aguer tag as wal afiat', 'http://localhost/frame_work/assets/images/news-4.jpg', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', NULL, '2015-12-18 00:42:33', 26, '-0.025824, 109.337739', 1, 1, '', '', '', '', '', ''),
(34, 3, '', 'Lorep lispusum asum susum sumsum', 'false', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'campaign', '2015-12-18 00:42:39', 123, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(35, 3, '', '', NULL, 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', NULL, '2015-12-18 00:42:40', 1, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(36, 3, '', 'Phasellus lobortis arcu in quam accumsan imperdiet. Ut sed nibh eu lacus consectetur aliquam nec at mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse vulputate, ante in malesuada ullamcorper, leo arcu hendrerit arcu, nec tempor neque leo nec ligula.', '', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'hardship-from-developer', '2015-12-18 00:42:41', 4, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(37, 3, '', 'Proin sapien arcu, feugiat at velit vitae, vestibulum congue est. Praesent dolor est, vehicula a suscipit vitae, placerat non nisl. Fusce sed suscipit tortor. Aenean aliquam eu velit eu euismod. Nulla faucibus tellus ex, sit amet fermentum sem laoreet in. Nulla interdum sapien et metus vulputate, ultricies malesuada tortor ultrices. Cras condimentum nisi purus, ut rhoncus turpis laoreet at. Proin accumsan, sem vel porttitor porta, risus erat pulvinar lectus, porta auctor quam neque et elit. In malesuada massa id mi ornare lobortis. ', '', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'last-man', '2015-12-18 00:42:42', 2, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(38, 3, '', '', NULL, 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', NULL, '2015-12-18 00:42:43', 41, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(41, 2, 'Jalan Ambarawa 123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget vehicula sem. Donec vel tincidunt urna. Vestibulum sit amet sapien ut diam rhoncus ornare.', 'http://localhost/frame_work/assets/images/news-2.jpg', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', NULL, '2015-12-18 00:42:43', 12, '-0.025824, 109.337739', 1, 1, '', '', '', '', '', ''),
(57, 2, 'Jalan Sugino Tego', 'Returns the position where the needle exists relative to the beginnning of the haystack string (independent of search direction or offset). Also note that string positions start at 0, and not 1.', 'http://localhost/frame_work/assets/images/news-1.jpg', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'percobaan-post', '2015-12-18 00:42:44', 1, '-0.025824, 109.337739', 1, 1, '', '', '', '', '', ''),
(59, 3, '', 'But quality content isn’t all you expect when you buy a newspaper and it isn’t enough for blog writing either.\r\nAll newspapers make sure their content is easy to read by constraining the width of their columns and that’s what their readers expect.', 'false', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', '16-rules-of-blog-writing-and-layout', '2015-12-18 00:42:45', 79, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', ''),
(60, 2, 'Jalan Mahmudi Gumilang', 'Hello wew..', NULL, 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'hello-world', '2015-12-18 00:42:45', 5, '-0.025824, 109.337739', 0, 0, '', '', '', '', '', ''),
(106, 7, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo velit ut vulputate molestie.', '', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'daftar-ulang-2015', '2015-12-18 00:42:47', 6, '-0.025824, 109.337739', 1, 1, '', '', '', '', '', ''),
(107, 7, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo velit ut vulputate molestie.', '', 'http://www.pontianakite.com/storage/destinasi/96da2f590cd7246bbde0051047b0d6f7c51ce410c124a10e0db5e4b97fc2af39/49f501cf0ae1123788335d2331478d26.jpg', 'daftar-ulang-genap-2015', '2015-12-18 00:42:49', 29, '-0.025824, 109.337739', 1, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_fav`
--

CREATE TABLE IF NOT EXISTS `post_fav` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE IF NOT EXISTS `post_types` (
  `post_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(30) NOT NULL,
  `content_type` varchar(30) NOT NULL,
  `commentable` tinyint(1) NOT NULL,
  `taggable` tinyint(1) NOT NULL,
  `rateable` tinyint(1) NOT NULL,
  `view` varchar(50) NOT NULL,
  PRIMARY KEY (`post_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `post_types`
--

INSERT INTO `post_types` (`post_type_id`, `post_type`, `content_type`, `commentable`, `taggable`, `rateable`, `view`) VALUES
(2, 'Destinations', 'Post and Image', 0, 1, 0, 'front/campaign'),
(3, 'Events', 'Post and Image', 0, 1, 0, 'front/campaign'),
(7, 'Culinary', 'Post and Image', 0, 1, 0, 'front/campaign');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Webmaster'),
(2, 'Administrator'),
(3, 'Authenticated'),
(4, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE IF NOT EXISTS `role_permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module` varchar(30) NOT NULL,
  `permission` varchar(80) NOT NULL,
  PRIMARY KEY (`role_id`,`module`,`permission`),
  UNIQUE KEY `permission_id` (`permission_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`permission_id`, `role_id`, `module`, `permission`) VALUES
(1, 1, 'admin-page', '-read-'),
(3, 1, 'permission', '-access-all-'),
(4, 2, 'admin-page', '-read-'),
(7, 4, 'login', '-read-'),
(8, 1, 'front-end', '-read-'),
(10, 2, 'front-end', '-read-'),
(11, 3, 'front-end', '-read-'),
(12, 4, 'front-end', '-read-'),
(14, 1, 'menu', '-access-all-'),
(15, 1, 'post', '-access-all-'),
(17, 1, 'post_type', '-access-all-'),
(18, 1, 'site', '-edit-'),
(19, 2, 'site', '-edit-'),
(21, 1, 'user', '-access-all-'),
(22, 2, 'user', '-access-'),
(24, 1, 'page', '-access-all-'),
(26, 1, 'page', '-create-all-read-all-update-all-delete-all-'),
(27, 1, 'post', '-create-all-read-all-update-all-delete-all-'),
(28, 1, 'admin-page', '-ajax-'),
(30, 2, 'admin-page', '-ajax-'),
(33, 1, 'comment', '-create-all-read-all-update-all-delete-all-'),
(34, 2, 'comment', '-create-all-read-all-update-all-delete-all-'),
(35, 2, 'menu', '-access-all-'),
(36, 2, 'page', '--create-all-read-all-update-all-delete-all--'),
(37, 2, 'page', '-access-all-'),
(38, 2, 'post', '-access-all-'),
(39, 2, 'post', '-create-all-read-all-update-all-delete-all-'),
(40, 2, 'post_type', '-access-all-'),
(41, 3, 'comment', '-create-read-update-delete-'),
(42, 4, 'comment', '-read-'),
(43, 3, 'page', '-read-'),
(44, 4, 'page', '-read-'),
(45, 3, 'post', '-read-'),
(46, 4, 'post', '-read-'),
(47, 3, 'user', '-access-'),
(48, 3, 'admin-page', '-read-'),
(49, 1, 'trip', '-create-all-read-all-update-all-delete-all-'),
(50, 2, 'trip', '-create-all-read-all-update-all-delete-all-'),
(51, 3, 'trip', '-create-read-update-delete-');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `primary` int(11) NOT NULL DEFAULT '1',
  `site_name` varchar(225) NOT NULL,
  `site_title` varchar(225) NOT NULL,
  `site_url` varchar(225) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `date_format` varchar(20) NOT NULL,
  `rows_per_page` int(11) NOT NULL,
  PRIMARY KEY (`primary`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`primary`, `site_name`, `site_title`, `site_url`, `site_logo`, `date_format`, `rows_per_page`) VALUES
(1, 'Batu Trip', 'Batutrip Planner', 'http://hmif.ub.ac.id', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE IF NOT EXISTS `trips` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `people_count` int(11) NOT NULL,
  `day_count` int(11) NOT NULL,
  PRIMARY KEY (`trip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `people_count`, `day_count`) VALUES
(140, 0, 0),
(141, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(80) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `website` varchar(225) DEFAULT NULL,
  `reputation` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL,
  `uri` varchar(80) NOT NULL,
  `pict` varchar(80) NOT NULL,
  `gravatar` varchar(300) DEFAULT NULL,
  `bio` text NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `name`, `username`, `pass`, `email`, `no_telp`, `website`, `reputation`, `role_id`, `uri`, `pict`, `gravatar`, `bio`, `status`) VALUES
(-1, '2015-10-10 06:57:12', 'Anonymous', 'anonymous', '294de3557d9d00b3d2d8a1e6aab028cf', 'anon@codemastery.net', '08971238788', NULL, -9999, 4, '-', '-', NULL, '', 'non-active'),
(1, '2015-04-18 09:09:31', 'Maulana', 'maulcux', 'c50fe8f480de05e96e96682e5a559900', 'maulcux@gmail.com', '', NULL, 0, 1, 'users/profile/maulcux', 'assets/images/users/1.jpg', NULL, '', 'active'),
(2, '2015-09-02 06:11:42', 'Pengkom Ceria', 'pengkom', '3416ebd4264688ea76e79997f3378733', 'pengkom@codemastery.net', '', NULL, 0, 2, 'users/profile/pengkom', 'assets/images/users/1.jpg', NULL, '', 'active'),
(3, '2015-09-22 15:36:50', 'emif UB', 'emif', 'eb8e00577d6af44104611efdbc775e1b', 'emif@codemaster.net', '', NULL, 0, 2, 'users/profile/emif', 'assets/images/users/1.jpg', NULL, '', 'active'),
(4, '2015-10-11 08:20:23', 'maulana', 'maul', 'c50fe8f480de05e96e96682e5a559900', 'me_ula@ymail.com', '', NULL, 0, 3, 'users/profile/maul', 'assets/images/users/default.jpg', NULL, '', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_trip`
--
ALTER TABLE `detail_trip`
  ADD CONSTRAINT `detail_trip_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`trip_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_trip_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_5` FOREIGN KEY (`menu_id`) REFERENCES `nodes` (`node_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nodes`
--
ALTER TABLE `nodes`
  ADD CONSTRAINT `nodes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `nodes` (`node_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_4` FOREIGN KEY (`post_id`) REFERENCES `nodes` (`node_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_6` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`post_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `nodes` (`node_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
