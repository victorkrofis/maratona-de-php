<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno</title>
</head>
<body>
    <?php 
    class Aluno{
        public $nome;
        private $matricula;
        public $curso;

        public function __construct($nome, $matricula, $curso){
            $this->$nome = $nome;
            $this->$matricula = $matricula;
            $this->$curso = $curso;
            echo "O aluno se chama " . $nome . " o número da matrícula é " . $matricula . " e está cursando " . $curso;
        }
        public function __destruct(){
            echo "Aluno '$this->nome' Foi removido <br>";
            }
                public function exibirAluno(){
                    echo "'$this->nome' <br>";
                }
    }
    $aluno1 = new Aluno("Satoru Gojo", 469, "Jujutsu");
    $aluno1->exibirAluno();

    
    ?>
</body>
</html>