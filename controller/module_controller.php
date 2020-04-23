<?php
include '../model/IoT.class.php';
include '../dao/ModuleDAO.php';
include '../lib/db_parms.php';

$DAO = new ModuleDAO(Connection::getInstance());

$DAO->findByid(1);