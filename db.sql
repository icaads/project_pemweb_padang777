-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cabang`;
CREATE TABLE `cabang` (
  `IDCabang` char(5) NOT NULL,
  `NamaCabang` varchar(20) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(20) DEFAULT NULL,
  `NoTlp` varchar(20) DEFAULT NULL,
  `LinkDenah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDCabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `cabang` (`IDCabang`, `NamaCabang`, `Alamat`, `Kota`, `NoTlp`, `LinkDenah`) VALUES
('CB001',	'Sederhana 1',	'JL. Padang No. 101',	'Jakarta',	'021-5914563',	'assets/picture/denah/Jakarta.png'),
('CB002',	'Istimewa',	'JL. Kuningan No. 21',	'Bogor',	'022-5698745',	'assets/picture/denah/Bogor.png'),
('CB003',	'Sederhana 2',	'JL. Melati No. 4',	'Depok',	'085697563214',	'assets/picture/denah/Depok.png'),
('CB004',	'Minang Jaya',	'Kompleks Mekarsari Raya Blok A No. 1',	'Tangerang',	'021-5362145',	'assets/picture/denah/Tangerang.png'),
('CB005',	'Sederhana 3',	'JL. Ir. Soekarno No. 3',	'Bekasi',	'081256987412',	'assets/picture/denah/Bekasi.png');

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `Email` varchar(30) DEFAULT NULL,
  `NamaDepan` varchar(20) DEFAULT NULL,
  `NamaBelakang` varchar(20) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Kota` varchar(50) NOT NULL,
  `NoTlp` varchar(20) DEFAULT NULL,
  `Password` varchar(33) DEFAULT NULL,
  `RePassword` varchar(33) DEFAULT NULL,
  `KodePos` int(11) DEFAULT NULL,
  `Tanggallahir` date DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `customer` (`username`, `Email`, `NamaDepan`, `NamaBelakang`, `Alamat`, `Kota`, `NoTlp`, `Password`, `RePassword`, `KodePos`, `Tanggallahir`) VALUES
('icaaaads',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'Jalan 20 Desember',	'Jakarta',	'0819238918239',	'5df83ecc0bf048e',	'5df83ecc0bf048e',	11830,	'2017-10-19'),
('icaaaadss',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'Jalan 20 Desember',	'Jakarta',	'0819238918239',	'5df83ecc0bf048e',	'5df83ecc0bf048e',	11830,	'2017-10-19'),
('ichajelek',	'veronica.sari@student.umn.ac.i',	'Veronica',	'',	'jalan lalalala',	'Jakarta',	'01239182391',	'5df83ecc0bf048e',	'5df83ecc0bf048e',	11830,	'2017-11-14'),
('ichajelek2',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'jalan lalalala',	'Jakarta',	'0819238918239',	'5df83ecc0bf048e23560b1ca15aef018',	'5df83ecc0bf048e23560b1ca15aef018',	11830,	'2017-11-13'),
('ichajelek3',	'veronica.sari@student.umn.ac.i',	'Veronica',	'',	'jalan lalalala',	'Jakarta',	'01239182391',	'9191fab16d8316dfdb58e6d9dcc38774',	'9191fab16d8316dfdb58e6d9dcc38774',	11830,	'2017-11-08'),
('ichajelek4',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'Jalan 20 Desember',	'Jakarta',	'0819238918239',	'9191fab16d8316dfdb58e6d9dcc38774',	'9191fab16d8316dfdb58e6d9dcc38774',	11830,	'2017-11-08'),
('ichajelek5',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'Jalan 20 Desember',	'Jakarta',	'0819238918239',	'5df83ecc0bf048e23560b1ca15aef018',	'5df83ecc0bf048e23560b1ca15aef018',	11830,	'2017-11-08'),
('lalalalala',	'veronica.sari@student.umn.ac.i',	'lalalal',	'mumumu',	'jalan lalalala',	'Jakarta',	'081202139129',	'icaads',	'icaads',	11830,	'2017-11-16'),
('lalalalalalala',	'veronicadiansari@yahoo.com',	'',	'',	'',	'',	'',	'icaads',	'icaads',	0,	'0000-00-00'),
('lalallalalala',	'veronicadiansari@yahoo.com',	'asdasdasdsa',	'',	'asdasdas',	'Jakarta',	'01239182391',	'icaads',	'icaads',	11830,	'0000-00-00'),
('lalallalalalaaa',	'veronicadiansari@yahoo.com',	'asdasdasdsa',	'dsasdasad',	'asdasdas',	'Jakarta',	'01239182391',	'icaads',	'icaads',	11830,	'2017-11-16'),
('veronicaaaads',	'veronicadiansari@yahoo.com',	'Veronica',	'',	'Jalan 20 Desember',	'Bogor',	'01239182391',	'5df83ecc0bf048e',	'5df83ecc0bf048e',	11830,	'2017-11-09'),
('veronicads',	'veronicadiansari@yahoo.com',	'Veronica',	'Dian Sari',	'jalan lalalala',	'Jakarta',	'01239182391',	'ichajelek',	'ichajelek',	11830,	'2017-11-09');

DROP TABLE IF EXISTS `dompetpadang`;
CREATE TABLE `dompetpadang` (
  `IDDompet` char(5) DEFAULT NULL,
  `Saldo` int(11) DEFAULT NULL,
  `IDCustomer` char(5) DEFAULT NULL,
  KEY `IDCustomer` (`IDCustomer`),
  CONSTRAINT `dompetpadang_ibfk_1` FOREIGN KEY (`IDCustomer`) REFERENCES `customer` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `kategorimenu`;
CREATE TABLE `kategorimenu` (
  `IDKategoriMenu` char(5) NOT NULL DEFAULT '',
  `NamaKategoriMenu` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDKategoriMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `kategorimenu` (`IDKategoriMenu`, `NamaKategoriMenu`) VALUES
('KM001',	'Ayam'),
('KM002',	'Sapi'),
('KM003',	'Ikan'),
('KM004',	'Sayuran'),
('KM005',	'Pelengkap'),
('KM006',	'Minuman Botol'),
('KM007',	'Minuman Dingin'),
('KM008',	'Juice'),
('KM009',	'Minuman Panas');

DROP TABLE IF EXISTS `kurir`;
CREATE TABLE `kurir` (
  `IDKurir` char(5) NOT NULL DEFAULT '',
  `NamaDepan` varchar(20) DEFAULT NULL,
  `NamaBelakang` varchar(20) DEFAULT NULL,
  `NoTlp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDKurir`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `kurir` (`IDKurir`, `NamaDepan`, `NamaBelakang`, `NoTlp`) VALUES
('K0001',	'Andi',	'Jaya',	'089563214563'),
('K0002',	'Nanang',	NULL,	'081236547896'),
('K0003',	'Surya',	'Suryana',	'085632147569'),
('K0004',	'Samsul',	NULL,	'085697458623'),
('K0005',	'Adit',	'Pradita',	'085796423159');

DROP TABLE IF EXISTS `meja`;
CREATE TABLE `meja` (
  `IDMeja` char(5) NOT NULL,
  `IDCabang` char(5) NOT NULL,
  `LokasiMeja` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IDMeja`),
  KEY `IDCabang` (`IDCabang`),
  CONSTRAINT `meja_ibfk_1` FOREIGN KEY (`IDCabang`) REFERENCES `cabang` (`IDCabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `meja` (`IDMeja`, `IDCabang`, `LokasiMeja`) VALUES
('M0001',	'CB001',	'A1-CB001'),
('M0002',	'CB001',	'A2-CB001'),
('M0003',	'CB001',	'A3-CB001'),
('M0004',	'CB001',	'A4-CB001'),
('M0005',	'CB001',	'A5-CB001'),
('M0006',	'CB001',	'B1-CB001'),
('M0007',	'CB001',	'B2-CB001'),
('M0008',	'CB001',	'B3-CB001'),
('M0009',	'CB001',	'B4-CB001'),
('M0010',	'CB002',	'A1-CB002'),
('M0011',	'CB002',	'A2-CB002'),
('M0012',	'CB002',	'A3-CB002'),
('M0013',	'CB002',	'B1-CB002'),
('M0014',	'CB002',	'B2-CB002'),
('M0015',	'CB002',	'B3-CB002'),
('M0016',	'CB002',	'C1-CB002'),
('M0017',	'CB002',	'C2-CB002'),
('M0018',	'CB003',	'A1-CB003'),
('M0019',	'CB003',	'A2-CB003'),
('M0020',	'CB003',	'A3-CB003'),
('M0021',	'CB003',	'A4-CB003'),
('M0022',	'CB003',	'B1-CB003'),
('M0023',	'CB003',	'B2-CB003'),
('M0024',	'CB003',	'B3-CB003'),
('M0025',	'CB003',	'B4-CB003'),
('M0026',	'CB003',	'C1-CB003'),
('M0027',	'CB003',	'C2-CB003'),
('M0028',	'CB003',	'C3-CB003'),
('M0030',	'CB004',	'A1-CB004'),
('M0031',	'CB004',	'A2-CB004'),
('M0032',	'CB004',	'A3-CB004'),
('M0033',	'CB004',	'A4-CB004'),
('M0034',	'CB004',	'B1-CB004'),
('M0035',	'CB004',	'B2-CB004'),
('M0036',	'CB004',	'B3-CB004'),
('M0037',	'CB004',	'B4-CB004'),
('M0038',	'CB004',	'B5-CB004'),
('M0039',	'CB005',	'A1-CB005'),
('M0040',	'CB005',	'A2-CB005'),
('M0041',	'CB005',	'A3-CB005'),
('M0042',	'CB005',	'B1-CB005'),
('M0043',	'CB005',	'B2-CB005'),
('M0044',	'CB005',	'C1-CB005'),
('M0045',	'CB005',	'C2-CB005'),
('M0046',	'CB005',	'C3-CB005');

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `IDMenu` char(5) NOT NULL DEFAULT '',
  `IDKategoriMenu` char(5) DEFAULT NULL,
  `NamaMenu` varchar(30) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `TipeMenu` varchar(20) DEFAULT NULL,
  `Deskripsi` varchar(200) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDMenu`),
  KEY `IDKategoriMenu` (`IDKategoriMenu`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`IDKategoriMenu`) REFERENCES `kategorimenu` (`IDKategoriMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu` (`IDMenu`, `IDKategoriMenu`, `NamaMenu`, `Harga`, `TipeMenu`, `Deskripsi`, `Rating`, `Status`, `Gambar`) VALUES
('MN001',	'KM001',	'Ayam Goreng',	12500,	'Makanan',	NULL,	4,	1,	'assets/picture/menu/ayamgoreng.jpg'),
('MN002',	'KM001',	'Ayam Bakar',	12500,	'Makanan',	NULL,	4,	1,	'assets/picture/menu/ayambakar.jpg'),
('MN003',	'KM001',	'Ayam Pop',	12500,	'Makanan',	NULL,	3,	1,	'assets/picture/menu/ayampop.jpg'),
('MN004',	'KM002',	'Rendang',	15000,	'Makanan',	NULL,	5,	1,	'assets/picture/menu/randang.jpg'),
('MN005',	'KM003',	'Ikan Goreng',	10000,	'Makanan',	NULL,	3,	1,	'assets/picture/menu/ikangoreng.jpg'),
('MN006',	'KM003',	'Ikan Bakar',	10000,	'Makanan',	NULL,	3,	1,	'assets/picture/menu/ikanbakar.png'),
('MN007',	'KM004',	'Sayur Singkong',	5000,	'Makanan',	NULL,	4,	1,	'assets/picture/menu/sayursingkong.jpg'),
('MN008',	'KM004',	'Sayur Nangka',	5000,	'Makanan',	NULL,	4,	1,	'assets/picture/menu/sayurnangka.jpg'),
('MN009',	'KM005',	'Sambal Ijo',	2000,	'Makanan',	NULL,	4,	1,	'assets/picture/menu/sambalijo.jpg'),
('MN010',	'KM005',	'Kerupuk Kulit',	5000,	'Makanan',	NULL,	3,	1,	'assets/picture/menu/kerupukkulit.jpg'),
('MN011',	'KM006',	'Teh Botol Sosro',	5000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/tehbotolsosro.jpg'),
('MN012',	'KM006',	'Stee',	5000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/stee.jpg'),
('MN013',	'KM006',	'Coca Cola',	5000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/coca cola.jpg'),
('MN014',	'KM006',	'Fanta',	5000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/fanta.jpg'),
('MN015',	'KM006',	'Sprite',	5000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/sprite.jpg'),
('MN016',	'KM007',	'Es Teh Manis',	4000,	'Minuman',	NULL,	5,	1,	'assets/picture/menu/estehmanis.jpg'),
('MN017',	'KM007',	'Es Teh Tawar',	2000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/estehtawar.jpg'),
('MN018',	'KM007',	'Es Jeruk',	4500,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/esjeruk.jpg'),
('MN019',	'KM008',	'Jus Jeruk',	7000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/jusjeruk.jpg'),
('MN020',	'KM008',	'Jus Melon',	7000,	'Minuman',	NULL,	3,	1,	'assets/picture/menu/jusmelon.jpg'),
('MN021',	'KM008',	'Jus Stroberi',	7000,	'Minuman',	NULL,	3,	1,	'assets/picture/menu/jusstoberi.jpg'),
('MN022',	'KM008',	'Jus Tomat',	7000,	'Minuman',	NULL,	3,	1,	'assets/picture/menu/justomat.jpg'),
('MN023',	'KM009',	'Teh Tawar',	2000,	'Minuman',	NULL,	3,	1,	'assets/picture/menu/tehtawar.jpg'),
('MN024',	'KM009',	'Teh Manis',	4000,	'Minuman',	NULL,	4,	1,	'assets/picture/menu/tehmanis.jpg');

DROP TABLE IF EXISTS `promo`;
CREATE TABLE `promo` (
  `IDPromo` char(5) NOT NULL DEFAULT '',
  `KodePromo` varchar(10) DEFAULT NULL,
  `DiskonHarga` int(11) DEFAULT NULL,
  `TanggalBerlaku` date DEFAULT NULL,
  PRIMARY KEY (`IDPromo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `promo` (`IDPromo`, `KodePromo`, `DiskonHarga`, `TanggalBerlaku`) VALUES
('P0001',	'DISC10K',	10000,	'2017-12-02');

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `IDReservasi` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `jumlah_tamu` int(11) DEFAULT NULL,
  `tanggalreservasi` date DEFAULT NULL,
  `IDMeja` char(5) DEFAULT NULL,
  `IDCabang` char(5) DEFAULT NULL,
  PRIMARY KEY (`IDReservasi`),
  KEY `IDCustomer` (`username`),
  KEY `IDMeja` (`IDMeja`),
  KEY `IDCabang` (`IDCabang`),
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`IDCabang`) REFERENCES `cabang` (`IDCabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `reservasi` (`IDReservasi`, `username`, `jumlah_tamu`, `tanggalreservasi`, `IDMeja`, `IDCabang`) VALUES
(2,	'Veronicaguest',	1,	'2017-12-15',	'A3-CB',	'CB001'),
(3,	'Veronicaguest',	1,	'2017-12-23',	'A3-CB',	'CB001'),
(4,	'Veronicaguest',	1,	'2017-11-27',	'A4-CB',	'CB001'),
(5,	'Veronicaguest',	1,	'2017-11-26',	'A3-CB',	'CB001'),
(6,	'Veronicaguest',	1,	'2017-01-11',	'A3-CB',	'CB001'),
(7,	'Veronicaguest',	1,	'2017-12-04',	'A4-CB',	'CB001'),
(8,	'Veronicaguest',	1,	'2017-12-08',	'A2-CB',	'CB001'),
(9,	'Veronicaguest',	1,	'2017-12-15',	'A2-CB',	'CB001'),
(10,	'Veronicaguest',	1,	'2017-11-29',	NULL,	'CB001');

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `IDCart` int(11) NOT NULL AUTO_INCREMENT,
  `IDCustomer` char(5) DEFAULT NULL,
  `IDMenu` char(5) DEFAULT NULL,
  `JumlahMenu` int(11) DEFAULT NULL,
  `Diskon` int(11) DEFAULT NULL,
  `IDPromo` char(5) DEFAULT NULL,
  PRIMARY KEY (`IDCart`),
  KEY `IDCustomer` (`IDCustomer`),
  KEY `IDMenu` (`IDMenu`),
  KEY `IDPromo` (`IDPromo`),
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`IDCustomer`) REFERENCES `customer` (`username`),
  CONSTRAINT `shoppingcart_ibfk_2` FOREIGN KEY (`IDMenu`) REFERENCES `menu` (`IDMenu`),
  CONSTRAINT `shoppingcart_ibfk_3` FOREIGN KEY (`IDPromo`) REFERENCES `promo` (`IDPromo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `IDTransaksi` char(5) NOT NULL,
  `IDCart` int(11) DEFAULT NULL,
  `TanggalTransaksi` date DEFAULT NULL,
  `JumlahTransaksi` int(11) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `JenisPembayaran` varchar(10) DEFAULT NULL,
  `IDKurir` char(5) DEFAULT NULL,
  `IDCabang` char(5) DEFAULT NULL,
  PRIMARY KEY (`IDTransaksi`),
  KEY `IDCart` (`IDCart`),
  KEY `IDKurir` (`IDKurir`),
  KEY `IDCabang` (`IDCabang`),
  CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`IDKurir`) REFERENCES `kurir` (`IDKurir`),
  CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`IDCabang`) REFERENCES `cabang` (`IDCabang`),
  CONSTRAINT `transaction_ibfk_4` FOREIGN KEY (`IDCart`) REFERENCES `shoppingcart` (`IDCart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `transactionreservasi`;
CREATE TABLE `transactionreservasi` (
  `IDTransactionReserv` char(5) NOT NULL DEFAULT '',
  `IDReservasi` char(5) DEFAULT NULL,
  `TanggalReservasi` date DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `JenisPembayaran` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IDTransactionReserv`),
  KEY `IDReservasi` (`IDReservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2017-12-09 04:15:01