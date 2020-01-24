-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 24 2020 г., 16:42
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lider`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `enable`, `title`, `url`, `image`, `desc`, `text`, `created_at`, `updated_at`) VALUES
(2, 1, 'On-Site Health Clinic vs. On-Site Corporate Spa: What', 'on-site-health-clinic-vs-on-site-corporate-spa-what-2', 'pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg', 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.', '<p><img alt=\"\" src=\"http://salon.local/files/pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg\" style=\"width: 800px; height: 500px;\" /></p>\r\n\r\n<p>Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.</p>\r\n\r\n<p>&nbsp;</p>', '2020-01-24 12:23:01', '2020-01-24 12:29:10'),
(3, 1, 'Боди — по своей сути, является эротическим массажем и разновидностью тайской методики', 'bodi-po-svoey-suti-yavlyaetsya-eroticheskim-massazhem-i-raznovidnostyu-tayskoy-metodiki-3', 'pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg', 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.', '<p><img alt=\"\" src=\"http://salon.local/files/pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg\" style=\"width: 800px; height: 500px;\" /></p>\r\n\r\n<p>Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.</p>\r\n\r\n<p>&nbsp;</p>', '2020-01-24 12:24:53', '2020-01-24 12:29:16'),
(4, 1, 'On-Site Health Clinic vs. On-Site Corporate Spa: What', 'on-site-health-clinic-vs-on-site-corporate-spa-what-4', 'pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg', 'Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.', '<p><img alt=\"\" src=\"http://salon.local/files/pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg\" style=\"width: 800px; height: 500px;\" /></p>\r\n\r\n<p>Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.Keeping employees healthy, fit, and stress-free is a top priority for most HR managers. One key way some companies are tackling that problem is by creating employee-only services on site such as spas or health clinics. Both corporate spas and corporate health clinics offer unique employee health perks.</p>\r\n\r\n<p>&nbsp;</p>', '2020-01-24 12:26:06', '2020-01-24 12:29:20');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` text COLLATE utf8mb4_unicode_ci,
  `lng` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `filemanagers`
--

CREATE TABLE `filemanagers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `filemanagers`
--

INSERT INTO `filemanagers` (`id`, `name`, `image`, `big`, `alt`, `created_at`, `updated_at`, `size`, `type`) VALUES
(2, 'gal_2', 'pic15798672383d96ba027250ade899e40d33071492bd.jpg', NULL, NULL, '2020-01-24 12:00:38', '2020-01-24 12:00:38', '78463', 'image/jpeg'),
(3, 'articles_1', 'pic157986723825d523c9ff6c7deb4f49c00f5c996498.jpg', NULL, NULL, '2020-01-24 12:00:38', '2020-01-24 12:00:38', '70051', 'image/jpeg'),
(4, 'gal_1', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', NULL, NULL, '2020-01-24 12:00:38', '2020-01-24 12:00:38', '75132', 'image/jpeg'),
(5, 'gal_3', 'pic15798672386c0857d510ff151a3bcb271cd1542f8b.jpg', NULL, NULL, '2020-01-24 12:00:38', '2020-01-24 12:00:38', '97503', 'image/jpeg'),
(6, 'gal_4', 'pic1579867238feef8a7a0b4e449836fa863ad9b4995e.jpg', NULL, NULL, '2020-01-24 12:00:38', '2020-01-24 12:00:38', '83237', 'image/jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `fotos`
--

CREATE TABLE `fotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `fotos`
--

