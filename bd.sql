-- --------------------------------------------------------
-- Anfitrião:                    localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for nextdestination
DROP DATABASE IF EXISTS `nextdestination`;
CREATE DATABASE IF NOT EXISTS `nextdestination` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `nextdestination`;

-- Dumping structure for table nextdestination.continentes
DROP TABLE IF EXISTS `continentes`;
CREATE TABLE IF NOT EXISTS `continentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `continente` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.continentes: ~4 rows (approximately)
DELETE FROM `continentes`;
/*!40000 ALTER TABLE `continentes` DISABLE KEYS */;
INSERT INTO `continentes` (`id`, `continente`) VALUES
	(1, 'Europa'),
	(2, 'Oceania'),
	(3, 'Ásia'),
	(4, 'América do Sul');
/*!40000 ALTER TABLE `continentes` ENABLE KEYS */;

-- Dumping structure for table nextdestination.descubra
DROP TABLE IF EXISTS `descubra`;
CREATE TABLE IF NOT EXISTS `descubra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `abrev_cont` varchar(50) NOT NULL,
  `continente` varchar(50) NOT NULL,
  `deletado` varchar(50) NOT NULL DEFAULT '0',
  `pais` varchar(50) NOT NULL,
  `foto_index` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.descubra: ~5 rows (approximately)
DELETE FROM `descubra`;
/*!40000 ALTER TABLE `descubra` DISABLE KEYS */;
INSERT INTO `descubra` (`id`, `abrev_cont`, `continente`, `deletado`, `pais`, `foto_index`) VALUES
	(1, 'EUR', 'Europa', '0', 'Alemanha', '1.png'),
	(2, 'OCE', 'Oceania', '0', 'Nova Zelândia', '2.png'),
	(3, 'ASI', 'Ásia', '0', 'Tóquio', '3.png'),
	(4, 'AM.SUL', 'América do Sul', '0', 'Brasil', '4.png'),
	(14, 'AFR', 'Africa', '1', 'Egito', '14.jpg'),
	(15, 'AFR', 'Africa', '1', 'Egito', '15.jpeg');
/*!40000 ALTER TABLE `descubra` ENABLE KEYS */;

-- Dumping structure for table nextdestination.equipe
DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.equipe: ~9 rows (approximately)
DELETE FROM `equipe`;
/*!40000 ALTER TABLE `equipe` DISABLE KEYS */;
INSERT INTO `equipe` (`id`, `nome`, `estado`, `email`, `cidade`, `pais`, `avatar`) VALUES
	(1, 'Luísa Endres', 0, 'luendres@nextdestination.com', 'Coimbra', 'Portugal', '1.png'),
	(2, 'Pedro Pereira', 0, 'pedropereira@nextdestination.com', 'São Paulo', 'Brasil', '2.png'),
	(3, 'Stéfanie Takeda', 0, 'stetakeda@nextdestination.com', 'Tóquio', 'Japão', '3.png'),
	(4, 'ALOU', 2, 'LUENDRES@TOFARTA.COM', 'sapucaia', 'Egito', '4.jpg'),
	(5, 'ola', 2, 'sadasd', 'lisboa', 'ddd', '5.jpg'),
	(6, 'ana', 2, 'teste@ad.com', 'JJJJ', 'SOPA', '6.jpg'),
	(7, 'luisa', 2, 'andre22.vj10@gmail.com', 'sapucaia', 'Egito', '7.jpg'),
	(8, 'luisa', 2, 'teste@ad.com', 'lisboa', 'Egito', '8.jpg'),
	(9, 'luisa', 2, 'luendres@gmail.com', 'lisboa', 'SOPA', '9.jpg');
/*!40000 ALTER TABLE `equipe` ENABLE KEYS */;

