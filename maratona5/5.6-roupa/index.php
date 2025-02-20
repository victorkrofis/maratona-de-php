<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roupa</title>
</head>
<body>
    <?php 
    class Roupa{
        public $nome;
        private $codigoProduto;
        public $preco;

        public function setNome($nome){
            $this->nome = $nome;
        }
        private function setcodigoProduto($codigoProduto){
            $this->codigoProduto = $codigoProduto;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        public function getNome(){
            return $this->nome;
        }
        private function getcodigoProduto(){
            return $this->codigoProduto;
        }
        public function getPreco(){
            return $this->preco;
        }
        public function setcodigoProduto1($codigoProduto){
            $this->codigoProduto = $codigoProduto;
        }
        public function getcodigoProduto1(){
            return $this->codigoProduto;
        }
    }
    /* Erro, não dá para acessar de forma pública
    $roupa = new Roupa();
    $roupa->setcodigoProduto(1369);

    echo "O código da roupa é: " . $roupa->getcodigoProduto();*/
    
    $roupa = new Roupa();
    $roupa->setcodigoProduto1(1369);

    echo "O código da roupa é: " . $roupa->getcodigoProduto1();
    ?>
</body>
</html>