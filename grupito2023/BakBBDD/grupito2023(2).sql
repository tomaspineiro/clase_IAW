-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-03-2023 a las 15:00:39
-- Versión del servidor: 10.5.18-MariaDB-0+deb11u1
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupito2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesPedidos`
--

CREATE TABLE `detallesPedidos` (
  `idDetallesPedidos` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallesPedidos`
--

INSERT INTO `detallesPedidos` (`idDetallesPedidos`, `idProducto`, `idPedido`, `cantidad`, `precio`) VALUES
(11, 2, 23, 1, 1.00),
(12, 3, 24, 4, 1.00),
(13, 6, 24, 19, 1.00),
(14, 4, 25, 1, 1.00),
(15, 3, 26, 1, 1.00),
(16, 3, 27, 1, 1.00),
(17, 2, 28, 1, 1.00),
(18, 1, 29, 1, 1.00),
(19, 2, 30, 1, 1.00),
(20, 4, 31, 1, 1.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `estado`) VALUES
(1, 'enviado'),
(2, 'cancelado'),
(3, 'entramites'),
(4, 'pagado'),
(5, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `idEstado` int(11) DEFAULT 1,
  `costeTotal` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idUsuario`, `fecha`, `idEstado`, `costeTotal`) VALUES
(23, 4, '2023-03-06 13:18:21', 1, 10.25),
(24, 4, '2023-03-06 13:19:49', 1, 235.75),
(25, 4, '2023-03-06 13:20:02', 1, 10.25),
(26, 4, '2023-03-06 13:20:47', 1, 10.25),
(27, 4, '2023-03-06 13:21:41', 1, 10.25),
(28, 4, '2023-03-06 13:22:39', 1, 10.25),
(29, 4, '2023-03-06 13:24:27', 1, 10.25),
(30, 4, '2023-03-06 13:24:40', 1, 10.25),
(31, 4, '2023-03-06 13:25:17', 1, 10.25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `intoDescripcion` varchar(200) NOT NULL,
  `Descripcion` text NOT NULL,
  `imagenP` varchar(100) NOT NULL,
  `imagenG` varchar(100) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `precioOferta` float(10,2) DEFAULT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `intoDescripcion`, `Descripcion`, `imagenP`, `imagenG`, `precio`, `precioOferta`, `online`) VALUES
(1, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(2, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(3, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(4, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(5, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(6, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(7, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(8, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(9, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `online` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `nombre`, `password`, `email`, `apellidos`, `direccion`, `telefono`, `admin`, `online`) VALUES
(3, 'pepe', '$2y$10$OOLUNVE.SMnpry89pDVksu6oUsvVu.egFhvCSmNW10bYMadYIzCfu', 'pepe@if3-04.asir', 'grupito2023', 'noalla', '628186657', 0, 1),
(4, 'tomas', '$2y$10$3W2ZnMDdsMFRWl33SRFXWeQAFPTBY4tpAZmhnrtvI4CBl23m3DCCy', 'tomas@if3-04.asir', 'grupito2023', 'noalla', '628186657', 0, 1),
(5, 'admin', '$2y$10$hQ.9W/r4OD2NwzsWxOSzl.qvVnql.at/KQFLaYm9QnmKmLhEcs/Wi', 'admin@if3-04.asir', 'grupito2023', 'cangas', '628186657', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallesPedidos`
--
ALTER TABLE `detallesPedidos`
  ADD PRIMARY KEY (`idDetallesPedidos`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallesPedidos`
--
ALTER TABLE `detallesPedidos`
  MODIFY `idDetallesPedidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
