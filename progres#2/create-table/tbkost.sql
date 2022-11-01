create table tb_kost(
    id_kost char(10) not null primary key,
    nama varchar(25) not null,
    alamat varchar(100) not null,
    fasilitas varchar(100) not null,
    ukuran varchar(15) not null,
    lantai smallint(2) not null,
    jenis_kost enum('laki-laki','perempuan','campur') not null default 'laki-laki',
    kamar_tersedia smallint(2),
    harga float not null
)