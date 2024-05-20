-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 01:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(20) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat_pelanggan` varchar(250) NOT NULL,
  `nohp_pelanggan` varchar(25) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `nohp_pelanggan`, `tgl_pinjam`, `tgl_kembali`) VALUES
(2, 'andika', 'yogyakarta', '081271943495', '2021-01-14', '2021-02-14'),
(3, 'roziqin', 'yogyakarta', '081276410242', '2021-01-14', '2021-02-19'),
(9, 'ahmad', 'jambi', '081264912245', '2021-01-14', '2021-01-16'),
(12, 'madewibi', 'bali', '0897612341', '2021-01-20', '2021-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perpus`
--

CREATE TABLE `tb_perpus` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `gambar` text NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `jml_hal` varchar(150) NOT NULL,
  `thn_terbit` varchar(150) NOT NULL,
  `pengarang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perpus`
--

INSERT INTO `tb_perpus` (`id_buku`, `judul_buku`, `keterangan`, `kategori`, `gambar`, `penerbit`, `jml_hal`, `thn_terbit`, `pengarang`) VALUES
(2, 'Filosofi Teras', 'Filosofi Teras: Filsafat Kuno, Panduan Hidup Zaman Now', 'pengembangan_diri', 'filosofi teras.jpg', 'Kompas', '346', '2018', 'Henry Manampiring'),
(3, 'Dilan 1990', 'Dilan: Dia adalah Dilanku tahun 1990 adalah sebuah novel karya Pidi Baiq yang diterbitkan oleh Penerbit Pastel Books. Novel tersebut menjadi buku dengan penjualan terbaik di Gramedia, serta diadaptasi ke dalam sebuah film yang berjudul Dilan 1990.', 'novel', 'dilan 1990.jpg', 'MIZAN', '348', '2018', 'Pidi Baiq'),
(4, 'Dilan 1991', 'Dilan Bagian Kedua: Dia adalah Dilanku Tahun 1991 adalah novel sekuel dari Dilan: Dia adalah Dilanku Tahun 1990 yang ditulis oleh Pidi Baiq dan terbit tahun 2015. Novel Dilan 2 diterbitkan oleh Penerbit Pastel Books. Novel ini berisi tentang romansa remaja di Kota Bandung tahun 1991', 'novel', 'dilan 1991.jpg', 'PASTEL BOOKS', '344', '2015', 'Pidi Baiq'),
(5, 'Milea: Suara dari dilan', 'Milea, Suara dari Dilan adalah sebuah novel karya Pidi Baiq yang diterbitkan oleh Pastel Books pada tahun 2016. Novel tersebut adalah sekuel dari novel Dilan: Dia adalah Dilanku Tahun 1990 dan Dilan Bagian Kedua: Dia adalah Dilanku Tahun 1991. ', 'novel', 'milea.jpg', 'PASTEL BOOKS', '360', '2016', 'Pidi Baiq'),
(6, 'Seni Bersikap Bodo Amat (The Subtle Art of Not Giving a F*ck)', 'Sebuah Seni untuk Bersikap Bodo Amat: Pendekatan yang Waras Demi Menjalani Hidup yang Baik atau The Subtle Art of Not Giving a F*ck: A Counterintuitive Approach to Living a Good Life adalah buku kedua Mark Manson, seorang narablog dan penulis.', 'pengembangan_diri', 'seni bersikap bodo amat.jpg', 'HERPER ONE', '224', '2016', 'Mark Manson'),
(7, 'Segala-galanya ambyar (Everything Is Fucked)', '\r\nEverything Is Fucked: A Book About Hope adalah buku ketiga oleh blogger dan penulis Mark Manson yang diterbitkan pada tahun 2019. Itu adalah buku terlaris, memulai debutnya di nomor satu di Daftar Buku Terlaris New York Times untuk Saran, Petunjuk, dan Lain-lain.', 'pengembangan_diri', 'everything.jpg', 'Herper One', '211', '2019', 'Mark Manson'),
(18, 'Sastra dan ilmu sastra ; pengantar teori sastra', 'Menyajikan sebuah teori sastra yang bulat dan menyeluruh, dalam arti bahwa teori ini berdasarkan model semiotik sastra yang mempertanggungjawabkan semua faktor dan aspek yang hakiki untuk pemahaman gejala sastra sebagai alat komunikasi yang khas dalam masyarakat mana pun juga. Namun hal yang berkaitan dengan sastra dibicarakan di dalamnya: aspek sosiologi sastra, psikologi sastra, filsafat, estetik dan lain-lain tidak dibicarakan kecuali yang perlu dalam rangka pembicaraan model semiotik. Demikian pula aspek linguistik', 'sastra', 'sastra 1.jpg', 'Pustaka Jaya', '404', '1984', 'A. Teeuw'),
(19, 'Bumi Manusia (This Earth of Mankind)', 'Bumi Manusia adalah buku pertama dari Tetralogi Buru karya Pramoedya Ananta Toer yang pertama kali diterbitkan oleh Hasta Mitra pada tahun 1980. Buku ini ditulis Pramoedya Ananta Toer ketika masih mendekam di Pulau Buru', 'sastra', 'sastra 2.jpg', 'Hasta Mitra', '535', '1980', 'Pramoedya Ananta Toer'),
(20, 'Filosofi Teras', 'Filosofi Teras: Filsafat Kuno, Panduan Hidup Zaman Now', 'sastra', 'sastra 3.jpg', 'Pustaka Pelajar', '177', '2002', 'Sugihastuti'),
(21, 'Maze Runner', 'When Thomas wakes up in the lift, the only thing he can remember is his first name. His memory is blank. But he’s not alone. When the lift’s doors open, Thomas finds himself surrounded by kids who welcome him to the Glade—a large, open expanse surrounded by stone walls.\r\n\r\nJust like Thomas, the Gladers don’t know why or how they got to the Glade. All they know is that every morning the stone doors to the maze that surrounds them have opened. Every night they’ve closed tight. And every 30 days a new boy has been delivered in the lift.\r\n\r\nThomas was expected. But the next day, a girl is sent up—the first girl to ever arrive in the Glade. And more surprising yet is the message she delivers.\r\n\r\nThomas might be more important than he could ever guess. If only he could unlock the dark secrets buried within his mind.\r\nIf the item details above aren’t accurate or complete, we want to know about it. Report incorrect product info.\r\n', 'petualangan', 'mazerunner 1.jpg', 'Delacorte Press', '375', '2009', 'James Dashner'),
(22, 'Maze Runner :The Scorch Trials', 'The book starts with Thomas sleeping in the dormitory with the other teenagers, known as the Gladers, who escaped from the Maze in the previous book and had been brought by a group of rescuers. Thomas is woken by a telepathic communication with Teresa, the only girl from the Glade, who is afraid.\r\n\r\nAs Thomas wakes up, he finds that the facility is being attacked by Cranks, aggressive zombie-like people that have been affected by a plague known as the Flare. The disease attacks the brain and causes victims to lose their humanity and to become crazy. Cranks were normal citizens before the Flare, when they became crazed zombie-like killers.\r\n\r\nThomas and the others escape into the facility\'s common area and discover that their rescuers are dead. They also find that Teresa is missing from her room, and in her place is a boy, Aris Jones. Aris explains he escaped from a similar Maze experiment, Group B, in which he was the only male. The boys then discover tattoos on their necks that assign them specific roles and fates.', 'petualangan', 'mazerunner 2.jpg', 'Delacorte Press', '361', '2010', 'James Dashner'),
(23, 'Maze Runner : The Death Cure', 'After being held in solitary confinement, Thomas is eventually released by Janson (Nicknamed \"Rat Man\"), who is the assistant director of WICKED (World In Catastrophe Killzone Experiment Department) . Janson tells the Gladers (Group A) and Group B that most of their number are immune to the Flare, but some, whose names he reads, are not immune, including Newt. The Gladers are offered the chance to remove the mind-control chips in their heads and restore their memories but at the cost of Thomas\'s ability to communicate telepathically with Teresa and Aris. Only Thomas, Minho, and Newt choose not to undergo the surgery, as they do not trust WICKED, and Thomas does not want to know who he was when he helped go create the maze. All three of them escape from WICKED with the help of Brenda and Jorge before their chips are removed.\r\n\r\n', 'petualangan', 'mazerunner 3.jpg', 'Delacorte Press', '325', '2011', 'James Dashner'),
(24, 'Harry Potter and the Philosopher\'s Stone', 'Harry Potter\'s life is miserable. His parents are dead and he\'s stuck with his heartless relatives, who force him to live in a tiny closet under the stairs. But his fortune changes when he receives a letter that tells him the truth about himself: he\'s a wizard. A mysterious visitor rescues him from his relatives and takes him to his new home, Hogwarts School of Witchcraft and Wizardry.\r\n\r\nAfter a lifetime of bottling up his magical powers, Harry finally feels like a normal kid. But even within the Wizarding community, he is special. He is the boy who lived: the only person to have ever survived a killing curse inflicted by the evil Lord Voldemort, who launched a brutal takeover of the Wizarding world, only to vanish after failing to kill Harry.', 'fantasi', 'harrypotter 1.jpg', 'Raincoast', '223 (UK VERSION)', '1997', 'J.K Rowling'),
(25, 'Harry Potter and the Chamber of Secrets', 'Harry Potter and the Chamber of Secrets is a fantasy novel written by British author J. K. Rowling and the second novel in the Harry Potter series. The plot follows Harry\'s second year at Hogwarts School of Witchcraft and Wizardry, during which a series of messages on the walls of the school\'s corridors warn that the \"Chamber of Secrets\" has been opened and that the \"heir of Slytherin\" would kill all pupils who do not come from all-magical families. These threats are found after attacks that leave residents of the school petrified. Throughout the year, Harry and his friends Ron and Hermione investigate the attacks.', 'fantasi', 'harrypotter 2.jpg', 'Raincoast', '251 (UK VERSION)', '1998', 'J.K Rowling'),
(26, 'Harry Potter and the Prisoner of Azkaban', 'Harry Potter and the Prisoner of Azkaban is a fantasy novel written by British author J. K. Rowling and is the third in the Harry Potter series. The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, the wizard prison, believed to be one of Lord Voldemort\'s old allies.', 'fantasi', 'harrypotter 3.jpg', 'Raincoast', '317 (UK VERSION)', '1999', 'J.K Rowling'),
(27, 'Harry Potter and the Goblet of Fire', 'Harry Potter and the Goblet of Fire is a fantasy book written by British author J. K. Rowling and the fourth novel in the Harry Potter series. It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the mystery surrounding the entry of Harry\'s name into the Triwizard Tournament, in which he is forced to compete.', 'fantasi', 'harrypotter 4.jpg', 'Raincoast', '636 (UK VERSION)', '2000', 'J.K Rowling'),
(28, 'Harry Potter and the Order of the Phoenix', 'Harry Potter and the Order of the Phoenix is a fantasy novel written by British author J. K. Rowling and the fifth novel in the Harry Potter series. It follows Harry Potter\'s struggles through his fifth year at Hogwarts School of Witchcraft and Wizardry, including the surreptitious return of the antagonist Lord Voldemort, O.W.L. exams, and an obstructive Ministry of Magic. The novel was published on 21 June 2003 by Bloomsbury in the United Kingdom, Scholastic in the United States, and Raincoast in Canada. It sold five million copies in the first 24 hours of publication. It is the longest book of the series.', 'fantasi', 'harrypotter 5.jpg', 'Raincoast', '870 (US VERSION)', '2003', 'J.K Rowling'),
(29, 'Harry Potter and the Half-Blood Prince', 'Harry Potter and the Half-Blood Prince is a fantasy novel written by British author J.K. Rowling and the sixth and penultimate novel in the Harry Potter series. Set during Harry Potter\'s sixth year at Hogwarts, the novel explores the past of the boy wizard\'s nemesis, Lord Voldemort, and Harry\'s preparations for the final battle against Voldemort alongside his headmaster and mentor Albus Dumbledore.', 'fantasi', 'harrypotter 6.jpg', 'Raincoast', '607 (UK VERSION)', '2005', 'J.K Rowling'),
(30, 'Harry Potter and the Deathly Hallows', 'Harry Potter and the Deathly Hallows is a fantasy novel written by British author J. K. Rowling and the seventh and final novel of the Harry Potter series. It was released on 21 July 2007 in the United Kingdom by Bloomsbury Publishing, in the United States by Scholastic, and in Canada by Raincoast Books. The novel chronicles the events directly following Harry Potter and the Half-Blood Prince (2005) and the final confrontation between the wizards Harry Potter and Lord Voldemort.', 'fantasi', 'harrypotter 7.jpg', 'Raincoast', '607 (UK VERSION)', '2007', 'J.K Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '213213', 1),
(2, 'user', 'user', '12345', 2),
(3, 'ANDIKA WAHYU RAMADHAN', 'andkwhyu', '213213', 2),
(4, 'Hary agung riyadi', 'hary', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tb_perpus`
--
ALTER TABLE `tb_perpus`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_perpus`
--
ALTER TABLE `tb_perpus`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
