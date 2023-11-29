-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 06:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `du_an1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `ten_banner` varchar(255) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `lien_ket` varchar(255) DEFAULT NULL,
  `ngay_tao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `ten_banner`, `hinh_anh`, `lien_ket`, `ngay_tao`) VALUES
(1, 'Khuyến mãi danh cho phái nam', 'banner2.jpg', 'index.php?act=listspdm&ma_loai=24', '2023-11-18 18:05:18'),
(2, 'Sale áo thun nam giảm tới 50%', 'banner3.jpg', 'index.php?act=listspdm&ma_loai=1', '2023-11-18 18:05:23'),
(3, 'Black Firday giảm giá tới 60%', 'banner4.jpg', 'index.php?act=listspdm&ma_loai=all', '2023-11-18 18:05:26'),
(4, 'Bộ sưu tập cho phái nữ mới', 'Property 1=Default.jpg', 'index.php?act=listspdm&ma_loai=32', '2023-11-18 18:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_binh_luan` int(11) NOT NULL,
  `ma_khach_hang` int(11) DEFAULT NULL,
  `ma_san_pham` int(11) DEFAULT NULL,
  `noi_dung` varchar(200) DEFAULT NULL,
  `anhbl` varchar(200) DEFAULT NULL,
  `ngay_binh_luan` date DEFAULT NULL,
  `trang_thai` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binh_luan`
--

INSERT INTO `binh_luan` (`ma_binh_luan`, `ma_khach_hang`, `ma_san_pham`, `noi_dung`, `anhbl`, `ngay_binh_luan`, `trang_thai`) VALUES
(1, 3, 6, 'tuyet voi', NULL, '2023-11-17', 0),
(2, 3, 6, 'te', NULL, '2023-11-15', 0),
(3, 4, 7, 'Sản phẩm quá tệ', NULL, '2023-11-22', 0),
(4, 1, 6, 'Sản phầm đẹp', 'Không có ảnh', '2023-11-23', 1),
(5, 1, 6, 'Sản phầm đẹp', '019ba270c654412ce7a72e4b055fefc9.jpg', '2023-11-23', 0),
(6, 1, 6, 'hay', 'Không có ảnh', '2023-11-23', 1),
(7, 1, 26, 'Sản phẩm tốt làm chị ơi', ' ', '2023-11-23', 1),
(8, 1, 26, 'Sản phẩm tốt làm chị ơi', ' ', '2023-11-23', 1),
(9, 1, 26, 'Sản phẩm tốt làm chị ơi', ' ', '2023-11-23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `ma_chi_tiet_don_hang` int(11) NOT NULL,
  `ma_don_hang` int(11) DEFAULT NULL,
  `ma_san_pham` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL,
  `don_gia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`ma_chi_tiet_don_hang`, `ma_don_hang`, `ma_san_pham`, `so_luong`, `don_gia`) VALUES
(1, 1, 6, 2, 85000),
(2, 1, 7, 1, 75000),
(3, 2, 6, 2, 85000),
(4, 3, 6, 3, 85000),
(5, 4, 7, 1, 85000),
(6, 5, 7, 1, 120000),
(7, 6, 7, 1, 120000),
(8, 7, 7, 1, 85000),
(9, 8, 7, 1, 85000),
(10, 9, 7, 1, 85000),
(11, 9, 16, 1, 299000);

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `ma_don_hang` int(11) NOT NULL,
  `ngay_dat_hang` date DEFAULT current_timestamp(),
  `ma_khach_hang` int(11) DEFAULT NULL,
  `trang_thai_don` tinyint(2) DEFAULT 0 COMMENT '0 - Cần xác thực , 1 - Đã thanh toán, 2 - Chưa thanh toán, 3- Đã Hủy',
  `trang_thai_ship` tinyint(2) DEFAULT NULL,
  `phuong_thuc_thanh_toan` tinyint(2) NOT NULL COMMENT '0 - COD , 1- Tin dung , 2 - VNpay',
  `ghi_chu` varchar(2000) NOT NULL,
  `ghi_chu_kh` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`ma_don_hang`, `ngay_dat_hang`, `ma_khach_hang`, `trang_thai_don`, `trang_thai_ship`, `phuong_thuc_thanh_toan`, `ghi_chu`, `ghi_chu_kh`) VALUES
