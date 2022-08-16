-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 16-05-2022 a las 08:44:28
-- Versión del servidor: 8.0.29-0ubuntu0.20.04.3
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `S.I.G.A.I`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar_sigai`
--

CREATE TABLE `auxiliar_sigai` (
  `id` int UNSIGNED NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `id_usuario` int NOT NULL,
  `id_bienes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bienes`
--

CREATE TABLE `bienes` (
  `serial` varchar(80) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_compra` date NOT NULL,
  `costo` double NOT NULL,
  `id_color` int NOT NULL,
  `id_marca` int NOT NULL,
  `id_modelo` int NOT NULL,
  `id_ubicacion` int NOT NULL,
  `id_tipo` int NOT NULL,
  `id_status` int NOT NULL,
  `id_nombre_tipo` int NOT NULL,
  `id_fuente_financiamiento` int NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `division`
--

CREATE TABLE `division` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fuente_financiamiento`
--

CREATE TABLE `fuente_financiamiento` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerencia`
--

CREATE TABLE `gerencia` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_bien`
--

CREATE TABLE `nombre_bien` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`nombre`, `id`) VALUES
('administrador', 1),
('coordinador', 2),
('basico', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_bienes`
--

CREATE TABLE `tipo_bienes` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `nombre` varchar(80) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint UNSIGNED NOT NULL,
  `nombres` varchar(80) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  `cedula` varchar(80) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `perfil` varchar(80) NOT NULL,
  `id_perfil` int DEFAULT NULL,
  `id_gerencia` int DEFAULT NULL,
  `id_division` int DEFAULT NULL,
  `id_cargo` int DEFAULT NULL,
  `id_bienes` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `cedula`, `correo`, `telefono`, `usuario`, `pass`, `perfil`, `id_perfil`, `id_gerencia`, `id_division`, `id_cargo`, `id_bienes`) VALUES
(1, 'Danny Jose', 'Jimenez Gutierrez', '16029567', 'dennaly88@gmail.com', '4166113845', 'danny', '8', 'administrador', NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar_sigai`
--
ALTER TABLE `auxiliar_sigai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_bienes`),
  ADD KEY `id_bienes` (`id_bienes`);

--
-- Indices de la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_color` (`id_color`),
  ADD KEY `id_marca` (`id_marca`),
  ADD KEY `id_modelo` (`id_modelo`,`id_ubicacion`,`id_tipo`),
  ADD KEY `id_status` (`id_status`,`id_nombre_tipo`,`id_fuente_financiamiento`),
  ADD KEY `id_ubicacion` (`id_ubicacion`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_nombre_tipo` (`id_nombre_tipo`),
  ADD KEY `id_fuente_financiamiento` (`id_fuente_financiamiento`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `division`
--
ALTER TABLE `division`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `fuente_financiamiento`
--
ALTER TABLE `fuente_financiamiento`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `gerencia`
--
ALTER TABLE `gerencia`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `nombre_bien`
--
ALTER TABLE `nombre_bien`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `tipo_bienes`
--
ALTER TABLE `tipo_bienes`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_perfil` (`id_perfil`),
  ADD KEY `id_gerencia` (`id_gerencia`),
  ADD KEY `id_division` (`id_division`),
  ADD KEY `id_cargo` (`id_cargo`),
  ADD KEY `id_bienes` (`id_bienes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliar_sigai`
--
ALTER TABLE `auxiliar_sigai`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auxiliar_sigai`
--
ALTER TABLE `auxiliar_sigai`
  ADD CONSTRAINT `auxiliar_sigai_ibfk_1` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `bienes`
--
ALTER TABLE `bienes`
  ADD CONSTRAINT `bienes_ibfk_1` FOREIGN KEY (`id_color`) REFERENCES `color` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_3` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_4` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_5` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_bienes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_6` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_7` FOREIGN KEY (`id_nombre_tipo`) REFERENCES `nombre_bien` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `bienes_ibfk_8` FOREIGN KEY (`id_fuente_financiamiento`) REFERENCES `fuente_financiamiento` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_perfil`) REFERENCES `perfil` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_gerencia`) REFERENCES `gerencia` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`id_division`) REFERENCES `division` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_4` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_5` FOREIGN KEY (`id_bienes`) REFERENCES `bienes` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
