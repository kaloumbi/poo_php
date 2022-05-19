<?php

use App\Model\Demande;
$demandes=Demande::findAll();
?>

<table class="table table-triped">
    <thead>
        <tr>
            <th>LibelleDemande</th>
            <th>EtatDemande</th>
            <th>Actions</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($demandes as $demande) {
            echo "<tr>";
            echo "<td>".$demande->libelleDemande."</td>";
            echo "<td>".$demande->etatDemande."</td>";
            echo "<td>"."<button class='btn btn-outline-warning'>Suprimer</button>"."</td>";
            echo "<td>"."<button class='btn btn-outline-danger'>Suprimer</button>"."</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>