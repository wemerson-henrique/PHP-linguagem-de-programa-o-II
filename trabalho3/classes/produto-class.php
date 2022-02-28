<?php
    require_once('conf-banco-de-dados.php');

    class Produto extends dataBase{
        public array $dadosRecebidos;
        public object $conexaoComBanco;

        public function cadastrar(){
            $this -> conexaoComBanco = $this->conetar();
            $query_produto = "INSERT INTO produto (Nome, Preco_De_Compra, Preco_De_Venda, Quantidade, Descricao) values (:nome, :precoDeCompra, :precoDeVenda, :quantidade, :descricao)";
            $cad_produto = $this->conexaoComBanco->prepare($query_produto);

            $cad_produto->bindParam(':nome',$this->dadosRecebidos['nome']);
            $cad_produto->bindParam(':precoDeCompra',$this->dadosRecebidos['precoDeCompra']);
            $cad_produto->bindParam(':precoDeVenda',$this->dadosRecebidos['precoDeVenda']);
            $cad_produto->bindParam(':quantidade',$this->dadosRecebidos['quantidade']);
            $cad_produto->bindParam(':descricao',$this->dadosRecebidos['descricao']);

            $cad_produto->execute();
            if($cad_produto->rowCount()){
                return true;
            }else {
                return false;
            }
        }
        public function listar(): array{
            $this -> conexaoComBanco = $this->conetar();
            $query_produto = "SELECT * FROM produto ";
            $list_produto = $this->conexaoComBanco->prepare($query_produto);

          
            $list_produto->execute();
            $retorno = $list_produto->fetchALL();
            return $retorno;
        }
        public function verificarDisponibilidade(){
            $this -> conexaoComBanco = $this->conetar();
            $query_produto = "SELECT * FROM produto WHERE ID = :idProduto AND Quantidade >= :quantidade";
            $produto_verifica = $this->conexaoComBanco->prepare($query_produto);

            $produto_verifica->bindParam(':idProduto',$this->dadosRecebidos['idProduto']);
            $produto_verifica->bindParam(':quantidade',$this->dadosRecebidos['quantidade']);

            $produto_verifica->execute();
            if($produto_verifica->rowCount()){
                return true;
            }else {
                return false;
            }
        }
        public function atualizarEstoque(){
            $this -> conexaoComBanco = $this->conetar();
            $query_produto = "UPDATE produto SET Quantidade = Quantidade - :quantidade WHERE :idProduto";
            $produto_verifica = $this->conexaoComBanco->prepare($query_produto);

            $produto_verifica->bindParam(':idProduto',$this->dadosRecebidos['idProduto']);
            $produto_verifica->bindParam(':quantidade',$this->dadosRecebidos['quantidade']);

            $produto_verifica->execute();
            if($produto_verifica->rowCount()){
                return true;
            }else {
                return false;
            }
        }
    }
?>