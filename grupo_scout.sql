-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-06-2025 a las 17:37:11
-- Versión del servidor: 8.0.39
-- Versión de PHP: 8.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupo_scout`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_Actividad` int NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `lugar` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_Inicio` date DEFAULT NULL,
  `fecha_Fin` date DEFAULT NULL,
  `cantidad_Personas` int DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id_Actividad`, `nombre`, `lugar`, `fecha_Inicio`, `fecha_Fin`, `cantidad_Personas`, `descripcion`) VALUES
(1, 'Primera Convivencia', 'Finca Somalo', '2025-11-15', '2025-11-17', 10, 'Un fin de semana emocionante para compartir con los compañeros de otras ramas. Disfrutaremos de juegos, dinámicas y actividades al aire libre, fortaleciendo nuestra amistad y aprendiendo a caminar más cerca de Dios. Será un tiempo para reflexionar, compartir experiencias y vivir momentos inolvidables juntos. ¡Un fin de semana lleno de energía y fe!'),
(2, 'Luz de la paz de Belén', 'Concatedral de la Redonda', '2025-12-21', '2025-12-21', 100, 'El Clan Triskel ha traído la Luz desde Valladolid y con gran alegría desea compartirla con todos vosotros. Este sábado, 21 de diciembre a las 17:30 horas, os invitamos a uniros a nosotros en la Concatedral de la Redonda para recibirla y extenderla por toda La Rioja. Juntos, bajo el lema \"Somos luz, somos cambio\", seremos portadores de transformación y esperanza. ¡No faltéis a este encuentro especial de luz y hermandad!'),
(3, 'Segunda convivencia', 'Ortigosa de Cameros', '2026-03-28', '2026-03-30', 70, 'Un fin de semana lleno de emoción y compañerismo, donde compartiremos juegos, dinámicas y momentos de reflexión. Juntos, exploraremos nuevas formas de vivir nuestra fe, de conectar con los demás y de fortalecer los lazos de amistad. Un tiempo perfecto para crecer espiritualmente, disfrutar de la naturaleza y compartir con personas de otras ramas. ¡No te lo puedes perder!'),
(4, 'San Jorge', 'Santo Domingo de La Calzada', '2026-04-27', '2026-04-27', 150, 'Celebramos el Día de San Jorge, patrón de los scouts, con actividades especiales para conmemorar su legado y los valores que nos enseñó. Será un día de juegos, oración y actividades en comunidad, en honor a San Jorge, el protector de los scouts. Un encuentro donde nos uniremos para celebrar la fe, el servicio y la hermandad que nos une como scouts. ¡Un día para recordar a nuestro patrón y renovar nuestro compromiso!'),
(5, 'Campamento de verano', 'Isallana', '2025-08-01', '2025-08-10', 100, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miembros`
--

CREATE TABLE `miembros` (
  `id_Miembro` int NOT NULL,
  `documento_identidad` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefono` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `direccion` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `fotografia` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rama` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `rol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contrasena` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `miembros`
--

INSERT INTO `miembros` (`id_Miembro`, `documento_identidad`, `nombre`, `apellidos`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `fotografia`, `rama`, `rol`, `usuario`, `contrasena`) VALUES
(1, '11111111M', 'Zaida', 'Monitora', 'zaida.monitora@gmail.com', '111111111', 'C / Ruta', '2005-03-17', '/public/img/miembros/monitores/11111111A.png', 'Lobatos', 'Monitor', 'zaida', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(2, '22222222M', 'Mauro', 'Monitor', 'mauro.monitor@gmail.com', '222222222', 'C / Ruta', '2005-02-19', '/public/img/miembros/monitores/22222222B.png', 'Lobatos', 'Monitor', 'mauro', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(3, '33333333M', 'Teresa', 'Monitora', 'teresa.monitora@gmail.com', '333333333', 'C / Ruta', '2005-10-22', '/public/img/miembros/monitores/33333333C.png', 'Lobatos', 'Monitor', 'teresa', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(4, '44444444M', 'César', 'Delgado', 'cdelgadom004@gmail.com', '444444444', 'C / Ruta', '2004-04-04', '/public/img/miembros/monitores/44444444D.png', 'Lobatos', 'Monitor', 'cesar', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(5, '55555555M', 'Marta', 'Monitora', 'marta.monitora@gmail.com', '555555555', 'C / Ruta', '2006-06-28', '/public/img/miembros/monitores/55555555E.png', 'Lobatos', 'Monitor', 'marta', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(6, '66666666M', 'Rodrigo', 'Monitor', 'rodrigo.monitor@gmail.com', '666666666', 'C / Ruta', '2005-12-06', '/public/img/miembros/monitores/66666666F.png', 'Lobatos', 'Monitor', 'rodrigo', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(7, '77777777M', 'Sheila', 'Monitora', 'sheila.monitora@gmail.com', '777777777', 'C / Ruta', '2006-11-07', '/public/img/miembros/monitores/77777777G.png', 'Lobatos', 'Monitor', 'sheila', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(8, '88888888M', 'Irene', 'Monitora', 'irene.monitora@gmail.com', '888888888', 'C / Monitora', '2000-12-25', '/public/img/miembros/monitores/88888888H.png', 'Exploradores', 'Monitor', 'irene', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(9, '99999999M', 'Héctor', 'Monitor', 'hector.monitor@gmail.com', '999999999', 'C / Monitor', '2002-05-28', '/public/img/miembros/monitores/99999999I.png', 'Exploradores', 'Monitor', 'hector', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(10, '10101010M', 'Álvaro', 'Monitor', 'alvaro.monitor@gmail.com', '101010101', 'C / Prueba', '2003-08-17', '/public/img/miembros/monitores/10101010J.png', 'Exploradores', 'Monitor', 'alvaro', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(11, '11111111M', 'Ruth', 'Monitora', 'ruth.monitora@gmail.com', '111111111', 'C / Ruta', '2006-09-11', '/public/img/miembros/monitores/11111111J.png', 'Exploradores', 'Monitor', 'ruth', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(12, '12121212M', 'Isa', 'Monitora', 'isa.monitora@gmail.com', '121212121', 'C / Ruta', '1970-01-01', '/public/img/miembros/monitores/12121212K.png', 'Exploradores', 'Monitor', 'isa', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(13, '13131313M', 'Sofía', 'Monitora', 'sofia.monitora@gmail.com', '131313131', 'C / Ruta', '2006-10-31', '/public/img/miembros/monitores/13131313L.png', 'Exploradores', 'Monitor', 'sofia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(14, '14141414M', 'Chemón', 'Monitor', 'chemon.monitor@gmail.com', '141414141', 'C / Monitor', '1968-04-07', '/public/img/miembros/monitores/14141414M.png', 'Pioneros', 'Monitor', 'chemon', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(15, '15151515M', 'María', 'Monitora', 'maria.monitora@gmail.com', '151515151', 'C / Monitora', '1970-01-01', '/public/img/miembros/monitores/15151515N.png', 'Pioneros', 'Monitor', 'maria', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(16, '16161616M', 'Javier', 'Monitor', 'javier.monitor@gmail.com', '161616161', 'C / Monitor', '2002-10-04', '/public/img/miembros/monitores/16161616N.png', 'Pioneros', 'Monitor', 'javier', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(17, '17171717M', 'Eva', 'Monitora', 'eva.monitora@gmail.com', '171717171', 'C / Monitora', '2000-11-09', '/public/img/miembros/monitores/17171717O.png', 'Pioneros', 'Monitor', 'eva', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(18, '18181818M', 'Mamen', 'Monitora', 'mamen.monitora@gmail.com', '181818181', 'C / Monitora', '1970-01-01', '/public/img/miembros/monitores/18181818P.png', 'Rutas', 'Monitor', 'mamen', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(19, '19191919M', 'Tirso', 'Monitor', 'tirso.monitor@gmail.com', '191919191', 'C / Monitor', '1987-02-17', '/public/img/miembros/monitores/19191919Q.png', 'Rutas', 'Monitor', 'tirso', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(20, '20202020M', 'Ana', 'Monitora', 'ana.monitora@gmail.com', '202020202', 'C / Ruta', '2005-09-23', '/public/img/miembros/monitores/20202020R.png', 'Lobatos', 'Monitor', 'ana', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(21, '21212121M', 'Diego', 'Monitor', 'diego.monitor@gmail.com', '212121212', 'C / Monitor', '1980-07-30', '/public/img/miembros/monitores/21212121S.png', 'Lobatos', 'Monitor', 'diego', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(22, '22222222M', 'José Miguel', 'Monitor', 'jose.miguel.monitor@gmail.com', '222222222', 'C / Monitor', '1968-03-17', '/public/img/miembros/monitores/22222222T.png', 'Rutas', 'Monitor', 'jose_miguel', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(23, '23232323L', 'Elia', 'Lobata', 'elia.lobata@gmail.com', '232323232', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/23232323L.png', 'Lobatos', 'Joven', 'elia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(24, '24242424L', 'Paula', 'Lobata', 'paula.lobata@gmail.com', '242424242', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/24242424L.png', 'Lobatos', 'Joven', 'paulaL1', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(25, '25252525L', 'Zahara', 'Lobata', 'zahara.lobata@gmail.com', '252525252', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/25252525L.png', 'Lobatos', 'Joven', 'zahara', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(26, '26262626L', 'Lucía', 'Lobata', 'lucia.lobata@gmail.com', '262626262', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/26262626L.png', 'Lobatos', 'Joven', 'lucia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(27, '27272727L', 'Jaime', 'Lobato', 'jaime.lobato@gmail.com', '272727272', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/27272727L.png', 'Lobatos', 'Joven', 'jaime', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(28, '28282828L', 'Manuel', 'Lobato', 'manuel.lobato@gmail.com', '282828282', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/28282828L.png', 'Lobatos', 'Joven', 'manuel', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(29, '29292929L', 'Paula', 'Lobata', 'paula.lobata.2@gmail.com', '292929292', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/29292929L.png', 'Lobatos', 'Joven', 'paulaL2', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(30, '30303030L', 'Sofía', 'Lobata', 'sofia.lobata@gmail.com', '303030303', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/30303030L.png', 'Lobatos', 'Joven', 'sofiaL1', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(31, '31313131L', 'Alba', 'Lobata', 'alba.lobata@gmail.com', '313131313', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/31313131L.png', 'Lobatos', 'Joven', 'albaL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(32, '32323232L', 'Leire', 'Lobata', 'leire.lobata@gmail.com', '323232323', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/32323232L.png', 'Lobatos', 'Joven', 'leire', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(33, '33333333L', 'Sofía', 'Lobata', 'sofia.lobata.2@gmail.com', '333333333', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/33333333L.png', 'Lobatos', 'Joven', 'sofiaL2', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(34, '34343434L', 'Cecilia', 'Lobata', 'cecilia.lobata@gmail.com', '343434343', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/34343434L.png', 'Lobatos', 'Joven', 'cecilia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(35, '35353535L', 'Eva', 'Lobata', 'eva.lobata@gmail.com', '353535353', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/35353535L.png', 'Lobatos', 'Joven', 'evaL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(36, '36363636L', 'Pablo', 'Lobato', 'pablo.lobato@gmail.com', '363636363', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/36363636L.png', 'Lobatos', 'Joven', 'pablo', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(37, '37373737L', 'Alejandro', 'Lobato', 'alejandro.lobato@gmail.com', '373737373', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/37373737L.png', 'Lobatos', 'Joven', 'alejandroL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(38, '38383838L', 'Mateo', 'Lobato', 'mateo.lobato@gmail.com', '383838383', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/38383838L.png', 'Lobatos', 'Joven', 'mateo', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(39, '39393939L', 'Jimena', 'Lobata', 'jimena.lobata@gmail.com', '393939393', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/39393939L.png', 'Lobatos', 'Joven', 'jimena', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(40, '40404040L', 'Regina', 'Lobata', 'regina.lobata@gmail.com', '404040404', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/40404040L.png', 'Lobatos', 'Joven', 'regina', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(41, '41414141L', 'Iván', 'Lobato', 'ivan.lobato@gmail.com', '414141414', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/41414141L.png', 'Rutas', 'Joven', 'ivan', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(42, '42424242L', 'Andrea', 'Lobata', 'andre.lobata@gmail.com', '424242424', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/42424242L.png', 'Lobatos', 'Joven', 'andrea', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(43, '43434343L', 'Teresa', 'Lobata', 'teresa.lobata@gmail.com', '434343434', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/43434343L.png', 'Lobatos', 'Joven', 'teresaL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(44, '44444444L', 'María', 'Lobata', 'maria.lobata@gmail.com', '444444444', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/44444444L.png', 'Lobatos', 'Joven', 'mariaL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(45, '45454545L', 'Asier', 'Lobato', 'asier.lobato@gmail.com', '454545454', 'C / Lobato', '1970-01-01', '/public/img/miembros/jovenes/45454545L.png', 'Lobatos', 'Joven', 'asier', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(46, '46464646L', 'Carmen', 'Lobata', 'carmen.lobata@gmail.com', '464646464', 'C / Lobata', '1970-01-01', '/public/img/miembros/jovenes/46464646L.png', 'Lobatos', 'Joven', 'carmen', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(47, '47474747L', 'Gonzalo', 'Lobato', 'gonzalo.lobato@gmail.com', '474747474', 'C / Lobato', '1971-01-01', '/public/img/miembros/jovenes/47474747L.png', 'Lobatos', 'Joven', 'gonzalo', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(48, '48484848L', 'Javier', 'Lobato', 'javier.lobato@gmail.com', '484848484', 'C / Lobato', '1971-01-01', '/public/img/miembros/jovenes/48484848L.png', 'Lobatos', 'Joven', 'javierL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(49, '49494949L', 'Ibai', 'Lobato', 'ibai.lobato@gmail.com', '494949494', 'C / Lobato', '1971-01-01', '/public/img/miembros/jovenes/49494949L.png', 'Lobatos', 'Joven', 'ibai', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(50, '50505050L', 'Diego', 'Lobato', 'diego.lobato@gmail.com', '505050505', 'C / Lobato', '1971-01-01', '/public/img/miembros/jovenes/50505050L.png', 'Lobatos', 'Joven', 'diegoL', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(51, '51515151L', 'Steiler', 'Lobato', 'steiler.lobato@gmail.com', '515151515', 'C / Lobato', '1971-01-01', '/public/img/miembros/jovenes/51515151L.png', 'Lobatos', 'Joven', 'steiler', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(52, '52525252L', 'Raquel', 'Lobata', 'raquel.lobata@gmail.com', '525252525', 'C / Lobata', '1971-01-01', '/public/img/miembros/jovenes/52525252L.png', 'Lobatos', 'Joven', 'raquel', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(53, '53535353L', 'Yaiza', 'Lobata', 'yaiza.lobata@gmail.com', '535353535', 'C / Lobata', '1971-01-01', '/public/img/miembros/jovenes/53535353L.png', 'Lobatos', 'Joven', 'yaiza', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(54, '54545454E', 'Luis', 'Explorador', 'luis.explorador@gmail.com', '545454545', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/54545454E.png', 'Exploradores', 'Joven', 'luis', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(55, '55555555E', 'Elric', 'Explorador', 'elric.explorador@gmail.com', '555555555', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/55555555E.png', 'Exploradores', 'Joven', 'elric', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(56, '56565656E', 'Daniel', 'Explorador', 'daniel.explorador@gmail.com', '565656565', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/56565656E.png', 'Exploradores', 'Joven', 'danielA', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(57, '57575757E', 'Daniel', 'Explorador', 'daniel.explorador@gmail.com', '575757575', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/57575757E.png', 'Exploradores', 'Joven', 'danielU', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(58, '58585858E', 'Mateo', 'Explorador', 'mateo.explorador@gmail.com', '585858585', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/58585858E.png', 'Exploradores', 'Joven', 'mateoE', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(59, '59595959E', 'Marcos', 'Explorador', 'marcos.explorador@gmail.com', '595959595', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/59595959E.png', 'Exploradores', 'Joven', 'marcos', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(60, '60606060E', 'Iker', 'Explorador', 'iker.explorador@gmail.com', '606060606', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/60606060E.png', 'Exploradores', 'Joven', 'iker', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(61, '61616161E', 'Joaquin', 'Explorador', 'joaquin.explorador@gmail.com', '616161616', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/61616161E.png', 'Exploradores', 'Joven', 'joaquin', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(62, '62626262E', 'Laura', 'Exploradora', 'laura.exploradora@gmail.com', '626262626', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/62626262E.png', 'Exploradores', 'Joven', 'lauraL1', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(63, '63636363E', 'Laura', 'Exploradora', 'laura.exploradora@gmail.com', '636363636', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/63636363E.png', 'Exploradores', 'Joven', 'lauraL2', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(64, '64646464E', 'Carmen', 'Exploradora', 'carmen.exploradora@gmail.com', '646464646', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/64646464E.png', 'Exploradores', 'Joven', 'carmen', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(65, '65656565E', 'Sara', 'Exploradora', 'sara.exploradora@gmail.com', '656565656', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/65656565E.png', 'Exploradores', 'Joven', 'sara', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(66, '66666666E', 'Sandra', 'Exploradora', 'sandra.exploradora@gmail.com', '666666666', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/66666666E.png', 'Exploradores', 'Joven', 'sandra', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(67, '67676767E', 'Alba', 'Exploradora', 'alba.exploradora@gmail.com', '676767676', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/67676767E.png', 'Exploradores', 'Joven', 'albaE', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(68, '68686868E', 'Guiomar', 'Exploradora', 'guiomar.exploradora@gmail.com', '686868686', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/68686868E.png', 'Exploradores', 'Joven', 'guiomar', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(69, '69696969E', 'Blanca', 'Exploradora', 'blanca.exploradora@gmail.com', '696969696', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/69696969E.png', 'Exploradores', 'Joven', 'blancaE', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(70, '70707070E', 'Ana', 'Exploradora', 'ana.exploradora@gmail.com', '707070707', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/70707070E.png', 'Exploradores', 'Joven', 'anaP', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(71, '71717171E', 'Abril', 'Exploradora', 'abril.exploradora@gmail.com', '717171717', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/71717171E.png', 'Exploradores', 'Joven', 'abril', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(72, '72727272E', 'Emma', 'Exploradora', 'emma.exploradora@gmail.com', '727272727', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/72727272E.png', 'Exploradores', 'Joven', 'emma', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(73, '73737373E', 'Nahia', 'Exploradora', 'nahia.exploradora@gmail.com', '737373737', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/73737373E.png', 'Exploradores', 'Joven', 'nahia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(74, '74747474E', 'Marta', 'Exploradora', 'marta.exploradora@gmail.com', '747474747', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/74747474E.png', 'Exploradores', 'Joven', 'martaE', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(75, '75757575E', 'Diego', 'Explorador', 'diego.explorador@gmail.com', '757575757', 'C / Explorador', '1971-01-01', '/public/img/miembros/jovenes/75757575E.png', 'Exploradores', 'Joven', 'diegoE', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(76, '76767676E', 'Julia', 'Exploradora', 'julia.exploradora@gmail.com', '767676767', 'C / Exploradora', '1971-01-01', '/public/img/miembros/jovenes/76767676E.png', 'Exploradores', 'Joven', 'julia', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(77, '77777777P', 'Martin', 'Pionero', 'martin.pionero@gmail.com', '777777777', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/77777777P.png', 'Pioneros', 'Joven', 'martin', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(78, '78787878P', 'Gabriel', 'Pionero', 'gabriel.pionero@gmail.com', '787878787', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/78787878P.png', 'Pioneros', 'Joven', 'gabriel', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(79, '79797979P', 'Alejandro', 'Pionero', 'alejandro.pionero@gmail.com', '797979797', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/79797979P.png', 'Pioneros', 'Joven', 'alejandro', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(80, '80808080P', 'Román', 'Pionero', 'roman.pionero@gmail.com', '808080808', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/80808080P.png', 'Pioneros', 'Joven', 'roman', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(81, '81818181P', 'Ángel', 'Pionero', 'angel.pionero@gmail.com', '818181818', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/81818181P.png', 'Pioneros', 'Joven', 'angel', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(82, '82828282P', 'Iñigo', 'Pionero', 'inigo.pionero@gmail.com', '828282828', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/82828282P.png', 'Pioneros', 'Joven', 'inigo', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(83, '83838383P', 'Héctor', 'Pionero', 'hector.pionero@gmail.com', '838383838', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/83838383P.png', 'Pioneros', 'Joven', 'hectorP', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(84, '84848484P', 'Emilio', 'Pionero', 'emilio.pionero@gmail.com', '848484848', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/84848484P.png', 'Pioneros', 'Joven', 'emilio', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(85, '85858585P', 'Álvaro', 'Pionero', 'alvaro.pionero@gmail.com', '858585858', 'C / Pionero', '1971-01-01', '/public/img/miembros/jovenes/85858585P.png', 'Pioneros', 'Joven', 'alvaroP', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(86, '86868686P', 'Blanca', 'Pionera', 'blanca.pionera@gmail.com', '868686868', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/86868686P.png', 'Pioneros', 'Joven', 'blancaP', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(87, '87878787P', 'Cristina', 'Pionera', 'cristina.pionera@gmail.com', '878787878', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/87878787P.png', 'Pioneros', 'Joven', 'cristina', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(88, '88888888P', 'Genet', 'Pionera', 'genet.pionera@gmail.com', '888888888', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/88888888P.png', 'Pioneros', 'Joven', 'genet', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(89, '89898989P', 'Elisa', 'Pionera', 'elisa.pionera@gmail.com', '898989898', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/89898989P.png', 'Pioneros', 'Joven', 'elisa', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(90, '90909090P', 'Manuela', 'Pionera', 'manuela.pionera@gmail.com', '909090909', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/90909090P.png', 'Pioneros', 'Joven', 'manuela', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(91, '91919191P', 'Xela', 'Pionera', 'xela.pionera@gmail.com', '919191919', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/91919191P.png', 'Pioneros', 'Joven', 'xela', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(92, '92929292P', 'Judith', 'Pionera', 'judith.pionera@gmail.com', '929292929', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/92929292P.png', 'Pioneros', 'Joven', 'judith', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(93, '93939393P', 'Marta', 'Pionera', 'marta.pionera@gmail.com', '939393939', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/93939393P.png', 'Pioneros', 'Joven', 'martaP', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6'),
(94, '94949494P', 'Selene', 'Pionera', 'selene.pionera@gmail.com', '949494949', 'C / Pionera', '1971-01-01', '/public/img/miembros/jovenes/94949494P.png', 'Pioneros', 'Joven', 'selene', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes_actividad`
--

CREATE TABLE `participantes_actividad` (
  `id` int NOT NULL,
  `id_Actividad` int DEFAULT NULL,
  `id_Miembro` int DEFAULT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participantes_actividad`
--

INSERT INTO `participantes_actividad` (`id`, `id_Actividad`, `id_Miembro`, `descripcion`) VALUES
(1, 5, 4, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!'),
(2, 5, 1, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!'),
(3, 5, 6, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!'),
(4, 5, 2, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!'),
(5, 5, 20, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!'),
(6, 1, 4, 'Un fin de semana emocionante para compartir con los compañeros de otras ramas. Disfrutaremos de juegos, dinámicas y actividades al aire libre, fortaleciendo nuestra amistad y aprendiendo a caminar más cerca de Dios. Será un tiempo para reflexionar, compartir experiencias y vivir momentos inolvidables juntos. ¡Un fin de semana lleno de energía y fe!'),
(7, 5, 94, 'Una semana intensa que marca el fin de la ronda solar. Un campamento lleno de actividades emocionantes: juegos en el río, manualidades, dinámicas de grupo y momentos de servicio. Será un tiempo perfecto para fortalecer la amistad, disfrutar de la naturaleza y compartir la fe. Juntos viviremos experiencias que nos acompañarán durante todo el año. ¡Una semana llena de diversión, aprendizajes y momentos únicos!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int NOT NULL,
  `nombre` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `login` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb4_general_ci NOT NULL,
  `rol` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellidos`, `fecha_nacimiento`, `login`, `password`, `rol`) VALUES
(1, 'César', 'Delgado', '2004-04-04', 'admin', '$2y$12$ZKiMsZ70k9BN65lrh8ApKO4Km50JV1TqyKy9n.z30wwQqFcuLN7G6', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_Actividad`);

--
-- Indices de la tabla `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id_Miembro`);

--
-- Indices de la tabla `participantes_actividad`
--
ALTER TABLE `participantes_actividad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `participantes_actividad_ibfk_1` (`id_Actividad`),
  ADD KEY `participantes_actividad_ibfk_2` (`id_Miembro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_Actividad` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id_Miembro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `participantes_actividad`
--
ALTER TABLE `participantes_actividad`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `participantes_actividad`
--
ALTER TABLE `participantes_actividad`
  ADD CONSTRAINT `participantes_actividad_ibfk_1` FOREIGN KEY (`id_Actividad`) REFERENCES `actividades` (`id_Actividad`) ON DELETE CASCADE,
  ADD CONSTRAINT `participantes_actividad_ibfk_2` FOREIGN KEY (`id_Miembro`) REFERENCES `miembros` (`id_Miembro`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
