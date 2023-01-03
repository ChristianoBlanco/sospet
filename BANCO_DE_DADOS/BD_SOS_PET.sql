-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sos_pet
CREATE DATABASE IF NOT EXISTS `sos_pet` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sos_pet`;

-- Copiando estrutura para tabela sos_pet.anuncios
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `dado_id` bigint(20) unsigned DEFAULT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pet` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dt_anuncio` datetime NOT NULL,
  `status` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anuncios_dado_id_foreign` (`dado_id`),
  CONSTRAINT `anuncios_dado_id_foreign` FOREIGN KEY (`dado_id`) REFERENCES `cad_dados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.anuncios: ~22 rows (aproximadamente)
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` (`id`, `dado_id`, `tipo`, `pet`, `nome`, `descricao`, `foto1`, `foto2`, `foto3`, `foto4`, `dt_anuncio`, `status`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Perdido', 'Cão', 'Ellis', 'Pastor Alemão perdido', 'https://typepad.com/augue/quam/sollicitudin/vitae/consectetuer/eget/rutrum.aspx?quisque=quis&ut=tort', 'http://soup.io/in/porttitor/pede/justo.js?tellus=non&nulla=velit&ut=nec&erat=nisi&id=vulputate&mauri', 'http://1688.com/magna/vulputate/luctus/cum.html?faucibus=nulla&orci=tellus&luctus=in&et=sagittis&ult', 'https://psu.edu/nisl/nunc/rhoncus/dui/vel/sem.js?luctus=dolor&rutrum=quis&nulla=odio&tellus=consequa', '0000-00-00 00:00:00', 1, NULL, NULL),
	(3, 2, 'Perdido', 'Cão', 'Livvyy ', 'Vira-latas perdido nas proximidades do bairro', 'http://google.com/massa/id/nisl.jpg?elementum=diam&ligula=neque&vehicula=vestibulum&consequat=eget&m', 'http://icq.com/lectus/in/quam/fringilla/rhoncus/mauris/enim.jpg?natoque=vestibulum&penatibus=ac&et=e', 'https://jalbum.net/odio/condimentum/id/luctus/nec/molestie.json?est=faucibus&congue=orci&elementum=l', 'http://bluehost.com/erat/quisque.jsp?primis=mauris&in=lacinia&faucibus=sapien&orci=quis&luctus=liber', '0000-00-00 00:00:00', 1, NULL, NULL),
	(4, 1, 'Ajuda', 'Gato', 'Tamarah ', 'Preciso de ajuda com vacinação', 'http://ihg.com/a/feugiat/et/eros/vestibulum.xml?sed=sapien&magna=varius&at=ut&nunc=blandit&commodo=n', 'https://macromedia.com/convallis/eget/eleifend/luctus/ultricies/eu/nibh.png?praesent=vulputate&bland', 'http://geocities.com/urna/pretium/nisl/ut.html?rhoncus=scelerisque&aliquet=mauris&pulvinar=sit&sed=a', 'https://blogs.com/maecenas/ut/massa/quis/augue.js?sollicitudin=magnis&ut=dis&suscipit=parturient&a=m', '0000-00-00 00:00:00', 1, NULL, NULL),
	(5, 1, 'Adoção', 'Gato', 'Willem ', 'Lindos filhotinhos de gatos SRD', 'http://goo.ne.jp/volutpat/dui.png?augue=sed', 'https://fda.gov/ultrices/posuere/cubilia/curae/nulla/dapibus/dolor.js?nulla=ultrices&neque=erat&libe', 'https://vimeo.com/duis/faucibus.aspx?libero=non&nullam=interdum&sit=in&amet=ante&turpis=vestibulum&e', 'http://ocn.ne.jp/magna/vestibulum.png?rutrum=ultrices&nulla=mattis&nunc=odio&purus=donec&phasellus=v', '0000-00-00 00:00:00', 1, NULL, NULL),
	(6, 2, 'Ajuda', 'Pássaro', 'Kip ', 'Preciso de ajuda com Papagaio já com idade', 'https://sohu.com/tincidunt/ante/vel/ipsum.png?nunc=tempus&commodo=semper&placerat=est&praesent=quam&', 'http://huffingtonpost.com/non/quam/nec.aspx?amet=porttitor&sem=lacus&fusce=at&consequat=turpis&nulla', 'https://barnesandnoble.com/nisi/venenatis/tristique/fusce/congue/diam.jpg?lobortis=quam&sapien=nec&s', 'https://dropbox.com/ac/diam/cras.jpg?mauris=turpis&eget=elementum&massa=ligula&tempor=vehicula&conva', '0000-00-00 00:00:00', 1, NULL, NULL),
	(7, 2, 'Perdido', 'Cão', 'Garfield ', 'Cão de porte médio sumido a 1 mês ', 'http://state.gov/sem/duis/aliquam/convallis/nunc.html?orci=risus&nullam=dapibus&molestie=augue&nibh=', 'https://ca.gov/a/ipsum.html?sed=lobortis&tristique=convallis&in=tortor&tempus=risus&sit=dapibus&amet', 'https://psu.edu/aliquam/augue/quam/sollicitudin/vitae/consectetuer.html?dictumst=est&etiam=phasellus', 'http://zdnet.com/habitasse/platea/dictumst.jsp?vitae=curae&mattis=nulla&nibh=dapibus&ligula=dolor&ne', '0000-00-00 00:00:00', 1, NULL, NULL),
	(8, 2, 'Adoção', 'Cão', 'Elysha', 'Adoção responsável, filhotes de porte grande . Preferencialmente para casas', 'https://globo.com/ac/lobortis/vel/dapibus/at.jsp?ac=quis&enim=orci&in=eget&tempor=orci&turpis=vehicu', 'http://java.com/nec/condimentum/neque/sapien/placerat/ante.html?nulla=volutpat&nisl=dui&nunc=maecena', 'https://squidoo.com/urna/pretium/nisl/ut/volutpat/sapien.js?pharetra=nisi&magna=at&vestibulum=nibh&a', 'https://home.pl/et/eros.jpg?aenean=faucibus&auctor=orci&gravida=luctus&sem=et&praesent=ultrices&id=p', '0000-00-00 00:00:00', 1, NULL, NULL),
	(9, 2, 'Ajuda', 'Cão', 'Evita ', 'Cão precisa de ajuda para remédio contra pulgas', 'http://tuttocitta.it/semper.json?a=in&pede=congue&posuere=etiam&nonummy=justo&integer=etiam&non=pret', 'https://wsj.com/mattis/nibh/ligula/nec.xml?sapien=quis&sapien=augue&non=luctus&mi=tincidunt&integer=', 'https://theatlantic.com/viverra/pede/ac/diam/cras.jsp?maecenas=convallis&ut=eget&massa=eleifend&quis', 'https://ustream.tv/ornare.png?elit=eget&proin=tincidunt&interdum=eget&mauris=tempus&non=vel&ligula=p', '0000-00-00 00:00:00', 1, NULL, NULL),
	(10, 1, 'Ajuda', 'Outros', 'Jessie ', 'Pequeno furão precisa de ajuda ', 'https://instagram.com/ultrices/phasellus/id/sapien.png?lacinia=bibendum&aenean=morbi&sit=non&amet=qu', 'https://blogger.com/morbi/vestibulum/velit/id/pretium.jpg?luctus=cubilia&tincidunt=curae&nulla=donec', 'http://gmpg.org/velit/nec/nisi.xml?sodales=nascetur&scelerisque=ridiculus&mauris=mus&sit=vivamus&ame', 'https://uiuc.edu/suspendisse/ornare/consequat/lectus.jpg?in=platea&lectus=dictumst&pellentesque=morb', '0000-00-00 00:00:00', 1, NULL, NULL),
	(11, 1, 'Perdido', 'Gato', 'Ericka ', 'Felino de duas cores perdido no bairro', 'https://gov.uk/nulla/suscipit/ligula/in/lacus.js?placerat=nisi&praesent=vulputate&blandit=nonummy&na', 'http://discovery.com/urna/pretium/nisl/ut/volutpat/sapien.jpg?nullam=curae&molestie=mauris&nibh=vive', 'https://blogtalkradio.com/amet/justo/morbi/ut.png?natoque=hac&penatibus=habitasse&et=platea&magnis=d', 'https://facebook.com/tortor/sollicitudin/mi/sit.png?justo=egestas&nec=metus&condimentum=aenean&neque', '0000-00-00 00:00:00', 1, NULL, NULL),
	(12, 2, 'Perdido', 'Outros', 'Regis', 'Falcão doméstico legalizado pelo IBAMA', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 2, NULL, NULL),
	(14, 1, 'Adoção', 'Cão', 'TóTó', 'Manso , amigo , de grande porte . Dois anos de idade.', NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', 2, NULL, NULL),
	(15, 1, 'Perdido', 'Cão', ' Ollive', 'Ellis Benezeit', 'https://typepad.com/augue/quam/sollicitudin/vitae/consectetuer/eget/rutrum.aspx?quisque=quis&ut=tort', 'http://soup.io/in/porttitor/pede/justo.js?tellus=non&nulla=velit&ut=nec&erat=nisi&id=vulputate&mauri', 'http://1688.com/magna/vulputate/luctus/cum.html?faucibus=nulla&orci=tellus&luctus=in&et=sagittis&ult', 'https://psu.edu/nisl/nunc/rhoncus/dui/vel/sem.js?luctus=dolor&rutrum=quis&nulla=odio&tellus=consequa', '0000-00-00 00:00:00', 1, NULL, NULL),
	(16, 2, 'Adoção', 'Gato', 'Tatham', 'Livvyy Delafoy', 'http://google.com/massa/id/nisl.jpg?elementum=diam&ligula=neque&vehicula=vestibulum&consequat=eget&m', 'http://icq.com/lectus/in/quam/fringilla/rhoncus/mauris/enim.jpg?natoque=vestibulum&penatibus=ac&et=e', 'https://jalbum.net/odio/condimentum/id/luctus/nec/molestie.json?est=faucibus&congue=orci&elementum=l', 'http://bluehost.com/erat/quisque.jsp?primis=mauris&in=lacinia&faucibus=sapien&orci=quis&luctus=liber', '0000-00-00 00:00:00', 1, NULL, NULL),
	(17, 1, 'Ajuda', 'Pássaro', 'Devonald', 'Tamarah McJerrow', 'http://ihg.com/a/feugiat/et/eros/vestibulum.xml?sed=sapien&magna=varius&at=ut&nunc=blandit&commodo=n', 'https://macromedia.com/convallis/eget/eleifend/luctus/ultricies/eu/nibh.png?praesent=vulputate&bland', 'http://geocities.com/urna/pretium/nisl/ut.html?rhoncus=scelerisque&aliquet=mauris&pulvinar=sit&sed=a', 'https://blogs.com/maecenas/ut/massa/quis/augue.js?sollicitudin=magnis&ut=dis&suscipit=parturient&a=m', '0000-00-00 00:00:00', 1, NULL, NULL),
	(18, 1, 'Perdido', 'Outros', 'Rapp', 'Willem Grishakov', 'http://goo.ne.jp/volutpat/dui.png?augue=sed', 'https://fda.gov/ultrices/posuere/cubilia/curae/nulla/dapibus/dolor.js?nulla=ultrices&neque=erat&libe', 'https://vimeo.com/duis/faucibus.aspx?libero=non&nullam=interdum&sit=in&amet=ante&turpis=vestibulum&e', 'http://ocn.ne.jp/magna/vestibulum.png?rutrum=ultrices&nulla=mattis&nunc=odio&purus=donec&phasellus=v', '0000-00-00 00:00:00', 1, NULL, NULL),
	(19, 2, 'Perdido', 'Cão', 'Cleen', 'Kip Bilbie', 'https://sohu.com/tincidunt/ante/vel/ipsum.png?nunc=tempus&commodo=semper&placerat=est&praesent=quam&', 'http://huffingtonpost.com/non/quam/nec.aspx?amet=porttitor&sem=lacus&fusce=at&consequat=turpis&nulla', 'https://barnesandnoble.com/nisi/venenatis/tristique/fusce/congue/diam.jpg?lobortis=quam&sapien=nec&s', 'https://dropbox.com/ac/diam/cras.jpg?mauris=turpis&eget=elementum&massa=ligula&tempor=vehicula&conva', '0000-00-00 00:00:00', 2, NULL, NULL),
	(20, 2, 'Adoção', 'Cão', 'Rudgerd', 'Garfield Folbigg', 'http://state.gov/sem/duis/aliquam/convallis/nunc.html?orci=risus&nullam=dapibus&molestie=augue&nibh=', 'https://ca.gov/a/ipsum.html?sed=lobortis&tristique=convallis&in=tortor&tempus=risus&sit=dapibus&amet', 'https://psu.edu/aliquam/augue/quam/sollicitudin/vitae/consectetuer.html?dictumst=est&etiam=phasellus', 'http://zdnet.com/habitasse/platea/dictumst.jsp?vitae=curae&mattis=nulla&nibh=dapibus&ligula=dolor&ne', '0000-00-00 00:00:00', 2, NULL, NULL),
	(21, 2, 'Adoção', 'Pássaro', ' Melchior', 'Elysha Blanpein', 'https://globo.com/ac/lobortis/vel/dapibus/at.jsp?ac=quis&enim=orci&in=eget&tempor=orci&turpis=vehicu', 'http://java.com/nec/condimentum/neque/sapien/placerat/ante.html?nulla=volutpat&nisl=dui&nunc=maecena', 'https://squidoo.com/urna/pretium/nisl/ut/volutpat/sapien.js?pharetra=nisi&magna=at&vestibulum=nibh&a', 'https://home.pl/et/eros.jpg?aenean=faucibus&auctor=orci&gravida=luctus&sem=et&praesent=ultrices&id=p', '0000-00-00 00:00:00', 2, NULL, NULL),
	(22, 2, 'Adoção', 'Gato', ' Quinsee', 'Evita Brahmer', 'http://tuttocitta.it/semper.json?a=in&pede=congue&posuere=etiam&nonummy=justo&integer=etiam&non=pret', 'https://wsj.com/mattis/nibh/ligula/nec.xml?sapien=quis&sapien=augue&non=luctus&mi=tincidunt&integer=', 'https://theatlantic.com/viverra/pede/ac/diam/cras.jsp?maecenas=convallis&ut=eget&massa=eleifend&quis', 'https://ustream.tv/ornare.png?elit=eget&proin=tincidunt&interdum=eget&mauris=tempus&non=vel&ligula=p', '0000-00-00 00:00:00', 1, NULL, NULL),
	(23, 1, 'Adoção', 'Gato', ' Dael', 'Jessie Goodfield', 'https://instagram.com/ultrices/phasellus/id/sapien.png?lacinia=bibendum&aenean=morbi&sit=non&amet=qu', 'https://blogger.com/morbi/vestibulum/velit/id/pretium.jpg?luctus=cubilia&tincidunt=curae&nulla=donec', 'http://gmpg.org/velit/nec/nisi.xml?sodales=nascetur&scelerisque=ridiculus&mauris=mus&sit=vivamus&ame', 'https://uiuc.edu/suspendisse/ornare/consequat/lectus.jpg?in=platea&lectus=dictumst&pellentesque=morb', '0000-00-00 00:00:00', 1, NULL, NULL),
	(24, 1, 'Ajuda', 'Gato', 'Skrines', 'Ericka Bradbrook', 'https://gov.uk/nulla/suscipit/ligula/in/lacus.js?placerat=nisi&praesent=vulputate&blandit=nonummy&na', 'http://discovery.com/urna/pretium/nisl/ut/volutpat/sapien.jpg?nullam=curae&molestie=mauris&nibh=vive', 'https://blogtalkradio.com/amet/justo/morbi/ut.png?natoque=hac&penatibus=habitasse&et=platea&magnis=d', 'https://facebook.com/tortor/sollicitudin/mi/sit.png?justo=egestas&nec=metus&condimentum=aenean&neque', '0000-00-00 00:00:00', 1, NULL, NULL);
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.cad_dados
CREATE TABLE IF NOT EXISTS `cad_dados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_log_usuario` bigint(20) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobrenome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `tel1` bigint(20) NOT NULL,
  `tel2` bigint(20) DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cad_dados_cpf_unique` (`cpf`),
  UNIQUE KEY `cad_dados_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.cad_dados: ~2 rows (aproximadamente)
DELETE FROM `cad_dados`;
/*!40000 ALTER TABLE `cad_dados` DISABLE KEYS */;
INSERT INTO `cad_dados` (`id`, `id_log_usuario`, `nome`, `sobrenome`, `cpf`, `tel1`, `tel2`, `email`, `endereco`, `cidade`, `uf`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Christiano', 'Blanco', 8299921208, 21999999999, 21888888888, 'christiano.blanco@hotmail.com', 'Rua do teste 1234', 'Rio de Janeiro', 'RJ', '2022-08-31 17:59:13', '2022-08-31 17:59:13'),
	(2, 2, 'Barbara', 'Blanco', 131299921226, 219988888888, 21888888888, 'babi.marley@hotmail.com', 'Rua do teste 1234', 'Rio de Janeiro', 'RJ', '2022-08-31 18:01:08', '2022-08-31 18:01:08'),
	(5, 3, 'Marley', 'teste', 787890, 2180908, 219089090, 'christiano.blanco.oliveira@gmail.com', 'teste', 'Rio de Janeiro', 'RJ', '2022-10-22 21:05:54', '2022-10-22 21:05:54');
/*!40000 ALTER TABLE `cad_dados` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.migrations: ~6 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(12, '2022_08_19_151804_create_cad_dado', 2),
	(13, '2022_08_19_152832_create_anuncio', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.personal_access_tokens: ~0 rows (aproximadamente)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Copiando estrutura para tabela sos_pet.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela sos_pet.users: ~2 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Christiano', 'teste@teste.com', NULL, '$2y$10$mqvzSGcEVX4w4/TtQ1eMnu0mDsTuW2JKoaunijzqlIltNudnEyXFq', NULL, '2022-08-18 19:34:57', '2022-08-18 19:34:57'),
	(2, 'Bárbara', 'babi@marley.com', NULL, '$2y$10$MNXf.4sJsZMltRStb3P.IeTDmsKRzeFscW69aiyXzGSB5jYL.yeR2', NULL, '2022-08-19 15:00:31', '2022-08-19 15:00:31'),
	(3, 'Marley', 'christiano.blanco.oliveira@gmail.com', NULL, '$2y$10$F/lPuV2ftr0Hi2fbmfa7I.wd02Qa.1iCcBvqfKKQbqBUPtr5/Q89u', NULL, '2022-10-04 10:42:36', '2022-10-04 10:42:36');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
