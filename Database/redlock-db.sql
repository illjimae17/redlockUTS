CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID int(11) NOT NULL,
  Nama varchar(255) NOT NULL,
  Alamat varchar(255) NOT NULL,
  Jabatan varchar(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT INTO users (ID, Nama, Alamat, Jabatan) VALUES
(1, 'ujang', 'Jl Argopuro 65, Jawa Timur', 'Penjaga Toko'),
(2, 'udin', 'Jl Boulevard Raya Bl LC-7/14, Dki Jakarta', 'Kasir'),
(3, 'mahmud', 'Jl Cimandiri VI 5 Lt 2, Dki Jakarta', 'Bendahara'),
(4, 'siti', 'Jl Kp Muara Bahari 3, Dki Jakarta', 'IT Manager'),
(5, 'brando', 'Jl Bongkaran 60, Jawa Timur', 'WC Cleaner');
