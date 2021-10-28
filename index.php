<?php 

// USER SECTION
class User {

    use premium;

    public $nome;
    public $email;   
    public $età;
    public $cartaDiCredito;
    

    public function __construct($nome, $scontoPremium , $email, $età){
        
        $this -> nome = $nome;
        $this -> email = $email;
        $this -> scontoPremium = $scontoPremium;
        $this -> età = $età;
        
    }

    public function setCarta($carta){
        $this -> cartaDiCredito = $carta;
    }
} 

class creditCard {

    public $numero;
    public $scadenza;
    public $banca;
   
    public function __construct($numero, $scadenza, $banca){
         
        $this -> numero = $numero;
        $this -> scadenza = $scadenza;
        $this -> banca = $banca;
    }
}

// PRODUCT SECTION
class Product{

    public $nome;
    public $prezzo;
    public $categotria;
    public $marca;
    public $modello;
    public $venditore;

    public function __construct($nome, $prezzo, $categotria, $marca,$modello, $venditore)
    {
        $this -> nome = $nome;
        $this -> prezzo = $prezzo;
        $this -> categotria = $categotria;
        $this -> marca = $marca;
        $this -> modello = $modello;
        $this -> venditore = $venditore ;
    }
}

// carrello

class Carrello {

    public $prodotti ;

    public function __construct(){
        $this -> prodotti = [];
    }

    public function insertItem($prodotto){
        array_push($prodotti, $prodotto);

        //logica insert in array
    }

}
// TRAIT SECTION    
trait premium {
    public $scontoPremium ;

    public function isPremium(){
        if($this -> scontoPremium == 0){
            return false;
        } else {
            return true;
        }
    }
}

?>

<pre>
    <?php 
    
    $umberto = new User("umberto", 0,  "gino@gmail.com",24 );

    var_dump($umberto);

    var_dump($umberto -> isPremium());

    $cartaUmberto = new creditCard("1234", "24/10/22","fineco");

    var_dump($cartaUmberto);

    $umberto -> setCarta($cartaUmberto);
    var_dump($umberto);

    $carrello = new Carrello();
    var_dump($carrello);

    $vestito = new Product("maglia",12,"maglie","prada","lisa","prada shop");

    $prodotti = [];
     //creao un product
    //
    $carrello -> insertItem($vestito);
    // $carrello -> insertItem();
    var_dump($carrello);

   
    ?>
    
</pre>