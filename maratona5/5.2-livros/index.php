<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro</title>
</head>
<body>
    <?php 
    class Livro{
        public $titulo;
        public $autor;
        public $anoPublicacao;

        public function exibirInformacoes(){
            echo "Título é: " . $this->titulo . "<br>";
            echo "O autor é: " . $this->autor . "<br>";
            echo "O ano de publicação é :" . $this->anoPublicacao . "<br>";
        }
    }
    $livro = new Livro();
    $livro->titulo = "A Utopia";
    $livro->autor = "Thomas More";
    $livro->anoPublicacao = 1516;
    $livro2 = new Livro();
    $livro2->titulo = "O Pequeno Príncipe";
    $livro2->autor = "Antoine de Saint-Exupéry";
    $livro2->anoPublicacao = 1943;
    $livro3 = new Livro();
    $livro3->titulo = "Five Night At Freddy's The Silver Eyes";
    $livro3->autor = "Scott Cawthon";
    $livro3->anoPublicacao = 2015;

    $livro->exibirInformacoes();
    $livro2->exibirInformacoes();
    $livro3->exibirInformacoes();
    
    ?>
</body>
</html>