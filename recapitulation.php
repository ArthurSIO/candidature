
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <h3>Votre candidature</h3>

        <table>
            <tr>
                <td>Civilité</td>
                <td><?php echo $_POST["civilite"]." "; ?> </td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><?php echo strtoupper( $_POST["nom"]." "); ?> </td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td><?php echo strtoupper( $_POST["prenom"]." "); ?> </td>
            </tr>
            <tr>
                <td>Date de naissance</td>
                <td><?php echo date('d/m/Y' , strtotime($_POST["dateNaissance"])); ?></td>
            </tr>
            <tr>
                <td>Téléphone</td>
                <td><?php echo $_POST["telephone"]; ?></td>
            </tr>
            <tr>
                <td>Adresse électronique</td>
                <td><?php echo $_POST["email"]; ?></td>
            </tr>
            <tr>
                <td>Niveau en PHP</td>
                <td><?php echo $_POST["niveau"]; ?></td>
            </tr>
            <tr>
                <td>Frameworks PHP</td>
                <ul><?php foreach( $_POST['frameworks'] as $unFramework ){ echo "<li>".$unFramework."</li>" ; } ?></ul>
            </tr>
            <tr>
                <td>Moi</td>
                <td><?php echo $_POST["votreParcours"]; ?></td>
            </tr>

        </table>

    </body>

</html>
