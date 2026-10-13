create table tb_projetos (
pro_codigo int(11) not null auto_increment,
pro_descricao varchar(200) default null,
pro_foto varchar(250) default null,
pro_status char(1) default null,
pro_data_cadastro timestamp not null default current_timestamp,
primary key (pro_codigo)
) engine=innoDB auto_increment=0 default charset=latin1;


CREATE TABLE `tb_skill` (
  `ski_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ski_descricao` varchar(150) DEFAULT NULL,
  `ski_porcentagem` int(11) DEFAULT NULL,
  `ski_data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ski_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;