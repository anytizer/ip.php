CREATE DATABASE `ip_watch` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE ip_watch;

CREATE TABLE `ip_logs` (
  `log_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `requested_on` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  `http_client` VARCHAR(255) NOT NULL,
  `ip_address` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`log_id`)
);
