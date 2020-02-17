
#reservation table
CREATE TABLE IF NOT EXISTS `reservation` (
    `res_id` int(30) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `res_checkin` date NOT NULL ,
    `res_checkout` date NOT NULL ,
    `rooms` int(30) NOT NULL DEFAULT '0',
    `adults` int(30) NOT NULL DEFAULT '0',
    `kids` int(30) NOT NULL DEFAULT '0'
);


# rooms table
CREATE TABLE IF NOT EXISTS `room` (
    `r_id` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` varchar(50) NOT NULL DEFAULT '',
    `type` varchar(20) NOT NULL DEFAULT '',
    `price` float(10,2) NOT NULL,
    `amount` int(20) NOT NULL DEFAULT '0'
);

#room data
INSERT INTO room (name, type, price, amount) VALUES 
('Deluxe Oceanview Single', 'room1', '300', '20'),
('Deluxe Non-Oceanview Double', 'room2', '400', '20'),
('Deluxe Oceanview Double', 'room3', '600', '20'),
('Non-Oceanview Suite', 'room4', '850', '20'),
('Non-Oceanview Executive Suite', 'room5', '1000', '20'),
('Oceanview Executive Suite', 'room6', '1200', '20');


# user table
CREATE TABLE IF NOT EXISTS `user` (
    `uid` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `fame` varchar(100) NOT NULL DEFAULT '',
    `lame` varchar(100) NOT NULL DEFAULT '',
    `email` varchar(100) NOT NULL DEFAULT '',
    `phone` int(20) NOT NULL DEFAULT '0',
    `address` varchar(200) NOT NULL DEFAULT '',
    `city` varchar(200) NOT NULL DEFAULT '',
    `state` varchar(200) NOT NULL DEFAULT ''
);



















