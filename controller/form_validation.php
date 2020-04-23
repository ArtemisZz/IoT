<?php
/*  */
include '../model/IoT.class.php';
include '../dao/ModuleDAO.php';
include '../lib/db_parms.php';

$moduleName = filter_input(INPUT_POST, "moduleNameInput");
$moduleNumber = filter_input(INPUT_POST, "numberInput");
$modulePrice = filter_input(INPUT_POST, "priceInput");
$moduleDescription = filter_input(INPUT_POST, "descriptionInput");
$moduleType = filter_input(INPUT_POST, "typeInput");
//Creer un objet et sauvegarder a la base des donées
$iot = new IoT();
$iot->setName($moduleName);
$iot->setNumber($moduleNumber);
$iot->setDescription($moduleDescription);
$iot->setType($moduleType);
$DAO = new ModuleDAO(Connection::getInstance());
$error = false;
//Aller a form validation ou envoyer en alert a utilisateur s'il ya une erreur
try {
    if($DAO->save($iot) == true){
        //Form validation pour monitoring des notifications visuelles en cas de dysfonctionnement d’une variable d’un module
        require('../view/form_validation.php');
    }
    else{
        $error = true;
        require('../view/form_iot.php');
    }
}
catch (Exception $exception){
    echo $exception->getMessage();
}

