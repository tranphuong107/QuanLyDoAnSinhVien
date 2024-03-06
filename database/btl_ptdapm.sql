-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2023 lúc 03:27 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl_ptdapm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(10) UNSIGNED NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role_id` int(10) UNSIGNED NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`ID`, `UserName`, `Password`, `Role_id`, `User_id`, `Log_id`) VALUES
(1, '1951060701', '12334567', 3, 11, 1),
(2, '1951060702', '1234567', 3, 12, 1),
(3, '1951060703', '1234567', 3, 13, 1),
(4, '1951060704', '1234567', 3, 14, 1),
(5, '1951060705', '123457', 3, 15, 1),
(6, '1951060706', '1234567', 3, 16, 1),
(7, '1951060707', '1234567', 3, 17, 1),
(8, '1951060708', '1234567', 3, 18, 1),
(9, '1951060709', '1234567', 3, 19, 1),
(10, '1951060710', '1234567', 3, 20, 1),
(11, '12340001', '1234567', 2, 51, 1),
(12, '12340002', '1234567', 2, 52, 1),
(13, '12340003', '1234567', 2, 53, 1),
(14, '12340004', '1234567', 2, 54, 1),
(15, '12340005', '1234567', 2, 55, 2),
(16, '12340006', '1234567', 2, 56, 2),
(17, '12340007', '1234567', 2, 57, 2),
(18, '12340008', '1234567', 2, 58, 2),
(19, '12340009', '1234567', 2, 59, 3),
(20, '12340010', '1234567', 2, 60, 2),
(21, 'admin1', 'admin1', 1, 61, 3),
(22, 'admin2', 'admin2', 1, 62, 2),
(23, 'admin3', 'admin3', 1, 63, 3),
(24, 'admin4', 'admin4', 1, 64, 3),
(25, 'admin5', 'admin5', 1, 65, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Position` varchar(20) NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`ID`, `Position`, `User_id`) VALUES
(1, 'admin 1', 61),
(2, 'admin 2', 62),
(3, 'admin 3', 63),
(4, 'admin 4', 64),
(5, 'admin 5', 65);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `announcements`
--

CREATE TABLE `announcements` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Content` longtext NOT NULL,
  `Period_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `announcements`
--

