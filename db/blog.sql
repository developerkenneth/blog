-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2026 at 01:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `body`, `featured_image`, `updated_at`, `created_at`, `status`) VALUES
(1, 'kenneth', 'I love coding', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quam suscipit! Voluptate accusamus porro vitae eum sunt voluptates enim nemo, possimus nostrum? Sunt accusantium iste consequatur alias dolorum illum voluptatibus ipsum tenetur inventore expedita. Corrupti quibusdam vel, enim, eaque, quia aliquid magnam dolorum molestiae in consectetur ad minus mollitia reprehenderit inventore nobis tempore porro dolores fugit nostrum. Iste tempora dolorum quidem itaque, inventore fugit laboriosam laborum unde cupiditate voluptates praesentium ipsum assumenda nostrum atque, libero qui soluta necessitatibus placeat quasi deleniti rerum fugiat. Nulla error ut commodi totam nesciunt odit voluptatum amet deserunt mollitia, tempore expedita a. Fugit saepe illo autem? Delectus fuga aliquid voluptatibus natus magnam, eos explicabo a, repudiandae cumque tempora quod dolores necessitatibus vel dolorum rem maiores tenetur cupiditate inventore laudantium. Ipsa voluptatem aperiam nesciunt harum, dignissimos ab, veniam possimus, quasi omnis dicta hic? Repellat alias vel nisi quis. Commodi explicabo, earum sapiente voluptate impedit veritatis blanditiis neque dolores vel saepe eveniet porro repellat quod consectetur eligendi exercitationem ratione ut totam natus quasi quo ea doloribus culpa! Accusamus, recusandae quae molestias perferendis eligendi molestiae animi aliquid nihil, similique voluptatibus neque facilis ea aliquam. Nemo sint perferendis assumenda ducimus alias esse magnam tempora, facere distinctio veniam temporibus beatae quaerat quam, at quia cupiditate dignissimos totam non in itaque ipsa aut aliquid. Asperiores illum explicabo doloremque doloribus excepturi blanditiis provident repellendus, magnam odio accusantium. Possimus enim quam fuga eligendi expedita aut illo ut facere eius itaque quos libero error, corrupti aliquid! Obcaecati nisi magnam aspernatur. Deleniti quisquam, temporibus aut obcaecati delectus aspernatur dolor rem laudantium natus cupiditate, odit, possimus ea est sapiente ipsa tempore sunt magni a explicabo quaerat. Modi deserunt doloremque exercitationem quibusdam magni quo! Eaque quae veniam dolor dolorem labore, nam, eos ipsum quo nulla ullam accusamus laborum, sequi deleniti neque! Sunt, voluptas deserunt. Obcaecati repudiandae quod ipsam odit perspiciatis aperiam repellendus reprehenderit consequatur est soluta natus distinctio dolorum, facere provident sint molestiae facilis adipisci? Ab est non hic laborum quaerat pariatur possimus cumque quae nulla quasi atque praesentium reiciendis libero voluptas alias in rerum consequuntur sapiente corrupti, animi iste laudantium officiis! At, voluptates! Quidem, vero! Veniam, dicta animi pariatur earum repellendus at aspernatur dolorum magni consequuntur aut error laboriosam commodi ipsam fuga voluptates laborum asperiores exercitationem dolor sequi qui saepe quisquam. Delectus quis fugit, consectetur obcaecati enim ut quidem quia eaque sunt tempore natus repellendus necessitatibus molestiae dolorum dolores placeat odit laboriosam esse est sed totam! Doloremque in officiis non voluptas ab maiores quam ducimus, enim labore blanditiis hic earum beatae molestiae sit velit autem animi atque ipsum magnam architecto voluptate necessitatibus reiciendis illo dicta. Id voluptas repellat similique ipsum molestiae porro fuga, dolorem impedit est vero ea ullam quibusdam laboriosam. Placeat soluta ex sunt consequuntur debitis aspernatur! Omnis, impedit magnam? Enim dolores facere consequuntur saepe in dolorum ab delectus veritatis. A nulla deleniti vel tenetur non quia, aut debitis animi adipisci nam fugiat? Fugiat eligendi eaque magni quibusdam possimus voluptatibus beatae! Ea ut obcaecati quas aliquam odit. Voluptate qui, beatae sint iure sapiente, placeat aliquam eligendi ab aspernatur expedita culpa eos vel nihil? Sapiente quaerat sunt, sed maiores, deleniti illo obcaecati pariatur quasi deserunt nobis amet maxime officia veniam vitae placeat voluptas ad recusandae alias expedita? Voluptatum delectus aperiam reiciendis ratione esse sequi quam dolorem quis, consectetur odio dignissimos odit mollitia sit. Minima ullam voluptatem animi deserunt. Reprehenderit maxime architecto exercitationem. Sit incidunt officiis obcaecati autem fuga, excepturi officia facilis id? Eos quas dignissimos vitae nulla necessitatibus quia corrupti labore, voluptatem eaque aliquam, perspiciatis vel earum repellendus. Numquam id enim impedit quod temporibus delectus repellendus, similique veritatis consequatur porro. Consectetur autem optio ea enim, ipsa quam placeat dignissimos! Odio laboriosam porro, harum sequi odit sed cupiditate velit deleniti fuga ipsum dignissimos tempora atque veritatis voluptates assumenda? Iure provident labore cupiditate animi earum, voluptate praesentium quia ducimus dolor magnam porro nihil dolores voluptatibus! Laboriosam quas sed, enim incidunt nihil accusamus voluptate minus deleniti laborum excepturi dignissimos obcaecati praesentium suscipit doloribus eum amet at adipisci autem. Pariatur officia, blanditiis aliquam voluptatibus minus perspiciatis. Magni quo amet soluta nam tempora laudantium et, quaerat nisi modi porro rem quas aliquid eum error. Beatae dolor alias velit sequi veniam. Incidunt quo qui, cum suscipit inventore explicabo doloribus excepturi enim sapiente eum voluptas illo sunt, nesciunt labore quod itaque tempore porro placeat non recusandae cumque ratione saepe. Ipsam aut quasi, a neque reiciendis repellat provident laudantium, numquam reprehenderit ipsum fugiat earum eligendi rerum dolore esse vitae at sint recusandae quod quidem? Quas voluptatum veniam repellendus non repellat? Veniam quidem atque suscipit sint error accusamus eaque distinctio animi a deserunt aut cumque, optio officia ut. Aut voluptatem nulla doloremque totam ducimus voluptatum accusantium incidunt, praesentium quis fugiat exercitationem quisquam amet ratione iusto eum! Quam sapiente dolore nobis? Reiciendis fugit facere voluptate laudantium fugiat, explicabo accusamus, cumque eveniet aspernatur consequatur impedit quidem iusto mollitia? Nostrum ipsum adipisci non soluta nihil rem natus voluptatum accusantium magni, cupiditate saepe eveniet animi perspiciatis neque mollitia, quibusdam iure maiores numquam dignissimos qui voluptatibus provident? Reprehenderit temporibus voluptatem velit totam accusantium quae. Expedita atque voluptate quibusdam eaque, est illo itaque quis unde saepe. Cumque, quibusdam quod! Asperiores eos debitis corporis, nihil cum, voluptatibus obcaecati ea nam in totam vel. Aliquam ex, aut aliquid consectetur vero possimus sequi, iure voluptatem cumque, inventore asperiores dignissimos ratione nesciunt! Neque dolore dolor facere a illum cumque beatae iste asperiores incidunt vel quo quibusdam excepturi aliquam modi, accusantium reprehenderit aperiam magnam dolorem fugiat possimus. Esse repellat iusto repellendus molestias ad deserunt suscipit consequatur nisi exercitationem recusandae! Fugit, eveniet culpa ab expedita vero earum quod nobis aperiam aut sed harum corporis hic maiores dicta quae quibusdam cupiditate ut tempore reiciendis praesentium dolor nihil adipisci voluptatem? Minima nesciunt nobis magnam unde expedita quia in officia laudantium architecto beatae, eum vel quae dignissimos libero ratione voluptatum ullam. Repudiandae aliquam, nulla dolorem at dicta recusandae voluptates nihil unde velit itaque esse adipisci ipsam quae. Expedita quo quidem hic dicta libero asperiores ad sapiente aspernatur, aperiam velit error adipisci. Reiciendis eveniet animi fugiat perferendis impedit non nisi blanditiis.', NULL, '2026-04-07 10:03:38', '2026-04-07 10:03:38', 'draft'),
(2, 'Prince', 'I hate cooking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, quam suscipit! Voluptate accusamus porro vitae eum sunt voluptates enim nemo, possimus nostrum? Sunt accusantium iste consequatur alias dolorum illum voluptatibus ipsum tenetur inventore expedita. Corrupti quibusdam vel, enim, eaque, quia aliquid magnam dolorum molestiae in consectetur ad minus mollitia reprehenderit inventore nobis tempore porro dolores fugit nostrum. Iste tempora dolorum quidem itaque, inventore fugit laboriosam laborum unde cupiditate voluptates praesentium ipsum assumenda nostrum atque, libero qui soluta necessitatibus placeat quasi deleniti rerum fugiat. Nulla error ut commodi totam nesciunt odit voluptatum amet deserunt mollitia, tempore expedita a. Fugit saepe illo autem? Delectus fuga aliquid voluptatibus natus magnam, eos explicabo a, repudiandae cumque tempora quod dolores necessitatibus vel dolorum rem maiores tenetur cupiditate inventore laudantium. Ipsa voluptatem aperiam nesciunt harum, dignissimos ab, veniam possimus, quasi omnis dicta hic? Repellat alias vel nisi quis. Commodi explicabo, earum sapiente voluptate impedit veritatis blanditiis neque dolores vel saepe eveniet porro repellat quod consectetur eligendi exercitationem ratione ut totam natus quasi quo ea doloribus culpa! Accusamus, recusandae quae molestias perferendis eligendi molestiae animi aliquid nihil, similique voluptatibus neque facilis ea aliquam. Nemo sint perferendis assumenda ducimus alias esse magnam tempora, facere distinctio veniam temporibus beatae quaerat quam, at quia cupiditate dignissimos totam non in itaque ipsa aut aliquid. Asperiores illum explicabo doloremque doloribus excepturi blanditiis provident repellendus, magnam odio accusantium. Possimus enim quam fuga eligendi expedita aut illo ut facere eius itaque quos libero error, corrupti aliquid! Obcaecati nisi magnam aspernatur. Deleniti quisquam, temporibus aut obcaecati delectus aspernatur dolor rem laudantium natus cupiditate, odit, possimus ea est sapiente ipsa tempore sunt magni a explicabo quaerat. Modi deserunt doloremque exercitationem quibusdam magni quo! Eaque quae veniam dolor dolorem labore, nam, eos ipsum quo nulla ullam accusamus laborum, sequi deleniti neque! Sunt, voluptas deserunt. Obcaecati repudiandae quod ipsam odit perspiciatis aperiam repellendus reprehenderit consequatur est soluta natus distinctio dolorum, facere provident sint molestiae facilis adipisci? Ab est non hic laborum quaerat pariatur possimus cumque quae nulla quasi atque praesentium reiciendis libero voluptas alias in rerum consequuntur sapiente corrupti, animi iste laudantium officiis! At, voluptates! Quidem, vero! Veniam, dicta animi pariatur earum repellendus at aspernatur dolorum magni consequuntur aut error laboriosam commodi ipsam fuga voluptates laborum asperiores exercitationem dolor sequi qui saepe quisquam. Delectus quis fugit, consectetur obcaecati enim ut quidem quia eaque sunt tempore natus repellendus necessitatibus molestiae dolorum dolores placeat odit laboriosam esse est sed totam! Doloremque in officiis non voluptas ab maiores quam ducimus, enim labore blanditiis hic earum beatae molestiae sit velit autem animi atque ipsum magnam architecto voluptate necessitatibus reiciendis illo dicta. Id voluptas repellat similique ipsum molestiae porro fuga, dolorem impedit est vero ea ullam quibusdam laboriosam. Placeat soluta ex sunt consequuntur debitis aspernatur! Omnis, impedit magnam? Enim dolores facere consequuntur saepe in dolorum ab delectus veritatis. A nulla deleniti vel tenetur non quia, aut debitis animi adipisci nam fugiat? Fugiat eligendi eaque magni quibusdam possimus voluptatibus beatae! Ea ut obcaecati quas aliquam odit. Voluptate qui, beatae sint iure sapiente, placeat aliquam eligendi ab aspernatur expedita culpa eos vel nihil? Sapiente quaerat sunt, sed maiores, deleniti illo obcaecati pariatur quasi deserunt nobis amet maxime officia veniam vitae placeat voluptas ad recusandae alias expedita? Voluptatum delectus aperiam reiciendis ratione esse sequi quam dolorem quis, consectetur odio dignissimos odit mollitia sit. Minima ullam voluptatem animi deserunt. Reprehenderit maxime architecto exercitationem. Sit incidunt officiis obcaecati autem fuga, excepturi officia facilis id? Eos quas dignissimos vitae nulla necessitatibus quia corrupti labore, voluptatem eaque aliquam, perspiciatis vel earum repellendus. Numquam id enim impedit quod temporibus delectus repellendus, similique veritatis consequatur porro. Consectetur autem optio ea enim, ipsa quam placeat dignissimos! Odio laboriosam porro, harum sequi odit sed cupiditate velit deleniti fuga ipsum dignissimos tempora atque veritatis voluptates assumenda? Iure provident labore cupiditate animi earum, voluptate praesentium quia ducimus dolor magnam porro nihil dolores voluptatibus! Laboriosam quas sed, enim incidunt nihil accusamus voluptate minus deleniti laborum excepturi dignissimos obcaecati praesentium suscipit doloribus eum amet at adipisci autem. Pariatur officia, blanditiis aliquam voluptatibus minus perspiciatis. Magni quo amet soluta nam tempora laudantium et, quaerat nisi modi porro rem quas aliquid eum error. Beatae dolor alias velit sequi veniam. Incidunt quo qui, cum suscipit inventore explicabo doloribus excepturi enim sapiente eum voluptas illo sunt, nesciunt labore quod itaque tempore porro placeat non recusandae cumque ratione saepe. Ipsam aut quasi, a neque reiciendis repellat provident laudantium, numquam reprehenderit ipsum fugiat earum eligendi rerum dolore esse vitae at sint recusandae quod quidem? Quas voluptatum veniam repellendus non repellat? Veniam quidem atque suscipit sint error accusamus eaque distinctio animi a deserunt aut cumque, optio officia ut. Aut voluptatem nulla doloremque totam ducimus voluptatum accusantium incidunt, praesentium quis fugiat exercitationem quisquam amet ratione iusto eum! Quam sapiente dolore nobis? Reiciendis fugit facere voluptate laudantium fugiat, explicabo accusamus, cumque eveniet aspernatur consequatur impedit quidem iusto mollitia? Nostrum ipsum adipisci non soluta nihil rem natus voluptatum accusantium magni, cupiditate saepe eveniet animi perspiciatis neque mollitia, quibusdam iure maiores numquam dignissimos qui voluptatibus provident? Reprehenderit temporibus voluptatem velit totam accusantium quae. Expedita atque voluptate quibusdam eaque, est illo itaque quis unde saepe. Cumque, quibusdam quod! Asperiores eos debitis corporis, nihil cum, voluptatibus obcaecati ea nam in totam vel. Aliquam ex, aut aliquid consectetur vero possimus sequi, iure voluptatem cumque, inventore asperiores dignissimos ratione nesciunt! Neque dolore dolor facere a illum cumque beatae iste asperiores incidunt vel quo quibusdam excepturi aliquam modi, accusantium reprehenderit aperiam magnam dolorem fugiat possimus. Esse repellat iusto repellendus molestias ad deserunt suscipit consequatur nisi exercitationem recusandae! Fugit, eveniet culpa ab expedita vero earum quod nobis aperiam aut sed harum corporis hic maiores dicta quae quibusdam cupiditate ut tempore reiciendis praesentium dolor nihil adipisci voluptatem? Minima nesciunt nobis magnam unde expedita quia in officia laudantium architecto beatae, eum vel quae dignissimos libero ratione voluptatum ullam. Repudiandae aliquam, nulla dolorem at dicta recusandae voluptates nihil unde velit itaque esse adipisci ipsam quae. Expedita quo quidem hic dicta libero asperiores ad sapiente aspernatur, aperiam velit error adipisci. Reiciendis eveniet animi fugiat perferendis impedit non nisi blanditiis.', NULL, '2026-04-07 10:04:24', '2026-04-07 10:04:24', 'draft'),
(19, 'John Doe', 'kenneth', 'kenneth otis post', NULL, '2026-04-10 09:55:36', '2026-04-10 09:55:36', 'draft'),
(22, 'John Doe', 'kenneth', 'kenneth', NULL, '2026-04-14 10:03:27', '2026-04-14 10:03:27', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `profile_picture`, `user_type`, `updated_at`, `created_at`) VALUES
(3, 'jessica doe', 'jessica@gmail.com', '$2y$10$TOp6USqAyD/GO4R9QOiSpeBEJ4jI0/ZdAQd/Lo0Km.buN2qRZ3XDy', '', 0, '2026-03-27 10:01:58', '2026-03-27 10:01:58'),
(4, 'jean doe', 'jean@gmail.com', '$2y$10$JYD8/4KZvc/VDzNeUf3xYOQuLe9b74kD5B/b0aovbnVf8DoMDEAZO', '', 0, '2026-03-27 10:03:25', '2026-03-27 10:03:25'),
(5, 'james doe', 'james@gmail.com', '$2y$10$48qpw3gUx/P2lT04KzrwyeXpr0JO6JKawefXVC9c1nO1Dc..BGxde', '', 0, '2026-03-27 10:06:24', '2026-03-27 10:06:24'),
(6, 'jerry doe', 'jerry@gmail.com', '$2y$10$ZJrYUAObCXrkL4bWkehlNulSWa.GHPtzndQ5rKFU2uqzkkuRfidC6', '', 0, '2026-03-27 10:08:04', '2026-03-27 10:08:04'),
(8, 'Kenneth Otis', 'developerkenneth9696@gmail.com', '$2y$10$XuYuuIIOfZ/qz7HApNZLG.QDmFLes0qg/MdPhDbDZK5K5BGc/GRua', '', 1, '2026-03-27 10:13:15', '2026-03-27 10:13:15'),
(9, 'jude doe', 'jude@testmail.com', '$2y$10$5TF0KEBWqhSXJgg7HWF9KuaADVsZVMEV4GuYHjzFoQWBoYT.yEviu', '', 0, '2026-03-27 10:51:13', '2026-03-27 10:51:13'),
(10, 'Prince ', 'Prince@gmail.com', '$2y$10$Ygl2Lj0/tJVAxwno4Uth1ezmGdtwzWG97F.Fe0TZBlyqQf9WV4lX2', '', 0, '2026-03-27 10:57:17', '2026-03-27 10:57:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
