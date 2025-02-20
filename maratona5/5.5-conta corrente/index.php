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

        private function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getConta(){
            return $this->numeroconta;
           
    }
    public function getSaldo(){
        return $this->saldo;
             
}
    public function atualizarsaldo($novoSaldo){
        $this->setSaldo($novoSaldo);
    }
    }
   
    $conta = new ContaCorrente();
    $conta->setConta(3);
    $conta->atualizarsaldo(1000);

    echo "Conta: " . $conta->getConta() . "<BR>";
    echo "Saldo: " . $conta->getSaldo() . "<BR>";
    
    $conta->atualizarsaldo(400);

    echo "saldo atualizado: " . $conta->getSaldo() . "<BR>";
    
    ?>
</body>
</html>

