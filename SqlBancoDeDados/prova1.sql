-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 01-Maio-2019 às 23:15
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prova1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogadors`
--

CREATE TABLE `jogadors` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dataN` date NOT NULL,
  `clube` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posicao` int(10) UNSIGNED DEFAULT NULL,
  `selecao` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `check` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `jogadors`
--

INSERT INTO `jogadors` (`id`, `nome`, `dataN`, `clube`, `posicao`, `selecao`, `created_at`, `updated_at`, `check`) VALUES
(1, 'Marinho', '1987-07-22', 'Ceara', 2, 8, '2018-04-13 06:40:54', '2018-04-14 23:22:33', 0),
(2, 'Messi', '1991-03-20', 'Barcelona', 6, 11, '2018-04-13 06:49:13', '2018-04-13 07:42:12', 0),
(6, 'Danilo de Souza', '1978-07-12', 'Bahia', 3, 10, '2018-04-14 10:00:23', '2018-04-15 01:50:29', 1),
(7, 'João de Alcantra de Bezerra', '2006-04-04', 'Cruzeiro', 5, 9, '2018-04-14 10:03:33', '2018-04-14 19:22:09', 0),
(18, 'Julio Bapthista', '1987-01-05', 'La Curunha', 5, 9, '2018-04-14 19:44:21', '2018-04-15 01:01:21', 1),
(20, 'Marlone', '1986-06-16', 'Sport', 4, 9, '2018-04-14 22:21:13', '2018-04-14 22:21:13', 0),
(21, 'Isco', '1989-01-17', 'Real Madri', 5, 10, '2018-04-14 23:10:24', '2018-04-14 23:22:13', 0),
(22, 'Obume de Iorunge Lmier', '1987-06-23', 'Wolfsburg', 2, 36, '2018-04-14 23:11:34', '2018-04-15 01:01:43', 1),
(23, 'Alex', '2018-04-04', 'Asa', 1, 24, '2018-04-14 23:12:58', '2018-04-15 01:08:20', 1),
(24, 'De Bruine', '1993-02-08', 'Manchester City', 4, 19, '2018-04-14 23:14:58', '2018-04-14 23:14:58', 0),
(25, 'Dilma', '2018-04-02', 'Nnehum', 1, 23, '2018-04-14 23:16:03', '2018-04-15 01:26:35', 1),
(26, 'Arrascaeta', '1993-11-25', 'Cruzeiro', 5, 11, '2018-04-14 23:24:59', '2018-04-14 23:24:59', 0),
(27, 'Ali', '2018-04-05', 'Mohamed', 2, 25, '2018-04-14 23:25:43', '2018-04-14 23:25:43', 0),
(33, 'Eustáquio', '2018-04-05', 'Marista', 3, 37, '2018-04-14 23:45:15', '2018-04-14 23:45:15', 0),
(36, 'Jean Paublo', '2018-04-04', 'Palmeiras', 1, 19, '2018-04-15 00:42:38', '2018-04-15 00:42:38', 0),
(40, 'Nagato', '2018-04-05', 'Hiroshima', 1, 29, '2018-04-15 01:15:30', '2018-04-15 01:15:30', 1);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_04_11_153619_create_posicaos_table', 2),
(5, '2018_04_11_175212_create_selecaos_table', 3),
(6, '2018_04_13_010428_create_jogadors_table', 4),
(8, '2018_04_14_212951_jogador_up_check', 6);

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
-- Estrutura da tabela `posicaos`
--

CREATE TABLE `posicaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `posicaos`
--

