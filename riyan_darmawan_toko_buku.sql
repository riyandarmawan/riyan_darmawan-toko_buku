-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 05:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riyan_darmawan_toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` year(4) DEFAULT NULL,
  `stok` tinyint(4) DEFAULT NULL,
  `harga_pokok` bigint(20) DEFAULT NULL,
  `harga_jual` bigint(20) DEFAULT NULL,
  `diskon` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `harga_pokok`, `harga_jual`, `diskon`) VALUES
(1, 'Honorable', 'Kendricks Fritschel', 'Dynabox', '2004', 16, 88139, 110173, 2724),
(2, 'Rev', 'Ashlee Buxton', 'Yata', '1928', 5, 180472, 225590, 2759),
(3, 'Rev', 'Goraud Lisciardelli', 'Voonder', '2002', 20, 61560, 76950, 7536),
(4, 'Dr', 'Rubia O\'Mohun', 'Eare', '1918', 23, 101799, 127248, 1637),
(5, 'Mr', 'Devina Bertenshaw', 'Feedspan', '2005', 9, 135352, 169190, 6331),
(6, 'Mr', 'Arvy Dufaire', 'Feedspan', '1981', 7, 166350, 207937, 5354),
(7, 'Honorable', 'Fair Ludmann', 'Kimia', '1942', 12, 112926, 141157, 3754),
(8, 'Mr', 'Vlad Malinowski', 'Npath', '1906', 16, 182225, 227781, 4601),
(9, 'Ms', 'Welby Batchelor', 'Eabox', '2012', 24, 156010, 195012, 4044),
(10, 'Ms', 'Pepito Fairman', 'Wikizz', '1947', 16, 100506, 125632, 7702),
(11, 'Dr', 'Giff Holdall', 'Zoozzy', '1928', 8, 124179, 155223, 3318),
(12, 'Dr', 'Keen Sworn', 'Rhynoodle', '1993', 4, 196053, 245066, 8403),
(13, 'Ms', 'Joshua O\'Sesnane', 'Yabox', '1984', 5, 121895, 152368, 3338),
(14, 'Mr', 'Moe Jakubiak', 'Innojam', '2021', 25, 76094, 95117, 3296),
(15, 'Rev', 'Launce Leatt', 'Eamia', '1923', 14, 141269, 176586, 3519),
(16, 'Rev', 'Tori Jeens', 'Flashdog', '1932', 23, 173897, 217371, 1119),
(17, 'Mrs', 'Barrett Theaker', 'Geba', '1982', 8, 190302, 237877, 9994),
(18, 'Rev', 'Nicola Manby', 'Innojam', '1955', 14, 171405, 214256, 2913),
(19, 'Mrs', 'Vitia Garlic', 'Flashpoint', '1999', 9, 188588, 235735, 2500),
(20, 'Mrs', 'Devondra Pringour', 'Dynazzy', '1957', 25, 53337, 66671, 8029),
(21, 'Mrs', 'Pip Ferroni', 'Zoomcast', '1925', 25, 72693, 90866, 4341),
(22, 'Mrs', 'Clay Broun', 'Devpulse', '1925', 4, 157574, 196967, 4665),
(23, 'Rev', 'Adah Wabersich', 'Topicstorm', '2011', 13, 109170, 136462, 7209),
(24, 'Mr', 'Derek Cramer', 'Thoughtmix', '1963', 21, 50381, 62976, 1563),
(25, 'Mr', 'Zacherie Vennart', 'Blogtags', '1919', 10, 55317, 69146, 9856),
(26, 'Honorable', 'Tabbie Junifer', 'Skyndu', '1962', 24, 62369, 77961, 3164),
(27, 'Ms', 'Lovell Rickell', 'Wordware', '2006', 25, 90045, 112556, 6313),
(28, 'Ms', 'Ezri Irving', 'Skippad', '1959', 20, 125359, 156698, 3145),
(29, 'Honorable', 'Sarajane Phoenix', 'Meemm', '2006', 18, 93703, 117128, 8409),
(30, 'Honorable', 'Ardene Stuttard', 'Quimba', '1906', 13, 67212, 84015, 9429),
(31, 'Mrs', 'Mattie De Benedictis', 'Jaxbean', '2014', 14, 81702, 102127, 6984),
(32, 'Mr', 'Aarika Turpey', 'Dynazzy', '1942', 14, 139135, 173918, 8079),
(33, 'Dr', 'Rouvin Scarlett', 'Wikibox', '1929', 21, 84678, 105847, 2724),
(34, 'Ms', 'Mandel Kluge', 'Voomm', '1986', 14, 91642, 114552, 7576),
(35, 'Honorable', 'Newton Dunkerly', 'Devpoint', '1909', 8, 95362, 119202, 2325),
(36, 'Mrs', 'Benedikt Blunkett', 'Brainbox', '1923', 19, 97950, 122437, 2064),
(37, 'Mrs', 'Prisca Satteford', 'Einti', '1989', 22, 161115, 201393, 7309),
(38, 'Mr', 'Aldrich Coules', 'Devpulse', '2007', 23, 97097, 121371, 5494),
(39, 'Ms', 'Averill Dreini', 'Latz', '2000', 13, 160508, 200635, 7804),
(40, 'Honorable', 'Ysabel Dowderswell', 'Katz', '1978', 23, 154555, 193193, 1985),
(41, 'Mr', 'Wes Malarkey', 'Yakijo', '1926', 10, 74830, 93537, 2417),
(42, 'Dr', 'Katinka Aumerle', 'Shufflebeat', '2000', 6, 146783, 183478, 4028),
(43, 'Mrs', 'Costanza Kilgour', 'Tagchat', '2016', 21, 106710, 133387, 3885),
(44, 'Dr', 'Lillian Ellis', 'Podcat', '1990', 8, 121659, 152073, 8000),
(45, 'Mr', 'Ruthi Sneller', 'Quire', '1919', 25, 88613, 110766, 8988),
(46, 'Honorable', 'Francois Aslett', 'Katz', '1918', 25, 188773, 235966, 3951),
(47, 'Ms', 'Isis Gregorin', 'Divanoodle', '1926', 7, 126808, 158510, 6416),
(48, 'Rev', 'Kial De Paoli', 'Twitterlist', '1901', 21, 159822, 199777, 7232),
(49, 'Rev', 'Waldemar Fedder', 'Photospace', '1929', 19, 160633, 200791, 6611),
(50, 'Rev', 'Sibyl Kennady', 'Realbridge', '1914', 19, 97353, 121691, 5014),
(51, 'Ms', 'Gael Najera', 'Edgeify', '1970', 22, 53718, 67147, 3286),
(52, 'Mrs', 'Diann Oldnall', 'Jabberstorm', '1936', 9, 151263, 189078, 4951),
(53, 'Mrs', 'Merlina Pestell', 'Yotz', '1966', 15, 70227, 87783, 2534),
(54, 'Rev', 'Durward Beard', 'Flipstorm', '2015', 19, 97128, 121410, 8367),
(55, 'Dr', 'Andrew Brimblecombe', 'Mybuzz', '1981', 11, 199327, 249158, 3955),
(56, 'Ms', 'Reginald Reichelt', 'Fadeo', '1939', 17, 98834, 123542, 6064),
(57, 'Mr', 'Yule Fuente', 'Mymm', '2019', 20, 94495, 118118, 7335),
(58, 'Honorable', 'Jeralee Vasquez', 'Topiczoom', '2005', 25, 168138, 210172, 7972),
(59, 'Mr', 'Sean Halso', 'Thoughtbridge', '1957', 23, 192965, 241206, 3986),
(60, 'Rev', 'Blithe Spreckley', 'Gabcube', '1939', 25, 126514, 158142, 8208),
(61, 'Rev', 'Emmalee Reisenstein', 'Wikizz', '2010', 9, 143420, 179275, 7237),
(62, 'Mr', 'Maisey Merck', 'Katz', '1953', 10, 74171, 92713, 9218),
(63, 'Mr', 'Leon Hardern', 'Browsezoom', '1946', 13, 66055, 82568, 6078),
(64, 'Mrs', 'Samson Dayment', 'Dabjam', '1983', 23, 140337, 175421, 1369),
(65, 'Dr', 'Barty Heatly', 'Plajo', '1918', 23, 87538, 109422, 9986),
(66, 'Rev', 'Ursulina Learoyd', 'Tanoodle', '1918', 14, 137557, 171946, 5540),
(67, 'Dr', 'Analise Abramovitz', 'Edgewire', '1932', 23, 156818, 196022, 9717),
(68, 'Ms', 'Tarah Pottberry', 'Realpoint', '1938', 21, 131258, 164072, 7191),
(69, 'Mr', 'Shandie Punch', 'Kaymbo', '1983', 15, 159098, 198872, 7279),
(70, 'Mr', 'Kristofor Riley', 'Centimia', '1974', 4, 128382, 160477, 1347),
(71, 'Dr', 'Shanie Aldcorne', 'Twitternation', '1925', 23, 55792, 69740, 7115),
(72, 'Honorable', 'Suzann Campkin', 'Voomm', '2003', 11, 192302, 240377, 6639),
(73, 'Mrs', 'Jacklin Imlock', 'Skilith', '1996', 14, 136359, 170448, 9396),
(74, 'Dr', 'Bibbie Isley', 'Skinder', '1935', 18, 161896, 202370, 1220),
(75, 'Dr', 'Thomasine Valentino', 'InnoZ', '1925', 24, 190942, 238677, 1456),
(76, 'Mrs', 'Gage Dragge', 'Mudo', '1959', 11, 195342, 244177, 7374),
(77, 'Dr', 'Rebeka Tubbs', 'Rooxo', '1985', 19, 176263, 220328, 5222),
(78, 'Rev', 'Timothee Ebdon', 'Dabjam', '1984', 22, 94658, 118322, 5354),
(79, 'Rev', 'Sandra Robson', 'Devcast', '1917', 17, 57094, 71367, 1165),
(80, 'Dr', 'Benoite Dumigan', 'Meezzy', '1941', 24, 155775, 194718, 9499),
(81, 'Honorable', 'Erl Swinfen', 'Meejo', '1982', 6, 193702, 242127, 4006),
(82, 'Honorable', 'Neala Curr', 'Yata', '1935', 6, 158518, 198147, 4338),
(83, 'Mr', 'Liesa Marle', 'Skyndu', '1914', 15, 148678, 185847, 7236),
(84, 'Rev', 'Marya Jeanon', 'Yozio', '1933', 11, 91002, 113752, 4061),
(85, 'Rev', 'Reinhard Aujean', 'Dabshots', '1973', 11, 153186, 191482, 1657),
(86, 'Rev', 'Vladamir Keys', 'Skidoo', '2018', 24, 52356, 65445, 4395),
(87, 'Mrs', 'Carlota Hought', 'Meembee', '1917', 10, 93826, 117282, 3252),
(88, 'Mrs', 'Rosanne Gotcher', 'Vimbo', '1941', 25, 125807, 157258, 1538),
(89, 'Dr', 'Katherina Ackerman', 'Kwilith', '1905', 21, 90097, 112621, 3949),
(90, 'Mrs', 'Wenda Rein', 'Mybuzz', '1968', 12, 69736, 87170, 6538),
(91, 'Mrs', 'Hedwiga Pirazzi', 'Talane', '1939', 13, 79484, 99355, 3971),
(92, 'Ms', 'Agneta Sempill', 'Demizz', '1917', 20, 137965, 172456, 4901),
(93, 'Honorable', 'Reinald Huthart', 'Voolith', '1912', 21, 151068, 188835, 1874),
(94, 'Rev', 'Pamelina Schroter', 'Divanoodle', '1944', 17, 73952, 92440, 8182),
(95, 'Ms', 'Karrah Trubshawe', 'Photobug', '1923', 22, 142572, 178215, 3251),
(96, 'Honorable', 'Rockwell Anfrey', 'Yakijo', '1965', 14, 102773, 128466, 5861),
(97, 'Rev', 'Ophelie Gudde', 'Oyope', '1994', 18, 101918, 127397, 3246),
(98, 'Mrs', 'Stella Britner', 'Jamia', '1940', 7, 104465, 130581, 3303),
(99, 'Mr', 'Birch Cod', 'Brightdog', '1910', 6, 66603, 83253, 2492),
(100, 'Mrs', 'Karla Burtenshaw', 'Zoomdog', '1964', 19, 59270, 74087, 1845);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pasok`
--

