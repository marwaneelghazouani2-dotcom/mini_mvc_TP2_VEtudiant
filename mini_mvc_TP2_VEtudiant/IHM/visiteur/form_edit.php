<center>
    <form method="post" action="../update/<?= $V['ID'] ?>">
        <table>
            <tr>
                <td> NUM </td>
                <td> <input name="num" value="<?= $V['ID'] ?>" disabled> </td>
            </tr>
            <tr>
                <td> NOM </td>
                <td> <input name="nom" value="<?= htmlspecialchars($V['NOM']) ?>"> </td>
            </tr>
            <tr>
                <td> PRENOM </td>
                <td> <input name="prenom" value="<?= htmlspecialchars($V['PRENOM']) ?>"> </td>
            </tr>
            <tr>
                <td> E-MAIL </td>
                <td> <input name="email" value="<?= htmlspecialchars($V['EMAIL']) ?>"> </td>
            </tr>
            <tr>
                <td colspan="2"> <input type="submit" value="Enregistrer"> </td>
            </tr>
        </table>
    </form>
</center>