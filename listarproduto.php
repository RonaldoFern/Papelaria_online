<?php
class Produto{
    
    //declaracao de variaveis publicas e privadas
    public $nome_produto;
    public $preco_produto;
    public $codigo_produto;
    public $categoria_produto;

    // Metodo construtor setamos aqui o que queremos que ele faça ao criar o objeto
    function __construct(){
                //inclue a classe conexao se não estiver incluida
                include_once("servidor.class.php");
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
                    //Criar uma variavel para armazer a instancia(objeto) da classee conexao
                               $conn = new conectar();
                               //Executar o metodo setConectar da classe Conexao
                               $conn->setConectar();
        echo "Conectado.<br>";
    }
    function setProduto(){
        $insertProdutos = mysql_query("INSERT INTO tabela_produtos values(nome_produto, preco_produto, codigo_produto, categoria_produto)");
        echo "Inserido.<br>";
    }
}
?>