<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Objektová kalkulačka</title>
    </head>
    <body>
        <?php

            require_once('tridy/Kalkulacka.php');
        
            echo ('<h1>Objektová kalkulačka</h1>');
            echo ('
                <form method="post">
                    1.číslo: <br>
                    <input type="text" name="cislo1"><br>
                    2.číslo: <br>
                    <input type="text" name="cislo2"><br><br>
                    <input type="submit" value="Vypočítat">
                </form>
                ');
            
            echo('<h2>Výsledky:</h2>');
            
            if ($_POST)
            {
                if ($_POST['cislo1'] !== "" && $_POST['cislo2'] !== "")
                {
                    
                    $moje_kalkulacka = new Kalkulacka($_POST['cislo1'], $_POST['cislo2']);        

                    echo('Součet: ' . $moje_kalkulacka->soucet() . '<br>');

                    echo ('Rozdíl: ' . $moje_kalkulacka->rozdil() . '<br>');

                    echo ('Součin: ' . $moje_kalkulacka->soucin() . '<br>');

                    echo ('Podíl: ' . $moje_kalkulacka->podil());
                    }
            
                else
                {
                    echo ('Zadejte prosím obě čísla.');
                    
                }
            
            }
            
        ?>
    </body>
</html>
