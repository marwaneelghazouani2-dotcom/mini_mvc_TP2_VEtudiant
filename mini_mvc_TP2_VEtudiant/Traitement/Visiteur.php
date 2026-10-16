<?php

include_once(ROOT . 'BD/Visiteur.php');

function selectall()
{
      $res = Select_all();
      $data = [];
      while ($ligne = mysqli_fetch_row($res)) {
            $data[] = $ligne;
      }
      include_once(ROOT . 'IHM/visiteur/index.php');
}

function afficher($id)
{
      $V = Select_one((int) $id);
      if (!$V) {
            include_once(ROOT . 'IHM/404.php');
            return;
      }
      include_once(ROOT . 'IHM/visiteur/show.php');
}

function ajouter()
{
      if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            include_once(ROOT . 'IHM/visiteur/form_add.php');
            return;
      }
      $data = [
            'nom'    => trim($_POST['nom'] ?? ''),
            'prenom' => trim($_POST['prenom'] ?? ''),
            'email'  => trim($_POST['email'] ?? ''),
      ];
      insert($data);
      header('Location: ../Visiteur/all');
      exit;
}

function modifier($id)
{
      $V = Select_one((int) $id);
      if (!$V) {
            include_once(ROOT . 'IHM/404.php');
            return;
      }
      if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            include_once(ROOT . 'IHM/visiteur/form_edit.php');
            return;
      }
      $data = [
            'id'     => (int) $id,
            'nom'    => trim($_POST['nom'] ?? ''),
            'prenom' => trim($_POST['prenom'] ?? ''),
            'email'  => trim($_POST['email'] ?? ''),
      ];
      update($data);
      header('Location: ../all');
      exit;
}

function supprimer($id)
{
      delete((int) $id);
      header('Location: ../all');
      exit;
}
