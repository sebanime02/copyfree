-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-07-2016 a las 22:54:08
-- Versión del servidor: 5.5.48-37.8
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `soypayan_copias_gratis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE IF NOT EXISTS `campana` (
  `ID_CAMPANA` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `ID_EMPRESA` int(11) NOT NULL,
  `NOMBRE_CAMPANA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_CAMPANA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_campana`
--

CREATE TABLE IF NOT EXISTS `detalle_campana` (
  `ID_DETALLE_CAMPANA` int(11) NOT NULL,
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `ID_CAMPANA` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCRIPCION` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_copia`
--

CREATE TABLE IF NOT EXISTS `detalle_copia` (
  `ID_DETALLE_COPIA` int(11) NOT NULL,
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `ID_USUARIO` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `DESCRIPCION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `ID_EMPRESA` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_EMPRESA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_EMPRESA` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION_EMPRESA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LONGITUD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `LATITUD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `LOGO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimiento`
--

CREATE TABLE IF NOT EXISTS `establecimiento` (
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_ESTABLECIMIENTO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_ESTABLECIMIENTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `DIRECCION_ESTABLECIMIENTO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `COPIAS_DISPONIBLES` int(11) NOT NULL DEFAULT '0',
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LONGITUD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `LATITUD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `establecimiento`
--

INSERT INTO `establecimiento` (`ID_ESTABLECIMIENTO`, `ID_ESTADO`, `NOMBRE_ESTABLECIMIENTO`, `DESCRIPCION_ESTABLECIMIENTO`, `DIRECCION_ESTABLECIMIENTO`, `COPIAS_DISPONIBLES`, `FECHA_INSERSION`, `LONGITUD`, `LATITUD`) VALUES
(1, 1, 'Centro de Copiado Ingenieria Civil', 'Facultad de ElectrÃ³nica y Civil', 'Segundo Piso', 200, '2016-03-09 20:55:35', '-76.5990925', '2.4463228'),
(2, 1, 'CopyHelados', 'Facultad de Salud', 'Primer piso ', 0, '2016-03-10 20:06:55', '-76.598844636075', '2.4515058929096307'),
(3, 1, '', '', '', 0, '2016-03-10 20:07:13', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_ESTADO` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`ID_ESTADO`, `NOMBRE_ESTADO`, `DESCRIPCION_ESTADO`, `FECHA_INSERSION`) VALUES
(1, 'ACTIVO', 'USUARIO CON ACTIVIDAD', '2016-01-10 07:11:51'),
(2, 'INACTIVO', 'USUARIO SIN ACTIVIDAD', '2016-01-10 10:45:49'),
(3, 'PREACTIVO', 'USUARIO REGISTRADO SIN CONFIRMACION', '2016-01-11 09:53:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE IF NOT EXISTS `facultad` (
  `ID_FACULTAD` int(11) NOT NULL,
  `ID_INSTITUCION` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_FACULTAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_FACULTAD` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_FACULTAD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE IF NOT EXISTS `institucion` (
  `ID_INSTITUCION` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_INSTITUCION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_INSTITUCION` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_INSTITUCION` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LOGO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE IF NOT EXISTS `mensaje` (
  `ID_MENSAJE` int(11) NOT NULL,
  `DESCRIPCION` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`ID_MENSAJE`, `DESCRIPCION`) VALUES
(1, 'El estudiante no esta registrado'),
(2, 'El estudiante no esta activo'),
(3, ''),
(4, 'La cantidad a imprimir es mayor a la cantidad de copias disponibles del usuario'),
(5, 'La cantidad a imprimir es mayor a la cantidad de copias disponibles del establecimiento'),
(6, 'Se descontaron las copias con exito'),
(7, 'Se inserto el registro satisfactoriamente'),
(8, 'El usuario ya se encuentra registrado'),
(9, 'El usuario no es un estudiante'),
(10, 'El(a) estudiante no tiene copias disponibles'),
(11, 'Numero de Contraseña o usuario invalido'),
(12, 'Su registro ha sido exitoso, activa tu cuenta con el link que te llegara al correo en aproximadamente 10 Minutos (Verificar la bandeja de correos no deseados)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE IF NOT EXISTS `tipo_documento` (
  `ID_TIPO_DOCUMENTO` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_TD` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_TD` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_TD` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`ID_TIPO_DOCUMENTO`, `ID_ESTADO`, `NOMBRE_TD`, `CODIGO_TD`, `DESCRIPCION_TD`, `FECHA_INSERSION`) VALUES
(1, 1, 'Cedula de Ciudadania', 'CC', NULL, '2016-01-10 08:51:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `NOMBRE_TU` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION_TU` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`ID_TIPO_USUARIO`, `ID_ESTADO`, `NOMBRE_TU`, `DESCRIPCION_TU`, `FECHA_INSERSION`) VALUES
(1, 1, 'ADMINISTRADOR', 'Tendra Acceso a cualquier contenido de la aplicacion', '2016-01-10 08:53:44'),
(2, 1, 'ASESOR', NULL, '2016-01-10 09:22:15'),
(3, 1, 'ESTUDIANTE', NULL, '2016-01-10 10:16:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  `ID_ESTABLECIMIENTO` int(11) NOT NULL,
  `ID_FACULTAD` int(11) NOT NULL,
  `ID_TIPO_DOCUMENTO` int(11) NOT NULL,
  `ID_TIPO_USUARIO` int(11) NOT NULL,
  `NOMBRES` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `APELLIDOS` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `NUMERO_DOCUMENTO` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `PASSWORD` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CELULAR` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `CORREO` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DIRECCION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `FECHA_INSERSION` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PROGRAMA` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `COPIAS_DISPONIBLES` int(11) NOT NULL DEFAULT '0',
  `FECHA_NACIMIENTO` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_USUARIO`, `ID_ESTADO`, `ID_ESTABLECIMIENTO`, `ID_FACULTAD`, `ID_TIPO_DOCUMENTO`, `ID_TIPO_USUARIO`, `NOMBRES`, `APELLIDOS`, `NUMERO_DOCUMENTO`, `PASSWORD`, `CELULAR`, `CORREO`, `DIRECCION`, `FECHA_INSERSION`, `PROGRAMA`, `COPIAS_DISPONIBLES`, `FECHA_NACIMIENTO`) VALUES
(1, 1, 1, 1, 1, 3, 'placido acleon', 'fernandez alarcon', '4613122', '4613122', '3113974762', 'pfernandez@unicauca.edu.co', 'NO_APLICA', '2016-03-26 14:08:05', 'Tecnologia en Telematica', 60, '1980-02-29'),
(2, 1, 1, 1, 1, 3, 'Ivonne daniela ', 'Montano GÃ³mez ', '1061806380', '1061806380', '3122695120', 'ivonnemon@unicauca.edu.co', 'NO_APLICA', '2016-04-02 02:13:58', 'TelemÃ¡tica ', 60, '1997-11-23'),
(3, 1, 1, 1, 1, 2, 'Ricardo', 'Enriquez', '1061726346', '1061726346', '3128435364', 'ricardoeq90@gmail.com', 'NO_APLICA', '2016-04-03 19:26:59', 'Electronica', 60, '1990-03-01'),
(11, 3, 1, 1, 1, 3, 'MAYELI', 'JOAQUI', '1061768449', '1061768449', '3122201796', 'majovil-94@hotmail.com', 'NO_APLICA', '2016-04-14 20:44:07', 'CONTADURIA UBLICA', 60, '1994-03-14'),
(12, 1, 1, 1, 1, 3, 'David', 'MuÃ±oz', '98100569043', '98100569043', '3196297262', 'killer981005@gmail.com', 'NO_APLICA', '2016-04-16 01:08:01', 'Ing Agroindustrial', 60, '1998-10-05'),
(10, 3, 1, 1, 1, 3, 'SHIRLEY', 'ACOSTA', '1143846369', '1143846369', '3182100112', 'shirley-acosta1992@hotmail.com', 'NO_APLICA', '2016-04-14 20:26:33', 'CONTADURIA UBLICA', 60, '1992-12-27'),
(8, 1, 1, 1, 1, 3, 'Carlos Isamel', 'Lopez Parra', '1061728303', '1061728303', '3173198681', 'cilopz90m@gmail.com', 'NO_APLICA', '2016-04-12 23:57:12', 'Ingenieria de sistemas', 60, '1990-05-28'),
(9, 3, 1, 1, 1, 3, 'karina', 'enriquez', '1126447025', '1126447025', '3127437927', 'k_@dd', 'NO_APLICA', '2016-04-13 01:57:09', 'dddddfadd', 60, '1222-12-02'),
(13, 1, 1, 1, 1, 3, 'carlos', 'quiroz campaÃ±a', '1126454088', '1126454088', '3217805890', 'shneider_r16@hotmail.com', 'NO_APLICA', '2016-04-21 02:49:22', 'ciencia politica', 60, '1993-06-01'),
(14, 1, 1, 1, 1, 3, 'melissa', 'sarria', '1061723488', '1061723488', '3173517097', 'melissarria@hotmail.es', 'NO_APLICA', '2016-04-23 01:35:37', 'arquitectura', 60, '1989-11-18'),
(15, 1, 1, 1, 1, 3, 'MarÃ­a Natalia ', 'Canenci FernÃ¡ndez ', '1061793079', '1061793079', '3188782376', 'natyca96@hotmail.com', 'NO_APLICA', '2016-05-02 05:37:09', 'Artes plÃ¡sticas ', 60, '1996-08-12'),
(16, 3, 1, 1, 1, 3, 'Estiven ', 'muÃ±oz', '1061732068', '1061732068', '3204006343', 'barca.est@hotmail.com', 'NO_APLICA', '2016-06-30 16:51:29', 'arquitectura ', 60, '1990-09-21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campana`
--
ALTER TABLE `campana`
  ADD PRIMARY KEY (`ID_CAMPANA`), ADD KEY `FK_FK_ID_EMPRESA` (`ID_EMPRESA`), ADD KEY `FK_FK_ID_ESTADO_CAM` (`ID_ESTADO`);

--
-- Indices de la tabla `detalle_campana`
--
ALTER TABLE `detalle_campana`
  ADD PRIMARY KEY (`ID_DETALLE_CAMPANA`), ADD KEY `FK_FK_ID_ESTABLECIMIENTO_DETALLE` (`ID_ESTABLECIMIENTO`), ADD KEY `FK_ID_CAMPANA` (`ID_CAMPANA`);

--
-- Indices de la tabla `detalle_copia`
--
ALTER TABLE `detalle_copia`
  ADD PRIMARY KEY (`ID_DETALLE_COPIA`), ADD KEY `FK_FK_ID_ESTABLECIMIENTO_DETALLE_COPIA` (`ID_ESTABLECIMIENTO`), ADD KEY `FK_FK_ID_USUARIO_DETALLE_COPIA` (`ID_USUARIO`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`ID_EMPRESA`), ADD KEY `FK_FK_ID_ESTADO_EMP` (`ID_ESTADO`);

--
-- Indices de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  ADD PRIMARY KEY (`ID_ESTABLECIMIENTO`), ADD KEY `FK_FK_ID_ESTADO_EST` (`ID_ESTADO`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`ID_FACULTAD`), ADD KEY `FK_FK_ID_ESTADO_FAC` (`ID_ESTADO`), ADD KEY `FK_FK_ID_INSTITUCION` (`ID_INSTITUCION`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`ID_INSTITUCION`), ADD KEY `FK_FK_ID_ESTADO_INS` (`ID_ESTADO`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`ID_MENSAJE`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`ID_TIPO_DOCUMENTO`), ADD KEY `FK_FK_ID_ESTADO_TD` (`ID_ESTADO`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`ID_TIPO_USUARIO`), ADD KEY `FK_FK_ID_ESTADO_TU` (`ID_ESTADO`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_USUARIO`), ADD KEY `FK_FK_ID_ESTABLECIMIENTO` (`ID_ESTABLECIMIENTO`), ADD KEY `FK_FK_ID_ESTADO` (`ID_ESTADO`), ADD KEY `FK_FK_ID_FACULTAD` (`ID_FACULTAD`), ADD KEY `FK_FK_ID_TIPO_DOCUMENTO` (`ID_TIPO_DOCUMENTO`), ADD KEY `FK_FK_ID_TIPO_USUARIO` (`ID_TIPO_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campana`
--
ALTER TABLE `campana`
  MODIFY `ID_CAMPANA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_campana`
--
ALTER TABLE `detalle_campana`
  MODIFY `ID_DETALLE_CAMPANA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalle_copia`
--
ALTER TABLE `detalle_copia`
  MODIFY `ID_DETALLE_COPIA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `ID_EMPRESA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `establecimiento`
--
ALTER TABLE `establecimiento`
  MODIFY `ID_ESTABLECIMIENTO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `ID_FACULTAD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `ID_INSTITUCION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `ID_MENSAJE` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `ID_TIPO_DOCUMENTO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `ID_TIPO_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
