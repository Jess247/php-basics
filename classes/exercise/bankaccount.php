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
        // Attribute
        private $kontonummer;
        private $kontostand;
        private $kontoinhaber;

        // Konstruktor
        function __construct($kontonr, $kontostnd, $inhaber )
        {
            $this->kontonummer = $kontonr;
            $this->kontostand = $kontostnd;
            $this->kontoinhaber = $inhaber;

            echo "Konto: ".$this->kontonummer ." wurde erfolgreich erstellt.<br/>\n\t";
            echo "Kontoinhaber: ".$this->kontoinhaber ."<br/>\n\t";
            echo "Kontostand: ".$this->kontostand ."€<br/>\n\t";
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
            if($this->kontostand >= $amount){
                $this->kontostand -= $amount;
                echo "Der Betrag wurde abgehoben. Neuer Kontostand auf ".$this->kontonummer.": " .$this->kontostand. "€ <br/>\n\t";
            } else {
                echo "ungültiger oder zu großer Betrag. Buchung wurde nicht ausgeführt<br/>\n\t";
            }
            
        }

        function einzahlen($amount){
            $this->kontostand += $amount;
            echo "Der Betrag wurde auf das Konto eingezahlt. Neuer Kontostand auf ".$this->kontonummer.": " .$this->kontostand. "€ <br/>\n\t";
        }

       
    }
    // instanzen
    $customer1 = new Konto('52637491', 345, "Klaus, Müller");
    $customer1->abheben(100);
    $customer1->einzahlen(55);

    $customer2 = new Konto('57483627', 987, "Max, Mustermann");
    $customer2->abheben(1000);
    $customer2->einzahlen(555);

  
    ?>
</body>
</html>