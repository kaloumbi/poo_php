<?php
use App\Model\Professeur;
$professeurs = Professeur::findAll();
?>

<table class="table table-triped">
    <thead>
        <tr>
            <th>Nom Complet</th>
            <th>Role</th>
            <th>Grade</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($professeurs as $professeur) {
            echo "<tr>";
            echo "<td>".$professeur->nom_complet."</td>";
            echo "<td>".$professeur->role."</td>";
            echo "<td>".$professeur->grade."</td>";
            echo "<td>"."<button class='btn btn-outline-warning'>Modifier</button>"."</td>";
            echo "<td>"."<button class='btn btn-outline-danger'>Suprimer</button>"."</td>";
            
            echo "</tr>";
        }
        ?>
    </tbody>
</table>