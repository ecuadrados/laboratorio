-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2022 a las 23:05:06
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laboratorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `paciente_id` bigint(20) NOT NULL,
  `paciente_nombre1` varchar(255) NOT NULL,
  `paciente_nombre2` varchar(255) DEFAULT NULL,
  `paciente_apellido1` varchar(255) NOT NULL,
  `paciente_apellido2` varchar(255) DEFAULT NULL,
  `paciente_tipo_documento` varchar(255) NOT NULL,
  `paciente_documento` varchar(30) NOT NULL,
  `paciente_fecha_nacimiento` date DEFAULT NULL,
  `paciente_sexo` varchar(30) NOT NULL,
  `paciente_edad` int(11) DEFAULT NULL,
  `paciente_barrio` int(11) DEFAULT NULL,
  `paciente_direccion` varchar(255) DEFAULT NULL,
  `paciente_telefono` varchar(30) DEFAULT NULL,
  `paciente_celular` varchar(30) DEFAULT NULL,
  `paciente_email` varchar(255) DEFAULT NULL,
  `paciente_estado` tinyint(1) NOT NULL DEFAULT 1,
  `fecha_actualizacion` date NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`paciente_id`, `paciente_nombre1`, `paciente_nombre2`, `paciente_apellido1`, `paciente_apellido2`, `paciente_tipo_documento`, `paciente_documento`, `paciente_fecha_nacimiento`, `paciente_sexo`, `paciente_edad`, `paciente_barrio`, `paciente_direccion`, `paciente_telefono`, `paciente_celular`, `paciente_email`, `paciente_estado`, `fecha_actualizacion`, `fecha_creacion`) VALUES
(1, 'Margarita', NULL, 'Rosales', 'Rodriguez', '1', '100', '2001-11-05', '', 21, 2, 'Calle 50', '300', '312', 'mar@gmail.com', 1, '2022-02-26', '2022-02-26 04:48:04'),
(2, 'sdfsd', 'dsfsd', '33', 'sefsd', 'Cedula Ciudadania', '32423', '2022-03-09', 'Masculino', 23, NULL, 'dsfsd', '3432', '234324', NULL, 1, '2022-03-02', '2022-03-03 00:33:37'),
(3, 'Martina', 'Julieth', 'Triana', 'Acevedo', 'Cedula Ciudadania', '1142226099', '2000-06-13', 'Femenino', 21, NULL, 'Cr t # 5o 21 Socorro', '66789012', '3124567890', 'martina@gmail.com', 1, '2022-03-03', '2022-03-03 20:45:17'),
(4, 'Julio', 'Antonio', 'Perez', 'Salcedo', 'Tarjeta de Identidad', '1123456790', '2013-05-10', 'Masculino', 8, NULL, 'vsd', NULL, NULL, NULL, 1, '2022-03-03', '2022-03-03 20:50:11'),
(5, 'Teresa', 'Isabel', 'Gomez', 'Perez', 'Cedula Ciudadania', '73104104', '1984-09-04', 'Femenino', 32, NULL, 'Calle 50 i', '788888', '33242323', 'tere@tere.com', 1, '2022-03-04', '2022-03-04 05:38:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `resultado_id` bigint(20) NOT NULL,
  `paciente_documento` varchar(30) NOT NULL,
  `resultado_paciente` varchar(255) DEFAULT NULL,
  `resultado_fecha` date NOT NULL,
  `resultado_token` varchar(255) NOT NULL,
  `resultado_estado` tinyint(1) NOT NULL DEFAULT 1,
  `resultado_datos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `resultado_filename` varchar(255) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `resultado`
--

INSERT INTO `resultado` (`resultado_id`, `paciente_documento`, `resultado_paciente`, `resultado_fecha`, `resultado_token`, `resultado_estado`, `resultado_datos`, `resultado_filename`, `fecha_creacion`) VALUES
(1, '900800', 'Sakura', '2022-03-03', 'af5ac4ea701d4b3c5f852d2dd07e551f', 1, NULL, '900800_22-03-03_05_44_27', '2022-03-03 22:44:28'),
(2, '1100', 'Mai Shiranui', '2022-03-01', '376dc85a7ef531828707b0008b9157d9', 1, NULL, '1100_22-03-03_10_11_43', '2022-03-04 03:11:44'),
(3, '34242343', 'Teresa Isabel Gomez Perez', '2022-03-04', '1fdade04f8472db2b781360629697353', 1, NULL, '34242343_22-03-04_12_40_08', '2022-03-04 05:40:09'),
(4, '1000', 'Gina Ortega', '2022-02-04', '966a523e295f058400ea2b586162e40c', 1, NULL, '1000_22-03-04_10_15_13', '2022-03-05 03:15:14'),
(5, '1000', 'Gina Ortega', '2022-02-04', 'c852b23c126ae8b6303753de3a847759', 1, NULL, '1000_22-03-05_07_26_31', '2022-03-06 00:26:32'),
(6, '2000', 'Sara Corrales', '2022-02-04', 'bde3896adb6aa7dccdb8b9037e631a7d', 1, NULL, '2000_22-03-05_07_27_52', '2022-03-06 00:27:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'makoto', 'ecuadrados@gmail.com', NULL, '$2y$10$9VBWHTTI10JxlGA3wbKFQeJwucghTPpf8nq7A8im7r5GTxnxnQhOi', NULL, '2022-02-26 08:45:22', '2022-02-26 08:45:22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`paciente_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`resultado_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `paciente_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `resultado_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