-- Dumping structure for table nextdestination.mensagens
DROP TABLE IF EXISTS `mensagens`;
CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mensagem` text NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.mensagens: ~5 rows (approximately)
DELETE FROM `mensagens`;
/*!40000 ALTER TABLE `mensagens` DISABLE KEYS */;
INSERT INTO `mensagens` (`id`, `nome`, `email`, `mensagem`, `estado`) VALUES
	(1, 'luisa', 'luendres@gmail.com', 'teste', 0),
	(2, 'luisa', 'luendres@gmail.com', 'ohln', 0),
	(3, 'luisa', 'andre22.vj10@gmail.com', 'mkmk', 2),
	(4, 'LUISA', 'luendres@gmail.com', 'Teste', 0),
	(5, 'ana', 'teste@ad.com', 'ola', 0);
/*!40000 ALTER TABLE `mensagens` ENABLE KEYS */;

-- Dumping structure for table nextdestination.motivos
DROP TABLE IF EXISTS `motivos`;
CREATE TABLE IF NOT EXISTS `motivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lugar` int(11) NOT NULL,
  `motivo` text NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK1_lugar` (`id_lugar`),
  CONSTRAINT `FK1_lugar` FOREIGN KEY (`id_lugar`) REFERENCES `continentes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.motivos: ~14 rows (approximately)
DELETE FROM `motivos`;
/*!40000 ALTER TABLE `motivos` DISABLE KEYS */;
INSERT INTO `motivos` (`id`, `id_lugar`, `motivo`, `descricao`) VALUES
	(1, 1, 'Países ricos em história', 'O velho continente é o lugar ideal pra quem ama descobrir mais sobre o passado e também pra ser explorado por longas caminhadas pelos seus países cheios de cultura.'),
	(2, 1, 'É fácil de se locomover', 'Muitas cidades européias possuem um ótimo transporte público – seja metrô, autocarros ou comboios. É possível se locomover por tudo que é canto com facilidade, segurança e conforto, e sem gastar uma fortuna por isso.'),
	(3, 1, 'É possível conhecer vários países na mesma viagem', 'Pela proximidade dos países neste continente, é possível conhecer mais de um na mesma viagem e assim, enriquecer a tua estada por lá. Dentro do continente há livre acesso e podes atravessar qualquer fronteira sem passar por controles.'),
	(4, 1, 'As comidas', 'Alguns pratos são muito mais gostosos se comidos nos seus países de origem. Gelato italiano, pastel de nata, salame de chocolate, crepe francês, chocolate suíço, macaron, risotto... as opções são quase infinitas!'),
	(5, 2, 'Diversidade de turísmo', 'O continente oferece atrações turísticas que agrada aos gostos mais distintos. Quem procura por aventuras na natureza tem no continente todos os biomas, como deserto, florestas tropicais, montanhas com neve, vales com lagos espetaculares e até vulcões em atividade constante.'),
	(6, 2, 'Lugares únicos', 'Com os lugares habitáveis mais isolados da Terra, a Oceania concentra países com ótimas qualidades de vida, clima tropical, milhares de ilhas paradisíacas, além de fauna e flora exuberante, com espécimes de animais e plantas encontrados apenas ali.'),
	(7, 2, 'A distância já não conta tanto', 'Com 14 Estados independentes, milhares de ilhas e uma biodiversidade bem distribuída pelos seus pouco mais de 8 milhões de km², a Oceania deixou no passado a ideia de que "o outro lado do mundo" é longe demais para se visitar.'),
	(8, 2, 'Países ricos em história', 'Alguns locais de lá são muito procurados por intercambistas. Para situações como esta, em especial, mas também para turistas, é interessante conhecer os hábitos de lá. Por verem muitos estrangeiros, as pessoas costumam ser bastante receptivas, por vezes considerados os lugares entre os mais amigáveis do mundo'),
	(9, 3, 'Cultura e História', 'A Ásia tem um património cultural riquíssimo. Em cada esquina, esconde-se mais um templo, mais um bocado da sua história. A sua cultura é tão diferente que acaba por nos cativar com aquele choque cultural.'),
	(10, 3, 'Beleza Natural', 'Ninguém consegue ficar indiferente à beleza natural destes países. As praias da Tailândia, as montanhas do Nepal e as Cascatas do Laos são só alguns exemplos do que a natureza fez de melhor no continente asiático.'),
	(11, 3, 'Gastronomia', 'No Oriente, o melhor sítio para comeres é mesmo na rua, nos mercados locais. É lá que podes experimentar os melhores noodles, os melhores fried rice e, para os mais corajosos, os insetos e os bichos estranhos que não são tão habituais em outros lugares.'),
	(12, 3, 'Vida barata', 'Comes por 3 dólares, dormes por 5 e viajas por 8 para o outro lado do país. Se não fores muito exigente, a vida na Ásia é mesmo muito barata, e isso leva a que os jovens consigam viajar por aqueles países durante algumas semanas, sem grande esforço.'),
	(13, 4, 'As suas maravilhas naturais', 'Quando se trata de paisagens espetaculares, não há dúvida de que a América do Sul tem vistas que se igualam a qualquer continente do mundo. Quer você procure por vistas incríveis das montanhas, o brilho branco das geleiras ou praias e litorais deslumbrantes, há muito para ser apreciado aqui.'),
	(14, 4, 'O clima', 'O clima na América do Sul pode variar bastante de região para região, mas as temperaturas tropicais podem ser encontradas em todo o continente - com exceção da Patagônia, a área mais meridional de terra compartilhada entre a Argentina e o Chile, onde você pode esperar encontrar geleiras.'),
	(15, 4, 'A variedade cultural', 'O continente é rico em culturas diversas e profundamente enraizadas, originadas de centenas de anos de história e tradição. A história colonial e a nativa se misturaram e produziram algumas das paisagens culturais mais vibrantes do mundo.'),
	(16, 4, 'Cozinha incomparável', 'Não há nada como a culinária sul-americana. Com influências de populações indígenas, nações da África, Espanha, Alemanha e Itália, você se deliciará com pratos ricos e saborosos e deliciosas frutas tropicais. Poderá ainda acompanhar suas refeições com vinhos de alguns dos melhores vinhedos do mundo e outras bebidas exclusivas da região.');
/*!40000 ALTER TABLE `motivos` ENABLE KEYS */;

-- Dumping structure for table nextdestination.receberemail
DROP TABLE IF EXISTS `receberemail`;
CREATE TABLE IF NOT EXISTS `receberemail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.receberemail: ~3 rows (approximately)
DELETE FROM `receberemail`;
/*!40000 ALTER TABLE `receberemail` DISABLE KEYS */;
INSERT INTO `receberemail` (`id`, `mail`, `estado`) VALUES
	(1, 'luendres@gmail.com', 0),
	(2, 'oioi@ola.com', 0),
	(3, 'berlim@teste.com', 0);
