<?php
        $sqliddufilm = ("SELECT * FROM films ORDER BY id_film = ".$_GET['id_film']." ");

        $requeteiddufilm = $pdo->prepare($sqliddufilm);
        $requeteiddufilm->execute();
        $dbiddufilm = $requeteiddufilm->fetch();
        ?>