-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 04:13 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cnpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'Tên danh mục',
  `type` tinyint(3) DEFAULT 0 COMMENT 'Loại danh mục: 0 - cá, 1 - bể cá , 2 - phụ kiện',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh danh mục',
  `description` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho danh mục',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo danh mục',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `avatar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hihi', 0, '', 'hihi\r\n', 0, '2020-11-11 03:05:30', NULL),
(3, 'Cá koi', 0, '1605451097-koi_1.jpg', '<p>C&aacute; ch&eacute;p Koi hay cụ thể hơn C&aacute; ch&eacute;p Nishikigoi l&agrave; một loại c&aacute; ch&eacute;p thường (Cyprinus carpio) đ&atilde; được thuần h&oacute;a, lai tạo để nu&ocirc;i l&agrave;m cảnh trong những hồ nhỏ, được nu&ocirc;i phổ biến tại Nhật Bản. Ch&uacute;ng c&oacute; quan hệ họ h&agrave;ng gần với c&aacute; v&agrave;ng v&agrave;, tr&ecirc;n thực tế, kiểu c&aacute;ch nh&acirc;n giống v&agrave; nu&ocirc;i cảnh l&agrave; kh&aacute; giống với c&aacute;ch nu&ocirc;i c&aacute; v&agrave;ng, c&oacute; lẽ l&agrave; do c&aacute;c cố gắng của những người nh&acirc;n giống Nhật Bản trong việc ganh đua với c&aacute; v&agrave;ng. C&aacute; ch&eacute;p Koi v&agrave; c&aacute;c h&igrave;nh xăm tr&ecirc;n c&aacute; được người Nhật coi l&agrave; điềm may mắn.</p>\r\n', 1, '2020-11-15 14:38:18', '2020-11-17 19:50:18'),
(4, 'Cá rồng', 0, '1605451211-HuyetLong_001.jpg', 'Tên gọi cá rồng là một từ thông dụng trong tiếng Việt để chỉ nhiều loại cá không có quan hệ.\r\n\r\nTrong tự nhiên chúng sống chủ yếu ở các hồ rộng hoặc ở những con sông lớn, trong đó có một số loài rất hiếm được liệt kê trong sách Đỏ của thế giới như: cá kim long quá bối; cá huyết long; cá kim long hồng vĩ. Trong thế giới cá cảnh, cá rồng châu Á là loại được xếp vào hàng đầu bởi vẻ đẹp, nét độc đáo và vấn đề tâm linh vì người ta cho rằng: Cá rồng là tượng trưng cho sự may mắn, phát tài lộc, đem lại hạnh phúc và xua đuổi tà ma làm cho phong thủy được tốt hơn.', 1, '2020-11-15 14:40:11', '2020-11-15 21:44:05'),
(5, 'Bể cá rồng', 1, '1605451317-bc_rong_r1.jpg', '- Bể kính Việt Nhật với độ dày phù hợp. ( Kính cường lực an toàn, kính có độ dày 12mm, 15mm, 19mm, 24mm...)\r\n- Bể lọc dưới có thể tích phù hợp với bể chính.\r\n- Chân gỗ tự nhiên.( Khung Trò Chỉ, Căm Xe, Lim.Cánh Sồi, Xoan, Hương Đỏ, Gụ. Chạm trổ hoa văn )\r\n- Hệ thống đường ống hút mặt hút đáy, nấm hút đáy, van air, xẻ rãnh hút mặt với yêu cầu thẩm mỹ cao nhất.\r\n- Máy Bơm có công suất phù hợp với bể của Atman.\r\n- Đèn T5 Odysea có kích thước và công suất phù hợp với bể.\r\n- Tranh 3D in theo mẫu khách lựa chọn.\r\n- Vật liệu lọc bùi nhùi, nham thạch, sứ lọc. . .\r\n- Sưởi Odysea\r\n- Ngoài ra còn có đường chờ cho nhiều thiết bị khác nếu khách hàng có yêu cầu lắp thêm ( Dotech, đèn UV, thay nước tự động, v..v...)', 1, '2020-11-15 14:41:57', '2020-11-15 21:44:11'),
(6, 'Bể cá treo tường', 1, '', '- Bể cá biển treo tường khung gỗ \r\n- Trang trí giả cảnh biển \r\n- Sử dụng san hô bông và hải quỳ trang trí bể cá cảnh . Đàn cá bơi lội tạo nên bức tranh sống động ngay trong nhà.\r\n- Phía sau là tranh 3d tạo chiều sâu cho bể cá \r\n- Phụ kiện : Đèn + bộ lọc + bộ sục khí +sưởi ,....\r\n- Sang trọng - chất lượng ', 1, '2020-11-15 14:42:40', '2020-11-15 21:44:18'),
(7, 'Máy sục khí bể cá', 2, '1605451404-pk_suc_khi_s1.jpg', '- Nhãn hiệu: Resun \r\n- Model: ACO-001\r\n- Loại: Máy sủi điện\r\n- Số lượng đầu vòi: 04\r\n- Công suất: 18 w\r\n- Lưu lượng khí: 38l/phút\r\n- Sản phẩm gồm: Máy sủi\r\n- Công dụng: Dùng để tạo ô xi cho bể cá\r\n- Cách sử dụng: Để quả sủi, miếng sủi, thanh sủi, đồ chơi cho máy sủi trong bể\r\n- Khuyến cáo của nhà sản xuất: Để máy sủi cao hơn so với mực nước của bể, tránh nước tiếp xúc với máy sủi', 1, '2020-11-15 14:43:24', '2020-11-15 21:44:27'),
(8, 'Đèn bể cá cảnh', 2, '1605451532-pk_den_d1.jpg', 'Thông số kỹ thuật\r\nĐiện áp: 220V\r\nCông suất: 8w\r\nTần số: 60/50Hz\r\nThiết kế hiện đại, độc đáo, thanh lịch\r\nCấu trúc độc đáo để điều chỉnh luồng nước luân chuyển và diệt khuẩn. đèn UV và kính được làm bằng thạch anh tinh khiết chất lượng cao, khiến hiệu quả diệt khuẩn tốt hơn.\r\nCông dụng: Diệt rêu, diệt khuẩn bể cá\r\nLưu ý:\r\n- Đèn được lắp với máy bơm . Nước sẽ chạy qua đèn, được khử khuẩn và đưa lên máng lọc, sau đó được trả xuống bể.\r\n- Không sử dung liên tục, mỗi lần dùng 4-6h\r\n- Tắt nguồn điện trước khi cho tay vào nước\r\n- Không để ánh sáng đèn trực tiếp vào mắt người, cá và các động vật dưới nước khác để tránh thương tích và thiệt hại', 1, '2020-11-15 14:45:32', '2020-11-15 21:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà tin tức thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) NOT NULL COMMENT 'Tiêu đề tin tức',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho tin tức',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh tin tức',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `title`, `summary`, `avatar`, `content`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(1, 5, 'Hướng dẫn chọn mua máy lọc bể cá cảnh', 'Máy lọc nước là một thiết bị rất quan trọng đối với bể cá cảnh trong nhà. Chọn máy lọc cho bể cá phù hợp là điều chưa dễ dàng cho các bạn mới chơi cá cảnh. Hãy để Cá cảnh tài lộc chia sẻ đến bạn cách chọn mua máy lọc bể cá cảnh qua bài viết sau đây.', 'news_1.jpg', '1, Chọn mua máy lọc dựa trên đặc tính thích ứng với môi trường của cá\r\n- Do có những đặc tính thích ứng khác nhau về độ sạch, và nồng độ ô xy trong nước vì vậy có những loài cá dễ nuôi hơn do chúng có tính thích ứng cao với các điều kiện về chất lượng nước và nồng độ ô xy và cũng có loại cá khó nuôi vì tính nhạy cảm của chúng với điều kiện môi trường cao, chúng không chịu được môi trường nước bẩn hay nồng độ ô xy quá thấp.\r\n\r\n- Càng là những loại cá khó nuôi thì yêu cầu về lọc nước càng cần khắt khe hơn vì vậy cần chọn những loại máy lọc có chất lượng và hiệu suất hoạt động tốt hơn.\r\n2, Chọn mua máy dựa trên kích cỡ và trọng lượng cá\r\n- Bên cạnh đó cũng cần xem xét kích cỡ và trọng lượng của cá. Với những loại cá nhỏ nên mua loại lọc mút hoặc lọc thác chúng có công suất nhỏ gọn, đáp ứng nhu cầu nước sạch và an toàn cho cá.\r\n\r\n- Nếu bạn muốn nuôi những loại cá có kích cỡ và trọng lượng lớn, thì bạn phải dùng máy lọc tràn, lọc đáy, hoặc lọc thùng vì chúng có công suất hoạt động lớn và hiệu quả xử lý thải độc nhanh hơn.\r\n3, Lựa chọn máy lọc dựa vào loại bể cá\r\n- Bể cá mini: Không cần dùng máy lọc nước bể cá mini nuôi cá nhỏ dễ sống không cần nhiều oxy.\r\n\r\n- Bể cá thủy sinh: dùng lọc thác, lọc trong hồ, lọc thùng hoặc lọc tràn để không gây ảnh hưởng đến cây thủy sinh.\r\n\r\n- Bể cá rồng, cá là hán: dùng lọc mút, lọc đáy, lọc thùng hoặc lọc tràn.\r\n\r\n4, Chọn mua máy dựa trên kích thước bể cá\r\n- Chúng ta cần dựa trên kích thước bể cá để tính được lưu lượng nước mà máy lọc có thể xử lý trong một giờ. Lưu lượng nước thích hợp cần xử lý phải đạt 6 lần thể tích bể trong một giờ.\r\n\r\n- Công thức tính lưu lượng nước là a= {V(thể tích bể cá)/ 1000} X 6\r\n\r\nVí dụ: thể tích bể cá của bạn là V= 60 x 40 x 40 (cm3), a= V/1000 x 6 = 576 lít/giờ\r\n\r\nNhư vậy, đối với bể cá này, bạn cần chọn mua loại máy lọc có công suất xử lý ít nhất là 576 lít nước/giờ.\r\n5, Chọn mua máy dựa trên công suất máy lọc\r\n- Các công suất máy cho biết khả năng xử lý nước trên giờ các bạn có thể dễ dàng có được thông tin này ở trên máy hoặc từ người cung cấp máy cho bạn.\r\n\r\n- Thông thường các máy lọc có hiệu suất xử lý nước khá tốt, các dòng máy từ 3 đến 5W có khả năng xử lý 200-400 lít/giờ. Máy 12W xử lý 800 lít/giờ và máy từ trên 25W xử lý trên 1000 lít trên giờ.\r\n\r\nSau khi biết được loại máy lọc mà bạn cần mua thì bạn chỉ cần đến địa chỉ uy tín để mua và lắp vào bể cá là xong. Bể cá Tài Lộc chúng tôi cung cấp các loại máy lọc cho bể cá chất lượng cao. Hãy liên hệ với ngay chúng tôi để được tư vấn, báo giá và đặt mua sản phẩm nhanh nhất nhé', 1, NULL, NULL, NULL, '2020-11-17 15:23:52', NULL),
(2, 8, 'Những lưu ý khi chọn mua đèn sưởi bể cá', 'Việc giữ môi trường tốt cũng như việc chăm sóc cá cảnh là việc mà những người chơi cá cảnh cần phải biết và thường xuyên quan tâm. Bởi chỉ khi môi trường sống tốt thì cá cảnh mới có thể phát triển một cách tối đa nhất. Vào mùa đông việc chuẩn bị đèn sưởi ', 'news_4.jpg', 'Công dụng của đèn sưởi bể cá\r\n+ Đèn sưởi bể cá giữ ấm môi trường nước.\r\n\r\n- Khác với những chiếc đèn sưởi ấm thông thường dùng trong gia đình chúng ta, những chiếc đèn sưởi bể cá không làm ấm môi trường không khí xung quanh mà làm ấm môi trường nước – nơi những chú cá cảnh sinh sống. Do đặc tính hết sức đặc biệt này nên đèn sưởi bể cá thường sưởi ấm ở nhiệt độ được tính toán kỹ lưỡng để phù hợp với nhiều loại cá cảnh nhất có thể.\r\n\r\n- Tuy nhiên, nếu như dòng cá cảnh bạn nuôi là loại hết sức kén môi trường nước, hãy tìm hiểu thật kỹ về nhiệt độ lý tưởng để giữ sức khỏe cho cá và chọn mua loại đèn sưởi bể cá phù hợp. Điều này là rất quan trọng bởi chỉ có mức nhiệt độ của môi trường nước phù hợp mới có thể giữ cho cá khỏe mạnh trong mùa đông.\r\nLưu ý khi chọn mua đèn sưởi bể cá.\r\n- Đầu tiên, hãy tìm hiểu nhiệt độ lý tưởng với loại cá bạn đang nuôi để từ đó lựa chọn đèn sưởi bể cá phù hợp. Điều này sẽ quyết định đến công hiệu giữ ấm của sản phẩm này có đạt được tốt nhất và có thể gìn giữ sức khỏe cho chú cá của bạn hay không.\r\n\r\n- Tiếp theo, hãy lựa chọn những thương hiệu đèn sưởi bể cá uy tín và những cửa hàng lớn để tìm mua sản phẩm này, không nên ham rẻ mà mua những sản phẩm kém chất lượng. Bởi lẽ khi mua những sản phẩm kém chất lượng thì rất có thể gặp phải tình trạng rò rỉ điện khi sử dụng đèn sưởi bể cá, từ đó gây nguy hại cho chú cá nhà bạn.\r\n\r\nChúng tôi hi vọng bài viết trên đây sẽ cung cấp cho các bạn được những thông tin hữu ích. Hãy cùng chia sẻ với những người đang quan tâm đến vấn đề này để mọi người cùng được biết bạn nhé.', 1, NULL, NULL, NULL, '2020-11-17 15:29:48', NULL),
(3, 6, 'Địa chỉ mua bể cá treo tường uy tín và chất lượng', 'Bể cá treo tường là một sản phẩm trang trí trong gia đình đang được khách hàng quan tâm và sở hữu bởi vẻ đẹp cũng như sự hài hòa về không gian gia đình. Trên thị trường có rất nhiều loại bể cá treo tường khác nhau vậy đâu là những tiêu chí và địa chỉ mua ', 'news_3.jpg', 'Tiêu chí lựa chọn địa chỉ làm bể cá treo tường uy tín\r\nĐầu tiên, bạn cần nắm rõ các tiêu chí cơ bản để lựa chọn địa chỉ làm bể nuôi cá treo tường chất lượng nhất. Có 5 yếu tố để đánh giá tiêu chí lựa chọn địa chỉ làm bể cá treo tường uy tín :\r\n\r\n– Dịch vụ làm bể cá treo tường có thương hiệu lâu đời và được cấp phép chứng chỉ về tiêu chuẩn công nghệ.\r\n\r\n– Quy trình giao bể đúng tiến độ, đúng yêu cầu đặt trước.\r\n\r\n– Sản phẩm đạt tiêu chuẩn, hệ thống bể lọc tràn tự động, nước trong sạch.\r\n\r\n– Đội ngũ chuyên viên có chuyên môn và kinh nghiệm cao.\r\n\r\n– Có cam kết về đảm bảo chất lượng và hỗ trợ khắc phục lỗi của bể cá rồng ngay lập tức.', 1, NULL, NULL, NULL, '2020-11-17 15:29:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'Id của user trong trường hợp đã login và đặt hàng, là khóa ngoại liên kết với bảng users',
  `fullname` varchar(255) DEFAULT NULL COMMENT 'Tên khách hàng',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `mobile` int(11) DEFAULT NULL COMMENT 'SĐT khách hàng',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email khách hàng',
  `note` text DEFAULT NULL COMMENT 'Ghi chú từ khách hàng',
  `price_total` int(11) DEFAULT NULL COMMENT 'Tổng giá trị đơn hàng',
  `payment_status` tinyint(2) DEFAULT NULL COMMENT 'Trạng thái đơn hàng: 0 - Chưa thành toán, 1 - Đã thành toán',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `address`, `mobile`, `email`, `note`, `price_total`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'hi', 'aaaa', 123456, 'godnaruto6519@gmail.com', '', 11000000, 0, '2020-11-20 14:22:38', NULL),
(2, NULL, 'hi', 'aaaa', 123456, 'godnaruto6519@gmail.com', '', 11000000, 0, '2020-11-20 14:25:53', NULL),
(3, NULL, 'aaaa', 'Hà Đông', 123446, 'abc@gmail.com', '', 2000000, 0, '2020-11-22 13:43:27', NULL),
(4, NULL, 'bui the kien', 'Hà Đông', 98456123, 'godnaruto6519@gmail.com', 'đây là ghi chú', 12500000, 0, '2020-11-22 14:04:11', NULL),
(5, NULL, 'bui the kien', 'Hà Đông', 98456123, 'godnaruto6519@gmail.com', 'đây là ghi chú', 12500000, 0, '2020-11-22 14:06:44', NULL),
(6, NULL, 'bui the kien', 'Hà Đông', 98456123, 'godnaruto6519@gmail.com', 'đây là ghi chú', 12500000, 0, '2020-11-22 14:06:52', NULL),
(7, NULL, 'bui the kien', 'Hà Đông', 98456123, 'godnaruto6519@gmail.com', 'đây là ghi chú', 12500000, 0, '2020-11-22 14:07:57', NULL),
(8, NULL, 'aaaaaa', 'Hà Đông', 123456, 'godnaruto6519@gmail.com', 'test2', 17500000, 0, '2020-11-22 14:09:45', NULL),
(9, NULL, 'bui the kien', 'Hà Nội', 123456789, 'buithekien651999@gmail.com', '', 5000000, 0, '2020-11-22 14:13:00', NULL),
(10, NULL, 'bui the kien', 'Hà Nội', 123456789, 'godnaruto6519@gmail.com', 'test3\r\n', 5800000, 0, '2020-11-22 14:37:29', NULL),
(11, NULL, 'bui the kien', 'Hà Nội', 344444, 'buithekien651999@gmail.com', 'test4', 8800000, 0, '2020-11-22 14:39:58', NULL),
(12, NULL, 'aaaa', 'Hà Đông', 222222, 'godnaruto6519@gmail.com', '', 16800000, 0, '2020-11-22 14:42:33', NULL),
(13, NULL, 'bui the kien', 'Hà Đông', 11111111, 'godnaruto6519@gmail.com', '', 16800000, 0, '2020-11-22 14:43:49', NULL),
(14, NULL, 'bui the kien', 'Hà Đông', 5555555, 'godnaruto6519@gmail.com', 'ads', 21800000, 0, '2020-11-22 14:46:20', NULL),
(15, NULL, 'hihi kien', 'aaaa', 123456, 'godnaruto6519@gmail.com', '', 14000000, 0, '2020-11-22 15:42:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL COMMENT 'Id của order tương ứng, là khóa ngoại liên kết với bảng orders',
  `product_id` int(11) DEFAULT NULL COMMENT 'Id của product tương ứng, là khóa ngoại liên kết với bảng products',
  `quantity` int(11) DEFAULT NULL COMMENT 'Số sản phẩm đã đặt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`) VALUES
