<?php
ob_start();
require_once "dbConnect.php";
?>

<table>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Action</th>
    </tr>

    <?php
    function Afficher()
    {
        $pdo = getPDOConnexion();
        $stmt = $pdo->prepare('SELECT id, nom, prenom, email, telephone FROM Users');
        $stmt->execute();
        $users = $stmt->fetchAll();

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($user["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($user["nom"]) . "</td>";
            echo "<td>" . htmlspecialchars($user["prenom"]) . "</td>";
            echo "<td>" . htmlspecialchars($user["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($user["telephone"]) . "</td>";
            echo "<td>";
            echo '<a href="update.php?id=' . htmlspecialchars($user["id"]) . '">Modifier</a> | ';
            echo '<a href="delete.php?id=' . htmlspecialchars($user["id"]) . '">Supprimer</a>';
            echo "</td>";
            echo "</tr>";
        }
    }

    Afficher();
    ?>

</table>

<?php
$content = ob_get_clean();
$titre = "Voir les utilisateurs";
require "template.php";
?>