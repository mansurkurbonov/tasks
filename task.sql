-- Структура таблицы `tasks`
CREATE TABLE `tasks` (
  `id` INT AUTO_INCREMENT PRIMARY KEY ,
  `user_name` VARCHAR(50) NOT NULL,
  `body` VARCHAR(255) NOT NULL,
  `is_completed` BOOLEAN DEFAULT FALSE,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` VARCHAR(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`user_name`, `body`, `created_at`) VALUES
('steven', 'ww', '2018-07-23 06:18:10'),
('gerrard', 'ww2', '2018-07-23 06:18:10'),
('virgil', 'ww3', '2018-07-23 06:18:10'),
('jobs', 'ww4', '2018-07-23 06:18:10'),
('mansur', 'ww5', '2018-07-23 06:18:10');

-- ---------------------------------------------------------
-- Структура таблицы `users`
CREATE TABLE `users` (
  `id` int AUTO_INCREMENT PRIMARY KEY ,
  `full_name` VARCHAR(255) NOT NULL,
  `login` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `users` (`full_name`, `login`, `password`) VALUES
('Steven Gerrard', 'admin', '123');