INSERT INTO `posicaos` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Goleiro', '2018-04-11 20:05:21', '2018-04-11 20:05:21'),
(2, 'Defensor', '2018-04-11 20:05:35', '2018-04-11 20:05:35'),
(3, 'Lateral', '2018-04-11 20:05:46', '2018-04-11 20:05:46'),
(4, 'Volante', '2018-04-11 20:06:00', '2018-04-11 20:06:00'),
(5, 'Meia', '2018-04-11 20:06:13', '2018-04-11 20:06:13'),
(6, 'Atacante', '2018-04-11 20:06:26', '2018-04-11 20:06:26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `selecaos`
--

CREATE TABLE `selecaos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `selecaos`
--

INSERT INTO `selecaos` (`id`, `nome`, `arquivo`, `created_at`, `updated_at`) VALUES
(8, 'França', 'franca.jpg', '2018-04-13 03:14:30', '2018-04-13 03:14:30'),
(9, 'Brasil', 'brasil.jpg', '2018-04-13 05:55:38', '2018-04-13 05:55:38'),
(10, 'Espanha', 'espanha.png', '2018-04-13 07:40:51', '2018-04-13 07:40:51'),
(11, 'Argentina', 'argentina.png', '2018-04-13 07:41:45', '2018-04-13 07:41:45'),
(12, 'Inglaterra', 'inglaterra.png', '2018-04-14 21:59:41', '2018-04-14 21:59:41'),
(13, 'Alemanha', 'alemanha.jpg', '2018-04-14 22:00:06', '2018-04-14 22:00:06'),
(14, 'Portugal', 'portugal.png', '2018-04-14 22:00:25', '2018-04-14 22:00:25'),
(15, 'Russia', 'russia.jpg', '2018-04-14 22:00:38', '2018-04-14 22:00:38'),
(16, 'Servia', 'servia.gif', '2018-04-14 22:00:53', '2018-04-14 22:00:53'),
(17, 'Arábia Saudita', 'arabia saudida.png', '2018-04-14 22:51:20', '2018-04-14 22:51:20'),
(18, 'Austrália', 'australia.png', '2018-04-14 22:52:06', '2018-04-14 22:52:06'),
(19, 'Bélgica', 'belgica.png', '2018-04-14 22:52:35', '2018-04-14 22:52:35'),
(20, 'Colômbia', 'colombia.jpg', '2018-04-14 22:53:07', '2018-04-14 22:53:07'),
(21, 'Coreia do Sul', 'coreia do sul.jpg', '2018-04-14 22:53:51', '2018-04-14 22:53:51'),
(22, 'Costa Rica', 'costa rica.png', '2018-04-14 22:54:13', '2018-04-14 22:54:13'),
(23, 'Croácia', 'croacia.png', '2018-04-14 22:54:36', '2018-04-14 22:54:36'),
(24, 'Dinamarca', 'dinamarca.png', '2018-04-14 22:55:01', '2018-04-14 22:55:01'),
(25, 'Egito', 'egito.jpg', '2018-04-14 23:01:58', '2018-04-14 23:01:58'),
(27, 'Irã', 'irã.png', '2018-04-14 23:03:15', '2018-04-14 23:03:15'),
(28, 'Islândia', 'islandia.png', '2018-04-14 23:03:28', '2018-04-14 23:03:28'),
(29, 'Japão', 'japao.png', '2018-04-14 23:03:42', '2018-04-14 23:03:42'),
(30, 'Marrocos', 'marrocos.png', '2018-04-14 23:04:03', '2018-04-14 23:04:03'),
(31, 'México', 'méxico.jpg', '2018-04-14 23:04:18', '2018-04-14 23:04:18'),
(32, 'Nigéria', 'nigeria.png', '2018-04-14 23:04:43', '2018-04-14 23:04:43'),
(33, 'Panamá', 'panama.png', '2018-04-14 23:05:01', '2018-04-14 23:05:01'),
(34, 'Peru', 'peru.png', '2018-04-14 23:05:45', '2018-04-14 23:05:45'),
(35, 'Polônia', 'polonia.png', '2018-04-14 23:06:24', '2018-04-14 23:06:24'),
(36, 'Senegal', 'senagal.png', '2018-04-14 23:06:48', '2018-04-14 23:06:48'),
(37, 'Suécia', 'suécia.png', '2018-04-14 23:07:04', '2018-04-14 23:07:04'),
(38, 'Suíça', 'suiça.jpg', '2018-04-14 23:07:23', '2018-04-14 23:07:23'),
(39, 'Tunísia', 'tunisia.png', '2018-04-14 23:07:43', '2018-04-14 23:07:43'),
(40, 'Uruguai', 'uruguai.png', '2018-04-14 23:08:03', '2018-04-14 23:08:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jogadors`
--
ALTER TABLE `jogadors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jogadors_posicao_foreign` (`posicao`),
  ADD KEY `jogadors_selecao_foreign` (`selecao`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posicaos`
--
ALTER TABLE `posicaos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selecaos`
--
ALTER TABLE `selecaos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `jogadors`
--
ALTER TABLE `jogadors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posicaos`
--
ALTER TABLE `posicaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `selecaos`
--
ALTER TABLE `selecaos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogadors`
--
ALTER TABLE `jogadors`
  ADD CONSTRAINT `jogadors_posicao_foreign` FOREIGN KEY (`posicao`) REFERENCES `posicaos` (`id`),
  ADD CONSTRAINT `jogadors_selecao_foreign` FOREIGN KEY (`selecao`) REFERENCES `selecaos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
