<?php
include_once "Connexion.php";

$link = Connexion();

function Select_all()
{
  global $link;
  $sql = "select * from visiteurs";
  return mysqli_query($link, $sql);
}

function Select_one($id)
{
  global $link;
  $sql = "select * from visiteurs where ID='$id'";
  return mysqli_fetch_array(mysqli_query($link, $sql));
}

function insert($data)
{
  global $link;
  $sql = "insert into visiteurs (NOM, PRENOM, EMAIL) values (?, ?, ?)";
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt, "sss", $data['nom'], $data['prenom'], $data['email']);
  $res = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  return $res;
}

function update($data)
{
  global $link;
  $sql = "update visiteurs set NOM = ?, PRENOM = ?, EMAIL = ? where ID = ?";
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_bind_param($stmt, "sssi", $data['nom'], $data['prenom'], $data['email'], $data['id']);
  $res = mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  return $res;
}

function delete($id)
{
  global $link;
  $sql = "delete from visiteurs where ID='$id'";
  return mysqli_query($link, $sql);
}
