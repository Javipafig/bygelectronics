--
-- Base de datos: `bygelectronics`
--
CREATE DATABASE IF NOT exists bygelectronics;
--
use bygelectronics;
--
-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `funciones`
--
CREATE TABLE `funciones` (
  `Id_Funcion` int(11) NOT NULL,
  `Musica` varchar(10) NOT NULL,
  `Estado` varchar(5) NOT NULL,
  `Log_musica` varchar(10) NOT NULL,
  `Boton_emergencia` varchar(10) DEFAULT NULL,
  `Hora_cambio_estado` time NOT NULL,
  `Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `funciones`
--

INSERT INTO `funciones` (`Id_Funcion`, `Musica`, `Estado`, `Log_musica`, `Boton_emergencia`, `Hora_cambio_estado`, `Usuario`) VALUES
(22, 'tono.mp3', 'ON', 'OFF', 'ON', '17:17:30', 1),
(23, 'musica_2.m', 'OFF', 'OFF', 'ON', '00:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `PrimerNombre` varchar(50) DEFAULT NULL,
  `SegundoNombre` varchar(50) DEFAULT NULL,
  `PrimerApellido` varchar(50) DEFAULT NULL,
  `SegundoApellido` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuario`, `PrimerNombre`, `SegundoNombre`, `PrimerApellido`, `SegundoApellido`, `Telefono`, `Correo`, `Usuario`, `Contrasena`) VALUES
(1, 'Javier', 'Antonio', 'Parada', 'Figueroa', '3012529836', 'Javipafig@gmail.com', 'Javier1', '1234567'),
(2, 'Federico', '', 'garcia', 'Figueroa', '3114819245', 'federico@gmail.com', 'admin', 'admin12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD PRIMARY KEY (`Id_Funcion`),
  ADD KEY `Usuario` (`Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `funciones`
--
ALTER TABLE `funciones`
  MODIFY `Id_Funcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funciones`
--
ALTER TABLE `funciones`
  ADD CONSTRAINT `funciones_ibfk_1` FOREIGN KEY (`Usuario`) REFERENCES `usuarios` (`Id_usuario`);
COMMIT;


