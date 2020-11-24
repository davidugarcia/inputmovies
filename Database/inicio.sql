/*create database inicio;
use inicio;*/
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


-- insertar registros en tabla categorias

insert into categorias values (null, "Accion");
insert into categorias values (null, "Drama");
insert into categorias values (null, "Ciencia Ficcion");

-- insertar a tabla entradas

insert into entradas values (null, 1, 1, "John Wick parabelium", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", CURDATE());
insert into entradas values (null, 2, 3, "Start War", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", CURDATE());
insert into entradas values (null, 3, 2, "1917", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", CURDATE());
insert into entradas values (null, 1, 3, "Iron Man", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", CURDATE());
insert into entradas values (null, 2, 2, "Quinto Poder", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", CURDATE());

