<!--
- Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys:
- Tokijas - 13.6, 1868, Japonija
- Vasingtonas - 0.6, 1790, JAV
- Maskva - 11.5, 1147, Rusija
- Pridėk: Londonas - 8.6, 43, Anglija
- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
- Gyventojų skaičius: 8.6 mln.
- Įkurtas: 43 m.
- Šalis: Anglija-->
<?php
    $cities3 = array(
        'Tokijas' => array(13.6, 1868, 'Japonija'),
        'Vasingtonas' => array(0.6, 1790, 'JAV'),
        'Maskva' => array(11.5, 1147, 'Rusija')
    );

    $cities3['Londonas']= array(8.6, 43, 'Anglija');
//    print_r($cities3);
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <ul>
        <li><?php echo "Gyventojų skaičius: {$cities3['Londonas'][0]} mln."; ?></li>
        <li><?php echo "Įkurtas: {$cities3['Londonas'][1]} m."; ?></li>
        <li><?php echo "Šalis: {$cities3['Londonas'][2]}."; ?></li>
    </ul>
</body>
</html>
