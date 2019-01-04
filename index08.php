<!--
- Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:
- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21.
- Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
- Patarimai: 
1. Naudok foreach ciklą. 
2. Naudok round( ), kad suapvalintum vidutinę temperatūrą. 
3. Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka. 
4. Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.-->

<?php
    $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    $sum = 0;

    for ($i = 0; $i < count($temp); $i++) {
        $sum = $sum + $temp[$i];
        // echo $temp[$i];

    }
//    echo $sum . '<br>';
//     echo count($temp);
    echo 'Vidutinė balandžio mėnesio temperatūra yra ' . round($sum/count($temp)) . ' laipsnių C.';
    echo "<br>";

    rsort($temp);
//    foreach ($temp as $value) {
//      echo " $value";
//    }


    $max = array_slice($temp, 0, 5);

//    print_r ($max);

    echo 'Penkios šilčiausios mėnesio temperatūros buvo: ';
    foreach ($max as $maxtemp) {
        echo $maxtemp . ' ';
    }
    echo '.';
    $min = array_slice($temp, -5, 5);
    echo "<br>";
//    print_r ($min);

    echo 'Penkios šalčiausios mėnesio temperatūros buvo: ';
    foreach ($min as $mintemp) {
        echo $mintemp . ' ';
    }
    echo '.';
?>