(1, '2023-11-18', 3, 1, 0, 0, '', 'Hoodie chọn mình size XL và mầu đỏ nhé\r\nCả quần cũng vậy'),
(2, '2023-11-17', 4, 0, 0, 2, 'Đơn hàng bị treo vì khách hàng chưa cập nhật thông tin', '0'),
(3, '2023-11-01', 6, 3, 0, 1, '', '0'),
(4, '2023-11-20', 6, 1, 0, 3, '', ''),
(8, '2023-11-25', 3, 2, NULL, 0, '', ''),
(9, '2023-11-25', 3, 0, NULL, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_khach_hang` varchar(200) DEFAULT NULL,
  `dia_chi` varchar(200) DEFAULT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mat_khau` varchar(200) DEFAULT NULL,
  `avt` varchar(200) DEFAULT 'noavt.jpg',
  `trang_thai` tinyint(2) DEFAULT 0,
  `quyen` tinyint(2) DEFAULT 3,
  `ma_nhan_vien` varchar(10) DEFAULT NULL,
  `xoa` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_khach_hang`, `dia_chi`, `sdt`, `email`, `mat_khau`, `avt`, `trang_thai`, `quyen`, `ma_nhan_vien`, `xoa`) VALUES
(1, 'Đỗ Hoàng Anh', NULL, NULL, 'baoptph37935@gmail.com', '12345@', '299117741_169295755622286_528427977354444753_n.jpg', 0, 1, 'PH37935', 0),
(2, 'Nhan vien 1', NULL, NULL, 'nhanvien1@webmaster.com', '12345', 'noavt.jpg', 1, 2, 'PH31236', 0),
(3, 'Khánh', 'Ngõ 67 Phùng Khoang, Hà Đông, Hà Nội', '0128921443', 'khachhang3@webmaster.com', '123456', 'F_EvePAaEAAyXbK.jpg', 1, 3, NULL, 0),
(4, 'khachhang4', '', '', 'khachhang4@example.com', '12345', 'noavt.jpg', 0, 3, NULL, 1),
(5, 'Khách hàng 5', '', '', 'khachhang4@webmaster.com', '12345', '', 2, 3, NULL, 0),
(6, 'Khách hàng 6', '', '', 'khachhang6@webmaster.com', '123456', '299117741_169295755622286_528427977354444753_n.jpg', 1, 3, NULL, 0),
(7, 'Nguyễn Thị Nguyệt Ánh', '', '', 'anhntn21@webmaster.com', '12345', '299117741_169295755622286_528427977354444753_n.jpg', 0, 2, 'PH37934', 0),
(8, 'Thúy Nga', 'Ngõ 21, Phạm Hùng', '087113214', 'thuyngant@webmaster.com', '1123', 'F_EvePAaEAAyXbK.jpg', 0, 2, 'ngant1123', 0),
(9, 'Nguyễn Việt Anh', NULL, '0987776543', 'diablo41@webmaster.com', '12345', 'noavt.jpg', 0, 3, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `ten_doanh_nghiep` varchar(200) NOT NULL,
  `dia_chi` varchar(200) DEFAULT NULL,
  `sdt` int(11) DEFAULT NULL,
  `logo` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `trang_thai` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`id_lien_he`, `ten_doanh_nghiep`, `dia_chi`, `sdt`, `logo`, `email`, `trang_thai`) VALUES
(1, 'XShop', '17, Trịnh Văn Bô , Nam Từ Liêm, Hà Nội', 981234567, 'logo.png', 'xshop@webmaster.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai_hang`
--

CREATE TABLE `loai_hang` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) DEFAULT NULL,
  `anh_loai` varchar(200) NOT NULL,
  `trang_thai` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_hang`
--

INSERT INTO `loai_hang` (`ma_loai`, `ten_loai`, `anh_loai`, `trang_thai`) VALUES
(1, 'Áo Thun nam', '', 1),
(2, 'xoa', '', 1),
(3, 'Quần Jean', '', 1),
(4, 'Jean nữ', '', 1),
(6, 'Hoodie', '', 1),
(7, 'Áo sơ mi nam', '', 1),
(8, 'Áo sơ mi nữ', '', 1),
(9, 'Áo thun nam', '', 1),
(10, 'Áo phông nam', '', 1),
(11, 'Áo khoác họa tiết nam', '', 1),
(12, 'Áo Hoddie nam', '', 1),
(13, 'Áo thun nữ', '', 1),
(14, 'áo phông họa tiết nữ', '', 1),
(15, 'Quần dài nam', '', 1),
(16, 'Quần denim indigo nam', '', 1),
(17, 'Áo Polo cổ thường nam', '', 1),
(18, 'Áo Khoác Giả Lông Cừu Nam', '', 1),
(19, 'Áo thun Co Giãn nam', '', 1),
(20, 'Áo Thun Nam', '', 1),
(21, 'Sản Phẩm Mới Nam', '', 0),
(22, 'Đồ Mặc Ngoài Nam', '', 0),
(23, 'Quần Nam', 'Rectangle 4311.png', 0),
(24, 'Áo Nam', 'hmgoepprod (77).jpg', 0),
(25, 'Đồ Mặc Nhà Nam', '', 0),
(26, 'Phụ Kiện Nam', '', 0),
(27, 'Khuyến Mãi Nam', '', 1),
(28, 'Sản Phẩm Mới Nữ', '', 0),
(29, 'Đồ Mặc Ngoài Nữ', '', 0),
(30, 'Quần Nữ', '', 0),
(31, 'Áo Nữ', 'hmgoepprod (86).jpg', 0),
(32, 'Dầm & Chân Váy Nữ', 'hmgoepprod (33).jpg', 0),
(33, 'Đồ Mặc Nhà Nữ', '', 0),
(34, 'Phụ Kiện Nữ', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ma_giam_gia`
--

CREATE TABLE `ma_giam_gia` (
  `id_giam_gia` int(11) NOT NULL,
  `ma_giam_gia` varchar(25) DEFAULT NULL,
  `noi_dung` varchar(100) DEFAULT NULL,
  `so_tien_giam` double NOT NULL,
  `ngay_het_han` date DEFAULT NULL,
  `trang_thai` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ma_giam_gia`
--

INSERT INTO `ma_giam_gia` (`id_giam_gia`, `ma_giam_gia`, `noi_dung`, `so_tien_giam`, `ngay_het_han`, `trang_thai`) VALUES
(1, 'NEWMEM20', 'Giảm 20.000 VND Cho khách hàng mới', 20000, '2023-12-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `quyen` tinyint(2) NOT NULL,
  `ten_quyen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`quyen`, `ten_quyen`) VALUES
