-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2022 a las 04:05:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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
(1, 'Carlos ', 'Perez', 'M', 'carlos@gmail.com', 'carrera 20 ', '311111111'),
(2356897, 'carolina', 'torres', 'F', 'carot@outlook.es', 'cra 280 # 1000', '3000000000'),
(3715396, 'Alex', 'Potes Vasquez', 'M', 'apvasquez@gmail.com', 'Calle 15 # 1a - 36', '3015512984'),
(10698756, 'Carlos', 'Manjarrez', 'M', 'carlos@gmail.com', 'calle 450', '3216664477'),
(21333666, 'Camila', 'Fuentes', 'F', 'camifu@gmail.com', 'trans. 200 # 14 77', '3761498'),
(22987645, 'Pablo', 'Perez', 'M', 'pabloperez@hotmail.com', 'cra 23 # 40 - 107', '3697848'),
(23012056, 'Cecilia', 'Fernandez', 'F', 'ferceci@yahoo.es', 'norte 15 tranv 80', '6689754'),
(100326597, 'Ricardo', 'Rodriguez', 'M', 'rrodriguez@outlook.es', 'cra 14 # 100', '3229876324'),
(132456789, 'Andrea', 'paz', 'F', 'andrea@gmail.com', 'calle 300', '3119876324'),
(1002235788, 'Sayuris', 'Meza', 'F', 'sayu@hotamil.com', 'calle 300', '11122244'),
(1002666978, 'Karen', 'Buelvas', 'F', 'karen@hotmail.com', 'calle 200', '3109876545'),
(1045701947, 'Jorge', 'Potes', 'M', 'jorgepotes7@gmail.com', 'Calle 15 231', '3001114455'),
(1045715981, 'Daniela', 'Hernandez', 'F', 'robertovillareal266@gmail.com', 'calle 200 tranv 40', '3600000'),
(1119876541, 'Javier', 'Cabarcas', 'M', 'javier@outlook.com', 'carrera 369', '3119634578'),
(1143463181, 'Sergio Andres', 'Rolong Sanodval', 'M', 'sergio@gmail.com', 'Calle 12', '3046024152'),
(2147483647, 'santiago', 'gomez', 'M', 'jka@gmail.com', 'calle 2300', '3001114477');

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
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estado`
--

INSERT INTO `tbl_estado` (`PK_Id_Estado`, `Nombre_Estado`, `Descripcion`) VALUES
(1, 'Abierto ', 'Significa que se le ha asignado a un agente y está en proceso de resolución'),
(2, 'Pendiente', 'El agente está esperando más información del cliente'),
(3, 'Resuelto ', 'Resuelto el ticket de soporte técnico brindando una solución al cliente.');

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
-- Estructura de tabla para la tabla `tbl_servicios`
--

CREATE TABLE `tbl_servicios` (
  `PK_Id_Servicio` int(11) NOT NULL,
  `Nombre_Servicio` varchar(50) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `FK_Id_TipoServicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_servicios`
--

INSERT INTO `tbl_servicios` (`PK_Id_Servicio`, `Nombre_Servicio`, `Descripcion`, `FK_Id_TipoServicio`) VALUES
(101, 'Office Word', 'Asesorias tecnologicas, instalacion de S.O, instalacion de programas, de aplicaciones, configuraciones basicas, antivirus, office, etc.', 0),
(102, 'Office Power Point', 'Presentaciones visuales, ideal para exposiciones, diapositivas multimedia con imágenes, textos, sonidos, vídeos con animaciones.', 0),
(103, 'Correo Electronico', 'Configuraciones, creación de cuentas, recuperación de contraseñas, apertura en mas dispositivos.', 0),
(104, 'Descarga Certificados', 'Consultar certificaciones judiciales, medicas, del estado, Policia, Procuraduria, Contraloria, Sisben, Fosyga, EPSs, etc.', 0),
(105, 'Digitalización', 'Escaner, Fotocopias, Impresiones, Modificaciones.', 0),
(106, 'Soporte', 'Mantenimientos Preventivos, Correctivos, software y hardware', 0),
(107, 'Diseño', 'Diseño Grafico, Retoques fotográficos, foto documento, tarjetas de presentación, Flyer, Pendones, etc.', 0),
(108, 'Soporte Informático', 'Asesorias tecnologicas, instalacion de S.O, instalacion de programas, de aplicaciones, configuraciones basicas, antivirus, office, etc.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `PK_Id_Ticket` int(11) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFinal` date NOT NULL,
  `Estado` varchar(200) NOT NULL,
  `Cliente` varchar(60) NOT NULL,
  `Observacion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tickets`
--

INSERT INTO `tbl_tickets` (`PK_Id_Ticket`, `Descripcion`, `FechaInicio`, `FechaFinal`, `Estado`, `Cliente`, `Observacion`) VALUES
(1, 'Hola', '2022-09-19', '2022-09-19', '3', '1143463181', 'ss'),
(2, 'Office Word', '2022-09-21', '2022-09-22', '1', 'Sergio Andres Rolong Sanodval', 'aja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipodeservicio`
--

CREATE TABLE `tbl_tipodeservicio` (
  `PK_Id_TipoServicio` int(11) NOT NULL,
  `Nombre_TipoServicio` varchar(50) NOT NULL,
  `Descripcion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipodeservicio`
--

INSERT INTO `tbl_tipodeservicio` (`PK_Id_TipoServicio`, `Nombre_TipoServicio`, `Descripcion`) VALUES
(1, 'Consultoría Informática', 'Asesoramiento sobre los sistemas y herramientas informáticas'),
(2, 'Desarrollo de Software', 'Desarrollo de soluciones software para satisfacer las necesi'),
(3, 'Ofimática', 'Soluciones para documentación, certificaciones, legalidad, c'),
(4, 'Sistemas', 'Comprende todo lo referente a las redes, desde su mantenimie'),
(5, 'CyberSeguridad', 'Es indispensable que las compañías cuenten con una empresa d'),
(6, 'Soporte', 'Servicios se fue automatización para garantizar a cada clien'),
(7, 'Mantenimiento', 'Comprende, el cuidado preventivo, correctivo y predictivo de');

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
(0, 'japotes', '0710', 0, 0, 0, 0),
(1, 'sarolong', '12345', 0, 0, 0, 0);

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

--
-- AUTO_INCREMENT de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  MODIFY `PK_Id_Ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
