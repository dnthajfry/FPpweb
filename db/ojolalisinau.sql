-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 08:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ojolalisinau`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer_text`) VALUES
(1, 1, 'php'),
(2, 1, 'pusing Hadu pegel'),
(3, 1, 'puh hepeng pelit'),
(4, 1, 'Hypertext Preprocessor'),
(5, 2, 'tim keledai'),
(6, 2, 'tim kalahan'),
(7, 2, 'tim scuderia itali'),
(8, 2, 'tim banteng merah'),
(9, 3, 'id digunakan untuk elemen tunggal, class untuk elemen ganda'),
(10, 3, 'id digunakan untuk gaya CSS, class hanya untuk JavaScript'),
(11, 3, 'Tidak ada perbedaan; keduanya digunakan untuk elemen yang sama'),
(12, 3, 'id hanya digunakan dalam form, class untuk elemen lainnya'),
(13, 4, 'Menampilkan teks tetapi tidak bisa diubah'),
(14, 4, 'Membuat input hanya bisa diisi dengan angka'),
(15, 4, 'Menyembunyikan elemen input agar tidak terlihat di halaman'),
(16, 4, 'Membuat input yang hanya bisa dibaca oleh pengguna'),
(17, 5, '4'),
(18, 5, '6'),
(19, 5, '8'),
(20, 5, '10'),
(21, 6, 'bahasa'),
(22, 6, 'program'),
(23, 6, 'Hypertext Mark Languange'),
(24, 6, 'Bahasa inggris coding');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `certification_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `learning_path_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learningpaths`
--

CREATE TABLE `learningpaths` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `correct_answer`) VALUES
(1, 'Kepanjangan PHp', 'Hypertext Preprocessor'),
(2, 'Apaa itu ferrari', 'tim scuderia itali'),
(3, 'Apa perbedaan atribut id dan class di HTML?', 'id digunakan untuk elemen tunggal, class untuk elemen ganda'),
(4, 'Apa fungsi utama dari tag <input type=\"hidden\"> dalam HTML?', 'Menyembunyikan elemen input agar tidak terlihat di halaman'),
(5, 'Apa output dari kode PHP berikut?\r\n\r\nfunction test($a, $b = 2) {  \r\n    return $a * $b;  \r\n}  \r\necho test(4);', '8'),
(6, 'Apakah yang dimasuk dengan HTML', 'Hypertext Mark Languange');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `rating` int(11) NOT NULL CHECK (`rating` >= 1 and `rating` <= 5),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `rating`, `created_at`) VALUES
(1, 'Cak dui', 'Web yang bagus untuk pengembangan coding', 5, '2024-12-17 18:12:23'),
(2, 'Mbak jane', 'kalian tidak akan menyesal mengikuti kursus di web ini', 4, '2024-12-17 18:12:23'),
(3, 'Vernantius', 'OjoLaliSinau adalah platform cerdas terintegrasi dengan fitur pendidikan canggih', 5, '2024-12-17 18:12:23'),
(4, 'coba', 'Coba Berikan Modul ui ux', 4, '2024-12-17 18:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_management`
--

CREATE TABLE `user_management` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `KTM` varchar(255) DEFAULT NULL,
  `Institusi` varchar(255) DEFAULT NULL,
  `Umur` tinyint(3) UNSIGNED DEFAULT NULL CHECK (`Umur` between 1 and 100),
  `role` enum('student','admin') NOT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_management`
--

INSERT INTO `user_management` (`id`, `Nama`, `Email`, `Password`, `KTM`, `Institusi`, `Umur`, `role`, `Foto`) VALUES
(3, 'Denta', 'denta@example.com', 'Denta123', 'locationicon.png', 'iTS', 20, 'student', '11122024142026locationicon.png'),
(4, 'budi', 'budi@example.com', 'Budi12345', 'kjrfvete4iub6 iergier.png', 'iTS', 19, 'student', 'kjrfvete4iub6 iergier.png'),
(5, 'Admin1', 'admin1@example.com', 'Admin1777', 'batt36pack.png', 'iTS', 20, 'admin', 'batt36pack.png'),
(6, 'Denta', 'denta@email.com', 'Denta456', 'logoPadiCare+.png', 'iTS', 19, 'admin', 'logoPadiCare+.png'),
(7, 'coba', 'coba@email.tes', 'Cobates777', 'LOGO (1).png', 'iTS', 19, 'admin', 'LOGO (1).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `learning_path_id` (`learning_path_id`);

--
-- Indexes for table `learningpaths`
--
ALTER TABLE `learningpaths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_management`
--
ALTER TABLE `user_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learningpaths`
--
ALTER TABLE `learningpaths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_management`
--
ALTER TABLE `user_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `certifications`
--
ALTER TABLE `certifications`
  ADD CONSTRAINT `certifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_management` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `certifications_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`learning_path_id`) REFERENCES `learningpaths` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
