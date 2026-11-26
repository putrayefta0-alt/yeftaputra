<?php 
use db_uts_perpustakaan 
CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    isbn CHAR(13) NOT NULL UNIQUE,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL 
    stok INT NOT NULL 
);

INSERT INTO buku 
(isbn, judul, penulis, penerbit,
tahun_terbit, stok)
VALUES 
('9786020324784', 'Laskar Pelangi',
'Andrea Hiarata', 'Bentang Pustaka', 
2500, 8),

('9789793062792', 'Bumi',
 'Tere Liye', 'Gramedia', 2014, 5),

('9786020648294', 'Laut Bercerita',
 'Leila S. Chudori', 'KPG', 2017, 3),

('9786020332958', 'Filosofi Teras',
 'Henry Manampiring', 'Kompas', 2018, 0),

('9789797941400', 'Negeri 5 Menara',
 'Ahmad Fuadi', 'Gramedia', 2009, 6);