-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 07 2024 г., 06:31
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nikilshikdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `matches`
--

CREATE TABLE `matches` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `first_team` varchar(999) NOT NULL,
  `last_team` varchar(999) NOT NULL,
  `score` varchar(999) NOT NULL,
  `city_first` varchar(999) NOT NULL,
  `city_last` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `matches`
--

INSERT INTO `matches` (`id`, `date`, `time`, `first_team`, `last_team`, `score`, `city_first`, `city_last`) VALUES
(1, '2024-05-15', '19:00:00', 'Никельщик', 'Трактор', '2 : 3', 'Верхний Уфалей', 'Челябинск'),
(2, '2024-05-23', '18:00:00', 'Никельщик', 'Салават Юлаев', '4:1', 'Верхний Уфалей', 'Челябинск'),
(3, '2024-05-23', '17:00:00', 'Никельщик', 'Динамо М', '...', 'Верхний Уфалей', 'Москва'),
(4, '2024-05-31', '17:00:00', 'Никельщик', '\r\nЛокомотив', '...', 'Верхний Уфалей\r\n\r\n', 'Ярославль'),
(5, '2024-05-30', '18:00:00', 'Никельщик', '\rАк Барс', '...', 'Верхний Уфалей\r\n\r\n', 'Казань'),
(6, '2024-05-29', '16:00:00', 'Никельщик', '\rАмур', '...', 'Верхний Уфалей\r\n\r\n', 'Хабаровск');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `user` varchar(100) NOT NULL,
  `message` varchar(9999) NOT NULL,
  `timestamp` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `password`) VALUES
(26, '1', '1', '1', '1'),
(27, '3', '3', '3', '3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
