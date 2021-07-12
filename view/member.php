<div class="cont">

    <div class="content read">
	<h2>Voir les membres</h2>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Nbs de livre emprunté</td>
                <td>action</td>

            </tr>
        </thead>
        <tbody id="table-body">
                <?php
                if(!empty($result)) { 
                    foreach($result as $row) {
                ?>
                <tr class="table-row">
                <tr >
                    <td><?= new member($id) ?></td>
                    <td><?= new member($name)?></td>
                    <td><?=new member($fname); ?></td>
                    <td><?= new member($nbLivreEmprunte); ?></td>
                    <td class="actions">
                    <a href="update.php?id=<?= $row['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?= $row['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
        </tbody>
    </table>
</div>