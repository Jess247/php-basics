<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konto</title>
</head>
<body>
    <?php
    class Konto {
        // attributes
        private $kontonummer;
        private $kontostand;
        private $kontoinhaber;

        // Konstruktor
        function __construct($kontonr, $kontostnd, $inhaber )
        {
            $this->kontonummer = $kontonr;
            $this->kontostand = $kontostnd;
            $this->kontoinhaber = $inhaber;

            echo "Neues Konto wurde erfolgreich erstellt.".$this->kontonummer." <br/>";
        }

        // Setter- und Getter-Methoden
        function setKontonr($kontonr){
            $this->kontonummer = $kontonr;
            echo "Konto ".$this->kontonummer ."erstellt.<br/>";
        }
        
        function getKontonr(){
            return $this->kontonummer;
        }

        function setKontostnd($kontostnd){
            $this->kontostand = $kontostnd;
            echo "Ihre balance ist: <br/>". $this->kontostand;
        }
        
        function getKontostnd(){
            return $this->kontostand;
        }

        function setKontoinhab($inhaber){
            $this->kontoinhaber = $inhaber;
            echo "Kontoinhaber: ". $this->kontoinhaber;
        }
        
        function getKontoinhab(){
            return $this->kontoinhaber;
        }

        // Buchungsmethoden

        // Abheben
        function abheben($amount){
            $this->kontostand -= $amount;
            echo "Abbuchung erfolgreich, ihre balance ist: ".$this->kontostand." euro <br/>";
        }

        function einzahlen($amount){
            $this->kontostand += $amount;
            echo "Abbuchung erfolgreich, ihre balance ist: ".$this->kontostand." euro <br/>";
        }

       
    }

    $customer1 = new Konto('12345', 345, "Klaus, Mueller");
    $customer1->abheben(100);
  
    ?>
</body>
</html>