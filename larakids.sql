-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 10:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larakids`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `surname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(9, 'Eliaga', 'Eliyev324', 'aliaga.a@code.edu.az', '345435654erg', '2016-09-24 08:31:25', '2016-09-25 10:18:22'),
(10, 'Samir', 'Kerimov', 'samir@code.edu', '34534534', '2016-09-24 08:31:45', '2016-09-25 10:18:30'),
(11, 'Murad', 'Mikayilzade', 'm.murad@code.edu.az', '30noyabr2002', '2016-09-25 09:31:17', '2016-09-25 09:31:17'),
(12, 'Leyla', '', 'leyla.a@code.edu.az', '$2y$10$GFa7x9.3EYqpV0S.krt.jOMPsGEljYXu4boSjgXOQTu1xy4h85Jrm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sual_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hekimlers`
--

CREATE TABLE `hekimlers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hekimlers`
--

INSERT INTO `hekimlers` (`id`, `name`, `surname`, `about`, `password`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Murad', 'Mikayilzade', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam a laudantium consectetur rerum, tempora voluptatem dolore officia voluptatum impedit cumque minima eaque aspernatur ipsa? Repellendus facilis culpa, mollitia cumque possimus.', '1234567890', 'm.murad@code.edu.az', NULL, NULL),
(3, 'Leyla', 'Abbasova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam a laudantium consectetur rerum, tempora voluptatem dolore officia voluptatum impedit cumque minima eaque aspernatur ipsa? Repellendus facilis culpa, mollitia cumque possimus.', '$2y$10$F.dYnTv4XPjwoWQ.c11JUel2E8b828JQpVUmBUpqy0lZpPLBwIIVC', 'leyla.a@box.az', NULL, NULL),
(4, 'Murad', 'Mikayilzadə', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam a laudantium consectetur rerum, tempora voluptatem dolore officia voluptatum impedit cumque minima eaque aspernatur ipsa? Repellendus facilis culpa, mollitia cumque possimus.', '$2y$10$jyHrZK983UuHTPrFLyYcmutzWQUvnvJcBFbwjrblFdMi2PfIj5H/u', 'm.murad2@code.edu.az', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meqales`
--

CREATE TABLE `meqales` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `hekimler_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `meqales`
--

INSERT INTO `meqales` (`id`, `title`, `text`, `hekimler_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(53, '“Neftçi” “Kəpəz”ə qalib gəldi', 'Bu gün futbol üzrə Azərbaycan Premyer Liqasında VII turun daha iki oyunu keçirilib. \r\n\r\nOxu.Az Report-a istinadən xəbər verir ki, günün ilk oyunu Sumqayıtda baş tutub.\r\n\r\nŞəhərin eyniadlı komandası sonuncu pillədə qərarlaşan AZAL-ı qəbul edib. Oyunda ilk qolu “təyyarəçilər” vurub. Oyunun 9-cu dəqiqəsində İlqar Ələkbərov fərqlənib. Komandaların hücumlarına baxmayaraq ilk hissə bu hesabla da başa çatıb. \r\n\r\nİkinci hissənin 83-cü dəqiqəsində “Sumqayıt”da çıxış edən Mirabdulla Abbasov komandasına bir xal qazandıran qolu vurub. Qarşılaşma 1:1 hesabı ilə başa çatıb. Bu nəticədən sonra aktivinə bir xal yazan AZAL turnir cədvəlinin sonuncu pilləsindən xilas ola bilməyib. “Sumqayıt” isə 8 xalla 4-cü pillədə qalıb.\r\n\r\nGünün son oyununda isə “Neftçi” və ”Kəpəz” komandaları üz-üzə gəlib. Masazır qəsəbəsində yerləşən ”Əlincə Arena”da baş tutan görüşə paytaxt klubu daha aktiv başlayıb. Oyunun 14-cü dəqiqəsində Denilson Pereyra gəncəlilərin qapısına yol tapıb. Oyunun qalan dəqiqələrində qapılara qol vurulmayıb.\r\n\r\nBununla da ”Neftçi” cari mövsümdə ikinci qələbəsini qazanaraq xallarını 6-ya yüksəldib. Bu qələbə 8 xalı olan “Neftçi”ni turnir cədvəlində 7-ci pillədə qərarlaşan “Zirə”yə yaxınlaşdırıb. “Kəpəz” isə səfər məğlubiyyəti nəticəsində 7 xalla 5-ci pillədədir.\r\n\r\nTurun açılış oyununda “İnter” “Zirə”ni qəbul edib və qarşılaşma 1:1 hesabı ilə yekunlaşıb.\r\n\r\nQeyd edək ki, VII tura sabah keçiriləcək “Qəbələ” – “Qarabağ” oyunu ilə yekun vurulacaq.', 3, 0, '2016-10-01 13:52:52', '2016-10-01 13:52:52'),
(54, 'İlham Əliyev alman və koreyalı həmkarlarını təbrik edib', 'Prezident İlham Əliyev Almaniya Federativ Respublikasının prezidenti Yoaxim Qauka Alman Birliyi Günü münasibətilə təbrik ünvanlayıb.\r\n\r\nOxu.Az-ın AzərTac-a istinadən məlumatına görə, təbrikdə belə deyilir:\r\n\r\nHörmətli cənab Prezident,\r\n\r\nAlmaniya Federativ Respublikasının milli bayramı – Alman Birliyi Günü münasibətilə Sizi və bütün xalqınızı öz adımdan və Azərbaycan xalqı adından ürəkdən təbrik edirəm.\r\nAzərbaycan-Almaniya münasibətləri dinamik və hərtərəfli inkişaf yolundadır. İnanıram ki, dostluq əlaqələrimizin genişlənməsi, əməkdaşlığımızın bütün sahələrdə dərinləşməsi yolunda qarşılıqlı addımlarımız bundan sonra da tərəfdaşlığımızın möhkəmlənməsinə xidmət edəcəkdir.\r\nBelə bir əlamətdar gündə Sizə ən xoş arzularımı yetirir, dost Almaniya xalqına daim əmin-amanlıq və firavanlıq diləyirəm.\r\n\r\nDövlət başçısı həmçinin Koreya Respublikasının prezidenti  xanım Pak Kın Heyi də Koreya Respublikasının milli bayramı – Dövlətin yaranması günü münasibətilə təbrik edib.', 3, 0, '2016-10-01 13:54:21', '2016-10-01 13:54:21'),
(55, 'Aİ ilə Azərbaycan arasında alt komitələr fəaliyyətini bərpa edir', 'Avropa İttifaqı ilə Azərbaycan arasındakı alt komitələr artıq öz fəaliyyətini bərpa edir.\r\n\r\nOxu.Az-ın APA-ya istinadən məlumatına görə, bu barədə Aİ-nin Azərbaycan nümayəndəliyinin rəhbəri Malena Mard bildirib.\r\n\r\nO, oktyabr ayının ortalarında Azərbaycanla Aİ arasında ilk belə tədbirin keçiriləcəyini deyib.\r\n \r\n“Həmin görüşdən sonra növbəti məsələlər haqqında danışmaq mümkündür. “Avropa Şəhərciyi” layihəsində Avropa İttifaqında üzv ölkələr geniş tərkibdə iştirak edir. Bu, Avropa İttifaqının Azərbaycanla tərəfdaşlığı bilavasitə davam etdirmək niyyətində və qərarında olduğunu göstərir. Azərbaycanla güclü tərəfdaşlığımıza davam etməklə yanaşı, istər islahatların aparılması, istər təhsil sahəsində müvafiq mübadilə proqramlarının həyata keçirilməsi sahəsində münasibətlərimizi daha da möhkəmləndirmək istəyirik”, - deyə xanım diplomat qeyd edib.', 3, 0, '2016-10-01 13:59:09', '2016-10-01 13:59:09'),
(56, '“Avro-2020” Bakı loqosunun təqdimatı olub – FOTO', 'Bu gün Bakı Olimpiya Stadionunda UEFA “Avro-2020”-nin ev sahibi şəhərlərindən biri olan Bakının loqosunun təqdimat mərasimi keçirilib.\r\n\r\nOxu.Az AFFA-nın rəsmi saytına istinadən xəbər verir ki, tədbirdə UEFA-nın prezidenti Aleksander Çeferinin rəhbərlik etdiyi nümayəndə heyəti, AFFA-nın rəhbərliyi, “Avro-2020”-nin Bakı şəhərində keçiriləcək oyunlarının Təşkilat Komitəsinin sədri, baş nazirin birinci müavini Yaqub Eyyubov, gənclər və idman naziri Azad Rəhimov, təhsil naziri Mikayıl Cabbarov, Bakı Şəhəri İcra Hakimiyyətinin başçısı Hacıbala Abutalıbov, tədbirin xüsusi qonağı, dünya futbolunun tanınmış simalarından biri, “Avro-1988”-in qalibi, hollandiyalı futbol ulduzu Ruud Qullit  və digər rəsmi şəxslər iştirak ediblər.\r\n\r\nMərasimin aparıcıları tərəfindən çıxış üçün səhnəyə ilk olaraq Təşkilat Komitəsinin sədri, baş nazirin birinci müavini Yaqub Eyyubov dəvət olunub. Sonra UEFA-nın prezidenti Aleksander Çeferin çıxış edib. Ardınca, indiyə qədər keçirilmiş Avropa çempionatlarının maraqlı məqamlarını əks etdirən qısa videoçarx nümayiş olunub. \r\n\r\nRuud Qullitin çıxışından sonra mərasim iştirakçıları “Avro-2020”-nin oyunlarının ev sahibliyinə iddia irəli sürülərkən AFFA-nın sifarişi ilə hazırlanmış videoçarxı izləyiblər. Tədbirin sonunda səhnəyə dəvət olunan akrobatların maraqlı çıxışının müşayiəti ilə UEFA “Avro-2020”-nin ev sahibi şəhərlərindən biri olan Bakının loqosu təqdim olunub.', 4, 0, '2016-10-01 14:12:43', '2016-10-01 14:12:43'),
(57, 'ddrdrdrd', 'drdrdd', 4, 0, '2016-10-01 14:22:41', '2016-10-01 14:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_21_135708_create_admins_table', 1),
('2016_09_21_151741_create_comments_table', 2),
('2016_09_21_152315_create_suallars_table', 3),
('2016_09_21_152805_create_rates_table', 4),
('2016_09_21_153015_create_hekimlers_table', 5),
('2016_09_21_153433_create_meqales_table', 6),
('2016_09_21_153655_create_oyuns_table', 7),
('2016_09_21_154002_create_sliders_table', 8),
('2016_09_21_154201_create_sekillers_table', 9),
('2016_09_25_203423_create_texts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `oyuns`
--

CREATE TABLE `oyuns` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nov` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `oyun_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sekillers`
--

CREATE TABLE `sekillers` (
  `id` int(10) UNSIGNED NOT NULL,
  `sekil` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sekillers`
--

INSERT INTO `sekillers` (`id`, `sekil`, `slider_id`, `created_at`, `updated_at`) VALUES
(1, 'dfgnjfdgngm', 1, NULL, NULL),
(2, 'wefdhjhgj', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `section`, `created_at`, `updated_at`) VALUES
(1, 'Slider1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suallars`
--

CREATE TABLE `suallars` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `hekim_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'murad', '', 'm.murad@code.edu.az', 0, '$2y$10$PA9HR.7tkuKiBrLl8x9mgeacLt.VpUHmgfIDVEbY/oInl3fB74O4e', NULL, '2016-09-25 10:46:36', '2016-09-25 10:46:36'),
(2, 'Murad', '', 'murad.mikayilzade@gmail.com', 0, '$2y$10$4oPGFJWBljZ5RqnErsgxVu6zFiw.fVxtidSszE7bzp6bm5sgmZGQK', 'AF5n58hw3IrFrHRkOoeKMRfs7372S61osGEnsRc7fWMUHH2hdkLWrarjJ6jw', '2016-09-30 09:07:44', '2016-09-30 09:09:26'),
(3, 'Murad', '', 'murad.m@gmail.com', 0, '$2y$10$/kKfdNah9DlxhdabmwKA.u3m5mX53/BzeqaZd9RgKF2G11n6vKQTu', 'r4UXmIu9Xz2yGzRraPVcrvKv6szhqcqvNANONpqVxzZVLKbcwc6LXTtNq1cn', '2016-09-30 16:20:56', '2016-09-30 16:29:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hekimlers`
--
ALTER TABLE `hekimlers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hekimlers_email_unique` (`email`);

--
-- Indexes for table `meqales`
--
ALTER TABLE `meqales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oyuns`
--
ALTER TABLE `oyuns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekillers`
--
ALTER TABLE `sekillers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suallars`
--
ALTER TABLE `suallars`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hekimlers`
--
ALTER TABLE `hekimlers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `meqales`
--
ALTER TABLE `meqales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `oyuns`
--
ALTER TABLE `oyuns`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sekillers`
--
ALTER TABLE `sekillers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `suallars`
--
ALTER TABLE `suallars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
