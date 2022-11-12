create table tb_admin(id_admin char(10) not null primary key, 
                      nama varchar(30) not null, 
                      email varchar(30) not null, 
                      username varchar(25) not null, 
                      katasandi varchar(50) not null,
                      bagian enum('Super Admin','operator'))