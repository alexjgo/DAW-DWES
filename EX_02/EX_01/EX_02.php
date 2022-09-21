<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
        $array = [
        "nombre1"=>"alex",
        "nombre2"=>"pol",
        "nombre3"=>"raul"
        ];
    foreach($array as $nombre){
        echo '<li>'.$nombre .'</br>';
    }
    echo count($array);
    ?>
</p>
</body>
</html>