INSERT INTO `fotos` (`id`, `position`, `enable`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Катрин', 'pic15798672383d96ba027250ade899e40d33071492bd.jpg', '2020-01-24 13:17:02', '2020-01-24 13:33:58'),
(3, 2, 1, 'Анна', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', '2020-01-24 13:17:13', '2020-01-24 13:20:12'),
(4, 4, 1, 'Елена', 'pic15798672386c0857d510ff151a3bcb271cd1542f8b.jpg', '2020-01-24 13:17:26', '2020-01-24 13:19:50'),
(5, 3, 1, 'Айсулу', 'pic1579867238feef8a7a0b4e449836fa863ad9b4995e.jpg', '2020-01-24 13:17:36', '2020-01-24 13:19:50'),
(6, 6, 1, 'Камила', 'pic15798672383d96ba027250ade899e40d33071492bd.jpg', '2020-01-24 13:17:56', '2020-01-24 13:17:56'),
(7, 5, 1, 'Милана', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', '2020-01-24 13:18:09', '2020-01-24 13:19:47');

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `position`, `enable`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '1', 'pic15798672383d96ba027250ade899e40d33071492bd.jpg', '2020-01-24 13:12:20', '2020-01-24 13:12:20'),
(3, 3, 1, '2', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', '2020-01-24 13:12:40', '2020-01-24 13:12:40'),
(4, 4, 1, '3', 'pic15798672386c0857d510ff151a3bcb271cd1542f8b.jpg', '2020-01-24 13:12:51', '2020-01-24 13:12:51'),
(5, 5, 1, '4', 'pic1579867238feef8a7a0b4e449836fa863ad9b4995e.jpg', '2020-01-24 13:13:02', '2020-01-24 13:13:02');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default` int(11) DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `language_interfaces`
--

CREATE TABLE `language_interfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci,
  `name` text COLLATE utf8mb4_unicode_ci,
  `data` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_24_183430_create_subscribes_table', 1),
(4, '2018_02_19_160126_create_seos_table', 1),
(5, '2018_02_19_184508_entrust_setup_tables', 1),
(6, '2018_07_16_115456_languages', 1),
(7, '2018_07_18_105822_language_interface', 1),
(8, '2019_04_23_103529_filemanager', 1),
(9, '2019_04_23_173525_filemanager_size', 1),
(10, '2019_04_24_154835_filemanager_type', 1),
(11, '2019_10_23_161048_table_contacts', 1),
(12, '2020_01_24_085246_table_services', 2),
(13, '2020_01_24_173007_table_article', 3),
(14, '2020_01_24_174625_table_gallery', 4),
(15, '2020_01_24_174642_table_foto', 4),
(16, '2020_01_24_193929_table_request', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'user-read', 'Просмотр пользователей', 'Просмотр списка пользователей', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(2, 'user-create', 'Создать пользователя', 'Создать нового пользователя', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(3, 'user-edit', 'Изменить пользователя', 'Изменить пользователя', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(4, 'user-delete', 'Удалить пользователя', 'Удалить пользователя', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(5, 'role-read', 'Просмотр ролей', 'Просмотр списка ролей', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(6, 'role-create', 'Создать роль', 'Создать новую роль', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(7, 'role-edit', 'Изменить роль', 'Изменить роль', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(8, 'role-delete', 'Удалить роль', 'Удалить роль', '2020-01-24 02:46:58', '2020-01-24 02:46:58');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Суперадмин', 'Полный доступ к функционалу', '2020-01-24 02:46:58', '2020-01-24 02:46:58'),
(2, 'login', 'Логин', 'Добавленный пользователь, имеет доступ только к личному кабинету. Роль присваивается автоматически.', '2020-01-24 02:46:58', '2020-01-24 02:46:58');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `page` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `seos`
--

INSERT INTO `seos` (`id`, `url`, `page`, `title`, `description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'main', 'Главная', NULL, NULL, NULL, '2020-01-24 02:46:58', '2020-01-24 02:46:58');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8mb4_unicode_ci,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `position`, `enable`, `title`, `desc`, `icon`, `image`, `price`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 'Экспресс боди', 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!', '<i class=\"far fa-heart\"></i>', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', '12000', '2020-01-24 12:00:52', '2020-01-24 12:11:32'),
(5, 1, 1, 'Стандарт боди', 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!', '<i class=\"fas fa-house-damage\"></i>', 'pic15798672386c0857d510ff151a3bcb271cd1542f8b.jpg', '14000', '2020-01-24 12:01:21', '2020-01-24 12:11:30'),
(6, 2, 1, 'Ветка сакуры', 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!', '<i class=\"far fa-eye\"></i>', 'pic1579867238581ad26439ca31d67676aaae6a30227d.jpg', '16000', '2020-01-24 12:01:46', '2020-01-24 12:11:30'),
(7, 3, 1, 'Поцелуй Геиши', 'Если вы хотите расслабиться и получить максимальное удовольствие не сравнимое ни с чем то это идеальный выбор!', '<i class=\"far fa-heart\"></i>', 'pic1579867238feef8a7a0b4e449836fa863ad9b4995e.jpg', '18000', '2020-01-24 12:04:14', '2020-01-24 12:11:32'),
(8, 5, 1, 'Боди Массаж', 'Эти массажистки находятся в салонах прямо сейчас, исходя из графика работы, который я каждый будний день сверяю у админов салонов. Точность около – 90% с поправкой на “заболела / опаздывает / только что срочно ушла”', 'вы', 'pic15798672386c0857d510ff151a3bcb271cd1542f8b.jpg', '140000', '2020-01-24 12:13:19', '2020-01-24 12:13:28');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribes`
--

CREATE TABLE `subscribes` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@lider.kz', '$2y$10$lJCZnNzqog0kUttxgD0nWuuMc4L.QPFJVmfVdq7SKP1SjnSDsfwlW', NULL, '2020-01-24 02:46:58', '2020-01-24 02:46:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filemanagers`
--
ALTER TABLE `filemanagers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `language_interfaces`
--
ALTER TABLE `language_interfaces`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `filemanagers`
--
ALTER TABLE `filemanagers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `language_interfaces`
--
ALTER TABLE `language_interfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
