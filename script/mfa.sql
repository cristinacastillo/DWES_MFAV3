-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2020 a las 17:23:31
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
-- Base de datos: `mfa`
--
CREATE DATABASE IF NOT EXISTS `mfa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mfa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adoption`
--

CREATE TABLE `adoption` (
  `idAdop` int(10) UNSIGNED NOT NULL,
  `idDog` int(10) UNSIGNED NOT NULL,
  `idUse` int(10) UNSIGNED NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateAdop` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `adoption`
--

INSERT INTO `adoption` (`idAdop`, `idDog`, `idUse`, `reason`, `dateAdop`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 14, 'Repellat et officia cum voluptatem fuga at provident excepturi et et veritatis expedita id aut dolores fuga illum nulla maiores dolor.', '2017-09-24', 0, NULL, NULL, NULL),
(2, 19, 11, 'Itaque occaecati fuga est adipisci voluptates voluptatum culpa consequatur omnis et unde asperiores in et aut eveniet cupiditate est est est quam.', '2003-09-24', 2, NULL, NULL, NULL),
(3, 9, 15, 'Labore soluta earum quas labore ut nobis quo minima voluptas tempore consequuntur accusantium a.', '1985-12-22', 0, NULL, NULL, NULL),
(4, 2, 5, 'Recusandae a eos eos sit animi ut inventore autem sit incidunt numquam aut neque tenetur ullam omnis voluptatibus non maiores itaque rem voluptas quia voluptas quas.', '1995-09-17', 0, NULL, NULL, NULL),
(5, 10, 28, 'Dolores officia fuga sed aut dolores laboriosam laborum nam sit quae sint voluptatem atque nostrum maxime sint at asperiores porro similique consequatur esse rerum qui.', '2008-06-06', 0, NULL, NULL, NULL),
(6, 4, 27, 'Vero voluptas dolores exercitationem non sed quo veritatis rerum accusamus esse voluptatibus sequi molestiae at vero voluptas nobis sit ullam dicta et et.', '2016-11-27', 0, NULL, NULL, NULL),
(7, 10, 23, 'Placeat ab ipsa nihil quo doloribus tempore voluptate sit magni in fugiat sed molestiae ut.', '1981-09-23', 0, NULL, NULL, NULL),
(8, 4, 10, 'Mollitia nihil omnis reprehenderit architecto natus voluptatibus in dignissimos veritatis consectetur aliquid et est quia id provident qui.', '2020-09-17', 1, NULL, NULL, NULL),
(10, 15, 24, 'Et qui reiciendis ut suscipit ullam ab et repudiandae reiciendis exercitationem adipisci ratione ipsum fugit eum eos molestias voluptatem ratione non sapiente hic corrupti molestias placeat.', '2002-01-27', 0, NULL, NULL, NULL),
(11, 11, 20, 'Eos itaque quo saepe aut molestiae esse non at corrupti sit et facere distinctio non voluptatibus et repudiandae quis eveniet fuga libero architecto.', '1976-07-19', 0, NULL, NULL, NULL),
(13, 16, 2, 'Enim quo quos labore dolorem nam fuga quia reprehenderit nihil molestias assumenda velit blanditiis amet aliquam fugit ducimus.', '2014-05-08', 0, NULL, NULL, NULL),
(14, 15, 26, 'Soluta doloremque suscipit exercitationem suscipit minus quia qui harum possimus praesentium voluptatem modi eveniet quo eaque soluta omnis voluptas.', '1975-02-20', 0, NULL, NULL, NULL),
(15, 11, 26, 'Reiciendis repudiandae nihil commodi molestiae aliquam qui harum est in voluptate non veniam.', '2019-08-24', 0, NULL, NULL, NULL),
(16, 4, 17, 'Doloremque ea veniam id adipisci recusandae officia blanditiis excepturi odit recusandae consectetur natus quia et voluptas voluptate.', '1990-10-01', 0, NULL, NULL, NULL),
(17, 1, 19, 'Nam ut laborum vel quo quia porro laboriosam aliquam nihil nobis vel debitis atque nam assumenda at dolorem perferendis.', '1986-10-21', 0, NULL, NULL, NULL),
(18, 2, 11, 'Dolores natus debitis ad aut perspiciatis quos quia sit minus qui eius consectetur sequi placeat accusantium facere qui sit laudantium sit ex laboriosam aperiam eum cumque.', '2020-09-17', 1, NULL, NULL, NULL),
(19, 17, 23, 'Qui suscipit voluptatibus corrupti quis natus est voluptatem earum explicabo officia aliquam excepturi nam ea quia sequi quod ea doloribus aspernatur.', '2003-06-11', 0, NULL, NULL, NULL),
(20, 18, 7, 'Commodi quasi molestias et sequi magni maxime et sequi in blanditiis doloribus quo.', '1992-01-01', 0, NULL, NULL, NULL),
(21, 4, 19, 'Et inventore quia quo facilis tempore nihil magni eum est aperiam repudiandae qui natus est.', '1982-01-11', 0, NULL, NULL, NULL),
(22, 19, 4, 'Ut autem et est nihil ut aliquam porro quos aut qui harum delectus quis qui perferendis cum iusto ut dolor et voluptatem consequatur et nulla maxime sint.', '1995-02-12', 0, NULL, NULL, NULL),
(23, 9, 23, 'Dicta hic sit ex eligendi mollitia ut ea voluptas atque illum vitae nisi quia et aut blanditiis excepturi cum maxime ut voluptatum.', '1998-05-16', 0, NULL, NULL, NULL),
(24, 17, 20, 'Et numquam qui dolor sunt rerum libero consequatur a illo eos nihil qui vel in eligendi maiores.', '2001-12-21', 0, NULL, NULL, NULL),
(26, 3, 13, 'Vel quaerat et voluptatibus consequatur ut debitis ea quam omnis aut aut soluta assumenda sit sequi rem.', '1983-09-16', 0, NULL, NULL, NULL),
(27, 10, 15, 'Debitis autem vero dolorem eum officiis unde et repudiandae autem libero sunt neque recusandae illum ut et provident ea repellendus maiores nihil aut deserunt.', '2008-06-05', 0, NULL, NULL, NULL),
(28, 2, 9, 'Dignissimos facere molestiae quisquam veritatis labore eligendi veritatis dolor minima distinctio nihil voluptatem officiis minima illo fugit suscipit dolore adipisci temporibus officiis expedita rerum fugiat accusantium recusandae sapiente quia.', '1993-12-02', 2, NULL, NULL, NULL),
(29, 19, 4, 'Vitae necessitatibus esse ipsa quae eum aperiam officiis incidunt recusandae aut eum id facilis et accusantium maxime cupiditate provident velit porro vel accusantium sequi corrupti odio modi.', '1978-12-20', 0, NULL, NULL, NULL),
(30, 18, 12, 'Sapiente facilis ullam illum quis nostrum quae praesentium perferendis sed et aut placeat tempore perferendis deleniti id ut vel esse.', '1982-06-02', 0, NULL, NULL, NULL),
(31, 15, 7, 'Officiis qui nostrum repellendus aut corrupti perferendis quia deserunt ullam unde odit molestiae perferendis dolor id deleniti ut et ab enim fugiat assumenda quia consequatur rerum sit quis.', '1980-01-17', 0, NULL, NULL, NULL),
(32, 14, 9, 'Sed qui minus id cumque repellat dolorum aliquid libero autem voluptas atque repellendus autem et animi assumenda assumenda harum temporibus rerum autem id minima eos nemo qui.', '1973-11-16', 0, NULL, NULL, NULL),
(33, 1, 14, 'Sunt eos voluptatum beatae rerum necessitatibus repudiandae non deserunt enim laborum enim dolorem est voluptatum non itaque est.', '2016-09-28', 0, NULL, NULL, NULL),
(34, 2, 10, 'Porro et dolores consequatur non ad eligendi aut explicabo optio dolores cupiditate ipsa fuga.', '2004-12-02', 0, NULL, NULL, NULL),
(35, 16, 7, 'Sint quae nulla veritatis odio impedit dolorum expedita sit qui officiis ut ullam fugit consequatur et voluptas omnis quis.', '1979-12-23', 0, NULL, NULL, NULL),
(36, 1, 1, 'aasda', '2020-09-17', 0, NULL, NULL, NULL),
(37, 7, 1, 'quiero este perro', '2020-11-12', 1, NULL, NULL, NULL),
(38, 5, 1, 'sdfsdfsdfsdf', '2020-12-07', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commentdog`
--

CREATE TABLE `commentdog` (
  `idCom` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateComment` date NOT NULL,
  `idDog` int(10) UNSIGNED NOT NULL,
  `idUse` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `commentdog`
--

INSERT INTO `commentdog` (`idCom`, `comment`, `dateComment`, `idDog`, `idUse`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hols me skgns', '2020-11-12', 2, 1, NULL, NULL, NULL),
(3, 'kjflkaa aknfkamf a afj aslfd lasfl kaksflal af jal kjflkaa aknfkamf a afj aslfd lasfl kaksflal af jal kjflkaa aknfkamf a afj aslfd lasfl kaksflal af jal kjflkaa aknfkamf a afj aslfd lasfl kaksflal af jal kjflkaa aknfkamf a afj aslfd lasfl kaksflal af jal', '2020-11-24', 2, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dog`
--

CREATE TABLE `dog` (
  `idDog` int(10) UNSIGNED NOT NULL,
  `birthdate` date NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dog`
--

INSERT INTO `dog` (`idDog`, `birthdate`, `name`, `breed`, `gender`, `description`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, '2019-09-14', 'Trufa', 'Mestizo', 'Macho', 'Trufa y Trully son hermanos de una camada de embarazos no deseados. En realidad, había tres cachorros, pero uno murió.\n							El dueño de la madre de los cachorros, es cliente de nuestro veterinario Antonio. Le pidió ayuda a Alicia y ella trajo a los dos cachorros a Manuel, un hogar de acogida, porque él siempre ayuda.\n							Trufa y Trully fueron ubicadas en este hogar de acogida porque eran muy pequeñas.\n							Son cachorros muy sociables y tiernos, siempre en busca de la proximidad de los humanos.', 'Trufa.png', 0, NULL, NULL),
(2, '2007-09-30', 'Estrella', 'Mestizo', 'Hembra', 'Estrella es poco sociable, cariñosa a veces... Aunque le gusta que le mimen mucho, no quiere que le den besos pero ella a ti todos los posibles. Le gusta mucho el calor, tomando el sol o debajo de la manta. Es muy inteligente pero solo cuando quiere. Le encanta estar en casa y viajar en el asiento del copiloto en el coche.', 'Estrella.png', 1, NULL, NULL),
(3, '2019-09-14', 'Thomas', 'Mestizo', 'Macho', 'Thomas y Teddy son muy sociables, amorosos, muy gentiles, cuidadosos, curiosos, tranquilos y equilibrados. Su madre fue abandonada por su dueño cuando estaba muy embarazada. En la calle dio a luz a los cachorros, una mujer nativa del pueblo los alimentó. Cuando los cachorros cumplieron un mes de edad, comenzaron a salir del \"nido\" remoto, que a los aldeanos no les gustaba, y la familia de los perros estaba en peligro. Afortunadamente, la familia fue notada por una mujer que ayudaba a los animales sin hogar. Ella sacaba a los cachorros de la calle y los llevaba al refugio donde ahora viven.', 'Thomas.png', 0, NULL, NULL),
(4, '2019-09-14', 'Denny', 'Mestizo', 'Macho', 'En una aldea detrás de los garajes, una perra ciega de la calle había dado a luz a sus cachorros. A medida que crecieron, comenzaron a salir del nido y a conocer a las personas que no les gustaban mucho, y decidieron eliminar a la familia de los perros. Un activista de los derechos de los animales ha visto un llamado de ayuda en las redes sociales sobre esta familia. Nadie, pero absolutamente nadie se acercó a ayudar. Un activista de los derechos de los animales llevó a la madre (que también buscaba un hogar) y a los cachorros Denny y Dustin a un hogar de acogida. Denny es un cachorro muy hermoso, de buen carácter, inteligente, ágil, ansioso por aprender y a una edad en la que necesita un amigo y mentor. Denny es un cachorro cariñoso y afable, no tan arrogante como su hermano Dustin', 'Denny.png', 1, NULL, NULL),
(5, '2019-09-14', 'Dustin', 'Mestizo', 'Macho', 'En una aldea detrás de los garajes, una perra ciega de la calle había dado a luz a sus cachorros. A medida que crecieron, comenzaron a salir del nido y a conocer a las personas que no les gustaban mucho, y decidieron eliminar a la familia de los perros. Un activista de los derechos de los animales ha visto un llamado de ayuda en las redes sociales sobre esta familia. Nadie, pero absolutamente nadie se acercó a ayudar.\n							Un activista de los derechos de los animales llevó a la madre (que también buscaba un hogar) y a los cachorros Dustin y Denny a un hogar de acogida.\n							Dustin es un cachorro muy activo, emocional, feliz, hace todo con placer: sale a caminar, juega. Le encanta comer y cuando llega la hora de comer, está ansioso por su comida. Después de comer, a Dustin le gusta relajarse (a diferencia de los cachorros que suelen retozar después de comer). La obediencia, fácil de entrenar, muy orientada a los humanos, entiende lo que quieres de él, responde a las \"críticas\". Está muy interesado en el mundo que lo rodea, disfruta de un paseo, está feliz de conocer gente. Junto con su hermano, Denny, jugando: él es el líder.', 'Dustin.png', 0, NULL, NULL),
(6, '2007-09-30', 'Bala', 'Bodeguero ratonero', 'Hembra', 'Bala y sus hermanos, Fusil, Polvora, Revolver, Dinamita y Cartucho fueron tirados en una caja fuera del refugio.\n								Afortunadamente, a los bribones no les ha pasado nada. Todos son sociables, juguetones, agradables y amorosos.\n								Ahora están esperando a una familia, como con los niños, que con amor, paciencia pero de manera constante enseña a los perros.', 'Bala.png', 0, NULL, NULL),
(7, '2019-09-14', 'Belier', 'Mestizo', 'Macho', 'Al principio era tímido, pero rápidamente se hizo amigo de Pepsi.\n											Así que el hogar de acogida decidió acogerlo y ahora, como Pepsi, está buscando un hogar en Alemania.\n											Belier es amigable, juguetona y curiosa.\n											Se lleva bien con todos los perros y es respetuoso al tratar con el perro más viejo de la casa.', 'Belier.png', 1, NULL, NULL),
(8, '2007-09-30', 'Pepsi', 'Mestizo pastor alemán', 'Hembra', 'Un niño se encontró accidentalmente con niños gitanos mientras hacía alboroto y ruido en la calle, aterrorizando a un pequeño perro que constantemente corría de un lado a otro con miedo.\n							El niño se acercó a los niños gitanos, los reprendió y se llevó al perrito a casa.\n							La familia le pidió a Mi que ayudara a Amigo a encontrar un nuevo hogar en Alemania para Pepsi.\n							Pepsi es un cachorro típico, tierno y juguetón, pero tiene el encanto de comunicarse con uno, sus expresiones faciales siempre te hacen reír', 'Pepsi.png', 0, NULL, NULL),
(9, '2007-09-30', 'Helsinki', 'Mestizo ratonero bodeguero', 'Hembra', 'La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.\n							Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos.\n							Helsinki y sus hermanos al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con otros perros.\n							En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.', 'Helsinki.png', 0, NULL, NULL),
(10, '2019-09-14', 'Stefan', 'Mestizo', 'Macho', 'Stefan es un niño muy dulce, dulce. Un poco tímido Amigable con otros perros, fácil de entrenar.\n									Captura todo en un santiamén. Le encantan los diferentes juguetes, le encantan los juegos con los conespecíficos.\n									Él es bondadoso, inteligente y ágil, le gusta acurrucarse.\n									En una mañana lluviosa muy temprana en Orsk, cuando todavía estaba oscuro, una mujer caminaba con sus perros y escuchó un gemido. Corrió y vio debajo de un auto, un cachorro, mojado, sucio y asustado.\n									Cuando el cachorro vio a la mujer y sus perros, lloró más fuerte.\n									En tensión, el cachorro corrió de un auto a otro. Pero la mujer logró atraparlo.\n									Al tocarse, el pequeño se estremeció y chirrió. Se empujó al suelo, como si quisiera volverse invisible.\n									Cuando se calmó un poco, se durmió y durmió mucho tiempo.\n									Entonces comenzó una nueva vida y esperamos que encuentre a su familia amorosa.', 'Stefan.png', 0, NULL, NULL),
(11, '2019-09-14', 'Tim', 'Chihuahua mix', 'Macho', 'La \"familia\" de Tim tiene suficiente de él y ya no quiere tenerlo. Ahora el hermoso joven busca un nuevo hogar en Alemania.\n							Tim es un perro joven y tímido que aún no ha aprendido mucho. En una situación que conoce, le encanta jugar y correr. Se orienta muy cerca de su persona, lo mira a los ojos, espera órdenes y comprende mucho.\n							Tim necesita personas que puedan darle la seguridad necesaria y estén dispuestos a darle su tiempo para llegar. Él es un verdadero tesoro cuando ha florecido.', 'Tim.png', 0, NULL, NULL),
(12, '2007-09-30', 'Nala', 'Mestizo', 'Hembra', 'Nala fue encontrada en el granero de una granja. La hija del dueño conoce a Alberto y Alicia y les informó. Alberto acordó hacerse cargo del perro, pero solo después\n							Bueno, incluso antes de que pudiera castrarse, nacieron sus 8 cachorros.\n							Nala es tierno, social y ama mucho a la gente.\n							Ella espera las visitas humanas diarias y es obediente.\n							También cuida muy bien a su cachorro y podemos imaginar que podría encajar bien en todas las familias.', 'Nala.png', 0, NULL, NULL),
(13, '2007-09-30', 'Sena', 'Mestizo', 'Hembra', 'Dos adolescentes cruzaron el campo en bicicleta cerca de una zanja cuando encontraron dos cajas en la zanja. Las cajas ya estaban mojadas y los cachorros adentro estaban casi ahogados.\n							Uno de los niños alertó a su madre, mientras que el otro se hizo cargo de los cachorros.\n							La madre vino con su auto y trajo los cachorros a Alicia y Alberto.\n							Ahora vive Volga, Sena, Mosa, Elba, Loira y Dangava de forma segura en el refugio y se comporta como un cachorro, generalmente juguetón y tierno.', 'Sena.png', 0, NULL, NULL),
(14, '2007-09-30', 'Iris', 'Mestizo labrador', 'Hembra', 'Iris fue encontrada en una noche lluviosa fuera de la puerta de un bloque de pisos donde buscaba refugio. Una mujer que llegó a casa tarde por la noche se llevó el bulto empapado a su casa.\n							Iris estaba llena de energía, juguetona y social mente compatible con los adultos y niños. Es una perrita muy dulce que necesita desesperadamente a su propia familia, con hijos.\n							¿Quién quiere darle al hermoso iris un hogar para siempre?', 'Iris.png', 0, NULL, NULL),
(15, '2007-09-30', 'Elfo', 'Mestizo', 'Macho', 'Elfo fue observado por un momento por una mujer que lo había descubierto desviándose entre los olivares. Al principio pensó que era un gato blanco tierno, pero un día descubrió que Elfo era un perro en un estado lamentablemente demacrado.\n							Ella podría llevarlo a casa y animarlo.\n							Mientras tanto, Elfo también podría ser vacunado, ya que su condición se ha fortalecido.\n							Elfo es un perro-perro mágico que todavía es muy tímido con los ruidos fuertes.\n							Suponemos que tiene una naturaleza sensible que debe ser recibida con mucha paciencia y amor, luego Elfo pierde su timidez y le encanta acurrucarse de forma segura en el regazo de su ser humano.', 'Elfo.png', 0, NULL, NULL),
(16, '2007-09-30', 'Belem', 'Mestizo', 'Hembra', 'Belem estaba en medio de la carretera cuando uno de nuestros voluntarios la vio.\n								Era un milagro que todavía no la hubieran atropellado, así que se detuvo de inmediato, cruzó la peligrosa carretera y tomó a Belem en sus brazos.\n								Belem estaba embarazada y tuvo que ser castrada de inmediato.\n								Ahora vive con nosotros en el refugio y es una perra llena de encanto.\n								Creemos que Belem sería ideal para una familia con niños porque está llena de vitalidad y entusiasmo por la vida.', 'Belem.png', 0, NULL, NULL),
(17, '2007-09-30', 'Chelsea', 'Mestizo', 'Hembra', 'Chelsea fue alimentada por un niño una y otra vez. Pero ella no aceptó la comida hasta que él se fue.\n								Después de un tiempo, se volvió más confiada y se dejó tocar. Se llevó a Chelsea a su casa y la llevó al veterinario al día siguiente.\n								El veterinario presentó una lesión en el tercer párpado de un ojo. Esto tuvo que ser operado, lo cual es muy costoso y, por lo tanto, nos pidieron apoyo financiero.\n								Chelsea se ha sometido a una cirugía (algunas fotos lo muestran), recuperándose bien y aumentando de peso.\n								Chelsea, a pesar de su corta edad, es una perra muy tranquila. Ella se lleva bien con todos los otros perros en el refugio.\n								Para Chelsea buscamos personas activas, una familia con niños que, debido a su tamaño, sean un poco mayores y más estables.', 'Chelsea.png', 0, NULL, NULL),
(18, '2007-09-30', 'Assol', 'Mestizo', 'Hembra', 'Suecia y sus hermanos, son el \"resultado\" de un embarazo no deseado.\n								La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.\n								Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos. Al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con mis otros perros. \n								En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.', 'Assol.png', 0, NULL, NULL),
(19, '2007-09-30', 'Suecia', 'Mestizo ratonero bodeguero', 'Hembra', 'Suecia y sus hermanos, son el \"resultado\" de un embarazo no deseado.\n								La madre, un pura sangre Ratonero Bodeguero Andaluz, vive en una bodega. El dueño había descuidado castrar a la perra, por lo que llegó al embarazo.\n								Cuando trajo a la pandilla de cachorros al refugio, prometió castrar a la madre para que no tuviera más cachorros, de lo cual tenemos que ocuparnos. Al principio eran muy tímidos y reservados, ya que estaban acostumbrados a vivir en el campo. Después de un corto tiempo tuvieron confianza, jugaron entre ellos y también con mis otros perros. \n								En general, son encantadores, típicos cachorros, juguetones, socialmente aceptables.', 'Suecia.png', 0, NULL, NULL),
(23, '2020-12-19', 'dsfs', 'df', 'df', 'dfdfdf', 'mfa.png', 0, NULL, NULL),
(24, '2020-12-10', '54645', '456456', '45646', '464', 'user2.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2020_04_13_112759_create_dog_table', 1),
(8, '2020_04_13_112824_create_user_table', 1),
(9, '2020_04_20_173315_create_adoption_table', 1),
(10, '2020_05_05_153522_create_commentDog_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('011000bd846e107657338386d20f42dc52df374ab7a3b2c4290bed894107437f5725f226efa0eb0d', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-12-10 13:32:35', '2020-12-10 13:32:35', '2020-12-11 14:32:33'),
('1e935c892b03c9fcdedfb28cc685416ae65ad931a65a5eff771902a19eac168eb49f52b247cb35b0', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-12-10 13:34:12', '2020-12-10 13:34:12', '2020-12-11 14:34:11'),
('33a5fdff7f8b58b07aef2453bd3e2eecefa80a68d35f3173a1153bdd77777d0f873844a5c6905f96', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 10:03:03', '2020-09-17 10:03:03', '2020-09-18 12:03:00'),
('37d3592c99b71174760510c84c9d9bda436c20e2fbc2ff95a8c4eea8afe8ce5386267388d2b02a6f', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 10:07:51', '2020-09-17 10:07:51', '2020-09-18 12:07:50'),
('91e04a7045be5ef3104b4873c836e62c8525f3a1d19e25baffef7b0ac5fa1ffb728954688cfce5f8', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 09:44:42', '2020-09-17 09:44:42', '2020-09-18 11:44:42'),
('c50980de06561197355df3176c4b723fe98eefec453e0b0c0bda742e69efc32953f1eeba4bf4c8fe', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 09:42:26', '2020-09-17 09:42:26', '2020-09-18 11:42:26'),
('d62abe4e239c3e19c23e30314ead84fce754f28ab571daba1b38147810080cf58686bba822ee84f0', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 09:45:07', '2020-09-17 09:45:07', '2020-09-18 11:45:07'),
('f0f245dd667a344be0ddb487cc5dd44ebf2408aad9f6a7c3ce6279d9b3bced5d305be0258deea94b', 1, 1, 'cristinacastilloob@gmail.com', '[]', 0, '2020-09-17 10:06:39', '2020-09-17 10:06:39', '2020-09-18 12:06:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'MFAV3 Personal Access Client', 'b1Ec65xINaPFgHWd3bX0AlgwkNI1g7cXgFa3QeZQ', NULL, 'http://localhost', 1, 0, 0, '2020-09-17 09:42:17', '2020-09-17 09:42:17'),
(2, NULL, 'MFAV3 Password Grant Client', 'kg8i89ZSOSvCySiGBBlifY40IkLzdn0kjNJra0LH', 'users', 'http://localhost', 0, 1, 0, '2020-09-17 09:42:17', '2020-09-17 09:42:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-09-17 09:42:17', '2020-09-17 09:42:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUse` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surnames` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `api_token` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUse`, `name`, `surnames`, `email`, `password`, `phoneNumber`, `photo`, `api_token`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cristina', 'Castillo Obregón', 'cristinacastilloob@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '662539596', '$2y$10$ejvdfbitlMVv9KJsGAL6Je45xEQMGUBBtwgJf7CxixEChWVKdUo3uuser2.jpg', '', 1, NULL, NULL, '2020-11-24 15:10:49'),
(2, 'Paul Kunze', 'Beatae vel id.', 'mcglynn.raul@hotmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '334819293', 'user.png', NULL, 0, NULL, NULL, NULL),
(3, 'Dr. Sallie Bergnaum III', 'Commodi incidunt sunt.', 'josephine80@hotmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '50502819', 'user.png', NULL, 0, NULL, NULL, NULL),
(4, 'Marianne Kris V', 'Est voluptas dignissimos.', 'waylon91@nitzsche.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '90132381', 'user.png', NULL, 0, NULL, NULL, NULL),
(5, 'Creola Bergstrom', 'Minima sint.', 'vwolf@shields.biz', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '353055816', 'user.png', NULL, 0, NULL, NULL, NULL),
(6, 'Anastacio Jerde', 'Ipsa iure.', 'gaylord.vena@mcglynn.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '491260485', 'user.png', NULL, 0, NULL, NULL, NULL),
(7, 'Dr. Ebony Miller', 'Odio ut nostrum.', 'kuvalis.hassan@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '706604662', 'user.png', NULL, 0, NULL, NULL, NULL),
(8, 'Forrest Dare Sr.', 'Esse et beatae.', 'tatyana.ortiz@leuschke.info', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '464666109', 'user.png', NULL, 0, NULL, NULL, NULL),
(9, 'Elijah Baumbach', 'Neque et.', 'heidenreich.sandrine@dicki.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '816930624', 'user.png', NULL, 0, NULL, NULL, NULL),
(10, 'Jane Abshire', 'Unde consequuntur.', 'isaac.kutch@orn.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '673189852', 'user.png', NULL, 0, NULL, NULL, NULL),
(11, 'Loyal Beahan Sr.', 'Occaecati rem facere.', 'dach.wilbert@stokes.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '108370779', 'user.png', NULL, 0, NULL, NULL, NULL),
(12, 'Genesis Daniel', 'Nulla commodi consectetur.', 'christelle.okeefe@pouros.biz', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '380915887', 'user.png', NULL, 0, NULL, NULL, NULL),
(13, 'Mr. Lamont Flatley II', 'Occaecati quam.', 'jennings30@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '182501056', 'user.png', NULL, 0, NULL, NULL, NULL),
(14, 'Gerardo Runte I', 'Et voluptas nostrum.', 'abosco@hotmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '629848090', 'user.png', NULL, 0, NULL, NULL, NULL),
(15, 'Kathryn Harris', 'Quibusdam dolorum.', 'nellie96@hane.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '199040734', 'user.png', NULL, 0, NULL, NULL, NULL),
(16, 'Prof. Andy Reinger', 'Rerum dolorem.', 'ubode@aufderhar.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '13514093', 'user.png', NULL, 0, NULL, NULL, NULL),
(17, 'Sarina Durgan I', 'Labore consequatur.', 'bjohns@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '679421966', 'user.png', NULL, 0, NULL, NULL, NULL),
(18, 'Deshawn Glover', 'Ullam sint.', 'fisher.annamae@oberbrunner.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '59348039', 'user.png', NULL, 0, NULL, NULL, NULL),
(19, 'Kathryne Barton', 'Inventore rerum.', 'ustroman@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '480515274', 'user.png', NULL, 0, NULL, NULL, NULL),
(20, 'Price Hickle', 'Occaecati ut placeat.', 'geovanni.oconnell@corwin.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '594894335', 'user.png', NULL, 0, NULL, NULL, NULL),
(21, 'Maxie Feil', 'Commodi non optio.', 'wrutherford@okuneva.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '771904535', 'user.png', NULL, 0, NULL, NULL, NULL),
(22, 'Mrs. Eileen McKenzie V', 'Est sunt inventore.', 'aliya06@wolf.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '164547702', 'user.png', NULL, 0, NULL, NULL, NULL),
(23, 'Jada Lockman Jr.', 'Velit perferendis non.', 'jaron40@greenfelder.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '454808234', 'user.png', NULL, 0, NULL, NULL, NULL),
(24, 'Reta Breitenberg', 'Sed rerum.', 'jcummerata@gmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '475699651', 'user.png', NULL, 0, NULL, NULL, NULL),
(25, 'Wayne Frami', 'Non temporibus.', 'jacobi.laron@hotmail.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '136129684', 'user.png', NULL, 0, NULL, NULL, NULL),
(26, 'Noemie Lakin', 'Et adipisci.', 'ernestine55@bogisich.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '678038452', 'user.png', NULL, 0, NULL, NULL, NULL),
(27, 'Prof. Juston Ferry', 'Est consequatur et.', 'jkohler@ferry.com', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '788214780', 'user.png', NULL, 0, NULL, NULL, NULL),
(28, 'Juanita Harris', 'Iure culpa.', 'tcollins@dubuque.net', '$2y$10$7R0C/tHuCDuwrqwgBqarVeOsiIoOLxa3/CaQ.lt.7ngMrq.bm3CjW', '877364338', 'user.png', NULL, 0, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`idAdop`),
  ADD KEY `adoption_iddog_foreign` (`idDog`),
  ADD KEY `adoption_iduse_foreign` (`idUse`);

--
-- Indices de la tabla `commentdog`
--
ALTER TABLE `commentdog`
  ADD PRIMARY KEY (`idCom`),
  ADD KEY `commentdog_iddog_foreign` (`idDog`),
  ADD KEY `commentdog_iduse_foreign` (`idUse`);

--
-- Indices de la tabla `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`idDog`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indices de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUse`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adoption`
--
ALTER TABLE `adoption`
  MODIFY `idAdop` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `commentdog`
--
ALTER TABLE `commentdog`
  MODIFY `idCom` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `dog`
--
ALTER TABLE `dog`
  MODIFY `idDog` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUse` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adoption`
--
ALTER TABLE `adoption`
  ADD CONSTRAINT `adoption_iddog_foreign` FOREIGN KEY (`idDog`) REFERENCES `dog` (`idDog`) ON DELETE CASCADE,
  ADD CONSTRAINT `adoption_iduse_foreign` FOREIGN KEY (`idUse`) REFERENCES `user` (`idUse`) ON DELETE CASCADE;

--
-- Filtros para la tabla `commentdog`
--
ALTER TABLE `commentdog`
  ADD CONSTRAINT `commentdog_iddog_foreign` FOREIGN KEY (`idDog`) REFERENCES `dog` (`idDog`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentdog_iduse_foreign` FOREIGN KEY (`idUse`) REFERENCES `user` (`idUse`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
