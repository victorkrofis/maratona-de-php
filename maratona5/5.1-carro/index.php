<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Carro{
     public $modelo;
     public $ano;
     public $cor;
     public $preco;

     public function exibirDetalhes(){

        echo "O modelo do carro é: " . $this->modelo . "<BR>";
        echo "O ano do carro é de: " . $this->ano . "<BR>";
        echo "O carro é: " . $this->cor . "<BR>";
        echo "O carro custa R$" . $this->preco . "<BR>";
     }
    }

      $carrin = new Carro();
      $carrin->modelo = "banshee";
      $carrin->ano = 1986;
      $carrin->cor = "branco";
      $carrin->preco = 1100000;

      $carrin->exibirDetalhes();


    ?>
</body>
</html>