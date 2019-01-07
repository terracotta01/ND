<!--
 Sukurkite savo funkciją, kuri naršyklėje rodytų dabartinius metus: © 2018, jei tinklalapis buvo sukurtas ankstesniais metais, turėtų rodyti tokiu formatu:  © 2015-2018
- Pasvarstykite, kaip rasite dabartinius metus ir ar jūsų funkcija turės parametrų.
- Naudokitės: http://php.net/manual/en/function.date.php
Jei suvesti ateities metai, turetu rodyti tik dabartinius metus
-->
<?php
    function copyrightDate($year) {
        if ($year >= date('Y')) {
            echo '&copy; ' . date('Y');
        } else {
            echo '&copy; ' . $year . '-'. date('Y');
        }
    };

    copyrightDate(2015);


?>
