-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2021 a las 18:33:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `darkcube`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `totalpagar` double NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `lugar` varchar(500) NOT NULL,
  `serviciodomicilio` int(11) NOT NULL,
  `entrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `idusuario`, `fecha`, `totalpagar`, `usuario`, `lugar`, `serviciodomicilio`, `entrega`) VALUES
(94, 9, '2021-08-04 04:08:16', 200, 'Elba Martha', '', 1, 0),
(95, 13, '2021-08-04 05:08:47', 234, 'Yoab', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_productos`
--

CREATE TABLE `carrito_productos` (
  `id` int(11) NOT NULL,
  `id_carrito` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio_producto` float NOT NULL,
  `cantidades_producto` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito_productos`
--

INSERT INTO `carrito_productos` (`id`, `id_carrito`, `id_producto`, `precio_producto`, `cantidades_producto`, `nombre_producto`) VALUES
(9, 59, 20, 150, 1, 'Camiseta '),
(10, 62, 11, 450, 1, 'Poki'),
(11, 63, 18, 200, 1, 'Figura de acción '),
(12, 94, 33, 450, 1, 'Chetos flamin Hot '),
(13, 65, 18, 200, 1, 'Figura de acción '),
(14, 66, 20, 150, 1, 'Camiseta '),
(15, 67, 15, 24, 1, 'Prenda '),
(16, 68, 15, 24, 2, 'Prenda '),
(17, 69, 11, 450, 1, 'Poki'),
(18, 70, 11, 450, 1, 'Poki'),
(19, 73, 13, 234, 1, 'Prenda'),
(20, 76, 16, 23, 1, 'Prenda'),
(21, 78, 13, 234, 1, 'Prenda'),
(22, 80, 35, 200, 1, 'Power rangers'),
(23, 81, 36, 250, 1, 'Rugrats'),
(24, 82, 36, 250, 1, 'Rugrats'),
(25, 83, 35, 200, 1, 'Power rangers'),
(26, 84, 35, 200, 1, 'Power rangers'),
(27, 85, 36, 250, 1, 'Rugrats'),
(28, 86, 35, 200, 1, 'Power rangers'),
(29, 88, 35, 200, 1, 'Power rangers'),
(30, 90, 15, 24, 1, 'Prenda '),
(31, 91, 15, 24, 1, 'Prenda '),
(32, 92, 35, 200, 1, 'Power rangers'),
(33, 94, 36, 250, 1, 'Rugrats'),
(34, 94, 35, 200, 1, 'Power rangers'),
(35, 95, 13, 234, 1, 'Prenda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombrecategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombrecategoria`) VALUES
(1, 'Ropa'),
(2, 'Figuras'),
(3, 'Bolsos'),
(4, 'Oferta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrega`
--

CREATE TABLE `entrega` (
  `id` int(11) NOT NULL,
  `tipoentrega` varchar(100) NOT NULL,
  `imgentrega` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrega`
--

INSERT INTO `entrega` (`id`, `tipoentrega`, `imgentrega`) VALUES
(1, 'Entrega a domicilio.', 'Man Send Order To Customer.jpg'),
(2, 'Entrega a domicilio.', 'Man Send Order To Customer.jpg'),
(3, 'Entrega a domicilio.', 'Man Send Order To Customer.jpg'),
(4, 'Recoger compra.', 'Ichiraku (print) - Nucleus _ Art Gallery and Store.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id` int(11) NOT NULL,
  `montoenvio` varchar(200) NOT NULL,
  `texto_envio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `titulofooter` varchar(100) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `telefonofooter` varchar(100) NOT NULL,
  `correofooter` varchar(100) NOT NULL,
  `ligafooter` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `piefooter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `footer`
--

INSERT INTO `footer` (`id`, `titulofooter`, `horario`, `telefonofooter`, `correofooter`, `ligafooter`, `instagram`, `piefooter`) VALUES
(5, 'Contactos', 'Horario de atención de 9:00am a 7:00pm ', '6360000000', 'darkcube@correo.com', 'facebook.png', 'instagram.png', 'Dark Cube 2021 Nuevo Casas Grandes Chihuahua, México.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id` int(11) NOT NULL,
  `titular` varchar(100) NOT NULL,
  `imageninicio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id`, `titular`, `imageninicio`) VALUES
(8, 'MARVEL', '69760217_113681143339072_4490625673630580736_n.jpg'),
(9, 'ANIME', '69239321_113535940020259_6724782564822745088_n.jpg'),
(10, 'CARICATURAS', '70312533_113535913353595_5849520362210983936_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`id`, `titulo`, `descripcion`, `correo`) VALUES
(1, 'DarkCube!', 'Encuentra los mejores articulos de cultura pop con nosotros.', 'darkcube@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ropa`
--

CREATE TABLE `ropa` (
  `id` int(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` float NOT NULL,
  `existencia` varchar(100) NOT NULL,
  `preciooferta` float NOT NULL,
  `oferta` tinyint(1) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ropa`
--

INSERT INTO `ropa` (`id`, `codigo`, `imagen`, `nombre`, `descripcion`, `precio`, `existencia`, `preciooferta`, `oferta`, `categoria`) VALUES
(9, '1qq', '1.jpg', 'Chamarra amarilla ', 'unica pieza', 600, 'Disponible', 120, 1, '0'),
(10, 'b', '129722233_430564828317367_7034294394207749109_n.jpg', 'Blusa estampado', 'Blusa de algodon, unica en color negro. ', 200, 'Disponible', 0, 1, '0'),
(12, 'qaz', '120302309_377554570285060_5126847259263970238_n.jpg', 'Prenda', 'Tipo de tela ', 1234, 'Disponible', 600, 1, '0'),
(13, 'edita', '186045055_534585014582014_3162279906906033905_n.jpg', 'Estampado ', 'Tipo de tela ', 234, 'Disponible', 0, 0, 'Ropa'),
(15, 'edit', '117096665_330761838297667_8732612775042124532_n.jpg', 'Prenda ', 'Tipo de tela ', 24, 'Disponible', 0, 0, 'Ropa'),
(17, 'CHFH', '122988438_401883924518791_7898661845785587631_n.jpg', 'Figura de acción ', 'Coleccón 2021', 200, 'Disponible', 0, 0, 'Figuras'),
(33, '123', '122988438_401883924518791_7898661845785587631_n.jpg', 'Chetos flamin Hot ', 'Mochila escolar. ', 450, 'Disponible', 0, 0, 'Bolsos'),
(34, 'L9s', '188285734_537992700907912_3943025884065658900_n.jpg', 'Game Over', 'Estampado en GameOver.', 300, 'Existencia en...', 0, 0, 'Ropa'),
(35, 'liu', '72484680_144440490263137_3760368602088210432_n.jpg', 'Power rangers', 'Blusa de algodón.', 200, 'Disponible', 0, 0, 'Ropa'),
(36, 'k12', '79376459_163343195039533_4003609238763995136_n.jpg', 'Rugrats', 'Blusa de poliéster', 250, 'Disponible', 0, 0, 'Ropa'),
(37, '1qaz', '75282395_155541222486397_2115655788558024704_n.jpg', 'Mochila.', 'Mochila en color café.', 400, '0', 0, 0, 'Bolsos'),
(38, '123', '122996571_401883844518799_636384428598860816_n.jpg', 'Mochila estampado.', 'Mochila escolar. ', 450, 'Disponible', 0, 0, 'Bolsos'),
(39, 'm4l', '103834653_294000065307178_1407450421250847004_n.jpg', 'Pin', 'Pin de metal.', 60, 'Disponible', 0, 0, 'Figuras'),
(40, 'b12', '84106298_191399482233904_4132790851321462784_n.jpg', 'Pin pollo.', 'Pin de pollo en metal.', 60, 'Disponible', 0, 0, 'Figuras'),
(41, 'r34p', '88177338_215198196520699_8091320388224548864_n.jpg', 'Hora de aventura', 'figuara de peluche.', 200, 'Disponible', 0, 0, 'Figuras'),
(42, 'p01', '109099877_316282679745583_7595268247278857376_n.jpg', 'Ranita Naruto', 'Monedero de ranita.', 150, 'Disponible', 0, 0, 'Bolsos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabladetallas`
--

CREATE TABLE `tabladetallas` (
  `idtallas` int(11) NOT NULL,
  `nombretalla` varchar(100) NOT NULL,
  `descripciontalla` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabladetallas`
--

INSERT INTO `tabladetallas` (`idtallas`, `nombretalla`, `descripciontalla`) VALUES
(1, 'S', 'talla de 70 cm de largo '),
(3, 'M', 'M'),
(4, 'L', 'L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `id` int(11) NOT NULL,
  `nombretalla` varchar(100) NOT NULL,
  `codigoropa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`id`, `nombretalla`, `codigoropa`) VALUES
(18, 'S', '8'),
(19, 'S', '9'),
(20, 'S', '10'),
(21, 'S', '11'),
(22, 'S', 'wsx'),
(23, 'S', 'edc'),
(24, 'S', 'qqq'),
(25, 'S', 'aAL'),
(26, 'S', 'L9s'),
(27, 'M', 'L9s'),
(28, 'L', 'liu'),
(29, 'M', 'k12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreusuario` varchar(100) NOT NULL,
  `correousuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `tipodeusuario` varchar(100) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `calles` varchar(200) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombreusuario`, `correousuario`, `contrasena`, `tipodeusuario`, `ciudad`, `calles`, `domicilio`, `codigo_postal`, `telefono`) VALUES
(1, 'Hefzi', 'bamurillo@outlook.com', '81dc9bdb52d04dc20036dbd8313ed055', 'cliente', '', '', '', '', ''),
(3, 'baa', 'aaa@aaa.com', 'fcea920f7412b5da7be0cf42b8c93759', 'Administrador', '', '', '', '', ''),
(5, 'baa', 'aaa@aaa.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Administrador', '', '', '', '', ''),
(6, 'baa', 'aaa@aaa.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrador', '', '', '', '', ''),
(8, 'LOLO', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', 'Administrador', '', '', '', '', ''),
(9, 'Elba Martha ', 'aaa@aaa.com', 'd7f28c145cd492bd7bb83bdd8d3a3e5c', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '6365369400'),
(10, 'Elba Martha ', 'aaa@aaa.com', 'd7f28c145cd492bd7bb83bdd8d3a3e5c', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '6365369400'),
(11, 'Elba Martha ', 'aaa@aaa.com', 'd7f28c145cd492bd7bb83bdd8d3a3e5c', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '6365369400'),
(12, 'Elba Martha ', 'aaa@aaa.com', 'd7f28c145cd492bd7bb83bdd8d3a3e5c', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '6365369400'),
(13, 'Yoab', 'yoab@', '6562c5c1f33db6e05a082a88cddab5ea', '', 'Casas Grandes Chihuahua ', 'callejon 10 ', '1027', '31700', '6365554433'),
(14, 'hefzi2', 'aaa@aaa.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '80 80 80'),
(15, 'hefziad', 'a@a', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', '', '', '', '', ''),
(16, 'Ramon', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '3251343214'),
(17, 'Ramon', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '3251343214'),
(21, 'Bam', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', '', 'Nuevo casas grandes ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '3251343214'),
(22, 'Ba2', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '3251343214'),
(23, 'Ba2', 'aaa@aaa.com', '202cb962ac59075b964b07152d234b70', '', 'Cuauhtemoc Chih. Méx. ', 'callejon 10 entre del Prado y 6 de Marzo ', '#1207', '31700', '3251343214'),
(24, 'hefziAD', 'hef@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', '', '', '', '', ''),
(25, 'usuariop', 'prueba', '202cb962ac59075b964b07152d234b70', 'Administrador', '', '', '', '', ''),
(26, 'usuariop', 'prueba', '202cb962ac59075b964b07152d234b70', 'Administrador', '', '', '', '', ''),
(27, 'prueba2', 'prueba', '202cb962ac59075b964b07152d234b70', 'Administrador', '', '', '', '', ''),
(28, 'prueba2', 'prueba', '202cb962ac59075b964b07152d234b70', 'Administrador', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito_productos`
--
ALTER TABLE `carrito_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrega`
--
ALTER TABLE `entrega`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ropa`
--
ALTER TABLE `ropa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabladetallas`
--
ALTER TABLE `tabladetallas`
  ADD PRIMARY KEY (`idtallas`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `carrito_productos`
--
ALTER TABLE `carrito_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `entrega`
--
ALTER TABLE `entrega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ropa`
--
ALTER TABLE `ropa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tabladetallas`
--
ALTER TABLE `tabladetallas`
  MODIFY `idtallas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
