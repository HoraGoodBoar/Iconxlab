<?php


return array( "
CREATE Table users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(255) NOT NULL,
    LastName VARCHAR(255) NOT NULL,
    Kind TINYINT NOT NULL,
    Age INT NOT NULL,
    GroupF VARCHAR(255) NOT NULL,
    Faculty VARCHAR(255) NOT NULL
  ) 
", "
  INSERT INTO users (id, FirstName, LastName, Kind, Age, GroupF, Faculty) VALUES
(1, 'Damon', 'Hicks', 1, 19, '11', 'Software engineer'),
(2, 'Katya', 'Khoroshenko', 0, 20, '12', 'Tattoo artist'),
(3, 'Stas', 'Koncimal', 1, 19, '11', 'Software engineer'),
(4, 'Darya', 'Burum', 0, 20, '12', 'Tattoo artist'),
(5, 'Lesya', 'Havron', 0, 18, '13', 'Cooking'),
(6, 'Tonya', 'Shmalyuh', 0, 40, '13', 'Cooking'),
(16, 'Test', 'Test', 1, 1092, 'Test', 'Test');
  
");