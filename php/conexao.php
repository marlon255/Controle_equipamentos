<?php
$mysqli = mysqli_connect('localhost','root','','calixto');

//teste se ocorreu algum erro
if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>