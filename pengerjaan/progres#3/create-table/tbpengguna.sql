create table tb_pengguna (
            id_pengguna char(10) not null primary key, 
            nama varchar(30) not null,
            alamat varchar(100) not null,
            jenis_kelamin enum('L','P') not null default 'L',
            pekerjaan varchar(30),
            no_hp varchar(15) not null,
            email varchar(30) not null,
            username varchar(25) not null,
            katasandi varchar(50) not null
            )


