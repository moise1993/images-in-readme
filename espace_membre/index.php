<?php
include('config.php')
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Espace membre</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
<?php
//On affiche un message de bienvenue, si lutilisateur est connecte, on affiche son pseudo
?>
Здравствуйте<?php if(isset($_SESSION['username'])){echo ' '.htmlentities($_SESSION['username'], ENT_QUOTES, 'UTF-8');} ?>,<br /><br />
ДОБРО ПОЖАЛОВАТЬ НА НАШ САЙТ.<br /><br />
вы можете <a href="users.php">Увидеть список пользователей</a>.<br /><br /><br />
<?php
//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
if(isset($_SESSION['username']))
{
?>
<li><a href="edit_infos.php">Изменить мою личную информацию</a><br /><br /></li>
<li><a href="connexion.php">Se d&eacute;войти</a></li>
<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
<a href="sign_up.php">Регистрация</a><br /><br />
<a href="connexion.php">войти</a>
<?php
}
?>
		</div>
		<div class="foot"><a href="http://www.stankin.ru/">Университетский сайт</a></div>
	</body>
</html>