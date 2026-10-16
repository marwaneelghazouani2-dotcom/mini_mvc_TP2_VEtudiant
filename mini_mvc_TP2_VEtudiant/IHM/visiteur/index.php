<center>
    <h1> La liste des visiteurs </h1>
    <table border="1">
        <tr>
            <th> NUM </th>
            <th> NOM </th>
            <th> PRENOM </th>
            <th> EMAIL </th>
        </tr>
        <?php foreach ($data as $V) {
        ?>
            <tr>
                <td><?= $V[0] ?> </td>
                <td><?= $V[1] ?> </td>
                <td><?= $V[2] ?> </td>
                <td><?= $V[3] ?> </td>
                <td> <a href="../Visiteur/one/<?= $V[0] ?>">
                        Afficher </a></td>
                <td> <a href="../Visiteur/delete/<?= $V[0] ?>">
                        Supp </a></td>
                <td> <a href="../Visiteur/update/<?= $V[0] ?>">
                        Modifier </a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="../Visiteur/add"> >> Ajouter un visiteur << </a><br>
            <a href="../Visiteur/all"> >> Accueil << </a>
</center>