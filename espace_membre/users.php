<?php
include('config.php');
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Список пользователей</title>
    </head>
    <body>
    	<div class="header">
        	<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Espace Membre" /></a>
	    </div>
        <div class="content">
Voici la liste des utilisateurs:
<table>
    <tr>
    	<th>номер</th>
    	<th>имя пользователя</th>
    	<th>электронная почта</th>
    </tr>
<?php
//On recupere les identifiants, les pseudos et les emails des utilisateurs
$req = mysql_query('select id, username, email from users');
while($dnn = mysql_fetch_array($req))
{
?>
	<tr>
    	<td class="left"><?php echo $dnn['id']; ?></td>
    	<td class="left"><a href="profile.php?id=<?php echo $dnn['id']; ?>"><?php echo htmlentities($dnn['username'], ENT_QUOTES, 'UTF-8'); ?></a></td>
    	<td class="left"><?php echo htmlentities($dnn['email'], ENT_QUOTES, 'UTF-8'); ?></td>
    </tr>
<?php
}
?>
</table>
		</div>
		<div class="foot"><a href="<?php echo $url_home; ?>">Retour &agrave; l'accueil</a> - <a href="http://www.stankin.ru/">Веб-сайт университета</a></div>
	</body>
</html>