(1, 'Admin'),
(2, 'nhan vien'),
(3, 'khach hang'),
(4, 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(200) DEFAULT NULL,
  `ma_loai` int(11) DEFAULT NULL,
  `mo_ta` varchar(2000) DEFAULT NULL,
  `ngay_them` date DEFAULT NULL,
  `don_gia` double DEFAULT NULL,
  `giam_gia` double DEFAULT NULL,
  `so_luong` int(10) DEFAULT NULL,
  `thuong_hieu` varchar(200) NOT NULL,
  `luot_xem` int(10) DEFAULT 0,
  `trang_thai` tinyint(2) DEFAULT 0,
  `khuyen_mai` tinyint(2) NOT NULL DEFAULT 0 COMMENT ' 1 - sale',
  `anh` varchar(200) DEFAULT NULL,
  `anh1` varchar(200) DEFAULT NULL,
  `anh2` varchar(200) DEFAULT NULL,
  `anh3` varchar(200) DEFAULT NULL,
  `anh4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai`, `mo_ta`, `ngay_them`, `don_gia`, `giam_gia`, `so_luong`, `thuong_hieu`, `luot_xem`, `trang_thai`, `khuyen_mai`, `anh`, `anh1`, `anh2`, `anh3`, `anh4`) VALUES
