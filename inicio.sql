CREATE TABLE usuarios(
   id       int(255) AUTO_INCREMENT not null,
   nombre   varchar(100) not null,
   apellido varchar(100) not null,
   email    varchar(255) not null,
   pasword  varchar(255) not null,
   fecha    date not null,
   CONSTRAINT pk_usuarios PRIMARY KEY (id),
   CONSTRAINT uq_email UNIQUE (email)
)ENGINE=innoDB;

CREATE TABLE categorias (
   id          int(255) auto_increment not null,
   nombre      varchar(100) not null,
   CONSTRAINT pk_categorias PRIMARY KEY (id)
   ) ENGINE=innoDB;

CREATE TABLE entradas(
id int(255) auto_increment not null,
usuarioid int(255) not null,
categoriaid int(255) not null,
titulo varchar(255) not null,
descripcion varchar(255) null,
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY (id),
constraint FK_usuario FOREIGN KEY (usuarioid) REFERENCES usuarios(id),
constraint FK_categoria FOREIGN KEY (categoriaid) REFERENCES categorias(id)
);