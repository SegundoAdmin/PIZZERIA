create table producto
{
id int  auto_increment,
nombre varchar (100),
precio decimal,
stock int,
primary key (id)
};

create table venta
{
id int auto_increment,
fecha datetime,
total decimal,
primary key (id)

};
create table detalleVenta
{			
id int auto_increment,
producto int,
venta int,
cantidad int,
subtotal decimal
}		;	

create table cliente
{
id int auto_increment,
nombre varchar(100),
apellido varchar(100),
direccion varchar(100)
};

