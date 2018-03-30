 <meta http-equiv="content-type"content='text/html;charset=utf8'/>
<? require_once('menu.php'); ?>
<?php
   
   $dbhost  = "localhost";
     $dbuser  = "moise";
     $dbpass  = "lasocietemoise";
     $dbname  = "db-moise";
	 //$dbtable = "error";
$dbc = mysql_connect( $dbhost , $dbuser , $dbpass ) or die( mysql_error() );
mysql_select_db( $dbname );

 Structure de la table `users`


CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

?>