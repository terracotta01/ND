<!--- Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje.-->
<?php
    if(isset($_POST["submit"])) {
       if($_POST["name"] && $_POST["surname"]) {
           if((preg_match("/[^A-Za-z'-]/", $_POST['name'])) && (preg_match("/[^A-Za-z'-]/", $_POST['surname']))) {
               die ("Netinkamai įvesti duomenys");
           }
           echo 'Jūs '. $_POST["name"].' '. $_POST["surname"] . '.';
           exit();
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
                    <form action='index12.php' method='POST'>
                        Vardas: <input type='text' name='name'/>
                        Pavardė: <input type='text' name='surname'/>
                        <input type='submit' value='Submit' name='submit'/>
                    </form>
                </body>
                </html>";
       }
?>

