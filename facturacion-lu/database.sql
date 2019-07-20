CREATE DATABASE IF NOT EXISTS Facturacion_Laravel;
USE Facturacion_Laravel;

CREATE TABLE Ciudades(
Id 				int(255) auto_increment not null,
Nombre			varchar(255),
CONSTRAINT pk_ciudad PRIMARY KEY(Id)
)ENGINE=InnoDb;

CREATE TABLE Clientes(
Id 				int(255) auto_increment not null,
Nombre			varchar(100),
Apellido		varchar(200),
Direccion		varchar(100),
Telefono		varchar(255),
IdCiudad		int(255),
created_at		datetime,
updated_at		datetime,
remember_token	varchar(255),
CONSTRAINT pk_clientes PRIMARY KEY(Id),
CONSTRAINT fk_cliente_ciudad FOREIGN KEY(IdCiudad) REFERENCES Ciudades(Id)
)ENGINE=InnoDb;

CREATE TABLE Vendedores(
Id 				int(255) auto_increment not null,
Nombre			varchar(100),
Apellido		varchar(200),
Email			varchar(100),
Password		varchar(255),
Imagen			varchar(255),
created_at		datetime,
updated_at		datetime,
remember_token	varchar(255),
CONSTRAINT pk_vendedores PRIMARY KEY(Id)
)ENGINE=InnoDb;

CREATE TABLE Productos(
Id 				int(255) auto_increment not null,
Nombre			varchar(100),
Descripcion		varchar(200),
Precio			float,
Imagen			varchar(255),
created_at		datetime,
updated_at		datetime,
remember_token	varchar(255),
CONSTRAINT pk_productos PRIMARY KEY(Id)
)ENGINE=InnoDb;

CREATE TABLE Facturas(
Id 				int(255) auto_increment not null,
Fecha			datetime,
IdVendedor		int(255),
IdCliente		int(255),
Total			float,
CONSTRAINT pk_facturas PRIMARY KEY(Id),
CONSTRAINT fk_factura_vendedor FOREIGN KEY(IdVendedor) REFERENCES Vendedores(Id),
CONSTRAINT fk_factura_cliente FOREIGN KEY(IdCliente) REFERENCES Clientes(Id)
)ENGINE=InnoDb;

CREATE TABLE ItemsFacturas(
Id 				int(255) auto_increment not null,
IdFactura		int(255),
IdProducto		int(255),
Cantidad		int(20),
Total			float,
CONSTRAINT pk_item PRIMARY KEY(Id),
CONSTRAINT fk_item_factura FOREIGN KEY(IdFactura) REFERENCES Facturas(Id),
CONSTRAINT fk_item_producto FOREIGN KEY(IdProducto) REFERENCES Productos(Id)
)ENGINE=InnoDb;