/*!40000 ALTER TABLE `receberemail` ENABLE KEYS */;

-- Dumping structure for table nextdestination.relatos
DROP TABLE IF EXISTS `relatos`;
CREATE TABLE IF NOT EXISTS `relatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `relato` text NOT NULL,
  `autor` varchar(50) NOT NULL DEFAULT '',
  `pais_origem` varchar(50) NOT NULL DEFAULT '',
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.relatos: ~5 rows (approximately)
DELETE FROM `relatos`;
/*!40000 ALTER TABLE `relatos` DISABLE KEYS */;
INSERT INTO `relatos` (`id`, `relato`, `autor`, `pais_origem`, `estado`) VALUES
	(1, '"Os roteiros que encontrei neste site me ajudaram muito a planear da melhor forma possível minha viagem, e pude usar o tempo curto que tive pra conhecer os melhores pontos da cidade."', 'Rui Miguel', 'Portugal', 0),
	(2, '"O next destination fornece tours de várias cidades do mundo, sempre que tenho dúvidas de onde vai ser minha próxima viagem procuro algumas ideias pelo site."', 'Ramiro Aleixo', 'Portugal', 0),
	(3, '"Conheci o site por amigos que já usaram alguns dos roteiros disponíveis, e desde então também tenho usado e já descobri diversos lugares incríveis através dos roteiros daqui."', 'Letícia Santos', 'Brasil', 0),
	(4, '"Muitas vezes não tenho tempo para planear os lugares que pretendo visitar numa cidade nova, mas com os tours do next destination isso já não é uma preocupação."', 'Maria Alice', 'Brasil', 0),
	(6, 'Testando', 'Ana', 'Holanda', 2);
/*!40000 ALTER TABLE `relatos` ENABLE KEYS */;

-- Dumping structure for table nextdestination.streetarts
DROP TABLE IF EXISTS `streetarts`;
CREATE TABLE IF NOT EXISTS `streetarts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto_arte` varchar(250) DEFAULT NULL,
  `lugar` varchar(50) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.streetarts: ~7 rows (approximately)
DELETE FROM `streetarts`;
/*!40000 ALTER TABLE `streetarts` DISABLE KEYS */;
INSERT INTO `streetarts` (`id`, `foto_arte`, `lugar`, `estado`) VALUES
	(1, '1.png', 'Alemanha', 0),
	(2, '2.png', 'Nova Zelândia', 0),
	(3, '3.png', 'Brasil', 0),
	(4, '4.png', 'Singapura', 0),
	(5, '5.jpg', 'HOLANDA', 2),
	(6, '6.jpg', 'HOLANDA', 2),
	(7, '7.jpg', 'TESTE', 2);
/*!40000 ALTER TABLE `streetarts` ENABLE KEYS */;

-- Dumping structure for table nextdestination.tours
DROP TABLE IF EXISTS `tours`;
CREATE TABLE IF NOT EXISTS `tours` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_continente` int(11) NOT NULL DEFAULT '0',
  `cidade` varchar(50) NOT NULL,
  `fotos` varchar(250) DEFAULT NULL,
  `roteiro` varchar(250) NOT NULL DEFAULT '',
  `descricao` text,
  `deletado` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table nextdestination.tours: ~8 rows (approximately)
