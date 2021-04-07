-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-03-2021 a las 16:47:58
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `moall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Products`
--

CREATE TABLE `Products` (
  `id` int(8) NOT NULL,
  `product_type` enum('formen','forwomen') DEFAULT NULL,
  `category_name` tinytext NOT NULL,
  `size` enum('s','m','l','xl') NOT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Products`
--

INSERT INTO `Products` (`id`, `product_type`, `category_name`, `size`, `photo_url`, `name`, `description`, `price`, `createdAt`, `updatedAt`) VALUES
(1, 'forwomen', 'ROPA DEPORTIVA PARA MUJER', 's', 'https://res.cloudinary.com/kurtcovayne4/image/upload/v1616818180/pestana4/m1_yjv5wm.webp', 'LICRA DEPORTIVA NEGRA MUJER', 'Talle alto y refuerzo forrado.\r\nDiseñado para entrenamiento y vida activa, ajusta como una segunda piel, brindándote apoyo, amoldamiento, cobertura y libertad de movimiento.\r\nCompresión que disimula las pequeñas imperfecciones y sostiene el músculo evitando la fatiga muscular. Pretina ancha, plana y anatómica que moldea tu cintura y abdomen.', 30000, '2021-03-29 08:01:27', '2021-03-29 08:01:27'),
(2, 'formen', 'ROPA DEPORTIVA PARA HOMBRE', 'xl', 'https://res.cloudinary.com/kurtcovayne4/image/upload/v1616818182/pestana4/h4_p29mhh.webp', 'BERMUDA DEPORTIVA HOMBRE', 'Pantaloneta con diseño deportivo de textura suave y transpirable a 1 tono, por la combinación de sus hilos tiene un tacto sedoso y natural. Corte amplio, tiro medio y bota recta. Tiene pretina elástica con cordón de ajuste, bolsillos y dobladillos en sus terminaciones.', 55000, '2021-03-30 00:14:14', '2021-03-30 00:26:38'),
(3, 'forwomen', 'ROPA DEPORTIVA PARA MUJER', 's', 'https://res.cloudinary.com/kurtcovayne4/image/upload/v1616818179/pestana4/m3_s2poqx.webp', 'LICRA DEPORTIVA NEGRA MUJER', 'Talle alto y refuerzo forrado.\r\nDiseñado para entrenamiento y vida activa, ajusta como una segunda piel, brindándote apoyo, amoldamiento, cobertura y libertad de movimiento.\r\nCompresión que disimula las pequeñas imperfecciones y sostiene el músculo evitando la fatiga muscular. Pretina ancha, plana y anatómica que moldea tu cintura y abdomen.', 30000, '2021-03-30 09:43:09', '2021-03-30 09:45:35'),
(4, 'forwomen', 'ROPA DEPORTIVA PARA MUJER', 's', 'https://res.cloudinary.com/kurtcovayne4/image/upload/v1616818178/pestana4/m2_bhbcec.webp', 'CONJUNTO JOGGER NEGRO MUJER', 'Este conjunto elaborado en mezcla de algodón súper suave al tacto te encantará por su diseño amplio y totalmente cómodo, terminado con procesos de teñido tie dye que le aportan un espíritu sesentero y a la vez muy en tendencia.\r\nSilueta amplia tipo jogger, diseño tiro medio alto, pretina enresortada, bolsillos laterales en diagonal y bolsillos de parche atrás, ruedo en rib, manchones intencionales obtenidos a través de procesos de teñido tie dye que pueden variar de una prenda a otra. Matching item disponible. Información sobre talla: Daisy mide 1,76 y usa un pantalón talla M.', 100000, '2021-03-30 09:44:48', '2021-03-30 09:44:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Purchases`
--

CREATE TABLE `Purchases` (
  `id` int(8) NOT NULL,
  `creator_id` int(8) DEFAULT NULL,
  `product_id` int(8) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Purchases`
--

INSERT INTO `Purchases` (`id`, `creator_id`, `product_id`, `createdAt`, `updatedAt`) VALUES
(1, 3, 16, '2021-03-30 00:29:53', '2021-03-30 00:29:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Users`
--

CREATE TABLE `Users` (
  `id` int(8) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `password` char(95) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `password`, `createdAt`, `updatedAt`) VALUES
(1, 'admin admin', 'admin@moall.com', '$2y$11$rsL5SxuzOm/PaddiNTj89eb7aaN.6.s/K68nSJIK0MYDJ5/kVem/6', '2021-03-28 21:57:58', '2021-03-28 21:57:58'),
(2, 'John Alejandro González', 'johnalejandrog.g4@gmail.com', '$2y$11$eIeiy5lkgTpc.UUIVUkjYu6Lunvv1WM4T6q2c.4qWe7H5KL2jasv2', '2021-03-29 22:39:18', '2021-03-29 22:39:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `Products` ADD FULLTEXT KEY `fulltextidx` (`category_name`,`name`,`description`);

--
-- Indices de la tabla `Purchases`
--
ALTER TABLE `Purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `creator_id` (`creator_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indices de la tabla `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Purchases`
--
ALTER TABLE `Purchases`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Purchases`
--
ALTER TABLE `Purchases`
  ADD CONSTRAINT `Purchases_ibfk_1` FOREIGN KEY (`creator_id`) REFERENCES `Users` (`id`),
  ADD CONSTRAINT `Purchases_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