INSERT INTO `announcements` (`ID`, `Title`, `Content`, `Period_id`, `Log_id`) VALUES
(1, 'Kết quả đăng kí đề tài Đồ án tốt nghiệp đợt 1 năm 2023', 'Đã có kết quả đăng kí đề tài Đồ án tốt nghiệp đợt 1 năm 2023, nhà trường đã gửi file danh sách kết quả cho sinh viên trên email trường cấp. ', 1, 1),
(2, 'Thông báo về giảng viên hướng dẫn', 'Giảng viên đã duyệt đề tài và đồng ý hướng dẫn. Liên hệ với giảng viên qua email: huyduc@tlu.edu.vn hoặc sdt: 0976123123.', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `ID` int(11) UNSIGNED NOT NULL,
  `ClassName` varchar(20) NOT NULL,
  `Major_id` int(10) UNSIGNED NOT NULL,
  `SG_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`ID`, `ClassName`, `Major_id`, `SG_id`) VALUES
(1, '61TH1', 1, 8),
(2, '61TH2', 1, 8),
(3, '61TH3', 1, 8),
(4, '61TH4', 1, 8),
(5, '61TH5', 1, 8),
(6, '61TH6', 1, 8),
(7, '61THNB', 1, 8),
(8, '61PM1', 3, 8),
(9, '61PM2', 3, 8),
(10, '61HT', 2, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `councils`
--

CREATE TABLE `councils` (
  `ID` int(11) UNSIGNED NOT NULL,
  `CouncilName` varchar(200) NOT NULL,
  `Period_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `councils`
--

INSERT INTO `councils` (`ID`, `CouncilName`, `Period_id`) VALUES
(1, 'CNTT1', 1),
(2, 'CNTT2', 1),
(3, 'CNTT3', 1),
(4, 'CNTT4', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `ID` int(10) UNSIGNED NOT NULL,
  `DepartmentName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`ID`, `DepartmentName`) VALUES
(1, 'Toán học'),
(2, 'Công nghệ phần mềm'),
(3, 'Hệ thống thông tin'),
(4, 'Mạng và An toàn Thông tin'),
(5, 'Tin học Kỹ thuật tính toán'),
(6, 'Trí tuệ nhân tạo');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_council`
--

CREATE TABLE `detail_council` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Council_id` int(10) UNSIGNED NOT NULL,
  `Lecturer_id` int(10) UNSIGNED NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_council`
--

INSERT INTO `detail_council` (`ID`, `Council_id`, `Lecturer_id`, `Position`) VALUES
(1, 1, 1, 'Chủ tịch hội đồng'),
(2, 1, 2, 'Thư kí'),
(3, 1, 3, 'Thành viên '),
(4, 1, 4, 'Thành viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_major`
--

CREATE TABLE `detail_major` (
  `ID` int(10) UNSIGNED NOT NULL,
  `SG_id` int(10) UNSIGNED NOT NULL,
  `Major_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_major`
--

INSERT INTO `detail_major` (`ID`, `SG_id`, `Major_id`) VALUES
(1, 8, 1),
(2, 8, 2),
(3, 8, 3),
(4, 7, 1),
(5, 7, 2),
(6, 7, 3),
(7, 7, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_period`
--

CREATE TABLE `detail_period` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Period_id` int(10) UNSIGNED NOT NULL,
  `Lecturer_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_period`
--

INSERT INTO `detail_period` (`ID`, `Period_id`, `Lecturer_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 2),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_research`
--

CREATE TABLE `detail_research` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Lecturer_id` int(10) UNSIGNED NOT NULL,
  `Research_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_research`
--

INSERT INTO `detail_research` (`ID`, `Lecturer_id`, `Research_id`) VALUES
(1, 1, 10),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1),
(5, 2, 4),
(6, 2, 5),
(7, 3, 10),
(8, 3, 2),
(9, 4, 2),
(10, 4, 4),
(11, 5, 7),
(12, 6, 1),
(13, 6, 5),
(14, 7, 11),
(15, 8, 6),
(16, 9, 5),
(17, 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lecturers`
--

CREATE TABLE `lecturers` (
  `ID` int(10) UNSIGNED NOT NULL,
  `LecturerCode` varchar(20) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Department_id` int(10) UNSIGNED NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lecturers`
--

INSERT INTO `lecturers` (`ID`, `LecturerCode`, `Degree`, `Position`, `Department_id`, `User_id`, `Log_id`) VALUES
(1, '12340001', 'Tiến sĩ', 'Trưởng bộ môn ', 5, 51, 1),
(2, '12340002', 'Phó giáo sư', 'Trưởng bộ môn', 1, 52, 1),
(3, '12340003', 'Thạc sĩ', 'Giảng viên', 3, 53, 1),
(4, '12340004', 'Thạc sĩ', 'Giảng viên', 4, 54, 1),
(5, '12340005', 'Giáo sư', 'Trưởng bộ môn ', 6, 55, 1),
(6, '12340006', 'Tiến sĩ', 'Phó trưởng bộ môn', 4, 56, 1),
(7, '123400007', 'Thạc sĩ', 'Giảng viên', 1, 57, 1),
(8, '12340008', 'Thạc sĩ', 'Giảng viên', 5, 58, 1),
(9, '12340009', 'Thạc sĩ', 'Giảng viên', 2, 59, 1),
(10, '12340010', 'Phó giáo sư', 'Phó trưởng bộ môn', 2, 60, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logs`
--

CREATE TABLE `logs` (
  `ID` int(10) UNSIGNED NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL,
  `CreateAt` datetime NOT NULL,
  `Action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `logs`
--

INSERT INTO `logs` (`ID`, `User_id`, `CreateAt`, `Action`) VALUES
(1, 65, '2023-03-19 11:25:57', 'Tạo'),
(2, 65, '2023-03-19 11:25:57', 'Tạo'),
(3, 56, '2023-03-19 11:25:57', 'Tạo'),
(4, 17, '2023-03-19 11:25:57', 'Sửa'),
(5, 19, '2023-03-19 11:25:57', 'Sửa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `majors`
--

CREATE TABLE `majors` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MajorName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `majors`
--

INSERT INTO `majors` (`ID`, `MajorName`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Hệ thống thông tin'),
(3, 'Kỹ thuật phần mềm'),
(4, 'Trí tuệ nhân tạo và khoa học dữ liệu'),
(5, 'An ninh mạng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `periods`
--

CREATE TABLE `periods` (
  `ID` int(10) UNSIGNED NOT NULL,
  `PeriodName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `periods`
--

INSERT INTO `periods` (`ID`, `PeriodName`) VALUES
(1, 'Đợt 1 năm 2023'),
(2, 'Đợt 2 năm 2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `points`
--

CREATE TABLE `points` (
  `ID` int(10) UNSIGNED NOT NULL,
  `GuidePoint` float NOT NULL,
  `RebuttalPoint1` float NOT NULL,
  `RebuttalPoint2` float NOT NULL,
  `ProtectionPoint1` float NOT NULL,
  `ProtectionPoint2` int(11) NOT NULL,
  `ProtectionPoint3` int(11) NOT NULL,
  `ProtectionPoint4` int(11) NOT NULL,
  `ProtectionPoint5` int(11) NOT NULL,
  `Average` int(11) NOT NULL,
  `Admin_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `points`
--

INSERT INTO `points` (`ID`, `GuidePoint`, `RebuttalPoint1`, `RebuttalPoint2`, `ProtectionPoint1`, `ProtectionPoint2`, `ProtectionPoint3`, `ProtectionPoint4`, `ProtectionPoint5`, `Average`, `Admin_id`) VALUES
(1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 1),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `progresses`
--

CREATE TABLE `progresses` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TaskName` varchar(200) NOT NULL,
  `StartTime` datetime NOT NULL,
  `EndTime` datetime NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Report` varchar(200) NOT NULL,
  `SourceCode` varchar(200) NOT NULL,
  `Comments` varchar(200) NOT NULL,
  `Topic_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL,
  `TaskPoint` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `progresses`
--

INSERT INTO `progresses` (`ID`, `TaskName`, `StartTime`, `EndTime`, `Status`, `Report`, `SourceCode`, `Comments`, `Topic_id`, `Log_id`, `TaskPoint`) VALUES
(3, 'Thực hiện tìm hiểu yêu cầu khách hàng', '2023-03-12 00:00:00', '2023-03-17 00:00:00', 1, '', '', '', 5, 1, 9),
(4, 'Thực hiện đặc tả, phân tích thiết kế hệ thống', '2023-03-18 00:00:00', '2023-03-25 00:00:00', 0, '', '', '', 5, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `researchs`
--

CREATE TABLE `researchs` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ResearchName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `researchs`
--

INSERT INTO `researchs` (`ID`, `ResearchName`) VALUES
(1, 'Trí tuệ nhân tạo'),
(2, 'Học máy và khai phá dữ liệu'),
(3, 'Thư viện số và web ngữ nghĩa'),
(4, 'Thị giác máy và nhận dạng mẫu'),
(5, 'Xử lý ngôn ngữ tự nhiên'),
(6, 'Khai phá văn bản và web'),
(7, 'Khai phá mạng xã hội'),
(8, 'Tin sinh học'),
(9, 'Mạng nơ-ron và tính toán tiến hóa'),
(10, 'Các hệ thống thông tin thông minh'),
(11, 'Mạng máy tính và anh ninh mạng'),
(12, 'Mạng cảm biến không dây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`ID`, `Name`) VALUES
(1, 'Admin'),
(2, 'Giảng viên'),
(3, 'Sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `studentgroups`
--

CREATE TABLE `studentgroups` (
  `ID` int(10) UNSIGNED NOT NULL,
  `SGName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `studentgroups`
--

INSERT INTO `studentgroups` (`ID`, `SGName`) VALUES
(1, 'K54'),
(2, 'K55'),
(3, 'K56'),
(4, 'K57'),
(5, 'K58'),
(6, 'K59'),
(7, 'K60'),
(8, 'K61'),
(9, 'K62'),
(10, 'K63'),
(11, 'K64');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `ID` int(10) UNSIGNED NOT NULL,
  `StudentCode` varchar(20) NOT NULL,
  `Class_id` int(10) UNSIGNED NOT NULL,
  `User_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`ID`, `StudentCode`, `Class_id`, `User_id`, `Log_id`) VALUES
(1, '1951060701', 1, 11, 1),
(2, '1951060702', 10, 12, 1),
(3, '1951060703', 7, 13, 1),
(4, '1951060704', 2, 14, 1),
(5, '1951060705', 3, 15, 1),
(6, '1951060706', 4, 16, 1),
(7, '1951060707', 5, 17, 1),
(8, '1951060708', 6, 18, 1),
(9, '1951060709', 8, 19, 1),
(10, '1951060710', 9, 20, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Research_id` int(10) UNSIGNED NOT NULL,
  `Status` int(10) UNSIGNED NOT NULL,
  `Lecturer_id` int(10) UNSIGNED NOT NULL,
  `Period_id` int(11) UNSIGNED NOT NULL,
  `Student_id` int(10) UNSIGNED NOT NULL,
  `Log_id` int(10) UNSIGNED NOT NULL,
  `Point_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`ID`, `Title`, `Research_id`, `Status`, `Lecturer_id`, `Period_id`, `Student_id`, `Log_id`, `Point_id`) VALUES
(5, 'Xây dựng website quản lý doanh nghiệp\r\nkinh doanh thiết bị điện tử', 6, 1, 1, 1, 1, 1, 1),
(6, 'Phát hiện vật thể với công cụ mmDetection ', 4, 1, 2, 1, 2, 1, 2),
(7, 'Phân vùng ảnh với công cụ\r\nmmSegmentation ', 10, 0, 2, 1, 4, 1, 3),
(9, 'Nghiên cứu mô hình đường trung bình\r\ntrong dự đoán và giao dịch giá vàng ', 2, 0, 4, 1, 7, 1, 4),
(10, 'Xây dựng ứng dụng nắn duỗi ảnh chụp tài\r\nliệu dùng Deep Learning ', 1, 0, 5, 1, 5, 1, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `FullName` varchar(200) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Hometown` varchar(200) NOT NULL,
  `Identity` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Nation` varchar(50) NOT NULL,
  `Religion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `FullName`, `DateOfBirth`, `Gender`, `Email`, `PhoneNumber`, `Address`, `Hometown`, `Identity`, `Image`, `Nation`, `Religion`) VALUES
(11, 'Đỗ Thị Ngọc Hà', '2001-10-02', 1, 'ngocha@gmail.com', '0345678897', 'Số 12 Tây Sơn, Đống Đa, Hà Nội', 'Phú Minh, Phú Xuyên, Hà Nội', '001308002999', '', 'Kinh', 'Không'),
(12, 'Đinh Văn Công ', '2000-12-05', 0, 'vancong10@gmail.com', '0987678123', '09 Thành Công, Ba Đình, Hà Nội', 'Trầm Lộng, Ứng Hòa, Hà Nội', '037256119009', '', 'Kinh', 'Không'),
(13, 'Nguyễn Hoài Nam', '2001-07-04', 0, 'hoainam008@gmail.com', '0387269765', '198 Lò Đúc, Hai Bà Trưng, Hà Nội', 'Chu Phan, Mê Linh, Hà Nội', '001283797298', '', 'Kinh', 'Không'),
(14, 'Lê Hoàng Long', '2001-03-16', 0, 'hoanglong1603@gmail.com', '0966527187', '190 Nguyễn Trãi, Thanh Xuân, Hà Nội', 'Quỳnh Nguyên, Quỳnh Phụ, Thái Bình', '012932091293', '', 'Kinh', 'Không'),
(15, 'Đào Ngọc Ánh', '2001-04-05', 1, 'ngocanh123@gmail.com', '0394873874', '87 Nguyễn An Ninh, Hoàng Mai, Hà Nội', 'Tân Thanh, Thanh Liêm, Hà Nam', '012932129109', '', 'Kinh', 'Không'),
(16, 'Nguyễn Văn Linh', '2000-10-02', 0, 'vanlinh12@gmail.com', '0325657655', '04 Thái Thịnh, Đống Đa, Hà Nội', 'Biên Hòa, Phủ Lý, Hà Nam', '011293098109', '', 'Kinh', 'Không'),
(17, ' Chu Văn An', '2001-08-04', 0, 'chuan087@gmail.com', '0987281632', '03 Nguyễn Khang, Cầu Giấy, Hà Nội', 'Quỳnh Côi, Quỳnh Phụ, Thái Bình', '012938092092', '', 'Kinh', 'Không'),
(18, 'Nguyễn Quyết Tiến', '2001-09-26', 0, 'quyettien23@gmail.com', '0463872932', '890 Khuất Duy Tiến, Thanh Xuân, Hà Nội', 'Dị Nậu, Thach Thất, Hà Nội', '019829093212', '', 'Kinh', 'Không'),
(19, 'Hà Thị Thơ', '2001-07-17', 1, 'hatho@gmail.com', '0832681627', '112 Đặng Thai Mai, Tân Bình, Hải Dương', 'Đặng Thai Mai, Tân Bình, Hải Dương', '039281293821', '', 'Kinh', 'Không'),
(20, 'Bùi Đức Hiểu', '2001-03-05', 0, 'hieuducbui@gmail.com', '0938462283', 'Khối 2, thị trấn Con Luông, huyện Con Luông, tỉnh Nghệ An', 'Thị trấn Con Luông, huyện Con Luông, tỉnh Nghệ An', '192839092190', '', 'Kinh', 'Không'),
(51, 'Nguyễn Huy Đức', '1965-12-12', 0, 'ducnghuy@tlu.edu.vn', '0937492783', 'Kim Chung, Hoài Đức, Hà Nội', 'Kim Chung, Hoài Đức, Hà Nội', '029172018294', '', 'Kinh', 'Không'),
(52, 'Nguyễn Quỳnh Diệp', '1976-10-04', 1, 'diepnq@tlu.edu.vn', '0937262182', 'Thọ Nam, Hoài Đức, Hà Nội', 'Thọ Nam, Hoài Đức, Hà Nội', '011273898298', '', 'Kinh', 'Không'),
(53, 'Nguyễn Ngọc Doanh', '1987-02-23', 0, 'doanhnn@tlu.edu.vn', '02387977629', 'Chàng Sơn, Thach Thất, Hà Nội', 'Chàng Sơn, Thach Thất, Hà Nội', '029182093849', '', 'Kinh', 'Không'),
(54, 'Đặng Thị Thu Hiền', '1967-12-05', 1, 'Hiendt@tlu.edu.vn\r\n', '0346785928', 'Thạch Hòa, Thạch Thất, Hà Nội', 'Thạch Hòa, Thạch Thất, Hà Nội', '019273927239', '', 'Kinh', 'Không'),
(55, 'Lý Anh Tuấn', '1967-08-25', 0, 'tuanla@tlu.edu.vn', '0283692738', 'Đồng Tháp, Đan Phượng, Hà Nội', 'Đồng Tháp, Đan Phượng, Hà Nội', '019203909309', '', 'Kinh', 'Không'),
(56, 'Nguyễn Hữu Thọ', '1976-07-30', 0, 'nhtho@tlu.edu.vn', '0237437833', 'Liên Hà, Đan Phượng, Hà Nội', 'Liên Hà, Đan Phượng, Hà Nội', '019303928029', '', 'Kinh', 'Không'),
(57, 'Trần Mạnh Tuấn', '1978-06-29', 0, 'tuan_tm@tlu.edu.vn', '0290290982', 'Tân Lập, Đan Phượng, Hà Nội', 'Tân Lập, Đan Phượng, Hà Nội', '019201920493', '', 'Kinh', 'Không'),
(58, 'Phạm Tuấn Minh', '1968-10-06', 0, 'minhpt@tlu.edu.vn\r\n', '0198392971', 'Đông Sơn, Chương Mỹ, Hà Nội', 'Đông Sơn, Chương Mỹ, Hà Nội', '019820283028', '', 'Kinh', 'Không'),
(59, 'Nguyễn Mạnh Hiển', '1987-06-17', 0, 'ndhau.dhtl@tlu.edu.vn', '0928192093', 'Hoàng Diệu, Chương Mỹ, Hà Nội', 'Hoàng Diệu, Chương Mỹ, Hà Nội', '012912038209', '', 'Kinh', 'Không'),
(60, 'Đỗ Văn Hải', '1976-04-08', 0, 'haidv@tlu.edu.vn\r\n', '0384622792', 'Hồng Phong, Chương Mỹ, Hà Nội', 'Hồng Phong, Chương Mỹ, Hà Nội', '019209309398', '', 'Kinh', 'Không'),
(61, 'Trương Xuân Nam', '1987-12-01', 0, 'namtx@tlu.edu.vn', '0292108293', 'Mỹ Lương, Chương Mỹ, Hà Nội', 'Mỹ Lương, Chương Mỹ, Hà Nội', '039028204808', '', 'Kinh', 'Không'),
(62, 'Nguyễn Hữu Quỳnh', '1987-03-04', 0, 'haidvgh@tlu.edu.vn', '0193732931', 'Đồng Lạc, Chương Mỹ, Hà Nội', 'Đồng Lạc, Chương Mỹ, Hà Nội', '029309098999', '', 'Kinh', 'Không'),
(63, 'Nguyễn Văn Hậu', '1975-08-06', 0, 'nd90hau.dhtl@tlu.edu.vn', '0293779362', 'Phú Nghĩa, Chương Mỹ, Hà Nội', 'Phú Nghĩa, Chương Mỹ, Hà Nội', '012937492822', '', 'Kinh', 'Không'),
(64, 'Phạm Trí Công', '1967-04-05', 0, 'phtcong@tlu.edu.vn', '0328364936', 'Chúc Sơn, Chương Mỹ, Hà Nội', 'Chúc Sơn, Chương Mỹ, Hà Nội', '029374838432', '', 'Kinh ', 'Không'),
(65, 'Đỗ Lân', '1987-09-06', 0, 'dolan@tlu.edu.vn\r\n', '0834794274', 'Phú Xuyên, Phú Xuyên, Hà Nội', 'Phú Xuyên, Phú Xuyên, Hà Nội', '039438983985', '', 'Kinh', 'Không');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Log_id` (`Log_id`),
  ADD KEY `Role_id` (`Role_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Period_id` (`Period_id`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ClassName` (`ClassName`),
  ADD KEY `Major_id` (`Major_id`),
  ADD KEY `Course_id` (`SG_id`);

--
-- Chỉ mục cho bảng `councils`
--
ALTER TABLE `councils`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Period_id` (`Period_id`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detail_council`
--
ALTER TABLE `detail_council`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lecturer_id` (`Lecturer_id`),
  ADD KEY `Council_id` (`Council_id`);

--
-- Chỉ mục cho bảng `detail_major`
--
ALTER TABLE `detail_major`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Course_id` (`SG_id`),
  ADD KEY `Major_id` (`Major_id`);

--
-- Chỉ mục cho bảng `detail_period`
--
ALTER TABLE `detail_period`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lecturer_id` (`Lecturer_id`),
  ADD KEY `Period_id` (`Period_id`);

--
-- Chỉ mục cho bảng `detail_research`
--
ALTER TABLE `detail_research`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lecturer_id` (`Lecturer_id`),
  ADD KEY `Research_id` (`Research_id`);

--
-- Chỉ mục cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `LecturerCode` (`LecturerCode`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Department_id` (`Department_id`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Chỉ mục cho bảng `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Admin_id` (`Admin_id`);

--
-- Chỉ mục cho bảng `progresses`
--
ALTER TABLE `progresses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Topic_id` (`Topic_id`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Chỉ mục cho bảng `researchs`
--
ALTER TABLE `researchs`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `studentgroups`
--
ALTER TABLE `studentgroups`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `StudentCode` (`StudentCode`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Class_id` (`Class_id`),
  ADD KEY `Log_id` (`Log_id`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Lecturer_id` (`Lecturer_id`),
  ADD KEY `Research_id` (`Research_id`),
  ADD KEY `Student_id` (`Student_id`),
  ADD KEY `Log_id` (`Log_id`),
  ADD KEY `Period_id` (`Period_id`),
  ADD KEY `Point_id` (`Point_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `announcements`
--
ALTER TABLE `announcements`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `classes`
--
ALTER TABLE `classes`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `councils`
--
ALTER TABLE `councils`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `detail_council`
--
ALTER TABLE `detail_council`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `detail_major`
--
ALTER TABLE `detail_major`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `detail_period`
--
ALTER TABLE `detail_period`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `detail_research`
--
ALTER TABLE `detail_research`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `majors`
--
ALTER TABLE `majors`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `periods`
--
ALTER TABLE `periods`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `points`
--
ALTER TABLE `points`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `progresses`
--
ALTER TABLE `progresses`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `researchs`
--
ALTER TABLE `researchs`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `studentgroups`
--
ALTER TABLE `studentgroups`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`),
  ADD CONSTRAINT `accounts_ibfk_2` FOREIGN KEY (`Role_id`) REFERENCES `roles` (`ID`),
  ADD CONSTRAINT `accounts_ibfk_3` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`);

--
-- Các ràng buộc cho bảng `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`);

--
-- Các ràng buộc cho bảng `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`Period_id`) REFERENCES `periods` (`ID`),
  ADD CONSTRAINT `announcements_ibfk_2` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`);

--
-- Các ràng buộc cho bảng `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`Major_id`) REFERENCES `majors` (`ID`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`SG_id`) REFERENCES `studentgroups` (`ID`);

--
-- Các ràng buộc cho bảng `councils`
--
ALTER TABLE `councils`
  ADD CONSTRAINT `councils_ibfk_1` FOREIGN KEY (`Period_id`) REFERENCES `periods` (`ID`);

--
-- Các ràng buộc cho bảng `detail_council`
--
ALTER TABLE `detail_council`
  ADD CONSTRAINT `detail_council_ibfk_1` FOREIGN KEY (`Lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `detail_council_ibfk_2` FOREIGN KEY (`Council_id`) REFERENCES `councils` (`ID`);

--
-- Các ràng buộc cho bảng `detail_major`
--
ALTER TABLE `detail_major`
  ADD CONSTRAINT `detail_major_ibfk_1` FOREIGN KEY (`SG_id`) REFERENCES `studentgroups` (`ID`),
  ADD CONSTRAINT `detail_major_ibfk_2` FOREIGN KEY (`Major_id`) REFERENCES `majors` (`ID`);

--
-- Các ràng buộc cho bảng `detail_period`
--
ALTER TABLE `detail_period`
  ADD CONSTRAINT `detail_period_ibfk_1` FOREIGN KEY (`Lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `detail_period_ibfk_2` FOREIGN KEY (`Period_id`) REFERENCES `periods` (`ID`);

--
-- Các ràng buộc cho bảng `detail_research`
--
ALTER TABLE `detail_research`
  ADD CONSTRAINT `detail_research_ibfk_1` FOREIGN KEY (`Lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `detail_research_ibfk_2` FOREIGN KEY (`Research_id`) REFERENCES `researchs` (`ID`);

--
-- Các ràng buộc cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `lecturers_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `lecturers_ibfk_2` FOREIGN KEY (`Department_id`) REFERENCES `departments` (`ID`),
  ADD CONSTRAINT `lecturers_ibfk_3` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`);

--
-- Các ràng buộc cho bảng `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`);

--
-- Các ràng buộc cho bảng `points`
--
ALTER TABLE `points`
  ADD CONSTRAINT `points_ibfk_2` FOREIGN KEY (`Admin_id`) REFERENCES `admins` (`ID`);

--
-- Các ràng buộc cho bảng `progresses`
--
ALTER TABLE `progresses`
  ADD CONSTRAINT `progresses_ibfk_1` FOREIGN KEY (`Topic_id`) REFERENCES `topics` (`ID`),
  ADD CONSTRAINT `progresses_ibfk_2` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`);

--
-- Các ràng buộc cho bảng `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`ID`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`Class_id`) REFERENCES `classes` (`ID`),
  ADD CONSTRAINT `students_ibfk_3` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`);

--
-- Các ràng buộc cho bảng `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`Lecturer_id`) REFERENCES `lecturers` (`ID`),
  ADD CONSTRAINT `topics_ibfk_3` FOREIGN KEY (`Research_id`) REFERENCES `researchs` (`ID`),
  ADD CONSTRAINT `topics_ibfk_4` FOREIGN KEY (`Student_id`) REFERENCES `students` (`ID`),
  ADD CONSTRAINT `topics_ibfk_5` FOREIGN KEY (`Log_id`) REFERENCES `logs` (`ID`),
  ADD CONSTRAINT `topics_ibfk_6` FOREIGN KEY (`Period_id`) REFERENCES `periods` (`ID`),
  ADD CONSTRAINT `topics_ibfk_7` FOREIGN KEY (`Point_id`) REFERENCES `points` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
