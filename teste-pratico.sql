-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Set-2022 às 04:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste-pratico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` enum('first','second','last') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'first',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(33, '2022_09_25_072956_create_pages_table', 1),
(34, '2022_09_25_114237_create_images_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_nav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_nav_1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_nav_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_nav_3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_banner` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_item_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_item_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_item_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_first_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_first_card` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_second_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_second_card` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_second_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_info_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_info_card` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_info_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_contact_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_contact_card` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn_contact_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label_contact_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder_contact_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_contact_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`id`, `icon_nav`, `link_nav_1`, `link_nav_2`, `link_nav_3`, `title_banner`, `btn_banner`, `article_banner`, `center_title`, `center_item_1`, `center_item_2`, `center_item_3`, `title_first_card`, `article_first_card`, `title_second_card`, `article_second_card`, `btn_second_card`, `title_info_card`, `article_info_card`, `btn_info_card`, `title_contact_card`, `article_contact_card`, `btn_contact_card`, `label_contact_card`, `placeholder_contact_card`, `footer_contact_card`, `created_at`, `updated_at`) VALUES
(1, 'bi bi-house-door', 'Contact us', 'Call: 1234567890', 'Email: demo@gmail.com', 'LANDING PAGE FOR REAL ESTATE', 'Read More', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem ipsum is that it has a more-or-less normal distribution of letters,', 'Explore community', '40 lifestyle Awards', 'Happy Family', '20 Years', 'OUR HOME AND FLATS', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'FIND YOUR HOUSE WITHOUT ANY DIFFICULTIES', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 'Read More', 'A UNIQUE BALANCE OF LUXURY LIFE', 'It is a long established fact that a reader will be distracted by the readable content of a page when lookin at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look', 'See More', 'Free Multipurpose Responsive Landing Page 2019', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look', 'Submit', 'Subscribe our Newsletter', 'Enter You Email', 'Copyright 2022 - Developed by Vinícius Pecci', '2022-09-26 04:06:35', '2022-09-26 04:37:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vinicius Dev', 'viniciuspecci@hotmail.com', NULL, '$2y$10$/a3FHXa04E1AVEX15taXteKsUfmbS9VRbFVgoT2t9O6jN3QX8hLG6', NULL, '2022-09-26 03:51:29', '2022-09-26 05:26:49');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
