<?php
function Connexion($serv = "localhost", $user = "root", $pass = "", $bd = "tp1suite")
{
  return mysqli_connect($serv, $user, $pass, $bd);
}
