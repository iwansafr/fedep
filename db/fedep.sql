SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `pel_evaluasi`;
CREATE TABLE `pel_evaluasi` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `keaktifan` text NOT NULL,
  `kesesuaian` text NOT NULL,
  `sinkronisasi` text NOT NULL,
  `implementasi` text NOT NULL,
  `finansial` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `evaluasi` text NOT NULL,
  `v_keaktifan` tinyint(1) NOT NULL DEFAULT '0',
  `v_kesesuaian` tinyint(1) NOT NULL DEFAULT '0',
  `v_sinkronisasi` tinyint(1) NOT NULL DEFAULT '0',
  `v_implementasi` tinyint(1) NOT NULL DEFAULT '0',
  `v_finansial` tinyint(1) NOT NULL DEFAULT '0',
  `v_rekomendasi` tinyint(1) NOT NULL DEFAULT '0',
  `v_evaluasi` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` tinyint(1) NOT NULL DEFAULT '0',
  `layak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `pel_kelembagaan`;
CREATE TABLE `pel_kelembagaan` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `visi_misi` varchar(255) NOT NULL,
  `dok_sk` varchar(255) NOT NULL,
  `dok_sekretariat` varchar(255) NOT NULL,
  `dok_pembiayaan` varchar(255) NOT NULL,
  `v_visi_misi` tinyint(1) NOT NULL DEFAULT '0',
  `v_dok_sk` tinyint(1) NOT NULL DEFAULT '0',
  `v_dok_sekretariat` tinyint(1) NOT NULL DEFAULT '0',
  `v_dok_pembiayaan` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` tinyint(1) NOT NULL DEFAULT '0',
  `layak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `pel_kondisi`;
CREATE TABLE `pel_kondisi` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL,
  `potensi` varchar(255) NOT NULL,
  `klasifikasi` varchar(255) NOT NULL,
  `inovasi` varchar(255) NOT NULL,
  `v_kondisi` tinyint(1) NOT NULL DEFAULT '0',
  `v_hasil` tinyint(1) NOT NULL DEFAULT '0',
  `v_potensi` tinyint(1) NOT NULL DEFAULT '0',
  `v_klasifikasi` tinyint(1) NOT NULL DEFAULT '0',
  `v_inovasi` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` tinyint(1) NOT NULL DEFAULT '0',
  `layak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `pel_pelaksanaan`;
CREATE TABLE `pel_pelaksanaan` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `frekuensi` varchar(255) NOT NULL,
  `partisipasi` varchar(255) NOT NULL,
  `agenda` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `pembiayaan` varchar(255) NOT NULL,
  `v_frekuensi` tinyint(1) NOT NULL DEFAULT '0',
  `v_partisipasi` tinyint(1) NOT NULL DEFAULT '0',
  `v_agenda` tinyint(1) NOT NULL DEFAULT '0',
  `v_tindak_lanjut` tinyint(1) NOT NULL DEFAULT '0',
  `v_pembiayaan` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` tinyint(1) NOT NULL DEFAULT '0',
  `layak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS `pel_rencana`;
CREATE TABLE `pel_rencana` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `produk` varchar(255) NOT NULL,
  `proses` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `v_produk` tinyint(1) NOT NULL DEFAULT '0',
  `v_proses` tinyint(1) NOT NULL DEFAULT '0',
  `v_instansi` tinyint(1) NOT NULL DEFAULT '0',
  `v_tindakan` tinyint(1) NOT NULL DEFAULT '0',
  `nilai` tinyint(1) NOT NULL DEFAULT '0',
  `layak` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


ALTER TABLE `pel_evaluasi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pel_kelembagaan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pel_kondisi`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pel_pelaksanaan`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pel_rencana`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `pel_evaluasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `pel_kelembagaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `pel_kondisi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `pel_pelaksanaan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

ALTER TABLE `pel_rencana`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
