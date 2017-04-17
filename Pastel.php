<!DOCTYPE html>
Joao possui um carrinho de pastel, Todo pastel vendido tem até 3 recheios.
Cada recheio possui um preco especifico. Fgo, Carne, Linguiça, Cheddar e catupiry.
Implemente um meio de calcular o preco total do pastel e exibir o nome do pastel 
com os recheios corretamente.
    <html>
        <head>
            <meta charset="utf-8">
            <title>Exercicio 1</title>
        </head>
        <body>
            <?php
                class Recheio{
                    private $nome, $preco;
                    public function __construct($nome, $preco){
                        $this->nome = $nome;
                        $this->preco = $preco;
                    }
                    public function getNome(){
                        return $this->nome;
                    }
                    public function getPreco(){
                        #$this->getNome() == "cheddar"  ? $this->preco = 3.20;
                        #$this->getNome() == "Carne"    ? $this->preco = 2.50;
                        #$this->getNome() == "Frango"   ? $this->preco = 3.70;
                        #$this->getNome() == "Linguiça" ? $this->preco = 1.20;
                        #$this->getNome() == "catupiry" ? $this->preco = 3.10;
                        
                        return $this->preco;
                    }
                }
                
                class Pastel{
                    private $recheio1, $recheio2, $recheio3, $custo;
                    public function __construct($recheio1,$recheio2,$recheio3){
                        $this->recheio1 = new Recheio($recheio1,3.20);
                        $this->recheio2 = new Recheio($recheio2,2.50);
                        $this->recheio3 = new Recheio($recheio3,3.70);
                    }
                    
                    public function calcularCusto(){
                        $this->custo = $this->recheio1->getPreco() + $this->recheio2->getPreco() + $this->recheio3->getPreco();
                        return $this->custo;
                    }
                }
                
                #$r1 = new Recheio("Frango",3.20);
                #$r2 = new Recheio("Carne",2.50);
                #$r3 = new Recheio("Linguiça",1.20);
                #$r4 = new Recheio("cheddar",3.70);
                
                $p = new Pastel("cheddar","Carne","Frango");
                echo $p->calcularCusto();
            ?>
        </body>
    </html>