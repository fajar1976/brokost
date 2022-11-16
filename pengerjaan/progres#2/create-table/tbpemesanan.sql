create table tb_pemesanan (
    kode_pemesanan char(10) not null primary key,
    tgl_pemesanan datetime not null,
    id_admin smallint not null,
    id_pengguna smallint not null
    )

    -- alter table tb_pemesanan
    --      add key id_kost(id_kost);