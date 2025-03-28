<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Pet
    {
        private $nome = "";
        private $raca = "";
        private $idade = 0;
        private $tutor = "";

        public function __construct($nome , $raca, $idade,$tutor){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
            $this->tutor = $tutor;

        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
             $this->nome=$nome;
        }

        public function getRaca(){
            return $this->raca;
        }
        public function setRaca($raca){
             $this->raca=$raca;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            if($idade> 0){
             $this->idade=$idade;
            }
        }

        public function getTutor(){
            return $this->tutor;
        }
        public function setTutor($tutor){
             $this->tutor=$tutor;
        }
    }
    $pets = array();
    $pets[] = new Pet("Luz","Golden",4,"Leticia");
    $pets[] = new Pet("Caramelo","Vira -lata",5,"");
    $pets[] = new Pet("Flor","Vira -lata",1,"Fernanda");
    $pets[] = new Pet("Kiara","Pug",2,"Júlia");


    var_dump($pets);
    echo "<hr>";

    for($i= 0; $i< count($pets); $i++){
        echo"<p> O pet chama ", $pets[$i]->getNome() ," e tem ", $pets[$i]->getIdade() ," anos </p>";
    }
    ?>

</body>

</html>