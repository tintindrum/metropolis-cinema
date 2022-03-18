<?php
        $sqlidduacteur = ('SELECT * FROM acteurs ORDER BY id_acteur ');

        $requeteidduacteur = $pdo->prepare($sqlidduacteur);
        $requeteidduacteur->execute();
        $dbidduacteur = $requeteidduacteur->fetch();
        ?>