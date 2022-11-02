create table tb_detail_pemesanan(
    kode_pemesanan char(10) not null ,
    id_kost char(10) not null ,
    jumlah smallint(2) not null default '1'
)

alter table tb_detail_pemesanan
    add key kode_pemesanan(kode_pemesanan),
    add key id_kost(id_kost);