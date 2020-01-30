<a href="index.php"><button> Retour au site</button></a>
<table>
    <thead>
        <tr>
            <th colspan="4">Gestion des commentaires et signalements</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>Date</th>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Option</th>
        </tr>
        <?php foreach ($commentaires as $commentaire):?>
        <tr>
            <td><time><?= $commentaire['date'] ?></time></td>
            <td><?= $commentaire['titre'] ?></td>
            <td><p><?= substr($commentaire['contenu'], 0, 200) ?></p></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php?action=ajouter"><button> Ajouter </button></a>
</div>




