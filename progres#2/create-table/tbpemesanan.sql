create table tb_pemesanan (
    kode_pemesanan char(10) not null primary key,
    tgl_pemesanan datetime not null,
    id_pengguna char(10) not null,
    id_pemilik char(10) not null
    )