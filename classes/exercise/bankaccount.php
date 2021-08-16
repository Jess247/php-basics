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
            echo "Der aktuelle Kontostand des Kontos ".$this->kontonummer." beträgt: ".$this->kontostand."€ <br/>";
        }

        // Setter- und Getter-Methoden
        function setKontonr($kontonr){
            $this->kontonummer = $kontonr;
        }
        
        function getKontonr(){
            return $this->kontonummer;
        }

        function setKontostnd($kontostnd){
            $this->kontostand = $kontostnd;
        }
        
        function getKontostnd(){
            return $this->kontostand;
        }

        function setKontoinhab($inhaber){
            $this->kontoinhaber = $inhaber;
        }
        
        function getKontoinhab(){
            return $this->kontoinhaber;
        }

        // Buchungsmethoden

        // Abheben
        function abheben($amount){
            $this->kontostand -= $amount;
            echo "Abbuchung erfolgreich, ihre balance ist: " .$this->kontostand. "€ <br/>";
        }

        function einzahlen($amount){
            $this->kontostand += $amount;
            echo "Einzahlung erfolgreich, ihre balance ist: " .$this->kontostand. "€ <br/>";
        }

       
    }

    $customer1 = new Konto('12345', 345, "Klaus, Mueller");
    $customer1->abheben(100);
  
    ?>
</body>
</html>