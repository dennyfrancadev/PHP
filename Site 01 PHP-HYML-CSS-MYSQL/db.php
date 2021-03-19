<?php
    
    $connect = mysqli_connect("localhost","root","") OR DIE("Falha ao conetar com servidor");
    $db = mysqli_select_db($connect,"site01") OR DIE("Falha ao selecionar DATABASE");
?>