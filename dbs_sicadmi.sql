create schema dbs_sicadmi;

use dbs_sicadmi;

create table tbl_Persona (
	PK_Id_Persona int primary key not null,
    Num_Documento bigint not null,
    Nombres varchar(50) not null,
    Apellidos varchar(50) not null,
    Genero varchar(20) not null,
    Correo varchar(50) not null,
    Direccion varchar(50) not null,
    Telefono bigint(10) not null
);

create table tbl_Tipo_Usuario (
	PK_Id_TipoUsuario int primary key not null,
	Nombre_TipoUsuario varchar(50) not null,
	Descripcion varchar(60) not null	
);

create table tbl_Rol (
	PK_Id_Rol int primary key not null,
    Nombre_Rol varchar (50) not null,
    Descripcion varchar (60) not null
);

create table tbl_Estado (
	PK_Id_Estado int primary key not null,
    Nombre_Estado varchar (50) not null,
    Descripcion varchar (60) not null
);

create table tbl_Tipo_Pago(
	PK_No_TipoPago int primary key not null,
    Detalle varchar(60) not null
);

create table tbl_Usuarios (
	PK_Id_Usuario int primary key not null,
    Nombre_Usuario varchar(50) not null,
    password_Usuario varchar(60) not null,
    FK_Id_Estado int not null,
    FK_Id_Rol int not null,
    FK_Id_Persona int not null,
    FK_Id_TipoUsuario int not null
);

create table tbl_Administrador (
	PK_Id_Admin int primary key not null,
    FK_Id_Persona int not null
);

create table tbl_Clientes (
	PK_Id_Cliente int primary key not null,
    FK_Id_Persona int not null
);

create table tbl_Tickets (
	PK_Id_Ticket int primary key not null,
    Descripcion varchar(60) not null,
    Fecha_Inicio datetime not null,
    Fecha_Final datetime not null,
    FK_Id_Estado int not null,
    FK_Id_Cliente int not null,
    FK_Id_Servicio int not null
);

create table tbl_TipoDeServicio (
	PK_Id_TipoServicio int primary key not null,
    Nombre_TipoServicio varchar(50) not null,
    Descripcion varchar(60) not null
);

create table tbl_Servicios (
	PK_Id_Servicio int primary key not null,
    Nombre_Servicio varchar(50) not null,
    Descripcion varchar(60) not null,
    Costo float not null,
    FK_Id_TipoServicio int not null
);

create table tbl_DetalleFactura (
	PK_Cod_DetalleFactura int auto_increment primary key not null,
    Detalle varchar(60) not null,
    Valor_Servicio float not null,
    FK_Id_Ticket int not null
);

create table tbl_Factura (
	PK_Cod_Factura int auto_increment primary key not null,
    Fecha datetime not null,
    Total float not null,
    FK_Cod_DetalleFactura int not null,
    FK_No_TipoPago int not null
);














