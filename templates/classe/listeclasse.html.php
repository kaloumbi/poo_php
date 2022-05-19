<?php
use App\Model\Classe;
$classes = Classe::findAll();
?>

<table class="table table-triped">
    <thead>
        <tr>
            <th>Libelle</th>
            <th>Filiere</th>
            <th>Niveau</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($classes as $classe) {
            echo "<tr>";
            echo "<td>".$classe->libelle."</td>";
            echo "<td>".$classe->filiere."</td>";
            echo "<td>".$classe->niveau."</td>";

            echo "<td>"."<button class='btn btn-outline-warning'>Modifier</button>"."</td>";
            echo "<td>"."<button class='btn btn-outline-danger'>Suprimer</button>"."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>