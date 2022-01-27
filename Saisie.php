<?php
if (isset($_POST['nom1'])&& !empty($_POST)) {
    echo $_POST['nom1'];
}
elseif (isset($_POST['nom2'])&& !empty($_POST)) {
    echo $_POST['nom2'];
}
else {
    echo "Nom inconnu";
}
