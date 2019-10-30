-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 07:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laranews`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_29_150201_create_news_categories_table', 1),
(4, '2019_10_29_150226_create_news_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `news_category_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viewer_count` int(11) NOT NULL DEFAULT 0,
  `image_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `post_date`, `news_category_id`, `content`, `viewer_count`, `image_path`, `created_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Generate Lorem Ipsum placeholder text', 'generate-lorem-ipsum-placeholder-text', '2019-10-07', 3, '<div class=\"page-generator__output js-generator-output\" id=\"output\"><p>Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Aliquam sem et \r\ntortor consequat. Suspendisse in est ante in nibh. In ornare quam \r\nviverra orci sagittis eu volutpat odio facilisis. Non enim praesent \r\nelementum facilisis leo vel fringilla est ullamcorper. Orci phasellus \r\negestas tellus rutrum. Eget sit amet tellus cras adipiscing enim eu. Id \r\neu nisl nunc mi ipsum. Non tellus orci ac auctor augue mauris augue. \r\nCursus in hac habitasse platea dictumst quisque. Netus et malesuada \r\nfames ac turpis egestas integer eget aliquet. Purus sit amet luctus \r\nvenenatis. Aliquet nibh praesent tristique magna. Amet aliquam id diam \r\nmaecenas ultricies mi eget mauris. Id aliquet lectus proin nibh nisl \r\ncondimentum id venenatis a. Morbi tincidunt augue interdum velit euismod\r\n in pellentesque massa. Est pellentesque elit ullamcorper dignissim cras\r\n tincidunt lobortis. Sed ullamcorper morbi tincidunt ornare massa eget \r\negestas. Adipiscing tristique risus nec feugiat in fermentum posuere \r\nurna. Malesuada pellentesque elit eget gravida cum sociis natoque \r\npenatibus.</p>\r\n<p>Malesuada fames ac turpis egestas sed. Cursus vitae congue mauris \r\nrhoncus aenean vel elit. Interdum varius sit amet mattis vulputate enim.\r\n Augue ut lectus arcu bibendum at varius vel. Bibendum enim facilisis \r\ngravida neque. Sed vulputate mi sit amet mauris commodo. At risus \r\nviverra adipiscing at in tellus integer. Sit amet justo donec enim diam.\r\n Quis ipsum suspendisse ultrices gravida dictum fusce. Magna eget est \r\nlorem ipsum. A cras semper auctor neque vitae tempus quam pellentesque. \r\nSed velit dignissim sodales ut. Faucibus vitae aliquet nec ullamcorper \r\nsit amet. Mauris pharetra et ultrices neque ornare aenean euismod \r\nelementum nisi.</p>\r\n<p>Integer quis auctor elit sed. Tortor condimentum lacinia quis vel \r\neros. Adipiscing diam donec adipiscing tristique risus nec feugiat in \r\nfermentum. Tincidunt dui ut ornare lectus sit amet. Ultricies mi quis \r\nhendrerit dolor magna eget est. Aenean pharetra magna ac placerat \r\nvestibulum lectus mauris ultrices eros. Auctor neque vitae tempus quam \r\npellentesque nec nam. Turpis in eu mi bibendum. Ac orci phasellus \r\negestas tellus rutrum tellus. Malesuada nunc vel risus commodo viverra \r\nmaecenas accumsan lacus. Rhoncus est pellentesque elit ullamcorper \r\ndignissim. Duis tristique sollicitudin nibh sit amet commodo nulla \r\nfacilisi. Donec adipiscing tristique risus nec feugiat. Magna etiam \r\ntempor orci eu lobortis elementum nibh. Vulputate dignissim suspendisse \r\nin est ante.</p>\r\n<p>Ipsum consequat nisl vel pretium lectus quam id leo in. Viverra nam \r\nlibero justo laoreet. A erat nam at lectus urna duis convallis \r\nconvallis. Semper quis lectus nulla at volutpat diam ut venenatis \r\ntellus. Egestas congue quisque egestas diam in arcu cursus euismod quis.\r\n Eget nullam non nisi est sit amet facilisis magna etiam. Sapien \r\nfaucibus et molestie ac feugiat sed lectus vestibulum mattis. Lectus \r\nnulla at volutpat diam ut venenatis tellus. Eu lobortis elementum nibh \r\ntellus molestie. Enim ut sem viverra aliquet eget sit.</p>\r\n<p>Integer vitae justo eget magna fermentum. Ultrices in iaculis nunc \r\nsed. Non nisi est sit amet facilisis magna etiam tempor. Non sodales \r\nneque sodales ut. Dapibus ultrices in iaculis nunc sed augue lacus \r\nviverra vitae. Venenatis tellus in metus vulputate eu. Amet nisl purus \r\nin mollis nunc sed id. Nulla facilisi etiam dignissim diam quis enim. Ut\r\n lectus arcu bibendum at varius vel pharetra. Ultrices sagittis orci a \r\nscelerisque purus semper eget duis. Quis blandit turpis cursus in. \r\nNatoque penatibus et magnis dis parturient montes nascetur ridiculus \r\nmus. Aliquet risus feugiat in ante metus. Egestas quis ipsum suspendisse\r\n ultrices gravida dictum fusce ut. Ut porttitor leo a diam sollicitudin \r\ntempor. Sed id semper risus in hendrerit. Eu scelerisque felis imperdiet\r\n proin fermentum leo. Venenatis urna cursus eget nunc scelerisque \r\nviverra mauris in aliquam. Morbi tristique senectus et netus et \r\nmalesuada fames ac. Sapien et ligula ullamcorper malesuada proin.</p></div>', 4, 'images_news_1_039825900_1445265912-UEFA-Champions-League-Logo-Wallpaper.jpg', 2, '2019-10-29 19:30:45', '2019-10-29 23:26:28', NULL),
(3, 'Select the number of characters, words', 'select-the-number-of-characters-words', '2019-10-30', 2, '<div class=\"page-generator__output js-generator-output\" id=\"output\"><p>Lorem\r\n ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod \r\ntempor incididunt ut labore et dolore magna aliqua. Erat pellentesque \r\nadipiscing commodo elit at. Nisi scelerisque eu ultrices vitae auctor eu\r\n augue ut lectus. Mi eget mauris pharetra et ultrices neque ornare. Id \r\nnibh tortor id aliquet lectus. A iaculis at erat pellentesque adipiscing\r\n commodo. Auctor urna nunc id cursus. Diam quis enim lobortis \r\nscelerisque fermentum dui faucibus. Ut aliquam purus sit amet luctus \r\nvenenatis lectus magna fringilla. Pulvinar sapien et ligula ullamcorper \r\nmalesuada proin libero nunc. Dui faucibus in ornare quam viverra orci. \r\nQuis blandit turpis cursus in hac habitasse platea dictumst.</p>\r\n<p>Maecenas sed enim ut sem viverra aliquet eget sit. Pellentesque \r\nhabitant morbi tristique senectus et netus et. Enim nulla aliquet \r\nporttitor lacus luctus accumsan tortor posuere. Neque aliquam vestibulum\r\n morbi blandit cursus risus. Molestie ac feugiat sed lectus vestibulum \r\nmattis ullamcorper. Risus nec feugiat in fermentum posuere urna nec. \r\nNulla pellentesque dignissim enim sit. Nulla pharetra diam sit amet nisl\r\n suscipit. Odio aenean sed adipiscing diam donec. Ut aliquam purus sit \r\namet luctus venenatis lectus. Semper viverra nam libero justo laoreet \r\nsit amet. Tellus in metus vulputate eu scelerisque felis imperdiet \r\nproin. Nisl rhoncus mattis rhoncus urna neque viverra justo. Enim \r\nlobortis scelerisque fermentum dui faucibus in ornare. Est pellentesque \r\nelit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus. Sit \r\namet aliquam id diam maecenas ultricies. Morbi leo urna molestie at \r\nelementum. Integer vitae justo eget magna. Sit amet nisl purus in mollis\r\n nunc sed. Ipsum dolor sit amet consectetur.</p>\r\n<p>Maecenas sed enim ut sem. Morbi tincidunt augue interdum velit \r\neuismod in pellentesque massa placerat. Tristique et egestas quis ipsum \r\nsuspendisse ultrices gravida. Pellentesque habitant morbi tristique \r\nsenectus. Vel fringilla est ullamcorper eget. Sit amet volutpat \r\nconsequat mauris nunc congue. Sed faucibus turpis in eu mi bibendum \r\nneque egestas. Enim blandit volutpat maecenas volutpat blandit aliquam. \r\nGravida quis blandit turpis cursus in hac habitasse platea dictumst. \r\nMaecenas accumsan lacus vel facilisis. Lobortis elementum nibh tellus \r\nmolestie nunc non blandit. Erat imperdiet sed euismod nisi. Tortor \r\naliquam nulla facilisi cras fermentum odio eu feugiat pretium. Feugiat \r\nvivamus at augue eget arcu dictum varius duis. Gravida cum sociis \r\nnatoque penatibus et magnis dis parturient. Mi tempus imperdiet nulla \r\nmalesuada pellentesque elit eget gravida cum. Sit amet facilisis magna \r\netiam tempor orci eu.</p>\r\n<p>Massa tempor nec feugiat nisl pretium fusce id velit ut. Nunc non \r\nblandit massa enim nec dui. Lectus arcu bibendum at varius. Mattis enim \r\nut tellus elementum sagittis. Fames ac turpis egestas integer eget \r\naliquet. Eleifend mi in nulla posuere sollicitudin aliquam. Ornare arcu \r\ndui vivamus arcu felis bibendum ut. Sed lectus vestibulum mattis \r\nullamcorper. Semper quis lectus nulla at. Non curabitur gravida arcu ac \r\ntortor. Sociis natoque penatibus et magnis dis parturient. Urna et \r\npharetra pharetra massa massa ultricies mi quis hendrerit. Fermentum \r\nposuere urna nec tincidunt praesent semper feugiat nibh sed. In arcu \r\ncursus euismod quis viverra nibh cras pulvinar mattis. In ornare quam \r\nviverra orci sagittis eu. Mollis nunc sed id semper risus in hendrerit \r\ngravida. Ac turpis egestas maecenas pharetra convallis. Habitasse platea\r\n dictumst quisque sagittis. Nisi quis eleifend quam adipiscing.</p>\r\n<p>Amet nisl purus in mollis nunc sed id semper risus. Nam aliquam sem \r\net tortor consequat id porta. Tempor orci eu lobortis elementum nibh. \r\nIpsum dolor sit amet consectetur adipiscing elit duis tristique \r\nsollicitudin. Nibh sed pulvinar proin gravida hendrerit lectus a. In \r\naliquam sem fringilla ut morbi tincidunt augue interdum. Enim praesent \r\nelementum facilisis leo vel. Aliquet lectus proin nibh nisl condimentum \r\nid venenatis a. Sed tempus urna et pharetra pharetra. Libero volutpat \r\nsed cras ornare arcu dui. Et netus et malesuada fames ac turpis egestas \r\ninteger. Sollicitudin ac orci phasellus egestas tellus. Dui ut ornare \r\nlectus sit amet est. Dolor sit amet consectetur adipiscing. Viverra \r\nsuspendisse potenti nullam ac tortor.</p></div>', 0, 'images_news_3_shot-20180124-5002-4aktvk.jpeg', 2, '2019-10-29 23:46:54', '2019-10-29 23:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Politik', '2019-10-29 19:11:51', '2019-10-29 19:11:51', NULL),
(2, 'Sosial', '2019-10-29 19:11:51', '2019-10-29 19:11:51', NULL),
(3, 'Ekonomi', '2019-10-29 19:11:51', '2019-10-29 19:11:51', NULL),
(4, 'Hukum', '2019-10-29 19:11:51', '2019-10-29 19:11:51', NULL),
(5, 'Olahraga', '2019-10-29 19:11:51', '2019-10-29 19:11:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'admin@laranews.com', '$2y$10$IbfpqGuZMsLNQ6Ub6vP3RerEYdRz5u0/DeFFsJ/vzRTuna/g1vP2y', '4mtGnL8sgzgnBijto5nlnIoIfs5huAPwyiFwQI4sMwIapsGzRCON0iSohLqH', '2019-10-29 19:16:18', '2019-10-29 19:16:18', NULL),
(2, 'Operator', 'operator@laranews.com', '$2y$10$EloOyhEsHhFM0objWPQWIeMAFpLNNbxAz5rbkXPB2utABgt7u85Ke', 'UrmF4gAEk6f0Lz2XhhfaY5W3FYARUYvLeMaFPqQzaKsZtDeRuGLBSbaKojB6', '2019-10-29 21:44:24', '2019-10-29 21:44:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`),
  ADD KEY `news_news_category_id_foreign` (`news_category_id`),
  ADD KEY `news_created_user_id_foreign` (`created_user_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_created_user_id_foreign` FOREIGN KEY (`created_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `news_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
