<body>
    
    <?php

        if (isset($_POST)) {
            
            echo"<h2>Űrlap adatok</h2>";
            $nev = $_POST["nev"];
            $pin = $_POST["pin"];
            $fav_fruit = $_POST["fav_fruit"];
            $age = $_POST   ["age"];
            $feet_size = $_POST ["feet_size"];
            $confidence = $_POST["confidence"];

            echo"<p><Strong>Név:</Strong> " . $nev . "</p>";
            echo"<p><Strong>PIN kód:</Strong> " . $pin . "</p>";
            echo"<p><Strong>Kedvenc:</Strong> " . $fav_fruit . "</p>";
            echo"<p><Strong>Életkor</Strong> " . $age . "</p>";
            echo"<p><Strong>Lábméret:</Strong> " . $feet_size . "</p>";
            echo"<p><Strong>Önbizalom:</Strong> " . $confidence . "</p>";
            
        }
        else {
            echo "<h2>Űrlap nem lett beküldve!</h2>";
        }

    ?>

    <a href="CNY8MP_urlap.html">Vissza az űrlapra</a>

</body>