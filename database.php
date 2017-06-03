create database dtbaseku
use dtbaseku

CREATE TABLE barang
(
	kd_barang int NOT NULL auto_increment,
	nama_barang varchar(100) NOT NULL,
	harga bigint NOT NULL,
	jlh_stok int NOT NULL,
	gambar varchar(100),
	deskripsi longtext,
	PRIMARY KEY (kd_barang)
)

CREATE TABLE jasa
(
	kd_jasa int NOT NULL auto_increment,
	nama_jasa varchar(100) NOT NULL,
	harga bigint NOT NULL,
	gambar varchar(100),
	deskripsi longtext,
	PRIMARY KEY (kd_jasa)
)

CREATE TABLE penjualan
(
	kd_penjualan int NOT NULL auto_increment,
	nama_produk varchar(100) NOT NULL,
	harga bigint NOT NULL,
	jlh_beli int NOT NULL,
	total bigint,
	tanggal date,
	waktu time,
	PRIMARY KEY (kd_penjualan)
)


CREATE TABLE news(
	id_news int(4) NOT NULL auto_increment,
	judul varchar(100) NOT NULL,
	berita text NOT NULL,
	pengirim varchar(30) NOT NULL,
	dibaca int(6) NOT NULL default '0',
	date date NOT NULL,
	PRIMARY KEY (id_news)
)