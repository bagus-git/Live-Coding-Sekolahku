-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Feb 2024 pada 07.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `mentor` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `course`, `mentor`, `title`) VALUES
(1, 'C++', 'Ari', 'Dr.'),
(2, 'C#', 'Ari', 'Dr.'),
(3, 'C#', 'Ari', 'Dr.'),
(4, 'CSS', 'Cania', 'S.Kom'),
(5, 'HTML', 'Cania', 'S.kom'),
(6, 'Javascript', 'Cania', 'S.Kom'),
(7, 'Phyton', 'Barry', 'S.T.'),
(8, 'Microphyton', 'Barry', 'S.T.'),
(9, 'Java', 'Darren', 'M.T.'),
(10, 'Ruby', 'Darren', 'M.T.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usercourse`
--

CREATE TABLE `usercourse` (
  `id_user` int(11) NOT NULL,
  `id_course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `usercourse`
--

INSERT INTO `usercourse` (`id_user`, `id_course`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(4, 1),
(4, 3),
(4, 5),
(4, 5),
(5, 2),
(5, 4),
(5, 6),
(6, 7),
(6, 8),
(6, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `update_at`) VALUES
(1, 'Andi', 'andi@andi.com', '12345', '2024-02-19 02:22:21', '2024-02-19 02:27:45'),
(2, 'Budi', 'budi@budi.com', '678910', '2024-02-19 02:23:32', '2024-02-19 02:28:01'),
(3, 'Caca', 'caca@caca.com', 'abcde', '2024-02-19 02:24:17', '2024-02-19 02:24:17'),
(4, 'Deni', 'deni@deni.com', 'fghij', '2024-02-19 02:25:18', '2024-02-19 02:25:18'),
(5, 'Euis', 'euis@euis.com', 'kimno', '2024-02-19 02:26:09', '2024-02-19 02:26:09'),
(6, 'Fafa', 'fafa@fafa.com', 'pprst', '2024-02-19 02:27:28', '2024-02-19 02:27:28'),
(7, 'bagus', 'bagus@bagus.com', '123', '2024-02-19 04:52:43', '2024-02-19 04:52:43'),
(10, 'bagus adi', 'bagus@bagus.com', '123', '2024-02-19 05:27:03', '2024-02-19 05:27:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
