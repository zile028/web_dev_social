-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 10:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_dev_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `post_text` text NOT NULL,
  `img` varchar(60) DEFAULT NULL,
  `visibility` varchar(20) NOT NULL DEFAULT 'Public',
  `user_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `likes` int(10) DEFAULT 0,
  `dislike` int(10) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `post_text`, `img`, `visibility`, `user_id`, `created_at`, `likes`, `dislike`) VALUES
(1, 'Prvi post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias dicta libero modi nemo, nesciunt quibusdam reiciendis repellat saepe tempore temporibus tenetur voluptatibus. Aspernatur distinctio explicabo ipsa sapiente similique suscipit tempora? Atque cupiditate dicta dolor, dolore, exercitationem fuga hic illo illum laboriosam magnam magni non obcaecati odio officiis placeat quod sapiente soluta sunt veritatis voluptatum! Exercitationem, quibusdam, voluptates. Aliquam, tenetur?', '1653672462.png', 'Public', 1, '2022-05-27 19:27:42', 2, 8),
(2, 'Drugi post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias dicta libero modi nemo, nesciunt quibusdam reiciendis repellat saepe tempore temporibus tenetur voluptatibus. Aspernatur distinctio explicabo ipsa sapiente similique suscipit tempora? Atque cupiditate dicta dolor, dolore, exercitationem fuga hic illo illum laboriosam magnam magni non obcaecati odio officiis placeat quod sapiente soluta sunt veritatis voluptatum! Exercitationem, quibusdam, voluptates. Aliquam, tenetur?', '1653672729.png', 'Public', 2, '2022-05-27 19:32:09', 0, 3),
(3, 'Treci post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias dicta libero modi nemo, nesciunt quibusdam reiciendis repellat saepe tempore temporibus tenetur voluptatibus. Aspernatur distinctio explicabo ipsa sapiente similique suscipit tempora? Atque cupiditate dicta dolor, dolore, exercitationem fuga hic illo illum laboriosam magnam magni non obcaecati odio officiis placeat quod sapiente soluta sunt veritatis voluptatum! Exercitationem, quibusdam, voluptates. Aliquam, tenetur?', NULL, 'Private', 2, '2022-05-27 19:52:50', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
