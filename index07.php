<!--
- Sukurk ir išvesk masyvą $cities4, kurio turinys yra Tokijas, Vašingtonas, Maskva, Londonas.
- Sukurk <ul> ir panaudok for ciklą, kuris pereis visą $cities4 masyvą. Naudok count( ) funkciją, kad nustatytum masyvo elementų kiekį.
- for ciklo viduje, sukurk <li>, kad galėtum išvesti miestų pavadinimus.
- Atskirame <ul>, panaudok foreach ciklą, kad galėtum išvesti miestų pavadinimus.-->

<?php

    $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
    print_r($cities4);
    echo "<ul>";
    for ($i = 0; $i < count($cities4); $i++) {
        echo '<li>' . $cities4[$i] . '</li>';
    }
    echo "</ul>";

// 1 variantas foreach

    echo "<ul>";
    foreach ($cities4 as $city) {
        echo '<li>' . $city . '</li>';
    }
    echo "</ul>";

// 2 variantas foreach

    echo "<ul>";
    foreach ($cities4 as $city) : ?>
        <li><?= $city; ?></li>
    <?php endforeach; 
    echo "</ul>";

?>