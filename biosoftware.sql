-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 02:51:59
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biosoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `log` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `nombre`, `lat`, `log`, `created_at`, `updated_at`) VALUES
(1, 'Antrópica', '10.407340', '-73.239792', NULL, NULL),
(2, 'Acuicultura', '10.404364', '-73.239494', NULL, NULL),
(3, 'Esp. Menores', '10.403799', '-73.238536', NULL, NULL),
(4, 'Ganadearía', '10.402830', '-73.238472\r\n\r\n', NULL, NULL),
(5, 'Vivero', '10.403190', '-73.236235', NULL, NULL),
(6, 'Cultivo', '10.403841', '-73.234209', NULL, NULL),
(7, 'Bosque', '10.397721', '-73.229505', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aves`
--

CREATE TABLE `aves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_comun` varchar(255) NOT NULL,
  `nombre_cientifico` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `aves`
--

INSERT INTO `aves` (`id`, `nombre_comun`, `nombre_cientifico`, `imagen`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Andarríos Solitario', 'Tringa solitaria', 'tringa-solitaria.jpg', 'Es una especie de ave migratoria que se reproduce en el norte de América del Norte e inverna en América Central y del Sur. La Solitaria es un ave zancuda de tamaño mediano con un distintivo anillo ocular blanco y una espalda marrón-verdoso oscura y audaz. A menudo se las ve solas o en pequeños grupos, y se pueden encontrar en una variedad de hábitats, incluyendo humedales, arroyos y estanques. Durante la temporada de reproducción, construyen sus nidos en el suelo cerca del agua y ponen de 3 a 5 huevos, que son incubados por ambos padres.', '2023-04-17 04:23:55', '2023-04-17 04:23:55'),
(2, 'Colibrí Cola Azul', 'Amazilia tzacatl', 'amazilia-tzacatl.jpg', 'una especie de colibrí que se encuentra en América Central y América del Sur. Los machos tienen un plumaje iridiscente verde azulado en el dorso y en las partes superiores del cuerpo, mientras que las partes inferiores son de color grisáceo. La cola de los machos es de color azul oscuro, mientras que las hembras tienen una cola más corta y de color marrón. Las Amazilias Coliazules se alimentan principalmente del néctar de las flores, aunque también pueden comer insectos y arañas. Son importantes polinizadores en su hábitat natural.', '2023-04-17 04:28:11', '2023-04-17 04:28:11'),
(3, 'Garza real', 'Ardea alba', 'ardea-alba.jpg', 'Es una especie de ave zancuda que se encuentra en todo el mundo, excepto en las regiones más frías del norte. La Garza real es un ave grande, con un plumaje completamente blanco y un pico largo y afilado de color amarillo. Su cuello y patas son largos y delgados, y en vuelo, sus alas se extienden en una envergadura impresionante.\r\n\r\nLas Garzas Reales se pueden encontrar en una variedad de hábitats acuáticos, como humedales, estanques y ríos, donde se alimentan principalmente de peces, pero también comen insectos, crustáceos y otros animales acuáticos. Son aves migratorias en muchas partes de su área de distribución y se reproducen en colonias en árboles y arbustos cerca del agua. Durante la temporada de cría, construyen grandes nidos hechos de palos y ramitas y ponen de 3 a 5 huevos. Las Garzas Blancas son aves hermosas y majestuosas que se pueden ver en muchas partes del mundo.', '2023-04-17 04:32:43', '2023-04-17 04:32:43'),
(4, 'Garza gris', 'Ardea cocoi', 'ardea-cocoi.jpg', 'Ardea cocoi es una especie de garza que se encuentra en América del Sur. Es una garza grande, con un plumaje predominantemente grisáceo y un pico largo y fuerte de color amarillo. Su cuello y patas son largos y delgados, y en vuelo, sus alas se extienden en una envergadura impresionante. Se alimenta principalmente de peces, aunque también come otros animales acuáticos como crustáceos y ranas. A menudo se encuentra en hábitats acuáticos como ríos, lagos y estanques, y puede ser vista en muchos países sudamericanos, desde Venezuela hasta Argentina. La garza cocoi es una hermosa ave acuática y un importante componente del ecosistema de agua dulce de América del Sur.', '2023-04-17 04:38:40', '2023-04-17 04:38:40'),
(5, 'Periquito Alas Amarillas', 'Brotogeris jugularis', 'brotogeris-jugularis.jpg', 'Es una de las especies de cotorras más comunes en la región, y tiene un plumaje principalmente verde con un parche naranja en el área de la garganta. Los machos y las hembras tienen una apariencia similar.  se alimentan principalmente de semillas, frutas y néctar, y a menudo se las ve en grandes grupos en áreas abiertas como campos y bosques abiertos. Son aves muy sociables y pueden ser entrenadas para imitar sonidos y palabras', '2023-04-17 04:43:42', '2023-04-17 04:43:42'),
(6, 'Garcita Del Ganado', 'Bubulcus ibis', 'bubulcus-ibis.jpg', 'El Bubulcus ibis, también conocido como garcilla bueyera o garcita del ganado, es una especie de ave perteneciente a la familia Ardeidae. Es un ave pequeña, que mide alrededor de 48 a 56 centímetros de largo y pesa aproximadamente entre 200 y 400 gramos.\r\n\r\nTiene un plumaje mayormente blanco, con algunas partes grises y amarillas. Tiene una cabeza pequeña con un pico largo y delgado de color amarillo. Las patas también son de color amarillo, con dedos largos y delgados.\r\n\r\nEsta ave es conocida por su habilidad para cazar insectos y pequeños vertebrados, como roedores y reptiles. Puede ser encontrada en áreas abiertas como pastizales, arrozales y campos agrícolas, y también en humedales y bordes de ríos.', '2023-04-17 04:48:26', '2023-04-17 04:48:26'),
(7, 'Galan', 'Burhinus bistriatus', 'burhinus-bistriatus.jpg', NULL, '2023-04-18 02:47:55', '2023-04-18 02:47:55'),
(8, 'Gavilán Sabanero', 'Buteogallus meridionalis', 'buteogallus-meridionalis.jpg', NULL, '2023-04-18 02:48:58', '2023-04-18 02:48:58'),
(9, 'Chupahuevo', 'Campylorhynchus griseus', 'campylorhynchus-griseus.jpg', NULL, '2023-04-18 02:50:08', '2023-04-18 02:50:08'),
(10, 'Cucarachero Habado', 'Campylorhynchus nuchalis', 'campylorhynchus-nuchalis.jpg', NULL, '2023-04-18 02:51:13', '2023-04-18 02:51:13'),
(11, 'Martin pescador pequeño', 'Chloroceryle americana', 'chloroceryle-americana.jpg', NULL, '2023-04-18 02:52:40', '2023-04-18 02:52:40'),
(12, 'Carri Carri', 'Caracara cheriway', 'caracara-cheriway.jpg', NULL, '2023-04-18 03:11:08', '2023-04-18 03:11:08'),
(13, 'Guala común', 'Cathartes aura', 'cathartes-aura.jpg', NULL, '2023-04-18 03:53:21', '2023-04-18 03:53:21'),
(15, 'Colibrí Esmeralda', 'Chlorostilbon gibsoni', 'chlorostilbon-gibsoni.jpg', NULL, '2023-04-18 03:56:58', '2023-04-18 03:56:58'),
(16, 'Gavilán Rojinegra', 'Parabuteo unicinctus', 'parabuteo-unicinctus.jpg', NULL, '2023-04-18 03:58:06', '2023-04-18 03:58:06'),
(17, 'Carpintero Pechipunteado', 'Colaptes punctigula', 'colaptes-punctigula.jpg', NULL, '2023-04-18 03:59:05', '2023-04-18 03:59:05'),
(18, 'Perdiz Común', 'Colinus cristatus', 'colinus-cristatus.jpg', NULL, '2023-04-18 03:59:51', '2023-04-18 03:59:51'),
(19, 'Tortolita enana', 'Columbina minuta', 'columbina-minuta.jpg', NULL, '2023-04-18 04:00:53', '2023-04-18 04:07:27'),
(20, 'Tortolita Escamada', 'Columbina squammata', 'columbina-squammata.jpg', NULL, '2023-04-18 04:02:04', '2023-04-18 04:02:04'),
(21, 'Tierrelita Roja', 'Columbina talpacoti', 'columbina-talpacoti.jpg', NULL, '2023-04-18 04:02:44', '2023-04-18 04:02:44'),
(22, 'Golero', 'Coragyps atratus', 'coragyps-atratus.jpg', NULL, '2023-04-18 04:03:33', '2023-04-18 04:03:33'),
(23, 'Cocinera o Jiriguelo', 'Crotophaga sulcirostris', 'crotophaga-sulcirostris.jpg', NULL, '2023-04-18 04:06:04', '2023-04-18 04:06:04'),
(24, 'Pisingo', 'Dendrocygna autumnalis', 'dendrocygna-autumnalis.jpg', NULL, '2023-04-18 04:06:40', '2023-04-18 04:06:40'),
(25, 'Trepatroncos', 'Dendroplex picus', 'dendroplex-picus.jpg', NULL, '2023-04-18 04:10:08', '2023-04-18 04:10:08'),
(26, 'Carpintero Real', 'Dryocopus lineatus', 'dryocopus-lineatus.jpg', NULL, '2023-04-18 04:10:51', '2023-04-18 04:10:51'),
(27, 'Copetón', 'Elaenia chiriquensis', 'elaenia-chiriquensis.jpg', NULL, '2023-04-18 04:11:40', '2023-04-18 04:11:40'),
(28, 'Pico gordo', 'Euphonia trinitatis', 'euphonia-trinitatis.jpg', NULL, '2023-04-18 04:12:23', '2023-04-18 04:12:23'),
(29, 'Perico cara sucia', 'Eupsittula pertinax', 'eupsittula-pertinax.jpg', NULL, '2023-04-18 04:13:54', '2023-04-18 04:13:54'),
(30, 'Gavilancito Perlado', 'Gampsonyx swainsonii', 'gampsonyx-swainsonii.jpg', NULL, '2023-04-18 04:14:46', '2023-04-18 04:14:46'),
(31, 'Halconcito', 'Falco sparverius', 'falco-sparverius.jpg', NULL, '2023-04-18 04:15:30', '2023-04-18 04:15:30'),
(32, 'Fluvicola pica', 'Fluvicola pica', 'fluvicola-pica.jpg', 'El Fluvicola pica es una especie de ave paseriforme que pertenece a la familia Tyrannidae. Se encuentra en América del Sur, especialmente en las regiones tropicales y subtropicales. Es un ave pequeña y delgada, de color gris azulado en la parte superior y blanca en la parte inferior. Tiene un pico corto y recto y una cola larga y ahorquillada. Es conocida por su canto característico y es común en áreas cercanas a los cuerpos de agua, como ríos y lagos. El Fluvicola pica se alimenta principalmente de insectos y otros pequeños invertebrados que encuentra cerca del agua. Es una especie común y no se considera en peligro de extinción.', '2023-04-18 04:15:53', '2023-04-18 05:29:40'),
(33, 'Carga barro', 'Furnarius leucopus', 'furnarius-leucopus.jpg', 'Furnarius leucopus, también conocido como o Carga Barro, es una especie de ave paseriforme que habita en Sudamérica, especialmente en las regiones de la Patagonia Argentina y Chile. El Hornero Patagónico es conocido por su nido en forma de horno, construido con barro, paja y otros materiales, y que puede llegar a medir hasta un metro de altura. Es un ave de tamaño mediano, con un plumaje pardo oscuro en la parte superior y blanco en la parte inferior. Tiene un pico fuerte y curvado hacia abajo que le ayuda a romper y comer insectos y otros invertebrados. Es común encontrarlo en áreas abiertas y arbustivas, cerca de ríos y lagos, donde se alimenta de insectos y otros invertebrados. El Hornero Patagónico es una especie común y no se considera en peligro de extinción.', '2023-04-18 04:16:25', '2023-04-18 05:31:54'),
(34, 'Cascabelito', 'Forpus conspicillatus', 'forpus-conspicillatus.jpg', 'Forpus conspicillatus es una especie de loro pequeño y colorido, perteneciente a la familia de los Psittacidae, que se encuentra en América Central y del Sur. Conocido comúnmente como perico lentejuelado, el Forpus conspicillatus tiene un plumaje principalmente verde, con manchas y rayas rojas, azules y amarillas en las alas y la cabeza. El nombre de la especie se debe a los anillos alrededor de los ojos que parecen gafas o lentes, lo que los hace fácilmente distinguibles de otras especies de pericos. Son aves sociales que generalmente viven en parejas o en pequeños grupos, y se alimentan principalmente de semillas, frutas y bayas. Son comunes en zonas de bosques y áreas agrícolas, y son apreciados como mascotas debido a su tamaño y llamativos colores. El Forpus conspicillatus se encuentra actualmente en la categoría de preocupación menor de la Lista Roja de la UICN, pero algunas poblaciones locales pueden estar en peligro debido a la pérdida de hábitat y la captura para el comercio de mascotas.', '2023-04-18 04:16:53', '2023-04-18 05:34:59'),
(35, 'Buhito', 'Glaucidium jardinii', 'glaucidium-jardinii.jpg', 'Glaucidium jardinii, también conocido como el Mochuelo de Jardine o Buhito, es una especie de ave rapaz nocturna que se encuentra en América Central y del Sur. Esta ave tiene un tamaño pequeño, mide alrededor de 16 a 20 cm de largo y pesa entre 50 y 80 gramos. Su plumaje es principalmente gris con manchas blancas y negras, y tiene ojos grandes y amarillos. El Mochuelo de Jardine es un depredador activo y se alimenta de insectos, arañas, lagartijas, pequeñas aves y roedores. Se encuentra principalmente en bosques y áreas boscosas, pero también se puede encontrar en áreas urbanas y suburbanas. La especie no se encuentra actualmente en peligro de extinción, pero se enfrenta a amenazas como la pérdida de hábitat y la caza ilegal para el comercio de mascotas.', '2023-04-18 04:17:24', '2023-04-18 05:37:23'),
(36, 'Ranero', 'Geranospiza caerulescens', 'geranospiza-caerulescens.jpg', 'Es una especie de ave rapaz que se encuentra en América Central y del Sur. Es un ave de tamaño mediano, con una longitud promedio de 46 cm y un peso promedio de 350 gramos. Su plumaje es de color gris-azulado en la parte superior y blanco en la parte inferior, con patas largas y amarillas y un pico curvo. Esta ave se alimenta principalmente de peces, pero también se alimenta de ranas, cangrejos, caracoles y otros animales acuáticos. El aguilucho plomizo es capaz de posarse sobre las ramas de los árboles y bucear desde ahí para capturar su presa. Esta especie se encuentra en peligro de extinción debido a la pérdida de hábitat y a la caza furtiva. Se considera que la población de Geranospiza caerulescens está disminuyendo y se encuentra actualmente en la categoría de vulnerables de la Lista Roja de la UICN.', '2023-04-18 04:17:53', '2023-04-18 05:41:09'),
(37, 'Guacabó', 'Herpetotheres cachinnans', 'herpetotheres-cachinnans.jpg', 'Herpetotheres cachinnans, también conocido como el halcón reidor o Guacabó, es una especie de ave rapaz que se encuentra en América Central y del Sur. Es un ave de tamaño mediano, con una longitud promedio de 40 cm y un peso promedio de 300 gramos. Su plumaje es principalmente de color marrón oscuro, con un collar blanco alrededor del cuello y una franja blanca en la parte superior de la cola. Esta ave se alimenta principalmente de reptiles, anfibios y pequeños mamíferos, a los que atrapa en vuelo. El halcón reidor es conocido por su risa distintiva, que es un sonido gutural y estridente que hace cuando se siente amenazado o excitado. Se encuentra en bosques tropicales y subtropicales y también se puede encontrar en áreas urbanas y suburbanas. La especie no se encuentra actualmente en peligro de extinción.', '2023-04-18 04:18:48', '2023-04-18 05:44:15'),
(38, 'Bobo Punteado', 'Hypnelus ruficollis', NULL, NULL, '2023-04-18 04:19:20', '2023-04-18 04:19:20'),
(39, 'Mochilero', 'Icterus auricapillus', NULL, NULL, '2023-04-18 04:19:43', '2023-04-18 04:19:43'),
(40, 'Tortola colipinta', 'Leptotila verreauxi', NULL, NULL, '2023-04-18 04:20:47', '2023-04-18 04:20:47'),
(41, 'Sirirí bueyero', 'Machetornis rixosa', NULL, NULL, '2023-04-18 04:26:35', '2023-04-18 04:26:35'),
(42, 'Martin pescador Grande', 'Machetornis rixosa', NULL, NULL, '2023-04-18 04:27:32', '2023-04-18 04:27:32'),
(43, 'Bichofué picudo', 'Megarynchus pitangua', NULL, NULL, '2023-04-18 04:28:29', '2023-04-18 04:28:29'),
(44, 'Carpintero', 'Melanerpes rubricapillus', NULL, NULL, '2023-04-18 04:29:02', '2023-04-18 04:29:02'),
(45, 'Coclito', 'Mesembrinibis cayennensis', NULL, NULL, '2023-04-18 04:29:34', '2023-04-18 04:29:34'),
(46, 'Pigua', 'Milvago chimachima', NULL, NULL, '2023-04-18 04:30:28', '2023-04-18 04:30:28'),
(47, 'Buhio', 'Nyctidromus albicollis', NULL, NULL, '2023-04-18 04:32:34', '2023-04-18 04:32:34'),
(48, 'Sinsonte Común', 'Mimus gilvus', NULL, NULL, '2023-04-18 04:33:20', '2023-04-18 04:33:20'),
(49, 'Barranquero coronado', 'Momotus subrufescens', NULL, NULL, '2023-04-18 04:34:28', '2023-04-18 04:34:28'),
(50, 'Yolofo', 'Molothrus bonariensis', NULL, NULL, '2023-04-18 04:35:00', '2023-04-18 04:35:00'),
(51, 'Guarumera', 'Patagioenas corensis', NULL, NULL, '2023-04-18 04:35:30', '2023-04-18 04:35:30'),
(52, 'Suelda crestinegra', 'Myiozetetes cayanensis', NULL, NULL, '2023-04-18 04:36:15', '2023-04-18 04:36:36'),
(53, 'Pato Yuyo', 'Phalacrocorax brasilianus', NULL, NULL, '2023-04-18 04:37:13', '2023-04-18 04:37:13'),
(54, 'Pájaro ardilla', 'Piaya cayana', NULL, NULL, '2023-04-18 04:37:44', '2023-04-18 04:38:04'),
(55, 'Carpinterito Castaño', 'Picumnus cinnamomeus', NULL, NULL, '2023-04-18 04:38:44', '2023-04-18 04:38:44'),
(56, 'Chajin', 'Pionus menstruus', NULL, NULL, '2023-04-18 04:39:14', '2023-04-18 04:39:14'),
(57, 'Bichofue', 'pitangus sulphuratus', NULL, NULL, '2023-04-18 04:40:16', '2023-04-18 04:40:16'),
(58, 'Arrocerito', 'Polioptila plumbea', NULL, NULL, '2023-04-18 04:41:03', '2023-04-18 04:41:03'),
(59, 'Sangre toro', 'Pyrocephalus rubinus', NULL, NULL, '2023-04-18 04:41:45', '2023-04-18 04:41:45'),
(60, 'Tordo negro', 'Quiscalus lugubris', NULL, NULL, '2023-04-18 04:42:38', '2023-04-18 04:42:38'),
(61, 'Copetón negro', 'Sakesphorus canadensis', NULL, NULL, '2023-04-18 04:43:30', '2023-04-18 04:43:30'),
(62, 'Papayero', 'Saltator coerulescens', NULL, NULL, '2023-04-18 04:43:56', '2023-04-18 04:43:56'),
(63, 'Pico plata', 'Sporophila intermedia', NULL, NULL, '2023-04-18 04:44:53', '2023-04-18 04:44:53'),
(64, 'Rosita vieja', 'Sporophila minuta', NULL, NULL, '2023-04-18 04:45:20', '2023-04-18 04:45:20'),
(65, 'Cocla', 'Theristicus caudatus', NULL, NULL, '2023-04-18 04:45:49', '2023-04-18 04:45:49'),
(66, 'Azulejo', 'Thraupis episcopus', NULL, NULL, '2023-04-18 04:46:19', '2023-04-18 04:46:19'),
(67, 'Siriri común', 'Tyrannus melancholicus', NULL, NULL, '2023-04-18 04:46:53', '2023-04-18 04:46:53'),
(68, 'Mirla', 'Turdus grayi', NULL, NULL, '2023-04-18 04:47:32', '2023-04-18 04:47:32'),
(69, 'Tijereta', 'Tyrannus savana', NULL, NULL, '2023-04-18 04:48:21', '2023-04-18 04:48:21'),
(70, 'Semillero', 'Tyrannus savana', NULL, NULL, '2023-04-18 04:48:54', '2023-04-18 04:48:54'),
(71, 'Alcaravan', 'Vanellus chilensis', NULL, NULL, '2023-04-18 04:49:22', '2023-04-18 04:49:22'),
(72, 'Torcaza', 'Zenaida auriculata', NULL, NULL, '2023-04-18 04:49:51', '2023-04-18 04:49:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avistamientos`
--

CREATE TABLE `avistamientos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `ave_id` bigint(20) UNSIGNED NOT NULL,
  `numero_avistamientos` smallint(5) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `apellido_usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `avistamientos`
--

INSERT INTO `avistamientos` (`id`, `area_id`, `ave_id`, `numero_avistamientos`, `fecha`, `created_at`, `updated_at`, `nombre_usuario`, `apellido_usuario`) VALUES
(1, 7, 1, 10, '2018-12-31', '2023-04-18 04:53:30', '2023-04-18 04:53:30', 'Admin', 'Admin'),
(2, 1, 2, 5, '2018-12-31', '2023-04-18 04:55:32', '2023-04-18 04:55:32', 'Admin', 'Admin'),
(3, 2, 2, 1, '2018-12-31', '2023-04-18 04:56:26', '2023-04-18 04:56:26', 'Admin', 'Admin'),
(4, 3, 2, 4, '2018-12-31', '2023-04-18 04:57:08', '2023-04-18 04:57:08', 'Admin', 'Admin'),
(5, 4, 2, 5, '2018-12-31', '2023-04-18 04:57:38', '2023-04-18 04:57:38', 'Admin', 'Admin'),
(6, 5, 2, 3, '2018-12-31', '2023-04-18 04:58:12', '2023-04-18 04:58:12', 'Admin', 'Admin'),
(7, 7, 2, 23, '2018-12-31', '2023-04-18 04:58:50', '2023-04-18 04:58:50', 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_15_205945_create_aves_table', 1),
(7, '2023_03_15_210431_create_areas_table', 1),
(8, '2023_03_15_210445_create_avistamientos_table', 1),
(9, '2023_03_26_010539_add_fields_to_users_table', 1),
(10, '2023_03_26_011319_add_fields_to_aves_table', 1),
(11, '2023_04_14_214719_drop_column_nombre_usuario_from_avistamientos_table', 1),
(12, '2023_04_15_223644_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(2, 'aves', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(3, 'aves.create', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(4, 'aves.edit', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(5, 'aves.show', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(6, 'aves.update', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(7, 'aves.destroy', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(8, 'aves.store', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(9, 'avistamientos.index', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(10, 'avistamientos.store', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(11, 'usuarios', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(12, 'usuarios.edit', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(13, 'usuarios.update', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(14, 'usuarios.store', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(15, 'usuarios.create', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(16, 'usuarios.destroy', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(2, 'Aprendiz', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20'),
(3, 'User', 'web', '2023-04-17 03:05:20', '2023-04-17 03:05:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(5, 2),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellido`, `email`, `imagen`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', NULL, '2023-04-17 03:05:21', '$2y$10$neD314U7DOkW/rOnyTDPfehRlROQuRuyKgRuArvHugquoBWAI2QfS', 'z5vxgpoNnjE0JUV0T7CZ9vEY8CNEwg0H8cit0V37yp7ak4QPw6TE7B1Gc89M', '2023-04-17 03:05:21', '2023-04-17 03:05:21'),
(2, 'Jhonatan', 'Camelo', 'jcamelo625@gmail.com', 'avatar4.jpg', '2023-04-17 03:05:21', '$2y$10$CsMtV2gViS7oJaTm9B5YmeydtmPphMQ8CYLM/xy/AkwX1bCPQK6/i', 'fwB5el5hpBC89My0tL3WZUP0lAqyOqjkQ7rHo2qZMX0Ia7VNcG7yePTAFbEm', '2023-04-17 03:05:21', '2023-04-17 03:25:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aves`
--
ALTER TABLE `aves`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `avistamientos`
--
ALTER TABLE `avistamientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `avistamientos_area_id_foreign` (`area_id`),
  ADD KEY `avistamientos_ave_id_foreign` (`ave_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `aves`
--
ALTER TABLE `aves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `avistamientos`
--
ALTER TABLE `avistamientos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `avistamientos`
--
ALTER TABLE `avistamientos`
  ADD CONSTRAINT `avistamientos_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `avistamientos_ave_id_foreign` FOREIGN KEY (`ave_id`) REFERENCES `aves` (`id`);

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
