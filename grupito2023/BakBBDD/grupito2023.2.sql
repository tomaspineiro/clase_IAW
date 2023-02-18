-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 18-02-2023 a las 18:22:41
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
  `fecha` int(11) NOT NULL DEFAULT current_timestamp(),
  `idEstado` int(11) DEFAULT NULL,
  `costeTotal` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(9, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(10, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(11, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(12, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(13, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(14, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(15, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(16, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(17, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(18, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(19, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(20, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(21, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1),
(22, 'Lámpara de techo', 'Lámpara de techo Led con Panel de Lustre para el hogar, lámparas de techo modernas, accesorio cuadrado para dormitorio, sala de estar, candelabro colgante', '    Color: Blanco\r\n    Dispositivo inteligente: no\r\n    Uso: Iluminación diaria\r\n    Características: Ceiling light\r\n    Número de modelo: Ceiling lamp\r\n    Regulable: No\r\n    Finalizar: Ninguno\r\n    Garantía: 1 year\r\n    Técnicas: Perforado\r\n    Zona de iluminación: 10-15 m2\r\n    Aplicación: KİTCHEN,Comedor,Habitación,recibidor,estudio,BATHROOM\r\n    Tipo de interruptor: Ninguno\r\n    Número de fuentes de luz: >20\r\n    Material: PVC\r\n    Tipo de Base: Cuña\r\n    Estilo: Moderno\r\n    Estilo de instalación: Montaje en superficie\r\n    Material del cuerpo: PVC\r\n    Certificación: CCC,ce,ROHS\r\n    Voltaje: 165-265V(165-265V)\r\n    Fuente de energía: AC\r\n    Fuente de luz: Bombillas LED\r\n    Bombillas incluidas: Si\r\n    Nombre de la marca: CHENBEN\r\n    Origen: CN(Origen)\r\n    Tipo de artículo: Luces para el techo\r\n    Certificación: RoHS,CE,CCC\r\n    Installation: Surface Mounted\r\n    Power: 15W/20W/30W/40W/50W\r\n    Voltage: AC180-265V\r\n    Material: PC+ABS\r\n    Product name: Led Ceiling lamp/panel light\r\n    Decorative A: Bedroom/Living Room\r\n    Decorative B: Kitchen/Loft\r\n    Scenes: Home/Indoor Lighting', 'img/lampara450x300.jpg', 'img/lampara600x600.jpg', 15.22, 10.25, 1);

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
  `admin` tinyint(1) NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
