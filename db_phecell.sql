-- tabel customer
create table if not exists customer(
    username char(20) PRIMARY KEY, 
    nama_cust varchar(30) NOT NULL, 
    password_cust char(20) NOT NULL
);
-- add customer
INSERT INTO customer VALUES
('member1','Wanda Maximof','wm123'),
('member2','Elisabeth Olsen','eo123'),
('member3','Mia Khalifa','mk123'),
('member4','Natasha Romanoff','nr123'),
('member5','Scarlet Johanson','sj345');

-- *** --

-- tabel produk
create table if not exists produk(
    id_produk char(4) PRIMARY KEY, 
    nama_operator varchar(10) NOT NULL, 
    harga_tambahan int(7)
);
-- add produk
INSERT INTO produk VALUES
('Tel1','Telkomsel',2500),
('Ind2','Indosar',2250),
('Xl03','XL',2000),
('Axi4','Axis',1750),
('Tri5','Tri',1500),
('Sma6','Smartfren',1250),
('Bol7','Bolt',1000);

-- *** --

-- tabel promo
create table if not exists promo(
    kd_promo char(16) PRIMARY KEY, 
    potongan int(7), 
    status boolean DEFAULT true
);
-- add produk
INSERT INTO promo VALUES
('0000000000000000',0,DEFAULT),
('1234567890123456',5000,DEFAULT),
('1231231231231231',7000,DEFAULT),
('4321432143214321',3000,DEFAULT),
('7777777777777777',2000,DEFAULT),
('9999999999999999',1000,DEFAULT);

-- *** ---

-- tabel admin
create table if not exists admin(
    id_admin char(6) PRIMARY KEY, 
    nama varchar(20) NOT NULL, 
    password_admin char(20) NOT NULL
);
-- add produk
INSERT INTO admin VALUES
('Budi12','Asep Budiyana M','aku123'),
('Difa12','Difa Bagasputra M','kamu123'),
('Bia12','Bandana Irmal Abdillah','dia123');

-- tabel pesanan
create table pesanan(
    id_pesanan char(15) PRIMARY KEY, 
    waktu timestamp, 
    status_pembayaran boolean DEFAULT false, 
    status_pengiriman boolean DEFAULT false, 
    nomor_hp char(12) NOT NULL, 
    nominal int(7), 
username char(20), id_produk char(4), kd_promo char(16) DEFAULT '0000000000000000', id_admin char(6), 
FOREIGN KEY (username) REFERENCES customer(username),
FOREIGN KEY (id_produk) REFERENCES produk(id_produk),
FOREIGN KEY (kd_promo) REFERENCES promo(kd_promo),
FOREIGN KEY (id_admin) REFERENCES admin(id_admin)
);
-- add pesanan
INSERT INTO pesanan VALUES
('123456789012345',DEFAULT,DEFAULT,DEFAULT,'085223922501',10000,'member1','Tel1','1234567890123456',DEFAULT),
('234567890123456',DEFAULT,DEFAULT,DEFAULT,'085722040358',20000,'member5','Ind2','1231231231231231',DEFAULT),
('345678901234567',DEFAULT,DEFAULT,DEFAULT,'087781379245',50000,'member4','Xl03','4321432143214321',DEFAULT),
('456789012345678',DEFAULT,DEFAULT,DEFAULT,'089919815502',100000,'member2','Bol7','7777777777777777',DEFAULT),
('567890123456789',DEFAULT,DEFAULT,DEFAULT,'085889664243',20000,'member3','Sma6','9999999999999999',DEFAULT),
('678901234567890',DEFAULT,DEFAULT,DEFAULT,'087721820990',50000,'member5','Tri5',DEFAULT,DEFAULT),
('789012345678901',DEFAULT,DEFAULT,DEFAULT,'082122720187',70000,'member3','Axi4',DEFAULT,DEFAULT),
('890123456789012',DEFAULT,DEFAULT,DEFAULT,'081380273478',5000,'member2','Tel1',DEFAULT,DEFAULT),
('901234567890123',DEFAULT,DEFAULT,DEFAULT,'082120814276',200000,'member1','Xl03',DEFAULT,DEFAULT),
('012345678901234',DEFAULT,DEFAULT,DEFAULT,'088012348679',40000,'member4','Bol7',DEFAULT,DEFAULT);