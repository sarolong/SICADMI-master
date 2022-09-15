-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 01:11:08
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbs_sicadmi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `PK_Id_Admin` int(11) NOT NULL,
  `FK_Id_Persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

CREATE TABLE `tbl_clientes` (
  `PK_Id_Cliente` int(11) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`PK_Id_Cliente`, `Nombres`, `Apellidos`, `Genero`, `Correo`, `Direccion`, `Telefono`) VALUES
(1045701947, 'Jorge', 'Potes', 'M', 'jorgepotes7@gmail.com', 'Calle 15', '3001114455');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detallefactura`
--

CREATE TABLE `tbl_detallefactura` (
  `PK_Cod_DetalleFactura` int(11) NOT NULL,
  `Detalle` varchar(60) NOT NULL,
  `Valor_Servicio` float NOT NULL,
  `FK_Id_Ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado`
--

CREATE TABLE `tbl_estado` (
  `PK_Id_Estado` int(11) NOT NULL,
  `Nombre_Estado` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_factura`
--

CREATE TABLE `tbl_factura` (
  `PK_Cod_Factura` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Total` float NOT NULL,
  `FK_Cod_DetalleFactura` int(11) NOT NULL,
  `FK_No_TipoPago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `PK_Id_Rol` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `PK_Id_Servicio` int(11) NOT NULL,
  `Nombre_Servicio` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `Costo` float NOT NULL,
  `FK_Id_TipoServicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `PK_Id_Ticket` int(11) NOT NULL,
  `Descripcion` varchar(60) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Final` datetime NOT NULL,
  `FK_Id_Estado` int(11) NOT NULL,
  `FK_Id_Cliente` int(11) NOT NULL,
  `FK_Id_Servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipodeservicio`
--

CREATE TABLE `tbl_tipodeservicio` (
  `PK_Id_TipoServicio` int(11) NOT NULL,
  `Nombre_TipoServicio` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_pago`
--

CREATE TABLE `tbl_tipo_pago` (
  `PK_No_TipoPago` int(11) NOT NULL,
  `Detalle` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

CREATE TABLE `tbl_tipo_usuario` (
  `PK_Id_TipoUsuario` int(11) NOT NULL,
  `Nombre_TipoUsuario` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `PK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Usuario` varchar(50) NOT NULL,
  `password_Usuario` varchar(60) NOT NULL,
  `FK_Id_Estado` int(11) NOT NULL,
  `FK_Id_Rol` int(11) NOT NULL,
  `FK_Id_Persona` int(11) NOT NULL,
  `FK_Id_TipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`PK_Id_Usuario`, `Nombre_Usuario`, `password_Usuario`, `FK_Id_Estado`, `FK_Id_Rol`, `FK_Id_Persona`, `FK_Id_TipoUsuario`) VALUES
(0, 'japotes', '0710', 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`PK_Id_Admin`);

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`PK_Id_Cliente`);

--
-- Indices de la tabla `tbl_detallefactura`
--
ALTER TABLE `tbl_detallefactura`
  ADD PRIMARY KEY (`PK_Cod_DetalleFactura`);

--
-- Indices de la tabla `tbl_estado`
--
ALTER TABLE `tbl_estado`
  ADD PRIMARY KEY (`PK_Id_Estado`);

--
-- Indices de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  ADD PRIMARY KEY (`PK_Cod_Factura`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`PK_Id_Rol`);

--
-- Indices de la tabla `tbl_servicios`
--
ALTER TABLE `tbl_servicios`
  ADD PRIMARY KEY (`PK_Id_Servicio`);

--
-- Indices de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD PRIMARY KEY (`PK_Id_Ticket`);

--
-- Indices de la tabla `tbl_tipodeservicio`
--
ALTER TABLE `tbl_tipodeservicio`
  ADD PRIMARY KEY (`PK_Id_TipoServicio`);

--
-- Indices de la tabla `tbl_tipo_pago`
--
ALTER TABLE `tbl_tipo_pago`
  ADD PRIMARY KEY (`PK_No_TipoPago`);

--
-- Indices de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
  ADD PRIMARY KEY (`PK_Id_TipoUsuario`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`PK_Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_detallefactura`
--
ALTER TABLE `tbl_detallefactura`
  MODIFY `PK_Cod_DetalleFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_factura`
--
ALTER TABLE `tbl_factura`
  MODIFY `PK_Cod_Factura` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
