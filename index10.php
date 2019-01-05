<!--- Sukurkite funkciją su dviem parametrais a ir b, kurie yra stačiakampio kraštinių ilgiai. Funkcija apskaičiuos stačiakampio plotą.
- Rezultatą išveskite į naršyklę.-->
<?php
    function staciakampioPlotas($krastine1, $krastine2) {
        $plotas = $krastine1 * $krastine2;
        echo "Stačiakampio plotas yra $plotas.";
    }

    staciakampioPlotas(100,20);
?>