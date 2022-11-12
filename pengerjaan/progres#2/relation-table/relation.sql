--add atribute & relation
alter table tb_kost
    add key id_pemilik (id_pemilik),
    foreign key (id_pemilik) references tb_pemilik_kost(id_pemilik) on delete cascade on update cascade;
    
--relation table pemesanan
alter table tb_pemesanan
   add key id_pengguna (id_pengguna),
   foreign key id_pengguna references tb_pengguna(id_pengguna) on delete cascade on update cascade;
    
--relation table detail pemesanan
alter table tb_detail_pemesanan
    add key id_kost (id_kost),
    add key kode_pemesanan(kode_pemesanan),
    foreign key (id_kost) references tb_kost(id_kost) on delete cascade on update cascade,
    foreign key (kode_pemesanan) references tb_pemesanan(kode_pemesanan) on delete cascade on update cascade;