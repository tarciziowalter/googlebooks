-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jul-2020 às 18:17
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google_books`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `descricao`, `imagem`) VALUES
(9, 'PHP Programando com Orientação a Objetos - 2ª Edição', '1.2 Um programa PHP 1.2.1 Extensão de arquivos A seguir, estão listadas as \nextensões mais utilizadas para programas em PHP. Extensão Significado .php \nArquivo PHP contendo um programa. .class.php Arquivo PHP contendo uma \nclasse.', 'http://books.google.com/books/content?id=G-ehEz2WRCQC&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api'),
(10, 'JavaScript', 'This book explores the newest features of the world\\\'s most popular programming language while also showing readers how to track what\\\'s coming next.', 'http://books.google.com/books/content?id=-i3rDwAAQBAJ&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api'),
(11, 'Criando Sites com HTML', 'Sites de Alta Qualidade com HTML e CSS Maurício Samy Silva. 1.1.2. HTML. \nHTML é a sigla em inglês para HyperText Markup Language, que, em português, \nsignifica linguagem para marcação de hipertexto. O conceito de hipertexto \nadmite ...', 'http://books.google.com/books/content?id=_HBVQ-w5ZcoC&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api'),
(12, 'MySQL - Guia do Programador', 'O MySQL Client interpreta o caractere \\\';\\\' (ponto-e-vírgula) como final de string e \ncomandos, podendo haver conflitos ao tentar utilizar esse caractere dentro do \ncódigo SQL das functions ou stored procedures. Para solucionar esse problema,\n ...', 'http://books.google.com/books/content?id=81EwMDA-pC0C&printsec=frontcover&img=1&zoom=5&edge=curl&source=gbs_api');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
