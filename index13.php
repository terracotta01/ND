<!--
- Užrašyk klasę, kuri talpintų žmogaus vardą, pavardę ir metodą pasisveikinimui.
- Sukurk du žmones su skirtingais duomenimis.
- Išvesk šiuos duomenis naršyklėje.-->
<?php
class Zmogus {
    public $vardas;
    public $pavarde;
    public function pasveikinimas() {
        return 'Labas, ' . $this -> vardas . ' ' . $this -> pavarde . '!<br>';
    }
}

$marijus = new Zmogus();
$greta = new Zmogus();

$marijus -> vardas = 'Marijus';
$greta -> vardas = 'Greta';

$marijus -> pavarde = 'Jokubauskas';
$greta -> pavarde = 'Jokubauskaitė';

echo $marijus -> pasveikinimas();
echo $greta -> pasveikinimas();

?>