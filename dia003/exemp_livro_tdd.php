<?php 
// leitura do livro TDD do kent beckr, acomponahdo a leitura e programando de acordo o andamento do livro

class Dollar {
    private $instrumento;
    private $acao;
    private$preco;

    public function __construct($instrumento, $acao, $preco) {
        $this->instrumento = $instrumento;
        $this->acao= $acao;
        $this->preco = $preco;
    }

    public function calculaTudo(){
        return $this->acao * $this->preco;
    }

    public function testMultiplicação(){
        //Dollar five = new Dollar(5);
        five.times(2);
        assertEquals(10, five.amount);
    }
}