CREATE TABLE `detail_pasok` (
  `id` bigint(20) NOT NULL,
  `id_pasok` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `jumlah` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` bigint(20) NOT NULL,
  `id_penjualan` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `jumlah` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `nama_distributor` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `akses` enum('admin','kasir') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama`, `alamat`, `telepon`, `username`, `password`, `akses`) VALUES
(1, 'kasir', 'kasir', 'kasir', 'kasir', 'kasir', 'kasir'),
(2, 'Ahmad Soleh', 'Citalang', '0812839912', 'ahmad', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pasok`
--

CREATE TABLE `pasok` (
  `id_pasok` int(11) NOT NULL,
  `id_distributor` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_kasir` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_pasok`
--
ALTER TABLE `detail_pasok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasok` (`id_pasok`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penjualan` (`id_penjualan`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `pasok`
--
ALTER TABLE `pasok`
  ADD PRIMARY KEY (`id_pasok`),
  ADD KEY `id_distributor` (`id_distributor`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `id_kasir` (`id_kasir`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `detail_pasok`
--
ALTER TABLE `detail_pasok`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasok`
--
ALTER TABLE `pasok`
  MODIFY `id_pasok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pasok`
--
ALTER TABLE `detail_pasok`
  ADD CONSTRAINT `detail_pasok_ibfk_1` FOREIGN KEY (`id_pasok`) REFERENCES `pasok` (`id_pasok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pasok_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_penjualan_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasok`
--
ALTER TABLE `pasok`
  ADD CONSTRAINT `pasok_ibfk_1` FOREIGN KEY (`id_distributor`) REFERENCES `distributor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
