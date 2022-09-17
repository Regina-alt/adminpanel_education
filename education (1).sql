-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2022 г., 11:06
-- Версия сервера: 8.0.24
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `education`
--

-- --------------------------------------------------------

--
-- Структура таблицы `grade`
--

CREATE TABLE `grade` (
  `id_grade` int NOT NULL,
  `fk_student` int NOT NULL,
  `fk_kurs` int NOT NULL,
  `fk_lesson` int NOT NULL,
  `grade_for_lesson` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `grade`
--

INSERT INTO `grade` (`id_grade`, `fk_student`, `fk_kurs`, `fk_lesson`, `grade_for_lesson`) VALUES
(1, 1, 3, 1, 5),
(2, 1, 3, 2, 4),
(3, 21, 3, 24, 5),
(4, 21, 3, 21, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `gruppa`
--

CREATE TABLE `gruppa` (
  `id_gruppa` int NOT NULL,
  `number_of_gruppa` varchar(50) NOT NULL,
  `fk_speciality` int NOT NULL,
  `fk_kurs` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `gruppa`
--

INSERT INTO `gruppa` (`id_gruppa`, `number_of_gruppa`, `fk_speciality`, `fk_kurs`) VALUES
(1, '21-ИС-11.1', 1, 1),
(2, '21-ИС-11.2', 1, 1),
(3, '21-ИС-21.1', 1, 1),
(4, '21-ИС-21.2', 1, 1),
(5, '20-ИС-12.1', 1, 2),
(6, '20-ИС-12.2', 1, 2),
(7, '20-ИС-22.1', 1, 2),
(8, '20-ИС-22.2', 1, 2),
(9, '19-ИС-13.1', 1, 3),
(10, '19-ИС-13.2', 1, 3),
(11, '19-ИС-23.1', 1, 3),
(12, '19-ИС-23.2', 1, 3),
(13, '18-ИС-14.1', 1, 4),
(14, '18-ИС-14.2', 1, 4),
(15, '18-ИС-24.1', 1, 4),
(16, '18-ИС-24.2', 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `kurs`
--

CREATE TABLE `kurs` (
  `id_kurs` int NOT NULL,
  `number_of_kurs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `kurs`
--

INSERT INTO `kurs` (`id_kurs`, `number_of_kurs`) VALUES
(1, '1 курс'),
(2, '2 курс'),
(3, '3 курс'),
(4, '4 курс');

-- --------------------------------------------------------

--
-- Структура таблицы `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int NOT NULL,
  `name_of_lesson` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_of_lesson` date NOT NULL,
  `fk_predmet` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `name_of_lesson`, `date_of_lesson`, `fk_predmet`) VALUES
(1, 'Занятие 1 Введение в JavaScript (2/2)', '2022-01-10', 5),
(2, 'Занятие 2 Альтернативные технологии. Ввод и вывод данных (2/4)', '2022-01-13', 5),
(3, 'Занятие 3 Основы JavaScript. Структура кода (2/6)', '2022-01-17', 5),
(4, 'Занятие 4 Создание переменных. Область действия переменных (2/8)', '2022-01-20', 5),
(5, 'Занятие 5 Введение в типы данных (2/10)', '2022-01-24', 5),
(6, 'Занятие 6 Операторы языка. Арифметические операторы. Операторы сравнения. Логические операторы (2/12)', '2022-01-27', 5),
(7, 'Самостоятельная работа 1. (2/2)', '2022-01-31', 5),
(8, 'Занятие 7 Циклические конструкции (2/14)', '2022-02-03', 5),
(9, 'Занятие 8 Директивы break и continue (2/16)', '2022-02-07', 5),
(10, 'Самостоятельная работа 2(2/4)', '2022-02-10', 5),
(11, 'Занятие 9 Конструкция Switch. Синтаксис и объявление (2/18)', '2022-02-10', 5),
(12, 'Занятие 10 Назначение функций в JavaScript. Синтаксис объявления. Стиль объявления функций. (2/20)', '2022-02-14', 5),
(13, 'Занятие 11 Функции. Встроенные и пользовательские функции (2/22)', '2022-02-17', 5),
(14, 'Занятие 12 Параметры функций. Выражения с функциями (2/24)', '2022-02-21', 5),
(15, 'Самостоятельная работа 3. (2/6)', '2022-02-24', 5),
(16, 'Самостоятельная работа 4. (2/8)', '2022-02-28', 5),
(17, 'Занятие 1 Введение в язык скриптов PHP (2/2)', '2022-01-11', 6),
(18, 'Занятие 2 Установка и настройка Web-сервера (2/4)', '2022-01-12', 6),
(19, 'Самостоятельная работа 1 (2/2)', '2022-01-18', 6),
(20, 'Самостоятельная работа 2. (2/4)', '2022-01-19', 6),
(21, 'Занятие 3 Синтаксис языка (2/6)', '2022-01-25', 6),
(22, 'Занятие 4.Основные операторы языка (2/8)', '2022-01-26', 6),
(23, 'Занятие 5.Типы данных PHP (2/10)', '2022-02-01', 6),
(24, 'Занятие 6. Синтаксис управляющих конструкций (2/12)', '2022-02-02', 6),
(25, 'Занятие 7.Практическое занятие 1. (2/2)', '2022-02-08', 6),
(26, 'Самостоятельная работа 3. (2/6)', '2022-02-09', 6),
(27, 'Занятие 8.Циклические конструкции PHP (2/14)', '2022-02-15', 6),
(28, 'Занятие 9.Создание и преобразование массива (2/16)', '2022-02-16', 6),
(29, 'Самостоятельная работа 4 (2/8)', '2022-02-22', 6),
(30, 'Занятие 10.Практическое занятие 2. (2/4)', '2022-02-23', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `predmet`
--

CREATE TABLE `predmet` (
  `id_predmet` int NOT NULL,
  `name_of_predmet` varchar(100) NOT NULL,
  `fk_rabotnik` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `predmet`
--

INSERT INTO `predmet` (`id_predmet`, `name_of_predmet`, `fk_rabotnik`) VALUES
(1, 'ЕН.03 Теория вероятностей и математическая статистика', 9),
(2, 'МДК.01.03 Распределенные системы обработки информации', 8),
(3, 'МДК.2.1.3 Разработка корпоративных информационных систем', 8),
(4, 'ОП.03 Компьютерные сети', 8),
(5, 'Тема 3.1.2 Основы программирования на Java Script', 8),
(6, 'Тема 3.1.3 Введение в программирование PHP5', 8),
(7, 'Физкультура', 11),
(8, 'ОГСЭ.03 Иностранный язык (первая подгруппа)', 2),
(9, 'ОГСЭ.03 Иностранный язык (вторая подгруппа)', 5),
(10, 'МДК.02.02 Управление проектами', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `rabotnik`
--

CREATE TABLE `rabotnik` (
  `id_rabotnik` int NOT NULL,
  `fio` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `rabotnik`
--

INSERT INTO `rabotnik` (`id_rabotnik`, `fio`, `position`) VALUES
(1, 'Бакулин Андрей Михайлович', 'Заведующий отделения ОИТ'),
(2, 'Белик Марина Сергеевна', 'Преподаватель'),
(3, 'Богатырева Татьяна Николаевна', 'Преподаватель'),
(4, 'Богданова Ирина Николаевна', 'Преподаватель'),
(5, 'Денисова Тамара Викторовна', 'Преподаватель'),
(6, 'Ипатов Никита Михайлович', 'Преподаватель'),
(7, 'Кондратьев Павел Сергеевич', 'Преподаватель'),
(8, 'Кругленя Вячеслав Юрьевич', 'Преподаватель'),
(9, 'Малашевская Ирина Валерьевна', 'Преподаватель'),
(10, 'Мясоедова Ирина Яковлевна', 'Преподаватель'),
(11, 'Попов Сергей Федорович', 'Преподаватель'),
(12, 'Халина Екатерина Николаевна', 'Преподаватель');

-- --------------------------------------------------------

--
-- Структура таблицы `speciality`
--

CREATE TABLE `speciality` (
  `id_speciality` int NOT NULL,
  `name_of_speciality` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `code_of_speciality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `speciality`
--

INSERT INTO `speciality` (`id_speciality`, `name_of_speciality`, `code_of_speciality`) VALUES
(1, ' Информационные системы и программирование', '09.02.07'),
(2, ' Эксплуатация оборудования радиосвязи', '11.02.03 '),
(3, 'Монтаж и ремонт промышленного оборудования', '15.02.12'),
(4, 'Монтаж и техническая эксплуатация\r\nхолодильно-компрессорных машин и установок', '15.02.06 '),
(5, 'Поварское и кондитерское дело', '43.02.15 '),
(6, 'Организация перевозок и управление на\r\nтранспорте (по видам)\r\n', '23.02.01'),
(7, 'Техническое обслуживание и ремонт\r\nдвигателей, систем и агрегатов автомобилей', '23.02.07'),
(8, 'Судовождение', '26.02.03 '),
(9, 'Эксплуатация судовых энергетических\r\nустановок', '26.02.05'),
(10, 'Эксплуатация судового\r\nэлектрооборудования и средств автоматики', '26.02.06 '),
(11, 'Обработка водных биоресурсов ', '35.02.10'),
(12, 'Промышленное рыболовство ', '35.02.11'),
(13, 'Экономика и бухгалтерский учет\r\n(по отраслям)', '38.02.01');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id_student` int NOT NULL,
  `fio` varchar(100) NOT NULL,
  `fk_gruppa` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id_student`, `fio`, `fk_gruppa`) VALUES
(1, 'Алексеенко Валерия Сергеевна\r\n', 11),
(2, 'Богданов Кирилл Павлович\r\n', 11),
(3, 'Бразовская Екатерина Юрьевна\r\n', 11),
(4, 'Вашкявичюс Витас Арвидасович\r\n', 11),
(5, 'Волков Иван Николаевич\r\n', 11),
(6, 'Голубенко Никита Дмитриевич', 11),
(7, 'Евлоев Харон Хусейнович\r\n', 11),
(8, 'Зудилин Никита Андреевич\r\n', 11),
(9, 'Иванов Радим Алексеевич\r\n', 11),
(10, 'Карбовская Анна Вячеславовна\r\n', 11),
(11, 'Киянов Яков Сергеевич\r\n', 11),
(12, 'Кодряну Иван Юрьевич\r\n', 11),
(13, 'Комаров Александр Андреевич \r\n', 11),
(14, 'Коробейников Кирилл Антонович\r\n', 12),
(15, 'Корсаков Максим Сергеевич\r\n', 12),
(16, 'Кузнецов Иван Сергеевич\r\n', 12),
(17, 'Кузьменко Даниил Андреевич\r\n', 12),
(18, 'Макеев Егор Максимович\r\n', 12),
(19, 'Максименко Артем Иванович\r\n', 12),
(20, 'Малахов Данил Владимирович\r\n', 12),
(21, 'Мигачева Регина Михайловна\r\n', 12),
(22, 'Сергеев Дмитрий Алексеевич\r\n', 12),
(23, 'Скакунов Кирилл Алексеевич\r\n', 12),
(24, 'Тризна Елизавета Сергеевна\r\n', 12),
(25, 'Швайко Арсений Сергеевич\r\n', 12),
(26, 'Шель Роман Олегович\r\n', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `fio`) VALUES
(1, 'SYSDBA', 'masterkey', 'Администратор');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`),
  ADD KEY `fk_kurs` (`fk_kurs`),
  ADD KEY `fk_lesson` (`fk_lesson`),
  ADD KEY `fk_student` (`fk_student`);

--
-- Индексы таблицы `gruppa`
--
ALTER TABLE `gruppa`
  ADD PRIMARY KEY (`id_gruppa`),
  ADD KEY `fk_kurs` (`fk_kurs`),
  ADD KEY `fk_speciality` (`fk_speciality`);

--
-- Индексы таблицы `kurs`
--
ALTER TABLE `kurs`
  ADD PRIMARY KEY (`id_kurs`);

--
-- Индексы таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`),
  ADD KEY `fk_predmet` (`fk_predmet`);

--
-- Индексы таблицы `predmet`
--
ALTER TABLE `predmet`
  ADD PRIMARY KEY (`id_predmet`),
  ADD KEY `fk_rabotnik` (`fk_rabotnik`);

--
-- Индексы таблицы `rabotnik`
--
ALTER TABLE `rabotnik`
  ADD PRIMARY KEY (`id_rabotnik`);

--
-- Индексы таблицы `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`id_speciality`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `fk_gruppa` (`fk_gruppa`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `grade`
--
ALTER TABLE `grade`
  ADD CONSTRAINT `grade_ibfk_1` FOREIGN KEY (`fk_kurs`) REFERENCES `kurs` (`id_kurs`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `grade_ibfk_2` FOREIGN KEY (`fk_lesson`) REFERENCES `lesson` (`id_lesson`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `grade_ibfk_3` FOREIGN KEY (`fk_student`) REFERENCES `student` (`id_student`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `gruppa`
--
ALTER TABLE `gruppa`
  ADD CONSTRAINT `gruppa_ibfk_1` FOREIGN KEY (`fk_kurs`) REFERENCES `kurs` (`id_kurs`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `gruppa_ibfk_2` FOREIGN KEY (`fk_speciality`) REFERENCES `speciality` (`id_speciality`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`fk_predmet`) REFERENCES `predmet` (`id_predmet`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `predmet`
--
ALTER TABLE `predmet`
  ADD CONSTRAINT `predmet_ibfk_1` FOREIGN KEY (`fk_rabotnik`) REFERENCES `rabotnik` (`id_rabotnik`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`fk_gruppa`) REFERENCES `gruppa` (`id_gruppa`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
