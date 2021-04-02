DROP TABLE IF EXISTS niveis_acessos;

CREATE TABLE `niveis_acessos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO niveis_acessos VALUES ("1","Administrado","2021-03-27 18:54:07",NULL);
INSERT INTO niveis_acessos VALUES ("2","Financeiro","2021-03-27 18:54:07",NULL);
INSERT INTO niveis_acessos VALUES ("3","Cliente","2021-03-27 18:54:07",NULL);
INSERT INTO niveis_acessos VALUES ("4","Suporte","2021-03-29 19:06:37",NULL);


DROP TABLE IF EXISTS situacaos;

CREATE TABLE `situacaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO situacaos VALUES ("1","Ativo","2021-03-27 18:48:09",NULL);
INSERT INTO situacaos VALUES ("2","Inativo","2021-03-27 19:02:05",NULL);


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `situacao_id` bigint unsigned NOT NULL,
  `niveis_acesso_id` bigint unsigned NOT NULL,
  `qnt_acessos` int DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacaos` (`id`),
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO usuarios VALUES ("1","Cesar","cesar@celke.com","2021-03-27 19:04:13",NULL,"1","1","15");
INSERT INTO usuarios VALUES ("2","Kely","kely@celke.com","2021-03-27 19:04:13","2021-04-01 17:37:05","1","2","20");
INSERT INTO usuarios VALUES ("3","Jessica","jessica@celke.com","2021-03-27 19:04:13",NULL,"1","3","10");
INSERT INTO usuarios VALUES ("4","Ana","ana@celke.com","2021-03-27 19:52:06",NULL,"2","3","15");
INSERT INTO usuarios VALUES ("5","carlos","carlos@celke.com","2021-03-31 13:23:52",NULL,"2","3",NULL);


