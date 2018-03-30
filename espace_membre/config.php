<?php
//On demarre les sessions
session_start();

/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee
mysql_connect('moise.soft-edit.ru', 'moise', 'lasocietemoise');
mysql_select_db('bd-moise');

//Email du webmaster
$mail_webmaster = 'hermannmoise@gmail.com';

//Adresse du dossier de la top site
$url_root = 'http://www.soft-edit.ru/';

/******************************************************
----------------Configuration Optionelle---------------
******************************************************/

//Nom du fichier de laccueil
$url_home = 'index.php';

//Nom du design
$design = 'default';
?>