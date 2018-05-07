CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL auto_increment,
  `send_to` int(5) NOT NULL,
  `send_by` int(3) NOT NULL,
  `message` tinytext NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`chat_id`),
  KEY `sent_to` (`send_to`),
  KEY `send_by` (`send_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `send_to`, `send_by`, `message`, `time`) VALUES
(1, 2, 3, 'Selamat Pagi pak', '2018-03-31 07:42:02'),
(2, 3, 2, 'Pagi', '2018-03-31 07:42:49'),
(3, 2, 3, 'Besok bapak ada waktu tidak ? saya mau bimbingan', '2018-03-31 07:43:43'),
(4, 3, 2, 'saya free besok, silahkan datang saja kerumah saya', '2018-03-31 07:45:06'),
(5, 2, 3, 'Siap pak..', '2018-03-31 07:45:54'),
(6, 2, 3, '', '2018-03-31 07:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `detail_mapel`
--

CREATE TABLE IF NOT EXISTS `detail_mapel` (
  `id_detail_mapel` int(11) NOT NULL auto_increment,
  `id_mapel` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_detail_mapel`),
  KEY `id_siswa` (`id_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `detail_mapel`
--


-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  KEY `id_kelas` (`id_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama`) VALUES
(0, 'TI-2C');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `id_mapel` int(11) NOT NULL auto_increment,
  `nama_mapel` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_mapel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Kimia');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE IF NOT EXISTS `orangtua` (
  `id_ortu` int(11) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_hp` int(20) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY  (`id_ortu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id_ortu`, `nama`, `username`, `password`, `jenis_kelamin`, `no_hp`, `alamat`) VALUES
(1, 'diyah', 'ayuamaliyah', '123', 'perempuan', 1928190, 'bandung');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE IF NOT EXISTS `pengajar` (
  `id_pengajar` int(11) NOT NULL auto_increment,
  `NIP` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_hp` int(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  PRIMARY KEY  (`id_pengajar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `NIP`, `nama`, `alamat`, `jenis_kelamin`, `no_hp`, `password`, `username`) VALUES
(1, 8958, 'pak imam', 'gjgjfhhfdgg', 'laki-laki', 833928, 'imam', 'imam'),
(2, 24, 'fsfs', 'sf', 'laki-laki', 53, 'sf', 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL auto_increment,
  `id_kelas` int(11) NOT NULL,
  `NIS` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY  (`id_siswa`),
  KEY `id_siswa` (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `NIS`, `nama`, `username`, `password`, `jenis_kelamin`, `alamat`) VALUES
(1, 0, 1603000, 'Widi', 'widi', 'widi', 'perempuan', 'lohbener'),
(2, 0, 8987, 'lulu', 'lulu', 'sdhjsd', 'perempuan', 'cvcvncv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','pengajar','pelajar','ortu') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin'),
(2, 'Dr. Ir. Bob Foster, M.M', 'pengajar', 'pengajar', 'pengajar'),
(3, 'Muhammad Bimo Abditama', 'pelajar', 'pelajar', 'pelajar'),
(4, 'Firda Faradila', 'ortu', 'ortu', 'ortu');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`send_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `con_chat` FOREIGN KEY (`send_by`) REFERENCES `users` (`id`);
