<?php
use App\Model\Module;
$modules = Module::findAll();
?>

<table class="table table-triped">
    <thead>
        <tr>
            <th>Libelle Module</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($modules as $module) {
            echo "<tr>";
            echo "<td>".$module->libelleModule."</td>";
            echo "<td>"."<button class='btn btn-outline-warning'>Modifier</button>"."</td>";
            echo "<td>"."<button class='btn btn-outline-danger'>Suprimer</button>"."</td>";
            
            echo "</tr>";
        }
        ?>
    </tbody>
</table>