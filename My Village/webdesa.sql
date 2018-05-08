-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 09:08 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdesa`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`ID` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`ID`, `Judul`, `Penulis`, `Isi`) VALUES
(3, 'Ratna Kei', 'Ratnaaks', 'RatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaksRatnaaks'),
(4, 'Desa Adipasir', 'Dwi Nur Ngaziza', 'Adipasir merupakan salah satu nama desa di Kecamatan Rakit Kabupaten Banjarnegara. Di desa ini terdapat satu makam kuno yang konon merupakan makam seseorang bernama Adipati Anom. Diceritakan dalam Babad Adipasir, Adipati Anom merupakan salah seorang prajurit Pangeran Diponegoro di kerajaan Mataram. Kala itu saat terjadi perang besar-besaran di bumi Mataram antara warga pribumi melawan penjajah Belanda, Adipati Anom dengan istrinya bersama dengan keempat sahabatnya pergi meninggalkan Mataram untuk mencari keselamatan. Keempat sahabatnya tersebut bernama Tumenggung Suradipraya, Kyai Bunut, Eyang Jlantah, dan Kyai Budug. Ditengah perjalanan pelariannya, Adipati Anom dan istri terpisah dengan keempat sahabatnya. Agar tidak terpisah terlalu jauh dan kehilangan jejaknya, keempat sahabat Adipati Anom tersebut menghentikan pelariannya dan mendirikan tenda disuatu lokasi. Di tenda tersebut pula keempat sahabat tersebut membuat rencana untuk kembali menyerang para penjajah Belanda yang telah membuat kekacauan di bumi Mataram. Pada suatu saat sedang berada didalam tenda, Tumenggung Suradipraya tiba-tiba teringat kepada Adipati Anom yang terpencar entah kemana, kenapa belum juga sampai ke lokasi keempat sahabatnya tersebut membuat tenda. Pada saat suasana gelisah menyelimuti keempat orang tersebut dikarenakan Adipati Anom tak kunjung muncul, Tumenggung Suradipraya meramal bahwa nantinya tidak lama lagi Adipati Anom beserta isterinya akan segera sampai ke tempat ini. Tak kunjung sampainya Adipati Anom beserta istri ke lokasi keempat sahabatnya ternyata disebabkan oleh suatu insiden. Disaat sedang mengendarai kuda tepat berada dibelakang keempat sahabatnya, ternyata istri Adipati Anom yang kala itu membonceng kudanya, jatuh ditengah jalan. Karena tidak mungkin meninggalkan istrinya, Adipati Anom berhenti, sementara keempat sahabatnya itu tidak mengetahui insiden tersebut karena mereka melaju dengan sangat cepat dengan menaiki kudanya masing-masing. Dikarenakan terjatuh dari kuda, istri Adipati Anom merintih menangis kesakitan. Namun bersamaan dengan itu, istri Adipati Anom juga menggemgam sesuatu ditangannya, dan ternyata sesatu tersebut adalah sebuah kantong berisi emas, intan, dan berlian yang ia ketemukan ketika terjatuh dari kuda tadi. Dari situ Adipati Anom tahu, ternyata istrinya tidak jatuh dari kuda, melainkan sengaja menjatuhkan diri karena melihat kentong berisi emas, intan, dan berlian tergeletak tak bertuan dan ingin memilikinya sebagai bekal diperjalanan. Mengetahui hal tersebut, Adipati Anom marah dan meminta kepada istrinya untuk meninggalkan kantong tersebut ditempat semula. Karena kantong tersebut, Adipati Anom jadi terpisah dengan keempat sahabatnya, jadi kantong tersebut berpotensi merusak jalannya perjuangan. Menuruti perkataan suaminya, istri Adipati Anom pun tidak jadi mengambil kantong tersebut, dan menempatkannya di tempat semula saat ia mengambilnya. Dan mereka berdua kembali meneruskan perjalanan untuk menyusul keempat sahabatnya. Kurang lebih seharian berkuda, Adipati Anom beserta istri berhenti disuatu desa dan bertemulah ia dengan keempat sahabatnya yang saat itu sedang bermusyawarah di dalam tenda. Ramalan Tumenggung Suradipraya akan kedatangan Adipati Anom beserta istri dalam waktu dekat pun terbukti. Dan atas peristiwa tersebut, dinamailah lokasi tersebut dengan nama ADIPASIR yang berasal dari kata -ADI yaitu penggalan dari nama Adipati Anom, -PAS berarti tepat atau benar yaitu terkait ramalan Tumenggung Suradipraya yang meramal kedatangan Adipati Anom terbukti pas atau tepat atau benar, -SIR yaitu dari kata taksiran atau ramalan. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'maya', 'maya@gmail.com', '123'),
(5, 'Ratna', 'Ratnakei@gmail.com', '0000'),
(6, 'maya1', 'maya@gmail.com', '234'),
(7, '123', 'asdsa', '123'),
(8, 'Alfieka', 'Alfieka@gmail.com', '12345'),
(9, 'rilly', 'dwisyafrillya07@gmail.com', '1234'),
(10, 'sds', 'asdads', '123'),
(11, 'tes123', 'maya', '123'),
(12, 'Uswatun', 'Uswatun@gmail.com', '00000'),
(13, '', 'maya', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
