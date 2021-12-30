-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2021 pada 07.15
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplace`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `bulan` varchar(40) NOT NULL,
  `tahun` int(11) NOT NULL,
  `hasil_penjualan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `bulan`, `tahun`, `hasil_penjualan`) VALUES
(1, 'January', 2021, 10),
(2, 'February', 2021, 12),
(3, 'Maret', 2021, 13),
(4, 'April', 2021, 18),
(5, 'May', 2021, 16),
(6, 'Juni', 2021, 14),
(7, 'July', 2021, 15),
(8, 'Agustus', 2021, 12),
(9, 'September', 2021, 19),
(10, 'Oktober', 2021, 12),
(11, 'November', 2021, 12),
(12, 'Desember', 2021, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(22) NOT NULL,
  `deskripsi` text NOT NULL,
  `terjual` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `Gambar`, `nama`, `harga`, `deskripsi`, `terjual`, `stock`, `dibuat`, `kategori`) VALUES
(1, 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/10/3/f7f2b557-e439-4f30-9760-8870865681a8.jpg', 'HyperX Cloud Earbuds Gaming', 599000, 'HyperX Cloud Earbuds™ are ideal for the Nintendo Switch™ gamer who enjoys taking their game outside. With a 90-degree angled plug, the rubberized, tangle-free cable makes a less obtrusive connection optimized for handheld mode, and the included carrying case is perfect for portability and secure storage. Easily communicate with your squad in Fortnite and other Switch games that use in-game chat and get an edge in your execution and enjoyment. Cloud Earbuds come with three sizes of patented silicone ear tips to provide signature HyperX comfort, making them great for lengthy gaming sessions. Get immersive audio thanks to the earbuds’ enhanced bass, and crystal-clear highs, mids, and lows. The slim, convenient in-line mic has a multi-function button that easily allows you to answer calls1 and control your streaming media. HyperX Cloud Earbuds feature a two-year warranty and come with free technical support, making them perfect purchase for any fan of portable gaming. Optimized for Handheld Mode Signature HyperX comfort Immersive in-game audio In-Line mic for game chat Two year warranty	', 0, 1, '2021-11-05 11:28:27', 'earphone'),
(3, 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/6/25/3e60bea7-adbe-405e-a3d8-18f15d64da2d.jpg', 'Sades Sabre TKL RGB Gaming Keyboard', 209000, 'Gaming Sades Sabre TKL RGB Membrane', 0, 100, '2021-11-05 16:42:00', 'Keyboard'),
(4, 'https://images.tokopedia.net/img/cache/900/product-1/2020/8/26/24348837/24348837_477ea33e-62c7-41d2-a18a-9a4254fd9059_1000_1000', 'Mousepad Mouse pad Antislip', 28000, 'berkualitas tinggi - lembut dan nyaman, tidak ada', 0, 76, '2021-11-08 10:46:27', 'Mousepad'),
(5, 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/6/27/5f98173f-4afc-4c78-be9d-b86e5922e21a.jpg', 'Rexus Gaming Chair RGC 101 V.2 New Version 2020', 2499000, '101 V.2 kini hadir dgn versi terbaru yg dilengkapi lebih banyak fitur.', 0, 1, '2021-11-08 11:21:27', 'Chair'),
(6, 'https://cf.shopee.co.id/file/ab33e2b1afdde9952f6558b1f2a3ccc9_tn', 'Toys Inpirated ', 82000, 'Inpirated is one of the best clothing products', 0, 10, '2021-11-08 11:26:34', 'Baju'),
(7, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/10/18/1c0e1fb4-2909-4988-9358-f09672b75151.jpg.webp?ect=4g', 'SUKAJAN JACKET - MIKADUKI RYU', 450000, 'Available size S,M,L,XL,XXL Material : -Satin black -full embroidery design (Bordir) IDR 450.000 - Untuk pencucian tidak kami rekomendasikan dengan mesin cuci - Hindari setrika Tips pencucian: - Apabila ada noda dibagian tertentu bisa bershikan dengan lap yang lembab - Apabila kalian ingin mencuci, cukup direndam maximal dibawah 10 menit dikucek cukup menggunakan tangan - Agar tidak terjadi kusut, setelah mencuci jemurlah menggunakan hanger atau gantungan baju', 0, 10, '2021-11-08 11:28:35', 'Jacket'),
(8, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2020/12/3/f71220ff-aef0-40a1-ad4a-f31dac0cba15.jpg.webp?ect=4g', 'Monopoly 5 In 1 Monopoli, Halma, Catur, Ular Tangga, Ludo Permainan Papan Monopoly 5in1 4in1', 29500, 'Monopoly 5 In 1 Monopoli, Halma, Catur, Ular Tangga, Ludo Permainan Papan Monopoly 5in1 4in1', 0, 10, '2021-11-08 11:31:16', 'Mainan'),
(9, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/5/26/d05f2afa-bab3-4693-b085-c00e4bea0c63.jpg.webp?ect=4g', 'Playcation with UNO - Permainan', 269900, '1pc UNO CARD 1pc UNO STACKO FREE Note Book UNO (stock terbatas) deformasi.', 0, 100, '2021-11-08 11:33:25', 'Mainan'),
(10, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/3/8/a967617b-ad72-49b9-a2c1-50b64dd2aad5.jpg.webp?ect=4g', 'MILS Keyboard Case iPad 6 7 Mini 4 5 Air 3 4 10.2 10.9 Pro 11 12.9', 375000, 'SUDAH TERMASUK CASE DAN KEYBOARD', 0, 100, '2021-11-08 11:35:33', ''),
(11, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2020/7/22/0a88d242-e7da-4f27-98de-675ed5988ba6.jpg.webp?ect=4g', 'SAMSUNG GALAXY A51 8/128GB NEW GARANSI RESMI SEIN', 3650000, 'NETWORKTechnology GSM / HSPA Released 2019', 0, 100, '2021-11-08 11:37:05', ''),
(12, 'https://images.tokopedia.net/img/cache/200-square/product-1/2020/5/20/1182979/1182979_1db5531b-5bd8-4ad5-a339-5dba6cae4ba9_300_300.webp?ect=4g', 'Samsung Tab S6 Lite Garansi resmi ', 209000, 'Tab S6 Lite Version SM-P615 (LTE)', 0, 10, '2021-11-08 11:39:06', ''),
(13, 'https://images.tokopedia.net/img/cache/300-square/product-1/2020/3/31/499869/499869_7d6ff03f-38ae-47d4-97aa-d57651982660_700_700.webp?ect=4g', '[GARANSI]TYPE C JACK AUDIO SPLITTER 2 IN 1 JACK 3.5MM WITH CHARGING', 14000, '[GARANSI]TYPE C JACK AUDIO SPLITTER 2 IN 1 JACK 3.5MM WITH CHARGING', 0, 100, '2021-11-08 11:40:36', ''),
(18, 'https://images.tokopedia.net/img/cache/300-square/VqbcmM/2021/3/31/0f9755a2-83ca-4866-ad42-61b004ecaed7.jpg.webp?ect=4g', 'UV Sterilizer Stick Fitcare', 133000, 'Mampu membunuh 99.9% virus/kuman/bakteri dalam waktu 15 detik.\r\n\r\n- Menggunakan lampu UVC LED tanpa merkuri\r\n- Memiliki Gravity Sensor / sensor keamanan yang ketika produk menghadap keatas, lampu UV akan otomatis mati\r\n- Memiliki 3 buah lampu UV dengan panjang gelombang 265 280nm\r\n- Ringan dan mudah dibawa kemana-mana\r\n\r\nCara pemakaian:\r\n1. Posisikan UV Stick menghadap ke bawah lalu tekan tombol dan tahan selama 3detik\r\n2. Sinari ke barang yang mau disterilkan dengan jarak 1 2cm selama 15 detik\r\n3. Ulangi ke semua bagian / semua sisi\r\n4. Apabila posisi UV Stick miring / menghadap keatas kan otomatis mati karena ada Gravity Sensor\r\n\r\nSpesifikasi:\r\nBahan: Plastik ABS\r\nUkuran: 12,5 cm x 3 cm x 1,5 cm\r\nBerat: 55gr\r\nKetahanan baterai 10.000 jam pemakaian\r\n\r\nFAQ:\r\n1. Apakah ini portable?\r\n- Ya, portable\r\n\r\n2. Apakah ada garansi?\r\n- Garansi 1 tahun\r\n\r\n3. Apakah sinar UVC aman untuk makanan / minuman?\r\n- Aman digunakan ke makanan dan minuman, yang tidak boleh adalah ke makhluk hidup, jadi hindari terkena kulit\r\ndan mata\r\n\r\n4. Apakah ini menggunakan baterai?\r\n- Tidak menggunakan baterai tambahan tapi dicharge. Pembelian UV Stick sudah include kabel charger ya\r\n\r\n5. Sekali charge, baterai tahan berapa lama?\r\n- Bisa digunakan selama 3 jam\r\n\r\nInfo Pengiriman:\r\n1. Pengiriman hari Senin - Sabtu\r\n2. Hari Minggu dan libur nasional tutup\r\n3. Jadwal cut off orderan yang dikirim dihari yang sama:\r\n- Sicepat (Ekspedisi):\r\nSenin s/d Jumat Pukul 15:00 WIB\r\nSabtu Pukul 13:00 WIB\r\n- Gojek dan Grab:\r\nSenin s/d Sabtu Pukul 13:00 WIB\r\n4. Dikirim kurir setiap sore hari (akan terupdate menjadi \"sedang dikirim\" pada malam hari atau max 1x24jam)\r\n5. Keterlambatan pengiriman yang disebabkan oleh kurir diluar tanggung jawab kami.', 0, 10, '2021-11-17 11:27:31', ''),
(19, 'https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/5c06cb3a-6753-41db-b7df-8c149bea2620.jpg.webp?ect=4g', 'Portable Power Bank 10000mAh 37Wh Quick Charge Pesawat King Ruth K888 - Hitam', 69900, 'Info Produk:\r\n- Nama ：King Ruth K888 Power Bank\r\n- Warna ：\r\n- Hitam\r\n- Putih\r\n\r\n- Capacity : 10000mAh / 37Wh\r\n- Input : DC 5V -- 2A ( Micro USB Port )\r\n- Input : DC 5V -- 2A ( Type C Port )\r\n- Output 1 : 5V -- 2A\r\n- Output 2 : 5V -- 2A\r\n- Support : Power Bank daya kapasitas besar dengan 2 port USB\r\n- Battery : Li-Polymer Battery with Atom Cell Technology\r\n- Size : 14cm x 6.8cm x 1.5 cm\r\n- Pesawat : Aman dibawa ke dalam kabin pesawat.\r\n- Cocok dengan: iPhone / iPad / iPod / smartphone / tablet\r\n- Bahan : Plastic (Body terbuat yang tangguh, tahan panas dan tahan api )\r\n- Garansi : 6 bulan\r\n- Fungsi :\r\n- Over charge / discharge / current multiple protection\r\n- Smart Power Management\r\n- Smart Charging Solutions\r\n\r\nIsi Kemasan:\r\n1 x 10000mAh Dual USB Mini Power Bank\r\n1 x kabel micro USB\r\n\r\nPAHAMI KUALITAS PRODUK DENGAN BAIK SEBELUM MEMBELI\r\n* Semua foto produk adalah foto produk asli di gudang STARTS SPAREPART\r\n* Ketersediaan stok bisa di tanyakan via chat atau diskusi\r\n*Kami dengan senang hati melayani grosiran dan eceran\r\n* Selamat berbelanja ditoko kami ', 0, 20, '2021-11-17 11:33:14', ''),
(20, 'https://images.tokopedia.net/img/cache/200-square/product-1/2018/1/28/15092423/15092423_f1c6bf1a-e6b9-4c44-a40c-26c239f88062_436_511.jpg.webp?ect=4g', 'Flashdisk Sandisk Cruzer Blade 32GB Flash Disk', 81000, '100% ORIGINAL GARANSI RESMI SANDISK INDONESIA --\r\n\r\nKetentuan Garansi:\r\n- Garansi 5 Tahun Distributor Resmi.\r\n- Kemasan berstiker Distributor Resmi.\r\n- Kerusakan bukan karena kelalaian pengguna.\r\n- Kondisi fisik produk tidak cacat fisik: pecah, patah, terbakar, terkena cairan.\r\n\r\nDistributors Resmi\r\n(sumber: http://wwwsandiskid/about-sandisk/find-a-reta...)\r\n', 0, 20, '2021-11-17 11:37:02', ''),
(21, 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/4/21/2c3cfb50-7adb-4475-b273-fbade5e03733.jpg.webp?ect=4g', 'HAVIT Cooling pad Gaming HV-F2068 for 14-17 Inch Laptops ( 5Fans ) - Merah', 350000, 'Superior Cooling, Whisper Quiet\r\nThe 5 Quiet fans of HAVIT HV-F2068 5-Fan Laptop Cooler create a noise-free & interference-free environment for you. Provides total 65 CFM of air flow to draws heat away from your laptop.\r\n\r\nFive fans (1 x big fan: 110mm, 4 x small fans: 85mm) with eye-catching red LED light, optimize heat dissipation effect for 14\"-17\" Laptops (The brighter the light is, the faster the speed will be)\r\n\r\nErgonomic Comfort\r\nBuild with non-slip baffle and adjustable height to meet different needs when working or playing game, comfortable for natural point of view.\r\n\r\nExtra USB Ports\r\nExtra USB Ports: Dual-USB hub allows for connecting more USB devices.\r\n\r\nSolid Build Quality\r\nBuild with high-quality metal mesh draws heat away from laptop, reliable.\r\n\r\nPackaging include\r\n\r\n1x HAVIT HV-F2068 5-Fan Laptop Cooler\r\n1 x USB Cable\r\n1 x Service Card\r\n1 x User Manual', 0, 5, '2021-11-17 11:40:28', ''),
(22, 'https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/8/3/e7fb869a-d98a-41ba-acd3-3fdbecc9c60e.jpg.webp?ect=4g', 'Takara Raiz 204 Light Weight Tripod For Camera,smartphone', 142000, 'Takara Raiz 204 merupakan tripod keluaran TAKARA. Terbuat dari bahan berkualitas, tripod TAKARA Raiz 204 kuat dan nyaman digunakan. Dengan section sebanyak 4 bagian, TAKARA Raiz 204 dapat bertambah panjang dari 42-135cm. Dilengkapi dengan Universal Phone Holder dan 1/4″ screw, anda dapat memasangkan seluruh kamera maupun Smartphone anda pada Takara Raiz 204.Serta dilengkapi pula bluetooth remote shutter remote kamera bluetooth HP jadi anda tidak perlu lagi menekan tombol shutter pada iPhone dan Smartphone Android Anda.Specifications.UNC 1/4 Quick Release PlateWeight: 0.58kg /1.27 lbsLoad: 2kg /4. 4lbsFolded Height: 42cmHeight: 39. 5cmMaximum Height: 134cm20mm 4-section Alumunium legsPackage Include.1x Tripod1x remote shutter1x Holder Phone1x Pouch', 0, 15, '2021-11-17 16:21:07', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
