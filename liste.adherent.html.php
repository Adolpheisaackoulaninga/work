 
    <div class="scene">
        <h3>LISTE DES Adherent</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
               
            </tr>
            <?php foreach ($adherent as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["nom"]); ?></th>
                            <th><?php echo($val["prenom"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
