/* CREATE DATABASE IOT */
DROP DATABASE IF EXISTS IOT;
CREATE DATABASE IOT;
/* CREATE DATABASE IOT */

USE IOT;

/* CREATE TABLE IOT */
DROP TABLE IF EXISTS `IOT`;
CREATE TABLE `IOT`
(
    id                INT(11) AUTO_INCREMENT PRIMARY KEY,
    name              varchar(255),
    number            varchar(30),
    description       TEXT,
    type              varchar(255),
    temperature_start float,
    temperature_end   float,
    function_duration float,
    status            SMALLINT,
    number_of_data_sent BIGINT
)ENGINE=INNODB;
/* CREATE TABLE IOT */

/* CREATE DES FAUX DONNEES */
INSERT INTO `IOT` VALUES (1,'Scilab IoT.class Module', 20, 'Version 2.0.1 of this module utilizes Scilab 6.1 webtool features allowing it to
run on PC, Mac, Linux and even Raspberry Pi!

This module enables you to push and pull data from several cloud platforms into
Scilab. The supported clouds are:

1. ThingsBoard
2. FavorIoT
3. Ubidots
4. ThingSpeak

This module also includes functions for processing data format such as JSON,
reading tables from webpages, and others functionalities which help to process
the data from the Clouds.

The module is hosted at : https://github.com/joshuateoh/bytecode_iot_module', 'Data Handling', -25.0, 25.0, 3, 1, 20000);

/* CREATE DES FAUX DONNEES */
