<!--- Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. Įvestus duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą išveskite į naršyklę. Forma turėtų dingti, kai išvedamas rezultatas, o rezultato spausdinimas turėtų būti tik tuomet, kai vartotojas užpildė visus laukelius ir paspaudė mygtuką.-->
<!--    uzduotis 2 spausdintu rezultata tik kai suvesti duomenys i laukelius-->
<?php
    
   if(isset($_POST["submit"])) {
       if($_POST["ilgis"] && $_POST["plotis"]) {
           $plotas=$_POST["ilgis"] * $_POST["plotis"];
           echo "Stačiakampio plotas yra $plotas.";       
       } 
   } else{
            echo "<!DOCTYPE html>
                <html lang=''>
                <head>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title></title>
                </head>

                <body>
                    <form action='index11.php' method='POST'>
                        Ilgis: <input type='text' name='ilgis'/>
                        Plotis: <input type='text' name='plotis'/>
                        <input type='submit' value='Submit' name='submit'/>
                    </form>
                </body>
                </html>";
       }


?>

