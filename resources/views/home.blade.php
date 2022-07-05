<?php

    $x = 0;
    $hafte = 0;
    $c2 = $count/2;
    $kole_baziha = $hafteha * $c2;
    foreach ($hame_baziha as $key => $val) {if($hafte == $c2){echo "<p>هفته ".($x/$c2).'<br>----'.'</p>';$hafte = 0;}
        echo $val->id_mizban . '-' . $val->id_mihman;
        echo '<br>';
        $hafte++;$x++;
    }




?>
