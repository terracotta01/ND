<!--
- Sukurk kintamąjį $metai, kurio turinys 1774
- Sukurk if sąlygą, kuri patikrina ar $metai yra daugiau arba lygu už Vašingtono įkūrimo metus (panaudok $cities3 masyvo duomenis)
- Jei atsakymas teigiamas, išvesk tekstą: “Vašingtonas yra JAV sostinė.”
- Sukurk elseif sąlygą patikrinti ar $metai lygu 1774. Jei atsakymas teigiamas, išvesk tekstą: “JAV sostinė vis dar Filadelfijoje.”
- Sukurk else sąlygą, kuri išveda tekstą: “Liko ... metai (-ų) iki Vašingtono įkūrimo.” Vietoj daugtaškio atlik matematinį veiksmą, kuris iš $cities3[‘Vasingtonas’][1] atima $metai.-->
<?php  
    $cities3 = array(
        'Tokijas' => array(13.6, 1868, 'Japonija'),
        'Vasingtonas' => array(0.6, 1790, 'JAV'),
        'Maskva' => array(11.5, 1147, 'Rusija')
    );
    $metai = 1774;
//    $metai = 1000;
//    $metai = 2000;
    if ($metai >= $cities3['Vasingtonas'][1]) {
        echo "Vašingtonas yra {$cities3['Vasingtonas'][2]} sostinė";
        echo "<br>";
    } elseif ($metai == 1774) {
        echo "{$cities3['Vasingtonas'][2]} sostinė vis dar Filadelfijoje.";
        echo "<br>";
    } else {
        echo 'Liko ' . ($cities3['Vasingtonas'][1]-$metai) . ' metai(-ų) iki Vašingtono įkūrimo.';
        echo "<br>";
    };
?>