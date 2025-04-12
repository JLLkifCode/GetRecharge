<?php
session_start();
session_destroy();
header("Location:Formulaire de connexion.php");
exit();

?>
<form method="POST" action="logout.php">
    <button type="submit" name="logout">Se déconnecter</button>
</form>
