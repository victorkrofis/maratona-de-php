<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   class Produto{
    public $nome;
    public $preco;
    public $quantidade;

    public function __construct($nome, $preco, $quantidade)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function Desconto($desconto){
 
        echo "O produto com desocnto de " . $desconto  . " % = R$"   . number_format($this->preco - ($this->preco * ($desconto / 100)),2,',','.') . "<br>";
         
        }
         
        public function __destruct()
        {
            echo "Produto destruído.";
        }  
         
        }
         
        $produto1 = new Produto("geladeira", 2000, "1" );
        $produto1->Desconto(10);
    ?>
</body>
</html>