(1, 2, 4),
(1, 3, 1),
(2, 2, 4),
(2, 3, 1),
(3, 2, 1),
(4, 3, 2),
(4, 4, 1),
(4, 5, 1),
(5, 3, 2),
(5, 4, 1),
(5, 5, 1),
(6, 3, 2),
(6, 4, 1),
(6, 5, 1),
(7, 3, 2),
(7, 4, 1),
(7, 5, 1),
(8, 3, 2),
(8, 4, 1),
(8, 5, 1),
(8, 10, 1),
(9, 10, 1),
(10, 10, 1),
(10, 13, 1),
(11, 10, 1),
(11, 13, 1),
(11, 3, 1),
(12, 10, 1),
(12, 13, 1),
(12, 3, 1),
(12, 4, 1),
(12, 2, 2),
(13, 10, 1),
(13, 13, 1),
(13, 3, 1),
(13, 4, 1),
(13, 2, 2),
(14, 10, 2),
(14, 13, 1),
(14, 3, 1),
(14, 4, 1),
(14, 2, 2),
(15, 10, 1),
(15, 2, 1),
(15, 3, 1),
(15, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà sản phẩm thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(255) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `amount` int(11) DEFAULT NULL COMMENT 'Số lượng sản phẩm trong kho',
  `summary` varchar(255) DEFAULT NULL COMMENT 'Mô tả ngắn cho sản phẩm',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(255) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(255) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `avatar`, `price`, `amount`, `summary`, `content`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(2, 3, 'YAMABUKI', '1605579915-product-yamabuki-ogon.jpg', 2000000, 10, 'Yamabuki Ogon là cá koi có màu vàng ánh kim. Cũng như những con cá Koi Ogon khác, một cái đầu và cơ thể sạch sẽ, không tì vết là rất quan trọng. Các màu sắc có thể từ vàng sâu đến vàng nhạt hơn, rực rỡ hơn. Các vây ngực có thể có một số màu vàng ở gốc mà ', '<p>C&aacute; Yamabuki Ogon Koi hoặc Gold Ogon Koi l&agrave; một con c&aacute; koi m&agrave;u v&agrave;ng kim loại. C&aacute; koi Ogon (c&oacute; nghĩa l&agrave; c&aacute; v&agrave;ng V&agrave;ng) l&agrave; c&aacute; koi kim loại, rắn, một m&agrave;u trong lớp Hikarimuji (Hikari - Hồi s&aacute;ng b&oacute;ng; Muji - Rối một). Ogon đ&atilde; trở th&agrave;nh đồng nghĩa với một t&ecirc;n tập thể cho c&aacute; koi kim loại, m&agrave;u rắn. Một &aacute;nh s&aacute;ng rực rỡ Ogon sườn l&agrave;m cho n&oacute; c&oacute; thể nhận ra ngay lập tức, đặc biệt l&agrave; trong c&aacute;c ao murkier.</p>\r\n\r\n<p>C&oacute; c&aacute; Yamabuki koi ch&uacute;ng trong ao của bạn l&agrave; một c&aacute;ch tốt để khuyến kh&iacute;ch c&aacute; koi Yamabuju cho ăn bằng tay. Được chăm s&oacute;c đ&uacute;ng c&aacute;ch, Gold Ogon Koi hoặc Yamabuki Ogon Koi c&oacute; thể sống l&acirc;u, đ&ocirc;i khi l&ecirc;n tới 35 năm. Khi c&oacute; tuổi, da ở Ogon trưởng th&agrave;nh sẽ bắt đầu nổi l&ecirc;n giữa c&aacute;c vảy để tạo hiệu ứng lưới, lưới được gọi l&agrave; fukurin. Sự tương phản giữa da v&agrave; vảy được coi l&agrave; rất hấp dẫn v&agrave; được đ&aacute;nh gi&aacute; cao trong số những người đam m&ecirc; c&aacute; koi.</p>\r\n\r\n<p>Biến thể của Yamabuki Ogon bao gồm Gin Rin Yamabuki Ogon v&agrave; Doitsu Yamabuki Ogon.</p>\r\n', 1, '', '', '', '2020-11-17 02:25:15', NULL),
(3, 3, 'KOHAKU', '1605580011-product-kohaku-koi.jpg', 3000000, 10, 'Cá Koi Kohaku có lẽ là dòng cá điển hình nhất trong họ nhà cá Koi, là một trong những dòng cá koi được thả nhiều nhất trong hồ koi. Hãy mua cá koi Kohaku cho hồ cá của bạn thêm sắc màu. ', '<p>C&aacute; Koi Kohaku chỉ bao gồm hai m&agrave;u đỏ v&agrave; trắng kết hợp với nhau, lại được mệnh danh l&agrave; chủng đẹp nhất so với c&aacute;c anh chị em kh&aacute;c trong gia đ&igrave;nh c&aacute; Koi Nhật Bản.C&aacute; Koi Kohaku Nhật Bản d&agrave;i tới 1 m vừa được b&aacute;n với gi&aacute; 203 triệu y&ecirc;n (khoảng 41,5 tỷ đồng), ch&iacute;nh thức trở th&agrave;nh con c&aacute; Koi đắt nhất thế giới.</p>\r\n', 1, '', '', '', '2020-11-17 02:26:51', NULL),
(4, 3, 'CHAGOI', '1605580089-product-chagoi-koi-1.jpg', 4000000, 10, 'Chagoi là cá koi màu nâu hoặc màu đồng. Màu sắc của Chagoi có thể bao gồm bất cứ nơi nào từ màu nâu nhạt, đến màu nâu sẫm, gần như xanh lục, đến màu đồng đậm, tương tự như đồng xu của Mỹ. Khi cá koi Chagoi còn nhỏ, nó chìm lẫn trong các loài cá nhiều màu ', '<p>Chagoi l&agrave; c&aacute; koi n&acirc;u đậm v&agrave; được biết đến l&agrave; cực kỳ th&acirc;n thiện. Koi Chagoi l&agrave; tuyệt vời cho nh&agrave; gia đ&igrave;nh bạn v&agrave; sẽ lu&ocirc;n ch&agrave;o đ&oacute;n kh&aacute;ch khi c&oacute; ai đ&oacute; đến ao của họ. C&aacute; Chagoi&nbsp; rất dễ huấn luyện để kiếm thức ăn bằng tay v&agrave; hầu hết c&aacute; koi sẽ theo coi Chagoi một khi ch&uacute;ng nhận ra l&agrave;m thế n&agrave;o n&oacute; chấp nhận thức ăn nhanh như vậy. Những con c&aacute; koi n&agrave;y cũng c&oacute; khẩu vị lớn v&agrave; c&oacute; xu hướng ph&aacute;t triển lớn v&agrave; nhanh!</p>\r\n\r\n<p>M&agrave;u n&acirc;u của Chagoi c&agrave;ng c&oacute; gi&aacute; trị. C&oacute; những chiếc Chagoi m&agrave;u xanh l&aacute; c&acirc;y tuyệt đẹp nhưng hầu hết sẽ c&oacute; m&agrave;u n&acirc;u từ đen đến n&acirc;u đỏ. Một con Chagoi tốt sẽ được cho ăn tốt, d&agrave;y v&agrave; b&eacute;o v&igrave; kiểu ăn hung dữ.</p>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i c&oacute; sẵn Chagoi koi nếu được hiển thị b&ecirc;n dưới trường t&igrave;m kiếm. Nếu kh&ocirc;ng, xin vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i với những g&igrave; bạn đang t&igrave;m kiếm v&agrave; ch&uacute;ng t&ocirc;i sẽ gi&uacute;p t&igrave;m ra c&aacute; koi ph&ugrave; hợp với bạn.</p>\r\n\r\n<p>Bạn c&oacute; thể thấy rằng nhiều m&agrave;u sắc kh&aacute;c nhau của Chagoi Koi c&oacute; thể được t&igrave;m thấy. Ba m&agrave;u đặc biệt được biết đến.</p>\r\n', 1, '', '', '', '2020-11-17 02:28:09', NULL),
(5, 3, 'HI UTSURI', '1605580189-product-ca-hi-utsuri.jpg', 2500000, 10, 'Cá Hi Utsuri koi kết hợp màu nền đen sơn mài với các mẫu màu đỏ đậm hoặc màu cam. Màu đỏ Hi Utsuri vượt trội hơn màu cam. ', '<p>Hi Utsuri giống như Showa, ch&uacute;ng l&agrave; một con Koi da đen, nhưng Hi Utsuri chỉ c&oacute; một hoa văn, m&agrave;u đỏ. Một Hi Utsuri tốt sẽ c&oacute; sự c&acirc;n bằng tốt đẹp giữa m&agrave;u đỏ (hi) v&agrave; đen (sumi). Khi mua, h&atilde;y t&igrave;m một mẫu độc đ&aacute;o.</p>\r\n', 1, '', '', '', '2020-11-17 02:29:49', NULL),
(6, 4, 'KIM LONG', '1605580328-product-kim-long-1.jpg', 3500000, 15, 'Cá rồng Kim Long phân bố chủ yếu ở bang Pahang và hồ Bukit Merah, bang Perak, Malaysia.', '<p><strong>C&aacute; rồng Kim Long</strong>&nbsp;n&ocirc;̉i ti&ecirc;́ng vì những nếp vảy d&agrave;y m&agrave;u v&agrave;ng kim &oacute;ng &aacute;nh s&aacute;ng ch&oacute;i, v&oacute;c d&aacute;ng thon d&agrave;i bản rộng, v&acirc;y to bung x&ograve;e tạo n&ecirc;n một h&igrave;nh mẫu đế vương uy nghi cho tất cả lo&agrave;i c&aacute; cảnh. L&agrave; lo&agrave;i đẹp nhất trong d&ograve;ng họ kim, m&agrave;u sắc, &aacute;nh kim cũng đậm đ&agrave; hơn kim long hồng vỹ.</p>\r\n\r\n<p>C&oacute; gi&aacute; đắt nhất trong 4 lo&agrave;i c&aacute; rồng v&igrave; ngo&agrave;i sự hiếm hoi c&oacute; sẵn th&igrave; tỷ lệ &eacute;p đẻ th&agrave;nh c&ocirc;ng cũng thấp.</p>\r\n\r\n<p>Người ta chọn nu&ocirc;i c&aacute; rồng Kim Long Qu&aacute; Bối với ngụ &yacute; biểu thị quyền uy, mang lại t&agrave;i lộc, vinh hoa cho gia chủ.</p>\r\n', 1, '', '', '', '2020-11-17 02:32:08', NULL),
(7, 4, 'QUÁ BỐI', '1605580393-product-qua-boi.jpg', 5000000, 15, 'Cá rồng Qúa Bối đầu vàng là một trong họ Kim Long Quá Bối chủ yếu sinh trưởng bang Berak của Malaysia.', '<p><strong>C&aacute; rồng Qu&aacute; Bối đầu v&agrave;ng&nbsp;</strong>sở hữu những chiếc vảy v&agrave;ng &oacute;ng đến h&agrave;ng v&acirc;y thứ năm v&agrave; đặc biệt m&agrave;u v&agrave;ng ch&oacute;i l&oacute;a sẽ ph&aacute;t triển nhất ở bộ phận đầu.</p>\r\n\r\n<p>M&agrave;u sắc t&ocirc;n qu&yacute; của Qu&aacute; Bối Đầu V&agrave;ng chẳng những mang t&iacute;nh thẩm mỹ m&agrave; c&ograve;n tượng trưng cho t&agrave;i lộc sum vầy.</p>\r\n\r\n<p>Nu&ocirc;i Qu&aacute; Bối Đầu V&agrave;ng kh&ocirc;ng chỉ thể hiện đam m&ecirc; m&agrave; c&ograve;n n&acirc;ng cao đẳng cấp của chủ nh&acirc;n.</p>\r\n', 1, '', '', '', '2020-11-17 02:33:13', '2020-11-17 09:37:41'),
(8, 4, 'NGÂN LONG', '1605580501-product-ngan-long.jpg', 6000000, 15, 'Cá rồng ngân long là một loại cá có nguồn gốc từ nam mỹ', '<p><strong>C&aacute; rồng ng&acirc;n long</strong>&nbsp;l&agrave; một loại c&aacute; c&oacute; nguồn gốc từ nam mỹ l&agrave; loại c&aacute; rồng c&oacute; k&iacute;ch thước tối đa 1,2 m&eacute;t, vảy to, h&agrave;m dưới trề, th&acirc;n h&igrave;nh tr&ocirc;ng giống như con dao bầu. Khi c&ograve;n nhỏ, th&acirc;n c&aacute; thường c&oacute; những lằn xanh &aacute;nh kim v&agrave; cam, đầu v&agrave; v&acirc;y c&oacute; những đốm đen, viền v&acirc;y m&agrave;u hồng. Khi trưởng th&agrave;nh, c&aacute; chuyển sang m&agrave;u &aacute;nh bạc. C&aacute; đực c&oacute; v&acirc;y hậu m&ocirc;n d&agrave;i v&agrave; nhọn hơn c&aacute; c&aacute;i.</p>\r\n\r\n<p><br />\r\n<strong>C&aacute; rồng Ng&acirc;n long</strong>&nbsp;nổi bật khi sở hữu m&agrave;u bạc to&agrave;n th&acirc;n, k&iacute;ch thước tương đối lớn, cơ thể d&agrave;i, v&agrave; một c&aacute;i đu&ocirc;i nhọn với v&acirc;y lưng v&agrave; v&acirc;y hậu m&ocirc;n k&eacute;o d&agrave;i về ph&iacute;a v&acirc;y đu&ocirc;i nhỏ, nơi ch&uacute;ng gần như hợp nhất. Điều n&agrave;y c&oacute; phần kh&aacute;c khi m&agrave; c&aacute; rồng ch&acirc;u &Aacute; v&agrave; ch&acirc;u &Uacute;c c&oacute; v&acirc;y lưng v&agrave; v&acirc;y hậu m&ocirc;n ngắn l&ugrave;i xa về ph&iacute;a sau, v&acirc;y ngực v&agrave; đu&ocirc;i kh&aacute; lớn so với th&acirc;n m&igrave;nh.</p>\r\n', 1, '', '', '', '2020-11-17 02:35:01', NULL),
(9, 4, 'HUYẾT LONG', '1605580576-product-huyet-long.jpg', 8000000, 15, 'Cá rồng huyết long là loài đứng đầu trong dòng cá rồng về cả màu sắc cũng như giá trị.', '<p><strong>C&aacute; rồng huyết long</strong>&nbsp;l&agrave; lo&agrave;i đứng đầu trong d&ograve;ng c&aacute; rồng về cả m&agrave;u sắc cũng như gi&aacute; trị. C&aacute; huyết long chất lượng cao thường c&oacute; m&agrave;u v&acirc;y đỏ sậm v&agrave; đều ngay từ khi c&ograve;n nhỏ. Ch&uacute;ng c&ograve;n c&oacute; m&agrave;u sắc nổi bật v&agrave; lưng thật sậm m&agrave;u. Những con c&aacute; đẹp cũng c&oacute; nhiều m&agrave;u &aacute;nh kim tr&ecirc;n th&acirc;n.</p>\r\n\r\n<p><strong>C&aacute; rồng huyết long c&oacute; 2 loại : Chili red v&agrave; Blood red.</strong></p>\r\n\r\n<p>C&aacute; rồng &quot;Chili Red&quot; c&oacute; m&agrave;u đỏ tươi, th&acirc;n rộng, d&agrave;y v&agrave; d&agrave;i đều từ đầu cho đến đu&ocirc;i trong khi &quot;Blood Red&quot; c&oacute; m&agrave;u đỏ sậm, th&acirc;n d&agrave;i, mảnh v&agrave; thu&ocirc;n về ph&iacute;a đu&ocirc;i. Ngo&agrave;i ra, một v&agrave;i đặc điểm dễ nhận biết kh&aacute;c l&agrave; mắt &quot;Chili Red&quot; m&agrave;u đỏ v&agrave; to chạm đến viền ngo&agrave;i của đầu v&agrave; h&agrave;m dưới c&ograve;n mắt &quot;Blood Red&quot; c&oacute; m&agrave;u nhạt v&agrave; nhỏ hơn. Đu&ocirc;i của &quot;Blood Red&quot; h&igrave;nh quạt tr&ocirc;ng đẹp hơn đu&ocirc;i h&igrave;nh thoi của &quot;Chili Red&quot;.</p>\r\n', 1, '', '', '', '2020-11-17 02:36:16', NULL),
(10, 5, 'Bể cá rồng mẫu R1', '1605580651-product-bc_rong_r1.jpg', 5000000, 10, '', '<h2><strong>1. Giới thiệu mẫu bế c&aacute; rồng R1</strong></h2>\r\n\r\n<p>- Bể k&iacute;nh Việt Nhật với độ d&agrave;y ph&ugrave; hợp. ( K&iacute;nh cường lực an to&agrave;n, k&iacute;nh c&oacute; độ d&agrave;y 12mm, 15mm, 19mm, 24mm...)<br />\r\n- Bể lọc dưới c&oacute; thể t&iacute;ch ph&ugrave; hợp với bể ch&iacute;nh.<br />\r\n- Ch&acirc;n gỗ tự nhi&ecirc;n.( Khung Tr&ograve; Chỉ, Căm Xe, Lim.C&aacute;nh Sồi, Xoan, Hương Đỏ, Gụ. Chạm trổ hoa văn )<br />\r\n- Hệ thống đường ống h&uacute;t mặt h&uacute;t đ&aacute;y, nấm h&uacute;t đ&aacute;y, van air, xẻ r&atilde;nh h&uacute;t mặt với y&ecirc;u cầu thẩm mỹ cao nhất.<br />\r\n- M&aacute;y Bơm c&oacute; c&ocirc;ng suất ph&ugrave; hợp với bể của Atman.<br />\r\n- Đ&egrave;n T5 Odysea c&oacute; k&iacute;ch thước v&agrave; c&ocirc;ng suất ph&ugrave; hợp với bể.<br />\r\n- Tranh 3D in theo mẫu kh&aacute;ch lựa chọn.<br />\r\n- Vật liệu lọc b&ugrave;i nh&ugrave;i, nham thạch, sứ lọc. . .<br />\r\n- Sưởi Odysea<br />\r\n- Ngo&agrave;i ra c&ograve;n c&oacute; đường chờ cho nhiều thiết bị kh&aacute;c nếu kh&aacute;ch h&agrave;ng c&oacute; y&ecirc;u cầu lắp th&ecirc;m ( Dotech, đ&egrave;n UV, thay nước tự động, v..v...)</p>\r\n', 1, '', '', '', '2020-11-17 02:37:31', NULL),
(11, 6, 'Bể cá biển mẫu B1', '1605580726-product-bc_tuong_t1.png', 4500000, 10, '', '<h2><strong>1. Giới thiệu mẫu bể c&aacute; treo tường B1</strong></h2>\r\n\r\n<p>- Bể c&aacute; biển treo tường khung gỗ&nbsp;</p>\r\n\r\n<p>- Trang tr&iacute; giả cảnh biển&nbsp;</p>\r\n\r\n<p>- Sử dụng san h&ocirc; b&ocirc;ng v&agrave; hải quỳ trang tr&iacute; bể c&aacute; cảnh . Đ&agrave;n c&aacute; bơi lội tạo n&ecirc;n bức tranh sống động ngay trong nh&agrave;.</p>\r\n\r\n<p>- Ph&iacute;a sau l&agrave; tranh 3d tạo chiều s&acirc;u cho bể c&aacute;&nbsp;</p>\r\n\r\n<p>- Phụ kiện : Đ&egrave;n + bộ lọc + bộ sục kh&iacute; +sưởi ,....</p>\r\n\r\n<p>- Sang trọng - chất lượng&nbsp;</p>\r\n', 1, '', '', '', '2020-11-17 02:38:46', NULL),
(12, 8, 'ĐÈN DIỆT KHUẨN UV BL-UV008', '1605580788-product-pk_den_d1.jpg', 300000, 20, '', '<h2><strong>1. Giới thiệu đ&egrave;n diệt khuẩn uv BL - UV008</strong></h2>\r\n\r\n<p>Th&ocirc;ng số kỹ thuật</p>\r\n\r\n<p>Điện &aacute;p: 220V</p>\r\n\r\n<p>C&ocirc;ng suất: 8w</p>\r\n\r\n<p>Tần số: 60/50Hz</p>\r\n\r\n<p>Thiết kế hiện đại, độc đ&aacute;o, thanh lịch</p>\r\n\r\n<p>Cấu tr&uacute;c độc đ&aacute;o để điều chỉnh luồng nước lu&acirc;n chuyển v&agrave; diệt khuẩn. đ&egrave;n UV v&agrave; k&iacute;nh được l&agrave;m bằng thạch anh tinh khiết chất lượng cao, khiến hiệu quả diệt khuẩn tốt hơn.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng:&nbsp;</strong>Diệt r&ecirc;u, diệt khuẩn bể c&aacute;</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong></p>\r\n\r\n<p>- Đ&egrave;n được lắp với m&aacute;y bơm . Nước sẽ chạy qua đ&egrave;n, được khử khuẩn v&agrave; đưa l&ecirc;n m&aacute;ng lọc, sau đ&oacute; được trả xuống bể.</p>\r\n\r\n<p>- Kh&ocirc;ng sử dung li&ecirc;n tục, mỗi lần d&ugrave;ng 4-6h</p>\r\n\r\n<p>- Tắt nguồn điện trước khi cho tay v&agrave;o nước</p>\r\n\r\n<p>- Kh&ocirc;ng để &aacute;nh s&aacute;ng đ&egrave;n trực tiếp v&agrave;o mắt người, c&aacute; v&agrave; c&aacute;c động vật dưới nước kh&aacute;c để tr&aacute;nh thương t&iacute;ch v&agrave; thiệt hại</p>\r\n', 1, '', '', '', '2020-11-17 02:39:48', NULL),
(13, 7, 'Máy sục khí bể cá Gex 1000', '1605580839-product-pk_suc_khi_s1.jpg', 800000, 20, '', '<h2>1. Giới thiệu mẫu m&aacute;y sục kh&iacute; bể c&aacute; Gex 1000</h2>\r\n\r\n<p>- Nh&atilde;n hiệu: Gex<br />\r\n- Model: e-air 1000SB<br />\r\n- Xuất xứ: Nhật bản<br />\r\n- Nguồn điện: 220v-240v/50hz<br />\r\n- Số lượng v&ograve;i: 1<br />\r\n- Chế độ điều chỉnh lưu lượng kh&iacute;: Kh&ocirc;ng&nbsp;<br />\r\n- Mức độ g&acirc;y ồn: Thấp<br />\r\n- C&ocirc;ng suất: 1,2w<br />\r\n- Lưu lượng kh&iacute;: 0,8l&iacute;t/ph&uacute;t<br />\r\n- K&iacute;ch thước: 5,2x4,3x9,2cm<br />\r\n- Sản phẩm gồm: M&aacute;y sủi<br />\r\n- Phụ kiện gồm: d&acirc;y, quả sủi, miếng sủi, thanh sủi, đồ chơi cho m&aacute;y sủi kh&aacute;ch h&agrave;ng mua ri&ecirc;ng<br />\r\n- C&ocirc;ng dụng: D&ugrave;ng để tạo &ocirc; xi cho bể c&aacute;<br />\r\n- C&aacute;ch sử dụng: Để quả sủi, miếng sủi, thanh sủi, đồ chơi cho m&aacute;y sủi trong bể<br />\r\n- Khuyến c&aacute;o của nh&agrave; sản xuất: Để m&aacute;y sủi cao hơn so với mực nước của bể, tr&aacute;nh nước tiếp x&uacute;c với m&aacute;y sủi</p>\r\n', 1, '', '', '', '2020-11-17 02:40:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL COMMENT 'File ảnh slide',
  `position` tinyint(3) DEFAULT NULL COMMENT 'Vị trí hiển thị của slide, ví dụ: = 0 hiển thị đầu tiên...',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `avatar`, `position`, `status`, `created_at`, `updated_at`) VALUES
(3, 'hihi', '1605279775-bc_tuong_t1.png', 3, 0, '2020-11-13 15:02:55', '2020-11-16 21:17:27'),
(4, 'saa11', '1605280224-news_2.png', NULL, 0, '2020-11-13 15:10:24', NULL),
(5, 'aaaa222', '1605280273-news_3.jpg', 0, 0, '2020-11-13 15:11:13', '2020-11-14 21:13:18'),
(6, 'abc', '1605281780-news_4.jpg', 0, 0, '2020-11-13 15:36:20', '2020-11-14 21:13:22'),
(7, 'ac', '1605281968-news_1.jpg', 0, 0, '2020-11-13 15:39:28', '2020-11-14 21:13:38'),
(8, 'ad', '1605282073-news_3.jpg', 0, 0, '2020-11-13 15:41:13', '2020-11-14 21:13:47'),
(9, 'hihi', '1605282133-news_1.jpg', NULL, 0, '2020-11-13 15:42:13', NULL),
(10, 'gg', '1605282990-showa-koi.jpg', 0, 0, '2020-11-13 15:56:30', '2020-11-14 21:13:56'),
(11, 'hihi1', '1605362626-koi_1.jpg', 0, 0, '2020-11-14 14:03:46', '2020-11-14 21:14:06'),
(12, 'kien21', '1605362692-news_4.jpg', 0, 0, '2020-11-14 14:04:52', '2020-11-14 21:14:12'),
(13, 'saa11s', '1605362903-slide_3.jpg', 0, 0, '2020-11-14 14:08:23', '2020-11-14 21:14:17'),
(14, 'slide1', '1605576832-banner.jpg', 0, 1, '2020-11-17 01:33:52', NULL),
(15, 'slide2', '1605576865-midbanner.jpg', 1, 1, '2020-11-17 01:34:25', NULL),
(16, 'slide3', '1605576984-img2.jpg', 2, 1, '2020-11-17 01:36:24', NULL),
(17, 'slide4', '1605577008-img4.jpg', 3, 1, '2020-11-17 01:36:48', NULL),
(18, 'slide5', '1605577032-img6.jpg', 4, 1, '2020-11-17 01:37:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(255) DEFAULT NULL COMMENT 'Mật khẩu đăng nhập',
  `first_name` varchar(255) DEFAULT NULL COMMENT 'Fist name',
  `last_name` varchar(255) DEFAULT NULL COMMENT 'Last name',
  `phone` int(11) DEFAULT NULL COMMENT 'SĐT user',
  `address` varchar(255) DEFAULT NULL COMMENT 'Địa chỉ user',
  `email` varchar(255) DEFAULT NULL COMMENT 'Email của user',
  `avatar` varchar(255) DEFAULT NULL COMMENT 'File ảnh đại diện',
  `jobs` varchar(255) DEFAULT NULL COMMENT 'Nghề nghiệp',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `facebook` varchar(255) DEFAULT NULL COMMENT 'Link facebook',
  `status` tinyint(3) NOT NULL DEFAULT 1 COMMENT 'phân quyền : 0 - admin ; 1 - users',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `phone`, `address`, `email`, `avatar`, `jobs`, `last_login`, `facebook`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kienhi', 'e10adc3949ba59abbe56e057f20f883e', 'kien', 'bui', 123456, '', '', '1605016966-user-avatar_kienhi.jpg', '', NULL, '', 0, '2020-10-21 02:24:25', NULL),
(2, 'buikien', 'e10adc3949ba59abbe56e057f20f883e', 'bui', 'kien', 123456, 'Hà Đông', 'abc@gmail.com', '1605617783-user-news_4.jpg', 'Sinh viên', NULL, '', 1, '2020-11-17 12:56:23', NULL),
(3, 'kienhi2', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-21 14:51:21', NULL),
(4, 'kienhi3', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-21 15:22:36', NULL),
(5, 'kienhi5', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-21 15:25:09', NULL),
(6, 'aaaa', 'e10adc3949ba59abbe56e057f20f883e', 'hihi', 'kien', 123456, 'aaaa', 'godnaruto6519@gmail.com', NULL, '', NULL, '', 1, '2020-11-22 02:53:09', NULL),
(7, 'buikien3', 'e10adc3949ba59abbe56e057f20f883e', 'hihi', 'kien', 123456, 'aaaa', 'godnaruto6519@gmail.com', '1606013904-user-', '', NULL, '', 1, '2020-11-22 02:58:24', NULL),
(8, 'test', 'c4ca4238a0b923820dcc509a6f75849b', 'hihi', 'kien', 123456, 'aaaa', 'godnaruto6519@gmail.com', '1606014563-user-', '', NULL, '', 1, '2020-11-22 03:09:23', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
