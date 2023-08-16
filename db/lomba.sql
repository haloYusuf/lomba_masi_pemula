-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 08:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lomba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_img` varchar(100) NOT NULL,
  `news_content` mediumtext NOT NULL,
  `news_created` date NOT NULL,
  `news_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `user_id`, `news_title`, `news_img`, `news_content`, `news_created`, `news_status`) VALUES
('test3_COBA_2023-08-16_08-17-28', 3, 'Q09CQQ==', 'dGVzdDNfMjAyMy0wOC0xNl8wOC0xNy0yOC5wbmc=', 'PHNwYW4gc3R5bGU9ImJvcmRlci13aWR0aDogMHB4OyBib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigyMjQsIDIyMywgMjI1KTsgLS10dy1ib3JkZXItc3BhY2luZy14OiAwOyAtLXR3LWJvcmRlci1zcGFjaW5nLXk6IDA7IC0tdHctdHJhbnNsYXRlLXg6IDA7IC0tdHctdHJhbnNsYXRlLXk6IDA7IC0tdHctcm90YXRlOiAwOyAtLXR3LXNrZXcteDogMDsgLS10dy1za2V3LXk6IDA7IC0tdHctc2NhbGUteDogMTsgLS10dy1zY2FsZS15OiAxOyAtLXR3LXBhbi14OiA7IC0tdHctcGFuLXk6IDsgLS10dy1waW5jaC16b29tOiA7IC0tdHctc2Nyb2xsLXNuYXAtc3RyaWN0bmVzczogcHJveGltaXR5OyAtLXR3LWdyYWRpZW50LWZyb20tcG9zaXRpb246IDsgLS10dy1ncmFkaWVudC12aWEtcG9zaXRpb246IDsgLS10dy1ncmFkaWVudC10by1wb3NpdGlvbjogOyAtLXR3LW9yZGluYWw6IDsgLS10dy1zbGFzaGVkLXplcm86IDsgLS10dy1udW1lcmljLWZpZ3VyZTogOyAtLXR3LW51bWVyaWMtc3BhY2luZzogOyAtLXR3LW51bWVyaWMtZnJhY3Rpb246IDsgLS10dy1yaW5nLWluc2V0OiA7IC0tdHctcmluZy1vZmZzZXQtd2lkdGg6IDBweDsgLS10dy1yaW5nLW9mZnNldC1jb2xvcjogI2ZmZjsgLS10dy1yaW5nLWNvbG9yOiByZ2JhKDgwLDE1MCwyNDEsLjUpOyAtLXR3LXJpbmctb2Zmc2V0LXNoYWRvdzogMCAwICMwMDAwOyAtLXR3LXJpbmctc2hhZG93OiAwIDAgIzAwMDA7IC0tdHctc2hhZG93OiAwIDAgIzAwMDA7IC0tdHctc2hhZG93LWNvbG9yZWQ6IDAgMCAjMDAwMDsgLS10dy1ibHVyOiA7IC0tdHctYnJpZ2h0bmVzczogOyAtLXR3LWNvbnRyYXN0OiA7IC0tdHctZ3JheXNjYWxlOiA7IC0tdHctaHVlLXJvdGF0ZTogOyAtLXR3LWludmVydDogOyAtLXR3LXNhdHVyYXRlOiA7IC0tdHctc2VwaWE6IDsgLS10dy1kcm9wLXNoYWRvdzogOyAtLXR3LWJhY2tkcm9wLWJsdXI6IDsgLS10dy1iYWNrZHJvcC1icmlnaHRuZXNzOiA7IC0tdHctYmFja2Ryb3AtY29udHJhc3Q6IDsgLS10dy1iYWNrZHJvcC1ncmF5c2NhbGU6IDsgLS10dy1iYWNrZHJvcC1odWUtcm90YXRlOiA7IC0tdHctYmFja2Ryb3AtaW52ZXJ0OiA7IC0tdHctYmFja2Ryb3Atb3BhY2l0eTogOyAtLXR3LWJhY2tkcm9wLXNhdHVyYXRlOiA7IC0tdHctYmFja2Ryb3Atc2VwaWE6IDsgZm9udC13ZWlnaHQ6IDcwMDsgY29sb3I6IHJnYig1OCwgNTgsIDU4KTsgZm9udC1mYW1pbHk6IFJvYm90bywgJnF1b3Q7SGVsdmV0aWNhIE5ldWUmcXVvdDssIEhlbHZldGljYSwgQXJpYWwsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMjAuMjVweDsgYmFja2dyb3VuZC1jb2xvcjogcmdiKDI1NSwgMjU1LCAyNTUpOyI+WW914oCZdmUgc3BlbnQgaG91cnMgd29ya2luZyBsb2NhbGx5IG9uIHlvdXIgY29tcHV0ZXIsIGdldHRpbmcgdGhhdCBuZXcgd2Vic2l0ZSBkZXNpZ24gdG8gbG9vayBqdXN0IHJpZ2h0LiA8L3NwYW4+PHNwYW4gc3R5bGU9ImJvcmRlci13aWR0aDogMHB4OyBib3JkZXItc3R5bGU6IHNvbGlkOyBib3JkZXItY29sb3I6IHJnYigyMjQsIDIyMywgMjI1KTsgLS10dy1ib3JkZXItc3BhY2luZy14OiAwOyAtLXR3LWJvcmRlci1zcGFjaW5nLXk6IDA7IC0tdHctdHJhbnNsYXRlLXg6IDA7IC0tdHctdHJhbnNsYXRlLXk6IDA7IC0tdHctcm90YXRlOiAwOyAtLXR3LXNrZXcteDogMDsgLS10dy1za2V3LXk6IDA7IC0tdHctc2NhbGUteDogMTsgLS10dy1zY2FsZS15OiAxOyAtLXR3LXBhbi14OiA7IC0tdHctcGFuLXk6IDsgLS10dy1waW5jaC16b29tOiA7IC0tdHctc2Nyb2xsLXNuYXAtc3RyaWN0bmVzczogcHJveGltaXR5OyAtLXR3LWdyYWRpZW50LWZyb20tcG9zaXRpb246IDsgLS10dy1ncmFkaWVudC12aWEtcG9zaXRpb246IDsgLS10dy1ncmFkaWVudC10by1wb3NpdGlvbjogOyAtLXR3LW9yZGluYWw6IDsgLS10dy1zbGFzaGVkLXplcm86IDsgLS10dy1udW1lcmljLWZpZ3VyZTogOyAtLXR3LW51bWVyaWMtc3BhY2luZzogOyAtLXR3LW51bWVyaWMtZnJhY3Rpb246IDsgLS10dy1yaW5nLWluc2V0OiA7IC0tdHctcmluZy1vZmZzZXQtd2lkdGg6IDBweDsgLS10dy1yaW5nLW9mZnNldC1jb2xvcjogI2ZmZjsgLS10dy1yaW5nLWNvbG9yOiByZ2JhKDgwLDE1MCwyNDEsLjUpOyAtLXR3LXJpbmctb2Zmc2V0LXNoYWRvdzogMCAwICMwMDAwOyAtLXR3LXJpbmctc2hhZG93OiAwIDAgIzAwMDA7IC0tdHctc2hhZG93OiAwIDAgIzAwMDA7IC0tdHctc2hhZG93LWNvbG9yZWQ6IDAgMCAjMDAwMDsgLS10dy1ibHVyOiA7IC0tdHctYnJpZ2h0bmVzczogOyAtLXR3LWNvbnRyYXN0OiA7IC0tdHctZ3JheXNjYWxlOiA7IC0tdHctaHVlLXJvdGF0ZTogOyAtLXR3LWludmVydDogOyAtLXR3LXNhdHVyYXRlOiA7IC0tdHctc2VwaWE6IDsgLS10dy1kcm9wLXNoYWRvdzogOyAtLXR3LWJhY2tkcm9wLWJsdXI6IDsgLS10dy1iYWNrZHJvcC1icmlnaHRuZXNzOiA7IC0tdHctYmFja2Ryb3AtY29udHJhc3Q6IDsgLS10dy1iYWNrZHJvcC1ncmF5c2NhbGU6IDsgLS10dy1iYWNrZHJvcC1odWUtcm90YXRlOiA7IC0tdHctYmFja2Ryb3AtaW52ZXJ0OiA7IC0tdHctYmFja2Ryb3Atb3BhY2l0eTogOyAtLXR3LWJhY2tkcm9wLXNhdHVyYXRlOiA7IC0tdHctYmFja2Ryb3Atc2VwaWE6IDsgY29sb3I6IHJnYig1OCwgNTgsIDU4KTsgZm9udC1mYW1pbHk6IFJvYm90bywgJnF1b3Q7SGVsdmV0aWNhIE5ldWUmcXVvdDssIEhlbHZldGljYSwgQXJpYWwsIHNhbnMtc2VyaWY7IGZvbnQtc2l6ZTogMjAuMjVweDsgYmFja2dyb3VuZC1jb2xvcjogcmdiKDI1NSwgMjU1LCAyNTUpOyI+WW91ciBDTVMgaXMgbmljZWx5IHNldCB1cCB3aXRoIHNhbXBsZSBjb250ZW50IGFuZCB5b3Ugd2FudCB0byB0ZXN0IGl0IG91dCBvbiBhIGZldyBtb2JpbGUgZGV2aWNlcyBhbmQgdGFibGV0cy4gWW91ciBjbGllbnQgYWxzbyB3YW50cyB0byB0YWtlIGEgbG9vayDigJQgYnV0IHlvdSBkb27igJl0IGhhdmUgdGltZSB0byBtaWdyYXRlIGl0IGFsbCB0byBhIHB1YmxpYyBzZXJ2ZXIgdG8gZ2l2ZSB0aGVtIGEgcXVpY2sgcGVlay48L3NwYW4+PGJyPg==', '2023-08-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_access` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_pass`, `user_access`) VALUES
(1, 'test', 'Y29iYQ==', 1),
(2, 'test2', 'Y29iYTI=', 1),
(3, 'test3', 'Y29iYTM=', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `user_news` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD CONSTRAINT `user_news` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
