-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2022 a las 02:15:40
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sabrossita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `celular_u` varchar(10) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `carne` int(100) NOT NULL,
  `pollo` int(100) NOT NULL,
  `elementos` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `notas` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `total` int(255) NOT NULL,
  `proceso` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_usuario`, `celular_u`, `cantidad`, `carne`, `pollo`, `elementos`, `notas`, `total`, `proceso`) VALUES
(1, 2, '9933333333', 3, 2, 1, 'QUESO,ARROZ,CEBOLLA,', 'Hola, quiero que mi pedido vaya completamente lleno XD', 54, 'ENTREGADO'),
(2, 2, '9933333333', 5, 4, 1, 'QUESO,ARROZ,CEBOLLA,', 'ewscwe', 90, 'ENTREGADO'),
(3, 1, '0192837465', 6, 3, 3, 'QUESO,ARROZ,CEBOLLA,', 'vfvbe', 108, 'ENTREGADO'),
(4, 5, '1234567890', 5, 2, 3, 'QUESO,', 'wreggerb', 90, 'ENTREGADO'),
(5, 2, '9933333333', 5, 3, 2, 'QUESO,ARROZ,CEBOLLA,', 'Pedido de prueba con #id de pedido 3 numero de prueba 3 con este user', 90, 'ENTREGADO'),
(6, 2, '9933333333', 3, 2, 1, 'QUESO,CEBOLLA,', 'ewfewf', 54, 'ENTREGADO'),
(7, 2, '9933333333', 6, 3, 3, 'QUESO,ARROZ,CEBOLLA,', 'Quiero que las de carne vayan en contenedores de 5 en 5 y que las de pollo no lleven cebolla ni tampoco mole.Quiero que las de carne vayan en contenedores de 5 en 5 y que las de pollo no lleven cebolla ni tampoco mole.Quiero que las de carne vayan en contenedores de 5 en 5 y que las de pollo no lleven cebolla ni tampoco mole.', 108, 'ENTREGADO'),
(8, 1, '0192837465', 6, 3, 3, 'QUESO,ARROZ,CEBOLLA,', 'dewfwef', 108, 'ENTREGADO'),
(9, 1, '0192837465', 12, 10, 2, 'QUESO,ARROZ,CEBOLLA,', 'Quiero que las de carne vayan en contenedores de 5 en 5 y que las de pollo no lleven cebolla ni tampoco mole.', 216, 'ENTREGADO'),
(10, 1, '9934253847', 4, 3, 1, 'QUESO,ARROZ,CEBOLLA,', 'ewfwefwe', 72, 'ENTREGADO'),
(11, 4, '9933438192', 6, 4, 2, 'QUESO,ARROZ,', 'ewefwefwefwefwefwefwefewfwefwecewcwec efwfqdqw fewf ewfewfwc regcs  ', 108, 'ENTREGADO'),
(12, 4, '9933438192', 11, 9, 2, 'QUESO,ARROZ,CEBOLLA,', 'qwertyuiopasdfghjklñzxcvbnm\r\nergfbfvb fgbdv', 198, 'ENTREGADO'),
(13, 4, '9933438192', 0, 0, 0, 'NADA', '', 0, 'PROCESO'),
(14, 4, '9933438192', 0, 0, 0, 'NADA', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex vero est saepe earum quae quasi sint perspiciatis consectetur reiciendis, odit ratione qui, voluptatum eius inventore molestiae incidunt adipisci voluptate rem suscipit dolor tempora, ea dolore magni corporis? A, doloribus. Laboriosam asperiores molestias maiores debitis dolorum odit quidem veniam ullam perspiciatis atque placeat dolor similique ad id, assumenda voluptas blanditiis sunt mollitia ut, cupiditate ipsa quae natus, quam por', 0, 'PROCESO'),
(15, 1, '9934253847', 0, 0, 0, '', '', 0, 'PROCESO'),
(16, 1, '9934253847', 0, 0, 0, '', '', 0, 'PROCESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(10) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `nivelU` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `celular`, `direccion`, `contrasena`, `nombre`, `apellido`, `nivelU`) VALUES
(1, 'luis', '9934253847', '1era Cerrada de Prol. De Ignacio Zaragoza', '12', 'Luis', 'Castillo', 1),
(2, 'lopez', '9933333333', 'Pomoca, Valle Real', '1234', 'Edwind', 'Lopez', 2),
(3, 'PEDRO', '9931270831', 'New York\r\n', '123', 'Nombre', 'Apellido', 2),
(4, 'lila', '9933438192', 'Por ahi, por ahi, por ahi', '1234', 'Francisco', 'Canul', 2),
(5, 'Jade1', '1234567890', '', '1234', 'Jade', 'Castillo', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