(4, 'Vớ thể thao dày dặn chuyên dụng dành cho nam 1232', 1, '<p>llmfaoq</p>', '2023-11-28', 120000, 114000, 0, 'vảchar', 70, 0, 0, '75759e522dde739b7a01ae8390a4916a.jpg', '509eb53cbfddde1ce31e490ea85cc95b.jpg', 'noimage.jpg', 'noimage.jpg', 'noimage.jpg'),
(6, 'Quần nam Quần đũi dài nam ống suông Form Slimfit', 1, '<ul>\r\n<li>Quần đũi nam form Slimfif hot 2020 madein Việt Nam</li>\r\n<li>Chất liệu: Vải đũi lụa co giãn, mặc mát và thoáng.</li>\r\n<li>- Thiết kế: cạp pha chun c&oacute; khuy c&agrave;i co gi&atilde;n tốt thoải m&aacute;i khi vận động có đỉa đ&ecirc;̉ đeo thắt lưng,2 t&uacute;i trước,1 t&uacute;i sau, &ocirc;́ng xu&ocirc;ng đơn giản năng động.</li>\r\n<li>- Chất vải đũi nhẹ,tho&aacute;ng m&aacute;t,dễ giặt,nhanh kh&ocirc;,bền m&agrave;u - Kiểu d&aacute;ng: Form slimfit &ocirc;m gọn mặc đứng dáng, khỏe khoắn, mặc l&ecirc;n form, dễ phối đồ.</li>\r\n</ul>\r\n<p>- Màu sắc: Đen,Ch&igrave;,Xanh Than,Xanh R&ecirc;u,Ghi S&aacute;ng,Trắng - Size: M - 3XL từ(48 - 85kg) M từ 48 - 56kg L 57 - 64kg XL 65 - 71kg 2XL 72 - 79kg 3XL 80</p>\r\n<p>- 85kg Shop cam kết h&agrave;ng giống h&igrave;nh ảnh m&ocirc; tả,giao đ&uacute;ng m&agrave;u đ&uacute;ng size kh&aacute;ch đặt Hỗ trợ đổi trả nếu h&agrave;ng lỗi,kh&ocirc;ng vừa size</p>', '2023-11-15', 150000, 75000, 123, 'Form Slimfit ', 257, 0, 0, '75759e522dde739b7a01ae8390a4916a.jpg', '7e94f37f096068c6c1f85f897319f566.jpg', '1bf993ef64e2ed7d58a16dc49a3d2ea2.jpg', '509eb53cbfddde1ce31e490ea85cc95b.jpg', '7e94f37f096068c6c1f85f897319f566.jpg'),
(7, 'ÁO HOODIE UNISEX Nam Nữ BASIC CAO CẤP', 6, '<p>&Aacute;o Hoodie Nỉ BASIC với Chất liệu Nỉ Ngoại tốt; mang phong c&aacute;ch thời trang thời thượng c&aacute;c bạn trẻ; đặc biệt kh&ocirc;ng những gi&uacute;p bạn giữ ấm trong m&ugrave;a lạnh m&agrave; c&ograve;n c&oacute; thể chống nắng, chống gi&oacute;, chống bụi, chống r&eacute;t, chống tia UV cực tốt, rất tiện lợi nh&eacute;!!! (Được sử dụng nhiều trong dịp Lễ hội, Đi chơi, Da ngoại, Dạo phố, Du lịch...)???? Fullsize: Từ 40-95kg mặc đẹp .</p>\r\n<p>M&agrave;u sắc: 9 m&agrave;u Y h&igrave;nh.</p>\r\n<p>Đường may kỹ, tinh tế, sắc xảo.</p>\r\n<p>Form chuẩn Unisex Nam Nữ Couple đều mặc được.</p>\r\n<p>Giao h&agrave;ng tận nơi. Nhận h&agrave;ng rồi thanh to&aacute;n.</p>\r\n<p>&nbsp;Cam kết: Chất lượng v&agrave; Mẫu m&atilde; Sản phẩm giống với H&igrave;nh ảnh.</p>\r\n<p>Trả h&agrave;ng ho&agrave;n tiền trong 3 ng&agrave;y nếu sản phẩm bị lỗi.&nbsp;</p>', '2023-11-18', 120000, 85000, 123, 'UNISEX', 44, 0, 0, 'vn-11134207-7qukw-lezdhmttj1qi7a.jpg', '2992abb983aa19ae62b80d1eef05125f.jpg', '019ba270c654412ce7a72e4b055fefc9.jpg', '7649d0c8682819c61bbfb2e356d67d5e.jpg', 'e32d27bf219c88f421e142a222f63044.jpg'),
(8, 'Áo thun Relaxed Fit', 21, '<p>&Aacute;o thun d&aacute;ng thoải m&aacute;i bằng cotton jersey nặng c&oacute; cổ tr&ograve;n.</p>\r\n<div>M&atilde; số sản phẩm:0608945094</div>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay &aacute;o ngắn</div>\r\n<div>Độ vừa vặn:&nbsp;Thoải m&aacute;i</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ tr&ograve;n</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u be nhạt, M&agrave;u trơn</div>\r\n<div>Nh&oacute;m kh&aacute;ch h&agrave;ng:&nbsp;BASICS</div>', '2023-11-21', 300000, 250000, 20, 'Glowing', 10, 0, 0, 'hmgoepprod (2).jpg', 'hmgoepprod.jpg', 'hmgoepprod (1).jpg', 'hmgoepprod (3).jpg', 'hmgoepprod (4).jpg'),
(9, 'Áo hoodie kéo khoá Oversized Fit', 22, '<p>&Aacute;o hoodie k&eacute;o kho&aacute; d&aacute;ng thụng bằng vải nỉ l&agrave;m từ cotton pha với mặt tr&aacute;i chải x&ugrave; mềm. Mũ c&oacute; d&acirc;y r&uacute;t, kho&aacute; k&eacute;o dọc th&acirc;n trước, t&uacute;i kangaroo, cổ tay v&agrave; gấu bo g&acirc;n nổi.</p>\r\n<div>M&atilde; số sản phẩm:1122929009</div>\r\n<div>Chiều cao:&nbsp;Đ&ugrave;i</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;Qu&aacute; cỡ</div>\r\n<div>Phong c&aacute;ch:&nbsp;&Aacute;o kho&aacute;c c&oacute; mũ</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u x&aacute;m nhạt đốm</div>\r\n<div>Nh&oacute;m kh&aacute;ch h&agrave;ng:&nbsp;BASICS</div>', '2023-11-21', 800000, 100000, 30, 'Glowing', 40, 0, 0, 'hmgoepprod (7).jpg', 'hmgoepprod (6).jpg', 'hmgoepprod (7).jpg', 'hmgoepprod (8).jpg', 'hmgoepprod (9).jpg'),
(10, ' Áo khoác phao', 29, '<p>&Aacute;o kho&aacute;c phao ngắn dệt thoi chần b&ocirc;ng c&oacute; cổ đứng, kho&aacute; k&eacute;o dọc th&acirc;n trước v&agrave; t&uacute;i trước mổ viền. D&aacute;ng rộng với vai r&aacute;p trễ, cổ tay viền chun mảnh v&agrave; d&acirc;y r&uacute;t co gi&atilde;n c&oacute; n&uacute;t chặn ở gấu. C&oacute; lớp l&oacute;t.</p>\r\n<div>M&atilde; số sản phẩm:1161620001</div>\r\n<div>K&iacute;ch cỡ:Mặt sau: Chiều d&agrave;i: 52.5 cm (K&iacute;ch cỡ M/T), Vai: Rộng: 62.2 cm (K&iacute;ch cỡ M/T), Tay &aacute;o: Chiều d&agrave;i: 54.9 cm (K&iacute;ch cỡ M/T), Ngực: V&ograve;ng đầu: 128.5 cm (K&iacute;ch cỡ M/T)</div>\r\n<div>Chiều cao:&nbsp;Đ&ugrave;i</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ rộng</div>\r\n<div>Cổ &aacute;o:&nbsp;Cổ đứng</div>\r\n<div>Phong c&aacute;ch:&nbsp;&Aacute;o phao</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u đen, M&agrave;u trơn</div>\r\n<div>Nh&oacute;m kh&aacute;ch h&agrave;ng:&nbsp;DIVIDED</div>', '2023-11-21', 900000, 450000, 30, 'Glowing', 50, 0, 0, 'hmgoepprod (13).jpg', 'hmgoepprod (10).jpg', 'hmgoepprod (11).jpg', 'hmgoepprod (12).jpg', 'hmgoepprod (14).jpg'),
(11, 'Straight Regular Jeans', 23, '<p>Quần jean 5 t&uacute;i bằng cotton denim hơi co gi&atilde;n mang lại cảm gi&aacute;c thoải m&aacute;i. Ống su&ocirc;ng v&agrave; d&aacute;ng vừa từ cạp quần tới gấu mang lại cảm gi&aacute;c rộng r&atilde;i v&agrave; thoải m&aacute;i cho cả hai ống quần. Cạp thường v&agrave; nẹp kho&aacute; k&eacute;o. Đ&acirc;y l&agrave; loại vải denim c&oacute; độ bền cao.</p>\r\n<div>&nbsp;</div>\r\n<div>Chiều cao:&nbsp;D&agrave;i</div>\r\n<div>Chiều cao h&ocirc;ng:&nbsp;Cạp thường</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u xanh denim đậm, M&agrave;u trơn</div>\r\n<div>Nh&oacute;m kh&aacute;ch h&agrave;ng:&nbsp;DENIM</div>\r\n<div class=\"ddict_btn\" style=\"top: 100.4px; left: 221.925px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>', '2023-11-21', 800000, 400000, 50, 'Glowing', 0, 0, 0, 'hmgoepprod (20).jpg', 'hmgoepprod (21).jpg', 'hmgoepprod (22).jpg', 'hmgoepprod (23).jpg', 'hmgoepprod (24).jpg'),
(12, 'Quần nhung tăm Slim Fit', 23, '<p>Quần d&agrave;i ống ly đứng bằng vải nhung tăm với cạp quần c&oacute; kho&aacute; m&oacute;c c&agrave;i ẩn v&agrave; nẹp kho&aacute; k&eacute;o. T&uacute;i ch&eacute;o hai b&ecirc;n v&agrave; t&uacute;i sau mổ viền c&oacute; khuy. Slim Fit (D&aacute;ng &ocirc;m gọn) - kiểu d&aacute;ng &ocirc;m s&aacute;t ở đ&ugrave;i v&agrave; đầu gối tạo d&aacute;ng quần vừa vặn.</p>\r\n<div>&nbsp;</div>\r\n<div>Chiều cao:&nbsp;D&agrave;i</div>\r\n<div>Chiều cao h&ocirc;ng:&nbsp;Cạp thường</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m nhẹ</div>\r\n<div>Phong c&aacute;ch:&nbsp;Quần ống điếu thuốc</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u đen, M&agrave;u trơn</div>', '2023-11-23', 999000, 820000, 100, 'Glowing', 46, 0, 0, 'hmgoepprod (1).jpg', 'hmgoepprod.jpg', 'hmgoepprod (3).jpg', 'hmgoepprod (4).jpg', 'hmgoepprod (2).jpg'),
(13, 'Quần dài Slim Fit', 23, '<p>Quần d&agrave;i d&aacute;ng &ocirc;m gọn dệt ch&eacute;o c&oacute; c&agrave;i kho&aacute; m&oacute;c c&agrave;i ẩn ở bản cạp v&agrave; nẹp kho&aacute; k&eacute;o. T&uacute;i hai b&ecirc;n v&agrave; t&uacute;i sau mổ viền c&agrave;i khuy.</p>\r\n<div>&nbsp;</div>\r\n<div>K&iacute;ch cỡ:Ch&acirc;n trong: Chiều d&agrave;i: 78.0 cm (K&iacute;ch cỡ 33L)</div>\r\n<div>Chiều cao:&nbsp;D&agrave;i</div>\r\n<div>Chiều cao h&ocirc;ng:&nbsp;Cạp thường</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m nhẹ</div>\r\n<div>Phong c&aacute;ch:&nbsp;Quần ống điếu thuốc</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u x&aacute;m, Kẻ &ocirc;</div>\r\n<div>&nbsp;</div>', '2023-11-23', 900000, 100000, 140, 'Glowing', 80, 0, 0, 'hmgoepprod (5).jpg', 'hmgoepprod (6).jpg', 'hmgoepprod (7).jpg', 'hmgoepprod (8).jpg', 'hmgoepprod (9).jpg'),
(14, 'Quần tây Skinny Fit', 23, '<p>Quần t&acirc;y dệt thoi co gi&atilde;n c&oacute; kho&aacute; m&oacute;c c&agrave;i ẩn v&agrave; nẹp kho&aacute; k&eacute;o. D&aacute;ng b&oacute; với t&uacute;i hai b&ecirc;n rộng, &ocirc;m, t&uacute;i sau mổ một viền v&agrave; ống quần c&oacute; ly đứng.</p>\r\n<div>&nbsp;</div>\r\n<div>Chiều cao:&nbsp;D&agrave;i</div>\r\n<div>Chiều cao h&ocirc;ng:&nbsp;Cạp thường</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ b&oacute;</div>\r\n<div>Phong c&aacute;ch:&nbsp;Quần t&acirc;y</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u trơn</div>\r\n<div>&nbsp;</div>', '2023-11-23', 900000, 100000, 100, 'Glowing', 50, 0, 0, 'hmgoepprod (10).jpg', 'hmgoepprod (12).jpg', 'hmgoepprod (13).jpg', 'hmgoepprod (15).jpg', 'hmgoepprod (14).jpg'),
(15, 'Áo sơ mi Oxford Regular Fit', 24, '<p>&Aacute;o sơ mi d&aacute;ng vừa vải cotton Oxford c&oacute; cổ &aacute;o c&agrave;i khuy, nẹp khuy kiểu truyền thống, cầu vai ph&iacute;a sau v&agrave; một t&uacute;i ngực mở. Tay d&agrave;i với măng s&eacute;t c&agrave;i khuy v&agrave; nẹp tay &aacute;o c&oacute; khuy nối. Vạt hơi tr&ograve;n.</p>\r\n<div>&nbsp;</div>\r\n<div>K&iacute;ch cỡ:Tay &aacute;o: Chiều d&agrave;i: 66.5 cm (K&iacute;ch cỡ L/L), Mặt sau: Chiều d&agrave;i: 79.0 cm (K&iacute;ch cỡ L/L)</div>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>Cổ &aacute;o:&nbsp;Cổ &aacute;o c&agrave;i khuy</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u xanh l&aacute; đậm, M&agrave;u trơn</div>', '2023-11-23', 400000, 120000, 40, 'Glowing', 32, 0, 0, 'hmgoepprod (16).jpg', 'hmgoepprod (19).jpg', 'hmgoepprod (18).jpg', 'hmgoepprod (20).jpg', 'hmgoepprod (17).jpg'),
(16, 'Áo sơ mi dễ là Regular Fit', 24, '<p>&Aacute;o sơ mi bằng vải dệt thoi với bề mặt dễ l&agrave;. Cổ bẻ, nẹp khuy kiểu truyền thống, cầu vai ph&iacute;a sau v&agrave; vạt tr&ograve;n. Tay d&agrave;i với măng s&eacute;t c&agrave;i khuy điều chỉnh v&agrave; nẹp tay &aacute;o với khuy nối.</p>\r\n<div>&nbsp;</div>\r\n<div>K&iacute;ch cỡ:Mặt sau: Chiều d&agrave;i: 81.0 cm (K&iacute;ch cỡ L/L), Tay &aacute;o: Chiều d&agrave;i: 67.25 cm (K&iacute;ch cỡ L/L)</div>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>Cổ &aacute;o:&nbsp;Cổ bẻ</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u trắng, M&agrave;u trơn</div>', '2023-11-23', 499000, 299000, 90, 'Glowing', 59, 0, 0, 'hmgoepprod (21).jpg', 'hmgoepprod (22).jpg', 'hmgoepprod (23).jpg', 'hmgoepprod (24).jpg', 'hmgoepprod (25).jpg'),
(17, 'Váy chữ A', 32, '<p>V&aacute;y chữ A ngắn l&agrave;m từ viscose pha dệt thoi mỏng nhẹ. D&aacute;ng rộng với cổ chữ V v&agrave; tay b&oacute;ng bay d&agrave;i, phồng, cắt rắp lăng với cổ tay bo chun mảnh. Đường may nh&uacute;n vải dưới ngực tạo độ xếp rủ nhẹ. Kh&ocirc;ng c&oacute; lớp l&oacute;t.</p>\r\n<div>K&iacute;ch cỡ:Mặt sau: Chiều d&agrave;i: 84.5 cm (K&iacute;ch cỡ M/T), Tay &aacute;o: Chiều d&agrave;i: 74.0 cm (K&iacute;ch cỡ M/T)</div>\r\n<div>Chiều cao:&nbsp;Đ&ugrave;i</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ rộng</div>\r\n<div>Phong c&aacute;ch:&nbsp;Ch&acirc;n v&aacute;y chữ A</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ chữ V</div>\r\n<div>Kiểu tay &aacute;o:&nbsp;Ống tay bồng, Ống tay r&aacute;p vai</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u trắng/Xanh dương/Xanh dương nhạt, Hoa</div>', '2023-11-23', 500000, 330000, 120, 'Glowing', 92, 0, 0, 'hmgoepprod (26).jpg', 'hmgoepprod (28).jpg', 'hmgoepprod (29).jpg', 'hmgoepprod (30).jpg', 'hmgoepprod (31).jpg'),
(18, 'Váy có nút thắt', 32, '<p>V&aacute;y d&agrave;i ngang bắp ch&acirc;n bằng vải dệt thoi l&agrave;m từ viscose pha. Cổ chữ V v&agrave; d&acirc;y vai to bản với n&uacute;t thắt trang tr&iacute; ở ph&iacute;a trước. Đường may r&aacute;p co gi&atilde;n ở eo v&agrave; ch&acirc;n v&aacute;y hơi xo&egrave;. Kh&ocirc;ng c&oacute; lớp l&oacute;t.</p>\r\n<div>Size của người mẫu:&nbsp;Người mẫu cao 175cm/5\'9\" mặc size S</div>\r\n<div>Chiều cao:&nbsp;Midi</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;S&aacute;t n&aacute;ch</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ chữ V</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u xanh dương nhạt, M&agrave;u trơn</div>', '2023-11-23', 999000, 590000, 150, 'Glowing', 114, 0, 0, 'hmgoepprod (32).jpg', 'hmgoepprod (34).jpg', 'hmgoepprod (35).jpg', 'hmgoepprod (34).jpg', 'hmgoepprod (33).jpg'),
(19, 'Váy jersey rủ', 32, '<p>V&aacute;y &ocirc;m, d&agrave;i ngang bắp ch&acirc;n bằng jersey b&oacute;ng c&oacute; cổ r&ugrave;a v&agrave; tay d&agrave;i. Đường may nh&uacute;n vải hai b&ecirc;n tạo độ xếp rủ.</p>\r\n<div>K&iacute;ch cỡ:Mặt sau: Chiều d&agrave;i: 125.0 cm (K&iacute;ch cỡ M/T), Tay &aacute;o: Chiều d&agrave;i: 61.6 cm (K&iacute;ch cỡ M/T)</div>\r\n<div>Chiều cao:&nbsp;Midi</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ vừa</div>\r\n<div>Phong c&aacute;ch:&nbsp;Gấp nếp</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ lọ</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u be đậm, M&agrave;u trơn</div>', '2023-11-23', 999000, 750000, 200, 'Glowing', 2, 0, 0, 'hmgoepprod (37).jpg', 'hmgoepprod (38).jpg', 'hmgoepprod (39).jpg', 'hmgoepprod (39).jpg', 'hmgoepprod (40).jpg'),
(20, 'Váy sơ mi có thắt lưng buộc', 32, '<p>V&aacute;y d&agrave;i ngang bắp ch&acirc;n bằng vải dệt thoi c&oacute; cổ trụ, khuy ẩn dọc th&acirc;n trước v&agrave; tay c&aacute;nh dơi d&agrave;i với măng s&eacute;t c&agrave;i khuy. Thắt lưng buộc c&oacute; thể th&aacute;o rời ở eo. Kh&ocirc;ng c&oacute; lớp l&oacute;t.</p>\r\n<div>K&iacute;ch cỡ:Mặt sau: Chiều d&agrave;i: 125.0 cm (K&iacute;ch cỡ M/T)</div>\r\n<div>Chiều cao:&nbsp;Midi</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>Cổ &aacute;o:&nbsp;Cổ trụ&nbsp;</div>\r\n<div>Phong c&aacute;ch:&nbsp;Đầm sơ mi</div>\r\n<div>Kiểu tay &aacute;o:&nbsp;Ống tay c&aacute;nh dơi rộng</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u đen/Trắng, Kẻ sọc</div>', '2023-11-23', 1300000, 0, 198, 'Glowing', 1012, 0, 0, 'hmgoepprod (42).jpg', 'noimage.jpg', 'hmgoepprod (43).jpg', 'hmgoepprod (44).jpg', 'hmgoepprod (46).jpg'),
(21, 'Bộ 2 áo thun lửng ', 31, '<p>&Aacute;o thun &ocirc;m, lửng bằng cotton jersey mềm.</p>\r\n<div>C&aacute;i/Cặp:&nbsp;2</div>\r\n<div>Chiều cao:&nbsp;Lửng</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay &aacute;o ngắn</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ vừa</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u đen/Trắng, M&agrave;u trơn</div>', '2023-11-23', 400000, 300000, 120, 'Glowing', 100, 0, 0, 'hmgoepprod (47).jpg', 'hmgoepprod (48).jpg', 'hmgoepprod (49).jpg', 'hmgoepprod (50).jpg', 'hmgoepprod (51).jpg'),
(22, 'Áo jersey gân nổi', 29, '<p>&Aacute;o &ocirc;m bằng cotton jersey g&acirc;n nổi với cổ tr&ograve;n c&oacute; viền nhỏ. Tay d&agrave;i v&agrave; vạt ngang.</p>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ vừa</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ tr&ograve;n</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u be nhạt/Đen, Kẻ sọc</div>', '2023-11-23', 600000, 100000, 200, 'Glowing', 0, 0, 0, 'hmgoepprod (52).jpg', 'hmgoepprod (53).jpg', 'hmgoepprod (1).webp', 'hmgoepprod (2).webp', 'hmgoepprod (3).webp'),
(23, 'Khăn quàng cổ dệt thoi', 34, '<p>Khăn qu&agrave;ng cổ bằng vải dệt thoi c&oacute; tua rua dọc c&aacute;c cạnh ngắn.</p>\r\n<div>Trọng lượng:&nbsp;190 g</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u x&aacute;m nhạt, M&agrave;u trơn</div>', '2023-11-23', 299000, 150000, 200, 'Glowing', 0, 0, 0, 'hmgoepprod (55).jpg', 'hmgoepprod (56).jpg', 'hmgoepprod (57).jpg', 'hmgoepprod (59).jpg', 'hmgoepprod (55).jpg'),
(24, ' Mũ quả bông dệt vặn thừng', 34, '<p>Mũ dệt vặn thừng mềm c&oacute; quả b&ocirc;ng x&ugrave; b&ecirc;n tr&ecirc;n v&agrave; viền lật g&acirc;n nổi.</p>\r\n<div>Trọng lượng:&nbsp;128 g</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u be nhạt, M&agrave;u trơn</div>', '2023-11-23', 299000, 120000, 200, 'Glowing', 70, 0, 0, 'hmgoepprod (60).jpg', 'hmgoepprod (61).jpg', 'hmgoepprod (62).jpg', 'hmgoepprod (63).jpg', 'hmgoepprod (60).jpg'),
(25, 'Áo thun đính trang trí', 24, '<p>rabanne H&amp;M. &Aacute;o thun ngắn, d&aacute;ng &ocirc;m gọn bằng cotton jersey mềm đ&iacute;nh miếng trang tr&iacute; bằng cao su tr&ecirc;n ngực với logo của nh&agrave; thiết kế. Tay hến v&agrave; viền g&acirc;n nổi nhỏ m&agrave;u tương phản quanh cổ v&agrave; cổ tay.</p>\r\n<div>&nbsp;</div>\r\n<div>Chiều cao:&nbsp;Đ&ugrave;i</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay &aacute;o ngắn</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m nhẹ</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ tr&ograve;n</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u trắng/Xanh l&aacute;/Đen</div>', '2023-11-23', 399000, 260000, 100, 'Glowing', 108, 0, 0, 'hmgoepprod (68).jpg', 'hmgoepprod (64).jpg', 'hmgoepprod (66).jpg', 'hmgoepprod (67).jpg', 'hmgoepprod (65).jpg'),
(26, 'Áo thun in hình Oversized Fit', 24, '<p>&Aacute;o thun d&aacute;ng thụng bằng cotton jersey mềm c&oacute; hoạ tiết in ở th&acirc;n trước. Cổ viền g&acirc;n nổi, vai r&aacute;p trễ v&agrave; vạt ngang.</p>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay &aacute;o ngắn</div>\r\n<div>Độ vừa vặn:&nbsp;Qu&aacute; cỡ</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u cam/Hồng/T&iacute;m/Xanh l&aacute; nhạt, Papilio</div>', '2023-11-23', 400000, 160000, 200, 'Glowinhg', 128, 0, 0, 'hmgoepprod (69).jpg', 'hmgoepprod (70).jpg', 'hmgoepprod (71).jpg', 'hmgoepprod (72).jpg', 'hmgoepprod (73).jpg'),
(27, 'Áo khoác Regular Fit', 22, '<p>&Aacute;o kho&aacute;c bằng cotton pha dệt thoi c&oacute; cổ v&agrave; kho&aacute; k&eacute;o dọc th&acirc;n trước. D&aacute;ng vừa với tay d&agrave;i, cổ tay c&oacute; khuy, t&uacute;i ch&eacute;o ph&iacute;a trước c&agrave;i khuy bấm v&agrave; một t&uacute;i trong. C&oacute; lớp l&oacute;t.</p>\r\n<div>K&iacute;ch cỡ:Mặt trước: Chiều d&agrave;i: 71.0 cm (K&iacute;ch cỡ L/L), Tay &aacute;o: Chiều d&agrave;i: 67.0 cm (K&iacute;ch cỡ L/L), Vai: Rộng: 50.0 cm (K&iacute;ch cỡ L/L)</div>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay d&agrave;i</div>\r\n<div>Độ vừa vặn:&nbsp;&Ocirc;m vừa</div>\r\n<div>Cổ &aacute;o:&nbsp;Cổ bẻ</div>\r\n<div>Phong c&aacute;ch:&nbsp;&Aacute;o kho&aacute;c dạng sơ mi</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u be, M&agrave;u trơn</div>', '2023-11-23', 900000, 100000, 150, 'Glowing', 300, 0, 0, 'hmgoepprod (74).jpg', 'hmgoepprod (75).jpg', 'hmgoepprod (76).jpg', 'hmgoepprod (77).jpg', 'hmgoepprod (78).jpg'),
(28, 'Áo thun dáng thụng in hình', 31, '<p>&Aacute;o thun d&aacute;ng thụng bằng cotton jersey mềm, in h&igrave;nh c&oacute; viền g&acirc;n nổi quanh cổ v&agrave; vai r&aacute;p trễ.</p>\r\n<div>Chiều cao:&nbsp;Chiều d&agrave;i b&igrave;nh thường</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;Tay &aacute;o ngắn</div>\r\n<div>Độ vừa vặn:&nbsp;Qu&aacute; cỡ</div>\r\n<div>Đường viền cổ &aacute;o:&nbsp;Cổ tr&ograve;n</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u xanh bạc h&agrave;/T&iacute;m nhạt, L\'amour</div>', '2023-11-23', 400000, 200000, 200, 'Glowing', 300, 0, 0, 'hmgoepprod (79).jpg', 'hmgoepprod (80).jpg', 'hmgoepprod (81).jpg', 'hmgoepprod (82).jpg', 'hmgoepprod (84).jpg'),
(29, 'Áo không đối xứng may nhún vải', 31, '<p>&Aacute;o &ocirc;m, ngắn bằng jersey co gi&atilde;n với d&acirc;y vai to bản tr&ecirc;n một b&ecirc;n vai v&agrave; d&acirc;y vai k&eacute;p mảnh ở b&ecirc;n vai kia. Đường may nh&uacute;n vải lượn cong ph&iacute;a trước, đường may nh&uacute;n vải hai b&ecirc;n tạo d&aacute;ng hơi rủ.</p>\r\n<div>Chiều cao:&nbsp;Đ&ugrave;i</div>\r\n<div>Chiều d&agrave;i tay &aacute;o:&nbsp;S&aacute;t n&aacute;ch</div>\r\n<div>Độ vừa vặn:&nbsp;Cỡ vừa</div>\r\n<div>Phong c&aacute;ch:&nbsp;&Aacute;o hai d&acirc;y</div>\r\n<div>phẩm:1211362001Đường viền cổ &aacute;o: Cổ kh&ocirc;ng đối xứng</div>\r\n<div>M&ocirc; tả:&nbsp;M&agrave;u đen, M&agrave;u trơn</div>', '2023-11-23', 399000, 210000, 200, 'Glowing', 400, 0, 0, 'hmgoepprod (85).jpg', 'hmgoepprod (88).jpg', 'hmgoepprod (86).jpg', 'hmgoepprod (87).jpg', 'hmgoepprod (89).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_binh_luan`);

--
-- Indexes for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`ma_chi_tiet_don_hang`);

--
-- Indexes for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`ma_don_hang`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`),
  ADD KEY `FK_Quyen` (`quyen`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  ADD PRIMARY KEY (`id_giam_gia`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`quyen`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `ma_chi_tiet_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `ma_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ma_giam_gia`
--
ALTER TABLE `ma_giam_gia`
  MODIFY `id_giam_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `quyen` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `FK_Quyen` FOREIGN KEY (`quyen`) REFERENCES `quyen` (`quyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
