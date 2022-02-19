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
    }
?>v