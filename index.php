<?php 

// USER SECTION
class User {

    use premium;


    public $nome;
    public $email;
    public $sconto;
    public $età;
    public $cartaDiCredito;

    public function __construct($nome, $email, $sconto, $età,$cartaDiCredito, $scontoPremium){
        
        $this -> nome = $nome;
        $this -> email = $email;
        $this -> sconto = $sconto;
        $this -> età = $età;
        $this -> cartaDiCredito = $cartaDiCredito;
        $this -> scontoPremium = 0.2 ; // ???????????
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
// TRAIT SECTION    
trait premium {
    public $scontoPremium ; // ?????????
}

?>
