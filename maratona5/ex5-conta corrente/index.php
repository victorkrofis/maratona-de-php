<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class ContaCorrente{
        public $numeroconta;
        private $saldo;


        
        public function setConta(){
            $this->numeroconta . "<BR>";

        }

        private function setSaldo(){
            $this->saldo . "<BR>";
        }

        public function getConta(){
            return $this->numeroconta;
           
    }
    public function getSaldo(){
        return $this->saldo;
        
       
}
    }
   
    $conta = new ContaCorrente();
    $conta->setConta(3);
    $conta->setSaldo(1000);
    
    
    
    ?>
</body>
</html>

