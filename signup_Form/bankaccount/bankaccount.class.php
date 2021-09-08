
<?php
class Account {
    // Attribute
    private $accnum;
    private $balance;
    private $holder;

    // Konstruktor
    function __construct($anum, $bal, $name )
    {
        $this->accnum = $anum;
        $this->balance = $bal;
        $this->holder = $name;

        echo "Konto: ".$this->accnum ." wurde erfolgreich erstellt.<br/>\n\t";
        echo "Kontoinhaber: ".$this->holder ."<br/>\n\t";
        echo "Kontostand: ".$this->balance ."€<br/>\n\t";
    }

    // Setter- und Getter-Methoden
    function setAccnum($anum){
        $this->accnum = $anum;
    }
    
    function getAccnum(){
        return $this->accnum;
    }

    function setBalance($bal){
        $this->balance = $bal;
    }
    
    function getBalance(){
        return $this->balance;
    }

    function setHolder($name){
        $this->holder = $name;
    }
    
    function getHolder(){
        return $this->holder;
    }

    // Buchungsmethoden

    // Abheben
    function withdraw($amount){
        if($this->balance >= $amount){
            $this->balance -= $amount;
            // echo "Der Betrag wurde abgehoben. Neuer Kontostand auf ".$this->accnum.": " .$this->balance. "€ <br/>\n\t";
        } else {
            echo "ungültiger oder zu großer Betrag. Buchung wurde nicht ausgeführt<br/>\n\t";
        }
        
    }

    function deposit($amount){
        $this->balance += $amount;
        // echo "Der Betrag wurde auf das Konto eingezahlt. Neuer Kontostand auf ".$this->accnum.": " .$this->balance. "€ <br/>\n\t";
    }
 
}

 // variables
 $name = $_POST["holder"];
 $number = $_POST["accnum"];
 $defaultBal = 1000;
 $action = $_POST["action"];
 $actionAmount = $_POST["amount"];

 if(isset($_POST["action"])) {
     if($action == "withdraw"){
        $sum = $defaultBal - $actionAmount;
             echo "Your balance is <br/>".$sum;
     } 
     else{
        $sum = $defaultBal + $actionAmount;
             echo "Your balance is <br/>".$sum;
     } 
    }
    
 
     // instanzen
     $customer1 = new Account($number, $defaultBal, $name);
?>
