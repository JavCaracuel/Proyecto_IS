-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 02-01-2021 a las 18:34:51
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `eac_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `genero` varchar(1) DEFAULT 'H',
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `precio`, `stock`, `genero`, `tipo`) VALUES
(1, 'Jersey con lunas', 25, 600, 'M', 'chaqueta'),
(2, 'Chaqueta Guns and Roses', 45, 554, 'M', 'chaqueta'),
(3, 'Gabardina roja', 65, 10857, 'M', 'chaqueta'),
(4, 'Chupa de cuero', 150, 998, 'M', 'chaqueta'),
(5, 'Americana vaquera', 75, 4524, 'H', 'chaqueta'),
(6, 'Americana Beige', 80, 3237, 'H', 'chaqueta'),
(7, 'Plumas granate', 50, 3701, 'H', 'chaqueta'),
(8, 'Chubasquero blaugrana', 20, 3670, 'H', 'chaqueta'),
(9, 'Camisa naranja', 35, 6297, 'M', 'camiseta'),
(10, 'Vestido rojo', 90, 5067, 'M', 'camiseta'),
(11, 'Top blanco', 28, 6817, 'M', 'camiseta'),
(12, 'Vestido azul y negro corto', 30, 5815, 'M', 'camiseta'),
(13, 'Camiseta manga larga azul', 45, 8517, 'H', 'camiseta'),
(14, 'Polo manga larga gris', 54, 5654, 'H', 'camiseta'),
(15, 'Camiseta blanca polo', 62, 7834, 'H', 'camiseta'),
(16, 'Camiseta manga larga never sorry', 17, 6520, 'H', 'camiseta'),
(17, 'Gafas tipo aviador', 42, 8917, 'M', 'complemento'),
(18, 'Gafas estampado leopardo', 30, 5762, 'M', 'complemento'),
(19, 'Bolso rosa', 34, 1983, 'M', 'complemento'),
(20, 'Cinturon negro', 9, 1503, 'M', 'complemento'),
(21, 'Reloj lotus', 15000, 950, 'H', 'complemento'),
(22, 'Riñonera de cuero', 15, 4581, 'H', 'complemento'),
(23, 'Gorra blanca y azul', 6, 29, 'H', 'complemento'),
(24, 'Corbata', 68, 4391, 'H', 'complemento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(150) NOT NULL,
  `direccion` text,  -- VIVA ESPAÑA
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `direccion`, `email`, `password`) VALUES
(1, 'Javier', 'Caracuel', 'Avenida del Teniente Caracuel', 'j.caracuel@ufv.es', 'qwerty'),
(2, 'Jesus', 'Martinez', 'Calle sin numero', 'jesus.martinez@ufv.es', 'qwerty'),
(3, 'Pablo', 'Alcazar', 'Calle getafe', 'p.alcazar@ufv.es', 'qwerty'),
(5, 'Julio', 'Fulanitodetal', 'C/ Tangana', 'julio.fdt@ufv.es', 'qwerty'),
(6, 'William', 'Echeverry', 'C/ william williamson', 'madremiawillty@compañero.es', 'qwerty');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `ventas`
--
DELIMITER $$
CREATE TRIGGER `actualizastock` AFTER INSERT ON `ventas` FOR EACH ROW UPDATE
        productos
    SET
       stock = stock -1
    WHERE
        productos.id_producto = NEW.id_producto
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