DELETE FROM `tours`;
/*!40000 ALTER TABLE `tours` DISABLE KEYS */;
INSERT INTO `tours` (`tour_id`, `id_continente`, `cidade`, `fotos`, `roteiro`, `descricao`, `deletado`) VALUES
	(1, 1, 'Berlim', '1.png', 'berlim.php', 'Visitar Berlim é uma imersão num mundo que alia cultura a uma face mais alternativa, e é uma das cidades mais elegantes do momento, atraindo milhões turistas, desde amantes da cultura aos que curtem uma vida noturna. Se você ama  <i>street arts</i>, a cena <i>underground</i>, e museus mundialmente famosos, Berlim é a cidade a visitar!', 0),
	(2, 1, 'Amsterdam', '2.png', 'amsterdam.php', 'Museus de qualidade mundial, belos canais e pontes, e a liberação do consumo de drogas leves e da prostituição são as principais razões que levam muitos a visitar Amsterdam, mas a verdade é que há muitos outros motivos para ficar a conhecer a principal cidade da Holanda. Renda-se ao encanto dessa cidade e descubra a razão de ser um dos principais dentinos turísticos do mundo! ', 0),
	(3, 2, 'Auckland', '3.png', 'auckland.php', 'A maior cidade da Nova Zelândia, localizada na ilha norte, reúne um pouco de tudo: prédios modernos, construções inglesas, praias, parques e vulcões. Apesar de não ser a capital do país, ela leva a fama por ser o seu principal centro econômico e financeiro.', 0),
	(4, 2, 'Sydney', '4.png', 'sydney.php', 'Cidade bastante cosmopolita que reúne o que tem de mais moderno e famoso na Austrália, além de combinar arquitetura com a mais bela natureza. Com muitos museus, praias, parques e até montanhas, fica difícil não gostar da cidade.', 0),
	(5, 3, 'Tóquio', '5.png', 'toquio.php', 'Apesar da destruição trazida por terremotos e pelos bombardeamentos da 2ª Grande Guerra, Tóquio conseguiu elevar-se dos escombros e cinzas e hoje é a maior métropole do mundo, influente na cultura, finança, moda e arquitetura mundiais.', 0),
	(6, 3, 'Singapura', '6.png', 'singapura.php', 'Espere encontrar nesta cidade-estado um lugar super desenvolvido, com prédios gigantes, onde tudo funciona e as ruas são limpas – ao contrário de diversos outros destinos do sudeste asiático.', 0),
	(7, 4, 'Rio de Janeiro', '7.png', 'riodejaneiro.php', 'Este é daqueles destinos brasileiros que podes visitar mil vezes e sempre encontrará novidades. A cidade do samba e ícone brasileiro mundo afora tem muito a oferecer. Atrações, monumentos, praias, restaurantes modernos, cafés tradicionais e muita história pra contar.', 0),
	(8, 4, 'Santiago do Chile', '8.png', 'santiago.php', 'A capital chilena, enfeitada pelos picos na Cordilheira dos Andes, é cosmopolita e cheia de história. Seus múltiplos parques e ruas planas convidam a passear a pé, e seu metrô eficiente remete ao primeiro mundo.', 0),
	(9, 0, 'sapucaia', NULL, '#', 'aijoai', 1),
	(10, 0, 'lisboa', NULL, '#', 'sidjaoidjsaoi', 1);
/*!40000 ALTER TABLE `tours` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
