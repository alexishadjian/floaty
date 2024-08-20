-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 06, 2023 at 06:36 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `6010a_floaty`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`) VALUES
(1, 'Site title', 'Floaty');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `slug`, `image`, `date`) VALUES
(10, 'Article 1', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-1', 'yatch2.jpg', '2023-04-27 17:51:16'),
(12, 'Article 2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-2', 'boat.jpg', '2023-04-27 17:51:16'),
(22, 'Article 3', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-3', 'voilier1.jpg', '2023-04-27 17:51:16'),
(23, 'Article 4', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-4', '', '2023-04-27 17:51:16'),
(164, 'Article 5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-5', '', '2023-05-15 19:05:27'),
(165, 'Article 6', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-6', '', '2023-05-15 19:05:44'),
(166, 'Article 7', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'article-7', '', '2023-05-15 19:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `content`, `slug`, `image`, `date`, `price`) VALUES
(9, 'Yacht', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus imperdiet est at porta. Etiam fringilla imperdiet nibh, vitae posuere risus tempus sed. Mauris vel molestie est, nec aliquam mauris. Mauris nisl nibh, imperdiet non urna dapibus, consectetur blandit mauris. Nulla tempor massa arcu, eget varius massa luctus nec. Integer ornare metus ante, nec pulvinar nulla mattis vehicula. Vestibulum euismod augue ac rutrum tincidunt. Nulla facilisi. Proin eu pulvinar nisi, ut finibus dolor. Nullam scelerisque, nunc nec porta vulputate, ipsum felis interdum massa, sit amet congue ipsum magna ac nisl. Nunc pharetra vehicula odio, a volutpat risus commodo nec. Nulla eget ex vitae elit vehicula feugiat at sed orci. In elementum enim mi, nec tempus arcu vulputate aliquam.\r\n\r\nSed ultricies diam eu ante lacinia, eget dictum tellus lacinia. Nam sit amet lacinia augue, vitae pellentesque est. In ac tincidunt ipsum. Integer nec libero sagittis, ultrices ex ac, sollicitudin metus. Maecenas viverra libero ac quam pulvinar, eget lacinia leo dignissim. In metus justo, aliquet sit amet orci eget, facilisis egestas tellus. Aliquam tellus ipsum, cursus sit amet felis at, pharetra placerat mauris. Mauris urna nibh, imperdiet ut interdum at, tempor vitae lorem. Morbi lacus ante, condimentum eget lorem nec, volutpat egestas felis. Praesent nec purus iaculis dolor aliquam efficitur. Mauris finibus risus volutpat viverra euismod. Aliquam elementum laoreet sapien ac commodo. Nulla facilisi. Etiam ac lorem ut lacus semper convallis.', 'yacht', '', '2023-05-14 21:02:37', '10.000.000'),
(10, 'Yacht de luxe', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus imperdiet est at porta. Etiam fringilla imperdiet nibh, vitae posuere risus tempus sed. Mauris vel molestie est, nec aliquam mauris. Mauris nisl nibh, imperdiet non urna dapibus, consectetur blandit mauris. Nulla tempor massa arcu, eget varius massa luctus nec. Integer ornare metus ante, nec pulvinar nulla mattis vehicula. Vestibulum euismod augue ac rutrum tincidunt. Nulla facilisi. Proin eu pulvinar nisi, ut finibus dolor. Nullam scelerisque, nunc nec porta vulputate, ipsum felis interdum massa, sit amet congue ipsum magna ac nisl. Nunc pharetra vehicula odio, a volutpat risus commodo nec. Nulla eget ex vitae elit vehicula feugiat at sed orci. In elementum enim mi, nec tempus arcu vulputate aliquam.\r\n\r\nSed ultricies diam eu ante lacinia, eget dictum tellus lacinia. Nam sit amet lacinia augue, vitae pellentesque est. In ac tincidunt ipsum. Integer nec libero sagittis, ultrices ex ac, sollicitudin metus. Maecenas viverra libero ac quam pulvinar, eget lacinia leo dignissim. In metus justo, aliquet sit amet orci eget, facilisis egestas tellus. Aliquam tellus ipsum, cursus sit amet felis at, pharetra placerat mauris. Mauris urna nibh, imperdiet ut interdum at, tempor vitae lorem. Morbi lacus ante, condimentum eget lorem nec, volutpat egestas felis. Praesent nec purus iaculis dolor aliquam efficitur. Mauris finibus risus volutpat viverra euismod. Aliquam elementum laoreet sapien ac commodo. Nulla facilisi. Etiam ac lorem ut lacus semper convallis.', 'yacht-de-luxe', 'claudio-poggio-MRVazFxfm50-unsplash.jpg', '2023-05-14 21:03:32', '30.000.000'),
(11, 'Bateau 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus imperdiet est at porta. Etiam fringilla imperdiet nibh, vitae posuere risus tempus sed. Mauris vel molestie est, nec aliquam mauris. Mauris nisl nibh, imperdiet non urna dapibus, consectetur blandit mauris. Nulla tempor massa arcu, eget varius massa luctus nec. Integer ornare metus ante, nec pulvinar nulla mattis vehicula. Vestibulum euismod augue ac rutrum tincidunt. Nulla facilisi. Proin eu pulvinar nisi, ut finibus dolor. Nullam scelerisque, nunc nec porta vulputate, ipsum felis interdum massa, sit amet congue ipsum magna ac nisl. Nunc pharetra vehicula odio, a volutpat risus commodo nec. Nulla eget ex vitae elit vehicula feugiat at sed orci. In elementum enim mi, nec tempus arcu vulputate aliquam.\r\n\r\nSed ultricies diam eu ante lacinia, eget dictum tellus lacinia. Nam sit amet lacinia augue, vitae pellentesque est. In ac tincidunt ipsum. Integer nec libero sagittis, ultrices ex ac, sollicitudin metus. Maecenas viverra libero ac quam pulvinar, eget lacinia leo dignissim. In metus justo, aliquet sit amet orci eget, facilisis egestas tellus. Aliquam tellus ipsum, cursus sit amet felis at, pharetra placerat mauris. Mauris urna nibh, imperdiet ut interdum at, tempor vitae lorem. Morbi lacus ante, condimentum eget lorem nec, volutpat egestas felis. Praesent nec purus iaculis dolor aliquam efficitur. Mauris finibus risus volutpat viverra euismod. Aliquam elementum laoreet sapien ac commodo. Nulla facilisi. Etiam ac lorem ut lacus semper convallis.', 'bateau-1', '', '2023-05-14 21:03:51', '1.000.000'),
(12, 'Bateau 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus imperdiet est at porta. Etiam fringilla imperdiet nibh, vitae posuere risus tempus sed. Mauris vel molestie est, nec aliquam mauris. Mauris nisl nibh, imperdiet non urna dapibus, consectetur blandit mauris. Nulla tempor massa arcu, eget varius massa luctus nec. Integer ornare metus ante, nec pulvinar nulla mattis vehicula. Vestibulum euismod augue ac rutrum tincidunt. Nulla facilisi. Proin eu pulvinar nisi, ut finibus dolor. Nullam scelerisque, nunc nec porta vulputate, ipsum felis interdum massa, sit amet congue ipsum magna ac nisl. Nunc pharetra vehicula odio, a volutpat risus commodo nec. Nulla eget ex vitae elit vehicula feugiat at sed orci. In elementum enim mi, nec tempus arcu vulputate aliquam.\r\n\r\nSed ultricies diam eu ante lacinia, eget dictum tellus lacinia. Nam sit amet lacinia augue, vitae pellentesque est. In ac tincidunt ipsum. Integer nec libero sagittis, ultrices ex ac, sollicitudin metus. Maecenas viverra libero ac quam pulvinar, eget lacinia leo dignissim. In metus justo, aliquet sit amet orci eget, facilisis egestas tellus. Aliquam tellus ipsum, cursus sit amet felis at, pharetra placerat mauris. Mauris urna nibh, imperdiet ut interdum at, tempor vitae lorem. Morbi lacus ante, condimentum eget lorem nec, volutpat egestas felis. Praesent nec purus iaculis dolor aliquam efficitur. Mauris finibus risus volutpat viverra euismod. Aliquam elementum laoreet sapien ac commodo. Nulla facilisi. Etiam ac lorem ut lacus semper convallis.', 'bateau-2', '', '2023-05-14 21:04:11', '2.000.000'),
(13, 'Bateau 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus imperdiet est at porta. Etiam fringilla imperdiet nibh, vitae posuere risus tempus sed. Mauris vel molestie est, nec aliquam mauris. Mauris nisl nibh, imperdiet non urna dapibus, consectetur blandit mauris. Nulla tempor massa arcu, eget varius massa luctus nec. Integer ornare metus ante, nec pulvinar nulla mattis vehicula. Vestibulum euismod augue ac rutrum tincidunt. Nulla facilisi. Proin eu pulvinar nisi, ut finibus dolor. Nullam scelerisque, nunc nec porta vulputate, ipsum felis interdum massa, sit amet congue ipsum magna ac nisl. Nunc pharetra vehicula odio, a volutpat risus commodo nec. Nulla eget ex vitae elit vehicula feugiat at sed orci. In elementum enim mi, nec tempus arcu vulputate aliquam.\r\n\r\nSed ultricies diam eu ante lacinia, eget dictum tellus lacinia. Nam sit amet lacinia augue, vitae pellentesque est. In ac tincidunt ipsum. Integer nec libero sagittis, ultrices ex ac, sollicitudin metus. Maecenas viverra libero ac quam pulvinar, eget lacinia leo dignissim. In metus justo, aliquet sit amet orci eget, facilisis egestas tellus. Aliquam tellus ipsum, cursus sit amet felis at, pharetra placerat mauris. Mauris urna nibh, imperdiet ut interdum at, tempor vitae lorem. Morbi lacus ante, condimentum eget lorem nec, volutpat egestas felis. Praesent nec purus iaculis dolor aliquam efficitur. Mauris finibus risus volutpat viverra euismod. Aliquam elementum laoreet sapien ac commodo. Nulla facilisi. Etiam ac lorem ut lacus semper convallis.', 'bateau-3', '', '2023-05-14 21:04:31', '2.500.000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `role` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `pwd`, `role`) VALUES
(1, 'alexis', 'alexis@mail.com', '270303', 1),
(2, 'thomas', 'thomas@mail.com', 'gdEQxZpsGX', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
